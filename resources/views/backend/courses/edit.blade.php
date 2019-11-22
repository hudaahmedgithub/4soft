    @extends('backend.layouts.app')

@section('page-title')
Courses
@endsection

@section('content')
<div class="main-content container-fluid">
    <div class="row">
        
        <div class="col-sm">
            <div class="card card-border-color card-border-color-primary">
                <div class="card-header card-header-divider">Edit Course
                    @if(Session::has('success'))
                    <div class="alert alert-success p-3 mt-1">{{ session('success') }}</div>
                    @endif
                </div>
                <form id="form1" action="{{ route('course.update', ['id' => $course->id]) }}" method="POST">
                    <div class="card-body row">
                        @csrf
                        @method('PUT')


                        <div class="form-group pt-2 col-md-12">
                                <label for="name">Course Name</label>
                                <input class="form-control @error('name') is-invalid @enderror" id="name" type="text" placeholder="Enter the name" name="name" value="{{ $course->name }}">
                                @error('name')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
							
						 <label for="description">course Description</label>
                            <input class="form-control @error('description') is-invalid @enderror" id="description" type="text" placeholder="Enter the description" name="description" value="{{ $course->description}}">
                            @error('description')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
 
                            <label for="hours">course hours</label>
                            <input class="form-control @error('hours') is-invalid @enderror" id="hours" type="text" placeholder="Enter the hours" name="hours" value="{{$course->hours }}">
                            @error('hours')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                     
 
                            <label for="duration">course duration</label>
                            <input class="form-control @error('duration') is-invalid @enderror" id="duration" type="text" placeholder="Enter the duration" name="duration" value="{{$course->duration }}">
                            @error('duration')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                   
                            <label for="price">course price</label>
                            <input class="form-control @error('price') is-invalid @enderror" id="price" type="text" placeholder="Enter the price" name="price" value="{{$course->price}}">
                            @error('price')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                  <label>Level</label>
						
		<select name="level_id" class="form-control col-md-12">
					<option >choose level</option>
						@foreach($levels as $level)
						<option value="{{$level->id}}"@if($level->id === $course->level_id) selected @endif>
								{{$level->name}}
								</option>
								@endforeach
							</select>

                      
    
			<select name="language_id" class="form-control col-md-12">
								<option >choose language</option>
								@foreach($languages as $language)
						<option value="{{$language->id}}"@if($language->id === $course->language_id) selected @endif>
								{{$language->name}}
								</option>
								@endforeach
							</select>

		<select name="video_id" class="form-control col-md-12">
					<option >choose video transcript</option>
						@foreach($videos as $video)
						<option value="{{$video->id}}"@if($video->id === $course->video_id) selected @endif>
								{{$video->name}}
								</option>
								@endforeach
							</select>

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