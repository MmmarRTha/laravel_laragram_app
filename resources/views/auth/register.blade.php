@extends('layouts.app')

@section('title_name')
    Register to LaraGram
@endsection

@section('content')
    <div class="md:flex md:justify-center md:gap-10 md:items-center">
        <div class="md:w-6/12 p-5">
            <img src="{{ Vite::asset('resources/images/registrar.png') }}" alt="Image user register">
        </div>

        <div class="lg:w-4/12 bg-white p-6 rounded-lg shadow-xl">
            <form action="{{ route('register')}}" method="POST">
                @csrf
                <div class="mb-5">
                    <label for="name" class="mb-2 block uppercase text-sky-800 font-bold">Name</label>
                    <input
                        id="name"
                        name="name"
                        type="text"
                        placeholder="Your name"
                        class="border p-3 w-full rounded-lg @error('name') border-red-500 @enderror"
                        value="{{ old('name') }}"
                    >
                    @error('name')
                    <div class="relative p-2 my-2 text-sm leading-normal text-red-700 bg-red-100 rounded-lg text-center" role="alert">
                        <p>{{ $message }}</p>
                    </div>
                    @enderror
                </div>
                <div class="mb-5">
                    <label for="username" class="mb-2 block uppercase text-sky-800 font-bold">username</label>
                    <input
                        id="username"
                        name="username"
                        type="text"
                        placeholder="Your username"
                        class="border p-3 w-full rounded-lg @error('username') border-red-500 @enderror"
                        value="{{ old('username') }}"
                    >
                    @error('username')
                    <div class="relative p-2 my-2 text-sm leading-normal text-red-700 bg-red-100 rounded-lg text-center" role="alert">
                        <p>{{ $message }}</p>
                    </div>
                    @enderror
                </div>
                <div class="mb-5">
                    <label for="email" class="mb-2 block uppercase text-sky-800 font-bold">email</label>
                    <input
                        id="email"
                        name="email"
                        type="email"
                        placeholder="Your email"
                        class="border p-3 w-full rounded-lg @error('email') border-red-500 @enderror"
                        value="{{ old('email') }}"
                    >
                    @error('email')
                    <div class="relative p-2 my-2 text-sm leading-normal text-red-700 bg-red-100 rounded-lg text-center" role="alert">
                        <p>{{ $message }}</p>
                    </div>
                    @enderror
                </div>
                <div class="mb-5">
                    <label for="password" class="mb-2 block uppercase text-sky-800 font-bold">password</label>
                    <input
                        id="password"
                        name="password"
                        type="password"
                        placeholder="Your password"
                        class="border p-3 w-full rounded-lg @error('password') border-red-500 @enderror"
                        value="{{ old('password') }}"
                    >
                    @error('password')
                    <div class="relative p-2 my-2 text-sm leading-normal text-red-700 bg-red-100 rounded-lg text-center" role="alert">
                        <p>{{ $message }}</p>
                    </div>
                    @enderror
                </div>
                <div class="mb-5">
                    <label for="password_confirmation" class="mb-2 block uppercase text-sky-800 font-bold">repet password</label>
                    <input
                        id="password_confirmation"
                        name="password_confirmation"
                        type="password"
                        placeholder="Repet your password"
                        class="border p-3 w-full rounded-lg"
                    >
                </div>

                <input type="submit" name="" id="" value="Create Account" class="bg-sky-600 hover:bg-sky-700 uppercase font-bold w-full p-3 text-white rounded-lg">
            </form>
        </div>

    </div>
@endsection
