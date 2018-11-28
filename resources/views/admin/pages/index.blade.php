@extends('layouts.backend')

@section('title', 'Pages Manager')

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
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">List Pages</h3>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            @component('admin.components.datatables')
                                @slot('searchUrl', route('admin.pages.index'))
                                @slot('actionUrl', route('admin.pages.actions'))
                                @slot('actions', [
                                    ['destroy', 'Xóa tất cả', 'pages.destroy'],
                                ])
                                @slot('columns', [
                                    ['name', 'Name', true],
                                ])
                                @slot('actionColumn', true)
                                @slot('view', 'admin.pages.item')
                                @slot('data', $pages)
                            @endcomponent
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection