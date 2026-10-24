<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class RegisterController extends Controller
{
    public function index(): View
    {
        return view('auth.register');
    }

    public function store(Request $request): RedirectResponse
    {
        $request->request->add(['username' => Str::slug($request->username)]);

        $request->validate([
            'name' => 'required|max:30',
            'username' => ['required', 'unique:users', 'min:3', 'max:20'],
            'email' => ['required', 'email', 'unique:users', 'max:60'],
            'password' => ['required', 'min:8', 'max:20', 'confirmed'],
        ]);

        User::create([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        auth()->attempt($request->only('email', 'password'));

        return redirect()->route('posts.index', auth()->user());
    }
}
