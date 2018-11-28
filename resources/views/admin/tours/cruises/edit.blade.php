@extends('layouts.backend')

@section('title', 'Edit Cruises')

@push('heading')
    @can('cruises.create')
        <a href="{{ route('admin.tours.cruises.create') }}" class="btn btn-default">
            <i class="fa fa-fw fa-plus"></i> Add New
        </a>
    @endcan
@endpush

@section('content')
    <div class="row">
        <div class="col-md-12">
            <form action="{{ route('admin.tours.cruises.update', $cruise->id) }}" method="POST">
                {{method_field('PUT') }}
                @include('admin.tours.cruises.form')
            </form>
        </div>
    </div>
@endsection