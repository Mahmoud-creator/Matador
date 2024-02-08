<div class="relative rounded-md shadow-sm {{ $class }}">
    <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3 md:pl-6">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 md:w-8 md:h-8 text-gray-500 sm:text-sm">
            <path stroke-linecap="round" stroke-linejoin="round" d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
        </svg>
    </div>
    <input type="text"
           name="price"
           id="price"
           class="block w-full rounded-md border-0 py-1.5 pl-10 pr-20 md:py-4 md:pl-20 md:pr-20 text-gray-900 ring-1 ring-inset ring-gray-100 placeholder:text-gray-400 focus:ring-1 focus:ring-inset focus:ring-teal-400 text-sm leading-6 md:text-lg md:leading-10"
           placeholder="{{ __('Search products') }}">
</div>
