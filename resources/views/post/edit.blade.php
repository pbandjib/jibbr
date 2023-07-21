<x-app-layout>
    <section id="create-post" class="mt-20 w-full flex justify-center">
        <x-card class="w-2/3">
            <h1 class="font-extrabold text-3xl">Editing {{$post->title}}</h1>
            <div class="flex items-center mt-4">
                <x-profile-picture image="{{Auth::user()->img}}"/>
                <p class="text-lg text-neutral-500">Editing as <a class="text-link-primary" href="#">{{Auth::user()->username}}</a></p>
            </div>
            <form class="flex flex-col mt-6" action="{{route('post.store')}}" method="POST">
                @csrf
                <x-secondary-input type="text" name="title" placeholder="Title" value="{{$post->title}}" />
                @if ($errors->has('title'))
                    <p class="text-sm text-red-500 ml-3">{{$errors->first('title')}}</p>
                @endif
                <x-secondary-input class="mt-4" type="text" placeholder="Community" />
                <x-textarea class="mt-4 h-44" name="body" placeholder="Write your post...">{{$post->body}}</x-textarea>
                @if ($errors->has('body'))
                    <p class="text-sm text-red-500 ml-3">{{$errors->first('body')}}</p>
                @endif
                <div class="w-full justify-end flex">
                    <x-primary-button class="w-1/3">Update Post</x-primary-button>
                </div>
            </form>
        </x-card>
    </section>
</x-app-layout>
