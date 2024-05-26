<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index(Request $request)
    {
        $request->validate([
            'name' => 'required|min:2,max:22',
            'email' => 'string|email',
            'phone' => 'required',
            'shipping_address' => 'required'
        ]);
        return $request->all();
    }

    public function orderComplete()
    {

    }
}
