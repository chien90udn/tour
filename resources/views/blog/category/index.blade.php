@extends('layouts.frontend')

@section('content')
<br clear="all" />
<div id="banner-detail">
    <div id="gadient">&nbsp;</div>
    <a href="/" title="Myanmar Journeys"><img src="{{ $category->photo }}"/></a>
    <div id="container-txtcat">
        <div class="grid-1">
            <div id="component-bre-page">
                <h2><span class="line"></span>{{ $category->name }}</h2>
                <div id="bre-page">
                    <a href="/" title="{{ get_option('site_name') }}"><span class="i-home"></span></a>
                    <span class="i-nav"></span>
                    <a href="{{ $category->link }}" title="{{ $category->name }}">{{ $category->name }}</a>
                </div>
            </div>
            @include('partial.support')
        </div>
    </div>
</div>

<div class="grid-1 clear">
    <div id="l-dt-travelguide">
        <div id="box-txt">
            <h1>{{ $category->name }}</h1>
            <p>{{ $category->description }}</p>
        </div>
        @foreach($posts as $post)
        <div id="list-travelguide">
            <a href="{{ $post->link }}" title="{{ $post->name }}"><img src="{{ $post->photo }}" class="lazyload" title="{{ $post->name }}"/></a>
            <div id="txt-guide">
                <h2><a href="{{ $post->link }}" title="{{ $post->name }}">{{ $post->name }}</a></h2>
                <div id="box-share">
                    <a class="addthis_button" href="http://www.addthis.com/bookmark.php?v=250&amp;username=xa-4bc43d912955e718"><img src="{{ frontend_asset('images/icon-share.png') }}" alt="Bookmark and Share"></a>
                    <script type="text/javascript" src="{{ frontend_asset('js/addthis_widget.js') }}"></script>
                </div>
                <p>{{ $post->description }}</p>
                <a href="{{ $post->link }}" class="bt-detail">More info</a>
            </div>
        </div>
        @endforeach
    </div>
    @include('partial.left-travelguide')
</div>
@endsection
