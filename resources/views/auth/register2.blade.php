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
<header class="w-full bg-brand-white h-20 flex justify-between items-center shadow-lg z-[3]">
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

<main class="w-full flex justify-center mt-12" >
    {{--    Change to form--}}
    <section id="Register">
        <div class="bg-brand-white rounded-lg shadow-lg py-5 px-10 w-[500px]">
            <h1 class="font-bold text-2xl py-2 grid place-items-center border-b-2 border-grey-300 pb-4">Register</h1>

            <div class="flex flex-col mt-10">
                <label for="username" class="ml-3">Username:</label>
                <input class="rounded-xl shadow-md focus:ring-0 border-1 border-transparent focus:border-1 focus:border-blue-300 focus:border" type="text" id="register" name="register" placeholder="Username" />
            </div>

            <div class="flex flex-col mt-10">
                <label for="email" class="ml-3">Email:</label>
                <input class="rounded-xl shadow-md focus:ring-0 border-1 border-transparent focus:border-1 focus:border-blue-300 focus:border" type="email" id="email" name="email" placeholder="email@example.com" />
            </div>

            <div class="flex flex-col mt-10 ">
                <label for="password" class="ml-3">Password:</label>
                <input class="rounded-xl shadow-md focus:ring-0 border-1 border-transparent focus:border-1 focus:border-blue-300 focus:border" type="password" id="password" name="password" placeholder="Password"/>
            </div>

            <div class="flex flex-col mt-10 ">
                <label for="password" class="ml-3">Confirm Password:</label>
                <input class="rounded-xl shadow-md focus:ring-0 border-1 border-transparent focus:border-1 focus:border-blue-300 focus:border" type="password" id="confirm password" name="confirm password" placeholder="Confirm Password"/>
            </div>

            <div>
                <p class="ml-3 mt-3 mb-3 text-red-500">Passwords do not match</p>
            </div>
            <div class="flex items-center">
                <input type="checkbox" id="termsCheckbox" class="form-checkbox text-green-500 h-4 w-4 ml-3">
                <label for="termsCheckbox" class="ml-2">I accept the <a href="#" class="text-green-500">terms and conditions</a></label>
            </div>
            <div>
                <p class="mt-3 ml-3">Already have an account? <a href="#" class="text-green-500 underline">Login</a></p>
            </div>
        </div>
        <button class="w-full h-10 mt-10 rounded-lg bg-gradient-to-r from-green-400 to-blue-500 hover:from-pink-500 hover:to-yellow-500 ">
            Register
        </button>
    </section>
</main>
</body>

</html>
