@extends('layouts.backend')

@section('title', 'Add New Pages')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <form action="{{ route('admin.pages.store') }}" method="POST">
                @include('admin.pages.form')
            </form>
        </div>
    </div>
@endsection