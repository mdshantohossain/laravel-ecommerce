<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;

class AuthController extends Controller
{
    public function login()
    {
        return view('website.auth.login');
    }

    public function register()
    {
        return view('website.auth.register');
    }
}
