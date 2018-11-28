@extends('layouts.backend')

@section('title', 'Edit Pages')

@push('heading')
    @can('pages.create')
        <a href="{{ route('admin.pages.create') }}" class="btn btn-default">
            <i class="fa fa-fw fa-plus"></i> Add New
        </a>
    @endcan
@endpush

@section('content')
    <div class="row">
        <div class="col-md-12">
            <form action="{{ route('admin.pages.update', $page->id) }}" method="POST">
                {{method_field('PUT') }}
                @include('admin.pages.form')
            </form>
        </div>
    </div>
@endsection