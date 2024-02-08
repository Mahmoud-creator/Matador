<div id="cart-modal" class="overflow-y-auto bg-gray-50 rounded-3xl shadow-lg fixed bottom-0 left-0 h-[700px] w-full transform translate-y-[700px] flex flex-col justify-between align-middle">
    <div class="p-4">
        <div class="w-full text-right">
            <button type="button" id="hide-cart">
                <svg class="mx-auto text-black border-2 border-white rounded-full w-8 p-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                </svg>
            </button>
        </div>
        <div class="space-y-2">
            <div class="bg-white rounded-xl shadow-md p-3 flex gap-2 items-center">
                <div>
                    <img src="{{ asset('storage/products/sandwich-1.jpeg') }}" class="object-cover object-center w-24 h-24 rounded-full" alt="">
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
    </div>
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
