<?php

namespace App\Http\Controllers;

use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class LoginController extends Controller
{
    public function redirectLogin(){
        return Socialite::driver('google')->redirect();
    }
    
    public function GoogleCallback(){
        
        {
            try {
                $user_google    = Socialite::driver('google')->user();
                $user           = User::where('email', $user_google->getEmail())->first();

                if($user != null){
                    auth()->login($user, true);
                    return redirect()->route('LoginSuccess');
                }else{
                    $create = User::Create([
                        'email'             => $user_google->getEmail(),
                        'name'              => $user_google->getName(),
                        'password'          => 0,
                        'email_verified_at' => now()
                    ]);
            
                    
                    auth()->login($create, true);
                    return redirect()->route('LoginSuccess');
                }
    
            } catch (\Exception $e) {
                return redirect()->route('login');
            }
        

    }
}
}
