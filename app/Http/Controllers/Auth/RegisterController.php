<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;


class RegisterController extends Controller
{
    public function registration(){
        return view('Auth.registration');
    }
    public function store(Request $request){
        $validatedData = $request->validate([
            'name' => ['required'],
            'email' => ['required', 'email','lowercase','max:255','unique:'.user::class],
            'password' => ['required']
        ]);
        $input = $request->all();
        User::create([
            'name' => $input['name'],
            'email' => $input['email'],
            'password' => Hash::make($input['password'])
        ]);
        return redirect()->route('Auth.login');
    }
}
