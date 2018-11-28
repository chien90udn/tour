@extends('layouts.backend')

@section('title', 'Edit Tours')

@push('heading')
    @can('tours.tours.create')
        <a href="{{ route('admin.tours.tours.create') }}" class="btn btn-default">
            <i class="fa fa-fw fa-plus"></i> Add New
        </a>
    @endcan
@endpush

@section('content')
    <div class="row">
        <div class="col-md-12">
            <form action="{{ route('admin.tours.tours.update', $tour->id) }}" method="POST">
                {{method_field('PUT') }}
                @include('admin.tours.tours.form')
            </form>
        </div>
    </div>
@endsection