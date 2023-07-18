<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        @vite('resources/css/app.css')
    </head>

    <body class="min-h-screen bg-brand-gray">
        <header class="w-full bg-brand-white h-24 flex justify-between items-center shadow-lg z-[3]">
            <div class="w-full px-6 flex justify-between">
                <p class="font-extrabold text-3xl text-black">Jibbr</p>
                <div class="relative w-1/2 h-10">
                    <img class="absolute top-1/2 -translate-y-1/2 left-2" src="{{asset('svg/magnifyingglass.svg')}}" />
                    <input type="text" class="bg-brand-gray rounded-full h-10 w-full px-12 border-none" placeholder="Search for topics..." />
                </div>
                <div class="flex items-center">
                    <img class="mr-4" src="{{asset('svg/bell.svg')}}" />
                    <img class="w-12 h-12 object-cover rounded-full" src='https://images.unsplash.com/photo-1568602471122-7832951cc4c5?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80' />
                </div>
            </div>
        </header>

        <main class="w-full flex justify-center">
                    {{ $slot }}
        </main>
    </body>
</html>
