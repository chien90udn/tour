@extends('layouts.backend')

@section('title', 'Hotels')

@push('heading')
    @can('tours.hotels.create')
        <a href="{{ route('admin.tours.hotels.create') }}" class="btn btn-default">
            <i class="fa fa-fw fa-plus"></i> Add New
        </a>
    @endcan
@endpush

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">List Hotels</h3>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            @component('admin.components.datatables')
                                @slot('searchUrl', route('admin.tours.hotels.index'))
                                @slot('actionUrl', route('admin.tours.hotels.actions'))
                                @slot('actions', [
                                    ['destroy', 'Xóa tất cả', 'tours.hotels.destroy'],
                                ])
                                @slot('columns', [
                                    ['name', 'Hotel Name', true],
                                    ['location', 'Location', true],
                                    ['grade', 'Grade', true],
                                    ['active', 'Status', true],
                                ])
                                @slot('actionColumn', true)
                                @slot('view', 'admin.tours.hotels.item')
                                @slot('data', $hotels)
                            @endcomponent
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection