<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;

class StoreImageController extends Controller
{
    public function article(Request $request)
    {
        $validation = $request->validate([
            'file' => 'file|mimes:jpeg,jpg,bmp,png',
        ]);
        if ($request->hasFile('file')) {
            $extension = $request->file('file')->getClientOriginalExtension();
            $fileName = date('ymd') . uniqid() . '.' . $extension;
            if (!Storage::disk('public')->exists('tmp')) {
                Storage::disk('public')->makeDirectory('tmp', 0755, true);
            }
            // Use Image facade to handle the image processing
            $image = Image::make($request->file('file'));
            $image->resize(800, null, function ($constraint) {
                $constraint->aspectRatio();
            });
            $image->save(public_path('storage/tmp/' . $fileName));
            return response()->json(['link' => asset('storage/tmp/' . $fileName)]);
        }
    }
}