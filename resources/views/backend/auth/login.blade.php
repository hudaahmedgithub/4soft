@extends('backend.layouts.app')

@section('content')
<div class="main-content container-fluid">
    <div class="splash-container">
        <div class="card card-border-color card-border-color-primary">
            <div class="card-header">
                <img class="logo-img" src="assets/img/logo-xx.png" alt="logo" width="102" height="27">
                <span class="splash-description">Please enter your user information.</span>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    {{-- Email Input --}}
                    <div class="form-group">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email" name="email" value="{{ old('email') }}" required autocomplete="off" autofocus>

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    {{-- Password Input --}}
                    <div class="form-group">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" name="password" required autocomplete="off">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    {{-- Remember Me Input --}}
                    <div class="form-group row login-tools">
                        <div class="col-6 login-remember">
                            <label class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                <span class="custom-control-label">Remember Me</span>
                            </label>
                        </div>
                    </div>

                    {{-- Login Button Input --}}
                    <div class="form-group login-submit">
                        <button type="submit" class="btn btn-primary btn-xl">
                            Sign Me In
                        </button>
                    </div>
                </form>
            </div>
        </div>
    <div class="splash-footer">
        <span>All rights reserved <a href="http://4soft-eg.com" target="_blank">4soft-eg.com</a></span>
    </div>
</div>
@endsection
