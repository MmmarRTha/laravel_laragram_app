<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Intervention\Image\Laravel\Facades\Image;

class ProfileController extends Controller
{
    public function index()
    {
        return view('profile.index');
    }

    public function store(Request $request)
    {
        $request->request->add(['username' => Str::slug($request->username)]);

        $request->validate([
            'username' => ['required', 'unique:users,username,'.auth()->user()->id, 'min:3', 'max:20', 'not_in:twitter,edit-profile,update-profile,logout,login,register,posts,post,comments,comment,likes,like,images,image,resources,home,update-profile,create,store,destroy,index,show'],
            'email' => ['required', 'email', 'unique:users,email,'.auth()->user()->id, 'max:60'],
        ]);

        if ($request->image) {
            $image = $request->file('image');
            $imageName = Str::uuid().'.'.$image->extension();

            $serverImage = Image::read($image);
            $serverImage->resize(1000, 1000);

            $profilesDir = public_path('profiles');
            if (! File::exists($profilesDir)) {
                File::makeDirectory($profilesDir, 0755, true);
            }

            $imagePath = $profilesDir.'/'.$imageName;
            $serverImage->save($imagePath);
        }

        $user = User::find(auth()->user()->id);
        $user->username = $request->username;
        $user->email = $request->email;
        $user->image = $imageName ?? auth()->user()->image ?? null;
        $user->save();

        return redirect()->route('posts.index', $user->username);
    }
}
