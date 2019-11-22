@extends('backend.layouts.app')

@section('page-title')
customers
@endsection

@section('content')
<div class="main-content container-fluid">
    <div class="row">
        
        <div class="col-sm">
            <div class="card card-border-color card-border-color-primary">
                <div class="card-header card-header-divider">Add new customer
                    @if(Session::has('success'))
                    <div class="alert alert-success p-3 mt-1">{{ session('success') }}</div>
                    @endif
                </div>
                <div class="card-body">
                    <form id="form1" action="{{ route('customers.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        
                        <div class="form-group pt-2">
                            <label for="name">Name</label>
                            <input class="form-control @error('name') is-invalid @enderror" id="name" type="text" placeholder="Enter the name" name="name" value="{{ old('name') }}">
                            @error('name')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group pt-2">
                            <label for="job">Job</label>
                            <input class="form-control @error('job') is-invalid @enderror" id="job" type="text" placeholder="Enter the job" name="job" value="{{ old('job') }}">
                            @error('job')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group pt-2">
                            <label for="comment">Comment</label>
                            <textarea rows="4" name="comment" id="comment" class="form-control @error('comment') is-invalid @enderror">{!! old('comment') !!}</textarea>
                            @error('comment')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

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