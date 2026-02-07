<?php

namespace App\Http\Controllers;

class LogoutController extends Controller
{
    public function store()
    {
        auth()->logout();

        return redirect()->route('login');
    }
}
