@props(['heading', 'description'])


<div class="space-y-2 pb-8 pt-6 md:space-y-5">
    <h1
        class="text-3xl font-extrabold leading-9 tracking-tight text-gray-950 dark:text-gray-100 sm:text-4xl sm:leading-10 md:text-6xl md:leading-14">
        {{ $heading }}
    </h1>
    <p class="text-lg leading-7 text-gray-500 dark:text-gray-400">
        {{ $description }}
    </p>
</div>
