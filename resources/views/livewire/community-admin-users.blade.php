<div class="w-3/4">
    <h1>Users View</h1>
    <x-card>
        <p>Owner</p>
        <p>{{$community->communityOwner->user->username}}</p>
    </x-card>
    <x-card>
        <p>Admins</p>
        @foreach($community->communityAdmin as $admin)
            <div class="flex justify-between">
                <p>{{$admin->user->username}}</p>
                @if(Auth::user()->id === $community->communityOwner->user->id)
                    <form action="{{route('community.admin.destroy', ['community' => $community->id, 'user' => $admin->user->id])}}" method="post">
                        @csrf
                        @method('DELETE')
                        <x-primary-button>Delete Admin</x-primary-button>
                    </form>
                @endif
            </div>
            @endforeach
        @if(Auth::user()->id === $community->communityOwner->user->id)
        <p>Add Admin</p>
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
    <x-card>
        <p>Moderators</p>
        @foreach($community->communityModerator as $moderator)
            <p>{{$moderator->user->username}}</p>
            @if($community->communityAdmin->contains('user.id', Auth::user()->id))
                <form action="{{route('community.moderator.destroy', ['community' => $community->id, 'user' => $moderator->user->id])}}" method="post">
                    @csrf
                    @method('DELETE')
                    <x-primary-button>Delete Moderator</x-primary-button>
                </form>
            @endif
        @endforeach
        @if($community->communityAdmin->contains('user.id', Auth::user()->id))
            <p>Add Moderator</p>
            <form method="post" action="{{route('community.moderator.store', $community->id)}}" class="mt-4">
                @csrf
                <x-text-input name="username" placeholder="enter user's username" />
                @if ($errors->has('username'))
                    <span class="text-red-500">{{$errors->first('username')}}</span>
                @endif
                <x-primary-button>Add Moderator</x-primary-button>
            </form>
        @endif
    </x-card>
</div>
