@extends('layouts.backend')

@section('title', 'Sửa bài viết')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <form action="{{ route('admin.post.update', $post->id) }}" method="POST">
                {{method_field('PUT') }}
                @include('admin.post.form')
            </form>
        </div>
    </div>
@endsection