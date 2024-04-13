@extends('layouts.app')

@section('title_name')
    <p class="text-sky-700">Register to LaraGram</p>
@endsection

@section('content')
    <div class="md:flex md:justify-center md:gap-10 md:items-center">
        <div class="p-5 md:w-6/12">
            <img src="{{ Vite::asset('resources/images/registrar.png') }}" alt="Image user register">
        </div>

        <div class="p-6 bg-white rounded-lg shadow-xl lg:w-4/12">
            <form action="{{ route('register')}}" method="POST">
                @csrf
                <div class="mb-5">
                    <label for="name" class="block mb-2 font-bold uppercase text-sky-800">Name</label>
                    <input
                        id="name"
                        name="name"
                        type="text"
                        placeholder="Your name"
                        class="border p-3 w-full rounded-lg @error('name') border-red-500 @enderror"
                        value="{{ old('name') }}"
                    >
                    @error('name')
                    <div class="relative p-2 my-2 text-sm leading-normal text-center text-red-700 bg-red-100 rounded-lg" role="alert">
                        <p>{{ $message }}</p>
                    </div>
                    @enderror
                </div>
                <div class="mb-5">
                    <label for="username" class="block mb-2 font-bold uppercase text-sky-800">username</label>
                    <input
                        id="username"
                        name="username"
                        type="text"
                        placeholder="Your username"
                        class="border p-3 w-full rounded-lg @error('username') border-red-500 @enderror"
                        value="{{ old('username') }}"
                    >
                    @error('username')
                    <div class="relative p-2 my-2 text-sm leading-normal text-center text-red-700 bg-red-100 rounded-lg" role="alert">
                        <p>{{ $message }}</p>
                    </div>
                    @enderror
                </div>
                <div class="mb-5">
                    <label for="email" class="block mb-2 font-bold uppercase text-sky-800">email</label>
                    <input
                        id="email"
                        name="email"
                        type="email"
                        placeholder="Your email"
                        class="border p-3 w-full rounded-lg @error('email') border-red-500 @enderror"
                        value="{{ old('email') }}"
                    >
                    @error('email')
                    <div class="relative p-2 my-2 text-sm leading-normal text-center text-red-700 bg-red-100 rounded-lg" role="alert">
                        <p>{{ $message }}</p>
                    </div>
                    @enderror
                </div>
                <div class="mb-5">
                    <label for="password" class="block mb-2 font-bold uppercase text-sky-800">password</label>
                    <input
                        id="password"
                        name="password"
                        type="password"
                        placeholder="Your password"
                        class="border p-3 w-full rounded-lg @error('password') border-red-500 @enderror"
                    >
                    @error('password')
                    <div class="relative p-2 my-2 text-sm leading-normal text-center text-red-700 bg-red-100 rounded-lg" role="alert">
                        <p>{{ $message }}</p>
                    </div>
                    @enderror
                </div>
                <div class="mb-5">
                    <label for="password_confirmation" class="block mb-2 font-bold uppercase text-sky-800">repet password</label>
                    <input
                        id="password_confirmation"
                        name="password_confirmation"
                        type="password"
                        placeholder="Repet your password"
                        class="w-full p-3 border rounded-lg"
                    >
                </div>

                <input type="submit" name="" id="" value="Create Account" class="w-full p-3 font-bold text-white uppercase rounded-lg bg-sky-600 hover:bg-sky-700">
            </form>
        </div>

    </div>
@endsection
