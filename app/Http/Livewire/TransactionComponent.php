<?php

namespace App\Http\Livewire;

use App\Actions\ProcessTransactionMessageAction;
use App\Models\Transaction;
use Livewire\Component;

class TransactionComponent extends Component
{
    public $message = "";

    public $transaction;

    public function render()
    {
        return view('livewire.transaction-component');
    }

    protected $rules = [
        'message' => 'required'
    ];

    protected $messages = [
        'message.required' => 'The mobile money SMS message cannot be empty'
    ];

    public function processMessage() {
        $this->validate();
        $processor = new ProcessTransactionMessageAction();
        $results = $processor->execute($this->message);
        // check if the results are well formed otherwise throw an error
        if (!$results) {
            $this->addError('message', 'The message could not be processed, confirm that it is a mobile money transaction message');
        } else {
            $this->transaction = Transaction::create($results);
        }
    }
}