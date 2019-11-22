@extends('frontend.layouts.app')

@section('content')

<!-- Partner Section -->
<section id="partners" class="root-sec grey lighten-5 funfact-wrap" style="margin-top: 42px;">
    <div class="sec-inner padd-tb-120">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-4">
                    <div class="person-about">
                        <h3 class="about-subtitle">About me</h3>
                        <p style="white-space: pre-line;">{{ auth()->user()->about }}</p>
                    </div>
                </div>
                <!-- about me description -->

                <div class="col-sm-6 col-md-4">
                    <div class="person-img wow fadeIn">
                        <img class="z-depth-1" src="{{ url('front/images/person.png') }}" alt="">
                    </div>
                </div>
                <!-- about me image -->

                <div class="col-sm-6 col-md-4">
                    <div class="person-info">
                        <h3 class="about-subtitle">Personal Information</h3>
                        <h5><span>Name :</span> {{ auth()->user()->name }}</h5>
                        <h5><span>Phone :</span> {{ auth()->user()->phone }}</h5>
                        <h5><span>Email :</span> {{ auth()->user()->email }}</h5>
                    </div>
                    <a class="waves-effect waves-light btn-large brand-bg white-text">Settings</a>

                    <!-- about me info -->

                </div>

            </div> <!-- .container end -->
        </div>
</section>

<!-- Serial Key section -->
<section id="experience" class="root-sec padd-tb-120 brand-bg experience-wrap">
    <div class="container">
        <div class="row">
            <div class="experience-inner">
                <div class="col-sm-12 col-md-10 card-box-wrap">
                    <div class="row">
                        <div class="clearfix section-head experience-text">
                            <div class="col-sm-12">
                                <h2 class="title">Programs</h2>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="overflow-hidden">
                                <div class="row">
                                    <div id="experienceSlider" class="clearfix card-element-wrapper owl-carousel owl-theme" style="opacity: 1; display: block;">
                                        <div class="owl-wrapper-outer">
                                            <div class="owl-wrapper" style="width: 3250px; left: 0px; display: block; transition: all 0ms ease 0s; transform: translate3d(0px, 0px, 0px);">
                                                <div class="owl-item" style="width: 325px;">
                                                    <div class="col-sm-4 cold-xs-12 single-card-box wow fadeInUpSmall" data-wow-duration=".7s" style="visibility: visible;">
                                                        <div class="card">
                                                            <div class="card-image waves-effect waves-block waves-light">
                                                                <h2 class="left-align card-title-top">calculation program</h2>
                                                                <div class="valign-wrapper card-img-wrap">
                                                                    <img class="activator" src="http://placehold.it/400x300" alt="">
                                                                </div>
                                                            </div>
                                                            <div class="card-content">
                                                                <span class="card-title activator brand-text">XXXX - XXXXX - XXXXXX - XXXXXX</span>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="btn-wrapp exp-ctrl">
                                    <a class="btn-floating waves-effect waves-light btn-large white go go-left"><i class="mdi-navigation-chevron-left brand-text"></i></a>
                                    <a class="btn-floating waves-effect waves-light btn-large white go go-right"><i class="mdi-navigation-chevron-right brand-text"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Serial section -->

@endsection