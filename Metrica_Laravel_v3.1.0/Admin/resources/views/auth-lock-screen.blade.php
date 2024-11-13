@extends('layouts.master-without-nav')
@section('title')Metrica @endsection
@section('content')
@section('body')
<body id="body" class="auth-page" style="background-image: url('assets/images/p-1.png'); background-size: cover; background-position: center center;">
    @endsection

    <!-- Log In page -->
    <div class="container">
        <div class="row vh-100 d-flex justify-content-center">
            <div class="col-12 align-self-center">
                <div class="row">
                    <div class="col-lg-5 mx-auto">
                        <div class="card">
                            <div class="card-body p-0 auth-header-box">
                                <div class="text-center p-3">
                                    <a href="index" class="logo logo-admin">
                                        <img src="{{URL::asset('assets/images/logo-sm.png')}}" height="50" alt="logo" class="auth-logo">
                                    </a>
                                    <h4 class="mt-3 mb-1 fw-semibold text-white font-18">Enter Password And Use Metrica</h4>
                                    <p class="text-muted  mb-0">Hello Mark, enter your password to unlock the screen !</p>
                                </div>
                            </div>
                            <div class="card-body pt-0">
                                <form class="my-4" action="index">
                                    <div class="form-group mb-3">
                                        <label class="form-label" for="userpassword">Password</label>
                                        <input type="password" class="form-control" name="password" id="userpassword" placeholder="Enter password">
                                    </div>
                                    <!--end form-group-->

                                    <div class="form-group mb-0 row">
                                        <div class="col-12">
                                            <button class="btn btn-primary w-100" type="button">Unlock <i class="fas fa-sign-in-alt ms-1"></i></button>
                                        </div>
                                        <!--end col-->
                                    </div>
                                    <!--end form-group-->
                                </form>
                                <!--end form-->
                                <div class="text-center text-muted">
                                    <p class="mb-1">Not you ? return <a href="auth-register" class="text-primary ms-2">Sign in here</a></p>
                                </div>
                            </div>
                            <!--end card-body-->
                            <div class="card-body bg-light-alt text-center">
                                &copy; <script>
                                    document.write(new Date().getFullYear())

                                </script> Metrica
                            </div>
                        </div>
                        <!--end card-->
                    </div>
                    <!--end col-->
                </div>
                <!--end row-->
            </div>
            <!--end col-->
        </div>
        <!--end row-->
    </div>
    <!--end container-->

    @endsection
