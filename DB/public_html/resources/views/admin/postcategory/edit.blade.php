@extends('layouts.backend')

@section('title', 'Sửa trang nội dung')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <form action="{{ route('admin.post.category.update', $postCategory->id) }}" method="POST">
                {{method_field('PUT') }}
                @include('admin.postcategory.form')
            </form>
        </div>
    </div>
@endsection