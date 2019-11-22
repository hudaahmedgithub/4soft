@extends('frontend.layouts.app')

@section('content')
<style>
    .sign-box{
        position: relative;
        bottom: 117px;
        z-index: 2;
        width: 100%;
    }

    .sign-box .nav-item{
        color: #000!important;
        font-size: 30px!important;
        font-weight: bold;
    }

    @if( \App::getLocale() == 'en') 
        .sign-box .nav-item::first-letter{border-bottom:1px solid #000;}
    @endif

    .sign-box .nav-tabs .nav-link.active, .nav-tabs .nav-item.show .nav-link{
        border-color: #a67fff #6927ff #fff;
        border-top-width: 5px;
    }

    .sign-box .nav-tabs {
        border-bottom: 1px solid #6927ff;
    }

    .sign-box .nav-item.active{color: #6927ff!important}
    .sign-box .tab-content > .active {
        display: flex!important;
    }
</style>


<div class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_1.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
</div>


<section class="sign-box" style="margin-top: 15px;margin-bottom: 15px;">
        <div class="container shadow-lg bg-white rounded">
                <div class="row">
                    <div class="col-12 text-center m-3">
                        <img src="images/user.jpg" class="rounded-circle shadow" width="170" height="170" alt="">
                    </div>

                    <div class="nav nav-tabs justify-content-center col-12" id="nav-tab" role="tablist">
                        <a class="nav-item nav-link" id="nav-sign-tab" data-toggle="tab" href="#nav-sign" role="tab" aria-controls="nav-sign" aria-selected="false">{{ __('login.sign-up') }}</a>
                        <a class="nav-item nav-link active" id="nav-login-tab" data-toggle="tab" href="#nav-login" role="tab" aria-controls="nav-login" aria-selected="true">{{ __('login.login') }}</a>
                    </div>
                        
                    <div class="tab-content col-12" id="nav-tabContent">
                        {{--  Login Form  --}}
                        <div class="tab-pane fade in show active row justify-content-center" id="nav-login" role="tabpanel" aria-labelledby="nav-login-tab">

                            <form action="" method="post" class="col-6">
                                <h1 class="text-center mt-4">
                                     {{ __('login.login') }}
                                </h1>

                                 <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                          <span class="input-group-text" id="basic-addon1">
                                                <span class="icon icon-user" style="font-size: 30px"></span>
                                          </span>
                                        </div>
                                        <input type="text" name="name" required autocomplete="off" class="form-control" placeholder="{{ __('login.username') }}" aria-label="{{ __('login.username') }}" aria-describedby="basic-addon1">
                                 </div>

                                 <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                          <span class="input-group-text" id="basic-addon2">
                                                <span class="icon icon-lock" style="font-size: 30px"></span>
                                          </span>
                                        </div>
                                        <input type="password" name="password" required  class="form-control" placeholder="{{ __('login.password') }}" aria-label="{{ __('login.password') }}" aria-describedby="basic-addon2">
                                 </div>

                                 <div class="custom-control custom-checkbox mt-4 mb-4">
                                        <input type="checkbox" class="custom-control-input" id="remember_me">
                                        <label class="custom-control-label" for="remember_me">{{ __('login.remember') }}</label>
                                </div>

                                 <div class="input-group mb-3">
                                    <button class="btn btn-primary btn-lg btn-block">
                                            {{ __('login.login') }}
                                    </button>
                                </div>
                            </form>

                        </div>
                            
                      
                         {{--  SIGN Form  --}}
                        <div class="tab-pane fade row justify-content-center" id="nav-sign" role="tabpanel" aria-labelledby="nav-login-tab">
    
                            <form action="" method="post" class="col-6">
                                <h1 class="text-center mt-4">
                                        {{ __('login.sign-up') }}
                                </h1>

                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1">
                                                <span class="icon icon-user" style="font-size: 30px"></span>
                                            </span>
                                        </div>
                                        <input type="text"  name="name" required class="form-control" placeholder="{{ __('login.your-name') }}" aria-label="{{ __('login.your-name') }}" aria-describedby="basic-addon1">
                                    </div>


                                    <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon2">
                                                    <span class="icon icon-envelope-o" style="font-size: 22px"></span>
                                                </span>
                                            </div>
                                            <input type="email" name="email" required class="form-control" placeholder="{{ __('login.your-email') }}" aria-label="{{ __('login.your-email') }}" aria-describedby="basic-addon2">
                                    </div>

                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon3">
                                                <span class="icon icon-lock" style="font-size: 30px"></span>
                                            </span>
                                        </div>
                                        <input type="password" name="pass" required class="form-control" placeholder="{{ __('login.your-password') }}" aria-label="{{ __('login.your-password') }}" aria-describedby="basic-addon3">
                                    </div>


                                    <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon3">
                                                    <span class="icon icon-key" style="font-size: 22px"></span>
                                                </span>
                                            </div>
                                            <input type="password" name="confirm-pass" required class="form-control" placeholder="{{ __('login.confirm-password') }}" aria-label="{{ __('login.confirm-password') }}" aria-describedby="basic-addon3">
                                    </div>



                                    <div class="input-group mb-3">
                                    <button class="btn btn-primary btn-lg btn-block">
                                            {{ __('login.sign-up') }}
                                    </button>
                                </div>

                            </form>

                        </div>
                    </div>
        </div>
</section>



    @section('jq-js')
        <script>
            $(function(){
                
            });
        </script>
    @endsection

    {{-- Footer Section --}}
    @include('frontend.sections.footer')
@endsection


