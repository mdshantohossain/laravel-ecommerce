@extends('website.master')

@section('title', 'Cart')

@section('body')
    <main class="main">
        <div class="page-header breadcrumb-wrap">
            <div class="container">
                <div class="breadcrumb">
                    <a href="{{ route('home') }}" rel="nofollow">Home</a>
                    <span></span> Shop
                    <span></span> Your Cart
                </div>
            </div>
        </div>
        <section class="mt-50 mb-50">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        @if(Session::has('success'))
                            <div class="alert alert-success">{{ session('success') }} </div>
                        @endif
                            <form action="{{ route('cart.update') }}" method="POST">
                                @csrf
                                <div class="table-responsive">
                                    <table class="table shopping-summery text-center clean">
                                        <thead>
                                        <tr class="main-heading">
                                            <th scope="col">Image</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Price</th>
                                            <th scope="col">Quantity</th>
                                            <th scope="col">Subtotal</th>
                                            <th scope="col">Remove</th>
                                        </tr>
                                        </thead>

                                        <tbody>
                                        @php($sum = 0)
                                        @foreach(Cart::content() as $product)
                                            <tr>
                                            <td class="image product-thumbnail"><img src="{{ asset($product->options->image) }}" height="100" width="120" alt="#"></td>
                                            <td class="product-des product-name">
                                                <h5 class="product-name">
                                                    <a href="shop-product-right.html">
                                                        {!! strlen($product->name) > 60 ? substr($product->name, 0, 60) . '<br>' . substr($product->name, 60) : $product->name !!}
                                                    </a>
                                                </h5>
                                            </td>
                                            <td class="price" data-title="Price"><span>${{ $product->price }} </span></td>
                                            <td class="text-center" data-title="Stock">
                                                <div class="col-2 col-sm-3 border radius  m-auto">
                                                    <input type="hidden" name="rowId[]" value="{{ $product->rowId }}" >
                                                    <input type="number" value="{{ $product->qty }}" min="1" name="quantity[]" />
                                                </div>
                                            </td>
                                            <td class="text-right" data-title="Cart">
                                                <span>{{ $product->price * $product->qty }} </span>
                                            </td>
                                            <td class="action" data-title="Remove"><a href="{{ route('cart.remove.item', $product->rowId) }}" class="text-muted"><i class="fi-rs-trash"></i></a></td>
                                        </tr>
                                            @php($sum = $sum + ($product->price * $product->qty))
                                        @endforeach
                                        </tbody>

                                    </table>
                                </div>
                                <div class="cart-action text-end">
                                    <button type="submit" class="btn  mr-10 mb-sm-15"><i class="fi-rs-shuffle mr-10"></i>Update Cart</button>
                                    <a href="{{ route('home') }}" class="btn"><i class="fi-rs-shopping-bag mr-10"></i>Continue Shopping</a>
                                </div>
                            </form>
                        <div class="divider center_icon mt-50 mb-50"><i class="fi-rs-fingerprint"></i></div>
                        <div class="row mb-50">
                            <div class="col-lg-6 col-md-12 mx-auto">
                                <div class="border p-md-4 p-30 border-radius cart-totals">
                                    <div class="heading_s1 mb-3">
                                        <h4>Cart Totals</h4>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table">
                                            <tbody>
                                            <tr>
                                                <td class="cart_total_label">Cart Subtotal</td>
                                                <td class="cart_total_amount"><span class="font-lg fw-900 text-brand">${{$sum}}</span></td>
                                            </tr>
                                            <tr>
                                                <td class="cart_total_label">Tax</td>
                                                <td class="cart_total_amount"> <i class="ti-gift mr-5"></i> ${{ $tax_total = $sum / 100 * 8 }}</td>
                                            </tr>
                                            <tr>
                                                <td class="cart_total_label">Shipping</td>
                                                <td class="cart_total_amount"> <i class="ti-gift mr-5"></i> ${{ $shipping_total = 6 }}</td>
                                            </tr>
                                            <tr>
                                                <td class="cart_total_label">Total</td>
                                                <td class="cart_total_amount"><strong><span class="font-xl fw-900 text-brand">${{ $sum + $tax_total + $shipping_total }}</span></strong></td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <a href="{{ route('checkout') }}" class="btn "> <i class="fi-rs-box-alt mr-10"></i> Proceed To CheckOut</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
