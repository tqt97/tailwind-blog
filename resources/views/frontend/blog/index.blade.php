<x-app-layout title="All posts">
    <x-frontend.banner heading="All posts" description="Blgo page" />

    <div>
        <div class="pb-6 pt-6">
            <h1
                class="text-3xl font-extrabold leading-9 tracking-tight text-gray-950 dark:text-gray-100 sm:hidden sm:text-4xl sm:leading-10 md:text-6xl md:leading-14">
                Title
            </h1>
        </div>
        <div class="flex sm:space-x-24">
            <div>
                <ul>
                    @for ($i = 0; $i < 10; $i++)
                        <x-frontend.home.post-item />
                    @endfor
                </ul>
                <div class="space-y-2 pb-8 pt-6 md:space-y-5">
                    <nav class="flex justify-between">
                        <button class="cursor-auto disabled:opacity-50" disabled>
                            Previous
                        </button>

                        <span> 1 of 2 </span>

                        <a href="#" rel="next"> Next </a>
                    </nav>
                </div>
            </div>

            <div
                class="sticky top-20 hidden h-full max-h-screen min-w-[280px] max-w-[280px] flex-wrap overflow-auto rounded border-l-2 border-gray-100 dark:border-gray-800 pt-5 shadow1 dark:bg-gray-900/70 dark:shadow-gray-800/40 sm:flex">
                <div class="px-6 py-4">
                    <h3 class="font-bold uppercase text-primary-500">
                        All Posts
                    </h3>
                    <ul>
                        <li class="my-3">
                            <a href="#"
                                class="px-3 py-2 text-sm font-medium uppercase text-gray-500 hover:text-primary-500 dark:text-gray-300 dark:hover:text-primary-500"
                                aria-label="View posts tagged">
                                html
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
</x-app-layout>
