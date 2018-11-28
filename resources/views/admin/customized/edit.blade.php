@extends('layouts.backend')

@section('title', 'View Customized')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <form action="{{ route('admin.customized.update', $customized->id) }}" method="POST">
                {{method_field('PUT') }}
                @include('admin.customized.form')
            </form>
        </div>
    </div>
@endsection