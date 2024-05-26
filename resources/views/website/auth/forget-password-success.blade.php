@extends('website.master')

@section('title', 'Reset password link send success')

@section('body')
    <main class="main">
        <div class="page-header breadcrumb-wrap">
            <div class="container">
                <div class="breadcrumb">
                    <a href="{{ route('home') }}" rel="nofollow">Home</a>
                    <span></span> Pages
                    <span></span> Reset password success
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
                                        <div class="text-center">
                                            <p>Reset password link send successful.
                                            Check your email <br> to get your reset password link</p>
                                            <a href="{{ route('login') }}" class="btn btn-success btn-sm">Go to Login</a>
                                        </div>
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
