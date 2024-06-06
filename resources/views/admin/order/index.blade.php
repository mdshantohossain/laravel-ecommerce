@extends('admin.master')

@section('title', 'Orders')

@section('body')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <span class="h4 text-black">All Orders Information</span>
                </div>
                <div class="card-body">

                    <div class="table-responsive">
                        <table class="table align-middle table-nowrap mb-0">
                            <thead class="table-light">
                            <tr>
                                <th style="width: 20px;">Sl.</th>
                                <th class="align-middle">User Info</th>
                                <th class="align-middle">Order Total</th>
                                <th class="align-middle">Order Date</th>
                                <th class="align-middle">Order Status</th>
                                <th class="align-middle">Payment Method</th>
                                <th class="align-middle">Payment Status</th>
                                <th class="align-middle">Delivery Status</th>
                                <th class="align-middle">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($orders as $order)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $order->user->name }}<br>({{$order->user->phone}})</td>
                                    <td>${{ $order->order_total }}</td>
                                    <td>{{ $order->order_date }}</td>
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
                                    <td>{{ $order->payment_method == 1 ? 'Online' : 'Cash on delivery' }}</td>
                                    <td>
                                        <span class="badge
                                        {{ $order->payment_status == 'Pending' ? 'badge-soft-warning' :  '' }}
                                        {{ $order->payment_status == 'Cancel' ? 'badge-soft-danger' :  '' }}
                                        {{ $order->payment_status == 'Processing' ? 'badge-soft-secondary' :  '' }}
                                        {{ $order->payment_status == 'Completed' ? 'badge-soft-success' :  '' }}
                                        ">
                                            {{ $order->payment_status }}
                                        </span>
                                    </td>
                                    <td>
                                        <span class="badge
                                        {{ $order->delivery_status == 'Pending' ? 'badge-soft-warning' :  '' }}
                                        {{ $order->delivery_status == 'Cancel' ? 'badge-soft-danger' :  '' }}
                                        {{ $order->delivery_status == 'Processing' ? 'badge-soft-secondary' :  '' }}
                                        {{ $order->delivery_status == 'Completed' ? 'badge-soft-success' :  '' }}
                                        ">
                                            {{ $order->order_status }}
                                        </span>
                                    </td>
                                    <td>
                                        <a href="{{ route('order.detail', $order->slug) }}" class="btn btn-outline-secondary btn-sm me-1" data-bs-toggle="tooltip" title="Order detail">
                                            <i class="fa fa-book-open"></i>
                                        </a>
                                        <a href="{{ route('download.invoice', $order->slug) }}" class="btn btn-outline-info btn-sm me-1"  data-bs-toggle="tooltip" title="Download invoice">
                                            <i class="bx bx-receipt"></i>
                                        </a>
                                        <a href="{{ route('order.edit', $order->slug) }}" class="btn btn-outline-primary btn-sm me-1"  data-bs-toggle="tooltip" title="Order edit">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                        <a href="{{ route('order.delete', $order->slug) }}" class="btn btn-outline-danger btn-sm" data-bs-toggle="tooltip" title="Order delete">
                                            <i class="fa fa-trash"></i>
                                        </a>
                                    </td>
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
