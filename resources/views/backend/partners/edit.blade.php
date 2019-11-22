@extends('backend.layouts.app')

@section('page-title')
partners
@endsection

@section('content')
<div class="main-content container-fluid">
    <div class="row">
        
        <div class="col-sm">
            <div class="card card-border-color card-border-color-primary">
                <div class="card-header card-header-divider">Edit partner
                    @if(Session::has('success'))
                    <div class="alert alert-success p-3 mt-1">{{ session('success') }}</div>
                    @endif
                </div>
                <div class="card-body">
                    <form id="form1" action="{{ route('partners.update', ['id' => $partner->id]) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        
                        <div class="form-group pt-2">
                            <label for="name">Name</label>
                            <input class="form-control @error('name') is-invalid @enderror" id="name" type="text" placeholder="Enter the name" name="name" value="{{ $partner->name }}">
                            @error('name')
                            <span class="text-danger"></span>
                            @enderror
                        </div>

                        <div class="form-group pt-2">
                            <label for="url">Url</label>
                            <input class="form-control @error('url') is-invalid @enderror" id="url" type="text" placeholder="Enter the url" name="url" value="{{ $partner->url }}">
                            @error('url')
                            <span class="text-danger"></span>
                            @enderror
                        </div>

                        <div class="form-group pt-2">
                            <label for="description">Description</label>
                            <textarea rows="4" name="description" id="description" class="form-control @error('description') is-invalid @enderror">{!! $partner->description !!}</textarea>
                            @error('description')
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
                            <span class="text-warning text-bold">Keep the image empty if you want the old image</span>
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