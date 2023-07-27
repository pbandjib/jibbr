<x-app-layout>
    <div class="w-full">
        @livewire('community-admin-panel', ['community' => $community, 'postReports' => $postReports])
    </div>
</x-app-layout>
