<div x-data="{ current: '{{ $current }}' }" class="flex justify-center overflow-x-auto overflow-y-hidden border-b border-gray-200 whitespace-nowrap">
    <a :href="current === 'profile' ? '#' : '{{ route("dashboard.profile") }}'"
            :class="current === 'profile' ? 'text-blue-600 border-blue-500' : 'text-gray-700 border-transparent'"
            class="inline-flex cursor-pointer items-center h-10 px-2 py-2 -mb-px text-center bg-transparent border-b-2 sm:px-4 -px-1 whitespace-nowrap focus:outline-none">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 mx-1 sm:w-6 sm:h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V8a2 2 0 00-2-2h-5m-4 0V5a2 2 0 114 0v1m-4 0a2 2 0 104 0m-5 8a2 2 0 100-4 2 2 0 000 4zm0 0c1.306 0 2.417.835 2.83 2M9 14a3.001 3.001 0 00-2.83 2M15 11h3m-3 4h2" />
        </svg>

        <span class="mx-1 text-sm sm:text-base">
            Profile
        </span>
    </a>

    <a :href="current === 'password' ? '#' : '{{ route("dashboard.password") }}'"
            :class="current === 'password' ? 'text-blue-600 border-blue-500' : 'text-gray-700 border-transparent'"
            class="inline-flex cursor-pointer items-center h-10 px-2 py-2 -mb-px text-center bg-transparent border-b-2 sm:px-4 -px-1 whitespace-nowrap cursor-base focus:outline-none hover:border-gray-400">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-lock" viewBox="0 0 16 16">
            <path d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2m3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2M5 8h6a1 1 0 0 1 1 1v5a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V9a1 1 0 0 1 1-1"/>
        </svg>

        <span class="mx-1 text-sm sm:text-base">
            Change password
        </span>
    </a>

    <a :href="current === 'news' ? '#' : '{{ route("dashboard.news") }}'"
            :class="current === 'news' ? 'text-blue-600 border-blue-500' : 'text-gray-700 border-transparent'"
            class="inline-flex cursor-pointer items-center h-10 px-2 py-2 -mb-px text-center bg-transparent border-b-2 sm:px-4 -px-1 whitespace-nowrap cursor-base focus:outline-none hover:border-gray-400">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-newspaper" viewBox="0 0 16 16">
            <path d="M0 2.5A1.5 1.5 0 0 1 1.5 1h11A1.5 1.5 0 0 1 14 2.5v10.528c0 .3-.05.654-.238.972h.738a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 1 1 0v9a1.5 1.5 0 0 1-1.5 1.5H1.497A1.497 1.497 0 0 1 0 13.5zM12 14c.37 0 .654-.211.853-.441.092-.106.147-.279.147-.531V2.5a.5.5 0 0 0-.5-.5h-11a.5.5 0 0 0-.5.5v11c0 .278.223.5.497.5z"/>
            <path d="M2 3h10v2H2zm0 3h4v3H2zm0 4h4v1H2zm0 2h4v1H2zm5-6h2v1H7zm3 0h2v1h-2zM7 8h2v1H7zm3 0h2v1h-2zm-3 2h2v1H7zm3 0h2v1h-2zm-3 2h2v1H7zm3 0h2v1h-2z"/>
        </svg>

        <span class="mx-1 text-sm sm:text-base">
            Publish news
        </span>
    </a>

    <a
            href="{{ route("dashboard.logout") }}"
            class="inline-flex cursor-pointer items-center h-10 px-2 py-2 -mb-px text-center text-gray-700 bg-transparent border-b-2 border-transparent sm:px-4 -px-1 whitespace-nowrap cursor-base focus:outline-none hover:border-gray-400">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-left" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M6 12.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v2a.5.5 0 0 1-1 0v-2A1.5 1.5 0 0 1 6.5 2h8A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 5 12.5v-2a.5.5 0 0 1 1 0z"/>
            <path fill-rule="evenodd" d="M.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L1.707 7.5H10.5a.5.5 0 0 1 0 1H1.707l2.147 2.146a.5.5 0 0 1-.708.708z"/>
        </svg>

        <span class="mx-1 text-sm sm:text-base">
            Log out
        </span>
    </a>
</div>
