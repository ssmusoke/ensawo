<?php

use App\Actions\ProcessTransactionMessageAction;

beforeEach(function(){
    $this->processorAction = new ProcessTransactionMessageAction();
});

it('does not process empty message', function () {
    $this->assertEmpty($this->processorAction->execute(""));
});

it('can process mtn mobile money messages', function($message, $results){
    ray($results);
    ray($this->processorAction->execute($message));
    expect($this->processorAction->execute($message))->toMatchArray($results);
})->with('mobile-money-transaction-messages');
