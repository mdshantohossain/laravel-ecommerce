<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Mail\ForgotPasswordMail;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class ForgotPasswordController extends Controller
{
    public function index()
    {
        return view('website.auth.forgot-password');
    }

    public function forgetPasswordRequest(Request $request)
    {
        $request->validate([
            'email' => 'required|email'
        ]);

        $user = User::where('email', $request->email)->first();

        if (!empty($user)) {
            $user->remember_token = Str::random(44);
            $user->save();

            Mail::to($user)->send(new ForgotPasswordMail([
                'sub' => 'Reset password link',
                'url' => '/reset-password/'. $user->remember_token,
            ]));


            return redirect('/forgot-password/success');
        } else {
            return  back()->with('email', "This email didn't match in our records");
        }
    }

    public function forgetPasswordSuccess()
    {
        return view('website.auth.forget-password-success');
    }

    public function resetPassword($token)
    {
        return view('website.auth.reset-password', compact('token'));
    }

    public function passwordResetRequest(Request $request, string $token)
    {
        $request->validate([
            'password' => 'required|min:8|max:16',
            'confirmation_password' => 'required'
        ], [
            'confirmation_password' => 'Confirmation password field is required'
        ]);

        if ($request->password === $request->confirmation_password) {
            $user = User::where('remember_token', $token)->first();

            if (!empty($user)) {
                $user->password = bcrypt($request->password);
                $user->remember_token = null;
                $user->save();
                return  redirect('/login')->with('success', 'Password reset successful.');
            }else{
                abort(403, 'Reset password link is expired! Please try again to reset your password.');
            }
        } else {
            return back()->with('confirmationPasswordError', "Those password didn't match");
        }
    }
}
