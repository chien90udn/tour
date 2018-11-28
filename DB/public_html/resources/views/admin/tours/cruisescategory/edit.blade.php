@extends('layouts.backend')

@section('title', 'Edit Groups Tours')

@push('heading')
    @can('pages.create')
        <a href="{{ route('admin.tours.groups.create') }}" class="btn btn-default">
            <i class="fa fa-fw fa-plus"></i> Add New
        </a>
    @endcan
@endpush

@section('content')
    <div class="row">
        <div class="col-md-12">
            <form action="{{ route('admin.tours.cruisescategory.update', $cruisescategory->id) }}" method="POST">
                {{method_field('PUT') }}
                @include('admin.tours.cruisescategory.form')
            </form>
        </div>
    </div>
@endsection