<?php

namespace App\Http\Livewire;

use App\Models\Transaction;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithPagination;

class TransactionsComponent extends Component
{

    use WithPagination;

    public array $filters = [
        'start_date' => '',
        'end_date' => '',
        'network' => '',
        'transaction_type' => '',
        'search' => '',
        'number_of_items_per_page' => 5
    ];

    /**
     * Return to the first page results each time the filters are updated, to prevent no results being displayed
     * just because they are not as many as the page being shown
     */
    public function updatedFilters()
    {
        $this->resetPage();
    }

    public function resetFilters()
    {
        $this->reset('filters');
    }

    public function getTransactionQuery() {
        return Transaction::when($this->filters['start_date'], fn($query, $start_date) => $query->where('txn_date', '>=', Carbon::parse($start_date)))
            ->when($this->filters['end_date'], fn($query, $end_date) => $query->where('txn_date', '<=', Carbon::parse($end_date)))
            ->when($this->filters['network'], fn($query, $network) => $query->where('network_id', $network))
            ->when($this->filters['transaction_type'], fn($query, $transaction_type) => $query->where('transaction_type_id', $transaction_type))
            ->when($this->filters['search'], fn($query, $search) =>
            $query->where('sender_name', 'like', '%' . $search . '%')
                ->orWhere('recipient_name', 'like', '%' . $search . '%')
                ->orWhere('vendor_name', 'like', '%' . $search . '%')
            )
            ->where('created_by', Auth::user()->id);
    }

    public function render()
    {
        return view('livewire.transactions-component', [
            'transactions' => $this->getTransactionQuery()->paginate($this->filters['number_of_items_per_page'])
        ]);
    }
}