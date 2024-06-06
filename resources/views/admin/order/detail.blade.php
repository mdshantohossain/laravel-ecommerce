@extends('admin.master')

@section('title', 'Order detail')

@section('body')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <span class="h4 text-black">Order detail information</span>
                    <a href="{{ route('all.orders') }}" class="float-end bg-primary text-white p-2 rounded-2">Back</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table align-middle table-nowrap mb-0">
                           <tr>
                               <th>Tax Total</th>
                               <td>{{ $order->tax_total }}</td>
                           </tr>
                           <tr>
                               <th>Shipping total</th>
                               <td>{{ $order->shipping_total }}</td>
                           </tr>
                            <tr>
                                <th>Order Total</th>
                                <td>{{ $order->order_total }}</td>
                            </tr>
                            <tr>
                                <th>Order Date</th>
                                <td>{{ $order->order_date }}</td>
                            </tr>
                           <tr>
                               <th>Delivery address</th>
                               <td>{{ $order->delivery_address }}</td>
                           </tr>
                           <tr>
                               <th>Delivery date</th>
                               <td>{{ $order->delivery_date == null ? 'none' : $order->delivery_date }}</td>
                           </tr>
                           <tr>
                               <th>Delivery status</th>
                               <td>{{ $order->delivery_status }}</td>
                           </tr>
                           <tr>
                               <th>Payment method</th>
                               <td>{{ $order->payment_method == 1 ? 'Online' : 'Cash On Delivery' }}</td>
                           </tr>
                           <tr>
                               <th>Payment Date</th>
                               <td>{{ $order->payment_date == null ? 'none' : $order->payment_date }}</td>
                           </tr>
                           <tr>
                               <th>Payment Status</th>
                               <td>{{ $order->payment_status }}</td>
                           </tr>
                            <tr>
                                <th>Order Status</th>
                                <td>
                                      <span class="badge
                                        {{ $order->order_status == 'Pending' ? 'badge-soft-warning' :  '' }}
                                        {{ $order->order_status == 'Cancel' ? 'badge-soft-danger' :  '' }}
                                        {{ $order->order_status == 'Processing' ? 'badge-soft-secondary' :  '' }}
                                        {{ $order->order_status == 'Completed' ? 'badge-soft-success' :  '' }}
                                        ">
                                          {{ $order->order_status }}
                                      </span>
                                </td>
                            </tr>
                        </table>
                    </div>

                </div>
                <div class="card-body">
                    <span class="h4">User Information</span>
                    <div class="table-responsive">
                        <table class="table align-middle table-nowrap mb-0">
                           <tr>
                               <th>User Name</th>
                               <td>{{ $order->user->name }}</td>
                           </tr>
                           <tr>
                               <th>User Email</th>
                               <td>{{ $order->user->email }}</td>
                           </tr>
                            <tr>
                                <th>User Phone</th>
                                <td>{{ $order->user->phone }}</td>
                            </tr>
                        </table>
                    </div>

                </div>
            </div>
            <div class="card mt-5">
                <div class="card-header">
                    <span class="h4 text-black">Order Product information</span>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table align-middle table-nowrap mb-0">
                          <thead>
                            <tr>
                                <th>Sl.</th>
                                <th>Image</th>
                                <th>Name</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Total Price</th>
                            </tr>
                          </thead>
                            <tbody>
                            @foreach($order->orderDetails as $orderDetail)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>
                                        <img src="{{ asset($orderDetail->product->image) }}" width="120" height="80" alt="" />
                                    </td>
                                    <td>{{ strlen($orderDetail->product_name) > 60 ? substr($orderDetail->product_name, 0, 60) : $orderDetail->product_name }}</td>
                                    <td>${{ $orderDetail->product_price }}</td>
                                    <td>{{ $orderDetail->product_quantity }}</td>
                                    <td>{{ $orderDetail->product_quantity * $orderDetail->product_price }}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
