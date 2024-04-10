<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>LaraGram App - @yield('title_name')</title>
        @vite('resources/css/app.css')
    </head>
    <body class="bg-slate-100">
        <header class="p-5 border-b bg-white shadow">
            <div class="container mx-auto flex justify-between items-center">
                <a href="/" class="text-3xl font-black">LaraGram</a>
                <nav class="flex gap-2 items-center">
                    <a class="font-bold uppercase text-sky-800 text-sm" href="">Login</a>
                    <a class="font-bold uppercase text-sky-800 text-sm" href="{{ route('register')}}">Register</a>
                </nav>
            </div>
        </header>

        <main class="container mx-auto mt-10">
            <h2 class="font-black text-center text-3xl mb-10">@yield('title_name')</h2>
            @yield('content')
        </main>

        <footer class="mt-10">
            <div class="text-center p-5 text-sky-800 font-bold uppercase text-sm">
                <p>LaraGram &copy; {{ now()->year }} - All rights reserved. Developed by <a href="https://github.com/mmmarrtha">Martha Nieto</a></p>
            </div>
        </footer>
    </body>
</html>
