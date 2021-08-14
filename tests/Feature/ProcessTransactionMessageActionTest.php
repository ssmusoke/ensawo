<?php

use Akaunting\Money\Money;
use App\Actions\ProcessTransactionMessageAction;
use App\Models\Transaction;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

beforeEach(function(){
    $this->processorAction = new ProcessTransactionMessageAction();
});

it('does not process empty message', function () {
    $this->assertEmpty($this->processorAction->execute(""));
});

it('returns empty for a message which is not matched by a template', function () {
    ray($this->processorAction->execute("Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Mauris a diam maecenas sed enim ut sem viverra."));
    expect($this->processorAction->execute("Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Mauris a diam maecenas sed enim ut sem viverra."))->toBeEmpty();
});

it('can process mtn mobile money messages', function($message, $results){
    $transactionData = $this->processorAction->execute($message);
    expect($transactionData)->toMatchArray($results);

    // save the data from the model
    $transaction = Transaction::create($transactionData);
    // now compare the values from the database to those in expected results
    // some transformation has happened so this cannot be array to array comparison
    expect($transaction->amount)->toEqual(Money::UGX($results['amount'])->getValue());
})->with('mobile-money-transaction-messages');