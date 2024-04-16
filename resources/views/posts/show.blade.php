@extends('layouts.app')

@section('title_name')
    {{ $post->title }}
@endsection

@section('content')
<div class="container px-2 mx-auto md:flex">
    <div class="md:w-1/2">
        <img src="{{ Vite::asset('public/uploads') . '/' . $post->image }}" alt="Image Post" {{ $post->title }}>
        <div>
            <p> <3 0 Likes</p>
        </div>
        <div>
            <p class="font-bold">{{ $post->user->username }}</p>
            <p class="text-sm text-gray-500">{{ $post->created_at->diffForHumans() }}</p>
            <p class="mt-5">{{ $post->description }}</p>
        </div>
    </div>
    <div class="p-5 md:w-1/2">
        <div class="p-5 mb-5 bg-white shadow">
            @auth
                <p class="mb-4 text-base font-bold text-center text-slate-700">New Comment</p>
                <form action="{{ route('comments.store', ['post' => $post, 'user' => $user]) }}" method="POST">
                    <div class="mb-5">
                        <label for="comment" class="block mb-2 font-bold uppercase text-sky-800">comment:</label>
                        <textarea
                            id="comment"
                            name="comment"
                            rows="2"
                            placeholder="Write your comment here"
                            class="block border p-3 w-full rounded-lg @error('comment') border-red-500 @enderror"
                            ></textarea>
                        @error('comment')
                        <div class="relative p-2 my-2 text-sm leading-normal text-center text-red-700 bg-red-100 rounded-lg" role="alert">
                            <p>{{ $message }}</p>
                        </div>
                        @enderror
                    </div>
                    <input type="submit" name="" id="" value="Add Comment" class="w-full p-3 font-bold text-white uppercase rounded-lg bg-sky-600 hover:bg-sky-700">
                </form>
            @endauth
        </div>
    </div>
</div>

@endsection
