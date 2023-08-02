@extends('website.master')

@section('title')
    Login Register Page
@endsection

@section('body')
    <div class="breadcrumbs">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="breadcrumbs-content">
                        <h1 class="page-title">Login / Register</h1>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <ul class="breadcrumb-nav">
                        <li><a href="{{route('home')}}"><i class="lni lni-home"></i> Home</a></li>
                        <li><a href="#">Shop</a></li>
                        <li>Complete Order</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>


    <section class="checkout-wrapper section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h4>Login Form</h4>
                        </div>
                        <div class="card-body">
                            <p class="text-danger text-center">{{session('message')}}</p>
                            <form action="{{route('customer.login')}}" method="post">
                                @csrf
                                <div class="row mb-3">
                                   <level class="col-md-3">Email Address</level>
                                    <div class="col-md-9">
                                        <input type="email" class="form-control" name="email">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <level class="col-md-3">Password</level>
                                    <div class="col-md-9">
                                        <input type="password" class="form-control" name="password">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <level class="col-md-3"></level>
                                    <div class="col-md-9">
                                        <input type="submit" class="btn btn-success" value="Login">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h4>Registration Form</h4>
                        </div>
                        <div class="card-body">

                            <form action="{{route('customer.login')}}" method="post">
                                @csrf
                                <div class="row mb-3">
                                    <level class="col-md-3">Full Name</level>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="name">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <level class="col-md-3">Email Address</level>
                                    <div class="col-md-9">
                                        <input type="email" class="form-control" name="email">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <level class="col-md-3">Mobile</level>
                                    <div class="col-md-9">
                                        <input type="number" class="form-control" name="mobile">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <level class="col-md-3">Password</level>
                                    <div class="col-md-9">
                                        <input type="password" class="form-control" name="password">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <level class="col-md-3"></level>
                                    <div class="col-md-9">
                                        <input type="submit" class="btn btn-success" value="Register">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

