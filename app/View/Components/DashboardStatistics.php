<?php

namespace App\View\Components;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\View\Component;

class DashboardStatistics extends Component
{
    public $total_transactions;

    public $amount_in;

    public $amount_out;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        // TODO: add a column to the TransactionType table for inflows and outflows
        // to make it easy to grow this query to additional types without hardcoding
        $statistics = DB::table('transactions')
            ->selectRaw('COUNT(*) as `tx_count`')
            ->selectRaw('SUM(IF(transaction_type_id IN (1,4), amount, 0)) AS `amount_in`')
            ->selectRaw('SUM(IF(transaction_type_id IN (2,3,5), amount, 0)) AS `amount_out`')
            ->where('created_by', Auth::user()->id)->first();

        $this->total_transactions = $statistics->tx_count;
        $this->amount_in = money($statistics->amount_in)->format();
        $this->amount_out = money($statistics->amount_out)->format();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.dashboard-statistics');
    }
}