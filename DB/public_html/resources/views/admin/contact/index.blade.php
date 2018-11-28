@extends('layouts.backend')

@section('title', 'Contact Manager')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">List Contact</h3>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            @component('admin.components.datatables')
                                @slot('searchUrl', route('admin.contact.index'))
                                @slot('actionUrl', route('admin.contact.actions'))
                                @slot('actions', [
                                    ['destroy', 'Xóa tất cả', 'contact.destroy'],
                                ])
                                @slot('columns', [
                                    ['name', 'Name', true],
                                    ['email', 'Email', true],
                                    ['subject', 'Subject', true],
                                    ['date_send', 'Date booking', true],
                                ])
                                @slot('actionColumn', true)
                                @slot('view', 'admin.contact.item')
                                @slot('data', $contact)
                            @endcomponent
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection