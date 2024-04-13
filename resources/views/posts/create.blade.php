@extends('layouts.app')

@section('title_name')
    Create a new Post
@endsection

@push('styles')
    <link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" />
@endpush

@section('content')
    <div class="md:flex md:items-center">
        <div class="px-10 md:w-1/2">
            <form action="{{ route('images.store') }}" method="POST" enctype="multipart/form-data" id="dropzone" class="flex flex-col items-center justify-center w-full border-2 border-dashed rounded dropzone h-96">
                @csrf
            </form>
        </div>

        <div class="p-10 mt-10 bg-white rounded-lg shadow-xl md:w-1/2 md:mt-0">
            <form action="" method="">
                @csrf
                <div class="mb-5">
                    <label for="title" class="block mb-2 font-bold uppercase text-sky-800">Title</label>
                    <input
                        id="title"
                        name="title"
                        type="text"
                        placeholder="Post title"
                        class="border p-3 w-full rounded-lg @error('title') border-red-500 @enderror"
                        value="{{ old('title') }}"
                    >
                    @error('title')
                    <div class="relative p-2 my-2 text-sm leading-normal text-center text-red-700 bg-red-100 rounded-lg" role="alert">
                        <p>{{ $message }}</p>
                    </div>
                    @enderror
                </div>
                <div class="mb-5">
                    <label for="description" class="block mb-2 font-bold uppercase text-sky-800">description</label>
                    <textarea
                        id="description"
                        name="description"
                        class="border p-3 w-full rounded-lg @error('description') border-red-500 @enderror"
                    >
                        {{ old('description') }}
                    </textarea>
                    @error('description')
                    <div class="relative p-2 my-2 text-sm leading-normal text-center text-red-700 bg-red-100 rounded-lg" role="alert">
                        <p>{{ $message }}</p>
                    </div>
                    @enderror
                </div>

                <input type="submit" name="" id="" value="Create Post" class="w-full p-3 font-bold text-white uppercase rounded-lg bg-sky-600 hover:bg-sky-700">
            </form>
        </div>
@endsection
