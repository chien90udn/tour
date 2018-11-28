@extends('layouts.backend')

@section('title', 'Add New Tour')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <form action="{{ route('admin.tours.tours.store') }}" method="POST">
                @include('admin.tours.tours.form')
            </form>
        </div>
    </div>
@endsection