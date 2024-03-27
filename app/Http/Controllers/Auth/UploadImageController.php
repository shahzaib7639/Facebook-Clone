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

    // Check if user is authenticated
    if (Auth::check()) {
        // User is authenticated, allow post upload
        $user = Auth::user();

        $imageName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('images'), $imageName);

        // Create a new UploadImage instance
        $uploadImage = new UploadImage();
        $uploadImage->image = $imageName;
        $uploadImage->text = $request->text;
        $uploadImage->user_id = $user->id; // Assign user_id here
        $uploadImage->save();

        // Flash success message
        $request->session()->flash('success', 'Post uploaded successfully!');

        // Redirect to a route or URL after successful upload
        return redirect()->route('Auth.uploadimage.store')->with('success', 'Post uploaded successfully.');
    } else {
        // User is not authenticated, redirect to login page
        return redirect()->route('login')->with('error', 'Please log in to upload posts.');
    }
}

    public function show($id)
    {
        $upload = UploadImage::findOrFail($id);
        return view('show', compact('upload'));
    }
}
