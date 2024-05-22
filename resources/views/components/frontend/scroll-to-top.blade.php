<div x-cloak>
    <button x-show="scrollBackTop"
        x-on:scroll.window="scrollBackTop = (window.pageYOffset > window.outerHeight * 0.3) ? true : false"
        @click.prevent="window.scrollTo({top: 0, behavior: 'smooth'})" aria-label="Back to top"
        class="fixed bottom-4 md:bottom-8 right-0 py-2 px-2 rounded-md mx-3 my-3 md:my-10 text-white bg-gray-900 dark:bg-gray-800 hover:cursor-pointer focus:outline-none">
        <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
            <path fillRule="evenodd"
                d="M3.293 9.707a1 1 0 010-1.414l6-6a1 1 0 011.414 0l6 6a1 1 0 01-1.414 1.414L11 5.414V17a1 1 0 11-2 0V5.414L4.707 9.707a1 1 0 01-1.414 0z"
                clipRule="evenodd" />
        </svg>
    </button>
</div>
