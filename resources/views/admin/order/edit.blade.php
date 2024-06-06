@extends('admin.master')

@section('title', 'Order edit')

@section('body')
    <div class="row">
        <div class="col-md-10 mt-5 mx-auto">
            <div class="card">
                <div class="card-body">
                    <span class="h4 mb-4">Order edit</span>
                    <a href="{{ route('all.orders') }}" class="float-end bg-primary text-white p-2 rounded-2">
                        <i class="fa fa-arrow-left"></i>
                        Back</a>
                    <div class="mt-4">
                        <form action="{{ route('order.update', $order->slug) }}" method="POST">
                            @csrf

                            <div class="row mb-3">
                                <label for="total_order">Total order<span class="text-danger">*</span></label>
                                <input type="text" class="form-control" readonly value="{{ '$'. $order->order_total }}" id="total_order"  />
                            </div>

                            <div class="row mb-3">
                                <label for="delivery_address">Billing address<span class="text-danger">*</span></label>
                                <textarea class="form-control" id="delivery_address" name="delivery_address" placeholder="Enter delivery address">{{ $order->delivery_address }}</textarea>
                                @error('delivery_address')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="row mb-3">
                                <label for="order_status">Order status<span class="text-danger">*</span></label>
                                <select name="order_status" class="form-select">
                                    <option value="Pending" {{ $order->order_status == 'Pending' ? 'selected' : '' }}>Pending</option>
                                    <option value="Processing" {{ $order->order_status == 'Processing' ? 'selected' : '' }}>Processing</option>
                                    <option value="Complete" {{ $order->order_status == 'Complete' ? 'selected' : '' }}>Complete</option>
                                    <option value="Cancel" {{ $order->order_status == 'Cancel' ? 'selected' : '' }}>Cancel</option>
                                </select>
                            </div>
                            <div class="row justify-content-end">
                                <button type="submit" class="btn btn-primary w-md">Update</button>
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
