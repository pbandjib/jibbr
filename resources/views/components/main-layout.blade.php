<section id="posts" class="w-full flex justify-center">
    <div class="flex w-1/6 justify-center mt-3">
        <x-card class="justify-center">
            <p>test</p>
        </x-card>
    </div>
    <div class="flex flex-col w-2/3">
        {{ $slot }}
    </div>

    <div class="flex w-1/6 justify-center mt-3">
        <x-card class="justify-center">
            <p>test</p>
        </x-card>
    </div>
</section>
