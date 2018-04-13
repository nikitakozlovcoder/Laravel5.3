<?php

namespace App\Http\Controllers;

use App\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class Gallery extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');

    }
    public function ShowAll()
    {
        $images = Image::all();
        return view('Gallery.index', ['images' => $images]);
    }

    public function Add(Request $request)
    {
        $image = new Image();
        $path = $request->file('image')->store('uploads');
        $image->image_url = $path;
        $image->save();
        return redirect()->back();

    }
    public function Delete($id)
    {
        $image = Image::find($id);
        if ($image !== null)
        {
            $path = $image['image_url'];
            $image->delete();
            Storage::delete($path);
            return redirect()->back();
        }

        abort(404);
    }
}
