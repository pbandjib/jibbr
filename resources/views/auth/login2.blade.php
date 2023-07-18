<x-app-layout>
        <section id="Login">
            <div class="bg-brand-white rounded-lg shadow-lg p-4">
                <h1>Sign In</h1>

                <div class="flex flex-col mt-10">
                    <label for="email">Email</label>
                    <input class="rounded-xl shadow-md border-none focus:ring-0 focus:border-none" type="email" id="email" name="email" placeholder="Ex: email@example.com" />
                </div>

                <div class="flex flex-col mt-10">
                    <label for="password">Password</label>
                    <input class="rounded-xl shadow-md border-none focus:ring-0 focus:border-none" type="password" id="password" name="password" />
                </div>

                <div>
                    <p>Don't have an account? <a>Register</a></p>
                </div>
            </div>
            <button class="w-full mt-10 bg-gradient-to-r from-brand-primary to-brand-secondary">
                Log in
            </button>
        </section>
</x-app-layout>
