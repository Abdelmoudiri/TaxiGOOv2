<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Request;
use Throwable;

class GoogleAuthController extends Controller
{
    /**
     * Redirect the user to Google’s OAuth page.
     */
    public function redirect()
    {
        return Socialite::driver('google')->redirect();
    }

    /**
     * Handle the callback from Google.
     */
    public function callback(Request $request)
{
   $google_user = Socialite::driver('google')->user();
   $user=User::updateOrCreate(
    ['google_id'=> $google_user->id],
    [

        'name' => $google_user->name,
            'email' => $google_user->email,
            'password' => Str::random(12), 
            'firstname' => $google_user->user['given_name'], 
            'lastname' => $google_user->user['family_name'],
    ]
    );
    Auth::login($user);
    return redirect('/profile');
}
    
}