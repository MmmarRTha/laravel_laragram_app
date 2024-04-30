@extends('layouts.app')

@section('title_name')
    Edit Profile: {{ auth()->user()->username }}
@endsection

@section('content')
    <div class="p-3 md:flex md:justify-center">
        <div class="p-6 bg-white shadow md:w-1/2">
            <form method="POST" action="{{ route('profile.store') }}" enctype="multipart/form-data" class="mt-10 md:mt-0">
                @csrf
                <div class="mb-5">
                    <label for="username" class="block mb-2 font-bold uppercase text-sky-800">Username</label>
                    <input
                        id="username"
                        name="username"
                        type="text"
                        placeholder="Username"
                        class="border p-3 w-full rounded-lg @error('username') border-red-500 @enderror"
                        value="{{ auth()->user()->username }}"
                    >
                    @error("username")
                    <div class="relative p-2 my-2 text-sm leading-normal text-center text-red-700 bg-red-100 rounded-lg" role="alert">
                        <p>{{ $message }}</p>
                    </div>
                    @enderror
                </div>
                <div class="mb-5">
                    <label for="email" class="block mb-2 font-bold uppercase text-sky-800">Your Email</label>
                    <input
                        id="email"
                        name="email"
                        type="email"
                        placeholder="email"
                        class="border p-3 w-full rounded-lg @error('email') border-red-500 @enderror"
                        value="{{ auth()->user()->email }}"
                    >
                    @error("email")
                    <div class="relative p-2 my-2 text-sm leading-normal text-center text-red-700 bg-red-100 rounded-lg" role="alert">
                        <p>{{ $message }}</p>
                    </div>
                    @enderror
                </div>
                <div class="mb-5">
                    <label for="image" class="block mb-2 font-bold uppercase text-sky-800">Profile image</label>
                    <input
                        id="image"
                        name="image"
                        type="file"
                        class="w-full p-3 border rounded-lg"
                        value=""
                        accept=".jpg, .jpeg, .png"
                    >
                </div>
                <input type="submit" name="" id="" value="Save changes" class="w-full p-3 font-bold text-white uppercase rounded-lg bg-sky-600 hover:bg-sky-700">
            </form>
        </div>
    </div>
@endsection
