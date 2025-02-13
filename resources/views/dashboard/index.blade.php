<x-layout>
    <x-dashboard.tabs current="profile"/>

    <div class="p-10">
        <h1 class="text-2xl">Name: {{ auth()->user()->name }}</h1>
    </div>
</x-layout>
