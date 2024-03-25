<?php

namespace App\Http\Controllers\Auth;


use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Laravel\Socialite\Facades\Socialite;

   

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

// Login with Google Api's 
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
     }catch(Exception $th){
        dd($th->getMessage());
     }
    
 }
 public function redirectToFacebook()
    {
        return Socialite::driver('facebook')->redirect();
    }

    public function handleFacebookCallback()
    {
        $user = Socialite::driver('facebook')->user();
        auth()->login($user);
        return redirect()->intended('/');
    }
}


 //Logout method
//  public function logout () {
//     auth()->logout();
//     session()->flash('message', 'You have been logged out successfully.');
//     return redirect()->route('Auth.login');
// }




