@extends('layouts.backend')

@section('title', 'Tours Manager')

@push('heading')
    @can('tours.tours.create')
        <a href="{{ route('admin.tours.tours.create') }}" class="btn btn-default">
            <i class="fa fa-fw fa-plus"></i> Add New
        </a>
    @endcan
@endpush

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">List Tours</h3>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            @component('admin.components.datatables')
                                @slot('searchUrl', route('admin.tours.tours.index'))
                                @slot('actionUrl', route('admin.tours.tours.actions'))
                                @slot('actions', [
                                    ['destroy', 'Delete', 'tours.tours.destroy'],
                                ])
                                @slot('columns', [
                                    ['id', 'STT', true],
                                    ['name', 'Tour Name', true],
                                    ['country', 'In Groups', true],
                                ])
                                @slot('actionColumn', true)
                                @slot('view', 'admin.tours.tours.item')
                                @slot('data', $tours)
                            @endcomponent
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection