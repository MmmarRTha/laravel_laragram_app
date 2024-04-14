<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        @stack('styles')
        <title>LaraGram App - @yield('title_name')</title>
        @vite('resources/css/app.css')
    </head>
    <body class="bg-slate-100">
        <header class="p-5 bg-white border-b shadow">
            <div class="container flex items-center justify-between mx-auto">
                <a href="/" class="text-5xl blue_gradient font-black leading-[1.15]">LaraGram</a>
                @auth
                    <nav class="flex items-center gap-2 text-sky-800">
                        <a href="{{ route('posts.create')}}" class="flex items-center gap-2 p-2 text-sm font-bold uppercase border rounded cursor-pointer">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m2.25 15.75 5.159-5.159a2.25 2.25 0 0 1 3.182 0l5.159 5.159m-1.5-1.5 1.409-1.409a2.25 2.25 0 0 1 3.182 0l2.909 2.909m-18 3.75h16.5a1.5 1.5 0 0 0 1.5-1.5V6a1.5 1.5 0 0 0-1.5-1.5H3.75A1.5 1.5 0 0 0 2.25 6v12a1.5 1.5 0 0 0 1.5 1.5Zm10.5-11.25h.008v.008h-.008V8.25Zm.375 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z" />
                            </svg>
                            <p>Create</p>
                        </a>
                        <a class="text-sm font-bold" href="{{ route('posts.index', auth()->user()->username)}} ">
                            Hello:
                            <span class="font-normal">
                                {{ auth()->user()->username }}
                            </span>
                        </a>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="text-sm font-bold uppercase">Logout</button>
                        </form>
                    </nav>
                @endauth

                @guest
                    <nav class="flex items-center gap-2 purple_gradient">
                        <a class="text-sm font-bold uppercase" href="{{ route('login') }}">Login</a>
                        <a class="text-sm font-bold uppercase" href="{{ route('register') }}">Register</a>
                    </nav>
                @endguest
            </div>
        </header>

        <main class="container mx-auto mt-10">
            <h2 class="mb-10 text-3xl font-black text-center text-sky-700">@yield('title_name')</h2>
            @yield('content')
        </main>

        <footer class="flex justify-center mt-10">
            <div class="flex flex-col items-center p-5 text-sm font-bold uppercase md:flex-row blue_gradient">
                <p class="mr-1">LaraGram &copy; {{ now()->year }} - All rights reserved.</p>
                <p>Developed by <a class="purple_gradient" href="https://github.com/mmmarrtha">Martha Nieto</a></p>
            </div>
        </footer>
    </body>
</html>
