@extends('backend.layouts.app')

@section('page-title')
Settings
@endsection

@section('content')
<div class="main-content container-fluid">
    <div class="row">

        <div class="col-md-6">
            <div class="card card-border-color card-border-color-primary">
                <div class="card-header card-header-divider">Information Form
                    <span class="card-subtitle">This is the main information form for the website.</span>
                </div>
                <div class="card-body">
                    <form id="form1" action="{{ route('settings.info') }}" method="POST">
                        @csrf
                        @method('PUT')

                        {{-- The website name with translations --}}
                        @foreach (config('translatable.locales') as $locale)
                            <div class="form-group pt-2">
                                <label for="websiteName">Website Name ({{ $locale }})</label>
                                <input name="{{ $locale }}[name]" class="form-control @error('name') is-invalid @enderror" id="websiteName" type="text" placeholder="Enter the website name" value="{{ SectionService::settings('name_'. $locale) }}">
                                @error('name')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        @endforeach

                        <div class="form-group">
                            <label for="websitePhone">Website Phone</label>
                            <input name="phone" class="form-control @error('phone') is-invalid @enderror" id="websitePhone" 
                            type="text" placeholder="Enter the website phone" value="{{ SectionService::settings('phone') }}">
                            @error('phone')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="websiteEmail">Website Email</label>
                            <input name="email" class="form-control @error('email') is-invalid @enderror" id="websiteEmail" type="email" placeholder="Enter the website email" value="{{ SectionService::settings('email') }}">
                            @error('email')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        {{-- The website address with translations --}}
                        @foreach (config('translatable.locales') as $locale)
                            <div class="form-group">
                                <label for="websiteAddress">Website Address ({{ $locale }})</label>
                                <input name="{{ $locale }}[address]" class="form-control @error('address') is-invalid @enderror" id="websiteAddress" type="text" placeholder="Enter the website address" value="{{ SectionService::settings('address_'. $locale) }}">
                                @error('address')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        @endforeach
                        <div class="form-group text-right">
                            <button class="btn btn-space btn-primary" type="submit">Save Changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card card-border-color card-border-color-primary">
                <div class="card-header card-header-divider">About Form
                    <span class="card-subtitle">This is the about website form and logo image</span>
                </div>
                <div class="card-body">
                    <form id="form2" action="{{ route('settings.about') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="form-group">

                        </div>
                        {{-- The website about with translations --}}
                        @foreach (config('translatable.locales') as $locale)

                            <label for="editor2">About Website ({{ $locale }})</label>
                            <textarea name="{{ $locale }}[about]" class="form-control @error('about') is-invalid @enderror">{!! SectionService::settings('about_'. $locale) !!}</textarea>
                            @error('about')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror

                        @endforeach

                        {{-- 
                        <div class="form-group">
                            <label class="col-form-label text-sm-right" for="file-1">Website Logo</label>
                            <input class="inputfile @error('logo') is-invalid @enderror" id="file-1" type="file" name="logo">
                            <label class="btn-secondary" for="file-1">
                                <i class="mdi mdi-upload"></i>
                                <span>Browse files...</span>
                            </label>
                            @if(SectionService::settings('logo'))
                                <span class="text-success pull-right">Logo Exists</span>
                            @else
                                <span class="text-warning pull-right">Logo not Exists</span>
                            @endif
                            @error('logo')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        --}}
                        <div class="form-group text-right">
                            <button class="btn btn-space btn-primary" type="submit">Save Changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-sm">
            <div class="card card-border-color card-border-color-primary">
                <div class="card-header card-header-divider">Social Links Settings
                    <span class="card-subtitle">This is the social links for the startup.</span>
                </div>
                <div class="card-body">
                    <form id="form3" action="{{ route('settings.social') }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="form-group pt-2">
                            <label for="facebook">Facebook</label>
                            <input class="form-control @error('facebook') is-invalid @enderror" id="facebook" type="text" placeholder="Enter the facebook url" name="facebook" value="{{ SectionService::settings('facebook') }}">
                            @error('facebook')
                            <span class="text-danger"></span>
                            @enderror
                        </div>
                        <div class="form-group pt-2">
                            <label for="twitter">Twitter</label>
                            <input class="form-control @error('twitter') is-invalid @enderror" id="twitter" type="text" placeholder="Enter the twitter url" name="twitter" value="{{ SectionService::settings('twitter') }}">
                            @error('twitter')
                            <span class="text-danger"></span>
                            @enderror
                        </div>
                        <div class="form-group pt-2">
                            <label for="linkedin">Linked In</label>
                            <input class="form-control @error('linkedin') is-invalid @enderror" id="linkedin" type="text" placeholder="Enter the linkedin url" name="linkedin" value="{{ SectionService::settings('linkedin') }}">
                            @error('linkedin')
                            <span class="text-danger"></span>
                            @enderror
                        </div>
                        <div class="form-group text-right">
                            <button class="btn btn-space btn-primary" type="submit">Save Changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection

@push('css')
<link rel="stylesheet" href="{{ asset('lib/summernote/summernote-bs4.css') }}"/>
@endpush

@push('js')
<script src="{{ asset('lib/summernote/summernote-bs4.min.js') }}"></script>
<script src="{{ asset('lib/summernote/summernote-ext-beagle.js') }}"></script>
<script>
    $(document).ready(function() {
        App.textEditors("#websiteAbout-ar", 190);
        App.textEditors("#websiteAbout-en", 190);

        $(".inputfile").each(function() {
            var e = $(this),
                t = e.next("label"),
                i = t.html();

            e.on("change", function(e) {
                var a = "";
                this.files && this.files.length > 1 ? a = (this.getAttribute("data-multiple-caption") || "").replace("{count}", this.files.length) : e.target.value && (a = e.target.value.split("\\").pop()), a ? t.find("span").html(a) : t.html(i)
            })
        })
    });
</script>
@endpush
