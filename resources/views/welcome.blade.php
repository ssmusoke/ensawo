<x-guest-layout>
    <div class="bg-white">
        <main>
            <div class="pt-8 sm:pt-12 lg:relative lg:py-12">
                <div
                    class="mx-auto max-w-md px-4 sm:max-w-3xl sm:px-6 lg:px-8 lg:max-w-7xl lg:grid lg:grid-cols-2 lg:gap-4">
                    <div>
                        <div>
                            <img class="h-48 w-auto" src="{{asset('img/ensawo-logo.png')}}" alt="Ensawo">
                        </div>
                        <div class="mt-20">
                            <div>
                                <a href="#" class="inline-flex space-x-4">
                <span
                    class="rounded bg-indigo-50 px-2.5 py-1 text-xs font-semibold text-indigo-500 tracking-wide uppercase">
                  What's new
                </span>
                                    <span
                                        class="inline-flex items-center text-sm font-medium text-indigo-500 space-x-1">
                  <span>Just launched</span>
                                        <x-heroicon-s-chevron-right class="h-5 w-5"/>
                </span>
                                </a>
                            </div>
                            <div class="mt-6 sm:max-w-xl">
                                <h1 class="text-4xl font-extrabold text-gray-900 tracking-tight sm:text-5xl">
                                    Simplified expense tracking for you and me
                                </h1>
                                <p class="mt-6 text-xl text-gray-500">
                                    Transaction notifications are usually sent via SMS messages making it difficult to
                                    keep and track them.
                                </p>
                                <p class="mt-6 text-xl text-gray-500">Ensawo simplifies this process...</p>
                                <ol class="list-decimal mt-6 ml-6 text-gray-500">
                                    <li>Copy your transaction message and paste it here</li>
                                    <li>Analyse the message</li>
                                    <li>File and categorize the message</li>
                                </ol>

                            </div>
                        </div>
                    </div>
                    <div class="sm:mx-auto sm:max-w-3xl sm:px-6 bg-gray-50 rounded-xl">
                        <livewire:message-to-transaction-component/>
                    </div>
                </div>
            </div>

            <!-- Testimonial/stats section -->
            <div class="relative" id="testimonial" name="testimonial">
                <div class="lg:mx-auto lg:max-w-7xl lg:px-8 lg:grid lg:grid-cols-2 lg:gap-24 lg:items-start">
                    <div class="relative sm:py-16 lg:py-0">
                        <div aria-hidden="true" class="hidden sm:block lg:absolute lg:inset-y-0 lg:right-0 lg:w-screen">
                            <div class="absolute inset-y-0 right-1/2 w-full bg-gray-50 rounded-r-3xl lg:right-72"></div>
                            <svg class="absolute top-8 left-1/2 -ml-3 lg:-right-8 lg:left-auto lg:top-12" width="404"
                                 height="392" fill="none" viewBox="0 0 404 392">
                                <defs>
                                    <pattern id="02f20b47-fd69-4224-a62a-4c9de5c763f7" x="0" y="0" width="20"
                                             height="20" patternUnits="userSpaceOnUse">
                                        <rect x="0" y="0" width="4" height="4" class="text-gray-200"
                                              fill="currentColor"/>
                                    </pattern>
                                </defs>
                                <rect width="404" height="392" fill="url(#02f20b47-fd69-4224-a62a-4c9de5c763f7)"/>
                            </svg>
                        </div>
                        <div class="relative mx-auto max-w-md px-4 sm:max-w-3xl sm:px-6 lg:px-0 lg:max-w-none lg:py-20">
                            <!-- Testimonial card-->
                            <div class="relative pt-64 pb-10 rounded-2xl shadow-xl overflow-hidden">
                                <img class="absolute inset-0 h-full w-full object-cover"
                                     src="https://images.unsplash.com/photo-1521510895919-46920266ddb3?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&fp-x=0.5&fp-y=0.6&fp-z=3&width=1440&height=1440&sat=-100"
                                     alt="">
                                <div class="absolute inset-0 bg-indigo-500 mix-blend-multiply"></div>
                                <div
                                    class="absolute inset-0 bg-gradient-to-t from-indigo-600 via-indigo-600 opacity-90"></div>
                                <div class="relative px-8">
                                    <div>
                                        <x-zondicon-chart class="h-12 text-white"/>
                                    </div>
                                    <blockquote class="mt-8">
                                        <div class="relative text-lg font-medium text-white md:flex-grow">
                                            <svg
                                                class="absolute top-0 left-0 transform -translate-x-3 -translate-y-2 h-8 w-8 text-indigo-400"
                                                fill="currentColor" viewBox="0 0 32 32" aria-hidden="true">
                                                <path
                                                    d="M9.352 4C4.456 7.456 1 13.12 1 19.36c0 5.088 3.072 8.064 6.624 8.064 3.36 0 5.856-2.688 5.856-5.856 0-3.168-2.208-5.472-5.088-5.472-.576 0-1.344.096-1.536.192.48-3.264 3.552-7.104 6.624-9.024L9.352 4zm16.512 0c-4.8 3.456-8.256 9.12-8.256 15.36 0 5.088 3.072 8.064 6.624 8.064 3.264 0 5.856-2.688 5.856-5.856 0-3.168-2.304-5.472-5.184-5.472-.576 0-1.248.096-1.44.192.48-3.264 3.456-7.104 6.528-9.024L25.864 4z"/>
                                            </svg>
                                            <p class="relative">
                                                Tracking payments and receipts is the most important, tedious and error
                                                prone part of my job. SMS messages are only good for immediate
                                                transaction confirmation, then it becomes a burden. Ensawo removes all
                                                the pressure of trying to find the details later.
                                            </p>
                                        </div>

                                        <footer class="mt-4">
                                            <p class="text-base font-semibold text-indigo-200">Stella Namyalo,
                                                Operations Manager</p>
                                        </footer>
                                    </blockquote>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="relative mx-auto max-w-md px-4 sm:max-w-3xl sm:px-6 lg:px-0">
                        <!-- Content area -->
                        <div class="pt-12 sm:pt-16 lg:pt-20">
                            <h2 class="text-3xl text-gray-900 font-extrabold tracking-tight sm:text-4xl">
                                Taking back control of your transactions
                            </h2>
                            <div class="mt-6 text-gray-500 space-y-6">
                                <p class="text-lg">
                                    Digital transactions have overtaken cash for many business operations given the ease
                                    of payments across mobile money, banking agents and direct bank channels.
                                </p>
                                <p class="text-base leading-7">
                                    Each transaction leaves a trail usually an SMS or email message, which may be
                                    deleted, discarded and usually forgotten until needed.
                                </p>
                                <p class="text-base leading-7">
                                    Trying to find a payment across the multitude of messages is usually an exercise in
                                    futility. This is value that Enaswo brings, a digital location to store your
                                    message, break it down into relatable parts, organize and categorize the transaction
                                    (Pro), share it when needed (Pro)
                                </p>
                                <p class="text-base leading-7">
                                    Ensawo works across mobile money message (at launch) with a plan to add bank
                                    transaction notifications followed by other
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Logo cloud section -->
            <div class="mt-8" id="service-providers">
                <div class="mx-auto max-w-md px-4 sm:max-w-3xl sm:px-6 lg:px-8 lg:max-w-7xl">
                    <div class="lg:grid lg:grid-cols-2 lg:gap-24 lg:items-center">
                        <div>
                            <h2 class="text-3xl font-extrabold text-gray-900 tracking-tight sm:text-4xl">
                                Supported Service Providers
                            </h2>
                            <p class="mt-6 max-w-3xl text-lg leading-7 text-gray-500">
                                Transaction notification messages come in many different formats and keep changing over
                                time, so we are expanding our coverage as fast as we can across the country
                            </p>
                            <div class="mt-6">
                                <a href="#" class="text-base font-medium text-indigo-500">
                                    We currently support messages from the following service providers &nbsp&rarr;
                                </a>
                            </div>
                        </div>
                        <div class="mt-12 grid grid-cols-2 gap-0.5 md:grid-cols-3 lg:mt-0 lg:grid-cols-2">
                            <div class="col-span-1 flex justify-center py-8 px-8 bg-gray-50">
                                <img class="max-h-12"
                                     src="{{ asset('img/airtel-money.png') }}"
                                     alt="Airtel Money">
                            </div>

                            <div class="col-span-1 flex justify-center py-8 px-8 bg-gray-50">
                                <img class="max-h-12" src="{{ asset('img/mtn-mobile-money.png') }}"
                                     alt="MTN Mobile Money">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

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
                                    <li class="flex items-center space-x-2">
                                        <svg class="flex-shrink-0 text-blue-500 w-7 h-7"
                                             xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                  stroke-width="1.5"
                                                  d="M5.75 12.8665L8.33995 16.4138C9.15171 17.5256 10.8179 17.504 11.6006 16.3715L18.25 6.75"/>
                                        </svg>
                                        <p>Dashboard and analytics</p>
                                    </li>
                                    <li class="flex items-center space-x-2">
                                        <svg class="flex-shrink-0 text-blue-500 w-7 h-7"
                                             xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                  stroke-width="1.5"
                                                  d="M5.75 12.8665L8.33995 16.4138C9.15171 17.5256 10.8179 17.504 11.6006 16.3715L18.25 6.75"/>
                                        </svg>
                                        <p>Download messages into Excel</p>
                                    </li>
                                    <li class="flex items-center space-x-2">
                                        <svg class="flex-shrink-0 text-blue-500 w-7 h-7"
                                             xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                  stroke-width="1.5"
                                                  d="M5.75 12.8665L8.33995 16.4138C9.15171 17.5256 10.8179 17.504 11.6006 16.3715L18.25 6.75"/>
                                        </svg>
                                        <p>Edit transaction details</p>
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
                                            <p>Add categories to messages</p>
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
                                        <p>Analytics by phone number</p>
                                    </li>
                                    <li class="flex items-center space-x-2">
                                        <svg class="flex-shrink-0 text-blue-500 w-7 h-7"
                                             xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                  stroke-width="1.5"
                                                  d="M5.75 12.8665L8.33995 16.4138C9.15171 17.5256 10.8179 17.504 11.6006 16.3715L18.25 6.75"/>
                                        </svg>
                                        <p>Set transaction notification thresholds</p>
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
        </main>

        <!-- Footer section -->
        <footer class="mt-24 bg-gray-900 sm:mt-12">
            <div class="mx-auto max-w-md py-12 px-4 overflow-hidden sm:max-w-3xl sm:px-6 lg:max-w-7xl lg:px-8">
                <nav class="-mx-5 -my-2 flex flex-wrap justify-center" aria-label="Footer">
                    <div class="px-5 py-2">
                        <a href="#" class="text-base text-gray-400 hover:text-gray-300">
                            About
                        </a>
                    </div>

                    <div class="px-5 py-2">
                        <a href="#" class="text-base text-gray-400 hover:text-gray-300">
                            Blog
                        </a>
                    </div>

                    <div class="px-5 py-2">
                        <a href="#" class="text-base text-gray-400 hover:text-gray-300">
                            Jobs
                        </a>
                    </div>

                    <div class="px-5 py-2">
                        <a href="#" class="text-base text-gray-400 hover:text-gray-300">
                            Press
                        </a>
                    </div>

                    <div class="px-5 py-2">
                        <a href="#" class="text-base text-gray-400 hover:text-gray-300">
                            Accessibility
                        </a>
                    </div>

                    <div class="px-5 py-2">
                        <a href="#" class="text-base text-gray-400 hover:text-gray-300">
                            Partners
                        </a>
                    </div>
                </nav>
                <div class="mt-8 flex justify-center space-x-6">
                    <a href="https://www.facebook.com/profile.php?id=100071841713976" class="text-gray-400 hover:text-gray-300" target="_blank">
                        <span class="sr-only">Facebook</span>
                        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path fill-rule="evenodd"
                                  d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"
                                  clip-rule="evenodd"/>
                        </svg>
                    </a>
                    <a href="https://twitter.com/ensawo" class="text-gray-400 hover:text-gray-300"  target="_blank">
                        <span class="sr-only">Twitter</span>
                        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path
                                d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84"/>
                        </svg>
                    </a>
                </div>
                <p class="mt-8 text-center text-base text-gray-400">
                    &copy; @php echo date('Y') @endphp <a href="https://styxtechgroup.com" title="Styx Technology Group">Styx Technology Group</a>. All rights reserved.
                </p>
            </div>
        </footer>
    </div>
</x-guest-layout>