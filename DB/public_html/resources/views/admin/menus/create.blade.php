@extends('layouts.backend')

@section('title', 'Add New Menu')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <form action="{{ route('admin.themes.menus.store') }}" method="POST">
                @include('admin.menus.form')
            </form>
        </div>
    </div>
@endsection