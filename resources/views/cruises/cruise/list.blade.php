@extends('layouts.frontend')

@section('content')
<br clear="all" />
<div id="banner-detail">
    <div id="gadient">&nbsp;</div>
    <a href="/" title="Indochina Tours"><img src="/storage/public/bg-3.jpg"/></a>
    <div id="container-txtcat">
        <div class="grid-1">
            <div id="component-bre-page">
                <h2>{{ $category->name }}<span class="line"></span></h2>
                <div id="bre-page">
                    <a href="/" title="Home"><span class="i-home"></span></a>
                    <span class="i-nav"></span>
                    <a href="/hotels/{{ $category->name_link }}" title="{{ $category->name }}">{{ $category->name }}</a>
                    <span class="i-nav"></span>
                </div>
            </div>
            @include('partial.support')
        </div>
    </div>
</div>
@include('partial.search_home')

<div class="main-group">
    <div id="icon"><span class="<?=strtolower($category->name)?>"></span></div>

    <div class="grid-1">
        <div id="title-line" style="margin-top: 10px;">
            <h1><?=strtolower($category->name)?><span class="line"></span></h1>
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
        <div class="grid-1">
            <div id="filter_h">
                <ul>
                    @foreach($category->children as $child)
                    <li><a href="{{ route('hotel.category',$child->name_link) }}" title="{{ $child->name }} Hotels"><span class="nav"></span>{{ $child->name }} Hotels</a></li>
                    @endforeach
                </ul>
            </div>
        </div>
        @endif
        @foreach($cruises as $cruise)
        <div id="best-hotel">
                <div id="img-hotel">
                    <a href="{{ route('cruise.show',$cruise->name_link) }}" title="{{ $cruise->name }}"><img src="<?=$cruise->photo?>" class="lazyload"/></a>
                    <div id="viewmap"><a href="{{ route('cruise.show',$cruise->name_link) }}" title="{{ $cruise->name }}"><span class="i-map"></span>View Map Hotel</a></div>
                </div>
                <div id="right-hotel">
                    <div id="top-t">
                        <div id="left-namehotel">
                            <h2><a href="{{ route('cruise.show',$cruise->name_link) }}" title="{{ $cruise->name }}">{{ $cruise->name }}</a><?=get_star($cruise->grade)?></span></h2>
                            <div id="des-hotel"><span class="icon-des"></span><?=$cruise->address?></div>
                        </div>
                        <div id="r-hotel">
                            <ul>
                                <li><span class="wifi"></span><br />Free Wifi</li>
                                <li><span class="breakfast"></span><br />Breakfast Inc</li>
                            </ul>
                        </div>
                    </div>
                    <div id="txt-highlights">
                        <p><?=str_limit($cruise->detail,500)?></p>
                    </div>
                    <div id="bot-hotel">
                        <a href="{{ route('cruise.show',$cruise->name_link) }}" title="{{ $cruise->name }}" class="bt-detail">More Info <span class="nav"></span></a>
                        <?php if($cruise->price > 0){ ?>
                        <div id="price-hotel">From <?=get_price($cruise->price , $cruise->discount)?> p/n</div>
                        <?php } else{?>
                        <div id="price-hotel">From <font>$</font> <strong></strong> p/n</div>
                        <?php }?>

                    </div>
                </div>
        </div>
        @endforeach
        <div class="paginate">
            {!! $cruises->links() !!}
        </div>
    </div>
</div>
@stop