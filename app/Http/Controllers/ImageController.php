<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

class ImageController extends Controller
{
    public function store(Request $request)
    {
        $image = $request->file('file');
        $imageName = Str::uuid().'.'.$image->extension();

        $manager = new ImageManager(new Driver());
        $serverImage = $manager->read($image);
        $serverImage->scale(1000, 1000);

        $imagePath = public_path('uploads'.'/'.$imageName);
        $serverImage->save($imagePath);

        return response()->json(['image' => $imageName]);
    }
}
