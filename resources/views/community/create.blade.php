<x-app-layout>
    <section id="create-post" class="mt-20 w-full flex justify-center">
        <x-card class="w-2/3">
            <h1 class="font-extrabold text-3xl">Create a community</h1>
            <div class="flex items-center mt-4">
                <x-profile-picture image="{{Auth::user()->img}}"/>
                <p class="text-lg text-neutral-500">Creating community as <a class="text-link-primary" href="#">{{Auth::user()->username}}</a></p>
            </div>
            <form class="flex flex-col mt-6" action="{{route('community.store')}}" method="POST">
                @csrf
                <x-secondary-input type="text" name="community_name" placeholder="Community Name" />
                @if ($errors->has('community_name'))
                    <p class="text-sm text-red-500 ml-3">{{$errors->first('community_name')}}</p>
                @endif
                <div class="w-full justify-end flex">
                    <x-primary-button class="w-1/3 mt-10">Create Community</x-primary-button>
                </div>
            </form>
        </x-card>
    </section>
</x-app-layout>
