@extends('layouts.backend')

@section('title', 'Edit Hotel')

@push('heading')
    @can('pages.create')
        <a href="{{ route('admin.tours.hotels.create') }}" class="btn btn-default">
            <i class="fa fa-fw fa-plus"></i> Add New
        </a>
    @endcan
@endpush

@section('content')
    <div class="row">
        <div class="col-md-12">
            <form action="{{ route('admin.tours.hotels.update', $hotel->id) }}" method="POST">
                {{method_field('PUT') }}
                @include('admin.tours.hotels.form')
            </form>
        </div>
    </div>
@endsection