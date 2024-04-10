@extends('layouts.app')

@section('title_name')
    Register to LaraGram
@endsection

@section('content')
    <div class="md:flex md:justify-center md:gap-10 md:items-center">
        <div class="md:w-6/16 p-5">
            <img src="{{ Vite::asset('resources/images/registrar.png') }}" alt="Image user register">
        </div>

        <div class="md:w-4/12 bg-white p-6 rounded-lg shadow-lg">
            <form action="">
                <div class="mb-5">
                    <label for="name" class="mb-2 block uppercase text-sky-800 font-bold">nombre</label>
                    <input
                        id="name"
                        name="name"
                        type="text"
                        placeholder="Tu nombre"
                        class="border p-3 w-full rounded-lg"
                    >
                </div>
                <div class="mb-5">
                    <label for="username" class="mb-2 block uppercase text-sky-800 font-bold">username</label>
                    <input
                        id="username"
                        name="username"
                        type="text"
                        placeholder="Tu nombre de usuario"
                        class="border p-3 w-full rounded-lg"
                    >
                </div>
                <div class="mb-5">
                    <label for="email" class="mb-2 block uppercase text-sky-800 font-bold">email</label>
                    <input
                        id="email"
                        name="email"
                        type="email"
                        placeholder="Tu Email de registro"
                        class="border p-3 w-full rounded-lg"
                    >
                </div>
                <div class="mb-5">
                    <label for="password" class="mb-2 block uppercase text-sky-800 font-bold">password</label>
                    <input
                        id="password"
                        name="password"
                        type="password"
                        placeholder="Tu password de registro"
                        class="border p-3 w-full rounded-lg"
                    >
                </div>
                <div class="mb-5">
                    <label for="password_confirmation" class="mb-2 block uppercase text-sky-800 font-bold">repetir password</label>
                    <input
                        id="password_confirmation"
                        name="password_confirmation"
                        type="password"
                        placeholder="Repetir password"
                        class="border p-3 w-full rounded-lg"
                    >
                </div>

                <input type="submit" name="" id="" value="Create Account" class="bg-sky-600 hover:bg-sky-700 uppercase font-bold w-full p-3 text-white rounded-lg">
            </form>
        </div>

    </div>
@endsection
