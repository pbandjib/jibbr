<x-app-layout>
        <section id="Login" class="mt-44">
            <x-card class="w-[500px]">
                <h1 class="font-bold text-2xl py-2 grid place-items-center border-b-2 border-grey-300 pb-4">Sign In</h1>

                <div class="flex flex-col mt-10">
                    <label for="email" class="ml-3">Email</label>
                    <x-text-input type="email" id="email" name="email" placeholder="Ex: email@example.com" />
                </div>

                <div class="flex flex-col mt-10">
                    <label for="password" class="ml-3">Password</label>
                    <x-text-input type="password" id="password" name="password" />
                </div>

                <div>
                    <p class="m-3">Don't have an account? <a href="{{ route('register') }}" class="text-green-600 underline">Register</a></p>
                </div>
            </x-card>
            <x-primary-button>
                Log in
            </x-primary-button>
        </section>
</x-app-layout>
