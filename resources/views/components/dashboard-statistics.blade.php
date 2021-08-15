<div class="py-4">
    <h3 class="text-lg leading-6 font-medium text-gray-900">
        Transaction Overview
    </h3>
    <dl class="mt-5 grid grid-cols-1 gap-5 sm:grid-cols-3">
        <div class="px-4 py-5 bg-white shadow rounded-lg overflow-hidden sm:p-6">
            <dt class="text-sm font-medium text-gray-500 truncate">
                Transaction Count
            </dt>
            <dd class="mt-1 text-3xl font-semibold text-gray-900">
                {{ $total_transactions }}
            </dd>
        </div>

        <div class="px-4 py-5 bg-white shadow rounded-lg overflow-hidden sm:p-6">
            <dt class="text-sm font-medium text-gray-500 truncate">
                Amount Received
            </dt>
            <dd class="mt-1 text-3xl font-semibold text-gray-900">
                {{ $amount_in }}
            </dd>
        </div>

        <div class="px-4 py-5 bg-white shadow rounded-lg overflow-hidden sm:p-6">
            <dt class="text-sm font-medium text-gray-500 truncate">
                Amount Paid/Sent
            </dt>
            <dd class="mt-1 text-3xl font-semibold text-gray-900">
                {{ $amount_out }}
            </dd>
        </div>
    </dl>
</div>