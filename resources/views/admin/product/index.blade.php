@extends('admin.master')

@section('title', 'Product')

@section('body')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <span class="h4 text-black">All Product Information</span>
                    <a href="{{ route('product.create') }}" class="float-end bg-primary text-white p-2 rounded-2">Add product</a>
                </div>
                <div class="card-body">

                    <div class="table-responsive">
                        <table class="table align-middle table-nowrap mb-0">
                            <thead class="table-light">
                            <tr>
                                <th style="width: 20px;">Sl.</th>
                                <th class="align-middle">Category name</th>
                                <th class="align-middle">Sub-category name</th>
                                <th class="align-middle">Selling Price</th>
                                <th class="align-middle">Stoke</th>
                                <th class="align-middle">Name</th>
                                <th class="align-middle">Image</th>
                                <th class="align-middle">Status</th>
                                <th class="align-middle">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($products as $product)
                                <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $product->category->name }}</td>
                                <td>{{ $product->subCategory->name }}</td>
                                <td>{{ $product->selling_price }}</td>
                                <td>
                                    <span class="{{ $product->stoke_amount == 0 ? 'text-danger' : ''}}">
                                      {{ $product->stoke_amount == 0 ? 0 : $product->stoke_amount}}
                                    </span>
                                </td>
                                <td>{{ strlen($product->name ) > 30 ? substr($product->name, 0, 30). '...' : $product->name }}</td>
                                <td>
                                    <img src="{{ asset($product->image) }}" height="70" width="90" alt="" />
                                </td>
                                    <td>
                                        <span class="badge {{ $product->status == 1 ? 'badge-soft-success' : 'badge-soft-secondary' }}">{{ $product->status == 1 ? 'active' : 'inactive' }}</span>
                                    </td>
                                <td>
                                    <div class="d-flex">
                                        <a href="{{ route('product.show', $product->slug) }}" class="btn btn-outline-secondary btn-sm me-1">
                                            <i class="fa fa-book-open"></i>
                                        </a>
                                        <a href="{{ route('product.edit', $product->slug) }}" class="btn btn-outline-primary btn-sm me-1">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                        <form action="{{ route('product.destroy',  $product->slug) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-outline-danger btn-sm">
                                                <i class="fa fa-trash"></i>
                                            </button>
                                        </form>
                                    </div>
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
