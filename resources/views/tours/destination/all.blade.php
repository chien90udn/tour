@extends('layouts.frontend')

@section('content')
@include('partial.search_home')

<div class="main-des"><div id="icon"><span class="{{ $title }}"></span></div></div>
<div class="grid-1 clear">
    <div id="title-line" style="margin-top: 0px" class="title-line-ht">
        <h2>{{ $title }} Destinations<span class="line"></span></h2>
    </div>
    @foreach($locations as $key => $item)
        @if($key%4==0)
        <div class="row-dest">
        @endif
            <div id="des-ct">
                <a href="{{ route('location.show',str_replace(" ","-",$item->name)) }}" title="{{ $item->name }}"><img src="{{ $item->photo }}" class="lazyload" alt="{{ $item->name }}"/></a>
                <div id="txt-d">
                    <h2><a href="{{ route('location.show',str_replace(" ","-",$item->name)) }}" title="{{ $item->name }}">{{ $item->name }}</a></h2>
                    {{ str_limit($item->desc,150) }}
                </div>
            </div>
        @if($key % 4 == 3 || $key == count($locations) - 1)
        </div>
        @endif
    @endforeach
</div>
@stop