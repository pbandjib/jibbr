<x-app-layout>
    <x-main-layout>
            <x-card class="mt-4">
                <div class="flex">
                    <div class="flex flex-col justify-center items-center mr-4 w-20">
                        <div class="flex flex-col items-center">
                            <p>123</p>
                            <img src="{{ asset('svg/comment.svg') }}"/>
                        </div>
                        <div class="flex flex-col items-center mt-20">
                            <p>123</p>
                            <img src="{{ asset('svg/heart.svg') }}"/>
                        </div>
                    </div>
                    <div class="w-full">
                        <div class="flex justify-between">
                        <a href="{{route('post.show', $post->id)}}">
                            <h2 class="font-extrabold text-3xl mb-3 break-all">{{$post->title}}</h2>
                        </a>
                            <x-dropdown align="right" width="48">
                                <x-slot name="trigger">
                                    <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                                        <img class="cursor-pointer" src="{{asset('svg/dots.svg')}}"/>
                                    </button>
                                </x-slot>

                                <x-slot name="content">
                                    @if (Auth::user()->id == $post->user_id)
                                    <x-dropdown-link :href="route('post.edit', $post->id)">
                                        {{ __('Edit') }}
                                    </x-dropdown-link>

                                        <x-dropdown-link :href="route('post.delete', $post->id)">
                                            {{ __('Delete') }}
                                        </x-dropdown-link>
                                    @else
                                        <x-dropdown-link :href="route('profile.edit')">
                                            {{ __('Share') }}
                                        </x-dropdown-link>
                                        <x-dropdown-link :href="route('profile.edit')">
                                            {{ __('Report') }}
                                        </x-dropdown-link>
                                    @endif
                                </x-slot>
                            </x-dropdown>
                        </div>
                        <div class="flex items-center text-greyed-text mb-3">
                            <img class="h-6 w-6 mr-3 rounded-full object-cover" src="https://images.unsplash.com/photo-1568602471122-7832951cc4c5?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80"
                            <h3 class="font-bold mb-3 ">Community Name</h3>
                        </div>


                        <p class="mb-3 border-b border-gray-300 pb-3 break-all">{{$post->body}}</p>
                        <div class="flex justify-between mb-3">
                            <div class="flex">
                                <x-profile-picture image="{{$post->user->img}}" />
                                <p class="text-greyed-text ">Posted by <a href="#" class="text-link-primary"> {{$post->user->username}}</a></p>
                            </div>
                            <p class="text-greyed-text">{{$post->created_at->diffForHumans()}}</p>
                        </div>
                        <form class="flex flex-col w-full bg-brand-gray shadow-xl rounded-xl p-4">
                            <textarea class="w-full h-40 border-transparent bg-transparent focus:border-transparent focus:ring-transparent" placeholder="Make a comment"></textarea>
                            <div class="flex justify-between items-center mt-4">
                                <p>123/5000</p>
                                <x-primary-button class="w-48">Post</x-primary-button>
                            </div>
                        </form>
                    </div>
                </div>
            </x-card>
        <x-card class=" flex h-10 w-full mt-4 items-center">
            <p>Feed Filters</p>
        </x-card>
    </x-main-layout>
</x-app-layout>
