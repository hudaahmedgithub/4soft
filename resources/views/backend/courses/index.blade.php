@extends('backend.layouts.app')

@section('page-title')
Courses
@endsection

@section('content')
<div class="main-content container-fluid">
    <div class="row">
        
        <div class="col-sm-12">
            <div class="card card-table">
                <div class="card-header row">
                    @if(Session::has('success'))
                    <div class="col-sm-12 alert alert-success p-3 mt-1">{{ session('success') }}</div>
                    @endif
                    <div class="col-md-6">
                        <span class="pull-left">All Courses
                    </div>
                    <div class="col-md-6 text-right">
                        <a href="{{ route('course.create') }}" class="btn btn-primary pull-right">Add New Course</a>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-striped table-hover table-fw-widget" id="table1">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Heading</th>
                                <th>Sub Heading</th>
                                <th>Controls</th>
                            </tr>
                        </thead>
                        <tbody>course
                            @if($courses->count() > 0)
                                @php $i = 1; @endphp
                                @foreach($courses as $course)
                                <tr class="odd gradeX">
                                    <td>{{ $i }}</td>.
                                    <td>{{ $course->name }}</td>
                                    <td>{{ $course->description }}</td>
                                    <td>{{ $course->price }}</td>
								
                                    <td>{{ $course->user['name'] }}</td>
                                    <td>{{ $course->level['name'] }}</td>
                                    <td>{{ $course->video['name'] }}</td>
									<td>{{ $course->language['name'] }}</td>course
                                    <td class="center" style="font-size: 1.4em">
                                        <form method="POST" action="{{ route('course.destroy', ['id' => $course->id]) }}">
                                            <a href="{{ route('course.edit', ['id' => $course->id]) }}">
                                                <i class="icon mdi mdi-edit text-success"></i>
                                            </a>
                                            &nbsp;/&nbsp;

                                            @csrf
                                            @method('DELETE')
                                            <button class="btn"><i class="icon mdi mdi-delete text-danger"></i></button>
                                        </form>
                                    </td>
                                </tr>
                                @php $i++ @endphp
                                @endforeach
                            @else
                            <tr>
                                <td colspan="5" class="alert alert-danger text-center">No Courses Added</td>
                            </tr>
                            @endif
                        </tbody>
                    </table>
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