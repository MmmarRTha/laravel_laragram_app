<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\RedirectResponse;

class FollowerController extends Controller
{
    public function store(User $user): RedirectResponse
    {
        $user->followers()->attach(auth()->user()->id);

        return back();
    }

    public function destroy(User $user): RedirectResponse
    {
        $user->followers()->detach(auth()->user()->id);

        return back();
    }
}
