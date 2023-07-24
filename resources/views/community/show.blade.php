{{--TODO: Fix Large and Small layouts proper formating--}}

<x-app-layout>
    <x-main-layout>
        <x-card class="mt-4">
            <h1 class="text-3xl font-extrabold">{{$community->community_name}}</h1>
            <p class="text-greyed-text mt-4">{{$community->community_description}}</p>
            @if (Auth::user() && collect($community->communityAdmin)->contains(function ($admin) {
               return $admin->user_id == Auth::user()->id;

               }))

                <a href="{{route('community.edit', $community->id)}}">Edit</a>
                <a href="{{route('community.delete', $community->id)}}">Delete</a>
                <form method="post" action="{{route('community.admin.store', $community->id)}}" class="mt-4">
                    @csrf
                    <x-text-input name="username" placeholder="enter user's username" />
                    @if ($errors->has('username'))
                        <span class="text-red-500">{{$errors->first('username')}}</span>
                    @endif
                    <x-primary-button>Add Admin</x-primary-button>
                </form>
            @endif
        </x-card>
        <x-card class=" flex h-10 w-full mt-4 items-center">
            <p>Feed Filters</p>
        </x-card>
        <x-card>
            @foreach($community->communityAdmin as $admin)
                <p>{{$admin->user->username}}</p>
                <form action="{{route('community.admin.destroy', ['community' => $community->id, 'user' => $admin->user->id])}}" method="post">
                    @csrf
                    @method('DELETE')
                    <x-primary-button>Delete Admin</x-primary-button>
                </form>
            @endforeach
        </x-card>
        <x-feed :posts="$community->posts" />
    </x-main-layout>
</x-app-layout>
