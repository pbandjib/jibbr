<x-app-layout>
    <form class="mt-44" method="POST" action="{{ route('login') }}">
        @csrf
            <x-card class="w-[500px]">
                <h1 class="font-bold text-2xl py-2 grid place-items-center border-b-2 border-grey-300 pb-4">Sign In</h1>

                <div class="flex flex-col mt-10">
                    <label for="email" class="ml-3">Email</label>
                    <x-text-input type="email" id="email" name="email" placeholder="Ex: email@example.com" />
                    @if ($errors->has('email'))
                        <p class="m-3 text-red-500 m-2"> {{ $errors->first('email') }}</p>
                    @endif
                </div>

                <div class="flex flex-col mt-10 mb-3">
                    <label for="password" class="ml-3">Password</label>
                    <x-text-input type="password" id="password" name="password" />
                    @if ($errors->has('password'))
                        <p class="m-3 text-red-500 m-2"> {{ $errors->first('password') }}</p>
                    @endif
                </div>
                <a class="underline ml-3" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}</a>

                <div>
                    <p class="m-3">Don't have an account? <a href="{{ route('register') }}" class="text-green-600 underline">Register</a></p>
                </div>
            </x-card>
            <x-primary-button class="w-full mt-10">
                Log in
            </x-primary-button>
        </form>
</x-app-layout>
