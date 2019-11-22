@extends('backend.layouts.app')

@section('page-title')
Skills
@endsection

@section('content')
<div class="main-content container-fluid">
    <div class="row">
        
        <div class="col-sm">
            <div class="card card-border-color card-border-color-primary">
                <div class="card-header card-header-divider">Add new skill
                    @if(Session::has('success'))
                    <div class="alert alert-success p-3 mt-1">{{ session('success') }}</div>
                    @endif
                </div>
                <div class="card-body">
                    <form id="form1" action="{{ route('skills.store') }}" method="POST">
                        @csrf
                        
                        <div class="form-group pt-2">
                            <label for="title">Title</label>
                            <input class="form-control @error('title') is-invalid @enderror" id="title" type="text" placeholder="Enter the title" name="title" value="{{ old('title') }}">
                            @error('title')
                            <span class="text-danger"></span>
                            @enderror
                        </div>
                        <div class="form-group pt-2">
                            <label for="title">Degree</label>
                            <input class="form-control @error('degree') is-invalid @enderror" id="degree" type="text" placeholder="Enter the degree" name="degree" value="{{ old('degree') }}">
                            @error('degree')
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

@endpush

@push('js')

<script>
    $(document).ready(function() {
        
    });
</script>
@endpush