<div>
    <div class="w-full flex justify-between">
        @livewire('community-admin-menu')
        @if($active)
            @livewire($active, ['community' => $community], key($active))
        @endif
    </div>
</div>
