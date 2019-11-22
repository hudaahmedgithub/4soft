@extends('backend.layouts.app')

@section('page-title')
Services
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
                        <span class="pull-left">All Services
                    </div>
                    <div class="col-md-6 text-right">
                        <a href="{{ route('services.create') }}" class="btn btn-primary pull-right">Add New Service</a>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-striped table-hover table-fw-widget" id="table1">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Image</th>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Controls</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if($services->count() > 0)
                                @php $i = 1; @endphp
                                @foreach($services as $service)
                                <tr class="odd gradeX">
                                    <td>{{ $i }}</td>
                                    <td class="user-avatar">
                                        <img src="{{ Storage::url($service->image) }}">
                                    </td>
                                    <td>{{ $service->name }}</td>
                                    <td>{{ $service->description }}</td>
                                    <td class="center" style="font-size: 1.4em">
                                        <form method="POST" action="{{ route('services.destroy', ['id' => $service->id]) }}">
                                            <a href="{{ route('services.edit', ['id' => $service->id]) }}">
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
                                <td colspan="5" class="alert alert-danger text-center">No Services Added</td>
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