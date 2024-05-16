<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use app\Models\Gallery;

class GalleryController extends Controller
{
    public function index(){
        return view('admin.gallery');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image_path' => 'required',  
            
        ]);
        if ($request->hasFile('image_path')) {
            $image = $request->file('image_path');
            $imageName = time() . '_' . $image->getClientOriginalName();
            // Check if the directory exists, otherwise create it
            $request->image->move(public_path('webImage'), $imageName);
        }
        // Create a new gallery record with the image path
        Gallery::create([
            'name' => $request->name,
            'description' => $request->description,
            'image_path' => $imageName,
        ]);

        return redirect()->route('addimage.show')->with('success','Image Uploaded Successfully');
    }
}
