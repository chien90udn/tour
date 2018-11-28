@extends('layouts.frontend')

@php
$point_x 	   = $location["gx"];
$point_y       = $location["gy"];
$zoom          = 4;		
@endphp


@push('footer')

<script type="text/javascript">

	function initialize() {
	
	  if (GBrowserIsCompatible()){
		
		  var map = new GMap2(document.getElementById("tab_map"));
		  map.setCenter(new GLatLng(<?=$point_x?>,<?=$point_y?>),<?=$zoom?>);
		  map.addControl(new GSmallMapControl());
          map.disableScrollWheelZoom();
          map.addOverlay(createMarker(map,new GLatLng(<?=$point_x?>,<?=$point_y?>),"<?=$location["name"]?>","<?=route('location.show',str_replace(" ","-",$location["name"]))?>","<?=$location["photo"]?>","<?=str_limit($location["desc"],205)?>",0));
		 //map.setUIToDefault(); Show full control satelite/croll zoom...
	  }
  }
  $(document).unload(function (){
            GUnload();
  });

</script>

@endpush

@section('content')

@include('partial.search_home')



<div class="name-des">
    <h2 class="title-des">{{ $title }}</h2>
    <div class="line-des"><span></span></div>
</div>

<div id="main-infodes">
    <div class="grid-1">
        <div id="box-info-destination">
            <div id="r-detail-tour">
                <div id="img-des">
                    <p class="big-images">
                        <a href="{{ $location->photo }}" class="galpop-multiple lazyload" data-galpop-group="multiple">
                            <img src="{{ $location->photo }}" class="lazyload"/>
                            <span>&nbsp;</span>
                            <font>&nbsp;</font>
                        </a>
                    </p>
                </div>
            </div>
            <div id="quickfast">
                <h2>Quick Facts:</h2>
                <ul>
                    <?php
                    $highlight_arr = array();
                    $highlight_arr = explode("<br />",$location->fact);
                    foreach($highlight_arr as $highlight){
                    if(strlen($highlight)>5){ ?>
                    <li><font><span class="nav"></font> <?=$highlight?></li>
                    <?php }
                    }
                    ?>
                </ul>
            </div>
            <p><?=$location->desc?><br /><?=strip_tags($location->detail,'<p>,<br>,<b>,<span>')?></p>
        </div>
    </div>
</div>

<div class="grid-1 clear">
<div id="viewmap-des">
        <a href="javascript:;" class="bt-mapdes" onclick="show_map_detail_t();"><span class="i-map"></span><font id="view_dest">View map</font></a>
    </div>
    <div id="tab_map" style="width:100%;float:left;min-height: 400px;display: none;margin: 0px 0px 20px 0px;position: relative;display: none;"></div>
</div>

@if(get_tours_by_destinations($title,10)->isNotEmpty())
<div class="grid-1 clear">

    <div id="title-line">
        <h2>{{ $title }} Tours<span class="line"></span></h2>
    </div>

    <div id="scroll-tours">
        <div id="owl-demo" class="owl-carousel owl-theme">
            @foreach(get_tours_by_destinations($title,10) as $item)
            <div class="item">
                <div id="box-tour">
                    <div class="alink">
                        <div id="img-tour">
                            <a href="{{ route('tours.show',$item->name_link) }}" title="{{ $item->name }}">
                                <img src="<?= $item->photo ?>" alt="{{ $item->name }}"/><!--class="lazyload"-->
                            </a>
                            @if($item->sale>0)
                            <div class="sale">-{{ $item->sale }}%</div>
                            @endif
                            <div id="title-tour">
                                <div id="day"><font>{{ $item->duration }}</font><?php if($item->duration==1){ ?>day <?php }else{?> days <?php }?></div>
                                <h2><a href="{{ route('tours.show',$item->name_link) }}" title="{{ $item->name }}">{{ $item->name }}</a></h2>
                            </div>
                        </div>
                        <div id="txt-tour">
                            <span class="i-nav"></span>
                            <div id="price-tour">@if($item->price > 0 )Only From {!! get_price(@$item->price,@$item->discount) !!}@endif</div>
                            <p><?=str_limit($item->description,90)?></p>
                            <br clear="all" />
                            <a href="{{ route('tours.show',$item->name_link) }}" title="{{ $item->name }}">
                                <span class="bt-detail">View Detail</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="customNavigation">
            <a class="btn prev"><i class="fa fa-angle-left"></i></a>
            <a class="btn next"><i class="fa fa-angle-right"></i></a>
        </div>
    </div>
</div>
@endif

<div id="main-also-des">
    <div id="title-line">
        <h2>Other <?=$location->country?> Destinations<span class="line"></span></h2>
        <p></p>
    </div>
    <div class="grid-1 clear">
        @foreach(get_all_dest_mu($location->country,15) as $item)
        <div id="des">
            <img src="<?=$item->photo?>" class="lazyload" alt="<?=$item->name?>"/>
            <a href="{{ route('location.show',str_replace(" ","-",$item->name)) }}" title="<?=$item->name?>"><?=$item->name?></a>
        </div>
        @endforeach
        <div id="detail"><a href="{{ route('location.all',$location->country) }}" title="<?=$location->country?> Destinations">View All Destinations <font>»</font></a></div>
    </div>
</div>
@stop