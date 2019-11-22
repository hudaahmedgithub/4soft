    @extends('backend.layouts.app')

@section('page-title')
Sections
@endsection

@section('content')
<div class="main-content container-fluid">
    <div class="row">
        
        <div class="col-sm">
            <div class="card card-border-color card-border-color-primary">
                <div class="card-header card-header-divider">Add new section
                    @if(Session::has('success'))
                    <div class="alert alert-success p-3 mt-1">{{ session('success') }}</div>
                    @endif
                </div>
                <form id="form1" action="{{ route('sections.store') }}" method="POST">
                    <div class="card-body row">
                        @csrf

                        <div class="form-group pt-2 col-md-12">
                            <label for="name">Section Name</label>
                            <input class="form-control @error('name') is-invalid @enderror" id="name" type="text" placeholder="Enter the name" name="name" value="{{ old( 'name') }}">
                            @error('name')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        @foreach (config('translatable.locales') as $locale)
                            <div class="form-group pt-2 col-md-6">
                                <label for="heading-{{ $locale }}">Heading ({{ $locale }})</label>
                                <input class="form-control @error('heading') is-invalid @enderror" id="heading-{{ $locale }}" type="text" placeholder="Enter the heading" name="{{ $locale }}[heading]" value="{{ old($locale . '.heading') }}">
                                @error('heading')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        @endforeach

                        @foreach (config('translatable.locales') as $locale)
                            <div class="form-group pt-2 col-md-6">
                                <label for="sub_heading-{{ $locale }}">Sub Heading ({{ $locale }})</label>
                                <input class="form-control @error('sub_heading') is-invalid @enderror" id="sub_heading-{{ $locale }}" type="text" placeholder="Enter the sub heading" name="{{ $locale }}[sub_heading]" value="{{ old($locale . '.sub_heading') }}">
                                @error('sub_heading')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        @endforeach

                        @foreach (config('translatable.locales') as $locale)
                            <div class="form-group pt-2 col-md-6">
                                <label for="description-{{ $locale }}">Description ({{ $locale }})</label>
                                <textarea class="form-control @error('description') is-invalid @enderror" id="description-{{ $locale }}" placeholder="Enter the Description" name="{{ $locale }}[description]">{{ old($locale . '.description') }}</textarea>
                                @error('description')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        @endforeach

                        <div class="col-md-6">
                            <div class="form-group pt-2">
                                <label for="has_button">Has Button</label>
                                <select name="has_button" class="form-control @error('has_button') is-invalid @enderror" id="has_button">
                                    <option value="yes">Yes</option>
                                    <option value="no">No</option>
                                </select>
                                @error('has_button')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>


                        <div class="col-md-6">    
                            <div class="form-group pt-2">
                                <label for="link">Button Link</label>
                                <input class="form-control @error('link') is-invalid @enderror" id="link" type="link" placeholder="Enter the link" name="link" value="{{ old('link') }}">
                                @error('link')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        @foreach (config('translatable.locales') as $locale)
                            <div class="form-group pt-2 col-md-6">
                                <label for="text-{{ $locale }}">Button Text ({{ $locale }})</label>
                                <textarea class="form-control @error('text') is-invalid @enderror" id="text-{{ $locale }}" placeholder="Enter the Description" name="{{ $locale }}[text]">{{ old($locale . '.text') }}</textarea>
                                @error('text')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        @endforeach
                            
                        <div class="col-md-6">
                                <div class="form-group pt-2">
                                    <label for="icon">Button Icon</label>
                                    <input class="form-control @error('icon') is-invalid @enderror" id="icon" type="text" placeholder="Enter the icon" name="icon" value="{{ old('icon') }}">
                                    @error('icon')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group pt-4">
                                    <input type="submit" class="btn btn-primary btn-lg float-right mt-4" value="Add Section">
                            </div>
                        </div>

                    </div>
                </form>
            </div>
        </div>

    </div>
</div>
@endsection

@push('css')

@endpush

@push('js')

<script>
    $(document).ready(function() {
        
    });
</script>
@endpush