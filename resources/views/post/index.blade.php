{{--TODO: Fix Large and Small layouts proper formating--}}

<x-app-layout>
    <section id="posts" class="w-full flex justify-center">
        <div class="flex flex-col w-2/3">
            @foreach ($posts as $post)
                <x-card class="mt-4">
                    <div class="flex">
                        <div class="flex flex-col items-center justify-between mr-4 w-20">
                            <div class="flex flex-col items-center">
                                <p>123</p>
                                <img src="{{ asset('svg/comment.svg') }}"/>
                            </div>
                            <div class="flex flex-col items-center">
                                <p>123</p>
                                <img src="{{ asset('svg/heart.svg') }}"/>
                            </div>
                            <x-profile-picture image="{{$post->user->img}}"/>

                        </div>
                        <div>
                            <a href="{{route('post.show', $post->id)}}">
                                <h2 class="font-extrabold text-3xl mb-3">{{$post->title}}</h2>
                            </a>
                            <div class="flex items-center text-greyed-text mb-3">
                                <img class="h-6 w-6 mr-3 rounded-full object-cover" src="https://images.unsplash.com/photo-1568602471122-7832951cc4c5?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80"
                                <h3 class="font-bold mb-3 ">Community Name</h3>
                            </div>


                            <p class="mb-3 border-b border-gray-300 pb-3 break-all">{{$post->body}}</p>
                            <div class="flex justify-between">
                                <p class="text-greyed-text">Posted by <a href="#" class="text-link-primary"> {{$post->user->username}}</a></p>
                                <p class="text-greyed-text">{{$post->created_at->diffForHumans()}}</p>
                            </div>
                        </div>



                    </div>
                </x-card>
            @endforeach
        </div>
    </section>
</x-app-layout>
