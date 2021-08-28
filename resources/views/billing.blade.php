<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Billing Management') }}
        </h2>
    </x-slot>

    <div>
        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8" x-data="{open_change_subscription:false, open_current_subscription:true}">
            <x-current-subscription/>
            <x-change-subscription-plan/>
        </div>
    </div>
</x-app-layout>