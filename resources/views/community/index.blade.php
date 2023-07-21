<x-app-layout>
    <x-main-layout>
        <x-card class=" flex h-10 w-full mt-4 items-center">
            <p>Feed Filters</p>
        </x-card>
        @foreach ($communities as $community)
            <x-card class="mt-4">
                    <div class="w-full flex">
                        <div class="flex items-center text-greyed-text mb-3">
                            <img class="h-12 w-12 mr-3 rounded-full object-cover" src="https://images.unsplash.com/photo-1568602471122-7832951cc4c5?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80"/>

                        </div>
                        <div class="ml-3">
                            <a href="{{route('community.show', $community->id)}}">
                                <h3 class="font-bold break-all border-b border-gray-300 pb-3">{{$community->community_name}}</h3>
                            </a>
                            <p class="mb-3 border-b border-gray-300 p-3 break-all">{{$community->community_description}}</p>
                        </div>
                    </div>
            </x-card>
        @endforeach
    </x-main-layout>
</x-app-layout>
