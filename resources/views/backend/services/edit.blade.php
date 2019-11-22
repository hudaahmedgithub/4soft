@extends('backend.layouts.app')

@section('page-title')
Services
@endsection

@section('content')
<div class="main-content container-fluid">
    <div class="row">

        <div class="col-sm">
            <div class="card card-border-color card-border-color-primary">
                <div class="card-header card-header-divider">Edit service
                    @if(Session::has('success'))
                    <div class="alert alert-success p-3 mt-1">{{ session('success') }}</div>
                    @endif
                </div>
                <div class="card-body">
                    <form id="form1" action="{{ route('services.update', ['id' => $service->id]) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="row">
                            <div class="form-group pt-2 col-md-6">
                                <label for="name">Name</label>
                                <input class="form-control @error('name') is-invalid @enderror" id="name" type="text" placeholder="Enter the name" name="name" value="{{ $service->name }}">
                                @error('name')
                                <span class="text-danger"></span>
                                @enderror
                            </div>
                            <div class="form-group pt-2 col-md-6">
                                <label for="type">Type</label>
                                <select class="form-control @error('type') is-invalid @enderror" id="type" name="type">
                                    <option value="testimonials" @if($service->type == 'testimonials') selected @endif>Testimonials</option>
                                    <option value="main_service" @if($service->type == 'main_service') selected @endif>Our Main Services</option>
                                    <option value="service_details" @if($service->type == 'service_details') selected @endif>How Our Services works</option>
                                </select>

                                @error('type')
                                <span class="text-danger"></span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group pt-2">
                            <label for="description">Description</label>
                            <textarea rows="4" name="description" id="description" class="form-control @error('description') is-invalid @enderror">{!! $service->description !!}</textarea>
                            @error('description')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label class="col-form-label text-sm-right" for="file-1">Image</label><br><br>
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
                            <div class="form-group pt-2 col-md-6">
                                <label for="icon">Icon</label>
                                <input class="form-control @error('icon') is-invalid @enderror" id="icon" type="text" placeholder="Enter the icon" name="icon" value="{{ $service->icon }}">
                                @error('icon')
                                <span class="text-danger"></span>
                                @enderror
                            </div>
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