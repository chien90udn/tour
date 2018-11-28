@extends('layouts.backend')

@section('title', 'Edit Hotel Category')

@push('heading')
    @can('tours.hotelcategory.create')
        <a href="{{ route('admin.tours.hotelcategory.create') }}" class="btn btn-default">
            <i class="fa fa-fw fa-plus"></i> Add New
        </a>
    @endcan
@endpush

@section('content')
    <div class="row">
        <div class="col-md-12">
            <form action="{{ route('admin.tours.hotelcategory.update', $hotelcategory->id) }}" method="POST">
                {{method_field('PUT') }}
                @include('admin.tours.hotelcategory.form')
            </form>
        </div>
    </div>
@endsection