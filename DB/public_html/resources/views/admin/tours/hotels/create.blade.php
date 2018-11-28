@extends('layouts.backend')

@section('title', 'Add Hotels')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <form action="{{ route('admin.tours.hotels.store') }}" method="POST">
                @include('admin.tours.hotels.form')
            </form>
        </div>
    </div>
@endsection