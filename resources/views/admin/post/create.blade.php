@extends('layouts.backend')

@section('title', 'Thêm bài viết mới')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <form action="{{ route('admin.post.store') }}" method="POST" class="form">
                @include('admin.post.form')
            </form>
        </div>
    </div>
@endsection