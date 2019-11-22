@extends('backend.layouts.app')

@section('page-title')
Team Members
@endsection

@section('content')
<div class="main-content container-fluid">
    <div class="row">
        
        <div class="col-sm">
            <div class="card card-border-color card-border-color-primary">
                <div class="card-header card-header-divider">Add new member
                    @if(Session::has('success'))
                    <div class="alert alert-success p-3 mt-1">{{ session('success') }}</div>
                    @endif
                </div>
                <form id="form1" action="{{ route('members.store') }}" method="POST" enctype="multipart/form-data">
                    <div class="card-body row">
                        @csrf
                        <div class="col-md-6">    
                            <div class="form-group pt-2">
                                <label for="name">Name</label>
                                <input class="form-control @error('name') is-invalid @enderror" id="name" type="text" placeholder="Enter the name" name="name" value="{{ old('name') }}">
                                @error('name')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group pt-2">
                                <label for="job_title">Jop Title</label>
                                <input class="form-control @error('job_title') is-invalid @enderror" id="job_title" type="text" placeholder="Enter the job title" name="job_title" value="{{ old('job_title') }}">
                                @error('job_title')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group pt-2">
                                <label for="email">Email</label>
                                <input class="form-control @error('email') is-invalid @enderror" id="email" type="email" placeholder="Enter the email" name="email" value="{{ old('email') }}">
                                @error('email')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group pt-2">
                                <label for="age">Age</label>
                                <input class="form-control @error('age') is-invalid @enderror" id="age" type="text" placeholder="Enter the age" name="age" value="{{ old('age') }}">
                                @error('age')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group pt-2">
                                <label for="address">Address</label>
                                <input class="form-control @error('address') is-invalid @enderror" id="address" type="text" placeholder="Enter the address" name="address" value="{{ old('address') }}">
                                @error('address')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group pt-2">
                                <label for="phone">Phone</label>
                                <input class="form-control @error('phone') is-invalid @enderror" id="phone" type="text" placeholder="Enter the phone" name="phone" value="{{ old('phone') }}">
                                @error('phone')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-6">    
                            
                            <div class="form-group">
                                <label class="col-form-label text-sm-right" for="file-1">Image</label>
                                <input class="inputfile @error('image') is-invalid @enderror" id="file-1" type="file" name="image">
                                <label class="btn-secondary" for="file-1">
                                    <i class="mdi mdi-upload"></i>
                                    <span>Browse files...</span>
                                </label>
                                @error('image')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group pt-2">
                                <label for="resume">resume</label>
                                <input class="form-control @error('resume') is-invalid @enderror" id="resume" type="file" placeholder="Enter the resume" name="resume" value="{{ old('resume') }}">
                                @error('resume')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            
                            <div class="form-group pt-2">
                                <label for="about">About</label>
                                <textarea rows="4" name="about" id="about" class="form-control @error('about') is-invalid @enderror">{!! old('about') !!}</textarea>
                                @error('about')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group pt-2">
                                <label for="facebook">Facebook</label>
                                <input class="form-control @error('facebook') is-invalid @enderror" id="facebook" type="text" placeholder="Enter the facebook" name="facebook" value="{{ old('facebook') }}">
                                @error('facebook')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group pt-2">
                                <label for="linkedin">Lineked In</label>
                                <input class="form-control @error('linkedin') is-invalid @enderror" id="linkedin" type="text" placeholder="Enter the linkedin" name="linkedin" value="{{ old('linkedin') }}">
                                @error('linkedin')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            
                            <div class="form-group text-right">
                                <button class="btn btn-space btn-primary" type="submit">Save Changes</button>
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