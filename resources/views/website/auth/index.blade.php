@extends('website.master')

@section('title', 'Profile')

@section('body')
    <main class="main">
        <div class="page-header breadcrumb-wrap">
            <div class="container">
                <div class="breadcrumb">
                    <a href="{{ route('home') }}" rel="nofollow">Home</a>
                    <span></span> Pages
                    <span></span> Account
                </div>
            </div>
        </div>
        <section class="pt-150 pb-150">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 m-auto">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="dashboard-menu">
                                    <ul class="nav flex-column" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="dashboard-tab" data-bs-toggle="tab" href="#dashboard" role="tab" aria-controls="dashboard" aria-selected="false"><i class="fi-rs-settings-sliders mr-10"></i>Dashboard</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="orders-tab" data-bs-toggle="tab" href="#orders" role="tab" aria-controls="orders" aria-selected="false"><i class="fi-rs-shopping-bag mr-10"></i>Orders</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="account-detail-tab" data-bs-toggle="tab" href="#account-detail" role="tab" aria-controls="account-detail" aria-selected="true"><i class="fi-rs-user mr-10"></i>Account details</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="javascript: void(0);" onclick="document.querySelector('#logoutForm').submit()"><i class="fi-rs-sign-out mr-10"></i>Logout</a>
                                        </li>
                                        <form action="{{ route('logout') }}" method="POST" id="logoutForm">
                                            @csrf
                                        </form>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="tab-content dashboard-content">
                                    <div class="tab-pane fade active show" id="dashboard" role="tabpanel" aria-labelledby="dashboard-tab">
                                        <div class="card">
                                            <div class="card-header">
                                                <h5 class="mb-0">Hello {{ Auth::user()->name }}! </h5>
                                            </div>
                                            <div class="card-body">
                                                <p>From your account dashboard. you can easily check &amp; view your recent orders, manage your shipping and billing addresses and edit your password and account details.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="orders" role="tabpanel" aria-labelledby="orders-tab">
                                        <div class="card">
                                            <div class="card-header">
                                                <h5 class="mb-0">Your Orders</h5>
                                            </div>
                                            <div class="card-body">
                                                <div class="table-responsive">
                                                    <table class="table">
                                                        <thead>
                                                        <tr>
                                                            <th>Order</th>
                                                            <th>Date</th>
                                                            <th>Status</th>
                                                            <th>Total</th>
                                                            <th>Actions</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        @foreach($orders as $order)
                                                            <tr>
                                                            <td>#{{$order->id}}</td>
                                                            <td>{{ \Carbon\Carbon::parse($order->order_date)->format('M d, Y') }}</td>
                                                            <td>{{ $order->order_status }}</td>
                                                            <td>${{ $order->order_total }} for {{ $order->orderDetails->count() }} item</td>
                                                            <td><a href="#" class="btn-small d-block">View</a></td>
                                                        </tr>
                                                        @endforeach
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="account-detail" role="tabpanel" aria-labelledby="account-detail-tab">
                                        <div class="card">
                                            <div class="card-header">
                                                <h5>Account Details</h5>
                                            </div>
                                            <div class="card-body">
                                                <form method="POST" action="{{ route('profile.update') }}">
                                                    @csrf
                                                    <div class="row">
                                                        <div class="form-group col-md-6">
                                                            <label>Full Name <span>*</span></label>
                                                            <input class="form-control square" name="name" value="{{ Auth::user()->name }}" type="text" />
                                                        </div>
                                                        <div class="form-group col-md-6">
                                                            <label>Username <span>*</span></label>
                                                            <input class="form-control square"  value="{{ Auth::user()->username }}" readonly type="text" />
                                                        </div>
                                                        <div class="form-group col-md-12">
                                                            <label>Email  <span>*</span></label>
                                                            <input class="form-control square"  value="{{ Auth::user()->email }}" readonly type="email" />
                                                        </div>
                                                        <div class="form-group col-md-6">
                                                            <label>Billing Address <span>*</span></label>
                                                            <textarea name="billing_address" class="form-control square" rows="5">{{  Auth::user()->billing_address }}</textarea>
                                                        </div>
                                                        <div class="form-group col-md-6">
                                                            <label>Shipping Address <span>*</span></label>
                                                            <textarea name="shipping_address" class="form-control square" rows="5">{{ Auth::user()->shipping_address }}</textarea>
                                                        </div>
                                                        <div class="form-group col-md-12">
                                                            <label>Current Password <span>*</span></label>
                                                            <input  class="form-control square" name="password" type="password" />
                                                            @error('password')
                                                                <span class="text-danger">{{ $message }}</span>
                                                            @enderror
                                                            @if(Session::has('passwordError'))
                                                                <span class="text-danger">{{ session('passwordError') }}</span>
                                                            @endif
                                                        </div>
                                                        <div class="form-group col-md-12">
                                                            <label>New Password <span>*</span></label>
                                                            <input class="form-control square" name="npassword" type="password" />
                                                            @error('npassword')
                                                            <span class="text-danger">{{ $message }}</span>
                                                            @enderror
                                                            @if(Session::has('npasswordError'))
                                                                    <span>{{ session('npasswordError') }}</span>
                                                            @endif
                                                        </div>
                                                        <div class="form-group col-md-12">
                                                            <label>Confirm Password <span>*</span></label>
                                                            <input class="form-control square" name="cpassword" type="password" />
                                                            @error('cpassword')
                                                            <span class="text-danger">{{ $message }}</span>
                                                            @enderror
                                                            @if(Session::has('cpasswordError'))
                                                                <span>{{ session('cpasswordError') }}</span>
                                                            @endif
                                                        </div>
                                                        <div class="col-md-12">
                                                            <button type="submit" class="btn btn-fill-out submit">Save Changes</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
