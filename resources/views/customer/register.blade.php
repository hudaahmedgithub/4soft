@extends('frontend.layouts.app')

@section('content')

<!-- Start Register -->
<section id="login" class="scroll-section root-sec brand-bg contact-wrap" style="padding-top: 150px;padding-bottom: 76px;">
  <div class="container">
    <div class="row">
      <div class="contact-inner">
        <div class="col-sm-12 card-box-wrap">
          <div class="row">

            <div class="clearfix contact-form">

              <!-- Login Form start -->
              <div class="col-sm-8">
                @if ($errors->any())
                <div class="alert alert-danger">
                  <ul class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                  </ul>
                </div>
                @endif
                <div class="clearfix card-panel grey lighten-5 cform-wrapper">
                  <form action="#" id="loginForm" novalidate="" method="POST" action="{{ route('customer.register') }}">
                    @csrf
                    <div class="input-field">
                      <input id="name" type="text" name="name" value="{{ old('name') }}" class="validate input-box">
                      <label for="name" class="input-label">Full Name</label>
                    </div>
                    <div class="input-field textarea-input">
                      <textarea id="textarea1" name="about" value="{{ old('about') }}" class="validate materialize-textarea" style="height: 22px;"></textarea>
                      <label for="textarea1" class="input-label">About me</label>
                    </div>
                    <div class="input-field">
                      <input id="phone" name="phone" value="{{ old('phone') }}" type="text" class="validate input-box">
                      <label for="phone" class="input-label">Phone</label>
                    </div>
                    <div class="input-field">
                      <input id="email" type="email" name="email" value="{{ old('email') }}" class="validate input-box">
                      <label for="email" class="input-label">Email</label>
                    </div>
                    <div class="input-field">
                      <input id="password" type="password" name="password" class="validate input-box">
                      <label for="password" class="input-label">Password</label>
                    </div>
                    <div class="input-field">
                      <input id="cpassword" type="password" name="password_confirmation" class="validate input-box">
                      <label for="cpassword" class="input-label">Confirm Password</label>
                    </div>
                    <div class="input-field submit-wrap clearfix">
                      <button type="submit" class="left waves-effect btn-flat brand-text submit-btn">Register</button>
                      <a href="{{ route('customer.login') }}" class="register right brand-text">OR Sign in Now <i class="fa fa-arrow-right"></i></a>
                      <div class="right form-loader-area">
                        <svg class="circular size-20" height="20" width="20">
                          <circle class="path" cx="10" cy="10" r="7" fill="none" stroke-width="3" stroke-miterlimit="10"></circle>
                        </svg>
                      </div>
                    </div>
                  </form>
                </div>
              </div> <!-- ./login form end -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </div> <!-- ./container end -->
</section>
<!-- End Register -->

@endsection