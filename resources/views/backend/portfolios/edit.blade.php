@extends('backend.layouts.app')

@section('page-title')
portfolios
@endsection

@section('content')
<div class="main-content container-fluid">
    <div class="row">

        <div class="col-sm">
            <div class="card card-border-color card-border-color-primary">
                <div class="card-header card-header-divider">Edit portfolio
                    @if(Session::has('success'))
                    <div class="alert alert-success p-3 mt-1">{{ session('success') }}</div>
                    @endif
                </div>
                <div class="card-body">
                    <form id="form1" action="{{ route('portfolios.update', ['id' => $portfolio->id]) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="row">

                            @foreach (config('translatable.locales') as $locale)
                            <div class="form-group pt-2 col-md-6">
                                <label for="name">Name ({{ $locale }})</label>
                                <input class="form-control @error('name') is-invalid @enderror" id="name" type="text" placeholder="Enter the name" name="{{ $locale }}[name]" value="{{ $portfolio->name }}">
                                @error('name')
                                <span class="text-danger"></span>
                                @enderror
                            </div>
                            @endforeach

                            <div class="form-group pt-2 col-md-6">
                                <label for="type">Type</label>
                                <input class="form-control @error('type') is-invalid @enderror" id="type" type="text" placeholder="Enter the type" name="type" value="{{ $portfolio->type }}">
                                @error('type')
                                <span class="text-danger"></span>
                                @enderror
                            </div>

                            <div class="form-group pt-2 col-md-6">
                                <label for="link">Demo Link</label>
                                <input class="form-control @error('link') is-invalid @enderror" id="link" type="text" placeholder="Enter the link" name="link" value="{{ $portfolio->link }}">
                                @error('link')
                                <span class="text-danger"></span>
                                @enderror
                            </div>


                        </div>
                        <div class="row">
                            @foreach(config('translatable.locales') as $locale)
                                <div class="form-group pt-2 col-md-6">
                                    <label for="description">Description ({{ $locale }})</label>
                                    <textarea rows="4" name="{{ $locale }}[description]" id="description-{{ $locale }}" class="form-control @error('description') is-invalid @enderror">{!! $portfolio->description !!}</textarea>
                                    @error('description')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            @endforeach
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