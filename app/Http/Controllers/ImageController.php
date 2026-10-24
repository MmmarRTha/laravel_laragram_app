<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Intervention\Image\Interfaces\ImageManagerInterface;

class ImageController extends Controller
{
    public function __construct(
        protected ImageManagerInterface $imageManager,
    ) {}

    public function store(Request $request): JsonResponse
    {
        $image = $request->file('file');
        $imageName = Str::uuid().'.'.$image->extension();

        $serverImage = $this->imageManager->decode($image);
        $serverImage->scale(1000, 1000);

        $imagePath = public_path('uploads'.'/'.$imageName);
        $serverImage->save($imagePath);

        return response()->json(['image' => $imageName]);
    }
}
