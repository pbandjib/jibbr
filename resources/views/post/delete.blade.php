<x-app-layout>
    <x-card class="mt-24">
        <h1>Are you sure you want to delete {{$post->title}}?</h1>
        <form class="w-full flex justify-between">
            <a href="{{ url()->previous() }}" class="w-24">Cancel</a>
            <x-primary-button class="w-24">Delete</x-primary-button>
        </form>
    </x-card>
</x-app-layout>
