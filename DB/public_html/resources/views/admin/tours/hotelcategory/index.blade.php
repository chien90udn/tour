@extends('layouts.backend')

@section('title', 'Hotels Category')

@push('heading')
    @can('tours.cruisescategory.create')
        <a href="{{ route('admin.tours.hotelcategory.create') }}" class="btn btn-default">
            <i class="fa fa-fw fa-plus"></i> Add New
        </a>
    @endcan
@endpush

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">List Hotels Category</h3>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            @component('admin.components.datatables')
                                @slot('searchUrl', route('admin.tours.hotelcategory.index'))
                                @slot('actionUrl', route('admin.tours.hotelcategory.actions'))
                                @slot('actions', [
                                    ['destroy', 'Delete selected', 'tours.hotelcategory.destroy'],
                                ])
                                @slot('columns', [
                                    ['name', 'Category Name', true],
                                    ['tags', 'Tags', true],
                                    ['parent_id', 'In Group', true],
                                    ['rcount', 'Count', true],
                                ])
                                @slot('actionColumn', true)
                                @slot('view', 'admin.tours.hotelcategory.item')
                                @slot('data', $hotelcategory)
                            @endcomponent
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection