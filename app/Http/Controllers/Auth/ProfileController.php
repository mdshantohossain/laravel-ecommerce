<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function index()
    {
        return view('website.auth.index', [
            'orders' => Order::where('customer_id', Auth::id())->get()
        ]);
    }


    public function update(Request $request)
    {
            $user = User::find(Auth::id());

            if (!empty($request->password) || !empty($request->npassword) || !empty($request->cpassword)){
                $request->validate([
                    'password' => 'required',
                    'npassword' => 'required|min:8|max:16',
                    'cpassword' => 'required|min:8|max:16',
                ]);

                if (password_verify($request->password, $user->password)) {
                    if ($request->npassword === $request->cpassword) {
                        $user->password = bcrypt($request->npassword);
                    } else {
                        return back()->with('cpasswordError', "Confirmation password didn't match");
                    }
                } else {
                    return back()->with('passwordError', "Current password didn't match");
                }
            }
            if ($request->has('name')) {
                $user->name = $request->name;
            }
            if ($request->has('billing_address')) {
                $user->billing_address = $request->billing_address;
            }
            if ($request->has('shipping_address')) {
                $user->shipping_address = $request->shipping_address;
            }

            $user->save();
            return back()->with('success', 'Profile has been updated successful');

    }
}
