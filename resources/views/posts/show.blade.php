@extends('layouts.app')

@section('title_name')
    {{ $post->title }}
@endsection

@section('content')
<div class="container flex px-2 mx-auto">
    <div class="md:w-1/2">
        <img src="{{ Vite::asset('public/uploads') . '/' . $post->image }}" alt="Image Post" {{ $post->title }}>
        <div>
            <p>0 Likes</p>
        </div>
        <div>
            <p class="font-bold">{{ $post->user->username }}</p>
            <p class="text-sm text-gray-500">{{ $post->created_at->diffForHumans() }}</p>
            <p class="mt-5">{{ $post->description }}</p>
        </div>
    </div>
    <div class="md:w-1/2">
        2
    </div>
</div>

@endsection
