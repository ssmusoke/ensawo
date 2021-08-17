<x-guest-layout>
    <div class="pt-4 bg-gray-100">
        <div class="min-h-screen flex flex-col items-center pt-6 sm:pt-0">
            <div>
                <x-jet-authentication-card-logo/>
            </div>

            <div class="w-full sm:max-w-2xl mt-6 p-6 bg-white shadow-md overflow-hidden sm:rounded-lg">
                <form method="POST" action="{{ route('contact-us-action') }}">
                    <div class="space-y-8 divide-y divide-gray-200">
                        <div>
                            <div>
                                <h3 class="text-lg leading-6 font-medium text-gray-900">
                                    Get in touch with our team
                                </h3>
                                <p class="mt-1 text-sm text-gray-500">
                                    Let us know how we can be of assistance to you
                                </p>
                            </div>

                            <div class="mt-6 grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-6">
                                <div class="sm:col-span-4">
                                    <label for="name" class="block text-sm font-medium text-gray-700">
                                        Your Names
                                    </label>
                                    <div class="mt-1 flex rounded-md shadow-sm">
                                        <input type="text" required name="name" id="name" value="{{ old('name') }}"
                                               class="flex-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full min-w-0 rounded-md sm:text-sm border-gray-300">
                                        @error('name')
                                        <div class="rounded-md bg-red-50 p-4">
                                            <div class="flex">
                                                <div class="flex-shrink-0">
                                                    <div class="flex-shrink-0">
                                                        <x-heroicon-s-x-circle class="h-5 w-5 text-red-400"/>
                                                    </div>
                                                </div>
                                                <div class="ml-3">
                                                    <div class="mt-2 text-sm text-red-700">
                                                        {{ $message }}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="sm:col-span-4">
                                    <label for="email" class="block text-sm font-medium text-gray-700">
                                        Email Address
                                    </label>
                                    <div class="mt-1 flex rounded-md shadow-sm">
                                        <input type="email" required name="email" id="email" autocomplete="email"
                                               value="{{ old('email') }}"
                                               class="flex-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full min-w-0 rounded-md sm:text-sm border-gray-300">
                                        @error('email')
                                        <div class="rounded-md bg-red-50 p-4">
                                            <div class="flex">
                                                <div class="flex-shrink-0">
                                                    <div class="flex-shrink-0">
                                                        <x-heroicon-s-x-circle class="h-5 w-5 text-red-400"/>
                                                    </div>
                                                </div>
                                                <div class="ml-3">
                                                    <div class="mt-2 text-sm text-red-700">
                                                        {{ $message }}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="sm:col-span-4">
                                    <label for="subject" class="block text-sm font-medium text-gray-700">
                                        Subject
                                    </label>
                                    <div class="mt-1 flex rounded-md shadow-sm">
                                        <input type="text" required name="subject" id="subject"
                                               value="{{ old('subject') }}"
                                               class="flex-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full min-w-0 rounded-md sm:text-sm border-gray-300">
                                        @error('subject')
                                        <div class="rounded-md bg-red-50 p-4">
                                            <div class="flex">
                                                <div class="flex-shrink-0">
                                                    <div class="flex-shrink-0">
                                                        <x-heroicon-s-x-circle class="h-5 w-5 text-red-400"/>
                                                    </div>
                                                </div>
                                                <div class="ml-3">
                                                    <div class="mt-2 text-sm text-red-700">
                                                        {{ $message }}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="sm:col-span-6">
                                    <label for="message" class="block text-sm font-medium text-gray-700">
                                        Message
                                    </label>
                                    <div class="mt-1">
                        <textarea id="message" required name="message" rows="3"
                                  class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border border-gray-300 rounded-md">{{ old('message') }}</textarea>
                                        @error('message')
                                        <div class="rounded-md bg-red-50 p-4">
                                            <div class="flex">
                                                <div class="flex-shrink-0">
                                                    <div class="flex-shrink-0">
                                                        <x-heroicon-s-x-circle class="h-5 w-5 text-red-400"/>
                                                    </div>
                                                </div>
                                                <div class="ml-3">
                                                    <div class="mt-2 text-sm text-red-700">
                                                        {{ $message }}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flex justify-between py-2">
                            <button id="send" name="send" type="submit"
                                    class="inline-flex items-center px-4 py-2 shadow-sm text-base no-underline font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">

                                Talk to Us
                                <x-heroicon-o-mail class="ml-3 -mr-1 h-5 w-5"/>
                            </button>
                            @csrf
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-guest-layout>