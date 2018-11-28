@extends('layouts.backend')

@section('title', 'Booking Manager')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">List Booking</h3>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            @component('admin.components.datatables')
                                @slot('searchUrl', route('admin.booking.index'))
                                @slot('actionUrl', route('admin.booking.actions'))
                                @slot('actions', [
                                    ['destroy', 'Xóa tất cả', 'booking.destroy'],
                                ])
                                @slot('columns', [
                                    ['name', 'Name', true],
                                    ['email', 'Email', true],
                                    ['tour_name', 'Tour name', true],
                                    ['date_send', 'Date booking', true],
                                ])
                                @slot('actionColumn', true)
                                @slot('view', 'admin.booking.item')
                                @slot('data', $booking)
                            @endcomponent
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection