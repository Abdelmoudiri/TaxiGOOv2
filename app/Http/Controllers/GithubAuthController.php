<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Request;
use Throwable;

class GithubAuthController extends Controller
{
    /**
     * Redirect the user to github’s OAuth page.
     */
    public function redirect()
    {
        return Socialite::driver('github')->redirect();
    }

    /**
     * Handle the callback from github.
     */
    public function callback(Request $request)
{
   $github_user = Socialite::driver('github')->user();
   $user=User::updateOrCreate(
    ['google_id'=> $github_user->id],
    [

        'name' => $github_user->name,
            'email' => $github_user->email,
            'password' => Str::random(12), 
            'firstname' => $github_user->user['given_name'], 
            'lastname' => $github_user->user['family_name'],
    ]
    );
    Auth::login($user);
    return redirect('/profile');
}
    
}