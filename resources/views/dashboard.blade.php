@extends('layouts.app')

@section('title_name')
    Profile: {{ $user->username }}
@endsection

@section('content')
    <div class="flex justify-center">
        <div class="flex flex-col items-center w-full md:flex-row md:w-8/12 lg:w-6/12">
            <div class="w-8/12 px-5 lg:w-6/12">
                <img src="{{ Vite::asset('resources/images/usuario.svg') }}" alt="Image user">
            </div>
            <div class="flex flex-col items-center px-5 py-10 md:w-8/12 lg:w-6/12 md:justify-center md:items-start">
                <p class="text-2xl text-gray-700">{{ $user->username }}</p>
                <p class="mt-5 mb-3 text-sm font-bold text-gray-800">0
                    <span class="font-normal">Followers</span>
                </p>
                <p class="mb-3 text-sm font-bold text-gray-800">0
                    <span class="font-normal">Following</span>
                </p>
                <p class="mb-3 text-sm font-bold text-gray-800">0
                    <span class="font-normal">Posts</span>
                </p>
            </div>
        </div>
    </div>

    <section class="container mx-auto mt-10">
        <h2 class="my-10 text-4xl font-black text-center purple_gradient">Posts</h2>
        @if ($posts->isEmpty())
            <p class="text-sm font-bold text-center text-gray-800 uppercase">No posts yet</p>
        @endif
        <div class="grid gap-6 px-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
            @foreach ($posts as $post)
            <div>
                <a>
                    <img src="{{ Vite::asset('public/uploads') . '/' . $post->image }}" alt="Image Post" {{ $post->title }}>
                </a>
            </div>
            @endforeach
        </div>

    </section>
@endsection
