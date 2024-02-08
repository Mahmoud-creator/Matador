<x-app-layout>
    <section class="container max-w-7xl px-6 space-y-6 md:space-y-12 mx-auto pt-4">
        <div class="section flex flex-row justify-between">
            <x-search-input class="flex-1" />
        </div>
        <div class="section flex flex-row justify-between md:justify-evenly">
            <div class="flex flex-col gap-2 md:gap-4">
                <div class="flex-1">
                    <img src="{{ asset('storage/categories/category-1.jpg') }}" class="shadow-lg object-center object-cover w-16 h-16 md:w-32 md:h-32 rounded-full ring-2 ring-teal-400" alt="">
                </div>
                <div class="col-span-2 flex-shrink-0 text-center text-teal-400">
                    <h3 class="text-sm md:text-xl font-semibold">Steak</h3>
                </div>
            </div>
            <div class="flex flex-col gap-2 md:gap-4">
                <div class="flex-1">
                    <img src="{{ asset('storage/categories/category-2.jpg') }}" class="shadow-lg object-center object-cover w-16 h-16 md:w-32 md:h-32 rounded-full" alt="">
                </div>
                <div class="col-span-2 flex-shrink-0 text-center">
                    <h3 class="text-sm md:text-xl font-semibold">Sandwich</h3>
                </div>
            </div>
            <div class="flex flex-col gap-2 md:gap-4">
                <div class="flex-1">
                    <img src="{{ asset('storage/categories/category-3.jpg') }}" class="shadow-lg object-center object-cover w-16 h-16 md:w-32 md:h-32 rounded-full" alt="">
                </div>
                <div class="col-span-2 flex-shrink-0 text-center">
                    <h3 class="text-sm md:text-xl font-semibold">Pasta</h3>
                </div>
            </div>
            <div class="flex flex-col gap-2 md:gap-4">
                <div class="flex-1">
                    <img src="{{ asset('storage/matador-logo.png') }}" class="shadow-lg object-center object-cover w-16 h-16 md:w-32 md:h-32 rounded-full ring-1 ring-teal-400" alt="">
                </div>
                <div class="col-span-2 flex-shrink-0 text-center">
                    <h3 class="text-sm md:text-xl font-semibold">Special</h3>
                </div>
            </div>
        </div>

        <div class="section space-y-2 md:space-y-4">
            <h2 class="text-md md:text-xl font-semibold text-gray-900 pl-2 md:pl-4">Today's Special</h2>
            <div class="bg-white rounded-md p-2 md:p-4 flex gap-2 md:gap-6 shadow-md">
                <div class="flex-1 flex-shrink-0">
                    <a data-modal-target="productModal" data-modal-toggle="productModal" type="button">
                        <img src="{{ asset('storage/special.jpg') }}" class="object-cover object-center w-36 h-28 md:w-96 md:h-60 rounded-md" alt="">
                    </a>
                </div>
                <div class="flex-1 flex flex-col justify-between">
                    <div class="flex-grow">
                        <div class="flex justify-between items-center">
                            <h3 class="text-sm md:text-xl font-semibold text-gray-900">Special Sandwich</h3>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z" />
                            </svg>
                        </div>
                        <p class="text-xs md:text-lg font-medium text-gray-500">With cheese</p>
                    </div>
                    <div>
                        <p class="text-xs md:text-lg font-semibold text-gray-500">30 min</p>
                        <div class="flex justify-between items-center">
                            <div>
                                <p class="text-sm md:text-xl font-semibold text-teal-500">$10.00</p>
                            </div>
                            <div>
                                <button class="text-sm md:text-xl bg-teal-500 text-white rounded-md px-2 py-1 md:px-4 md:py-2">Add</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section">
            <h2 class="text-md md:text-xl font-semibold text-gray-900 pl-2 md:pl-4 mb-2 md:mb-6">Choose your meal</h2>
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-5 md:gap-8">
                <div class="flex flex-col rounded-md bg-white shadow-md">
                    <div class="flex-1">
                        <img src="{{ asset('storage/products/sandwich-1.jpeg') }}" class="object-center object-cover rounded-md" alt="">
                    </div>
                    <div class="pt-2 px-2 pb-1 md:pt-4 md:px-4 md:pb-2">
                        <h3 class="text-sm md:text-xl md:text-lg font-semibold text-gray-900">Sandwich</h3>
                        <p class="text-xs md:text-lg font-medium text-gray-500">With cheese</p>
                        <div class="flex justify-between items-center">
                            <p class="text-sm md:text-xl font-semibold text-teal-500">$10.00</p>
                            <button class="text-sm md:text-xl bg-teal-500 text-white rounded-md px-2 py-1 md:px-4 md:py-2">Add</button>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col rounded-md bg-white shadow-md">
                    <div class="flex-1">
                        <img src="{{ asset('storage/products/sandwich-2.jpeg') }}" class="object-center object-cover rounded-md" alt="">
                    </div>
                    <div class="pt-2 px-2 pb-1 md:pt-4 md:px-4 md:pb-2">
                        <h3 class="text-sm md:text-xl font-semibold text-gray-900">Sandwich</h3>
                        <p class="text-xs md:text-lg font-medium text-gray-500">With cheese</p>
                        <div class="flex justify-between items-center">
                            <p class="text-sm md:text-xl font-semibold text-teal-500">$10.00</p>
                            <button class="text-sm md:text-xl bg-teal-500 text-white rounded-md px-2 py-1 md:px-4 md:py-2">Add</button>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col rounded-md bg-white shadow-md">
                    <div class="flex-1">
                        <img src="{{ asset('storage/products/sandwich-3.jpeg') }}" class="object-center object-cover rounded-md" alt="">
                    </div>
                    <div class="pt-2 px-2 pb-1 md:pt-4 md:px-4 md:pb-2">
                        <h3 class="text-sm md:text-xl font-semibold text-gray-900">Sandwich</h3>
                        <p class="text-xs md:text-lg font-medium text-gray-500">With cheese</p>
                        <div class="flex justify-between items-center">
                            <p class="text-sm md:text-xl font-semibold text-teal-500">$10.00</p>
                            <button class="text-sm md:text-xl bg-teal-500 text-white rounded-md px-2 py-1 md:px-4 md:py-2">Add</button>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col rounded-md bg-white shadow-md">
                    <div class="flex-1">
                        <img src="{{ asset('storage/products/sandwich-4.jpeg') }}" class="object-center object-cover rounded-md" alt="">
                    </div>
                    <div class="pt-2 px-2 pb-1 md:pt-4 md:px-4 md:pb-2">
                        <h3 class="text-sm md:text-xl font-semibold text-gray-900">Sandwich</h3>
                        <p class="text-xs md:text-lg font-medium text-gray-500">With cheese</p>
                        <div class="flex justify-between items-center">
                            <p class="text-sm md:text-xl font-semibold text-teal-500">$10.00</p>
                            <button class="text-sm md:text-xl bg-teal-500 text-white rounded-md px-2 py-1 md:px-4 md:py-2">Add</button>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col rounded-md bg-white shadow-md">
                    <div class="flex-1">
                        <img src="{{ asset('storage/products/sandwich-5.jpeg') }}" class="object-center object-cover rounded-md" alt="">
                    </div>
                    <div class="pt-2 px-2 pb-1 md:pt-4 md:px-4 md:pb-2">
                        <h3 class="text-sm md:text-xl font-semibold text-gray-900">Sandwich</h3>
                        <p class="text-xs md:text-lg font-medium text-gray-500">With cheese</p>
                        <div class="flex justify-between items-center">
                            <p class="text-sm md:text-xl font-semibold text-teal-500">$10.00</p>
                            <button class="text-sm md:text-xl bg-teal-500 text-white rounded-md px-2 py-1 md:px-4 md:py-2">Add</button>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col rounded-md bg-white shadow-md">
                    <div class="flex-1">
                        <img src="{{ asset('storage/products/sandwich-6.jpeg') }}" class="object-center object-cover rounded-md" alt="">
                    </div>
                    <div class="pt-2 px-2 pb-1 md:pt-4 md:px-4 md:pb-2">
                        <h3 class="text-sm md:text-xl font-semibold text-gray-900">Sandwich</h3>
                        <p class="text-xs md:text-lg font-medium text-gray-500">With cheese</p>
                        <div class="flex justify-between items-center">
                            <p class="text-sm md:text-xl font-semibold text-teal-500">$10.00</p>
                            <button class="text-sm md:text-xl bg-teal-500 text-white rounded-md px-2 py-1 md:px-4 md:py-2">Add</button>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col rounded-md bg-white shadow-md">
                    <div class="flex-1">
                        <img src="{{ asset('storage/products/sandwich-7.jpeg') }}" class="object-center object-cover rounded-md" alt="">
                    </div>
                    <div class="pt-2 px-2 pb-1 md:pt-4 md:px-4 md:pb-2">
                        <h3 class="text-sm md:text-xl font-semibold text-gray-900">Sandwich</h3>
                        <p class="text-xs md:text-lg font-medium text-gray-500">With cheese</p>
                        <div class="flex justify-between items-center">
                            <p class="text-sm md:text-xl font-semibold text-teal-500">$10.00</p>
                            <button class="text-sm md:text-xl bg-teal-500 text-white rounded-md px-2 py-1 md:px-4 md:py-2">Add</button>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col rounded-md bg-white shadow-md">
                    <div class="flex-1">
                        <img src="{{ asset('storage/products/sandwich-8.jpeg') }}" class="object-center object-cover rounded-md" alt="">
                    </div>
                    <div class="pt-2 px-2 pb-1 md:pt-4 md:px-4 md:pb-2">
                        <h3 class="text-sm md:text-xl font-semibold text-gray-900">Sandwich</h3>
                        <p class="text-xs md:text-lg font-medium text-gray-500">With cheese</p>
                        <div class="flex justify-between items-center">
                            <p class="text-sm md:text-xl font-semibold text-teal-500">$10.00</p>
                            <button class="text-sm md:text-xl bg-teal-500 text-white rounded-md px-2 py-1 md:px-4 md:py-2">Add</button>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col rounded-md bg-white shadow-md">
                    <div class="flex-1">
                        <img src="{{ asset('storage/products/sandwich-9.jpeg') }}" class="object-center object-cover rounded-md" alt="">
                    </div>
                    <div class="pt-2 px-2 pb-1 md:pt-4 md:px-4 md:pb-2">
                        <h3 class="text-sm md:text-xl font-semibold text-gray-900">Sandwich</h3>
                        <p class="text-xs md:text-lg font-medium text-gray-500">With cheese</p>
                        <div class="flex justify-between items-center">
                            <p class="text-sm md:text-xl font-semibold text-teal-500">$10.00</p>
                            <button class="text-sm md:text-xl bg-teal-500 text-white rounded-md px-2 py-1 md:px-4 md:py-2">Add</button>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col rounded-md bg-white shadow-md">
                    <div class="flex-1">
                        <img src="{{ asset('storage/products/sandwich-10.jpeg') }}" class="object-center object-cover rounded-md" alt="">
                    </div>
                    <div class="pt-2 px-2 pb-1 md:pt-4 md:px-4 md:pb-2">
                        <h3 class="text-sm md:text-xl font-semibold text-gray-900">Sandwich</h3>
                        <p class="text-xs md:text-lg font-medium text-gray-500">With cheese</p>
                        <div class="flex justify-between items-center">
                            <p class="text-sm md:text-xl font-semibold text-teal-500">$10.00</p>
                            <button class="text-sm md:text-xl bg-teal-500 text-white rounded-md px-2 py-1 md:px-4 md:py-2">Add</button>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col rounded-md bg-white shadow-md">
                    <div class="flex-1">
                        <img src="{{ asset('storage/products/sandwich-11.jpeg') }}" class="object-center object-cover rounded-md" alt="">
                    </div>
                    <div class="pt-2 px-2 pb-1 md:pt-4 md:px-4 md:pb-2">
                        <h3 class="text-sm md:text-xl font-semibold text-gray-900">Sandwich</h3>
                        <p class="text-xs md:text-lg font-medium text-gray-500">With cheese</p>
                        <div class="flex justify-between items-center">
                            <p class="text-sm md:text-xl font-semibold text-teal-500">$10.00</p>
                            <button class="text-sm md:text-xl bg-teal-500 text-white rounded-md px-2 py-1 md:px-4 md:py-2">Add</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
{{--        <div class="flex items-center justify-center fixed bottom-5 right-5 text-lg w-10 h-10 rounded-full bg-teal-400 text-white text-center shadow-lg">--}}
{{--            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8">--}}
{{--                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 10.5V6a3.75 3.75 0 1 0-7.5 0v4.5m11.356-1.993 1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 0 1-1.12-1.243l1.264-12A1.125 1.125 0 0 1 5.513 7.5h12.974c.576 0 1.059.435 1.119 1.007ZM8.625 10.5a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm7.5 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z" />--}}
{{--            </svg>--}}
{{--            <span class="text-sm md:text-xl font-semibold absolute pt-2">4</span>--}}
{{--        </div>--}}
{{--        <div class="px-4 py-3 rounded-lg font-bold fixed bottom-4 bg-teal-400 text-white text-center text-md md:text-lg">--}}
{{--            <p>Continue to cart: $10.00</p>--}}
{{--        </div>--}}
    </section>
    <div class="fixed bottom-4 right-1/2 transform translate-x-1/2 bg-teal-400 text-white text-center w-60 px-3 py-2 rounded-md">
        <button id="show-cart">Continue to cart: $10.00</button>
    </div>
    <div style="height: 100px"></div>
    <x-modals.product />
</x-app-layout>
