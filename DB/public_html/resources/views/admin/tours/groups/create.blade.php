@extends('layouts.backend')

@section('title', 'Add New Groups Tours')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <form action="{{ route('admin.tours.groups.store') }}" method="POST">
                @include('admin.tours.groups.form')
            </form>
        </div>
    </div>
@endsection