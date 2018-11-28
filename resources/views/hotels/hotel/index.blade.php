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

        @if($hotel->photo_e)
        <section class="detail-slider">
            <div class="mix-grid">
                <div class="mix mix-slide" style="display: inline-block;">
                    <div class="thumbnail">
                        @php $images = explode('|',$hotel->photo_e); @endphp
                        @for ($i = 0; $i < 3; $i++)
                        @if(@$images[$i])
                        <a href="{{ @$images[$i] }}" class="image_show{{$i+1}}" data-lightbox="image-tourdetail" data-title="{{ $hotel->name }}">
                            <img class="image-slide" src="{{ @$images[$i] }}" alt="{{ $hotel->name }}">
                        </a>
                        @endif
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
                    </div>
                </div>
            </div>
        </section>
        @endif

        <p>{!! $hotel->detail !!}</p>
    </div>
</div>

<div class="grid-1 clear">
    <div class="check-rates-form">
        <form name="form_booking" action="#" method="post">
            <div class="form-search clearfix">
                <div class="form-field field-date check_in">
                    <input id="check_in" type="text" name="check_in" class="date" placeholder="Check in"/>
                    <span id="check_in_error"></span>
                    
                </div>
    
                <div class="form-field field-date check_out">
                    <input id="check_out" type="text" name="check_out" class="date" placeholder="Check out"/>
                    <span id="check_out_error"></span> 
                </div>
    
                <div class="form-field field-select div_sel_cabin">
                    <div class="select" style="width:100%;">
                        <input type="text" id="ip-room" name="nocabin_t" value="1 Room(s), 2 Adult(s), 0 Children">
                    </div>
                    <!-- check no cabin -->
                    <div class="cd-sub cd-sub-room" style="display: none;">
                        <span class="fa fa-times cd-sub-close c6 z_18"></span>
                        <div class="row">
                            <div class="col-sm-3 form-group">
                                <label class="control-label">No. Rooms</label>
                                <select class="form-control form-control-angle-down" name="nocabin" id="rooms" onchange="room();textroom();">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select>
                            </div>
                        </div>
                        <span id="listRoom">
                            <div class="room-chose">
                                <p class="text-bold z_16 room-tit">Room 1</p>
                                <div class="">
                                    <div class="col-ms-3 form-group">
                                        <label class="control-label-sm">Type</label>
                                        <select class="form-control form-control-angle-down type-cruise" name="typecab1" id="typecab1">
                                            <option value="0" selected="selected">Double</option>
                                            <option value="1">Twin</option>
                                            <option value="2">Single</option>
                                        </select>
                                    </div>
    
                                    <div class="col-ms-3 form-group">
                                        <label class="control-label-sm">Adult (&gt; 10)</label>
    
                                        <select class="form-control form-control-angle-down" onchange="textroom();" name="adult1" rel="adult" id="adult1">
                                            <option value="0">0</option>
                                            <option value="1">1</option>
                                            <option value="2" selected="selected">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                        </select>
                                    </div>
    
                                    <div class="col-ms-3 form-group">
                                        <label class="control-label-sm">Child (4 - 10)</label>
    
                                        <select class="form-control form-control-angle-down" onchange="textroom();" name="child1" rel="child" id="child1">
                                            <option value="0">0</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                        </select>
                                    </div>
    
                                    <div class="col-ms-3 form-group">
                                        <label class="control-label-sm">Infant (0 - 3)</label>
    
                                        <select class="form-control form-control-angle-down" name="infant1" rel="infant" id="infant1">
                                            <option value="0">0</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                        </select>
                                    </div>
    
                                </div>
                            </div>
                            <input type="hidden" id="count" value="1">
                        </span>
                    </div>
                    <input type="hidden" id="duration_detail" value="1">
                    <!-- end no cabin -->                                    
                </div>
                <div class="form-submit">
                    <a href="#myModal" class="awe-btn awe-btn-2 arrow-right arrow-white awe-btn-medium booking-window">Check Room Rates</a>
                </div>
                <div id="myModal" class="login-popup">
                    <div id="popup-header-contact">
                        <h3>We are always here to help you</h3>
                        <p>Don't hesitate to send us your requests. We will send you the best offers quickly!</p>
                    </div>
                    <a href="javascript:;" class="close"><img src="/assets/frontend/images/cancel.png" class="btn_close" title="Close Window" alt="Close" width="35" height="35" /></a>
                    <div class="signin">
                        <textarea class="sms question" name="question" id="question" onblur="onblur_obj('question','Type your request here...');" onclick="onclick_obj('question','Type your request here...');">Type your request here...</textarea>
                        <div class="contact_sub contact_detail">
                            <div class="contact_sub">
                                <select class="short" name="subname" id="subname">
                                    <option value="Mr.">Mr.</option>
                                    <option value="Mrs.">Mrs.</option>
                                    <option value="Ms.">Ms.</option>
                                    <option value="Miss.">Miss.</option>
                                    <option value="Dr.">Dr.</option>
                                </select>
                            </div>
                        </div>
                        <input type="text" name="name" class="question short full-name" id="name" value="Name" onblur="onblur_obj('name','Name');" onclick="onclick_obj('name','Name');"   />
                        <input type="text" name="mail" class="question long e-mail"  id="mail" value="Email" onblur="onblur_obj('mail','Email');" onclick="onclick_obj('mail','Email');" />
                        <div id="detail_phone">
                            <input style="padding-left: 48px;" type="tel" class="long phone_number" id="phone_contact" name="phone" value="Phone"/>
                            <div class="contact_sub contact_us">
                                {!! Form::select('country', $list_country, NULL, ['class' => 'long', 'id' => 'country_pop']) !!}
                            </div>
                        </div>
                        <font id="message_popup" style="margin-top: 10px;float: left;">&nbsp;</font>
                        <div class="row">
                            <div class="top_booking no-margin submit-booking">
                                <div class="col-md-12">
                                    <a href="javascript:;" class="button"  onclick="quickcontq_popup(); return false;"><i class="fa fa-envelope-o"></i> Send »</a>
                                </div>
                            </div>
                        </div>
                    <input type="hidden" value="{{ getClientIp() }}" id="ip_client" name="ip_client">
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

<div id="component-detail">
    <div class="grid-1">
        <div id="tab-info-detail">
            <ul>
                <li id="hotel_1" class="hol_room removeactive active"><a href="javascript:;" onclick="add_active('hotel_1','hotel-rooms');" title="Hotel Rooms"><span class="i-accommodation"></span>Hotel Rooms</a></li>
                <li id="hotel_2" class="hol_room removeactive"><a href="javascript:;" onclick="add_active('hotel_2','fac-hotel');" title="Hotel Facilities"><span class="i-facilities"></span>Hotel Facilities</a></li>
                <li id="hotel_3" class="hol_room removeactive"><a href="javascript:;" onclick="add_active('hotel_3','hotel-policies');" title="Hotel Policies"><span class="i-policies"></span>Hotel Policies</a></li>
                <li id="hotel_5" class="hol_room removeactive right"><a href="javascript:;" onclick="add_active('hotel_5','holiday-tours');" title="Holiday Tours"><span class="i-tour"></span>Tours with this Hotel</a></li>
            </ul>
        </div>
        <div id="cabin-info" class="fac-hotel tab-detail-tour content-tab" style="display: none;">
            <div id="fac-pol-hotel">
                <ul>
                <?php
                $arr_facili = explode("#",$hotel->facilities);
                for($i=0;$i<count($arr_facili);$i++)
                {
                $arr_fi = explode(",",$arr_facili[$i]);
                if($i==0){
                    echo "<b id='text_faci'>General:</b>";
                }elseif($i==1){
                    echo "<b id='text_faci'>Sports and Recreation:</b>";
                }elseif($i==2){
                    echo "<b id='text_faci'>Car Park:</b>";
                }
                for($j=0;$j<count($arr_fi);$j++){
                $re=array("24","."," ","-");
                ?>
                <!--<li><span id="<?=str_replace($re,"",$arr_fi[$j])?>"></span> <?=$arr_fi[$j]?></li>-->
                    <li><span class="nav"></span><?=$arr_fi[$j]?></li>
                    <?php }}
                    echo "<b id='text_faci'>Room Facilities:</b>";
                    $faci_room = explode("#",$hotel->price_e);
                    $faci = explode("|",@$faci_room[1]);
                    $faci = explode(',',@$faci[4]);
                    $faci = str_replace("}","",@$faci);
                    for($j=0;$j<count($faci);$j++){ ?>
                    <li><span class="nav"></span> <?=$faci[$j]?>
                    <?php }?>
                </ul>
            </div>
        </div>
        @php
            $arr_hotel = explode("#",$hotel->price_e);
        @endphp
        <div id="cabin-info" class="hotel-rooms tab-detail-tour content-tab" >
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
                        @php $listRoomImg = explode(',',@$room_info[8]); @endphp
                        <a href="javascript:;" data-toggle="modal" data-target="#exampleModal{{$i}}"><img src="{{ @$listRoomImg ? $listRoomImg[0] : $hotel->photo }}" alt=""/></a>
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
                                        <a href="javascript:;" onclick="showfice(<?=$i?>);">View more Room Facilities <font id="text_<?=$i?>">+</font></a>
                                        <ul class="fice" id="fice_<?=$i?>" style="display: none;">
                                            @for($z=0;$z<count($arr_faciliti);$z++)
                                                <li><span class="nav">•</span> <?=$arr_faciliti[$z]?></li>
                                            @endfor
                                        </ul>
                                    </div>
                                @endif
                            @endif
                        </div>
                    </div>

                    <div class="modal fade hotel-modal-lg" id="exampleModal{{$i}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="display:none;">
                        <div class="modal-dialog modal-booking" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                    <h4 class="modal-title" id="myModalLabel"><i class="fa fa-info-circle"></i>{{ $hotel->name }}</h4>
                                    
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mix-grid">
                                                <div class="mix mix-slide" style="display: inline-block;">
                                                    <div class="thumbnail">
                                                        <a href="{{ $listRoomImg[0] }}" class="mix-zoom" data-lightbox="image-listRoomImg{{$i}}" data-title="{{ $hotel->name }}">
                                                            <img class="image-slide" src="{{ $listRoomImg[0] }}" alt="{{ $hotel->name }}">
                                                        </a>
                                                        @foreach($listRoomImg as $thumbnailItem)
                                                        <a href="{{ $thumbnailItem }}" class="thumb-small mix-zoom" data-lightbox="image-listRoomImg{{$i}}" data-title="{{ $hotel->name }}">
                                                            <img class="image-slide" src="{{ $thumbnailItem }}" alt="{{ $hotel->name }}">
                                                        </a>
                                                        @endforeach
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="modal_popup">
                                                <h5>
                                                    <p>{{ $room_info[0] }}</p>
                                                    <p class="connecting-r"></p>
                                                </h5>
                                                <div class="m-content">
                                                    {!! @$arr_detail_r[3] !!}
                                                </div>
                                                <h5><p>Amenities</p></h5>
                                                <div id="facilities">
                                                    <ul class="fice">
                                                        @for($z=0;$z<count($arr_faciliti);$z++)
                                                            <li><span class="nav">•</span> <?=$arr_faciliti[$z]?></li>
                                                        @endfor
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
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
                    <p><?=$arr_po[0]?></p>
                </div>
                <div id="li-txt">
                    <h4><font>•</font>Check out:</h4>
                    <p><?=$arr_po[1]?></p>
                </div>
                <div id="li-txt">
                    <h4><font>•</font>Cancellation / Prepayment </h4>
                    <p><?=$arr_po[2]?></p>
                </div>
                <div id="li-txt">
                    <h4><font>•</font>Children and extra beds </h4>
                    <p><?=$arr_po[3]?></p>
                </div>
                <?php if(!empty($arr_po[4])){ ?>
                <div id="li-txt">
                    <h4><font>•</font>Other notice </h4>
                    <p><?=$arr_po[4]?></p>
                </div>
                <?php }?>
            </div>
        </div>
        <div id="cabin-info" class="holiday-tours tab-detail-tour content-tab" style="display: none;">
            @foreach(get_tours_by_destinations($hotel->location,5) as $tour)
                <div id="best-tour2">
                    <div id="img-tour">
                        <div id="img-tour">
                            <a href="{{ route('tours.show',$tour->name_link) }}" title="{{ $tour->name }}">
                                <img src="{{ $tour->photo }}" class="lazyload" alt="{{ $tour->name }}" original="{{ $tour->photo }}">
                            </a>

                            <!-- add new image -->
                            <!-- end new image -->

                            <div id="viewmap">
                                <a rel="nofollow" href="{{ route('tours.show',$tour->name_link) }}" title="View Route Map"><i class="fa fa-map-marker"></i> View Route Map</a><!--class="view_map_detail"-->
                                <a class="photo-see" href="{{ route('tours.show',$tour->name_link) }}" title="See all photos">See all photos </a>
                            </div>
                            <a class="heart-tour tooltip tooltipstered" rel="nofollow" id="love_tour1" onclick="love_tour(1)" href="javascript:;"><i class="fa fa-heart-o"></i></a>					</div>
                    </div>
                    <div id="right-tour">
                        <div id="top-t">
                            <div id="left-nametour">
                                <div id="day"><font>{{ $tour->duration }}</font>  days </div>
                                <div id="title-info">
                                    <h2>
                                        <a href="{{ route('tours.show',$tour->name_link) }}" title="{{ $tour->name }}">{{ $tour->name }}</a>
                                    </h2>
                                    <div id="des-tour">
                                        <i class="fa fa-map-marker"></i>
                                        {!! get_route($tour->route) !!}
                                    </div>
                                </div>
                                <div id="title-footer">
                                    <span class="number-label">{{ $loop->iteration }}</span>
                                </div>
                            </div>
                        </div>
                        <div id="txt-highlights">
                            <ul>
                                <?php

                                $newcontent = preg_replace("/<p[^>]*?>/", "", $tour->highlight);
                                $newcontent = str_replace("</p>", "<br />", $newcontent);

                                $high = explode('<br />',$newcontent);

                                for($i=0;$i<count($high);$i++){

                                if(strlen($high[$i]) > 5){

                                ?>

                                <li><font>•</font> <?=$high[$i]?></li>

                                <?php }}?>
                            </ul>
                        </div>
                        <div id="bot-tour">
                            <font class="experiences">Experiences :</font>

                            <div id="right-styletour">

                                <?=get_styletour($tour->experience)?>

                            </div>

                            <?php if($tour->price>0){ ?>

                            <div id="price-tour">Only From <?=get_price($tour->price,$tour->discount)?></div>

                            <?php }?>

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