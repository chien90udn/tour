@extends('layouts.backend')

@section('title', 'Google Travel Map Manager')

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
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">List Google Travel Map</h3>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            @component('admin.components.datatables')
                                @slot('searchUrl', route('admin.tours.destinations.index'))
                                @slot('actionUrl', route('admin.tours.destinations.actions'))
                                @slot('actions', [
                                    ['destroy', 'Xóa tất cả', 'tours.destinations.destroy'],
                                ])
                                @slot('columns', [
                                    ['name', 'Name', true],
                                    ['link', 'Link', true],
                                    ['home', 'Home', true],
                                    ['country', 'Country', true],
                                ])
                                @slot('actionColumn', true)
                                @slot('view', 'admin.tours.destinations.item')
                                @slot('data', $destinations)
                            @endcomponent
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection