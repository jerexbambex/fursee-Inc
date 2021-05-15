<div class="fu cv cg">
    <div class="px-4 py-5 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8">
        <div class="relative flex items-center justify-between">
            <a
                href="/"
                aria-label="Fursee Inc"
                title="Fursee Inc"
                class="inline-flex items-center"
            >
                <svg
                    class="w-8 text-teal-accent-100 dark:text-teal-accent-400"
                    viewBox="0 0 24 24"
                    stroke-linejoin="round"
                    stroke-width="2"
                    stroke-linecap="round"
                    stroke-miterlimit="10"
                    stroke="currentColor"
                    fill="none"
                >
                    <rect x="3" y="1" width="7" height="12"></rect>
                    <rect x="3" y="17" width="7" height="6"></rect>
                    <rect x="14" y="1" width="7" height="6"></rect>
                    <rect x="14" y="11" width="7" height="12"></rect>
                </svg>
                <span
                    class="ml-2 text-xl font-bold tracking-wide text-gray-600 uppercase dark:text-gray-100"
                    >Fursee Inc</span
                >
            </a>
            <ul class="flex items-center hidden space-x-8 lg:flex">
                <li>
                    <a
                        href="/"
                        aria-label="Our product"
                        title="Our product"
                        class="font-medium tracking-wide transition-colors duration-200 hover:text-blue-gray-700 {{ (request()->is('/')) ? 'font-bold text-blue-gray-900 dark:text-gray-50 ' : 'text-gray-600' }}"
                        >Home</a
                    >
                </li>
                <li>
                    <a
                        href="{{ route('aboutUs') }}"
                        aria-label="Our product"
                        title="Our product"
                        class="font-medium tracking-wide transition-colors duration-200 hover:text-blue-gray-700 {{ (request()->is('about-us')) ? 'font-bold text-blue-gray-900 dark:text-gray-50 ' : 'text-gray-600' }}"
                        >About Us</a
                    >
                </li>
                
                <li>
                    <a
                        href="{{ route('blog.index') }}"
                        aria-label="Product pricing"
                        title="Product pricing"
                        class="font-medium tracking-wide transition-colors duration-200 hover:text-blue-gray-700 {{ (request()->is('blogs*')) ? 'font-bold text-blue-gray-900 dark:text-gray-50 ' : 'text-gray-600' }}"
                        >Blog</a
                    >
                </li>
                <li>
                    <a
                        href="{{ route('teams') }}"
                        aria-label="About us"
                        title="About us"
                        class="font-medium tracking-wide transition-colors duration-200 hover:text-blue-gray-700 {{ (request()->is('teams')) ? 'font-bold text-blue-gray-900 dark:text-gray-50 ' : 'text-gray-600' }}"
                        >Team</a
                    >
                </li>
            </ul>
            <ul class="flex items-center hidden space-x-8 lg:flex">
                <li>
                    <a
                        href="{{ route('contactUs') }}"
                        class="inline-flex items-center justify-center h-12 px-6 font-medium tracking-wide text-white transition duration-200 rounded-lg shadow-md bg-blue-gray-900 hover:bg-blue-gray-800 dark:bg-blue-gray-600 dark:hover:bg-gray-500 dark:hover:text-gray-50 focus:shadow-outline focus:outline"
                        aria-label="Contact Us"
                        title="Contact Us"
                    >
                        Contact Us
                    </a>
                </li>
            </ul>
            <div class="lg:hidden" style="z-index: 1000;">
                <button
                    aria-label="Open Menu"
                    title="Open Menu"
                    class="p-2 -mr-1 transition duration-200 rounded focus:outline-none focus:shadow-outline"
                    @click="isMenuOpen = true"
                >
                    <svg class="w-5 text-gray-600" viewBox="0 0 24 24">
                        <path
                            fill="currentColor"
                            d="M23,13H1c-0.6,0-1-0.4-1-1s0.4-1,1-1h22c0.6,0,1,0.4,1,1S23.6,13,23,13z"
                        ></path>
                        <path
                            fill="currentColor"
                            d="M23,6H1C0.4,6,0,5.6,0,5s0.4-1,1-1h22c0.6,0,1,0.4,1,1S23.6,6,23,6z"
                        ></path>
                        <path
                            fill="currentColor"
                            d="M23,20H1c-0.6,0-1-0.4-1-1s0.4-1,1-1h22c0.6,0,1,0.4,1,1S23.6,20,23,20z"
                        ></path>
                    </svg>
                </button>
                <div v-if="isMenuOpen" class="absolute top-0 left-0 w-full">
                    <div class="p-5 bg-white border rounded shadow-sm dark:bg-gray-900">
                        <div class="flex items-center justify-between mb-4">
                            <div>
                                <a
                                    href="/"
                                    aria-label="Fursee Inc."
                                    title="Fursee Inc."
                                    class="inline-flex items-center"
                                >
                                    <svg
                                        class="w-8 text-deep-purple-accent-400"
                                        viewBox="0 0 24 24"
                                        stroke-linejoin="round"
                                        stroke-width="2"
                                        stroke-linecap="round"
                                        stroke-miterlimit="10"
                                        stroke="currentColor"
                                        fill="none"
                                    >
                                        <rect
                                            x="3"
                                            y="1"
                                            width="7"
                                            height="12"
                                        ></rect>
                                        <rect
                                            x="3"
                                            y="17"
                                            width="7"
                                            height="6"
                                        ></rect>
                                        <rect
                                            x="14"
                                            y="1"
                                            width="7"
                                            height="6"
                                        ></rect>
                                        <rect
                                            x="14"
                                            y="11"
                                            width="7"
                                            height="12"
                                        ></rect>
                                    </svg>
                                    <span
                                        class="ml-2 text-xl font-bold tracking-wide text-gray-800 uppercase dark:text-gray-400"
                                        >Fursee Inc.</span
                                    >
                                </a>
                            </div>
                            <div>
                                <button
                                    aria-label="Close Menu"
                                    title="Close Menu"
                                    class="p-2 -mt-2 -mr-2 transition duration-200 rounded hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
                                    @click="isMenuOpen = false"
                                >
                                    <svg
                                        class="w-5 text-gray-600"
                                        viewBox="0 0 24 24"
                                    >
                                        <path
                                            fill="currentColor"
                                            d="M19.7,4.3c-0.4-0.4-1-0.4-1.4,0L12,10.6L5.7,4.3c-0.4-0.4-1-0.4-1.4,0s-0.4,1,0,1.4l6.3,6.3l-6.3,6.3 c-0.4,0.4-0.4,1,0,1.4C4.5,19.9,4.7,20,5,20s0.5-0.1,0.7-0.3l6.3-6.3l6.3,6.3c0.2,0.2,0.5,0.3,0.7,0.3s0.5-0.1,0.7-0.3 c0.4-0.4,0.4-1,0-1.4L13.4,12l6.3-6.3C20.1,5.3,20.1,4.7,19.7,4.3z"
                                        ></path>
                                    </svg>
                                </button>
                            </div>
                        </div>
                        <nav>
                            <ul class="space-y-4">
                                <li>
                                    <a
                                        href="/"
                                        aria-label="Our product"
                                        title="Our product"
                                        class="font-medium tracking-wide text-gray-700 transition-colors duration-200 dark:text-gray-300 hover:text-deep-purple-accent-400"
                                        >Home</a
                                    >
                                </li>
                                <li>
                                    <a
                                        href="{{ route('aboutUs') }}"
                                        aria-label="Our product"
                                        title="Our product"
                                        class="font-medium tracking-wide text-gray-700 transition-colors duration-200 dark:text-gray-300 hover:text-deep-purple-accent-400"
                                        >About Us</a
                                    >
                                </li>
                                
                                <li>
                                    <a
                                        href="{{ route('blog.index') }}"
                                        aria-label="Product pricing"
                                        title="Product pricing"
                                        class="font-medium tracking-wide text-gray-700 transition-colors duration-200 dark:text-gray-300 hover:text-deep-purple-accent-400"
                                        >Blog</a
                                    >
                                </li>
                                <li>
                                    <a
                                        href="{{ route('teams') }}"
                                        aria-label="Team"
                                        title="Team"
                                        class="font-medium tracking-wide text-gray-700 transition-colors duration-200 dark:text-gray-300 hover:text-deep-purple-accent-400"
                                        >Team</a
                                    >
                                </li>
                                <li>
                                    <a
                                        href="{{ route('contactUs') }}"
                                        class="inline-flex items-center justify-center w-full h-12 px-6 font-medium tracking-wide text-white transition duration-200 rounded shadow-md bg-blue-gray-900 hover:bg-blue-gray-800 focus:shadow-outline focus:outline-none"
                                        aria-label="Contact Us"
                                        title="Contact Us"
                                    >
                                        Contact Us
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>