@foreach($hotels as $hotel)
<div id="best-hotel">
                <div id="img-hotel">
                    <a href="{{ route('hotel.show',$hotel->name_link) }}" title="{{ $hotel->name }}"><img src="<?=$hotel->photo?>" class="lazyload"/></a>
                    <div id="viewmap"><a href="{{ route('hotel.show',$hotel->name_link) }}" title="{{ $hotel->name }}"><span class="i-map"></span>View Map Hotel</a></div>
                </div>
                <div id="right-hotel">
                    <div id="top-t">
                        <div id="left-namehotel">
                            <h2><a href="{{ route('hotel.show',$hotel->name_link) }}" title="{{ $hotel->name }}">{{ $hotel->name }}</a><?=get_star($hotel->grade)?></span></h2>
                            <div id="des-hotel"><span class="icon-des"></span><?=$hotel->address?></div>
                        </div>
                        <div id="r-hotel">
                            <ul>
                                <li><span class="wifi"></span><br />Free Wifi</li>
                                <li><span class="breakfast"></span><br />Breakfast Inc</li>
                            </ul>
                        </div>
                    </div>
                    <div id="txt-highlights">
                        <p><?=str_limit($hotel->detail,500)?></p>
                    </div>
                    <div id="bot-hotel">
                        <a href="{{ route('hotel.show',$hotel->name_link) }}" title="{{ $hotel->name }}" class="bt-detail">More Info <span class="nav"></span></a>
                        <?php if($hotel->price > 0){ ?>
                        <div id="price-hotel">From <?=get_price($hotel->price , $hotel->discount)?> p/n</div>
                        <?php } else{?>
                        <div id="price-hotel">From <font>$</font> <strong></strong> p/n</div>
                        <?php }?>

                    </div>
                </div>
        </div>
@endforeach
<div id="show{{ $page+1 }}">
    <div id="view-all-tour">
        
        <div id="show-tour">
            <a href="javascript:void(0);" onclick="show_more_hotels('{{ $category->name_link }}',{{ $page }})" class="bt-moretour">...View More...</a>
        </div>

    </div>
</div>