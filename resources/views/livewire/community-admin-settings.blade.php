<div>
    <h1>Settings view</h1>
    <h2>Edit community</h2>
    <x-card class="w-2/3">
        <h1 class="font-extrabold text-3xl">Editing {{$community->community_name}}</h1>
        <div class="flex items-center mt-4">
            <x-profile-picture image="{{Auth::user()->img}}"/>
            <p class="text-lg text-neutral-500">Editing as <a class="text-link-primary" href="#">{{Auth::user()->username}}</a></p>
        </div>
        <form class="flex flex-col mt-6" action="{{route('community.update', $community->id)}}" method="POST">
            @csrf
            @method('PUT')
            <x-secondary-input type="text" name="community_name" placeholder="Community Name" value="{{$community->community_name}}" />
            @if ($errors->has('community_name'))
                <p class="text-sm text-red-500 ml-3">{{$errors->first('community_name')}}</p>
            @endif
            <x-textarea class="mt-4 h-44" name="community_description" placeholder="Write community description...">{{$community->community_description}}</x-textarea>
            @if ($errors->has('community_description'))
                <p class="text-sm text-red-500 ml-3">{{$errors->first('community_description')}}</p>
            @endif
            <div class="w-full justify-end flex">
                <x-primary-button class="w-1/3 mt-10">Update Community</x-primary-button>
            </div>
        </form>
    </x-card>
    <x-card class="mt-24">
        <h1>Are you sure you want to delete {{$community->community_name}}?</h1>
        <form class="w-full flex justify-between" method="POST" action={{route('community.destroy', $community->id)}}>
            @csrf
            @method('DELETE')
            <a href="{{ url()->previous() }}" class="w-24">Cancel</a>
            <x-primary-button class="w-24" >Delete</x-primary-button>
        </form>
    </x-card>
</div>
