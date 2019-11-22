@extends('frontend.layouts.app')

@section('content')
    
<!-- Home -->
    @include('frontend.new.sections.home')

<!-- About -->
    @include('frontend.new.sections.about')

<!-- Resume -->
    @include('frontend.new.sections.resume')

<!-- Funfacts -->
    @include('frontend.new.sections.funfacts')

<!-- Portfolio -->
    @include('frontend.new.sections.portfolio')

<!-- Team -->
    @include('frontend.new.sections.team')
    
<!-- Partners -->
    @include('frontend.new.sections.partners')

<!-- Contact -->
    @include('frontend.new.sections.contact')

@endsection