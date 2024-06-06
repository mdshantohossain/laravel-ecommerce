<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Mail\VerificationMail;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Product;
use Gloudemans\Shoppingcart\Facades\Cart;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class OrderController extends Controller
{
    public function index(Request $request)
    {
        if ($request->payment_method == 2) {
            if (!empty(Auth::user())) {
                $request->validate([
                    'delivery_address' => 'required',
                ]);
                $user = User::find(Auth::id());
                $message = 'Your order is completely placed.';

            } else {

                $request->validate([
                    'name' => 'required',
                    'username' => 'required|unique:users,username',
                    'phone' => 'required|unique:users,phone',
                    'email' => 'required|unique:users,email',
                    'password' => 'required',
                    'delivery_address' => 'required',
                ]);

                $user = User::create([
                    'name' => $request->name,
                    'username' => $request->username,
                    'phone' => $request->phone,
                    'email' => $request->email,
                    'password' => bcrypt($request->password),
                    'role' => 'user',
                    'remember_token' => Str::random(32),
                ]);
                Mail::to($request->email)->send(new VerificationMail([
                    'sub' => 'Verify email address',
                    'remember_token' => $user->remember_token,
                ]));

                $message = 'Your order is completely placed. Check your email to very account.';
            }

            $order = Order::create([
                'customer_id' => $user->id,
                'tax_total' => Session::get('tax_total'),
                'shipping_total' => Session::get('shipping_total'),
                'order_total' => Session::get('order_total'),
                'order_date' => date('Y-m-d'),
                'order_timestamp' => strtotime(date('Y-m-d')),
                'delivery_address' => $request->delivery_address,
                'payment_method' => $request->payment_method,
                'slug' => Str::random(44)
            ]);

            foreach (Cart::content() as $item){
                OrderDetail::create([
                    'order_id' =>  $order->id,
                    'product_id' => $item->id,
                    'product_name' => $item->name,
                    'product_price' => $item->price,
                    'product_quantity' => $item->qty
                ]);

                $product = Product::find($item->id);
                $product->stoke_amount = $product->stoke_amount - $item->qty;
                $product->save();
            }

            Cart::destroy();
            Session::forget('tax_total');
            Session::forget('shipping_total');
            Session::forget('order_total');

            return redirect('/')->with('success', $message);
        } else {

            return 'in online payment';
        }
    }

    public function allOrders()
    {
        return view('admin.order.index', ['orders' => Order::all()]);
    }

    public function detail(string $slug)
    {
        return view('admin.order.detail', ['order' => Order::where('slug', $slug)->first()]);

    }

    public function edit(string $slug)
    {
        return view('admin.order.edit', ['order' => Order::where('slug', $slug)->first()]);
    }

    public function update(Request $request, string $slug)
    {
        $request->validate([
            'delivery_address' => 'required'
        ]);

        try {
            $order = Order::where('slug', $slug)->first();

            if ($request->order_status == 'Processing'){

                $order->delivery_address = $request->delivery_address;
                $order->delivery_status = 'Processing';
                $order->payment_status = 'Processing';
                $order->order_status = 'Processing';
                $order->save();

                return redirect('/all-orders')->with('success', 'Order update successful');

            } elseif($request->order_status == 'Complete'){

                $order->delivery_address = $request->delivery_address;
                $order->delivery_date = date('Y-m-d');
                $order->delivery_timestamp = strtotime(date('Y-m-d'));
                $order->delivery_status = 'Complete';
                $order->payment_date = date('Y-m-d');
                $order->payment_timestamp = strtotime(date('Y-m-d'));
                $order->payment_status = 'Complete';
                $order->order_status = 'Complete';
                $order->save();

                return redirect('/all-orders')->with('success', 'Order update successful');

            } elseif($request->order_status == 'Cancel') {

                $order->delivery_status = 'Cancel';
                $order->payment_status = 'Cancel';
                $order->order_status = 'Cancel';
                $order->save();

                return redirect('/all-orders')->with('success', 'Order update successful');

            } else{

                $order->delivery_address = $request->delivery_address;
                $order->save();

                return redirect('/all-orders')->with('success', 'Order update successful');
            }

        } catch (\Exception $e){
            return back()->with('error', $e->getMessage());
        }

    }

    public function delete(string $slug)
    {
        $order = Order::where('slug', $slug)->first();
        $order->delete();

        return back()->with('success', 'Order deleted successful');
    }
}
