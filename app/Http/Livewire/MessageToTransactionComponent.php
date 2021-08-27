<?php

namespace App\Http\Livewire;

use App\Actions\ProcessTransactionMessageAction;
use App\Models\Transaction;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Livewire\Component;

class MessageToTransactionComponent extends Component
{
    public $message = "";

    public $transaction;

    public function mount() {
        // expire the cookie that may have been set before
        Cookie::expire('transaction-uuid');
    }

    public function render()
    {
        return view('livewire.message-to-transaction-component');
    }

    protected $rules = [
        'message' => 'required'
    ];

    protected $messages = [
        'message.required' => 'The mobile money SMS message cannot be empty'
    ];

    public function processMessage() {
        // set the transaction to null so that other checks can be empty
        $this->transaction = null;

        $this->validate();
        $processor = new ProcessTransactionMessageAction();
        $results = $processor->execute($this->message);
        // check if the results are well-formed otherwise throw an error
        if (!$results) {
            $this->addError('unknown_message_format', 'The message could not be processed because the format is unknown');
        } else {
            if (Auth::check()) {
                // The user is logged in...
                // set the created by value for the transaction
                $results = Arr::add($results, 'created_by', Auth::user()->id);
            }
            $this->transaction = Transaction::create($results);
        }
    }
}