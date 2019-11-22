{{-- {{ __('nav.home') }}

<style>
    select{
        padding: 5px
    }
    option{
        height: 50px!important;
        min-height: 110px;
        white-space: initial;
        display: inline;
    }
    
</style>
<form class="" action="{{ route('lang') }}" method="post">
Locale:
    @csrf
  <select class="" name="lang" onchange="this.form.submit()">
    <option value="en" @if( \App::getLocale() == 'en') selected @endif>English</option>
    <option value="ar" @if( \App::getLocale() == 'ar') selected @endif>arabic</option>
  </select>
</form> --}}


@extends('frontend.layouts.app')

@php
    $text_align = 'text-left';
    $padding_align = 'padding-left: 0';

    if (App::isLocale('ar')) {
        $text_align = 'text-right';
        $padding_align = 'padding-right: 0';
    }

@endphp

@section('content')

<div class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_1.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay">
        <div class="container">
            <div class="row no-gutters slider-text align-items-end justify-content-start">
                <div class="col-md-12 ftco-animate text-center text-md-left mb-5" @if( \App::getLocale() == 'ar') style="text-align: right!important;" @endif>
                    <p class="breadcrumbs mb-0" @if( \App::getLocale() == 'ar') dir="rtl" style="display: inline-flex;flex-direction: row;" @endif>
                        <span class="mr-3 ml-3">
                            <a href="/" style="color: #ccc">{{ __('nav.home') }}
                                <i class="ion-ios-arrow-forward"></i>
                            </a>
                        </span>
                        <span class="text-light">{{ __('about.about') }}</span>
                    </p>
                    <h1 class="mb-3 mr-3 ml-3 text-light"> {{ __('about.about') }} </h1>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="ftco-section ftco-no-pt" style="margin-top: 15px;margin-bottom: 15px;">
    <div class="container">
        <div class="row d-md-flex">
            <div class="col-md-6 ftco-animate img about-image" style="background-image: url(images/about.jpg);margin-top: 6rem !important;">
            </div>
            <div class="col-md-6 ftco-animate p-md-5">
                <div class="row py-md-5">
                    <div class="col-md-12 nav-link-wrap mb-5">
                        <div class="nav ftco-animate nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                            <a class="nav-link active" id="v-pills-whatwedo-tab" data-toggle="pill" href="#v-pills-whatwedo" role="tab" aria-controls="v-pills-whatwedo" aria-selected="true">{{__('about.whatwe-do')}}</a>

                            <a class="nav-link" id="v-pills-mission-tab" data-toggle="pill" href="#v-pills-mission" role="tab" aria-controls="v-pills-mission" aria-selected="false"> {{__('about.our-mission')}} </a>

                            <a class="nav-link" id="v-pills-goal-tab" data-toggle="pill" href="#v-pills-goal" role="tab" aria-controls="v-pills-goal" aria-selected="false"> {{__('about.our-goal')}} </a>
                        </div>
                    </div>
                    <div class="col-md-12 d-flex align-items-center {{ $text_align }}">

                        <div class="tab-content ftco-animate" id="v-pills-tabContent">

                            <div class="tab-pane fade show active" id="v-pills-whatwedo" role="tabpanel" aria-labelledby="v-pills-whatwedo-tab">
                                <div>
                                    <h2 class="mb-4"> {{__('about.whatwe-do-txt')}} </h2>
                                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt voluptate, quibusdam sunt iste dolores consequatur</p>
                                    <p><a href="#" class="btn btn-primary p-3"> {{ __('about.get-started') }} </a></p>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="v-pills-mission" role="tabpanel" aria-labelledby="v-pills-mission-tab">
                                <div>
                                    <h2 class="mb-4">{{__('about.our-mission-txt')}} </h2>
                                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt voluptate, quibusdam sunt iste dolores consequatur</p>
                                    <p><a href="#" class="btn btn-primary p-3"> {{ __('about.get-started') }} </a></p>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="v-pills-goal" role="tabpanel" aria-labelledby="v-pills-goal-tab">
                                <div>
                                    <h2 class="mb-4">{{__('about.our-goal-txt')}} </h2>
                                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt voluptate, quibusdam sunt iste dolores consequatur</p>
                                    <p><a href="#" class="btn btn-primary p-3"> {{ __('about.get-started') }} </a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<style>

    .animate-fading{animation:fading .3s}
    @keyframes fading{0%{opacity:0}50%{opacity:.3}100%{opacity:.6}}

    .prof, .prof-overlay{
        width: 177px;
        height: 177px;
    }
    .prof-overlay{
        opacity: .6;
        background-color: #5423c6;
    }

    .prof{
        position: relative;
        transition: all .3s ease;
        margin: 10px;
    }

    .prof h1, .prof small, .prof-overlay{
        display: none;
        position: absolute;
        padding: 0 15px;
        left: 0;
        color: #fff;
    }

    .prof h1{
        top: 70px;
        font-size: 20px;
        font-weight: bold;
    }

    .prof small{
        top: 130px;
        font-size: 16px;
        font-weight: bold;
    }

    .prof:hover .prof-overlay, .prof:hover h1, .prof:hover small{
        display: block;
    }
</style>

<section class="ftco-section ftco-no-pt" style="margin-bottom: 15px;">
    <div class="container " >
            <h1 @if( \App::getLocale() == 'ar') style="text-align: right!important;" @endif> {{ __('about.our-team') }} </h1>
        <div class="row  justify-content-center">
            {{--   Prof #1  --}}
            <div class="prof">
                <div class="prof-overlay animate-fading"></div>
                <img src="images/user.jpg" alt='user-name' width="100%" height="100%">
                <h1>Ahmed Ramadan</h1>
                <small>developer</small>
            </div>

        </div>
    </div>
</section>

{{-- Footer Section --}}
@include('frontend.sections.footer')

@endsection

