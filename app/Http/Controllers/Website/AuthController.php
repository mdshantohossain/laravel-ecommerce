<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Mail\VerificationMail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use function Laravel\Prompts\password;

class AuthController extends Controller
{
    public function login()
    {
        return view('website.auth.login');
    }

    public function signIn(Request $request)
    {
        $request->validate([
            'email' => 'required|string',
            'password' => 'required'
        ]);

        $user = User::where('email', $request->email)
                    ->orWhere('username', $request->email)
                    ->first();

        if (!empty($user)){
            if ($user->status == 1){
                if (password_verify($request->password, $user->password)){
                    Auth::login($user);
                    if ($user->role == 'user'){
                    return redirect('/')->with('success', 'Login successful');
                    } else {
                        return redirect('/dashboard');
                    }
                } else {
                    return  back()->with('password', 'Incorrect password');
                }
            } else {
                return back()->with('warning', "You're account didn't verify");
            }

        }else{
            return back()->with('email', "This email/username didn't match in our records");
        }
    }

    public function register()
    {
        return view('website.auth.register');
    }

    public function signUp(Request $request)
    {
        $request->validate([
            'name' => 'required|string|min:2',
            'username' => 'required|unique:users,username',
            'email' => 'required|unique:users,email|string',
            'password' => 'required|min:8,max:16',
            'c_password' => 'required',
        ], [
            'c_password' => 'The confirmation password is required.'
        ]);

          $user = User::create([
                'name' => $request->name,
                'username' => $request->username,
                'email' => $request->email,
                'password' => bcrypt($request->password),
                'role' => 'user',
                'status' => 0,
                'remember_token' => Str::random(32)
            ]);

            Mail::to($request->email)->send(new VerificationMail([
                'sub' => 'Verify email address',
                'remember_token' => $user->remember_token,
            ]));

            return redirect('/login')->with('warning', 'Check your email to get verification link. Then you will login!');
    }

    public function verify($token)
    {
        $user = User::where('remember_token', $token)->first();

        if (!empty($user)){
            $user->email_verified_at = now();
            $user->status = 1;
            $user->remember_token = null;
            $user->save();

            return redirect('/login')->with('success', 'your email is verified successful. Login now.');
        }else{
            abort(403, 'Your email verification link is expired. Try again...!');
        }
    }
}
