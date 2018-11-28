@extends('layouts.backend')

@section('title', 'Edit Google Travel Map')

@push('heading')
    @can('tours.destinations.create')
        <a href="{{ route('admin.tours.destinations.create') }}" class="btn btn-default">
            <i class="fa fa-fw fa-plus"></i> Add New
        </a>
    @endcan
@endpush

@section('content')
    <div class="row">
        <div class="col-md-12">
            <form action="{{ route('admin.tours.destinations.update', $destination->id) }}" method="POST">
                {{method_field('PUT') }}
                @include('admin.tours.destinations.form')
            </form>
        </div>
    </div>
@endsection