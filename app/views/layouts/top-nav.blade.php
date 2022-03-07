<div class="relative bg-white" x-data="{ showMobileMenu: false }">
    <div class="mx-auto px-4 sm:px-6 border-b bg-gray-100">
        <div class="mx-auto max-w-7xl flex justify-between items-center p-3 md:justify-start md:space-x-10">
            <div class="flex justify-start lg:w-0 lg:flex-1">
                <a href="{{ route('home') }}">
                    <span class="sr-only">Furea Energy</span>
                    <x-logo class="h-16 w-auto" />
                </a>
            </div>
            <div class="-mr-2 -my-2 md:hidden">
                <button x-on:click.prevent="showMobileMenu = true" type="button" class="bg-white rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-green-500" aria-expanded="false">
                    <span class="sr-only">Open menu</span>
                    <!-- Heroicon name: outline/menu -->
                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>
            <nav class="hidden md:flex space-x-10">
                <a href="{{ route('about') }}" class="text-sm font-medium text-orange-600 hover:text-gray-900"> About Us </a>
                <a href="{{ route('innovative-solutions') }}" class="text-sm font-medium text-orange-600 hover:text-gray-900"> Innovative Solutions </a>
                <a href="{{ route('esg') }}" class="text-sm font-medium text-orange-600 hover:text-gray-900"> ESG </a>
                <a href="{{ route('opportunities') }}" class="text-sm font-medium text-orange-600 hover:text-gray-900"> Opportunities </a>
                <a href="{{ route('contact-us') }}" class="text-sm font-medium text-orange-600 hover:text-gray-900"> Contact Us </a>
            </nav>
            {{--                <div class="hidden md:flex items-center justify-end md:flex-1 lg:w-0">--}}
            {{--                    <a href="#" class="whitespace-nowrap text-base font-medium text-gray-500 hover:text-gray-900"> Sign in </a>--}}
            {{--                    <a href="#" class="ml-8 whitespace-nowrap inline-flex items-center justify-center px-4 py-2 border border-transparent rounded-md shadow-sm text-base font-medium text-white bg-green-600 hover:bg-green-700"> Sign up </a>--}}
            {{--                </div>--}}
        </div>
    </div>

    <!--
      Mobile menu, show/hide based on mobile menu state.

      Entering: "duration-200 ease-out"
        From: "opacity-0 scale-95"
        To: "opacity-100 scale-100"
      Leaving: "duration-100 ease-in"
        From: "opacity-100 scale-100"
        To: "opacity-0 scale-95"
    -->
    <div x-show="showMobileMenu" class="absolute top-0 inset-x-0 p-2 transition transform origin-top-right md:hidden z-50">
        <div class="rounded-lg shadow-lg ring-1 ring-black ring-opacity-5 bg-white divide-y-2 divide-gray-50">
            <div class="pt-5 pb-6 px-5">
                <div class="flex items-center justify-between">
                    <div>
                        <x-logo class="h-10 w-auto" />
                    </div>
                    <div class="-mr-2">
                        <button x-on:click.prvent="showMobileMenu = false" type="button" class="bg-white rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-green-500">
                            <span class="sr-only">Close menu</span>
                            <!-- Heroicon name: outline/x -->
                            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                </div>
                <div class="mt-6">
                    <nav class="grid gap-y-8">
                        <a href="{{ route('about') }}" class="-m-3 p-3 flex items-center rounded-md hover:bg-gray-50">
                            <!-- Heroicon name: outline/cursor-click -->
                            <svg class="flex-shrink-0 h-6 w-6 text-green-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 15l-2 5L9 9l11 4-5 2zm0 0l5 5M7.188 2.239l.777 2.897M5.136 7.965l-2.898-.777M13.95 4.05l-2.122 2.122m-5.657 5.656l-2.12 2.122" />
                            </svg>
                            <span class="ml-3 text-base font-medium text-gray-900"> About Us </span>
                        </a>

                        <a href="{{ route('innovative-solutions') }}" class="-m-3 p-3 flex items-center rounded-md hover:bg-gray-50">
                            <!-- Heroicon name: outline/shield-check -->
                            <svg class="flex-shrink-0 h-6 w-6 text-green-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                            </svg>
                            <span class="ml-3 text-base font-medium text-gray-900"> Solutions </span>
                        </a>

                        <a href="{{ route('esg') }}" class="-m-3 p-3 flex items-center rounded-md hover:bg-gray-50">
                            <!-- Heroicon name: outline/view-grid -->
                            <svg class="flex-shrink-0 h-6 w-6 text-green-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" />
                            </svg>
                            <span class="ml-3 text-base font-medium text-gray-900"> ESG </span>
                        </a>
                        <a href="{{ route('opportunities') }}" class="-m-3 p-3 flex items-center rounded-md hover:bg-gray-50">
                            <!-- Heroicon name: outline/view-grid -->
                            <svg class="flex-shrink-0 h-6 w-6 text-green-600" xmlns="http://www.w3.org/2000/svg"
                                 fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"/>
                            </svg>
                            <span class="ml-3 text-base font-medium text-gray-900"> Opportunities </span>
                        </a>

                        <a href="{{ route('contact-us') }}" class="-m-3 p-3 flex items-center rounded-md hover:bg-gray-50">
                            <!-- Heroicon name: outline/refresh -->
                            <svg class="flex-shrink-0 h-6 w-6 text-green-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15" />
                            </svg>
                            <span class="ml-3 text-base font-medium text-gray-900"> Contact Us </span>
                        </a>
                    </nav>
                </div>
            </div>
{{--            <div class="py-6 px-5 space-y-6">--}}
{{--                <div class="grid grid-cols-2 gap-y-4 gap-x-8">--}}
{{--                    <a href="#" class="text-base font-medium text-gray-900 hover:text-gray-700"> Pricing </a>--}}

{{--                    <a href="#" class="text-base font-medium text-gray-900 hover:text-gray-700"> Docs </a>--}}

{{--                    <a href="#" class="text-base font-medium text-gray-900 hover:text-gray-700"> Help Center </a>--}}

{{--                    <a href="#" class="text-base font-medium text-gray-900 hover:text-gray-700"> Guides </a>--}}

{{--                    <a href="#" class="text-base font-medium text-gray-900 hover:text-gray-700"> Events </a>--}}

{{--                    <a href="#" class="text-base font-medium text-gray-900 hover:text-gray-700"> Security </a>--}}
{{--                </div>--}}
{{--                <div>--}}
{{--                    <a href="#" class="w-full flex items-center justify-center px-4 py-2 border border-transparent rounded-md shadow-sm text-base font-medium text-white bg-green-600 hover:bg-green-700"> Sign up </a>--}}
{{--                    <p class="mt-6 text-center text-base font-medium text-gray-500">--}}
{{--                        Existing customer?--}}
{{--                        <a href="#" class="text-green-600 hover:text-green-500"> Sign in </a>--}}
{{--                    </p>--}}
{{--                </div>--}}
{{--            </div>--}}
        </div>
    </div>
</div>
