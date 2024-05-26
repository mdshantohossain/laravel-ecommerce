@extends('website.master')

@section('title', 'Reset password')

@section('body')
    <main class="main">
        <div class="page-header breadcrumb-wrap">
            <div class="container">
                <div class="breadcrumb">
                    <a href="{{ route('home') }}" rel="nofollow">Home</a>
                    <span></span> Pages
                    <span></span> Reset password
                </div>
            </div>
        </div>
        <section class="py-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 m-auto">
                        <div class="row">
                            <div class="col-md-6 mx-auto">
                                <div class="login_wrap widget-taber-content p-30 background-white border-radius-5">
                                    <div class="padding_eight_all bg-white">
                                        <div class="mb-3">
                                            <h3 class="mb-30">Reset password</h3>
                                        </div>
                                        <form method="POST" action="{{ route('forgot.password.request') }}">
                                            @csrf
                                            <div class="form-group">
                                                <input type="email" value="{{ old('email') }}" name="email" placeholder="Email" />
                                                @error('email')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                                @if(Session::has('email'))
                                                 <span class="text-danger">{{ session('email') }}</span>
                                                @endif
                                            </div>

                                            <div class="form-group">
                                                <button type="submit" class="btn btn-fill-out btn-block hover-up ">Send link</button>
                                            </div>
                                        </form>

                                        <div class="text-muted text-center">Create an account? <a href="{{ route('login') }}">Back to login</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
