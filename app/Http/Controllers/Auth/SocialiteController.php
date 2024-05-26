<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class SocialiteController extends Controller
{
    public function googleRedirect()
    {
        return Socialite::driver('google')->redirect();
    }

    public function googleCallback()
    {
        $user = Socialite::driver('google')->user();

        $newUser = User::where('email', $user->email)->first();

        if (empty($newUser)) {
            $newUser = User::create([
                'name' => $user->name,
                'username' => strtolower(str_replace(' ', '', $user->name)). rand(00, 99),
                'email' => $user->email,
                'email_verified_at' => now(),
                'password' => bcrypt('#^%&^^&6767'),
                'role' => 'user',
                'status' => 1,
                'google_id' => $user->id,
                'google_image' => $user->user['picture']
            ]);
            Auth::login($newUser);

            return redirect('/')->with('success', 'Register & Login successful');
        } else {
            Auth::login($newUser);
            return redirect('/')->with('success', 'Login successful');
        }
    }

    public function facebookRedirect()
    {
        return Socialite::driver('facebook')->redirect();
    }

    public function facebookCallback()
    {
        $user = Socialite::driver('facebook')->user();
    }
}
