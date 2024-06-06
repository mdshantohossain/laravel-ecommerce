<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Wishlist;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AjaxController extends Controller
{
    public function cartProductAddByAjax()
    {
        $product = Product::find($_GET['id']);
        if (isset($product)){
            Cart::add([
                'id' => $product->id,
                'name' => $product->name,
                'qty' => 1,
                'price' => $product->selling_price,
                'options' => [
                    'image' => $product->image,
                ]]);

            $count = count(Cart::content());

            $res = ['success', 'Cart product added successful', $count];
        } else {
            $res = ['danger', 'Product not added in cart'];
        }

        return response()->json($res);
    }

    public function wishlistAdd()
    {
        $product = Product::find($_GET['id']);

        if (Auth::id()) {
            if (!empty($product)){
                if (!Wishlist::where('product_id', $product->id)->where('user_id', Auth::id())->exists()){
                    Wishlist::create([
                        'user_id' => Auth::id(),
                        'product_id' => $product->id

                    ]);

                    $count = Wishlist::where('user_id', Auth::id())->count();
                    return response()->json(['success', 'Product added in wishlist successful', $count]);

                }else{
                    return response()->json(['warning', 'Product already has in wishlist']);
                }
            }
        } else {
            return response()->json(['error', 'Login first to create wishlist']);

        }
    }

    public function usernameCheck()
    {
        if (User::where('username', $_GET['value'])->exists()) {
            return response()->json([true, 'Those username already exist.']);
        } else {
            return response()->json([false, 'Username is avilable']);
        }
    }

    public function getCartProduct()
    {
        $products = Cart::content();

        if (!empty($products)) {
            return response()->json(['success', $products]);
        } else {
            return response()->json(['empty']);
        }
    }
}
