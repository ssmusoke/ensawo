<div class="font-semibold grid grid-cols-6 gap-4 pt-4">
    <div class="col-span-4">
        <x-input.text wire:model="filters.search" placeholder="Search Transactions ..."
                      class="p-2 rounded border"/>
    </div>
    <div class="flex flex-row gap gap-x-2 col-span-2">
        <x-button.secondary wire:click="resetFilters">Reset Filters</x-button.secondary>
        {{--<x-button.link wire:click="exportExcel" class="px-2">
            <x-far-file-excel class="w-6 text-green-700"/>
        </x-button.link>
        <x-button.link wire:click="exportPDF" class="px-2">
            <x-far-file-pdf class="w-6 text-red-600"/>
        </x-button.link>--}}
    </div>
</div>
<div class="grid grid-cols-5 gap-4 pt-4 mb-4">
    <div>
        <x-input.group inline for="filter-start_date" label="From">
            <x-input.date wire:model="filters.start_date" id="filter-start_date" placeholder="MMM DD, YYYY" class="p-2 rounded border w-full"/>
        </x-input.group>
    </div>
    <div>
        <x-input.group inline for="filter-end_date" label="To">
            <x-input.date wire:model="filters.end_date" id="filter-end_date" placeholder="MMM DD, YYYY"
                          class="p-2 rounded border w-full"/>
        </x-input.group>
    </div>
    <div>
        <x-input.group inline paddingless for="filter-network" label="Network">
            <x-input.select wire:model="filters.network" id="filter-network" class="p-2 rounded border w-full">
                <option value="">All</option>
                @foreach(\App\Models\Network::all() as $network)
                    <option value="{{$network->id}}">{{ $network->name }}</option>
                @endforeach
            </x-input.select>
        </x-input.group>
    </div>
    <div>
        <x-input.group inline paddingless for="filter-transaction_type" label="Transaction Type">
            <x-input.select wire:model="filters.transaction_type" id="filter-transaction_type" class="p-2 rounded border w-full">
                <option value="">All</option>
                @foreach(\App\Models\TransactionType::all() as $transaction_type)
                    <option value="{{ $transaction_type->id }}">{{ $transaction_type->name }}</option>
                @endforeach
            </x-input.select>
        </x-input.group>
    </div>
</div>