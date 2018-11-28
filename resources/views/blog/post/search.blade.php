@extends('layouts.frontend')

@section('content')
    <div class="container">
        <ul class="breadcrumbs">
            <li><a class="smooth" href="/" title="">Trang chủ</a></li>
            <li>{{ $title }}</li>
        </ul>
        <div class="row">
            <div class="col-md-12">
                <div class="single">
                    @foreach($posts as $post)
                        <div class="col-md-3 wow fadeInUp">
                            <div class="post b-post">
                                <a class="img" href="{{ route('post.show',$post->slug) }}" title="">
                                    <img src="{{ timthumb($post->thumbnail,555,310) }}" alt="" title="" />
                                </a>
                                <h3 class="title"><a class="smooth" href="{{ route('post.show',$post->slug) }}" title="">{{ $post->name }}</a></h3>
                                <div class="time"><i class="fa fa-calendar"></i> {{ $post->published_at->format('d/m/Y') }}</div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="col-md-12 text-center">
                {{ $posts->links() }}
            </div>
        </div>
    </div>
@endsection
