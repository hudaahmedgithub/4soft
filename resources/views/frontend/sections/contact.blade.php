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
                            </a></span>
                        <span class="text-light"> {{ __('contact.contact-us') }} </span>
                    </p>
                    <h1 class="mb-3 mr-3 ml-3 text-light">{{ __('contact.contact-us') }}</h1>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="ftco-section contact-section ftco-degree-bg">
    <div class="container">
        <div class="row d-flex mb-5 contact-info {{ $text_align }}">
            <div class="col-md-12 mb-4">
                <h2 class="h4"> {{ __('contact.contact-info') }}</h2>
            </div>
            <div class="w-100"></div>
            <div class="col-md-4">
                <p><span>{{ __('contact.address') }}:</span> {{ $settings->address ?? '' }}</p>
            </div>
            <div class="col-md-4">
                <p><span>{{ __('contact.phone') }}:</span> <a href="tel://{{ $settings->phone ?? '' }}">{{ $settings->phone ?? '' }}</a></p>
            </div>
            <div class="col-md-4">
                <p><span>{{ __('contact.email') }}:</span> <a href="mailto:{{ $settings->email ?? '' }}">{{ $settings->email ?? '' }}</a></p>
            </div>
        </div>
        <div class="row block-9">
            <div class="col-md-6 pr-md-5 {{ $text_align }}">
                @if($errors->any())
                @foreach ($errors->all() as $error)
                    <div>{{ $error }}</div>
                @endforeach
                @endif
                <form action="{{ route('contact') }}" id="contactForm" method="POST">
                    @csrf
                    <div class="form-group">
                        <input required type="text" name="name" class="form-control" placeholder=" {{__('contact.name')}} ">
                    </div>
                    <div class="form-group">
                        <input required type="email" name="email" class="form-control" placeholder=" {{__('contact.email')}} ">
                    </div>
                    <div class="form-group">
                        <input required type="text" name="subject" class="form-control" placeholder=" {{__('contact.subject')}} ">
                    </div>
                    <div class="form-group">
                        <textarea required name="message" id="textarea1" cols="30" rows="7" class="form-control" placeholder=" {{__('contact.message')}} "></textarea>
                    </div>
                    <div class="form-group">
                        <input type="submit" value=" {{__('contact.send message')}} " class="btn btn-primary py-3 px-5">
                    </div>
                </form>

            </div>

            <div class="col-md-6" id="map">
                <div class="mapouter">
                    <div class="gmap_canvas">
                        <iframe id="gmap_canvas" style="width: 100%; min-height: 500px;" src="https://maps.google.com/maps?q=Bani%20Mazar&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                        <a href="https://www.pureblack.de"></a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

{{-- Footer Section --}}
@include('frontend.sections.footer')
@endsection