@extends('layouts.frontend')

@section('content')
<br clear="all" />
<div id="banner-detail">
    <div id="gadient">&nbsp;</div>
    <a href="/" title="Myanmar Journeys"><img src="{{ $post->categories->photo }}"/></a>
    <div id="container-txtcat">
        <div class="grid-1">
            <div id="component-bre-page">
                <h2><span class="line"></span>{{ $post->categories->name }}</h2>
                <div id="bre-page">
                    <a href="/" title="{{ get_option('site_name') }}"><span class="i-home"></span></a>
                    <span class="i-nav"></span>
                    <a href="{{ $post->categories->link }}" title="{{ $post->categories->name }}">{{ $post->categories->name }}</a>
                    <span class="i-nav"></span>
                    <a href="{{ $post->link }}" title="{{ $post->name }}">{{ $post->name }}</a>
                </div>
            </div>
            @include('partial.support')
        </div>
    </div>
</div>

<div class="grid-1 clear">
    <div id="l-dt-travelguide">
        <div id="box-txt-detail">
            <h1>{{  $post->name }}</h1>
            <div id="box-share">
                <a class="addthis_button" href="http://www.addthis.com/bookmark.php?v=250&amp;username=xa-4bc43d912955e718"><img src="{{ frontend_asset('images/icon-share.png') }}" alt="Bookmark and Share"></a>
                <script type="text/javascript" src="{{ frontend_asset('js/addthis_widget.js') }}"></script>
            </div>
            <p><img style="float: right;"src="{{ $post->photo }}"/>{{  $post->description }} </p>
            <p>{!!    $post->detail !!}</p>
        </div>

        <div id="box-helpful-guide">
            <?php
            $ip = getClientIp();
            ?>
            <ul>
                <li><a href="javascript:;" class="bt-helpful" onclick="helpful('{{ $post->id }}')>','yes','message','{{ session('helpful') }}')">Yes</a><font id="message">Yes This article is useful to me</font></li>
                <li><a href="javascript:;" class="bt-helpful" onclick="helpful('{{ $post->id }}')>','no','message_no','{{ session('helpful') }}')">No</a><font id="message_no">This article is not useful</font></li>
                <font id="message_c"></font>
            </ul>
        </div>

        <div id="box-other-guide">
            <h2>Maybe you will like it too ...</h2>
            @foreach(get_list_posts(5,$post->categories->id) as $item)
            <div id="b-also-guide">
                <a href="{{ $item->link }}" title=""><img src="{{ $item->photo }}" class="lazyload" alt=""/></a>
                <h3><a href="{{ $item->link }}" title="">{{ $item->name }}</a></h3>
                <p>{{ $item->description }}</p>
            </div>
            @endforeach
        </div>


    </div>

    @include('partial.left-travelguide')

</div>
@endsection
