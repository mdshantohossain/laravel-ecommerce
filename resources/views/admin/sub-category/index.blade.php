@extends('admin.master')

@section('title', 'Sub-category')

@section('body')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <span class="h4 text-black">All Sub Category Information</span>
                    <a href="{{ route('sub-category.create') }}" class="float-end bg-primary text-white p-2 rounded-2">Add Sub-category</a>
                    <div class="table-responsive mt-4">
                        <table class="table align-middle table-nowrap mb-0">
                            <thead class="table-light">
                                <tr>
                                    <th style="width: 20px;">Sl.</th>
                                    <th class="align-middle">Category name</th>
                                    <th class="align-middle">Name</th>
                                    <th class="align-middle">Description</th>
                                    <th class="align-middle">Image</th>
                                    <th class="align-middle">Status</th>
                                    <th class="align-middle">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($subCategories as $subCategory)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $subCategory->category->name }}</td>
                                    <td>{{ $subCategory->name }}</td>
                                    <td>{{  substr($subCategory->description, 0, 65) }}{{ strlen($subCategory->description) > 65 ? '...' : '' }}</td>
                                    <td>
                                        <img src="{{ asset($subCategory->image) }}" height="70" width="90" alt="" />
                                    </td>
                                        <td>
                                            <span class="badge {{ $subCategory->status == 1 ? 'badge-soft-success' : 'badge-soft-danger' }}">{{ $subCategory->status == 1 ? 'active' : 'inactive' }}</span>
                                        </td>
                                    <td>
                                        <div class="d-flex">
                                            <a href="{{ route('sub-category.edit', $subCategory->slug) }}" class="btn btn-outline-primary btn-sm me-2">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            <form action="{{ route('sub-category.destroy',  $subCategory->slug) }}" method="POST">
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
