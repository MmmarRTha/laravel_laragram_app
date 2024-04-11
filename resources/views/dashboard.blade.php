@extends('layouts.app')

@section('title_name')
    Your Account
@endsection

@section('content')
    <div class="flex justify-center">
        <div class="w-full md:flex md:w-8/12 lg:w-6/12">
            <div class="px-5 md:w-8/12 lg:w-6/12">
                <img src="{{ Vite::asset('resources/images/usuario.svg') }}" alt="Image user">
            </div>
            <div class="px-5 md:w-8/12 lg:w-6/12">
                <p class="text-2xl text-gray-700">{{ auth()->user()->username }}</p>
            </div>
        </div>
    </div>
@endsection
