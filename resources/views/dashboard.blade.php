<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <x-dashboard-statistics/>
        <!-- Session alerts -->
        @if (session('status'))
            <x-session-status :status="{{ session('status') }}" />
        @endif
        <livewire:transactions-component/>
    </div>
</x-app-layout>