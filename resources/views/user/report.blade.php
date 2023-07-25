<x-app-layout>
    <section id="create-post" class="mt-20 w-full flex justify-center">
        <x-card class="w-2/3">
            <h1 class="font-extrabold text-3xl">Report</h1>
            <div class="flex flex-col mt-4">
                <div class="flex">
                    <x-profile-picture image="{{Auth::user()->img}}"/>
                    <p class="text-lg text-neutral-500">Reporting as <a class="text-link-primary" href="#">{{Auth::user()->username}}</a></p>
                </div>
                <div>
                    {{--                    Add Community Picture--}}
                    <p class="text-lg text-neutral-500">Reported User <a class="text-link-primary" href="#">{{$user->username}}</a></p>
                </div>
            </div>
            <form class="flex flex-col mt-6" action="{{route('user.report.store', $post->id)}}" method="POST">
                @csrf
                <x-textarea class="mt-4 h-44" name="report_description" placeholder="Write your report..."></x-textarea>
                @if ($errors->has('body'))
                    <p class="text-sm text-red-500 ml-3">{{$errors->first('report_description')}}</p>
                @endif
                <div class="w-full justify-end flex">
                    <x-primary-button class="w-1/3 mt-10">Report</x-primary-button>
                </div>
            </form>
        </x-card>
    </section>
</x-app-layout>
