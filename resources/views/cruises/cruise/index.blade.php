@extends('layouts.layout')

@section('content')

<div class="page-main-wrapper">
    <div class="title-top-tour">
        <div class="container">
            <div class="detail-t">
                <div class="row">
                    <div class="col-sm-7">
                        <h1>{{ $hotel->name }}</h1>
                        <address>
                            <span class="star pull-left">
                                {!! get_star($hotel->grade) !!}
                            </span>
                            <div class="cruise-star start-address pull-left">
                                <div id="show_review_detail">
                                    <span class="star-review"><i class="fa fa-thumbs-up"></i></span>
                                    <span class="status">&nbsp;Very good</span>
                                    <span class="noreview"><a href="#"> &nbsp;- 60 Reviews</a></span>
                                </div>
                                <div class="tripavisor">
                                    <a href="#" class="logo-trip" title="">
                                        <span class="img"></span>
                                    </a>
                                    <a href="#" class="attraction-review">
                                        <span>
                                            <img src="/assets/frontend/themes/images/icontripadvisor2.svg" alt="">
                                            <img src="/assets/frontend/themes/images/icontripadvisor2.svg" alt="">
                                            <img src="/assets/frontend/themes/images/icontripadvisor2.svg" alt="">
                                            <img src="/assets/frontend/themes/images/icontripadvisor2.svg" alt="">
                                            <img src="/assets/frontend/themes/images/icontripadvisor3.svg" alt="">
                                        </span>
                                        <span>221 Reviews</span>
                                    </a>
                                </div>
                            </div>
                        </address>
                    </div>
                    <div class="col-sm-5 text-right float-right main-info-right">
                        <div class="best-price-img">
                            <a href="#" title="">
                                <img src="/assets/frontend/themes/images/best-price.svg" alt="">
                            </a>
                        </div>
                        <div class="price-book">
                            <div class="price-tag price-tours-package">
                                <font>Only From</font>
                                <div id="price">
                                {!! get_price_hotel($hotel->price,$hotel->discount) !!}
                                </div>
                            </div>
                        </div>
                        <div class="special-offers-pack special_off_gr">
                            <a href="#" class="offer">
                                Special Offers +
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="detail-t box-price supplier-detail">
                <div class="row">
                    <div class="col-md-8">
                        <div class="cruise-star start-address">
                            <span>
                                <i class="fa fa-bookmark"></i> Style: {!! @$hotel->type_hotel !!}
                            </span>
                            <span>
                                <i class="far fa-clock"></i> Launched: {{ @$hotel->date_set ?: '2018' }}
                            </span>
                            <span>
                                <i class="fa fa-bed"></i> {{ intval($hotel->number_hotel) > 0 ? $hotel->number_hotel : 1 }} Cabin(s)
                            </span>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="need-help">
                            <div class="pull-left">
                                Need Help? <font>Contact us</font>
                            </div>
                            @foreach(get_option('member-slider-support') as $item)
                            <a class="user_id pull-left" href=/contact-us.html" title="">
                                <img src="{{ @$item['url'] }}">
                            </a>
                            @endforeach
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
    <div class="container">
        <div class="info-dt-tour">
            <section class="detail-slider">
                @php $images = explode('|',$hotel->photo_e); @endphp
                <div class="row">
                    @foreach($images as $item)
                    @if($loop->first)
                    <div class="col-lg-8 item image_show{{$loop->iteration}}">
                            <div class="img">
                                <a class="fancybox hv-scale" rel="gallery" data-fancybox="images" data-thumbnail="{{ $item }}" data-type="image" href="{{ $item }}" title="" tabindex="0">
                                    <img src="{{ $item }}" alt="">
                                </a>
                                <p class="all-meal">All Meals Included</p>
                                <div class="sale">-31%</div>
                                <a class="videolink" href="#" "><i class="fas fa-video"></i>&nbsp;Click to watch the video</a>
                            </div>
                    </div>
                    @elseif($loop->iteration == 2 || $loop->iteration == 3)
                    <div class="col-lg-4 item image_show{{$loop->iteration}}">
                        <div class="img">
                            <a class="fancybox hv-scale" rel="gallery" data-fancybox="images" data-thumbnail="{{ $item }}" data-type="image" href="{{ $item }}" title="" tabindex="0">
                                <img src="{{ $item }}" alt="">
                                @if($loop->iteration == 3)
                                <span class="total_photo">See all {{ count($images) }} photos</span>
                                @endif
                            </a>
                            <a class="like_pac" id="like_pac_693" href="#" title=""><i class="far fa-heart"></i></a>
                        </div>
                    </div>
                    @endif
                    @endforeach
                    <div class="small-photo" style="display: none;">
                        <div id="img_testi_0" class="img_testi">
                            <ul>
                                @foreach($images as $item)
                                <li>
                                    <a class="fancybox" rel="gallery" data-fancybox="images" data-thumbnail="{{ $item }}" data-type="image" href="{{ $item }}" title="" tabindex="0"></a>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
            <section class="intro-supplier">
                <div class="row review-item">
                    <div class="col-lg-9 col-sm-7 hl-customer-like">
                        <h2><i class="fas fa-heart"></i>What travelers love about this cruise</h2>
                        <div class="customer-like">
                            {!! str_replace('<p>','<p><i class="far fa-heart" aria-hidden="true"></i> ',$hotel->detail) !!}
                            <div class="show-more-rv">
                                <span id="show_r" style="display: inline;"><a href="javascript:;" >Show more<i class="fa fa-caret-down"></i></a></span>
                                <span id="hide_r" style="display: none;"><a href="javascript:;" >Show less<i class="fa fa-caret-up"></i></a></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-5 review-number review-supplier">
                        <ins><img src="/assets/frontend/themes/images/cus.jpg" alt="Azalea Cruise"></ins>
                        <div id="show_review_detail">
                            <span class="status">&nbsp;Excellent</span>
                            <span class="star-review">
                                <i class="fa fa-thumbs-up"></i>&nbsp;        
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </span>
                        </div>
                        <blockquote class="quote-sidebar review-number">
                            <p>
                                <font id="info-review">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Azalea Cruise is one of the newest modern luxury 5* cruise on Halong bay, Azalea Cruise is expected to be launched in November, 2017. Azalea Cruise is a steel ship with 21 luxurious suite cabins at the minimum size of 28sqm accommodating at most 4 guests (2 adults and 2 chidlren). All Azalea Cruise’s cabins live up to the standards of a 5 star cruise in terms of facilities and amenities...</font><br>
                                <span class="title-review"><strong>{{ $hotel->name }}</strong> - Vietnam</span>
                                <span id="show_more_r"><a href="javascript:;">Read more...</a></span>
                                <span id="hide_more_r"><a href="javascript:;">Hide</a></span> 
                            </p>
                        </blockquote>
                    </div>
                </div>
            </section>
            <section class="check-rates detail-cn">
                <div class="check-rates-cn">
                    <div class="check-rates-form">
                        <h3>Choose your package &amp; check rates now</h3>
                        <div class="pull-right run-popup">
                            <a data-target="#myfooter" data-toggle="modal" href="javascript:;"><span id="trip_h"></span> Certificate of Excellence</a>
                            <a data-target="#myfooter" data-toggle="modal" href="javascript:;"><span id="best_ph"></span> Best Price Guarantee</a>
                        </div>
                        

                        @if(@$hotel->promotion)
                        @foreach(collect($hotel->promotion)->chunk(2) as $key => $promotion)
                        @php $view = $promotion->values(); @endphp
                            @if(!empty($view[0]))
                            <div id="offer-tour-new-cruise">
                                <div class="title-offer">
                                    <a data-toggle="collapse" href="#offer{{$key}}" role="button" aria-expanded="false" aria-controls="offer{{$key}}">
                                        <small><i class="sales-price"></i>&nbsp;{{ @$view[0] }}</small>
                                    </a>
                                </div>
                                <div class="body-offer collapse" id="offer{{$key}}">
                                    <div class="content">
                                       {!! @$view[1] !!}
                                    </div>
                                </div>
                            </div>
                            @endif
                        @endforeach
                        @endif

                        
                        <div class="clearfix"></div>
                        <form name="form_booking" id="form_booking" action="{{ route('cruise.show.booking',$hotel->name_link) }}" method="post">
                            {{ csrf_field() }}
                            <div class="form-search clearfix">
                                <div class="form-field field-select">
                                    <select class="form-control form-control-angle-down" name="package" id="package" required>
                                        <option value="0">All Cruise Packages</option>
                                        @foreach($hotel->tours as $tour)
                                        <option value="{{ $tour->id }}">{{ $tour->duration }} Days » {{ $tour->name }}</option>
                                        @endforeach  
                                    </select>
                                </div>
                                <div class="form-field field-date check_in">
                                    <input id="check_in" type="text" name="check_in" class="date hasDatepicker" data-toggle="datepicker" placeholder="Check in" required>
                                    <span id="check_in_error"></span>
                                </div>
                                <div class="form-field field-select div_sel_cabin">
                                    <div class="select" style="width:100%;">
                                        <input type="text" id="ip-room" name="nocabin_t" value="1 Room(s), 2 Adult(s), 0 Children">
                                    </div>
                                    <!-- check no cabin -->
                                    <div class="cd-sub cd-sub-room" style="display: none;">
                                        <span class="fa fa-times cd-sub-close c6 z_18"></span>
                                        <div class="row">
                                            <div class="col-sm-4 form-group">
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
                                                <div class="row">
                                                    <div class="col-sm-3 form-group">
                                                        <label class="control-label-sm">Type</label>
                                                        <select class="form-control form-control-angle-down type-cruise" name="typecab1" id="typecab1">
                                                            <option value="0" selected="selected">Double</option>
                                                            <option value="1">Twin</option>
                                                            <option value="2">Single</option>
                                                        </select>
                                                    </div>
                    
                                                    <div class="col-sm-3 form-group">
                                                        <label class="control-label-sm">Adult (&gt; 10)</label>
                    
                                                        <select class="form-control form-control-angle-down" onchange="textroom();" name="adult1" rel="adult" id="adult1">
                                                            <option value="0">0</option>
                                                            <option value="1">1</option>
                                                            <option value="2" selected="selected">2</option>
                                                            <option value="3">3</option>
                                                            <option value="4">4</option>
                                                        </select>
                                                    </div>
                    
                                                    <div class="col-sm-3 form-group">
                                                        <label class="control-label-sm">Child (4 - 10)</label>
                    
                                                        <select class="form-control form-control-angle-down" onchange="textroom();" name="child1" rel="child" id="child1">
                                                            <option value="0">0</option>
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                        </select>
                                                    </div>
                    
                                                    <div class="col-sm-3 form-group">
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
                                    <button type="submit" class="awe-btn awe-btn-2 arrow-right arrow-white awe-btn-medium booking-window">Check Room Rates</button>
                                </div>
                            </div>
                        </form>
                        <div class="font-caret-up"><i class="fa fa-caret-up"></i></div>
                        <div class="hl-availability">
                            <div class="table-responsive">
                                <table class="table table-availability">
                                    <tbody>
                                        <tr>
                                            <th colspan="2">Room Types</th>
                                            <th class="max-th" style="text-align: right;">Max</th>
                                            <th class="max-th" style="text-align: right;">Rates</th>
                                        </tr>
                                        @php
                                            $arr_hotel = explode("#",@$hotel->price_e);
                                        @endphp
                                        @for($i=0;$i < count($arr_hotel); $i++)
                                        @php
                                            $room_info = explode("|",$arr_hotel[$i]);
                                            $arr_detail_r = $room_info;
                                            $photo_ro = str_replace("[","",@$room_info[5]);
                                            $err_link_hotel = array('Hotel2','hotels2');
                                            $photo_ro = str_replace($err_link_hotel,"hotels",$photo_ro);
                                        @endphp
                                        @if(!empty($arr_detail_r[0]))
                                        @php $listRoomImg = explode(',',@$room_info[8]); @endphp
                                        <tr>
                                            <td colspan="2" class="avai-td-text" style="padding-bottom: 0;">
                                                <figure>
                                                    <div class="rela-info">
                                                            <div class="thumbnail">
                                                                @foreach($listRoomImg as $img)
                                                                    @if($loop->iteration == 1)
                                                                    <a class="fancybox hv-scale" rel="highlight{{ $i }}" data-fancybox="images" data-fancybox-group="gallery{{ $i }}" data-thumbnail="{{ $img ?: '/storage/public/Paradise%20Luxury%20Cruise%20-%20Suite%20.jpg' }}" data-type="image" href="{{ $img ?: '/storage/public/Paradise%20Luxury%20Cruise%20-%20Suite%20.jpg' }}" title="" tabindex="0">
                                                                        <img class="image-slide" src="{{ $img ?: '/storage/public/Paradise%20Luxury%20Cruise%20-%20Suite%20.jpg' }}" alt="">
                                                                        <i class="fa fa-expand fa-search-plus zoom"></i>
                                                                    </a>
                                                                    @else
                                                                    <a class="fancybox hv-scale" rel="highlight{{ $i }}" data-fancybox="images" data-fancybox-group="gallery{{ $i }}" data-thumbnail="{{ $img ?: '/storage/public/Paradise%20Luxury%20Cruise%20-%20Suite%20.jpg' }}" data-type="image" href="{{ $img ?: '/storage/public/Paradise%20Luxury%20Cruise%20-%20Suite%20.jpg' }}" title="" tabindex="0"></a>
                                                                    @endif
                                                                @endforeach                                                            
                                                            </div>
                                                        {{-- <img src="{{ $room_info[8] ?: $hotel->photo }}" alt=""> --}}
                                                    </div>
                                                </figure>
                                                <div class="cruise_info">
                                                    <h3><a href="#">{{ $room_info[0] }}</a></h3>
                                                    <ul>
                                                        {{-- <li><span>Room with balcony</span></li> --}}
                                                        <li>{{ $room_info[6] }} Rooms</li>
                                                        <li><i class="fa fa-eye"></i>{{ $room_info[1] }}</li>
                                                        <li><i class="fa fa-bed"></i>Double/twin</li>
                                                        <li><i class="fa fa-retweet"></i>28 m²</li>
                                                        <li><i class="fa fa-map-marker"></i>First Deck</li>
                                                    </ul>
                                                </div>
                                            </td>
                                            <td class="avai-td-book td-max" style="padding-bottom: 0;">
                                                <div class="has-feedback">
                                                    <ul class="list-inline"><li class="adult"><i class="fa fa-user"></i></li><li class="adult"><i class="fa fa-user"></i></li><li class="adult"><i class="fa fa-user"></i></li></ul>                                            
                                                </div>
                                            </td>
                                            <td class="avai-td-book" style="padding-bottom: 0;">
                                                <a href="#" class="book-cruise"><i class="fa fa-angle-double-up"></i><span>Check rates</span></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="5" style="padding-top: 0;background: none;">
                                                <a href="javascript:void(0);" class="room-featured" data-toggle="modal" data-target="#modal_cabin{{$i}}">More info »</a>
                                            </td>
                                        </tr>
                                        <div class="modal fade in" id="modal_cabin{{$i}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="false">
                                           <div class="modal-dialog modal-booking">
                                              <div class="modal-content">
                                                 <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" class="fa fa-times"></span></button>
                                                    <h4 class="modal-title" id="myModalLabel"><i class="fa fa-ship"></i>{{ $hotel->name }}</h4>
                                                 </div>
                                                 <div class="modal-body" style="color: #666;">
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
                                                                        @for($z=0;$z<count(@$arr_faciliti ?: []);$z++)
                                                                            <li><span class="nav">•</span> {{ @$arr_faciliti[$z] }}</li>
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
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="review-detail">
                <ul id="traveltabs" class="nav nav-tabs">
                    <li><a href="#overview" data-toggle="tab" class="js-tabcollapse-panel-heading" data-parent="" aria-expanded="false"><i class="fa fa-info-circle"></i> Overview</a></li>
                    {{-- <li><a href="#highlight" data-toggle="tab" class="js-tabcollapse-panel-heading" data-parent="" aria-expanded="false"><i class="fa fa-star"></i>Highlights</a></li> --}}
                    <li><a href="#itinerarie-supplier" data-toggle="tab" class="js-tabcollapse-panel-heading active" data-parent="" aria-expanded="false"><i class="fa fa-map-marker"></i>Itineraries & Routes</a></li>
                    <li><a href="#hotel-list" data-toggle="tab" class="js-tabcollapse-panel-heading" data-parent="" aria-expanded="false"><i class="fa fa-comments"></i>Tours with Cruise</a></li>
                </ul>
                <div id="myTabContent" class="tab-content">
                    <div class="tab-pane fade in" id="overview">  
                        <div class="content-tab">
                            <div class="overview-supplier">
                                <div class="review-all">
                                    <h4 class="review-h">Description</h4>
                                    <div class="content-overview">
                                        {!! $hotel->description !!}
                                    </div>
                                </div>
                            </div>
                            <div class="overview-supplier">
                                <div class="review-all">
                                    <h4 class="review-h">Features</h4>
                                    <div class="content-overview">
                                        @foreach(json_decode($hotel->facilities,true) as $key => $name)
                                        <div class="control-group">
                                            <label class="control-label"><strong>{!! key($name) !!}</strong></label>
                                            @foreach($name as $value)
                                            <div class="row">
                                                @foreach($value as $item)
                                                <div class="col-md-3">
                                                    <label>
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
                        </div> 
                    </div>
                    <div class="tab-pane fade active in" id="itinerarie-supplier">    
                        <div class="content-tab">
                            @foreach($hotel->tours as $tour)
                            <div class="box-suplier">
                                <div class="suplier-title" data-show="#suplier{{$loop->iteration}}">
                                    <div id="night-pk">
                                        <font>{{ $tour->duration }}</font><br> Days               
                                    </div>
                                    <div id="name-pk">
                                        <h2><a href="javascript:;" title="{{ $tour->name }}">{{ $tour->name }}</a></h2>
                                        <div id="des-tour">
                                            <i class="fa fa-map-marker"></i>
                                            {!! get_route($tour->route) !!}
                                        </div>
                                    </div>
                                    <div class="price-tour">
                                        <h3>Only From</h3>
                                        {!! get_price($tour->price,$tour->discount) !!} 
                                    </div>
                                </div>	
                                <div id="suplier{{$loop->iteration}}" class="suplier-highlight" style="display: none;">
                                    <div class="itinerary-supplier">
                                        @php  $arr_det_table = explode("#",$tour->detail); @endphp
                                        <ul id="traveltabs" class="nav nav-tabs">
                                            <li>
                                                <a href="#highlight-suplier{{$tour->id}}" data-toggle="tab" class="js-tabcollapse-panel-heading active" data-parent="" aria-expanded="false">Highlights</a>
                                            </li>
                                            @for($s = 1; $s <= count($arr_det_table) ;$s++)
                                            <li><a href="#day-{{$tour->id}}-{{$s}}" data-toggle="tab" class="js-tabcollapse-panel-heading" data-parent="" aria-expanded="false">Day {{ $s }}</a></li>
                                            @endfor
                                            <li class="pull-right viewmap"><a href="" title=""><i class="fa fa-map-marker"></i> View Map</a></li>
                                        </ul>
                                        <div id="tab-content-suplier" class="tab-content">
                                            <div class="tab-pane fade active in" id="highlight-suplier{{$tour->id}}">   
                                                <div id="hightlights-cruise" class="hide_ajax hightlights-cruise">
                                                <ul>
                                                    <?php

                                                    $highlight = preg_replace("/<p[^>]*?>/", "", $tour->highlight);
                                                    $newcontent = str_replace("</p>", "<br />", $highlight);

                                                    $arr_highl = explode("<br />",$newcontent);
                                                    for($i=0;$i<count($arr_highl);$i++){
                                                    if(strlen($arr_highl[$i]) > 5){
                                                    ?>
                                                    <li><span class="fa fa fa-check"></span> <?=$arr_highl[$i]?></li>
                                                    <?php }}?>
                                                </ul>
                                                </div>
                                            </div>
                                            @for($s = 1; $s <= count($arr_det_table) ;$s++)
                                            @php $arr_info_table = explode("|",$arr_det_table[$s-1]); @endphp
                                            <div class="tab-pane fade in" id="day-{{$tour->id}}-{{$s}}">
                                                <div class="tab-suplier-title">
                                                    <span>Day {{$s}}:</span> {{ @$arr_info_table[0] }}
                                                </div>
                                                <div class="tab-suplier-body">
                                                    <div class="row">
                                                        <div class="col-lg-12 optional-list">
                                                            
                                                            <div id="txt-tour">
                                                                {!! $arr_info_table[3] !!}
                                                            </div>
                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            @endfor
                                        </div>

                                    <div class="include-exclude-supplier">
                                        <ul id="traveltabs" class="nav nav-tabs">
                                            <li>
                                                <a href="#inclusions-suplier{{$tour->id}}" data-toggle="tab" class="js-tabcollapse-panel-heading active" data-parent="" aria-expanded="false">Inclusions</a>
                                            </li>
                                            <li><a href="#exclusions{{$tour->id}}" data-toggle="tab" class="js-tabcollapse-panel-heading" data-parent="" aria-expanded="false">Exclusions</a></li>
                                            <li><a href="#booking-policy{{$tour->id}}" data-toggle="tab" class="js-tabcollapse-panel-heading" data-parent="" aria-expanded="false">Booking Policy</a></li>
                                        </ul>
                                        <div id="tab-content-suplier" class="tab-content">
                                            <div class="tab-pane fade active in" id="inclusions-suplier{{$tour->id}}"> 
                                                {!! @$hotel->include !!}
                                            </div>
                                            <div class="tab-pane fade in" id="exclusions{{$tour->id}}"> 
                                                {!! @$hotel->exclude !!}
                                            </div>
                                            <div class="tab-pane fade in" id="booking-policy{{$tour->id}}"> 
                                                {!! @$tour->policy !!}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="tab-pane fade in" id="hotel-list">    
                        <div class="content-tab">
                            <div class="tour-list">
                                @php $toursByLocation = get_tours_by_destinations($hotel->location,10); @endphp
                                @if($toursByLocation->isNotEmpty())
                                    @foreach($toursByLocation as $location)
                                    <div class="list-item">
                                        <div class="row">
                                            <div class="col-md-5">
                                                <div class="img-tour">
                                                    <a href="{{ route('tours.show',$location->name_link) }}" title="{{ $location->name }}">
                                                        <img src="{{ $location->photo }}" alt="">
                                                    </a>
                                                    <div id="viewmap">
                                                        <a href="{{ route('tours.show',$location->name_link) }}" title="View Route Map"><i class="fa fa-map-marker"></i> View Route Map</a>
                                                        <a class="photo-see" href="{{ route('tours.show',$location->name_link) }}" title="See all photos">See all photos </a>
                                                    </div>
                                                </div>	
                                            </div>
                                            <div class="col-md-7">
                                                <div id="top-t">
                                                    <div id="left-nametour">
                                                        <div id="day"><font>{{ $location->duration }}</font>  days </div>
                                                        <div id="title-info">
                                                            <h2>
                                                                <a href="#" title="{{ $location->name }}">{{ $location->name }}</a>
                                                            </h2>
                                                            <div id="des-tour">
                                                                <i class="fa fa-map-marker"></i>
                                                                {!! get_route($location->route) !!}
                                                            </div>
                                                        </div>
                                                        <div id="title-footer">
                                                            <span class="number-label">{{ $loop->iteration }}</span>
                                                        </div>
                                                    </div>
                                                    <div id="txt-highlights">
                                                        <ul>
                                                            @php
                                                                $newcontent = preg_replace("/<p[^>]*?>/", "", $location->highlight);
                                                                $newcontent = str_replace("</p>", "<br />", $newcontent);
                                                                $high = explode('<br />',$newcontent);
                                                            @endphp
                                                            @for($i=0;$i<count($high);$i++)
                                                                @if(strlen($high[$i]) > 5)
                                                                    <li><font>•</font> {{ $high[$i] }}</li>
                                                                @endif
                                                            @endfor
                                                        </ul>
                                                    </div>
                                                    <div id="bot-tour">
                                                        <font class="experiences">Experiences :</font>
                                                        <div id="right-styletour">
                                                                 {!! get_styletour($location->experience) !!}
                                                        </div>
                                                        @if($location->price>0)
                                                        <div class="price-tour">Only From {!! get_price($location->price,$location->discount) !!}</div>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <div class="related-tour">
            <div id="title-line" class="text-center">
                <h2>You May Also Like<span class="line"></span></h2>
            </div>
            <div id="scroll-tours">
                <div class="related-slider">
                    @foreach(get_list_cruises(4,$hotel->cat_id) as $item)
                    <div class="item">
                        <div class="box-tour">
                            <div class="alink">
                                <div class="img-tour">
                                     <a href="{{ $item->link }}" title="{{ $item->name }}"><img src="{{ $item->photo }}"></a>
                                    <div class="title-tour">
                                        <h2 style="text-align:center"><a href="{{ $item->link }}" title="{{ $item->name }}">{{ $item->name }}</a></h2>
                                    </div>
                                    <span class="best-seller"></span>
                                    <a class="heart-tour"><i class="far fa-heart"></i></a>
                                </div>
                                <div class="txt-tour">
                                    <span class="i-nav"></span>
                                    <br clear="all">
                                    <a href="{{ $item->link }}" title="{{ $item->name }}"><span class="bt-detail">View More</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>	
    </div>
    
</div>
@endsection