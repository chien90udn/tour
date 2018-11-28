@extends('layouts.backend')

@section('title', 'View Booking')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <form action="{{ route('admin.contact.update', $booking->id) }}" method="POST">
                {{method_field('PUT') }}
                @include('admin.booking.form')
            </form>
        </div>
    </div>
@endsection