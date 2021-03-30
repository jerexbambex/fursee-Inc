<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    {{-- <link rel="stylesheet" href="/shuttle/css/tailwind/tailwind.min.css"> --}}
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link href="/open-pro/style.9408d6b5665a4db129e7.css" rel="stylesheet">
    <link rel="stylesheet" href="/mine/mine.css">

    <script src="/shuttle/js/main.js"></script>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>


    <link rel="icon" type="image/png" sizes="16x16" href="favicon-tailwind.png">
</head>

<body class="bg-gray-100 dark:bg-gray-900 ri ce ls cn font-circular-regular">
    <div id="app" class="antialiased ng ue uu dark:bg-gray-900">
        {{-- <header class="fu cv cg">
            <div class="oq i_ uj dt">
                <div class="np nw nq rg">
                    <div class="rn sv">
                        <a class="nc" href="index.html" aria-label="Cruip">
                            <svg class="text-purple-600 co rd fj" viewbox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M31.952 14.751a260.51 260.51 0 00-4.359-4.407C23.932 6.734 20.16 3.182 16.171 0c1.634.017 3.21.28 4.692.751 3.487 3.114 6.846 6.398 10.163 9.737.493 1.346.811 2.776.926 4.262zm-1.388 7.883c-2.496-2.597-5.051-5.12-7.737-7.471-3.706-3.246-10.693-9.81-15.736-7.418-4.552 2.158-4.717 10.543-4.96 16.238A15.926 15.926 0 010 16C0 9.799 3.528 4.421 8.686 1.766c1.82.593 3.593 1.675 5.038 2.587 6.569 4.14 12.29 9.71 17.792 15.57-.237.94-.557 1.846-.952 2.711zm-4.505 5.81a56.161 56.161 0 00-1.007-.823c-2.574-2.054-6.087-4.805-9.394-4.044-3.022.695-4.264 4.267-4.97 7.52a15.945 15.945 0 01-3.665-1.85c.366-3.242.89-6.675 2.405-9.364 2.315-4.107 6.287-3.072 9.613-1.132 3.36 1.96 6.417 4.572 9.313 7.417a16.097 16.097 0 01-2.295 2.275z"></path>
                                </svg>
                        </a>
                    </div>
                    <nav class="hidden dp db">
                        <ul class="np rt n_ ny nw">
                            <li>
                                <a class="text-gray-900 dark:text-gray-100 wb uj ub np nw h_ pt hz" href="features.html">Features</a>
                            </li>
                            <li>
                                <a class="text-gray-900 dark:text-gray-100 wb uj ub np nw h_ pt hz" href="pricing.html">Pricing</a>
                            </li>
                            <li>
                                <a class="text-gray-900 dark:text-gray-100 wb uj ub np nw h_ pt hz" href="blog.html">Blog</a>
                            </li>
                            <li>
                                <a class="text-gray-900 dark:text-gray-100 wb uj ub np nw h_ pt hz" href="about.html">About us</a>
                            </li>
                            <li class="fa" x-data="{ open: false }" @mouseenter="open = true" @mouseleave="open = false">
                                <a class="text-gray-900 dark:text-gray-100 wb uj ub np nw h_ pt hz" href="#0" aria-haspopup="true" :aria-expanded="open" @focus="open = true" @focusout="open = false" @click.prevent="">Support
                                        <svg class="cr rc fj la nl ss rn" viewbox="0 0 12 12" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M10.28 4.305L5.989 8.598 1.695 4.305A1 1 0 00.28 5.72l5 5a1 1 0 001.414 0l5-5a1 1 0 10-1.414-1.414z"></path>
                                        </svg>
                                    </a>
                                <ul class="hn fu fy fc cc _ ub sg nt" x-show="open" x-transition:enter="h_ hq pn he" x-transition:enter-start="ur hm" x-transition:enter-end="us hp" x-transition:leave="h_ hq pn" x-transition:leave-start="us" x-transition:leave-end="ur" x-cloak="">
                                    <li>
                                        <a class="text-gray-900 dark:text-gray-100 ro r_ lu ww np ub uj ir" href="contact.html" @focus="open = true" @focusout="open = false">Contact us</a>
                                    </li>
                                    <li>
                                        <a class="text-gray-900 dark:text-gray-100 ro r_ lu ww np ub uj ir" href="help.html" @focus="open = true" @focusout="open = false">Help center</a>
                                    </li>
                                    <li>
                                        <a class="text-gray-900 dark:text-gray-100 ro r_ lu ww np ub uj ir" href="404.html" @focus="open = true" @focusout="open = false">404</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <ul class="np rt n_ ny nw">
                            <li>
                                <a class="text-purple-600 ro wb uj ux np nw h_ pt hz" href="">Sign in</a>
                            </li>
                            <li>
                                <a class="f lr yi yl sp" href="">Sign up</a>
                            </li>
                        </ul>
                    </nav>
                    <div class="dv" x-data="{ expanded: false }">
                        <button class="l" :class="{ 'active': expanded }" @click.stop="expanded = !expanded" aria-controls="mobile-nav" :aria-expanded="expanded">
                                <span class="y">Menu</span>
                                <svg class="cs rp fj lo wb h_ pt hz" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <rect y="4" width="24" height="2" rx="1"></rect>
                                    <rect y="11" width="24" height="2" rx="1"></rect>
                                    <rect y="18" width="24" height="2" rx="1"></rect>
                                </svg>
                            </button>
                        <nav id="mobile-nav" class="fu fy cm fp cv uj dt uu hk pr hz" x-ref="mobileNav" :style="expanded ? 'max-height: ' + $refs.mobileNav.scrollHeight + 'px; opacity: 1' : 'max-height: 0; opacity: .8'" @click.away="expanded = false" @keydown.escape.window="expanded = false"
                            x-cloak="">
                            <ul class="_ uj ub">
                                <li>
                                    <a class="text-gray-700 dark:text-gray-100 np lo wb ub" href="features.html">Features</a>
                                </li>
                                <li>
                                    <a class="text-gray-700 dark:text-gray-100 np lo wb ub" href="pricing.html">Pricing</a>
                                </li>
                                <li>
                                    <a class="text-gray-700 dark:text-gray-100 np lo wb ub" href="blog.html">Blog</a>
                                </li>
                                <li>
                                    <a class="text-gray-700 dark:text-gray-100 np lo wb ub" href="about.html">About us</a>
                                </li>
                                <li class="ub iv nu na tj">
                                    <span class="text-gray-700 dark:text-gray-100 np lo ub">Support</span>
                                    <ul class="al">
                                        <li>
                                            <a class="r_ np ro lu wb ub" href="contact.html">Contact us</a>
                                        </li>
                                        <li>
                                            <a class="r_ np ro lu wb ub" href="help.html">Help center</a>
                                        </li>
                                        <li>
                                            <a class="r_ np ro lu wb ub" href="404.html">404</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a class="text-purple-600 np ro cv wb ub nj" href="signin.html">Sign in</a>
                                </li>
                                <li>
                                    <a class="border-transparent ro cv nd nw nj no uj ub iv nt lr yi yl h_ pt hz" href="signup.html">Sign up</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </header> --}}
        <section class="bg-gray-50 dark:bg-gray-900 skewed-bottom-right">
            <nav class="relative flex items-center justify-between px-6 py-6 bg-gray-50 dark:bg-gray-900">
                <a class="text-3xl font-bold leading-none" href="#"><img src="atis-assets/logo/atis/atis-mono-black.svg" alt="Fursee Inc" width="NaN"></a>
                <div class="lg:hidden">
                    <button class="flex items-center p-3 text-gray-400 dark:text-gray-200 navbar-burger">
                        <svg class="block w-4 h-4 fill-current" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <title>Mobile menu</title>
                            <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
                        </svg>
                    </button>
                </div>
                <ul class="absolute hidden transform -translate-x-1/2 -translate-y-1/2 lg:flex lg:mx-auto lg:items-center lg:w-auto lg:space-x-6 top-1/2 left-1/2">
                    <li><a class="text-sm text-gray-400 dark:text-gray-200 hover:text-gray-500" href="#">Start</a></li>
                    <li class="text-gray-800">
                        <svg class="w-4 h-4 current-fill" xmlns="http://www.w3.org/2000/svg" fill="none" viewbox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z"></path></svg></li>
                    <li><a class="text-sm font-bold text-green-600" href="#">About Us</a></li>
                    <li class="text-gray-800">
                        <svg class="w-4 h-4 current-fill" xmlns="http://www.w3.org/2000/svg" fill="none" viewbox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z"></path></svg></li>
                    <li><a class="text-sm text-gray-400 hover:text-gray-500" href="#">Services</a></li>
                    <li class="text-gray-800">
                        <svg class="w-4 h-4 current-fill" xmlns="http://www.w3.org/2000/svg" fill="none" viewbox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z"></path></svg></li>
                    <li><a class="text-sm text-gray-400 hover:text-gray-500" href="#">Platform</a></li>
                    <li class="text-gray-800">
                        <svg class="w-4 h-4 current-fill" xmlns="http://www.w3.org/2000/svg" fill="none" viewbox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z"></path></svg></li>
                    <li><a class="text-sm text-gray-400 hover:text-gray-500" href="#">Testimonials</a></li>
                </ul><a class="hidden px-6 py-2 text-sm font-bold text-green-600 transition duration-200 bg-white lg:inline-block hover:bg-gray-50 rounded-l-xl rounded-t-xl" href="#">Contact Us</a>
            </nav>
            {{-- <nav class="relative flex items-center justify-between px-6 py-6 bg-gray-50">
                <a class="text-3xl font-bold leading-none" href="#"><img src="atis-assets/logo/atis/atis-mono-black.svg" alt="Fursee Inc" width="NaN"></a>
                <div class="lg:hidden">
                    <button class="flex items-center p-3 text-gray-400 navbar-burger">
              <svg class="block w-4 h-4 fill-current" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Mobile menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path></svg></button>
                </div>
                <ul class="absolute hidden transform -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 lg:flex lg:mx-auto lg:items-center lg:w-auto lg:space-x-6">
                    <li><a class="text-sm text-gray-400 hover:text-gray-500" href="#">Start</a></li>
                    <li class="text-gray-800">
                        <svg class="w-4 h-4 current-fill" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z"></path></svg></li>
                    <li><a class="text-sm font-bold text-green-600" href="#">About Us</a></li>
                    <li class="text-gray-800">
                        <svg class="w-4 h-4 current-fill" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z"></path></svg></li>
                    <li><a class="text-sm text-gray-400 hover:text-gray-500" href="#">Services</a></li>
                    <li class="text-gray-800">
                        <svg class="w-4 h-4 current-fill" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z"></path></svg></li>
                    <li><a class="text-sm text-gray-400 hover:text-gray-500" href="#">Platform</a></li>
                    <li class="text-gray-800">
                        <svg class="w-4 h-4 current-fill" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z"></path></svg></li>
                    <li><a class="text-sm text-gray-400 hover:text-gray-500" href="#">Testimonials</a></li>
                </ul><a class="hidden px-6 py-2 text-sm font-bold text-green-600 transition duration-200 bg-white lg:inline-block hover:bg-gray-50 rounded-l-xl rounded-t-xl" href="#">Contact Us</a>
            </nav> --}}



            {{-- <div class="mr-for-radius">
                <svg class="w-full h-8 md:h-12 lg:h-20 text-gray-50" viewbox="0 0 10 10" preserveaspectratio="none"><polygon fill="currentColor" points="0 0 10 0 0 10"></polygon></svg>
            </div> --}}
            {{ $slot }}

            <div class="relative z-50 hidden navbar-menu">
                <div class="fixed inset-0 bg-gray-800 opacity-25 navbar-backdrop"></div>
                <nav class="fixed top-0 bottom-0 left-0 flex flex-col w-5/6 max-w-sm px-6 py-6 overflow-y-auto bg-gray-100 border-r dark:bg-gray-900">
                    <div class="flex items-center mb-8">
                        <a class="mr-auto text-3xl font-bold leading-none" href="#"><img src="atis-assets/logo/atis/atis-mono-black.svg" alt="Fursee Inc" width="NaN"></a>
                        <button class="navbar-close">
                            <svg class="w-6 h-6 text-gray-400 cursor-pointer hover:text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewbox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                            </svg>
                        </button>
                    </div>
                    <div>
                        <ul>
                            <li class="mb-1"><a class="block p-4 text-sm font-semibold text-gray-400 rounded hover:bg-green-50 hover:text-green-600" href="#">Start</a></li>
                            <li class="mb-1"><a class="block p-4 text-sm font-semibold text-gray-400 rounded hover:bg-green-50 hover:text-green-600" href="#">About Us</a></li>
                            <li class="mb-1"><a class="block p-4 text-sm font-semibold text-gray-400 rounded hover:bg-green-50 hover:text-green-600" href="#">Services</a></li>
                            <li class="mb-1"><a class="block p-4 text-sm font-semibold text-gray-400 rounded hover:bg-green-50 hover:text-green-600" href="#">Platform</a></li>
                            <li class="mb-1"><a class="block p-4 text-sm font-semibold text-gray-400 rounded hover:bg-green-50 hover:text-green-600" href="#">Testimonials</a></li>
                        </ul>
                    </div>
                    <div class="mt-auto">
                        <div class="pt-6"><a class="block px-4 py-3 mb-3 text-xs font-semibold leading-none leading-loose text-center bg-gray-50 hover:bg-gray-100 rounded-l-xl rounded-t-xl" href="#">Sign In</a><a class="block px-4 py-3 mb-2 text-xs font-semibold leading-loose text-center text-white bg-green-600 hover:bg-green-700 rounded-l-xl rounded-t-xl"
                                href="#">Sign Up</a></div>
                        <p class="my-4 text-xs text-center text-gray-400">
                            <span>&copy; 2020 All rights reserved.</span>
                        </p>
                        <div class="text-center">
                            <a class="inline-block px-1" href="#"><img src="atis-assets/social/facebook.svg" alt=""></a>
                            <a class="inline-block px-1" href="#"><img src="atis-assets/social/twitter.svg" alt=""></a>
                            <a class="inline-block px-1" href="#"><img src="atis-assets/social/instagram.svg" alt=""></a>
                        </div>
                    </div>
                </nav>
            </div>
        </section>



    </div>
</body>
<script src="/open-pro/main.6523af057e68835e4041.js"></script>

</html>
