@extends('admin.master')

@section('title', 'Category')

@section('body')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <span class="h4 text-black">All Category Information</span>
                    <a href="{{ route('category.create') }}" class="float-end bg-primary text-white p-2 rounded-2">Add category</a>
                    <div class="table-responsive mt-4">
                        <table class="table align-middle table-nowrap mb-0">
                            <thead class="table-light">
                            <tr>
                                <th style="width: 20px;">Sl.</th>
                                <th class="align-middle">Name</th>
                                <th class="align-middle">Description</th>
                                <th class="align-middle">Image</th>
                                <th class="align-middle">Status</th>
                                <th class="align-middle">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($categories as $category)
                                <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $category->name }}</td>
                                <td>{{  substr($category->description, 0, 65) }}{{ strlen($category->description) > 65 ? '...' : '' }}</td>
                                <td>
                                    <img src="{{ asset($category->image) }}" height="70" width="90" alt="" />
                                </td>
                                    <td>
                                        <span class="badge {{ $category->status == 1 ? 'badge-soft-success' : 'badge-soft-secondary' }}">{{ $category->status == 1 ? 'active' : 'inactive' }}</span>
                                    </td>
                                <td>
                                    <div class="d-flex">
                                        <a href="{{ route('category.edit', $category->slug) }}" class="btn btn-outline-primary btn-sm me-2">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                        <form action="{{ route('category.destroy',  $category->slug) }}" method="POST">
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
