@extends('layouts.backend')

@section('title', 'Menu Manager')

@push('heading')
    @can('menus.create')
        <a href="{{ route('admin.themes.menus.create') }}" class="btn btn-default">
            <i class="fa fa-fw fa-plus"></i> Add New
        </a>
    @endcan
@endpush

@push('script')
<script src="{{ backend_asset('vendor/nestable/jquery.nestable.js') }}"></script>
<script src="{{ backend_asset('vendor/nestable/nestable.js') }}"></script>
@if(isset($menu))
    <script>reloadBuilderContent({{ $menu->id }});</script>
@endif
@endpush

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">List Menu</h3>
                </div>
                <div class="panel-body">
                    <div class="form-group">
                        {!! Form::open(['url' => route('admin.themes.menus.index'), 'method' => 'GET', 'id' => 'choose-menu']) !!}
                        <div class="col-md-4">
                            <select name="menu" id="menus-list" class="form-control">
                                <option disabled selected>Chọn một menu của bạn</option>
                                @foreach($menus as $item)
                                    <option value="{{ $item }}" {{ request()->get('menu') == $item ? 'selected' : '' }}>{{ $item }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-2">
                            @if(isset($menu))
                            <a href="{{ route('admin.themes.menus.edit', $menu->id) }}" class="btn btn-info">
                                <i class="fa fa-pencil"></i> Sửa
                            </a>
                            {!! Form::button('Xóa', [
                                'type' => 'button',
                                'class' => 'btn btn-danger',
                                'data-url' => route('admin.themes.menus.destroy', $menu->id),
                                'data-action' => 'confirm_to_delete',
                                'data-message' => trans('language.confirm_to_delete'),
                                'data-callback' => 'redirect_to'
                            ]) !!}
                            @endif
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>

    @if(isset($menu))
        <div class="row">
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Add or Edit Menu</h3>
                    </div>
                    <div class="panel-body">

                        <div class="text-center" id="create-block">
                            <button class="btn btn-primary" id="create_new_item" data-id="{{ $menu->id }}">
                                <i class="fa fa-plus"></i> Thêm mới
                            </button>
                        </div>

                        <div id="form" hidden="true"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <button type="button" class="btn btn-xs btn-success" id="save-position" onclick="savePositionAllItems({{ $menu->id }});">
                    <i class="fa fa-refresh"></i> Lưu
                </button>
                <div id="content">...</div>
                <div class="clearfix"></div>
            </div>
        </div>
    @endif

@endsection

