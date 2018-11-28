@extends('layouts.layout')

@section('content')
{{-- <br clear="all" />
<div id="banner-detail">
    <div id="gadient">&nbsp;</div>
    <a href="/" title="Indochina Tours"><img src="/assets/frontend/images/vietnam0.jpg"/></a>
    <div id="container-txtcat">
        <div class="grid-1">
            <div id="component-bre-page">
                <h2>{{ $category->name }}<span class="line"></span></h2>
                <div id="bre-page">
                    <a href="/" title="Home"><span class="i-home"></span></a>
                    <span class="i-nav"></span>
                    <a href="/hotels/{{ $category->name_link }}" title="{{ $category->name }} Hotels">{{ $category->name }}</a>
                    <span class="i-nav"></span>
                </div>
            </div>
            @include('partial.support')
        </div>
    </div>
</div> --}}
<div id="banner-cat">
    <a href="#" title=""><img src="/assets/frontend/images/vietnam0.jpg"></a>
    <div id="container-txtcat">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <div id="component-bre-page">
                        <h2>{{ $category->name }}</h2>
                        <div class="breadcrumbs">
                            <ul>
                                <li>
                                    <a href="/" title="">
                                        <span class="i-home"></span>
                                    </a>
                                </li>
                                <li>
                                    <span>{{ $category->name }}</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 hidden-sm hidden-md">
                    @include('partial.support')
                </div>
            </div>
        </div>
    </div>
</div>
@include('partial.search_home')

<div class="page-main-wrapper">
    <div id="title-line">
        <h1>{{ $category->name }}</h1>
        <div class="container">
            <?php
                if(request()->segment(2)=="vietnam"){
                    echo '<p>Giving you unforgettable holidays in Vietnam with local experience based on selection of best Vietnam Hotels, Hotels in Vietnam, Hotels Vietnam, and Vietnam Resorts. Take a look at details of Vietnam Hotel map, room type with photos of hotel amenities and services. Check in to get our Best Rates, Best Offers and Best Services now...</p>';
                }elseif(request()->segment(2)=="cambodia"){
                    echo "<p>Cambodia - the mysterious land with glamorous temples and towers will hold your footstep. We Cambodia is honored to introduce you a plenty of high quality accommodation: resorts, hotels, lodges, etc. Especially, all hotels we recommend below are selected based on previous traveler's feedback; therefore, you can be assured about the quality.</p>";
                }elseif(request()->segment(2)=="laos"){
                    echo '<p>We are Lao offers you a wide selection of best accommodation and facilities for your stay in Laos. From luxury hotels, stylish boutique resorts to famiy-run guesthouses, this Laos hotel listing will help you find just the right place to spend the night and set the stage for a truly merorable holiday, all at the lowest prices.</p>';
                }else{
                    echo '<p>'.$category->detail.'</p>';
                }
            ?>
        </div>
        @if(count($category->children) > 0)
        <div class="container">
            <div id="filter_h">
                <ul>
                    @foreach($category->children as $child)
                    <li><a href="{{ route('hotel.category',$child->name_link) }}" title="{{ $child->name }}"><span class="nav"></span>{{ $child->name }}</a></li>
                    @endforeach
                </ul>
            </div>
        </div>
        @endif
    </div>
    <div class="container">
        <div class="tour-list">
         @foreach($hotels as $hotel)
         <div class="list-item">
            <div class="row">
                <div class="col-md-5">
                    <div class="img-tour">
                        <a href="{{ route('hotel.show',$hotel->name_link) }}" title="{{ $hotel->name }}">
                            <img src="{{ $hotel->photo }}" alt="">
                        </a>
                        <div id="viewmap">
                            <a href="{{ route('hotel.show',$hotel->name_link) }}" title="View Route Map"><i class="fa fa-map-marker"></i> View Route Map</a>
                            <a class="photo-see" href="{{ route('hotel.show',$hotel->name_link) }}" title="See all photos">See all photos </a>
                        </div>
                    </div>  
                </div>
                <div class="col-md-7">
                    <div id="top-t">
                        <div id="left-nametour">
                            <div id="title-info">
                                <h2>
                                    <a href="{{ route('hotel.show',$hotel->name_link) }}" title="{{ $hotel->name }}">{{ $hotel->name }}</a> {!! get_star($hotel->grade) !!}
                                </h2>
                                <div id="des-tour">
                                    <i class="fas fa-map-marker-alt"></i>
                                    {!! $hotel->address !!}
                                </div>
                            </div>
                        </div>
                        <div id="txt-highlights">
                            {{ strip_tags(str_limit($hotel->detail,500)) }}
                        </div>
                        <div id="bot-tour">
                            @if($hotel->price > 0)
                            <div class="price-tour">From {!! get_price($hotel->price , $hotel->discount) !!}</div>
                            @else
                            <div class="price-tour">Only From <font>Contact Us</font></div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
         @endforeach
         {!! $hotels->links() !!}
        </div>
    </div>
</div>

@stop