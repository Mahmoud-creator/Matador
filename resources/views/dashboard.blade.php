<x-app-layout>
    <section class="container px-6 space-y-8 mx-auto pt-4">
        <div class="section flex flex-row justify-between">
            <x-search-input class="flex-1" />
        </div>
        <div class="section flex flex-row justify-evenly">
            <div class="flex flex-col gap-2">
                <div class="flex-1">
                    <img src="{{ asset('storage/categories/category-1.jpg') }}" class="object-center object-cover w-20 h-20 rounded-full" alt="">
                </div>
                <div class="col-span-2 flex-shrink-0 text-center">
                    <h3 class="text-sm">Steak</h3>
                </div>
            </div>
            <div class="flex flex-col gap-2">
                <div class="flex-1">
                    <img src="{{ asset('storage/categories/category-2.jpg') }}" class="object-center object-cover w-20 h-20 rounded-full" alt="">
                </div>
                <div class="col-span-2 flex-shrink-0 text-center">
                    <h3 class="text-sm">Sandwich</h3>
                </div>
            </div>
            <div class="flex flex-col gap-2">
                <div class="flex-1">
                    <img src="{{ asset('storage/categories/category-3.jpg') }}" class="object-center object-cover w-20 h-20 rounded-full" alt="">
                </div>
                <div class="col-span-2 flex-shrink-0 text-center">
                    <h3 class="text-sm">Pasta</h3>
                </div>
            </div>
        </div>
        <div class="section space-y-2">
            <h2 class="text-md font-semibold text-gray-900">Today's Special</h2>
            <div class="bg-white rounded-md p-4 flex gap-2">
                <div class="flex-1 flex-shrink-0">
                    <img src="{{ asset('storage/special.jpg') }}" class="object-cover object-center w-36 h-28 rounded-md" alt="">
                </div>
                <div class="flex-1 flex flex-col justify-between">
                    <div class="flex-grow">
                        <div class="flex justify-between items-center">
                            <h3 class="text-sm font-semibold text-gray-900">Special Sandwich</h3>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z" />
                            </svg>
                        </div>
                        <p class="text-xs font-medium text-gray-500">With cheese</p>
                    </div>
                    <div>
                        <p class="text-xs font-semibold text-gray-500">30 min</p>
                        <div class="flex justify-between items-center">
                            <div>
                                <p class="text-sm font-semibold text-teal-500">$10.00</p>
                            </div>
                            <div>
                                <button class="text-sm bg-teal-500 text-white rounded-md px-2 py-1">Add</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section">
            <div class="grid grid-cols-2 gap-5">
                <div class="flex flex-col rounded-md bg-white">
                    <div class="flex-1">
                        <img src="{{ asset('storage/products/sandwich-1.jpeg') }}" class="object-center object-cover rounded-md" alt="">
                    </div>
                    <div class="pt-2 px-2 pb-1">
                        <h3 class="text-sm font-semibold text-gray-900">Sandwich</h3>
                        <p class="text-xs font-medium text-gray-500">With cheese</p>
                        <div class="flex justify-between items-center">
                            <p class="text-sm font-semibold text-teal-500">$10.00</p>
                            <button class="text-sm bg-teal-500 text-white rounded-md px-2 py-1">Add</button>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col rounded-md bg-white">
                    <div class="flex-1">
                        <img src="{{ asset('storage/products/sandwich-2.jpeg') }}" class="object-center object-cover rounded-md" alt="">
                    </div>
                    <div class="pt-2 px-2 pb-1">
                        <h3 class="text-sm font-semibold text-gray-900">Sandwich</h3>
                        <p class="text-xs font-medium text-gray-500">With cheese</p>
                        <div class="flex justify-between items-center">
                            <p class="text-sm font-semibold text-teal-500">$10.00</p>
                            <button class="text-sm bg-teal-500 text-white rounded-md px-2 py-1">Add</button>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col rounded-md bg-white">
                    <div class="flex-1">
                        <img src="{{ asset('storage/products/sandwich-3.jpeg') }}" class="object-center object-cover rounded-md" alt="">
                    </div>
                    <div class="pt-2 px-2 pb-1">
                        <h3 class="text-sm font-semibold text-gray-900">Sandwich</h3>
                        <p class="text-xs font-medium text-gray-500">With cheese</p>
                        <div class="flex justify-between items-center">
                            <p class="text-sm font-semibold text-teal-500">$10.00</p>
                            <button class="text-sm bg-teal-500 text-white rounded-md px-2 py-1">Add</button>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col rounded-md bg-white">
                    <div class="flex-1">
                        <img src="{{ asset('storage/products/sandwich-4.jpeg') }}" class="object-center object-cover rounded-md" alt="">
                    </div>
                    <div class="pt-2 px-2 pb-1">
                        <h3 class="text-sm font-semibold text-gray-900">Sandwich</h3>
                        <p class="text-xs font-medium text-gray-500">With cheese</p>
                        <div class="flex justify-between items-center">
                            <p class="text-sm font-semibold text-teal-500">$10.00</p>
                            <button class="text-sm bg-teal-500 text-white rounded-md px-2 py-1">Add</button>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col rounded-md bg-white">
                    <div class="flex-1">
                        <img src="{{ asset('storage/products/sandwich-5.jpeg') }}" class="object-center object-cover rounded-md" alt="">
                    </div>
                    <div class="pt-2 px-2 pb-1">
                        <h3 class="text-sm font-semibold text-gray-900">Sandwich</h3>
                        <p class="text-xs font-medium text-gray-500">With cheese</p>
                        <div class="flex justify-between items-center">
                            <p class="text-sm font-semibold text-teal-500">$10.00</p>
                            <button class="text-sm bg-teal-500 text-white rounded-md px-2 py-1">Add</button>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col rounded-md bg-white">
                    <div class="flex-1">
                        <img src="{{ asset('storage/products/sandwich-6.jpeg') }}" class="object-center object-cover rounded-md" alt="">
                    </div>
                    <div class="pt-2 px-2 pb-1">
                        <h3 class="text-sm font-semibold text-gray-900">Sandwich</h3>
                        <p class="text-xs font-medium text-gray-500">With cheese</p>
                        <div class="flex justify-between items-center">
                            <p class="text-sm font-semibold text-teal-500">$10.00</p>
                            <button class="text-sm bg-teal-500 text-white rounded-md px-2 py-1">Add</button>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col rounded-md bg-white">
                    <div class="flex-1">
                        <img src="{{ asset('storage/products/sandwich-7.jpeg') }}" class="object-center object-cover rounded-md" alt="">
                    </div>
                    <div class="pt-2 px-2 pb-1">
                        <h3 class="text-sm font-semibold text-gray-900">Sandwich</h3>
                        <p class="text-xs font-medium text-gray-500">With cheese</p>
                        <div class="flex justify-between items-center">
                            <p class="text-sm font-semibold text-teal-500">$10.00</p>
                            <button class="text-sm bg-teal-500 text-white rounded-md px-2 py-1">Add</button>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col rounded-md bg-white">
                    <div class="flex-1">
                        <img src="{{ asset('storage/products/sandwich-8.jpeg') }}" class="object-center object-cover rounded-md" alt="">
                    </div>
                    <div class="pt-2 px-2 pb-1">
                        <h3 class="text-sm font-semibold text-gray-900">Sandwich</h3>
                        <p class="text-xs font-medium text-gray-500">With cheese</p>
                        <div class="flex justify-between items-center">
                            <p class="text-sm font-semibold text-teal-500">$10.00</p>
                            <button class="text-sm bg-teal-500 text-white rounded-md px-2 py-1">Add</button>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col rounded-md bg-white">
                    <div class="flex-1">
                        <img src="{{ asset('storage/products/sandwich-9.jpeg') }}" class="object-center object-cover rounded-md" alt="">
                    </div>
                    <div class="pt-2 px-2 pb-1">
                        <h3 class="text-sm font-semibold text-gray-900">Sandwich</h3>
                        <p class="text-xs font-medium text-gray-500">With cheese</p>
                        <div class="flex justify-between items-center">
                            <p class="text-sm font-semibold text-teal-500">$10.00</p>
                            <button class="text-sm bg-teal-500 text-white rounded-md px-2 py-1">Add</button>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col rounded-md bg-white">
                    <div class="flex-1">
                        <img src="{{ asset('storage/products/sandwich-10.jpeg') }}" class="object-center object-cover rounded-md" alt="">
                    </div>
                    <div class="pt-2 px-2 pb-1">
                        <h3 class="text-sm font-semibold text-gray-900">Sandwich</h3>
                        <p class="text-xs font-medium text-gray-500">With cheese</p>
                        <div class="flex justify-between items-center">
                            <p class="text-sm font-semibold text-teal-500">$10.00</p>
                            <button class="text-sm bg-teal-500 text-white rounded-md px-2 py-1">Add</button>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col rounded-md bg-white">
                    <div class="flex-1">
                        <img src="{{ asset('storage/products/sandwich-11.jpeg') }}" class="object-center object-cover rounded-md" alt="">
                    </div>
                    <div class="pt-2 px-2 pb-1">
                        <h3 class="text-sm font-semibold text-gray-900">Sandwich</h3>
                        <p class="text-xs font-medium text-gray-500">With cheese</p>
                        <div class="flex justify-between items-center">
                            <p class="text-sm font-semibold text-teal-500">$10.00</p>
                            <button class="text-sm bg-teal-500 text-white rounded-md px-2 py-1">Add</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
{{--    Create space for footer of height 200px--}}
    <div style="height: 200px"></div>
</x-app-layout>
