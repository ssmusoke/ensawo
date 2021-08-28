<!-- Pricing -->
<div class="mt-8" name="pricing" id="pricing">
    <div class="mx-auto max-w-md px-4 sm:max-w-3xl sm:px-6 lg:px-8 lg:max-w-7xl">
        <div class="max-w-6xl mx-auto">
            <h2 class="text-3xl font-extrabold text-gray-900 tracking-tight sm:text-4xl">
                Pricing Plans
            </h2>
            <p class="text-xl text-gray-500">
                Start free, grow as you need
            </p>
            <div class="mt-4 grid items-start gap-8 md:grid-cols-3">
                <div class="flex flex-col p-8 space-y-6 bg-white border rounded-2xl">
                    <header class="space-y-4">
                        <h2 class="text-2xl font-semibold tracking-tight">Solo</h2>

                        <div class="flex items-end">
                            <p class="text-5xl font-semibold tracking-tight">Free</p>
                            <p class="text-lg text-gray-500"></p>
                        </div>

                        <p class="text-gray-600">
                            Just get started and use for ever
                        </p>
                    </header>

                    <div class="border-t"></div>

                    <ul class="space-y-3 font-medium">
                        <li class="flex items-center space-x-2">
                            <svg class="flex-shrink-0 text-blue-500 w-7 h-7"
                                 xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                      stroke-width="1.5"
                                      d="M5.75 12.8665L8.33995 16.4138C9.15171 17.5256 10.8179 17.504 11.6006 16.3715L18.25 6.75"/>
                            </svg>
                            <p>{{ config('ensawo.free_transactions_count') }} Transactions</p>
                        </li>
                    </ul>

                    <button
                        class="inline-flex items-center justify-center px-4 font-semibold tracking-tight text-white transition bg-blue-600 rounded-lg shadow h-9 hover:bg-blue-500 focus:bg-blue-700 focus:outline-none focus:ring-offset-2 focus:ring-offset-blue-700 focus:ring-2 focus:ring-white focus:ring-inset"
                        type="button">Select plan
                    </button>
                </div>

                <div class="relative overflow-hidden">
                    <div
                        class="absolute inset-0 rounded-2xl bg-gradient-to-br from-blue-200 via-pink-200 to-blue-400">
                    </div>

                    <div
                        class="relative flex flex-col p-8 space-y-6 border bg-white/50 backdrop-blur-xl backdrop-saturate-150 rounded-2xl">
                        <header class="space-y-4">
                            <div class="flex items-center justify-between">
                                <h2 class="text-2xl font-semibold tracking-tight">Pro</h2>

                                <span
                                    class="inline-flex items-center justify-center h-6 px-2 text-sm font-semibold tracking-tight text-blue-600 bg-white rounded-full shadow-sm">
                                Best pick
                            </span>
                            </div>

                            <div class="flex items-end">
                                <p class="text-5xl font-semibold tracking-tight whitespace-nowrap">UGX 10,000</p>
                                <p class="text-lg opacity-75">/month</p>
                            </div>

                            <p class="opacity-75">
                                All Solo plan features
                            </p>
                        </header>

                        <div class="border-t border-gray-900 opacity-10"></div>

                        <ul class="space-y-3 font-medium">
                            <li class="flex items-center space-x-2">
                                <svg class="flex-shrink-0 text-blue-500 w-7 h-7"
                                     xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-width="1.5"
                                          d="M5.75 12.8665L8.33995 16.4138C9.15171 17.5256 10.8179 17.504 11.6006 16.3715L18.25 6.75"/>
                                </svg>
                                <p>Unlimited transactions</p>
                            </li>
                            <li class="flex items-center space-x-2">
                                <svg class="flex-shrink-0 text-blue-500 w-7 h-7"
                                     xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-width="1.5"
                                          d="M5.75 12.8665L8.33995 16.4138C9.15171 17.5256 10.8179 17.504 11.6006 16.3715L18.25 6.75"/>
                                </svg>
                                <p>10 message categories</p>
                            </li>
                            <li class="flex items-center space-x-2">
                                <svg class="flex-shrink-0 text-blue-500 w-7 h-7"
                                     xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-width="1.5"
                                          d="M5.75 12.8665L8.33995 16.4138C9.15171 17.5256 10.8179 17.504 11.6006 16.3715L18.25 6.75"/>
                                </svg>
                                <p>Add phone numbers for messages</p>
                            </li>
                            <li class="flex items-center space-x-2">
                                <svg class="flex-shrink-0 text-blue-500 w-7 h-7"
                                     xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-width="1.5"
                                          d="M5.75 12.8665L8.33995 16.4138C9.15171 17.5256 10.8179 17.504 11.6006 16.3715L18.25 6.75"/>
                                </svg>
                                <p>Share messages with others</p>
                            </li>
                        </ul>

                        <button
                            class="inline-flex items-center justify-center px-4 font-semibold tracking-tight text-blue-600 transition bg-white rounded-lg shadow h-9 hover:text-blue-500 focus:text-blue-700 focus:outline-none focus:ring-offset-2 focus:ring-offset-white focus:ring-2 focus:ring-blue-600 focus:ring-inset"
                            type="button">Select plan
                        </button>
                    </div>
                </div>

                <div class="flex flex-col p-8 space-y-6 bg-white border rounded-2xl">
                    <header class="space-y-4">
                        <h2 class="text-2xl font-semibold tracking-tight">Business</h2>

                        <div class="flex items-end">
                            <p class="text-5xl font-semibold tracking-tight whitespace-nowrap">UGX 50,000</p>
                            <p class="text-lg text-gray-500">/month</p>
                        </div>

                        <p class="text-gray-600">
                            All Pro plan features
                        </p>
                    </header>

                    <div class="border-t"></div>

                    <ul class="space-y-3 font-medium">
                        <li class="flex items-center space-x-2">
                            <svg class="flex-shrink-0 text-blue-500 w-7 h-7"
                                 xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                      stroke-width="1.5"
                                      d="M5.75 12.8665L8.33995 16.4138C9.15171 17.5256 10.8179 17.504 11.6006 16.3715L18.25 6.75"/>
                            </svg>
                            <p>Unlimited Collaborators</p>
                        </li>
                        <li class="flex items-center space-x-2">
                            <svg class="flex-shrink-0 text-blue-500 w-7 h-7"
                                 xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                      stroke-width="1.5"
                                      d="M5.75 12.8665L8.33995 16.4138C9.15171 17.5256 10.8179 17.504 11.6006 16.3715L18.25 6.75"/>
                            </svg>
                            <p>Unlimited categories</p>
                        </li>
                        <li class="flex items-center space-x-2">
                            <svg class="flex-shrink-0 text-blue-500 w-7 h-7"
                                 xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                      stroke-width="1.5"
                                      d="M5.75 12.8665L8.33995 16.4138C9.15171 17.5256 10.8179 17.504 11.6006 16.3715L18.25 6.75"/>
                            </svg>
                            <p>Transaction notification thresholds</p>
                        </li>
                        <li class="flex items-center space-x-2">
                            <svg class="flex-shrink-0 text-blue-500 w-7 h-7"
                                 xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                      stroke-width="1.5"
                                      d="M5.75 12.8665L8.33995 16.4138C9.15171 17.5256 10.8179 17.504 11.6006 16.3715L18.25 6.75"/>
                            </svg>
                            <p>Email and SMS notifications</p>
                        </li>
                    </ul>

                    <button
                        class="inline-flex items-center justify-center px-4 font-semibold tracking-tight text-white transition bg-blue-600 rounded-lg shadow h-9 hover:bg-blue-500 focus:bg-blue-700 focus:outline-none focus:ring-offset-2 focus:ring-offset-blue-700 focus:ring-2 focus:ring-white focus:ring-inset"
                        type="button">Select plan
                    </button>
                </div>
            </div>
        </div>
    </div>

</div>