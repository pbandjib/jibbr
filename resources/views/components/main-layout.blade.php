<section id="posts" class="w-full flex justify-center">
    <div class="flex w-1/6 justify-center mt-4">
        <x-card class="h-1/6">
            <p class="text-xl text-center border-b p-3 mb-3 " >Menu</p>
            <a href="{{route('community.index')}}">All Communities</a>
        </x-card>
    </div>
    <div class="flex flex-col w-2/3">
        {{ $slot }}
    </div>

    <div class="flex w-1/6 justify-center mt-4">
        <x-card class="justify-center h-96">
            <p></p>
        </x-card>
    </div>
</section>
