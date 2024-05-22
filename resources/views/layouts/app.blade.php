@props(['title', 'meta_keywords', 'meta_description'])

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth focus:scroll-auto"
    x-data="{
        darkMode: localStorage.getItem('darkMode') ||
            localStorage.setItem('darkMode', 'light'),
        showMenu: false,
        atTop: true,
        openMenuDesktop: false,
        modalOpen: false,
        scrollBackTop: false
    }" x-init="window.addEventListener('scroll', () => { atTop = window.scrollY < 100 }), $watch('darkMode', val => localStorage.setItem('darkMode', val))"
    x-bind:class="{
        'dark': darkMode === 'dark' || (darkMode === 'light' && window.matchMedia('(prefers-color-scheme: dark)')
            .matches)
    }">


<meta name="viewport" content="width=device-width, initial-scale=1" />

<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="description" content="A Laravel Breeze starter template with Tailwind CSS and Alpine.js." />
<meta name="keywords"
    content="{{ $meta_keywords ?? 'php language, laravel framework, livewire, alpinejs, vuejs, vite, tailwindcss, javascript, backend, frontend' }}">
<meta name="description"
    content="{{ $meta_description ?? 'Share knowledge about web development, design, php language, laravel framework and more.' }}">
<meta name="author" content="TuanTQ" />
<meta name="robots" content="index, follow" />
<meta name="csrf-token" content="{{ csrf_token() }}" />

<meta property="og:title" content="{{ isset($title) ? $title . ' | ' : '' }} {{ config('app.name', 'Laravel') }}" />
<meta property="og:description"
    content="Share knowledge about web development, design, php language, laravel framework and more." />
<meta property="twitter:card" content="summary_large_image" />
<meta property="twitter:title"
    content="{{ isset($title) ? $title . ' | ' : '' }} {{ config('app.name', 'Laravel') }}" />
<meta property="twitter:image" content="https://www.example.com/image.jpg" />
<meta property="twitter:description"
    content="Share knowledge about web development, design, php language, laravel framework and more." />

<title>{{ $title ?? config('app.name', 'Laravel') }}</title>
<link rel="apple-touch-icon" sizes="76x76" href="{{ asset('frontend/favicons/apple-touch-icon.png') }}" />
<link rel="icon" type="image/png" sizes="32x32" href="{{ asset('frontend/favicons/favicon-32x32.png') }}" />
<link rel="icon" type="image/png" sizes="16x16" href="{{ asset('frontend/favicons/favicon-16x16.png') }}" />
<link rel="mask-icon" href="{{ asset('frontend/favicons/safari-pinned-tab.svg') }}" color="#5bbad5" />

@livewireStyles
@vite(['resources/css/app.css', 'resources/js/app.js'])

<body x-cloak class="min-h-screen antialiased theme-style" @keyup.meta.k="modalOpen = true"
@keyup.escape="modalOpen = false">
    <div class="container max-w-5xl mx-auto px-4 sm:px-6 xl:px-0">
        <div class="flex h-screen flex-col justify-between font-sans">
            <x-frontend.header />
            <main class="mb-auto lg:pt-32 pt-10 px-5">
                {{ $slot }}
            </main>
            <x-frontend.footer />
        </div>
    </div>
    <x-frontend.scroll-to-top />
    <x-frontend.modal-search />

    @livewireScripts

</body>

</html>
