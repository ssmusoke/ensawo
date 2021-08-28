<div class="md:grid md:grid-cols-3 md:gap-6" id="change-subscription" x-show="open_change_subscription">
    <x-jet-section-title>
        <x-slot name="title">{{ __('Change Subscription') }}</x-slot>
        <x-slot name="description"></x-slot>
    </x-jet-section-title>

    <div class="mt-5 md:mt-0 md:col-span-2">
        @foreach(Rinvex\Subscriptions\Models\Plan::whereIsActive(1)->get() as $plan)
            <div class="@if ($loop->first) px-4 py-5 sm:p-6 @else mt-6 @endif  bg-white shadow rounded-lg">
                <div class="mt-10 sm:mt-0" id="change-subscription">
                    <div class="flex justify-between">
                        <h2 class="px-6 pt-4 text-xl font-semibold text-gray-700">
                            {{ $plan->name }}
                        </h2>
                    </div>
                    <div class="px-6 pb-4">
                        <div class="mt-2 text-md font-semibold text-gray-700">
                            <span>{{ Cknow\Money\Money::UGX($plan->price)->format() }}</span> /
                            {{ $plan->invoice_interval }}
                        </div>
                        <div class="mt-3 max-w-xl text-sm text-gray-600">
                            {{ $plan->description }}
                        </div>
                        <div class="mt-3 space-y-2">
                            <!-- Features -->
                            @foreach($plan->features as $feature)
                                <div class="flex items-center">
                                    <svg viewBox="0 0 20 20" fill="currentColor"
                                         class="text-indigo-400 opacity-75 w-5 h-5">
                                        <path fill-rule="evenodd"
                                              d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                              clip-rule="evenodd"></path>
                                    </svg>
                                    <div class="ml-2 text-sm text-gray-600">
                                        {{ $feature->description }}
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="px-6 pb-4 flex flex-row-reverse bg-gray-50 rounded-b-lg">
                        @if(App\Models\User::find(Auth::user()->id)->subscribedTo($plan->id))
                            <p class="text-gray-400 px-4 py-2">Already subscribed</p>
                        @else
                            <button
                                class="px-4 py-2 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest focus:outline-none transition ease-in-out duration-150 mt-4 bg-indigo-500">
                                Subscribe
                            </button>
                        @endif
                    </div>
                </div>
            </div>
        @endforeach
        <button class="flex items-center mt-4 px-4 sm:px-8" @click="open_change_subscription = false; open_current_subscription = true">
            <svg viewBox="0 0 20 20" fill="currentColor" class="text-gray-400 w-4 h-4">
                <path fill-rule="evenodd"
                      d="M9.707 16.707a1 1 0 01-1.414 0l-6-6a1 1 0 010-1.414l6-6a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l4.293 4.293a1 1 0 010 1.414z"
                      clip-rule="evenodd"></path>
            </svg>
            <div class="ml-2 text-sm text-gray-600 underline">
                Nevermind, I'll keep my old plan
            </div>
        </button>
    </div>
</div>