<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Gloudemans\Shoppingcart\Facades\Cart;

class CheckoutController extends Controller
{
    public function index()
    {
        if (Cart::content()->count() == 0)
        {
            return redirect('/')->with('warning', "Product didn't added in cart.");
        } else {

            return view('website.checkout.index');
        }

    }
}
