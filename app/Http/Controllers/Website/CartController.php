<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {
        return view('website.cart.index');
    }

    public function add(Request $request, $id)
    {
        $product = Product::find($id);
        Cart::add([
            'id' => $product->id,
            'name' => $product->name,
            'qty' => $request->quantity,
            'price' => $product->selling_price,
            'options' => [
                'image' => $product->image,
            ]]);

        return redirect('/cart')->with('success', 'Cart item added successful');
    }

    public function update(Request $request)
    {
        foreach ($request->rowId as $key => $rowId){
            Cart::update($rowId, $request['quantity'][$key]);
        }

        return back()->with('success', 'Cart item update successful');
    }

    public function remove($id)
    {
        Cart::remove($id);
        return back()->with('success', 'Cart item remove successful');
    }
}
