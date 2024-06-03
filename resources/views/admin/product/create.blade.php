@extends('admin.master')

@section('title', 'Product create')

@section('body')
    <div class="row">
        <div class="col-md-10 mt-5 mx-auto">
            <div class="card">
                <div class="card-body">
                    <span class="h4 mb-4">Create product</span>
                    <a href="{{ route('product.index') }}" class="float-end bg-primary text-white p-2 rounded-2">
                        <i class="fa fa-arrow-left"></i>
                        Back</a>
                    <div class="mt-4">
                        <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="slug" id="slug" />
                            <div class="row mb-3">
                                <label for="name">Select category <span class="text-danger">*</span></label>
                                <select name="category_id" class="form-select">
                                    <option value="">--choose category--</option>
                                    @forelse($categories as $category)
                                        <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                                    @empty
                                        <option value="">haven't any category to select</option>
                                    @endforelse
                                </select>
                                @error('name')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="row mb-3">
                                <label for="name">Select sub-category<span class="text-danger">*</span></label>
                                <select name="sub_category_id" class="form-select">
                                    <option value="">--choose sub-category--</option>
                                    @forelse($subCategories as $subCategory)
                                        <option value="{{ $subCategory->id }}" {{ old('sub_category_id') == $subCategory->id ? 'selected' : '' }}>{{ $subCategory->name }}</option>
                                    @empty
                                        <option value="">haven't any sub-category to select</option>
                                    @endforelse
                                </select>
                                @error('name')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="row mb-3">
                                <label for="name">Select unit<span class="text-danger">*</span></label>
                                <select name="unit_id" class="form-select">
                                    <option value="">--choose unit--</option>
                                    @forelse($units as $unit)
                                        <option value="{{ $unit->id }}" {{ old('unit_id') == $unit->id ? 'selected' : '' }}>{{ $unit->name }}</option>
                                    @empty
                                        <option value="">haven't any unit to select</option>
                                    @endforelse
                                </select>
                                @error('name')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="row mb-3">
                                <label for="name">Select brand<span class="text-danger">*</span></label>
                                <select name="brand_id" class="form-select">
                                    <option value="">--choose brand--</option>
                                    @forelse($brands as $brand)
                                        <option value="{{ $brand->id }}" {{ old('brand_id') == $brand->id ? 'selected' : '' }}>{{ $brand->name }}</option>
                                    @empty
                                        <option value="">haven't any brand to select</option>
                                    @endforelse
                                </select>
                                @error('name')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="row mb-3">
                                <label for="name">Product Name<span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="name" value="{{ old('name') }}" id="name" placeholder="Enter product name " />
                                @error('name')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="row mb-3">
                                <label for="code">Product code<span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="code" value="{{ old('code') }}" id="code" placeholder="Enter product code " />
                                @error('code')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="row mb-3">
                                <label for="stoke_amount">Stoke amount<span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="stoke_amount" value="{{ old('stoke_amount') }}" id="stoke_amount" placeholder="Enter stoke amount " />
                                <span class="text-danger" id="stokeAmountError"></span>
                                @error('stoke_amount')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="row mb-3">
                                <label for="regular_price">Regular price<span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="regular_price" value="{{ old('regular_price') }}" id="regular_price" placeholder="Enter regular price " />
                                <span class="text-danger" id="regularPriceError"></span>
                                @error('regular_price')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="row mb-3">
                                <label for="offer">Offer <sub>(optional)</sub></label>
                                <input type="text" class="form-control" name="offer" value="{{ old('offer') }}" id="offer" placeholder="Enter offer like 20%" />
                                <span class="text-danger" id="offerError"></span>
                                @error('offer')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="row mb-3">
                                <label for="selling_price">Selling price<span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="selling_price" value="{{ old('selling_price') }}" id="selling_price" placeholder="Enter selling price " />
                                <span class="text-danger" id="sellingPriceError"></span>
                                @error('selling_price')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="row mb-3">
                                <label for="short_description">Short Description<span class="text-danger">*</span></label>
                                <textarea class="form-control" id="short_description" name="short_description" placeholder="Enter short description ">{{ old('short_description') }}</textarea>
                                @error('short_description')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="row mb-3">
                                <label for="long_description">Long Description <span class="text-danger">*</span></label>
                                <textarea class="form-control" id="long_description" name="long_description" placeholder="Enter short description ">{{ old('long_description') }}</textarea>
                                @error('long_description')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="resume">Image<span class="text-danger">*</span></label>
                                <input type="file" class="form-control" value="{{ old('image') }}" name="image" />
                                @error('image')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="resume">Other Images <span class="text-danger">*</span><sub>(select multiple)</sub></label>
                                <input type="file" class="form-control" multiple name="other_images[]" />
                                @error('other_images')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label class="d-block mb-3">Status :</label>

                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="status" {{ old('status') == 1 ? 'selected' : '' }} id="inlineRadio1" checked value="1" />
                                    <label class="form-check-label" for="inlineRadio1">Active</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" {{ old('status') == 0 ? 'selected' : '' }} name="status" id="inlineRadio2" value="0" />
                                    <label class="form-check-label" for="inlineRadio2">Inactive</label>
                                </div>
                            </div>

                            <div class="row justify-content-end">
                                <button type="submit" class="btn btn-primary w-md">Create</button>
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
            $('#slug').val($('#name').val().replaceAll(' ', '-').toLowerCase())
        })
        $(()=> {
            $('#name').keyup(function (){
                $('#slug').val($(this).val().replaceAll(' ', '-').toLowerCase())
            });
        })


        $(()=> {
            $('#regular_price').blur(function (){
                if(!isNaN(parseFloat($(this).val())) && $(this).val() > 0){
                    $('#regularPriceError').text('')
                    if($('#offer').val() != '') {
                        var offerPrice = $(this).val() / 100  * $('#offer').val().replace('%', '') ;
                        $('#selling_price').val($(this).val() - offerPrice);
                    }
                } else {
                    console.log('its false')
                    $('#regularPriceError').text('Please Enter valid number')
                }
            });

            $('#offer').blur(function (){
                var offerValue = $('#offer').val().replace('%', '');

                if(!isNaN(parseFloat(offerValue)) && offerValue > 0) {
                    $('#offerError').text('')
                    $('#selling_price').attr('readonly', true);
                    if($(this).val() != '') {

                        if($('#regular_price').val() != ''){

                            var offerPrice = $('#regular_price').val() / 100  * offerValue ;
                            $('#selling_price').val($('#regular_price').val() - offerPrice);

                        } else {
                            $('#regularPriceError').text('Regular price field is required for offer field.');
                        }
                    }
                } else {
                    $('#selling_price').attr('readonly', false);
                    $('#offerError').text('Please enter valid number')
                }
            })
        });



    </script>
@endpush
