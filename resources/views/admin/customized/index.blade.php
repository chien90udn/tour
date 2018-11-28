@extends('layouts.backend')

@section('title', 'Customized Tours Manager')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">List Customized</h3>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            @component('admin.components.datatables')
                                @slot('searchUrl', route('admin.customized.index'))
                                @slot('actionUrl', route('admin.contact.actions'))
                                @slot('actions', [
                                    ['destroy', 'Xóa tất cả', 'contact.destroy'],
                                ])
                                @slot('columns', [
                                    ['name', 'Name', true],
                                    ['email', 'Email', true],
                                    ['create_at', 'Create at', true],
                                ])
                                @slot('actionColumn', true)
                                @slot('view', 'admin.customized.item')
                                @slot('data', $customized)
                            @endcomponent
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection