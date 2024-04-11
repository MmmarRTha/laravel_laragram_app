<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>LaraGram App - @yield('title_name')</title>
        @vite('resources/css/app.css')
    </head>
    <body class="bg-slate-100">
        <header class="p-5 bg-white border-b shadow">
            <div class="container flex items-center justify-between mx-auto">
                <a href="/" class="text-3xl font-black">LaraGram</a>
                @auth
                    <nav class="flex items-center gap-2">
                        <a class="text-sm font-bold text-sky-800" href="">
                            Hello:
                            <span class="font-normal">
                                {{ auth()->user()->username }}
                            </span>
                        </a>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="text-sm font-bold uppercase text-sky-800">Logout</button>
                        </form>
                    </nav>
                @endauth

                @guest
                    <nav class="flex items-center gap-2">
                        <a class="text-sm font-bold uppercase text-sky-800" href="{{ route('login') }}">Login</a>
                        <a class="text-sm font-bold uppercase text-sky-800" href="{{ route('register') }}">Register</a>
                    </nav>
                @endguest
            </div>
        </header>

        <main class="container mx-auto mt-10">
            <h2 class="mb-10 text-3xl font-black text-center">@yield('title_name')</h2>
            @yield('content')
        </main>

        <footer class="mt-10">
            <div class="p-5 text-sm font-bold text-center uppercase text-sky-800">
                <p>LaraGram &copy; {{ now()->year }} - All rights reserved. Developed by <a href="https://github.com/mmmarrtha">Martha Nieto</a></p>
            </div>
        </footer>
    </body>
</html>
