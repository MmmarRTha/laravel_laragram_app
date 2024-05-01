@extends('layouts.app')

@section('title_name')
    Profile: {{ $user->username }}
@endsection

@section('content')
    <div class="flex justify-center">
        <div class="flex flex-col items-center w-full md:flex-row md:w-8/12 lg:w-6/12">
            <div class="w-8/12 px-5 lg:w-6/12">
                <img
                    src="{{ $user->image ? Vite::asset('public/profiles') . '/' . $user->image : Vite::asset('resources/images/usuario.svg') }}" alt="Image user"
                >
            </div>
            <div class="flex flex-col items-center px-5 py-10 md:w-8/12 lg:w-6/12 md:justify-center md:items-start">
                <div class="flex items-center gap-2">
                    <p class="text-2xl text-gray-700">{{ $user->username }}</p>
                    @auth
                        @if ($user->id === auth()->user()->id)
                            <a href="{{ route('profile.index') }}" class="text-gray-500 cursor-pointer hover:text-gray-600">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4">
                                    <path d="M21.731 2.269a2.625 2.625 0 0 0-3.712 0l-1.157 1.157 3.712 3.712 1.157-1.157a2.625 2.625 0 0 0 0-3.712ZM19.513 8.199l-3.712-3.712-12.15 12.15a5.25 5.25 0 0 0-1.32 2.214l-.8 2.685a.75.75 0 0 0 .933.933l2.685-.8a5.25 5.25 0 0 0 2.214-1.32L19.513 8.2Z" />
                                  </svg>
                            </a>
                        @endif
                    @endauth
                </div>
                <p class="mt-5 mb-3 text-sm font-bold text-gray-800">
                    {{ $user->followers->count() }}
                    <span class="font-normal"> @choice( 'Follower|Followers', $user->followers->count() )</span>
                </p>
                <p class="mb-3 text-sm font-bold text-gray-800">
                    {{ $user->followingTo->count() }}
                    <span class="font-normal">Following</span>
                </p>
                <p class="mb-3 text-sm font-bold text-gray-800">
                    {{ $user->posts->count() }}
                    <span class="font-normal">Posts</span>
                </p>
                @auth
                    @if ( $user->id !== auth()->user()->id )
                        @if ( !$user->following(auth()->user()) )
                            <form action="{{ route('users.follow', $user) }}" method="POST">
                                @csrf
                                <input type="submit" value="Follow" class="px-5 py-1 text-xs font-bold text-center text-white uppercase bg-blue-500 rounded-lg cursor-pointer hover:bg-blue-600">
                            </form>
                        @else
                            <form action="{{ route('users.unfollow', $user)}}" method="POST">
                                @method('DELETE')
                                @csrf
                                <input type="submit" value="Unfollow" class="px-3 py-1 text-xs font-bold text-center text-white uppercase bg-red-500 rounded-lg cursor-pointer hover:bg-red-600">
                            </form>
                        @endif
                    @endif
                @endauth
            </div>
        </div>
    </div>

    <section class="container mx-auto mt-10">
        <h2 class="my-10 text-4xl font-black text-center purple_gradient">Posts</h2>
        <x-lists-post :posts="$posts" />
    </section>
@endsection
