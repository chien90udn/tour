@extends('layouts.frontend')

@section('content')
<div id="title-top-tour">
    <div class="grid-1">
        <div id="left-nametour">
            <h1><font>{{ $hotel->name }}</font> {!! get_star($hotel->grade) !!}</h1>
            <div id="des-hotel">
                <span class="icon-des"></span>{{ $hotel->address }}
            </div>
        </div>
    </div>
</div>

<div class="grid-1 clear">
    <div id="info-dt-tour" class="hotel-detail">
    <section class="detail-slider">
        <div class="mix-grid" id="MixItUpD4C1B0">

            <div class="mix mix-slide" style="display: inline-block;">
                <div class="thumbnail">
                    @php $images = explode('|',$hotel->photo_e); @endphp
                    @for ($i = 0; $i < 3; $i++)
                    <a href="{{ @$images[$i] }}" class="image_show{{$i+1}}" data-lightbox="image-tourdetail" data-title="{{ $hotel->name }}">
                        <img class="image-slide" src="{{ @$images[$i] }}" alt="{{ $hotel->name }}">
                    </a>
                    @endfor
                    <div class="small-photo" style="display: none;">
                        <div id="img_testi_0" class="img_testi">
                            <ul>
                                @foreach($images as $item)
                                <li>
                                    <a href="{{ $item }}" data-lightbox="image-tourdetail" data-title="{{ $hotel->name }}" class="mix-zoom"></a>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <span class="total_photo">See all {{ count($images) }} photos</span>
                    <a class="heart-tour" rel="nofollow" id="love_tour602" onclick="love_tour(602)" href="javascript:;" data-toggle="tooltip" data-original-title="Like" title=""><i class="fa fa-heart-o"></i></a>                                                                <a id="btn" class="videolink" href="javascript:;" data-toggle="modal" data-target="#videolink"><i class="fa fa-video-camera"></i>&nbsp;Click to watch the video</a>
                    <div class="sale">-15%</div>
                </div>
            </div>

        </div>

    </section>
        <p>{{ $hotel->detail }}</p>
    </div>
</div>

<div id="component-detail">
    <div class="grid-1">
        <div id="tab-info-detail">
            <ul>
                <li id="hotel_1" class="hol_room removeactive"><a href="javascript:;" onclick="add_active('hotel_1','hotel-rooms');" title="Hotel Rooms"><span class="i-accommodation"></span>Cruises Rooms</a></li>
                <li id="hotel_2" class="hol_room removeactive active"><a href="javascript:;" onclick="add_active('hotel_2','fac-hotel');" title="Hotel Facilities"><span class="i-facilities"></span>Features</a></li>
                <li id="hotel_3" class="hol_room removeactive"><a href="javascript:;" onclick="add_active('hotel_3','hotel-policies');" title="Hotel Policies"><span class="i-policies"></span>Policies</a></li>
                <li id="hotel_5" class="hol_room removeactive right"><a href="javascript:;" onclick="add_active('hotel_5','holiday-tours');" title="Holiday Tours"><span class="i-tour"></span>Tours with this Cruises</a></li>
            </ul>
        </div>
        <div id="cabin-info" class="fac-hotel tab-detail-tour content-tab">
            <div id="fac-pol-hotel">
            <div class="content-overview">
                @foreach(json_decode($hotel->facilities,true) as $key => $name)
                <div class="control-group">
                    <label class="control-label"><strong>{!! key($name) !!}</strong></label>
                    @foreach($name as $value)
                    <div class="row">
                        @foreach($value as $item)
                        <div class="col-md-3">
                            <label>
                            <i class="fa fa-asterisk" aria-hidden="true"></i>
                                <span>{{ $item }}</span>
                            </label>
                        </div>
                        @endforeach
                    </div>
                    @endforeach
                </div>
                @endforeach
            </div>
            </div>
        </div>
        @php
            $arr_hotel = explode("#",@$hotel->price_e);
        @endphp
        <div id="cabin-info" class="hotel-rooms tab-detail-tour content-tab" style="display: none;">
            @for($i=0;$i<count($arr_hotel);$i++)
                @php
                    $room_info = explode("|",$arr_hotel[$i]);
                    $arr_detail_r = $room_info;
                    $photo_ro = str_replace("[","",@$room_info[5]);
                    $err_link_hotel = array('Hotel2','hotels2');
                    $photo_ro = str_replace($err_link_hotel,"hotels",$photo_ro);
                @endphp
            @if(!empty($arr_detail_r[0]))
            <div id="cabin-info" class="content-tab">
                <a href="javascript:;"><img src="" alt=""/></a>
                <div id="item-cabin">
                    <h2><?=$room_info[0]?></h2>
                    <div id="tc-cabin">
                        <ul>
                            <?php if(strlen(@$arr_detail_r[1])>2){ ?>
                            <li>Area : <?=$arr_detail_r[1]?></li><br />
                            <?php }?>
                            <?php if(!empty($arr_detail_r[0])){ ?>
                            <li>Type : <?=$arr_detail_r[0]?></li>
                            <?php }?>
                        </ul>
                    </div>
                    <p><?=@$arr_detail_r[2]?></p>
                    @if(isset($arr_detail_r[4]))
                    @php
                        $arr_detail_r[4] = str_replace('}',"",$arr_detail_r[4]);
                        $arr_faciliti = explode(",",$arr_detail_r[4]);
                    @endphp
                        @if(!empty($arr_detail_r[4]))
                        <div id="facilities">
                            <a href="javascript:;" onclick="showfice(<?=$i?>);">View more Room Facilities <font id="text_<?=$i?>">-</font></a>
                            <ul class="fice" id="fice_<?=$i?>">
                                @for($z=0;$z<count($arr_faciliti);$z++)
                                <li><span class="nav">•</span> <?=$arr_faciliti[$z]?></li>
                                @endfor
                            </ul>
                        </div>
                        @endif
                    @endif
                </div>
            </div>
            @endif
            @endfor
        </div>
        <div id="cabin-info" class="hotel-policies tab-detail-tour content-tab" style="display: none;">
            @php $arr_po = explode("|",$hotel->policy); @endphp
            <div id="fac-pol-hotel">
                <div id="li-txt">
                    <h4><font>•</font>Check in:</h4>
                    <p><?=@$arr_po[0]?></p>
                </div>
                <div id="li-txt">
                    <h4><font>•</font>Check out:</h4>
                    <p><?=@$arr_po[1]?></p>
                </div>
                <div id="li-txt">
                    <h4><font>•</font>Cancellation / Prepayment </h4>
                    <p><?=@$arr_po[2]?></p>
                </div>
                <div id="li-txt">
                    <h4><font>•</font>Children and extra beds </h4>
                    <p><?=@$arr_po[3]?></p>
                </div>
                <?php if(!empty($arr_po[4])){ ?>
                <div id="li-txt">
                    <h4><font>•</font>Other notice </h4>
                    <p><?=@$arr_po[4]?></p>
                </div>
                <?php }?>
            </div>
        </div>
        <div id="cabin-info" class="holiday-tours tab-detail-tour content-tab" style="display: none;">
            @foreach($hotel->tours as $tour)
            <div id="box-package" class="box-suplier azalea-cruises-2-days-1-night" onclick="show_tab_iti_ajax('785','693','azalea-cruises','azalea-cruises-2-days-1-night',2,0);">
                <div id="title-pk" class="suplier-title suplier-title785">
                    <div id="night-pk">
                    <font>{{ $tour->duration }}</font><br> Days                        
                    </div>
                <div id="name-pk">
                    <h2><a href="javascript:;" title="{{ $tour->name }}">{{ $tour->name }}</a></h2>
                    <div id="des-tour">
                        <span class="fa fa-map-marker"></span>
                        {!! get_route($tour->route) !!}                         </div>
                    </div>
                    <a id="add_show_0" href="javascript:;"><span class="fa fa-plus"></span></a>
                    <div id="price-pk">
                        <h3>Price only from</h3>
                        {!! get_price($tour->price,$tour->discount) !!}                 
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

<div class="grid-1 clear">
    <div id="title-line" style="margin: 30px 0 15px 0;">
        <h2>Also {{ $hotel->location }} Hotels<span class="line"></span></h2>
    </div>
</div>
<div id="container-scrolltours" style="padding:25px 0;">
    <div class="grid-1 clear">

        <div id="scroll-tours">
            <div id="owl-demo2" class="owl-carousel">
                @foreach(get_hotels(6,$hotel->location) as $item)
                <div class="item">
                    <div id="box-cruise">
                        <a href="<?= route('hotel.show',$item->name_link)?>" title="<?=$item->name?>">
                            <div id="img-cruise">
                                <img src="{{ $item->photo }}" class="lazyload" alt="<?=$item->name?>"/>
                                <div id="title-cruise">
                                    <h2><?=$item->name?></h2>

                                </div>
                            </div>
                            <div id="txt-cruise">
                                <span class="i-nav"></span>
                                <?=get_star($item->grade)?>
                                <div id="des"><span class="icon-des"></span><?=$item->address?></div>
                                <div id="price-cruise">
                                    <span class="bt-detail">More Info</span>
                                </div>
                            </div>
                        </a>
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
</div>
@endsection