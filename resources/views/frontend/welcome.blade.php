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

    {{-- Home Section --}}
    @include('frontend.sections.home')

    {{-- Why Choose Us Section --}}
    @include('frontend.sections.why_choose_us')

    {{-- Facts Section --}}
    @include('frontend.sections.facts')

    {{-- Our Main Services Section --}}
    @include('frontend.sections.our_main_services')

    {{-- Customers Says Section --}}
    @include('frontend.sections.customers_says')

    {{-- Services Details Section --}}
    @include('frontend.sections.services_details')

    {{-- Partners Section --}}
    @include('frontend.sections.partners')

    {{-- Footer Section --}}
    @include('frontend.sections.footer')
@endsection
