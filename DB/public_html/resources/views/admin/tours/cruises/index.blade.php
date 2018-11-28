@extends('layouts.backend')

@section('title', 'Cruises')

@push('heading')
    @can('tours.cruises.create')
        <a href="{{ route('admin.tours.cruises.create') }}" class="btn btn-default">
            <i class="fa fa-fw fa-plus"></i> Add New
        </a>
    @endcan
@endpush

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">List Cruises</h3>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            @component('admin.components.datatables')
                                @slot('searchUrl', route('admin.tours.cruises.index'))
                                @slot('actionUrl', route('admin.tours.cruises.actions'))
                                @slot('actions', [
                                    ['destroy', 'Xóa tất cả', 'tours.cruises.destroy'],
                                ])
                                @slot('columns', [
                                    ['name', 'Hotel Name', true],
                                    ['location', 'Location', true],
                                    ['grade', 'Grade', true],
                                    ['active', 'Status', true],
                                ])
                                @slot('actionColumn', true)
                                @slot('view', 'admin.tours.cruises.item')
                                @slot('data', $cruises)
                            @endcomponent
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection