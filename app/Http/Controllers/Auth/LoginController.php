<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;

   

class LoginController extends Controller
{
    public function index(){
        return view('Auth.login');
    }
    public function check(Request $request)
{
    $validatedData = $request->validate([
        'email' => ['required', 'email'],
        'password' => ['required'],
    ]);

    $credentials = $request->only('email', 'password');

    if (Auth::attempt($credentials)) {
        return redirect()->route('Auth.uploadimage')->with('success', 'You have successfully logged in!');
    } else {
        return redirect()->back()->withInput()->with('error', 'Invalid login credentials provided. Retry.');
    }
}
public function googleLogin(){
    return Socialite::driver('google')->redirect();

}
 public function callback(){
     try{
        $user = Socialite::driver('google')->user();
        //  dd($user);
        $is_user =  User::where('email', $user->getEmail())->first();

        if(!$is_user){
            $saveUser = User::updateorCreate(
                [
                    'name' => $user->getName(),
                    'email' => $user->getemail(),
                    'password' => bcrypt("123456"),
                ]
                );
            $saveUser->save();
            session()->put('id', $saveUser->id);
        }else{

            session()->put('id', $is_user->id);
        }
        return redirect('/upload-image');
        

        
        
        // else{
        //     $saveUser = User::where('email',$user->getEmail())->update([
        //         'google_id' => $user->getId(),
        //     ]);
        //     $saveUser = User::where('email', $user->getEmail())->first();
        // }
        // Auth::loginUsingId($saveUser->id);
        // return redirect()->route('Auth.uploadimage');
     }catch(Exception $th){
        dd($th->getMessage());
     }
    
 }

    
}
