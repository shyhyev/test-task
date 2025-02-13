<header class="bg-white">
    <nav class="mx-auto flex max-w-7xl items-center justify-between p-6 lg:px-8" aria-label="Global">
        <div class="flex lg:flex-1">
            <a href="/" class="-m-1.5 p-1.5">
                <h1 class="bold text-2xl">News</h1>
            </a>
        </div>

        <div class="flex flex-1 justify-end">
            @auth("web")
                <a href="{{ route("dashboard.profile") }}" class="flex items-center gap-1">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                        <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10s-3.516.68-4.168 1.332c-.678.678-.83 1.418-.832 1.664z"/>
                    </svg>
                    {{ auth()->user()->name }}
                </a>
            @endauth

            @guest("web")
                <button x-data x-on:click="$dispatch('open-modal')"
                        class="cursor-pointer text-sm/6 font-semibold text-gray-900">Log in <span aria-hidden="true">&rarr;</span>
                </button>
            @endguest
        </div>
    </nav>
</header>
