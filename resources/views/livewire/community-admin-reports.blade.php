<div>
    <h1>Reports View</h1>
    <x-card>
        <h2>Post Reports</h2>
        @foreach ($postReports as $postReport)
            {{$postReport}}
        @endforeach
    </x-card>
</div>
