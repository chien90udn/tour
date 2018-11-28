@extends('layouts.backend')

@section('title', 'Thêm danh mục mới')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <form action="{{ route('admin.post.category.store') }}" method="POST" class="form">
                @include('admin.postcategory.form')
            </form>
        </div>
    </div>
@endsection