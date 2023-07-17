<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    @vite('resources/css/app.css')
</head>

<body class="min-h-screen bg-brand-gray">
<header class="w-full bg-brand-white h-28 flex justify-between items-center shadow-lg z-[3]">
    <div class="w-full px-6 flex justify-between">
        <p class="font-extrabold text-3xl text-black">Jibbr</p>
        <div class="relative w-1/2 h-10">
            <img class="absolute top-1/2 -translate-y-1/2 left-2" src="{{asset('svg/magnifying-glass.svg')}}" />
            <input type="text" class="bg-brand-gray rounded-full h-10 w-full px-12 border-none" placeholder="Search for topics..." />
        </div>
        <div class="flex items-center">
            <img class="mr-4" src="{{asset('svg/bell.svg')}}" />
            <img class="w-12 h-12 object-cover rounded-full" src='https://images.unsplash.com/photo-1568602471122-7832951cc4c5?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80' />
        </div>
    </div>
</header>

<main class="w-full flex justify-center mt-44">
{{--    Change to form--}}
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
</main>
</body>

</html>
