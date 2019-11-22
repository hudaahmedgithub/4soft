@extends('backend.layouts.app')

@section('page-title')
Skills
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
                        <span class="pull-left">All Skills
                    </div>
                    <div class="col-md-6 text-right">
                        <a href="{{ route('skills.create') }}" class="btn btn-primary pull-right">Add New Skill</a>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-striped table-hover table-fw-widget" id="table1">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Skill Name</th>
                                <th>Percentage</th>
                                <th>Controls</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if($skills->count() > 0)
                                @php $i = 1; @endphp
                                @foreach($skills as $skill)
                                <tr class="odd gradeX">
                                    <td>{{ $i }}</td>
                                    <td>{{ $skill->title }}</td>
                                    <td>{{ $skill->degree }}%</td>
                                    <td class="center" style="font-size: 1.4em">
                                        <form method="POST" action="{{ route('skills.destroy', ['id' => $skill->id]) }}">
                                            <a href="{{ route('skills.edit', ['id' => $skill->id]) }}">
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
                                <td colspan="4" class="alert alert-danger text-center">No Skills Added</td>
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