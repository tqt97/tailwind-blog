{{-- Header PC --}}
<section class="hidden md:block">
    <!-- Alpine.js initializes data properties for the component. `atTop` determines if the page is scrolled past a certain point. -->
    <div class="fixed z-50 w-full transition-all duration-1000 rounded-full inset-x-0 mx-auto ease-in-out transform px-5"
        :class="{
            'bg-gray-950 dark:bg-white backdrop-blur-3xl backdrop-filter max-w-3xl mt-3 py-2': !
                atTop,
            'max-w-5xl py-4': atTop
        }"
        @scroll.window="atTop = (window.pageYOffset > 150 ? false : true)">
        <!-- This div is styled to change its appearance based on the scroll position, toggling classes for background, opacity, blur, and width. -->
        <div class="flex flex-col w-full py-1 mx-auto md:items-center md:justify-between md:flex-row"
            :class="{ 'px-2': !atTop }">
            <!-- Another Alpine.js component for handling the navigation menu's open/close state. -->
            <div class="flex flex-row items-center justify-between">
                <span class="font-bold tracking-tighter text-black uppercase"
                    :class="{ 'text-black': atTop, 'text-white': !atTop }">
                    <!-- This span changes color based on the scroll position, using the `atTop` state. -->
                    <a href="/" aria-label="Header title">
                        <div class="flex items-center justify-start">
                            {{-- <div class="mr-300">
                                <img src="{{ asset('frontend/logo.svg') }}" :class="{ 'w-8': !atTop, 'hidden w-6': atTop }" />
                            </div> --}}
                            <div class="h-6 font-semibold leading-6"
                                :class="{ 'text-2xl text__theme--dark ': !atTop, 'text-3xl text__theme--light text__theme--dark': atTop }">
                                <span class="" :class="{ 'text__theme--dark': !atTop, 'bg__theme--light bg__theme--dark px-2 rounded-md': atTop }">T</span>
                            </div>
                        </div>
                    </a>
                </span>
                <button class="md:hidden focus:outline-none">
                    <!---- SVG Burger goes here ---->
                </button>
            </div>
            <nav :class="{ 'flex': openMenuDesktop, 'hidden': !openMenuDesktop }"
                class="flex-col flex-grow gap-8 hidden pb-4 md:pb-0 md:flex md:flex-row lg:ml-auto justify-end">
                <x-frontend.header-a href="/about" :active="request()->routeIs('about')">
                    About
                </x-frontend.header-a>
                <x-frontend.header-a href="/blog" :active="request()->routeIs('blog')">
                    Blog
                </x-frontend.header-a>

                <button x-on:click="modalOpen = !modalOpen" x-mousetrap.global.command-k.ctrl-k>
                    <x-icons.search />
                </button>

                <button x-on:click="darkMode = darkMode === 'dark' ? 'light' : 'dark'">
                    <x-icons.toggle-mode />
                </button>
            </nav>
        </div>
    </div>
</section>

{{-- Header mobilie --}}
<div class="mx-auto w-full bg-white dark:bg-gray-950 dark:text-white md:hidden block">
    <header class="flex items-center justify-between py-5 max-w-7xl mx-auto ">
        <div>
            <a href="/" aria-label="Header title" class="">
                <div class="flex items-center justify-start leading-5">
                    {{-- <div class="mr-3">
                        <img src="{{ asset('frontend/logo.svg') }}" />
                    </div>
                    <div class="hidden h-6 text-5xl font-semibold md:block leading-6">
                        T
                    </div> --}}
                    <a href="/" aria-label="Header title">
                        <div class="flex items-center justify-start">
                            {{-- <div class="mr-300">
                                <img src="{{ asset('frontend/logo.svg') }}" :class="{ 'w-8': !atTop, 'hidden w-6': atTop }" />
                            </div> --}}
                            <div class="h-6 font-semibold leading-6"
                                :class="{ 'text-2xl text__theme--dark ': !atTop, 'text-3xl text__theme--light text__theme--dark': atTop }">
                                <span class="" :class="{ 'text__theme--dark': !atTop, 'bg__theme--light bg__theme--dark px-2 rounded-md': atTop }">T</span>
                            </div>
                        </div>
                    </a>
                </div>
            </a>
        </div>
        <div class=" items-center space-x-4 leading-6 md:space-x-6 md:hidden flex">
            <x-frontend.header-a href="/blog" :active="request()->routeIs('blog')">
                {{ __('Blog') }}
            </x-frontend.header-a>

            <x-frontend.header-a href="/about" :active="request()->routeIs('about')">
                {{ __('About') }}
            </x-frontend.header-a>

            <button aria-label="Search" x-on:click="modalOpen =!modalOpen">
                <x-icons.search />
            </button>

            <button aria-label="Toggle Dark Mode" x-on:click="darkMode = darkMode === 'dark' ? 'light' : 'dark'">
                <x-icons.toggle-mode />
            </button>

            <button aria-label="Toggle Menu" class="md:hidden" x-on:click="showMenu = !showMenu">
                <x-icons.hambuger />
            </button>
            <div class="fixed left-0 top-0 z-10 h-full w-full transform bg-white opacity-95 duration-300 ease-in-out dark:bg-gray-950 dark:opacity-[0.90] translate-x-full"
                :class="{ 'translate-x-full': !showMenu, 'translate-x-0': showMenu }">
                <div class="flex justify-end">
                    <button class="mr-8 mt-11 h-8 w-8" aria-label="Toggle Menu" x-on:click="showMenu = false">
                        <x-icons.close />
                    </button>
                </div>
                <nav class="fixed mt-8 h-full">
                    <div class="px-12 py-4 border-b-2">
                        <a href="/blog" class="text-2xl font-bold tracking-widest text-gray-950 dark:text-gray-100"
                            x-on:click="showMenu = false">
                            {{ __('Blog') }}
                        </a>
                    </div>
                    <div class="px-12 py-4 border-b-2">
                        <a href="/about" class="text-2xl font-bold tracking-widest text-gray-950 dark:text-gray-100"
                            x-on:click="showMenu = false">
                            {{ __('About') }}
                        </a>
                    </div>
                </nav>
            </div>
        </div>
    </header>
</div>
