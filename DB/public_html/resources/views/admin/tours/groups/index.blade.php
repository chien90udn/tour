@extends('layouts.backend')

@section('title', 'Groups Tours')

@push('heading')
    @can('tours.groups.create')
        <a href="{{ route('admin.tours.groups.create') }}" class="btn btn-default">
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
                                @slot('searchUrl', route('admin.tours.groups.index'))
                                @slot('actionUrl', route('admin.tours.groups.actions'))
                                @slot('actions', [
                                    ['destroy', 'Xóa tất cả', 'tours.groups.destroy'],
                                ])
                                @slot('columns', [
                                    ['name', 'Group Name', true],
                                    ['tags', 'Tags', true],
                                    ['parent_id', 'In Group', true],
                                    ['rcount', 'Count', true],
                                ])
                                @slot('actionColumn', true)
                                @slot('view', 'admin.tours.groups.item')
                                @slot('data', $groups)
                            @endcomponent
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection