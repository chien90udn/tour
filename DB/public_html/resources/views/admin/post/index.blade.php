@extends('layouts.backend')

@section('title', 'Quản lý bài viết')

@push('heading')
    @can('post.create')
        <a href="{{ route('admin.post.create') }}" class="btn btn-default">
            <i class="fa fa-fw fa-plus"></i> Thêm mới
        </a>
    @endcan
@endpush

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Danh sách danh mục</h3>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            @component('admin.components.datatables')
                                @slot('searchUrl', route('admin.post.index'))
                                @slot('actionUrl', route('admin.post.actions'))
                                @slot('actions', [
                                    ['destroy', 'Xóa tất cả', 'post.destroy']
                                ])
                                @slot('columns', [
                                    ['title', 'Tên trang', true],
                                    ['status', 'Tags', true],
                                    ['cat_id', 'Danh mục', true],
                                ])
                                @slot('actionColumn', true)
                                @slot('view', 'admin.post.item')

                                @slot('data', $post)
                            @endcomponent
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection