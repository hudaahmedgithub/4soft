@extends('frontend.layouts.app')

@section('content')

<!-- Start Sign in -->
<section id="login" class="scroll-section root-sec brand-bg contact-wrap" style="padding-top: 190px;padding-bottom: 280px;">
    <div class="container">
        <div class="row">
            <div class="contact-inner">
                <div class="col-sm-12 card-box-wrap">
                    <div class="row">

                        <div class="clearfix contact-form">

                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul class="alert alert-danger">
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            <!-- Sign in Form start -->
                            <div class="col-sm-8">
                                <div class="clearfix card-panel grey lighten-5 cform-wrapper">
                                    <form action="{{ route('customer.login') }}" id="signupForm" novalidate="" method="POST">
                                        @csrf
                                        <div class="input-field">
                                            <input id="email" type="email" name="email" class="validate input-box">
                                            <label for="email" class="input-label">Email</label>
                                        </div>
                                        <div class="input-field">
                                            <input id="password" type="password" name="password" class="validate input-box">
                                            <label for="password" class="input-label">Password</label>
                                        </div>
                                        <div class="input-field submit-wrap clearfix">
                                            <button type="submit" class="left waves-effect btn-flat brand-text submit-btn">Sign in</button>
                                            <a href="{{ route('customer.register') }}" class="register right brand-text">OR Register Now <i class="fa fa-arrow-right"></i></a>
                                            <div class="right form-loader-area">
                                                <svg class="circular size-20" height="20" width="20">
                                                    <circle class="path" cx="10" cy="10" r="7" fill="none" stroke-width="3" stroke-miterlimit="10"></circle>
                                                </svg>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div> <!-- ./signin form end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- ./container end -->
</section>
<!-- End Sign in -->

@endsection