@extends('layouts.backend')

@section('title', 'Edit Pages')

@push('heading')
    @can('themes.menus.create')
        <a href="{{ route('admin.themes.menus.create') }}" class="btn btn-default">
            <i class="fa fa-fw fa-plus"></i> Add New
        </a>
    @endcan
@endpush

@section('content')
    <div class="row">
        <div class="col-md-12">
            <form action="{{ route('admin.themes.menus.update', $menu->id) }}" method="POST">
                {{method_field('PUT') }}
                @include('admin.menus.form')
            </form>
        </div>
    </div>
@endsection