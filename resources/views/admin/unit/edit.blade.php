@extends('admin.master')

@section('title', 'Edit ategory')

@section('body')
    <div class="row">
        <div class="col-xl-6 mt-5 mx-auto">
            <div class="card">
                <div class="card-body">
                    <span class="h4 mb-4">Edit category form</span>
                    <a href="{{ route('category.index') }}" class="float-end bg-primary text-white py-1 px-2 rounded-2">
                        <i class="fa fa-arrow-left"></i>
                        Back</a>
                    <div class="mt-4">
                        <form action="{{ route('category.update') }}" method="POST">
                            @csrf
                            <div class="row mb-3">
                                <label for="horizontal-firstname-input">Name</label>
                                <input type="text" class="form-control" name="name" value="{{ old('name') }}" id="horizontal-firstname-input" placeholder="Enter Your " />
                            </div>
                            <div class="row mb-3">
                                <label for="horizontal-firstname-input">Description</label>
                                <textarea class="form-control" id="horizontal-firstname-input" name="description" placeholder="Enter category description ">{{ old('description') }}</textarea>
                            </div>

                            <div class="mb-3">
                                <label for="resume">Image</label>
                                <input type="file" class="form-control" name="image" id="resume" />
                                <img src="{{ old('image') }}" alt="" />
                            </div>

                            <div class="mb-3">
                                <label class="d-block mb-3">Status :</label>

                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="status" {{ old('status') == 1 ? 'selected' : '' }} id="inlineRadio1" value="1" />
                                    <label class="form-check-label" for="inlineRadio1">Active</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" {{ old('status') == 2 ? 'selected' : '' }} name="status" id="inlineRadio2" value="2" />
                                    <label class="form-check-label" for="inlineRadio2">Inactive</label>
                                </div>
                            </div>

                            <div class="row justify-content-end">
                                <div>
                                    <div>
                                        <button type="submit" class="btn btn-primary w-md">Update</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- end card body -->
            </div>
            <!-- end card -->
        </div>
    </div>
@endsection
