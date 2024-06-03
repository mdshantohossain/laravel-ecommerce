@extends('admin.master')

@section('title', 'Brand Edit')

@section('body')
    <div class="row">
        <div class="col-md-8 mt-5 mx-auto">
            <div class="card">
                <div class="card-body">
                    <span class="h4 mb-4">Edit Brand</span>
                    <a href="{{ route('brand.index') }}" class="float-end bg-primary text-white p-2 rounded-2">
                        <i class="fa fa-arrow-left"></i>
                        Back</a>
                    <div class="mt-4">
                        <form action="{{ route('brand.update', $brand->slug) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <input type="hidden" name="slug" id="slug" />
                            <div class="row mb-3">
                                <label for="name">Name<span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="name" value="{{ $brand->name }}" id="name" placeholder="Enter brand name " />
                                @error('name')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="row mb-3">
                                <label for="horizontal-firstname-input">Description<span class="text-danger">*</span></label>
                                <textarea class="form-control" id="horizontal-firstname-input" name="description" placeholder="Enter brand description ">{{ $brand->description }}</textarea>
                                @error('description')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="resume">Image</label>
                                <input type="file" class="form-control" name="image" />
                                @error('image')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                                <br>
                                @if(!empty($brand->image))
                                 <img src="{{ asset($brand->image) }}" width="150" height="120" alt="" />
                                @endif
                            </div>

                            <div class="mb-3">
                                <label class="d-block mb-3">Status :</label>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="status" {{ $brand->status == 1 ? 'checked' : '' }} id="inlineRadio1" value="1" />
                                    <label class="form-check-label" for="inlineRadio1">Active</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" {{ $brand->status == 0 ? 'checked' : '' }} name="status" id="inlineRadio2" value="0" />
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

@push('script')
    <script>
        $(()=> {
            $('#slug').val($('#name').val().replaceAll(' ', '-'))
        })
        $(()=> {
            $('#name').keyup(function (){
                $('#slug').val($(this).val().replaceAll(' ', '-'))
            });
        })
    </script>
@endpush
