@extends('layouts.backend')

@section('title', 'Cruises Tours Manager')

@push('heading')
    @can('tours.cruisestours.create')
        <a href="{{ route('admin.tours.cruisestours.create') }}" class="btn btn-default">
            <i class="fa fa-fw fa-plus"></i> Add New
        </a>
    @endcan
@endpush

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">List Cruises Tours</h3>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            @component('admin.components.datatables')
                                @slot('searchUrl', route('admin.tours.cruisestours.index'))
                                @slot('actionUrl', route('admin.tours.cruisestours.actions'))
                                @slot('actions', [
                                    ['destroy', 'Xóa tất cả', 'tours.cruisestours.destroy'],
                                ])
                                @slot('columns', [
                                    ['id', 'STT', true],
                                    ['name', 'Tour Name', true],
                                    ['country', 'In Groups', true],
                                ])
                                @slot('actionColumn', true)
                                @slot('view', 'admin.tours.cruisestours.item')
                                @slot('data', $tours)
                            @endcomponent
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection