<x-app-layout>
    <section id="create-post" class="mt-20 w-full flex justify-center">
        <x-card class="w-2/3">
            <h1 class="font-extrabold text-3xl">Create a post</h1>
            <div class="flex items-center mt-4">
                <img src="{{Auth::user()->img}}" class="w-6 h-6 mr-3 rounded-full object-cover" />
                <p class="text-lg text-neutral-500">Posting as <a class="text-link-primary" href="#">{{Auth::user()->username}}</a></p>
            </div>
            <form class="flex flex-col mt-6" action="{{route('post.store')}}" method="POST">
                @csrf
                <x-secondary-input type="text" name="title" placeholder="Title" />
                <x-secondary-input class="mt-4" type="text" placeholder="Community" />
                <x-textarea class="mt-4 h-44" name="body" placeholder="Write your post..."></x-textarea>
                <div class="w-full justify-end flex">
                    <x-primary-button class="w-1/3">Create Post</x-primary-button>
                </div>
            </form>
        </x-card>
    </section>
</x-app-layout>
