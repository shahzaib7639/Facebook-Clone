<?php

namespace App\Http\Controllers\Auth;

use App\Models\UploadImage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UploadImageController extends Controller
{
    public function create()
    {
        $uploadImg = UploadImage::all();
        return view('Auth.uploadimage')->with(['img' => $uploadImg]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:webp,jpeg,png,jpg,gif|max:2048',
            'text' => 'required',
        ]);

        $imageName = time().'.'.$request->image->extension();  
        $request->image->move(public_path('images'), $imageName);

        $upload = new UploadImage();
        $upload->image = $imageName;
        $upload->text = $request->text;
        $upload->save();

        // Flash success message
        $request->session()->flash('success', 'Post uploaded successfully!');

        return redirect()->route('Auth.uploadimage.store');
    }

    public function show($id)
    {
        $upload = UploadImage::findOrFail($id);
        return view('show', compact('upload'));
    }
}
