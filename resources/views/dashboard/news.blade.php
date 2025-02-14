<div>
    <x-dashboard.tabs current="news"/>

    <div class="flex justify-center">
        <form wire:submit="save" class="w-[40rem] p-10 flex flex-col gap-3">
            @if($errors->any())
                <div class="flex my-3 w-full max-w-sm overflow-hidden bg-white rounded-lg shadow-md">
                    <div class="flex items-center justify-center w-12 bg-red-500">
                        <svg class="w-6 h-6 text-white fill-current" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg">
                            <path d="M20 3.36667C10.8167 3.36667 3.3667 10.8167 3.3667 20C3.3667 29.1833 10.8167 36.6333 20 36.6333C29.1834 36.6333 36.6334 29.1833 36.6334 20C36.6334 10.8167 29.1834 3.36667 20 3.36667ZM19.1334 33.3333V22.9H13.3334L21.6667 6.66667V17.1H27.25L19.1334 33.3333Z" />
                        </svg>
                    </div>
                    <div class="px-4 py-2 -mx-3">
                        <div class="mx-3">
                            <span class="font-semibold text-red-500">Error</span>
                            @foreach($errors->all() as $error)
                                <p class="text-sm text-gray-600">
                                    {{ $error }}
                                </p>
                            @endforeach
                        </div>
                    </div>
                </div>
            @endif
            @if(session()->has("status"))
                <div class="flex my-2 w-full max-w-sm overflow-hidden bg-white rounded-lg shadow-md">
                    <div class="flex items-center justify-center w-12 bg-emerald-500">
                        <svg class="w-6 h-6 text-white fill-current" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg">
                            <path d="M20 3.33331C10.8 3.33331 3.33337 10.8 3.33337 20C3.33337 29.2 10.8 36.6666 20 36.6666C29.2 36.6666 36.6667 29.2 36.6667 20C36.6667 10.8 29.2 3.33331 20 3.33331ZM16.6667 28.3333L8.33337 20L10.6834 17.65L16.6667 23.6166L29.3167 10.9666L31.6667 13.3333L16.6667 28.3333Z" />
                        </svg>
                    </div>

                    <div class="px-4 py-2 -mx-3">
                        <div class="mx-3">
                            <span class="font-semibold text-emerald-500">Success</span>
                            <p class="text-sm text-gray-600">{{ session("status") }}</p>
                        </div>
                    </div>
                </div>
            @endif
            <div>
                <label for="image" class="block text-sm text-gray-500">Image</label>

                <input wire:model="image" type="file" class="block w-full px-3 py-2 mt-2 text-sm text-gray-600 bg-white border border-gray-200 rounded-lg file:bg-gray-200 file:text-gray-700 file:text-sm file:px-4 file:py-1 file:border-none file:rounded-full placeholder-gray-400/70 focus:border-blue-400 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-40" />
            </div>
            <div>
                <label for="title" class="block text-sm text-gray-500">Title</label>

                <input wire:model="title" id="title" type="text" placeholder="Title" class="block  mt-2 w-full placeholder-gray-400/70 rounded-lg border border-gray-200 bg-white px-5 py-2.5 text-gray-700 focus:border-blue-400 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-40" />
            </div>
            <div>
                <label for="description" class="block text-sm text-gray-500">Description</label>

                <textarea wire:model="description" id="description" type="text" placeholder="Description" class="block  mt-2 w-full placeholder-gray-400/70 rounded-lg border border-gray-200 bg-white px-5 py-2.5 text-gray-700 focus:border-blue-400 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-40" ></textarea>
            </div>
            <div class="mt-6">
                <button class="w-full cursor-pointer px-6 py-3 text-sm font-medium tracking-wide text-white capitalize transition-colors duration-300 transform bg-blue-500 rounded-lg hover:bg-blue-400 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-50">
                    Submit
                </button>
            </div>
        </form>
    </div>


</div>
