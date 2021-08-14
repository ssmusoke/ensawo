<div class="">
    <div class="py-4">
        Paste your Mobile Money SMS message below
        <textarea id="message" name="message" rows="5"
                  class="mb-4 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border border-gray-300 rounded-md"
                  wire:model="message"
                  placeholder="Paste your Mobile Money SMS message here"></textarea>
        <div>
            @error('message')
            <p class="inline-flex items-center text-sm text-red-600" id="message-error">
                <x-heroicon-s-exclamation-circle class="h-8"/>
                {{ $message }}
            </p>
            @enderror
        </div>
        <div class="flex justify-between">
            <button id="analyze" name="analyze" type="button"
                    class="inline-flex items-center px-6 py-4 border border-transparent shadow-sm text-base font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                    wire:click="processMessage">

                Process Message
                <x-heroicon-o-lightning-bolt class="ml-3 -mr-1 h-5 w-5"/>
            </button>
            @isset($transaction)
                <button type="button"
                        class="inline-flex items-center ml-6 px-6 py-4 border border-transparent shadow-sm text-base font-medium rounded-md text-white bg-green-500 hover:bg-green-300 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-300">
                    Save Message
                    <x-heroicon-o-save class="ml-3 -mr-1 h-5 w-5"/>
                </button>
            @endisset
        </div>
    </div>
    <x-loading-indicator/>
    <!-- Display the transaction details -->
    @isset($transaction)
        <div class="bg-white shadow overflow-hidden sm:rounded-lg" wire:loading.remove>
            <div class="px-4 py-2 sm:px-6">
                <h3 class="text-lg leading-6 font-medium text-gray-900">
                    Transaction Details
                </h3>
                <p class="mt-1 max-w-2xl text-sm text-gray-500">
                    Detailed breakdown of your mobile money message details
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
                            {{ $transaction->amount }}
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
                                {{ $transaction->balance }}
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

                                {{ $transaction->fee }}
                            </dd>
                        </div>
                    @endisset
                    @isset($transaction->tax)
                        <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-sm font-medium text-gray-500">
                                Tax
                            </dt>
                            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                {{ $transaction->tax }}
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