<div>
    <div class="w-full flex justify-between">
        @livewire('community-admin-menu')
        @if($active)
            @livewire($active, [], key($active))
        @endif
    </div>
</div>
