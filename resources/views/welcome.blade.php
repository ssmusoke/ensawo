<x-guest-layout>
    <div class="pt-4 bg-gray-100">
        <div class="min-h-screen flex flex-col items-center pt-6 sm:pt-0">
            <div>
                <x-jet-authentication-card-logo />
            </div>
            <!-- Session alerts -->
            @if (session('status'))
                <x-session-status :status="@session('status')" />
            @endif
            <div class="w-full sm:max-w-2xl mt-6 p-6 bg-white shadow-md overflow-hidden sm:rounded-lg">
                    <livewire:message-to-transaction-component />
            </div>
        </div>
    </div>
</x-guest-layout>