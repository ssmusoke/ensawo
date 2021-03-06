<div class="flex items-center justify-center">
    <button type="button"
            class="inline-flex flex-no-wrap items-center px-4 py-2 border border-transparent text-base leading-6 font-medium rounded-md text-white bg-indigo-500 hover:bg-indigo-500 transition ease-in-out duration-150 cursor-not-allowed m-4"
            wire:loading.flex @isset($target) wire:target="{{ $target }}"@endisset>
        <svg class="animate-spin -ml-1 mr-3 h-16 w-16 text-white" xmlns="http://www.w3.org/2000/svg" fill="none"
             viewBox="0 0 24 24">
            <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
            <path class="opacity-75" fill="currentColor"
                  d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
        </svg>
        <p>Processing your Mobile Money SMS message, please wait...</p>
    </button>
</div>