@extends('layouts.backend')

@section('title', 'Add New Google Travel Map')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <form action="{{ route('admin.tours.destinations.store') }}" method="POST">
                @include('admin.tours.destinations.form')
            </form>
        </div>
    </div>
@endsection