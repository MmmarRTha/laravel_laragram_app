<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;

class LogoutController extends Controller
{
    public function store(): RedirectResponse
    {
        auth()->logout();

        return redirect()->route('login');
    }
}
