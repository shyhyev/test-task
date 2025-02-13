<div class="container mx-auto">
    <div class="grid grid-cols-1 gap-8 mt-8 md:mt-16 md:grid-cols-2">
        @foreach($news as $item)
            <div class="lg:flex">
                <div class="bg-center bg-cover w-56 h-56 rounded-lg" style="background-image: url('{{ public_url($item->image) }}')"></div>

                <div class="flex flex-col justify-between py-6 lg:mx-6">
                    <a href="{{ route("news.detail", $item) }}" class="text-xl font-semibold text-gray-800 hover:underline ">
                        {{ $item->title }}
                    </a>

                    <span class="text-sm text-gray-500">{{ $item->created_at->isoFormat("LL") }}</span>
                </div>
            </div>
        @endforeach
    </div>

    <div class="mt-10 flex justify-center">
        {{ $news->links("components.pagination") }}
    </div>
</div>
