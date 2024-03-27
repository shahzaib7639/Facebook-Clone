<?php

namespace App\Http\Controllers\Auth;

use App\Models\UploadImage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

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
    if (Auth::check()) {
        $user = Auth::user();

        $imageName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('images'), $imageName);
        $uploadImage = new UploadImage();
        $uploadImage->image = $imageName;
        $uploadImage->text = $request->text;
        $uploadImage->user_id = $user->id; 
        $uploadImage->save();
        $request->session()->flash('success', 'Post uploaded successfully!');
        return redirect()->route('Auth.uploadimage.store')->with('success', 'Post uploaded successfully.');
    } else {
        return redirect()->route('login')->with('error', 'Please log in to upload posts.');
    }
}
public function show($id)
    {
        $upload = UploadImage::findOrFail($id);
        return view('show', compact('upload'));
    }
}
