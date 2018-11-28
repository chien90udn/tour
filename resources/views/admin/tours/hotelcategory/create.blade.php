@extends('layouts.backend')

@section('title', 'Add New Hotels Category')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <form action="{{ route('admin.tours.hotelcategory.store') }}" method="POST">
                @include('admin.tours.hotelcategory.form')
            </form>
        </div>
    </div>
@endsection