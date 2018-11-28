@extends('layouts.backend')

@section('title', 'Add New Cruises Category')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <form action="{{ route('admin.tours.cruisescategory.store') }}" method="POST">
                @include('admin.tours.cruisescategory.form')
            </form>
        </div>
    </div>
@endsection