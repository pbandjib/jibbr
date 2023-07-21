{{--TODO: Fix Large and Small layouts proper formating--}}

<x-app-layout>
    <x-main-layout>
        <x-card class=" flex h-10 w-full mt-4 items-center">
            <p>Feed Filters</p>
        </x-card>
        <x-feed :posts="$posts" />
    </x-main-layout>
</x-app-layout>
