@extends('website.master')

@section('title', 'Register')

@section('body')
    <main class="main">
        <div class="page-header breadcrumb-wrap">
            <div class="container">
                <div class="breadcrumb">
                    <a href="{{ route('home') }}" rel="nofollow">Home</a>
                    <span></span> Pages
                    <span></span> Login / Register
                </div>
            </div>
        </div>
        <section class="py-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 m-auto">
                        <div class="row">
                            <div class="col-lg-6 mx-auto">
                                <div class="login_wrap widget-taber-content p-30 background-white border-radius-5">
                                    <div class="padding_eight_all bg-white">
                                        <div class="heading_s1">
                                            <h3 class="mb-30">Create an Account</h3>
                                        </div>
                                        <p class="mb-50 font-sm">
                                            Your personal data will be used to support your experience throughout this website, to manage access to your account, and for other purposes described in our privacy policy
                                        </p>
                                        <form method="POST" action="{{ route('register.request') }}">
                                            @csrf
                                            <div class="form-group">
                                                <input type="text" value="{{ old('name') }}" name="name" placeholder="Full name" />
                                                @error('name')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <input type="text" value="{{ old('username') }}" name="username" placeholder="Username" />
                                                @error('username')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <input type="email"  value="{{ old('email') }}" name="email" placeholder="Email" />
                                                @error('email')
                                                <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <input type="password" value="{{ old('password') }}" name="password" placeholder="Password" />
                                                @error('password')
                                                <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <input type="password" value="{{ old('c_password') }}" name="c_password" placeholder="Confirm password" />
                                                @error('c_password')
                                                <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="row">
                                                <button type="submit" class="btn btn-fill-out btn-block hover-up"> Register</button>
                                            </div>
                                        </form>
                                        <div class="divider-text-center mt-15 mb-15">
                                            <span> or</span>
                                        </div>
                                        <ul class="btn-login list_none text-center mb-15">
                                            <li><a href="#" class="btn btn-facebook hover-up mb-lg-0 mb-sm-4">Login With Facebook</a></li>
                                            <li><a href="#" class="btn btn-google hover-up">Login With Google</a></li>
                                        </ul>
                                        <div class="text-muted text-center">Already have an account? <a href="{{ route('login') }}">Sign in now</a></div>
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
