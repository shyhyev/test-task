<x-layout>
    <div class="container mx-auto flex flex-col gap-5">
        <div class="flex">
            <img class="w-auto max-h-80" src="{{ public_url($news->image) }}">
        </div>
        <h1 class="bold">Author: {{ $news->getAuthorName() }}</h1>
        <h1 class="bold">Date: {{ $news->created_at->isoFormat("LL") }}</h1>
        <h1 class="text-2xl bold">{{ $news->title }}</h1>
        <div>
            {!! $news->description !!}
        </div>
    </div>
</x-layout>
