<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Auth;
use App\Models\User;


class GoogleAuthController extends Controller
{
    //responsible to redirect user to google sign in page
    public function redirect()
    {
        return Socialite::driver('google')->redirect();
    }

    //responsible to handle the callback URL of Google authentication
    public function callbackGoogle(){

        try{
            //google user detail is trying to sign in with the app of google sign in page
            $google_user = Socialite::driver('google')->user();

            $user = User::where('google_id', $google_user->getId())->first();

            if(!$user){

                $new_user = User::create([
                    'name'=>$google_user->getName(),
                    'email'=>$google_user->getEmail(),
                    'google_id'=>$google_user->getId(),
                ]);

                Auth::login($new_user);

                return redirect()->intended('home');
            }

            else{
                Auth::login($user);

                return redirect()->intended('home');

            }
        }
        catch(\Throwable $th){
            dd('Something went wrong! ' . $th->getMessage());
        }
    }
    

}
