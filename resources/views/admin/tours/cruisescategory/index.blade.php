@extends('layouts.backend')

@section('title', 'Cruises Category')

@push('heading')
    @can('tours.cruisescategory.create')
        <a href="{{ route('admin.tours.cruisescategory.create') }}" class="btn btn-default">
            <i class="fa fa-fw fa-plus"></i> Add New
        </a>
    @endcan
@endpush

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">List Groups Tours</h3>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            @component('admin.components.datatables')
                                @slot('searchUrl', route('admin.tours.cruisescategory.index'))
                                @slot('actionUrl', route('admin.tours.cruisescategory.actions'))
                                @slot('actions', [
                                    ['destroy', 'Xóa tất cả', 'tours.cruisescategory.destroy'],
                                ])
                                @slot('columns', [
                                    ['name', 'Group Name', true],
                                    ['tags', 'Tags', true],
                                    ['parent_id', 'In Group', true],
                                    ['rcount', 'Count', true],
                                ])
                                @slot('actionColumn', true)
                                @slot('view', 'admin.tours.cruisescategory.item')
                                @slot('data', $cruisescategory)
                            @endcomponent
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection