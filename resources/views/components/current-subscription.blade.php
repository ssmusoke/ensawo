<x-jet-action-section x-show="open_current_subscription">
    <x-slot name="title">
        {{ __('Current Subscription') }}
    </x-slot>
    <x-slot name="description">
    </x-slot>

    <x-slot name="content">
        <div class="mt-10 sm:mt-0" id="current-subscription">
            @php $currentSubscription = Rinvex\Subscriptions\Models\PlanSubscription::ofSubscriber(App\Models\User::find(Auth::user()->id))->first();
            @endphp
            <div class="flex justify-between">
                <h2 class="px-6 pt-4 text-xl font-semibold text-gray-700">
                    {{ $currentSubscription->plan->name }}
                </h2>
            </div>
            <div class="px-6 pb-4">
                <div class="mt-2 text-md font-semibold text-gray-700">
                    <span>{{ Cknow\Money\Money::UGX($currentSubscription->plan->price)->format() }}</span> /
                    {{ $currentSubscription->plan->invoice_interval }} <span
                        class="text-gray-400">(up to {{ $currentSubscription->ends_at->toFormattedDateString() }})</span>
                </div>
                <div class="mt-3 max-w-xl text-sm text-gray-600">
                    {{ $currentSubscription->plan->description }}
                </div>
                <div class="mt-3 space-y-2">
                    <!-- Features -->
                    @foreach($currentSubscription->plan->features as $feature)
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
            <div class="px-6 pb-4 flex flex-row-reverse">
                <button class="px-4 py-2 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest focus:outline-none transition ease-in-out duration-150 mt-4 bg-indigo-500" @click="open_change_subscription = true; open_current_subscription = false">
                    Change Subscription Plan
                </button>
            </div>
        </div>
    </x-slot>
</x-jet-action-section>