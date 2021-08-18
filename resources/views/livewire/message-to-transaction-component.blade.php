<div class="">
    <div class="py-4">
        <label for="message">Paste your Mobile Money SMS message below</label>
        <textarea id="message" name="message" rows="5"
                  class="mb-4 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border border-gray-300 rounded-md"
                  wire:model.defer="message"
                  placeholder="Paste your Mobile Money SMS message here"></textarea>
        <div>
            @error('message')
            <div class="rounded-md bg-red-50 p-4">
                <div class="flex">
                    <div class="flex-shrink-0">
                        <div class="flex-shrink-0">
                            <x-heroicon-s-x-circle class="h-5 w-5 text-red-400"/>
                        </div>
                    </div>
                    <div class="ml-3">
                        <p class="text-sm font-medium text-red-800">
                            There were errors with your submission
                        </p>
                        <div class="mt-2 text-sm text-red-700">
                            {{ $message }}
                        </div>
                    </div>
                </div>
            </div>
            @enderror
            @error('unknown_message_format')
            <div class="rounded-md bg-red-50 p-4">
                <div class="flex">
                    <div class="flex-shrink-0">
                        <x-heroicon-s-x-circle class="h-5 w-5 text-red-400"/>
                    </div>
                    <div class="ml-3 flex-1 md:flex md:justify-between">
                        <p class="text-sm text-red-800 whitespace-nowrap">
                            {{ $errors->first('unknown_message_format') }}
                        </p>
                        <p class="mt-3 text-sm md:mt-0 md:ml-6">
                            <a href="{{ route('contact-us') }}"
                               class="whitespace-nowrap font-medium text-blue-700 hover:text-blue-600">Share
                                message
                                <span aria-hidden="true">&rarr;</span></a>
                        </p>
                    </div>
                </div>
            </div>
            @enderror
        </div>
        <div class="flex justify-between py-2">
            <button id="analyze" name="analyze" type="button"
                    class="inline-flex items-center px-4 py-2 border border-transparent shadow-sm text-base no-underline font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                    wire:click="processMessage">

                Process Message
                <x-heroicon-o-lightning-bolt class="ml-3 -mr-1 h-5 w-5"/>
            </button>
            <!-- hide the save button for logged in users since the transactions are automatically linked -->
            @guest
                @isset($transaction)
                    <a href="{{ route("link-transaction-to-user", ["uuid" => $transaction->uuid ]) }}"
                       class="no-underline inline-flex items-center px-4 py-2 border border-transparent shadow-sm text-base font-medium rounded-md text-white bg-green-500 hover:bg-green-300 hover:no-underline focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-300 focus:no-underline">
                        Save Message
                        <x-heroicon-o-save class="ml-3 -mr-1 h-5 w-5 text-white"/>
                    </a>
                @endisset
            @endguest
        </div>
    </div>
    <x-loading-indicator target="processMessage"/>
    <!-- Display the transaction details -->
    @isset($transaction)
        <div class="bg-white shadow overflow-hidden sm:rounded-lg" wire:loading.remove>
            <div class="px-4 py-2 sm:px-6">
                <h3 class="text-lg leading-6 font-medium text-gray-900">
                    Transaction Details
                </h3>
                <p class="mt-1 max-w-2xl text-sm text-gray-500">
                    Detailed breakdown of your transaction message
                </p>
            </div>
            <div class="border-t border-gray-200 px-4 py-5 sm:p-0">
                <dl class="sm:divide-y sm:divide-gray-200">
                    <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">
                            Transaction Type
                        </dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                            {{ $transaction->transactionType->name }}
                        </dd>
                    </div>
                    <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">
                            Network
                        </dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                            {{ $transaction->network->name }}
                        </dd>
                    </div>
                    <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">
                            Amount
                        </dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                            {{ $transaction->amount_display }}
                        </dd>
                    </div>
                    @isset($transaction->agent_id)
                        <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-sm font-medium text-gray-500">
                                Agent ID
                            </dt>
                            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                {{ $transaction->agent_id }}
                            </dd>
                        </div>
                    @endisset
                    @isset($transaction->agent_name)
                        <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-sm font-medium text-gray-500">
                                Agent Name
                            </dt>
                            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                {{ $transaction->agent_name }}
                            </dd>
                        </div>
                    @endisset
                    @isset($transaction->agent_number)
                        <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-sm font-medium text-gray-500">
                                Agent Number
                            </dt>
                            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                {{ $transaction->agent_number }}
                            </dd>
                        </div>
                    @endisset
                    @isset($transaction->balance)
                        <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-sm font-medium text-gray-500">
                                Balance
                            </dt>
                            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                {{ $transaction->balance_display }}
                            </dd>
                        </div>
                    @endisset
                    @isset($transaction->txn_id)
                        <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-sm font-medium text-gray-500">
                                Transaction ID
                            </dt>
                            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                {{ $transaction->txn_id }}
                            </dd>
                        </div>
                    @endisset
                    @isset($transaction->txn_date)
                        <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-sm font-medium text-gray-500">
                                Transaction Date
                            </dt>
                            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                {{ $transaction->txn_date?->toDayDateTimeString() }}
                            </dd>
                        </div>
                    @endisset
                    @isset($transaction->fee)
                        <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-sm font-medium text-gray-500">
                                Transaction Fee
                            </dt>
                            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">

                                {{ $transaction->fee_display }}
                            </dd>
                        </div>
                    @endisset
                    @isset($transaction->tax)
                        <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-sm font-medium text-gray-500">
                                Tax
                            </dt>
                            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                {{ $transaction->tax_display }}
                            </dd>
                        </div>
                    @endisset
                    @isset($transaction->vendor_name)
                        <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-sm font-medium text-gray-500">
                                Vendor Name
                            </dt>
                            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                {{ $transaction->vendor_name }}
                            </dd>
                        </div>
                    @endisset
                    @isset($transaction->sender_number)
                        <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-sm font-medium text-gray-500">
                                Sender Number
                            </dt>
                            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                {{ $transaction->sender_number }}
                            </dd>
                        </div>
                    @endisset
                    @isset($transaction->sender_name)
                        <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-sm font-medium text-gray-500">
                                Sender Name
                            </dt>
                            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                {{ $transaction->sender_name }}
                            </dd>
                        </div>
                    @endisset
                    @isset($transaction->sender_account_number)
                        <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-sm font-medium text-gray-500">
                                Sender Account Number
                            </dt>
                            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                {{ $transaction->sender_account_number }}
                            </dd>
                        </div>
                    @endisset
                    @isset($transaction->recipient_number)
                        <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-sm font-medium text-gray-500">
                                Recipient Number
                            </dt>
                            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                {{ $transaction->recipient_number }}
                            </dd>
                        </div>
                    @endisset
                    @isset($transaction->reason)
                        <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-sm font-medium text-gray-500">
                                Reason
                            </dt>
                            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                {{ $transaction->reason }}
                            </dd>
                        </div>
                    @endisset
                </dl>
            </div>
        </div>
    @endisset
</div>