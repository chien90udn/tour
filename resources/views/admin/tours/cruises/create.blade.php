@extends('layouts.backend')

@section('title', 'Add Cruises')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <form action="{{ route('admin.tours.cruises.store') }}" method="POST">
                @include('admin.tours.cruises.form')
            </form>
        </div>
    </div>
@endsection