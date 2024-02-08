<div id="productModal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-2xl max-h-full">
        <!-- Modal content -->
        <button type="button" class="text-center w-full" data-modal-hide="productModal">
            <svg class="mx-auto text-white border-2 border-white rounded-full w-6 p-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
            </svg>
        </button>

        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <!-- Modal header -->
            <div class="flex items-center justify-center p-4 md:p-5 rounded-t">
                <h3 class="text-lg font-bold text-gray-900 text-center dark:text-white">
                    Zinger Sandwich
                </h3>
            </div>
            <!-- Modal body -->
            <div class="flex flex-col md:flex-row md:gap-6 p-4 md:p-5 space-y-4">
                <div class="flex items-center justify-center">
                    <img src="{{ asset('storage/special.jpg') }}" class="object-cover object-center w-48 h-48 md:w-64 md:h-64 rounded-full md:rounded-md" alt="">
                </div>
                <div class="flex-1 flex justify-evenly md:justify-between">
                    <div class="flex gap-2 items-center">
                        <div class="bg-gray-200 dark:bg-gray-700 flex flex-col h-16 justify-end rounded-full w-2">
                            <div class="bg-blue-400 h-2.5 rounded-full" style="height: 66%;"></div>
                        </div>
                        <div>
                            <h3 class="text-sm font-semibold text-gray-900 dark:text-white">32G</h3>
                            <p class="text-xs font-normal text-gray-500 dark:text-white">Protein</p>
                        </div>
                    </div>
                    <div class="flex gap-2 items-center">
                        <div class="bg-gray-200 dark:bg-gray-700 flex flex-col h-16 justify-end rounded-full w-2">
                            <div class="bg-red-400 h-2.5 rounded-full" style="height: 66%;"></div>
                        </div>
                        <div>
                            <h3 class="text-sm font-semibold text-gray-900 dark:text-white">23G</h3>
                            <p class="text-xs font-normal text-gray-500 dark:text-white">Carbs</p>
                        </div>
                    </div>
                    <div class="flex gap-2 items-center">
                        <div class="bg-gray-200 dark:bg-gray-700 flex flex-col h-16 justify-end rounded-full w-2">
                            <div class="bg-green-400 h-2.5 rounded-full" style="height: 66%;"></div>
                        </div>
                        <div>
                            <h3 class="text-sm font-semibold text-gray-900 dark:text-white">12G</h3>
                            <p class="text-xs font-normal text-gray-500 dark:text-white">Fat</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal footer -->
            <div class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600 justify-between">
                <button data-modal-hide="productModal" type="button" class="text-white bg-teal-500 hover:bg-teal-800 focus:ring-4 focus:outline-none focus:ring-teal-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-teal-600 dark:hover:bg-teal-700 dark:focus:ring-teal-800">Add to cart</button>

                <form class="max-w-xs mx-auto">
                    <div class="relative flex items-center">
                        <button type="button" id="decrement-button" data-input-counter-decrement="counter-input" class="flex-shrink-0 bg-gray-100 dark:bg-gray-700 dark:hover:bg-gray-600 dark:border-gray-600 hover:bg-gray-200 inline-flex items-center justify-center border border-gray-300 rounded-md h-5 w-5 focus:ring-gray-100 dark:focus:ring-gray-700 focus:ring-2 focus:outline-none">
                            <svg class="w-2.5 h-2.5 text-gray-900 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 2">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h16"/>
                            </svg>
                        </button>
                        <input type="text" id="counter-input" data-input-counter class="flex-shrink-0 text-gray-900 dark:text-white border-0 bg-transparent text-sm font-normal focus:outline-none focus:ring-0 max-w-[2.5rem] text-center" placeholder="" value="1" min="1" required>
                        <button type="button" id="increment-button" data-input-counter-increment="counter-input" class="flex-shrink-0 bg-gray-100 dark:bg-gray-700 dark:hover:bg-gray-600 dark:border-gray-600 hover:bg-gray-200 inline-flex items-center justify-center border border-gray-300 rounded-md h-5 w-5 focus:ring-gray-100 dark:focus:ring-gray-700 focus:ring-2 focus:outline-none">
                            <svg class="w-2.5 h-2.5 text-gray-900 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
                            </svg>
                        </button>
                    </div>
                </form>

                {{--                <button data-modal-hide="productModal" type="button" class="ms-3 text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Decline</button>--}}
                <h2 class="font-bold text-teal-500 text-lg text-left">$12</h2>
            </div>
        </div>
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700 mt-2">
            <!-- Modal header -->
            <div class="p-4 md:p-5 rounded-t">
                <h3 class="text-lg font-bold text-gray-900 text-left dark:text-white">
                    Details
                </h3>
                <div class="flex gap-2 mt-1">
                    <div class="flex gap-1 items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="text-teal-500 w-3 h-3">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                        </svg>
                        <p class="font-bold text-gray-500 text-xs">45min</p>
                    </div>
                    <div class="flex gap-1 items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="text-teal-500 w-3 h-3">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 5.25h16.5m-16.5 4.5h16.5m-16.5 4.5h16.5m-16.5 4.5h16.5" />
                        </svg>
                        <p class="font-bold text-gray-500 text-xs">14 ingredients</p>
                    </div>
                </div>
            </div>
            <!-- Modal body -->
            <div class="px-4 pb-4 md:p-5 space-y-4">
                <div class="p-4 border border-1 border-gray-400 rounded-md">
                    <div class="flex gap-2 items-center mb-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="text-teal-500 w-3 h-3">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 5.25h16.5m-16.5 4.5h16.5m-16.5 4.5h16.5m-16.5 4.5h16.5" />
                        </svg>
                        <p class="font-bold text-gray-900 text-sm">Ingredients:</p>
                    </div>
                    <ul class="list-disc md:list-none ml-4 md:ml-0 text-sm text-gray-900 md:flex md:gap-2 md:flex-wrap">
                        <li class="text-sm text-nowrap text-gray-500 text-semibold md:border md:border-teal-300 md:rounded-md md:py-1 md:px-1.5">Bread</li>
                        <li class="text-sm text-nowrap text-gray-500 text-semibold md:border md:border-teal-300 md:rounded-md md:py-1 md:px-1.5">Turkey slices</li>
                        <li class="text-sm text-nowrap text-gray-500 text-semibold md:border md:border-teal-300 md:rounded-md md:py-1 md:px-1.5">Cheddar cheese</li>
                        <li class="text-sm text-nowrap text-gray-500 text-semibold md:border md:border-teal-300 md:rounded-md md:py-1 md:px-1.5">Lettuce</li>
                        <li class="text-sm text-nowrap text-gray-500 text-semibold md:border md:border-teal-300 md:rounded-md md:py-1 md:px-1.5">Tomato slices</li>
                        <li class="text-sm text-nowrap text-gray-500 text-semibold md:border md:border-teal-300 md:rounded-md md:py-1 md:px-1.5">Mayonnaise</li>
                        <li class="text-sm text-nowrap text-gray-500 text-semibold md:border md:border-teal-300 md:rounded-md md:py-1 md:px-1.5">Avocado</li>
                        <li class="text-sm text-nowrap text-gray-500 text-semibold md:border md:border-teal-300 md:rounded-md md:py-1 md:px-1.5">Pickles</li>
                    </ul>
                </div>
{{--                <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">--}}
{{--                    With less than a month to go before the European Union enacts new consumer privacy laws for its citizens, companies around the world are updating their terms of service agreements to comply.--}}
{{--                </p>--}}
{{--                <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">--}}
{{--                    The European Union’s General Data Protection Regulation (G.D.P.R.) goes into effect on May 25 and is meant to ensure a common set of data rights in the European Union. It requires organizations to notify users as soon as possible of high-risk data breaches that could personally affect them.--}}
{{--                </p>--}}
            </div>
            <div class="px-4 pb-4 md:p-5 space-y-4">
                <div class="p-4 border border-1 border-gray-400 rounded-md">
                    <div class="flex gap-2 items-center mb-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={1.5} stroke="currentColor" class="text-teal-500 w-3 h-3">
                            <path strokeLinecap="round" strokeLinejoin="round" d="M12 9v6m3-3H9m12 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                        </svg>
                        <p class="font-bold text-gray-900 text-sm">Addons:</p>
                    </div>
                    <label class="border-b pb-2 mb-2 border-gray-300 flex items-center justify-between text-sm font-semibold text-gray-700">
                        <p>Bread <span class="text-xs text-teal-400">+ $1</span></p>
                        <input type="checkbox" class="text-teal-400 border-teal-400 rounded-full focus:ring-teal-400" ></label>
                    <label class="border-b pb-2 mb-2 border-gray-300 flex items-center justify-between text-sm font-semibold text-gray-700">
                        <p>Turkey <span class="text-xs text-teal-400">+ $1.5</span></p>
                        <input type="checkbox" class="text-teal-400 border-teal-400 rounded-full focus:ring-teal-400" ></label>
                    <label class="border-b pb-2 mb-2 border-gray-300 flex items-center justify-between text-sm font-semibold text-gray-700">
                        <p>Cheddar <span class="text-xs text-teal-400">+ $1.5</span></p>
                        <input type="checkbox" class="text-teal-400 border-teal-400 rounded-full focus:ring-teal-400" ></label>
                    <label class="border-b pb-2 mb-2 border-gray-300 flex items-center justify-between text-sm font-semibold text-gray-700">
                        <p>Lettuce <span class="text-xs text-teal-400">+ $2</span></p>
                        <input type="checkbox" class="text-teal-400 border-teal-400 rounded-full focus:ring-teal-400" ></label>
                    <label class="border-b pb-2 mb-2 border-gray-300 flex items-center justify-between text-sm font-semibold text-gray-700">
                        <p>Tomato <span class="text-xs text-teal-400">+ $1</span></p>
                        <input type="checkbox" class="text-teal-400 border-teal-400 rounded-full focus:ring-teal-400" ></label>
                    <label class="border-b pb-2 mb-2 border-gray-300 flex items-center justify-between text-sm font-semibold text-gray-700">
                        <p>Mayonnaise <span class="text-xs text-teal-400">+ $0.5</span></p>
                        <input type="checkbox" class="text-teal-400 border-teal-400 rounded-full focus:ring-teal-400" ></label>
                    <label class="border-b pb-2 mb-2 border-gray-300 flex items-center justify-between text-sm font-semibold text-gray-700">
                        <p>Avocado <span class="text-xs text-teal-400">+ $0.5</span></p>
                        <input type="checkbox" class="text-teal-400 border-teal-400 rounded-full focus:ring-teal-400" ></label>
                    <label class="border-b pb-2 mb-2 border-gray-300 flex items-center justify-between text-sm font-semibold text-gray-700">
                        <p>Pickles <span class="text-xs text-teal-400">+ $1.5</span></p>
                        <input type="checkbox" class="text-teal-400 border-teal-400 rounded-full focus:ring-teal-400" ></label>
{{--                    <ul class="list-disc ml-4 text-sm text-gray-900">--}}
{{--                        <li class="text-sm text-gray-500 text-semibold">Turkey slices</li>--}}
{{--                        <li class="text-sm text-gray-500 text-semibold">Cheddar cheese</li>--}}
{{--                        <li class="text-sm text-gray-500 text-semibold">Lettuce</li>--}}
{{--                        <li class="text-sm text-gray-500 text-semibold">Tomato slices</li>--}}
{{--                        <li class="text-sm text-gray-500 text-semibold">Mayonnaise</li>--}}
{{--                        <li class="text-sm text-gray-500 text-semibold">Avocado</li>--}}
{{--                        <li class="text-sm text-gray-500 text-semibold">Pickles</li>--}}
{{--                    </ul>--}}
                </div>
{{--                <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">--}}
{{--                    With less than a month to go before the European Union enacts new consumer privacy laws for its citizens, companies around the world are updating their terms of service agreements to comply.--}}
{{--                </p>--}}
{{--                <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">--}}
{{--                    The European Union’s General Data Protection Regulation (G.D.P.R.) goes into effect on May 25 and is meant to ensure a common set of data rights in the European Union. It requires organizations to notify users as soon as possible of high-risk data breaches that could personally affect them.--}}
{{--                </p>--}}
            </div>
        </div>
    </div>
</div>
