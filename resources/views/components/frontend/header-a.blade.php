@props(['active'])

@php
$classes = ($active ?? false)
            ? 'hidden text-lg cursor-pointer font-semibold text-blue-500 md:block transition duration-150 ease-in-out'
            : 'hidden text-lg cursor-pointer text-red-500 md:block transition duration-150 ease-in-out';
@endphp

<a :class="{ 'text__theme--light': atTop, 'text__theme--dark': !atTop }" {{ $attributes->merge(['class' => $classes]) }} >
    {{ $slot }}
</a>
