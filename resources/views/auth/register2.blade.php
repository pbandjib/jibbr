<x-app-layout>
    <form class="mt-12" method="POST" action="{{ route('register') }}">
        @csrf
        <x-card class="w-[500px]">
            <h1 class="font-bold text-2xl py-2 grid place-items-center border-b-2 border-grey-300 pb-4">Register</h1>

            <div class="flex flex-col mt-10">
                <label for="username" class="ml-3">Username:</label>
                <x-text-input type="text" id="username" name="username" placeholder="Username" />
                @if ($errors->has('username'))
                    <p class="m-3 text-red-500 m-2"> {{ $errors->first('username') }}</p>
                @endif
            </div>

            <div class="flex flex-col mt-10">
                <label for="email" class="ml-3">Email:</label>
                <x-text-input type="email" id="email" name="email" placeholder="email@example.com" />
                @if ($errors->has('email'))
                    <p class="m-3 text-red-500 m-2"> {{ $errors->first('email') }}</p>
                @endif
            </div>

            <div class="flex flex-col mt-10 ">
                <label for="password" class="ml-3">Password:</label>
                <x-text-input type="password" id="password" name="password" placeholder="Password"/>
                @if ($errors->has('password'))
                    <p class="m-3 text-red-500 m-2"> {{ $errors->first('password') }}</p>
                @endif
            </div>

            <div class="flex flex-col mt-10 ">
                <label for="password_confirmation" class="ml-3">Confirm Password:</label>
                <x-text-input type="password" id="password_confirmation" name="password_confirmation" placeholder="Confirm Password"/>
                @if ($errors->has('password_confirmation'))
                    <p class="m-3 text-red-500 m-2"> {{ $errors->first('password_confirmation') }}</p>
                @endif
            </div>

            <div class="flex items-center mt-4">
                <input name="terms_and_service" type="checkbox" id="termsCheckbox" class="form-checkbox text-green-500 h-4 w-4 ml-3">
                <label for="termsCheckbox" class="ml-2">I accept the <a href="#" class="text-green-500 hover:underline">terms and conditions</a></label>
            </div>
            @if ($errors->has('terms_and_service'))
                <p class="m-3 text-red-500 m-2">{{ $errors->first('terms_and_service') }}</p>
            @endif


            <div>
                <p class="m-3">Already have an account? <a href="{{ route('login') }}" class="text-green-500 underline">Login</a></p>
            </div>
       </x-card>
        <x-primary-button>
            Register
        </x-primary-button>
    </form>
</x-app-layout>
