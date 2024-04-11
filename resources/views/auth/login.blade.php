@extends('layouts.app')

@section('title_name')
    Login to LaraGram
@endsection

@section('content')
    <div class="md:flex md:justify-center md:gap-10 md:items-center">
        <div class="p-5 md:w-6/12">
            <img src="{{ Vite::asset('resources/images/login.png') }}" alt="Login image">
        </div>

        <div class="p-6 bg-white rounded-lg shadow-xl lg:w-4/12">
            <form action="{{ route('login')}}" method="POST">
                @csrf

                @if (session('status'))
                    <div class="relative p-2 my-2 text-sm leading-normal text-center text-red-700 bg-red-100 rounded-lg" role="alert">
                        <p>{{ session('status') }}</p>
                    </div>
                @endif

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

                <input type="submit" name="" id="" value="Login" class="w-full p-3 font-bold text-white uppercase rounded-lg bg-sky-600 hover:bg-sky-700">
            </form>
        </div>

    </div>
@endsection
