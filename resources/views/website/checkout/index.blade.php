@extends('website.master')

@section('title', 'Checkout')

@section('body')
    <main class="main">
        <div class="page-header breadcrumb-wrap">
            <div class="container">
                <div class="breadcrumb">
                    <a href="{{ route('home') }}" rel="nofollow">Home</a>
                    <span></span> Shop
                    <span></span> Checkout
                </div>
            </div>
        </div>
        <section class="mt-50 mb-50">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-25">
                            <h4>Billing Details</h4>
                        </div>
                        <form action={{ route('order.place') }} method="POST">
                            @csrf

                            @if(!Auth::id())
                                <div class="form-group">
                                    <input type="text" name="name" value="{{ old('name') }}" placeholder="Full name *">
                                    @error('name')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input type="text" name="username" value="{{ old('username') }}" id="username" placeholder="Username *">
                                    @error('username')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input type="email" name="email" id="email" value="{{ old('email') }}" placeholder="Email address *" />
                                    @error('email')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input  type="text" name="phone" id="phone" value="{{ old('phone') }}" placeholder="Phone *" />
                                    @error('phone')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group create-account">
                                    <input type="password" placeholder="Password" name="password" />
                                    @error('password')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            @endif

                            <div class="form-group">
                                <textarea name="delivery_address" placeholder="Delivery Address *" rows="5">{{ old('delivery_address') }}</textarea>
                                @error('shipping_address')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="payment_method">
                                <div class="mb-25">
                                    <h5>Payment</h5>
                                </div>
                                <div class="payment_option">
                                    <div class="custome-radio">
                                        <input class="form-check-input" required="" type="radio" name="payment_method" value="1" id="exampleRadios3" checked="">
                                        <label class="form-check-label" for="exampleRadios3" data-bs-toggle="collapse" data-target="#bankTranfer" aria-controls="bankTranfer">Online</label>
                                    </div>
                                    <div class="custome-radio">
                                        <input class="form-check-input" required="" type="radio" name="payment_method" value="2" id="exampleRadios5" checked="">
                                        <label class="form-check-label" for="exampleRadios5" data-bs-toggle="collapse" data-target="#paypal" aria-controls="paypal">Cash on delivery</label>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-fill-out btn-block mt-30">Place Order</button>
                        </form>
                    </div>
                    <div class="col-md-6">
                        <div class="order_review">
                            <div class="mb-20">
                                <h4>Your Orders</h4>
                            </div>
                            <div class="table-responsive order_table text-center">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th colspan="2">Product</th>
                                        <th>Total</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @php($sum=0)
                                    @foreach(Cart::content() as $product)
                                     <tr>
                                        <td class="image product-thumbnail"><img src="" alt="#{{ $loop->iteration }}"></td>
                                        <td>
                                            <h5><a href="{{ route('product.detail', $product->id) }}">{{ strlen($product->name) > 30 ? substr($product->name, 0, 30). '...' : $product->name }}</a></h5> <span class="product-qty">x {{ $product->qty }}</span>
                                        </td>
                                        <td>${{ $product->price * $product->qty }}</td>
                                    </tr>
                                        @php($sum = $sum + ($product->price * $product->qty))
                                    @endforeach
                                    <tr>
                                        <th>SubTotal</th>
                                        <td class="product-subtotal" colspan="2">${{ $sum }}</td>
                                    </tr>
                                    <tr>
                                        <th>Tax</th>
                                        <td colspan="2"><em>${{ $tax_total = $sum / 100 * 8 }}</em></td>
                                    </tr>
                                    <tr>
                                        <th>Shipping</th>
                                        <td colspan="2"><em>${{ $shipping_total = 6 }}</em></td>
                                    </tr>
                                    <tr>
                                        <th>Total</th>
                                        <td colspan="2" class="product-subtotal"><span class="font-xl text-brand fw-900">${{ $sum + $tax_total + $shipping_total }}</span></td>
                                    </tr>
                                    <?php

                                        Session::put('order_total', $sum);
                                        Session::put('tax_total', $tax_total);
                                        Session::put('shipping_total', $shipping_total);

                                      ?>
                                    </tbody>
                                </table>
                            </div>
                            <div class="bt-1 border-color-1 mt-30 mb-30"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
