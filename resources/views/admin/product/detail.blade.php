@extends('admin.master')

@section('title', 'Product detail')

@section('body')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <span class="h4 text-black">Product detail information</span>
                    <a href="{{ route('product.index') }}" class="float-end bg-primary text-white p-2 rounded-2">Back</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table align-middle table-nowrap mb-0">
                           <tr>
                               <th>Product category</th>
                               <td>{{ $product->category->name }}</td>
                           </tr>
                           <tr>
                               <th>Product sub-category</th>
                               <td>{{ $product->subCategory->name }}</td>
                           </tr>
                           <tr>
                               <th>Product unit</th>
                               <td>{{ $product->unit?->name }}</td>
                           </tr>
                           <tr>
                               <th>Product brand</th>
                               <td>{{ $product->brand?->name }}</td>
                           </tr>
                           <tr>
                               <th>Product name</th>
                               <td>{{ $product->name }}</td>
                           </tr>
                           <tr>
                               <th>Product code</th>
                               <td>{{ $product->code }}</td>
                           </tr>
                           <tr>
                               <th>Stoke amount</th>
                               <td>{{ $product->stoke_amount }}</td>
                           </tr>
                           <tr>
                               <th>Regular price</th>
                               <td>{{ $product->regular_price }}</td>
                           </tr>
                            @if(!empty($product->offer))
                               <tr>
                                   <th>Product Offer</th>
                                   <td>{{ $product->offer }}</td>
                               </tr>
                            @endif
                           <tr>
                               <th>Selling price</th>
                               <td>{{ $product->selling_price }}</td>
                           </tr>
                           <tr>
                               <th>Short description</th>
                               <td>{{ $product->short_description }}</td>
                           </tr>
                           <tr>
                               <th>Long description</th>
                               <td>{{ $product->long_description }}</td>
                           </tr>
                           <tr>
                               <th>Image</th>
                               <td>
                                   <img src="{{ asset($product->image) }}" width="280" height="220" alt="" />
                               </td>
                           </tr>
                           <tr>
                               <th>Other images</th>
                               <td>
                                   @foreach($product->otherImages as $otherImage)
                                       <img src="{{ asset($otherImage->image) }}" width="120" height="80" alt="" />
                                   @endforeach
                               </td>
                           </tr>
                            <tr>
                                <th>Status</th>
                                <td>
                                      <span class="{{ $product->status == 1 ? 'badge badge-soft-success' : 'badge badge-soft-secondary' }}">{{ $product->status == 1 ? 'active' : 'inactive' }}</span>
                                </td>
                            </tr>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
