@extends('website.master')

@section('title', 'Login')

@section('body')
    <main class="main">
        <div class="page-header breadcrumb-wrap">
            <div class="container">
                <div class="breadcrumb">
                    <a href="{{ route('home') }}" rel="nofollow">Home</a>
                    <span></span> Pages
                    <span></span> Login
                </div>
            </div>
        </div>
        <section class="py-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 m-auto">
                        <div class="row">
                            <div class="col-md-6 mx-auto">
                                @if(Session::has('warning'))
                                    <div class="alert alert-warning">{{ session('warning') }}</div>
                                @endif
                                @if(Session::has('success'))
                                    <div class="alert alert-success">{{ session('success') }}</div>
                                @endif
                                <div class="login_wrap widget-taber-content p-30 background-white border-radius-5">
                                    <div class="padding_eight_all bg-white">
                                        <div class="heading_s1">
                                            <h3 class="mb-30">Login</h3>
                                        </div>
                                        <form method="POST" action="{{ route('login.request') }}">
                                            @csrf
                                            <div class="form-group">
                                                <input type="text" value="{{ old('email') }}" name="email" placeholder="Email/username" />
                                                @error('email')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                                @if(Session::has('email'))
                                                 <span class="text-danger">{{ session('email') }}</span>
                                                @endif
                                            </div>

                                            <div class="form-group">
                                                <input type="password" name="password" placeholder="Password" />
                                                @error('password')
                                                <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                                @if(Session::has('password'))
                                                    <span class="text-danger">{{ session('password') }}</span>
                                                @endif
                                            </div>
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-fill-out btn-block hover-up">Login</button>
                                            </div>
                                        </form>
                                        <div class="divider-text-center mt-15 mb-15">
                                            <span> or</span>
                                        </div>
                                        <ul class="btn-login list_none text-center mb-15">
                                            <li><a href="#" class="btn btn-facebook hover-up mb-lg-0 mb-sm-4">Login With Facebook</a></li>
                                            <li><a href="#" class="btn btn-google hover-up">Login With Google</a></li>
                                        </ul>
                                        <div class="text-muted text-center">Create an account? <a href="{{ route('register') }}">Sign up now</a></div>
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
