@extends('layouts.backend')

@section('title', 'Add Cruises Tour')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <form action="{{ route('admin.tours.cruisestours.store') }}" method="POST">
                @include('admin.tours.cruisestours.form')
            </form>
        </div>
    </div>
@endsection