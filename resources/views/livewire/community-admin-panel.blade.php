<div>
    <div class="w-full flex justify-between">
        @livewire('community-admin-menu')
        @if($active)
            @livewire($active, ['community' => $community, 'postReports' => $postReports], key($active))
        @endif
    </div>
</div>
