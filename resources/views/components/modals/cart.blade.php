<div id="cart-modal" class="ring-[1px] ring-teal-400 overflow-y-auto bg-gray-50 rounded-tl-3xl rounded-tr-3xl shadow-lg fixed bottom-0 left-0 h-[700px] w-full transform translate-y-[701px] flex flex-col justify-between align-middle">
    <!-- Header -->
    <div class="w-full text-right p-4">
        <button type="button" id="hide-cart">
            <svg class="mx-auto text-black border-2 border-white rounded-full w-8 p-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
            </svg>
        </button>
    </div>
    <!-- Body -->
    <div class="space-y-2 h-[400px] overflow-y-auto px-4 pb-4">
        <div class="bg-white rounded-xl shadow-md p-3 space-y-5">
            <div class="flex gap-2 items-center">
                <div>
                    <img src="{{ asset('storage/products/sandwich-1.jpeg') }}" class="object-cover object-center w-24 h-24 rounded-full" alt="">
                </div>
                <div class="flex-1">
                    <h3 class="text-md font-semibold">Special Sandwich</h3>
                    <p class="text-sm font-normal text-teal-600">$10.00</p>
                </div>
                <div class="text-center space-y-5 flex flex-col">
                    <div class="flex gap-1 items-center justify-between">
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                            </svg>
                        </div>
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                            </svg>
                        </div>
                    </div>
                    <div>
                        <form class="max-w-xs mx-auto">
                            <div class="relative flex items-center">
                                <button type="button" id="decrement-button" data-input-counter-decrement="counter-input" class="flex-shrink-0 bg-gray-800 dark:bg-gray-700 dark:hover:bg-gray-600 dark:border-gray-600 hover:bg-gray-200 inline-flex items-center justify-center border border-gray-300 rounded-full h-5 w-5 focus:ring-gray-100 dark:focus:ring-gray-700 focus:ring-2 focus:outline-none">
                                    <svg class="w-2.5 h-2.5 text-white dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 2">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h16"/>
                                    </svg>
                                </button>
                                <input type="text" id="counter-input" data-input-counter class="flex-shrink-0 text-gray-900 dark:text-white border-0 bg-transparent text-sm font-normal focus:outline-none focus:ring-0 max-w-[2.5rem] text-center" placeholder="" value="1" min="1" required>
                                <button type="button" id="increment-button" data-input-counter-increment="counter-input" class="flex-shrink-0 bg-gray-800 dark:bg-gray-700 dark:hover:bg-gray-600 dark:border-gray-600 hover:bg-gray-200 inline-flex items-center justify-center border border-gray-300 rounded-full h-5 w-5 focus:ring-gray-100 dark:focus:ring-gray-700 focus:ring-2 focus:outline-none">
                                    <svg class="w-2.5 h-2.5 text-white dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
                                    </svg>
                                </button>
                            </div>
                        </form>
                    </div>
                    <div>
                        <p class="text-sm font-normal text-teal-600">$20.00</p>
                    </div>
                </div>
            </div>
            <div class="flex gap-2 flex-wrap">
                <p class="border border-teal-300 px-2 py-1 rounded-md text-xs text-gray-700">Bread <span class="text-xs text-teal-400">+$1.5</span></p>
                <p class="border border-teal-300 px-2 py-1 rounded-md text-xs text-gray-700">Turkey <span class="text-xs text-teal-400">+$1.5</span></p>
                <p class="border border-teal-300 px-2 py-1 rounded-md text-xs text-gray-700">Cheddar <span class="text-xs text-teal-400">+$1.5</span></p>
                <p class="border border-teal-300 px-2 py-1 rounded-md text-xs text-gray-700">Lettuce <span class="text-xs text-teal-400">+$1.5</span></p>
                <p class="border border-teal-300 px-2 py-1 rounded-md text-xs text-gray-700">Tomato <span class="text-xs text-teal-400">+$1.5</span></p>
                <p class="border border-teal-300 px-2 py-1 rounded-md text-xs text-gray-700">Mayonnaise <span class="text-xs text-teal-400">+$1.5</span></p>
                <p class="border border-teal-300 px-2 py-1 rounded-md text-xs text-gray-700">Avocado <span class="text-xs text-teal-400">+$1.5</span></p>
                <p class="border border-teal-300 px-2 py-1 rounded-md text-xs text-gray-700">Pickles <span class="text-xs text-teal-400">+$1.5</span></p>
            </div>
        </div>
        <div class="bg-white rounded-xl shadow-md p-3 flex gap-2 items-center">
            <div>
                <img src="{{ asset('storage/products/sandwich-2.jpeg') }}" class="object-cover object-center w-24 h-24 rounded-full" alt="">
            </div>
            <div class="flex-1">
                <h3 class="text-md font-semibold">Special Sandwich</h3>
                <p class="text-sm font-normal text-teal-600">$10.00</p>
            </div>
            <div class="text-center space-y-5">
                <form class="max-w-xs mx-auto">
                    <div class="relative flex items-center">
                        <button type="button" id="decrement-button" data-input-counter-decrement="counter-input" class="flex-shrink-0 bg-gray-800 dark:bg-gray-700 dark:hover:bg-gray-600 dark:border-gray-600 hover:bg-gray-200 inline-flex items-center justify-center border border-gray-300 rounded-full h-5 w-5 focus:ring-gray-100 dark:focus:ring-gray-700 focus:ring-2 focus:outline-none">
                            <svg class="w-2.5 h-2.5 text-white dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 2">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h16"/>
                            </svg>
                        </button>
                        <input type="text" id="counter-input" data-input-counter class="flex-shrink-0 text-gray-900 dark:text-white border-0 bg-transparent text-sm font-normal focus:outline-none focus:ring-0 max-w-[2.5rem] text-center" placeholder="" value="1" min="1" required>
                        <button type="button" id="increment-button" data-input-counter-increment="counter-input" class="flex-shrink-0 bg-gray-800 dark:bg-gray-700 dark:hover:bg-gray-600 dark:border-gray-600 hover:bg-gray-200 inline-flex items-center justify-center border border-gray-300 rounded-full h-5 w-5 focus:ring-gray-100 dark:focus:ring-gray-700 focus:ring-2 focus:outline-none">
                            <svg class="w-2.5 h-2.5 text-white dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
                            </svg>
                        </button>
                    </div>
                </form>
                <p class="text-sm font-normal text-teal-600">$20.00</p>
            </div>
        </div>
        <div class="bg-white rounded-xl shadow-md p-3 flex gap-2 items-center">
            <div>
                <img src="{{ asset('storage/products/sandwich-3.jpeg') }}" class="object-cover object-center w-24 h-24 rounded-full" alt="">
            </div>
            <div class="flex-1">
                <h3 class="text-md font-semibold">Special Sandwich</h3>
                <p class="text-sm font-normal text-teal-600">$10.00</p>
            </div>
            <div class="text-center space-y-5">
                <form class="max-w-xs mx-auto">
                    <div class="relative flex items-center">
                        <button type="button" id="decrement-button" data-input-counter-decrement="counter-input" class="flex-shrink-0 bg-gray-800 dark:bg-gray-700 dark:hover:bg-gray-600 dark:border-gray-600 hover:bg-gray-200 inline-flex items-center justify-center border border-gray-300 rounded-full h-5 w-5 focus:ring-gray-100 dark:focus:ring-gray-700 focus:ring-2 focus:outline-none">
                            <svg class="w-2.5 h-2.5 text-white dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 2">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h16"/>
                            </svg>
                        </button>
                        <input type="text" id="counter-input" data-input-counter class="flex-shrink-0 text-gray-900 dark:text-white border-0 bg-transparent text-sm font-normal focus:outline-none focus:ring-0 max-w-[2.5rem] text-center" placeholder="" value="1" min="1" required>
                        <button type="button" id="increment-button" data-input-counter-increment="counter-input" class="flex-shrink-0 bg-gray-800 dark:bg-gray-700 dark:hover:bg-gray-600 dark:border-gray-600 hover:bg-gray-200 inline-flex items-center justify-center border border-gray-300 rounded-full h-5 w-5 focus:ring-gray-100 dark:focus:ring-gray-700 focus:ring-2 focus:outline-none">
                            <svg class="w-2.5 h-2.5 text-white dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
                            </svg>
                        </button>
                    </div>
                </form>
                <p class="text-sm font-normal text-teal-600">$20.00</p>
            </div>
        </div>
        <div class="bg-white rounded-xl shadow-md p-3 flex gap-2 items-center">
            <div>
                <img src="{{ asset('storage/products/sandwich-3.jpeg') }}" class="object-cover object-center w-24 h-24 rounded-full" alt="">
            </div>
            <div class="flex-1">
                <h3 class="text-md font-semibold">Special Sandwich</h3>
                <p class="text-sm font-normal text-teal-600">$10.00</p>
            </div>
            <div class="text-center space-y-5">
                <form class="max-w-xs mx-auto">
                    <div class="relative flex items-center">
                        <button type="button" id="decrement-button" data-input-counter-decrement="counter-input" class="flex-shrink-0 bg-gray-800 dark:bg-gray-700 dark:hover:bg-gray-600 dark:border-gray-600 hover:bg-gray-200 inline-flex items-center justify-center border border-gray-300 rounded-full h-5 w-5 focus:ring-gray-100 dark:focus:ring-gray-700 focus:ring-2 focus:outline-none">
                            <svg class="w-2.5 h-2.5 text-white dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 2">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h16"/>
                            </svg>
                        </button>
                        <input type="text" id="counter-input" data-input-counter class="flex-shrink-0 text-gray-900 dark:text-white border-0 bg-transparent text-sm font-normal focus:outline-none focus:ring-0 max-w-[2.5rem] text-center" placeholder="" value="1" min="1" required>
                        <button type="button" id="increment-button" data-input-counter-increment="counter-input" class="flex-shrink-0 bg-gray-800 dark:bg-gray-700 dark:hover:bg-gray-600 dark:border-gray-600 hover:bg-gray-200 inline-flex items-center justify-center border border-gray-300 rounded-full h-5 w-5 focus:ring-gray-100 dark:focus:ring-gray-700 focus:ring-2 focus:outline-none">
                            <svg class="w-2.5 h-2.5 text-white dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
                            </svg>
                        </button>
                    </div>
                </form>
                <p class="text-sm font-normal text-teal-600">$20.00</p>
            </div>
        </div>
        <div class="bg-white rounded-xl shadow-md p-3 flex gap-2 items-center">
            <div>
                <img src="{{ asset('storage/products/sandwich-3.jpeg') }}" class="object-cover object-center w-24 h-24 rounded-full" alt="">
            </div>
            <div class="flex-1">
                <h3 class="text-md font-semibold">Special Sandwich</h3>
                <p class="text-sm font-normal text-teal-600">$10.00</p>
            </div>
            <div class="text-center space-y-5">
                <form class="max-w-xs mx-auto">
                    <div class="relative flex items-center">
                        <button type="button" id="decrement-button" data-input-counter-decrement="counter-input" class="flex-shrink-0 bg-gray-800 dark:bg-gray-700 dark:hover:bg-gray-600 dark:border-gray-600 hover:bg-gray-200 inline-flex items-center justify-center border border-gray-300 rounded-full h-5 w-5 focus:ring-gray-100 dark:focus:ring-gray-700 focus:ring-2 focus:outline-none">
                            <svg class="w-2.5 h-2.5 text-white dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 2">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h16"/>
                            </svg>
                        </button>
                        <input type="text" id="counter-input" data-input-counter class="flex-shrink-0 text-gray-900 dark:text-white border-0 bg-transparent text-sm font-normal focus:outline-none focus:ring-0 max-w-[2.5rem] text-center" placeholder="" value="1" min="1" required>
                        <button type="button" id="increment-button" data-input-counter-increment="counter-input" class="flex-shrink-0 bg-gray-800 dark:bg-gray-700 dark:hover:bg-gray-600 dark:border-gray-600 hover:bg-gray-200 inline-flex items-center justify-center border border-gray-300 rounded-full h-5 w-5 focus:ring-gray-100 dark:focus:ring-gray-700 focus:ring-2 focus:outline-none">
                            <svg class="w-2.5 h-2.5 text-white dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
                            </svg>
                        </button>
                    </div>
                </form>
                <p class="text-sm font-normal text-teal-600">$20.00</p>
            </div>
        </div>
    </div>
    <!-- Footer -->
    <div class="flex-1 w-full bg-white space-y-8 p-5">
        <div class="space-y-5">
            <div class="flex justify-between border-b border-gray-300">
                <h3 class="text-gray-500 font-semibold text-sm">Subtotal:</h3>
                <span class="text-gray-500 font-semibold text-sm">$50.00</span>
            </div>
            <div class="flex justify-between border-b border-gray-300">
                <h3 class="text-gray-500 font-semibold text-sm border-b border-gray-300">Delivery:</h3>
                <span class="text-gray-500 font-semibold text-sm border-b border-gray-300">$50.00</span>
            </div>
            <div class="flex justify-between border-b border-gray-300">
                <h3 class="text-gray-800 font-bold text-lg border-b border-gray-300">Total:</h3>
                <span class="text-gray-800 font-bold text-lg border-b border-gray-300">$50.00</span>
            </div>
        </div>
        <button class="w-full mx-auto bg-gray-800 mb-4 text-white font-semibold text-center px-3 py-2 rounded-md" id="show-cart">Checkout: $10.00</button>
    </div>
</div>
<script>
    $(() => {
        $('#show-cart').click(() => {
            console.log('clicked')
            $('#cart-modal').removeClass('animate-hide').addClass('animate-show');
        });

        $('#hide-cart').click(() => {
            $('#cart-modal').removeClass('animate-show').addClass('animate-hide');
        });
    });
</script>
