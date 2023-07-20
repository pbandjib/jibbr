<x-app-layout>
    <section id="posts" class="w-full flex justify-center">
        <div class="flex flex-col w-2/3">
            @foreach ($posts as $post)
                <x-card class="mt-4">
                    <h2 class="font-extrabold text-3xl">{{$post->title}}</h2>
                    <p>{{$post->body}}</p>
                    <p>{{$post->user->username}}</p>
                    <img class="w-20 h-20 object-cover rounded-full" src="{{$post->user->img}}" />
                </x-card>
            @endforeach
        </div>
    </section>
</x-app-layout>
