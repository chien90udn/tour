@extends('layouts.frontend')

@section('content')

    <div id="why"></div>
<div id="title-top-tour">
    <div class="grid-1">
        <div id="left-nametour" style="width: 100%;">
            <div class="title-tour">
                <div id="day"><font>{{ $tour->duration }}</font>{{ $tour->duration > 1 ? 'days' : 'day' }}</div>
                <h1>{{ $tour->name }}</h1>
                <div id="des-tour">
                    <span class="fa fa-map-marker"></span>
                    {!! get_route($tour->route) !!}
                </div>
            </div>

            @if($tour->price > 0)
            <div id="price-pk">
                <div class="price">
                    <h3>Price only from</h3><br />
                    {!! get_price($tour->price,$tour->discount) !!}
                </div>
                <a id="inquiry-topmenu" href="#inquiry_booking" rel="nofollow" title="Inquiry This Tour" class="bt-inquiry login-window2 free_quotetour"><i class="fa fa-envelope-o fa-15x"></i>&nbsp;&nbsp;Free Quote for This Tour</a>
            </div>
            @endif

        </div>
    </div>
</div>
<div class="grid-1 clear">
    <div id="info-dt-tour">
        <div id="dt-toptour">
            <div id="code" class="pull-left">Tour Style: <font>Flexible &amp; Private Tour</font></div>
            <div id="act">
                <?=get_styletour($tour->experience)?>
            </div>
            <div id="code" class="pull-right">
                <div class="pull-left">
                    Need Help? <font>Contact us</font>
                </div>
                <a class="user_id tooltip pull-left login-window2 free_quotetour" href="#inquiry_booking" rel="nofollow" title="Tony Jaa - Sales Manager"><img src="https://www.seasiatravel.com/images/user/<?="4.jpg"?>" /></a>
                <a class="user_id tooltip pull-left login-window2 free_quotetour" href="#inquiry_booking" rel="nofollow" title="Phuc Pham - Customer Care"><img src="https://www.seasiatravel.com/images/user/<?="37.jpg"?>" /></a>
                <a class="user_id tooltip pull-left login-window2 free_quotetour" href="#inquiry_booking" rel="nofollow" title="Huyen Tran - Tour Operator"><img src="https://www.seasiatravel.com/images/user/<?="12.jpg"?>" /></a>
            </div>
        </div>

        <section class="detail-slider">
            <div class="mix-grid">

                <div class="mix mix-slide" style="display: inline-block;">
                    <div class="thumbnail">
                        @php $images = explode('|',$tour->photo_e); @endphp
                        @for ($i = 0; $i < 3; $i++)
                        <a href="{{ @$images[$i] }}" class="image_show{{$i+1}}" data-lightbox="image-tourdetail" data-title="{{ $tour->name }}">
                            <img class="image-slide" src="{{ @$images[$i] }}" alt="{{ $tour->name }}">
                        </a>
                        @endfor
                        <div class="small-photo" style="display: none;">
                            <div id="img_testi_0" class="img_testi">
                                <ul>
                                    @foreach($images as $item)
                                    <li>
                                        <a href="{{ $item }}" data-lightbox="image-tourdetail" data-title="{{ $tour->name }}" class="mix-zoom"></a>
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



    </div>
</div>

<div id="component-detail">
    <div class="grid-1">
        <div id="tab-info-detail-tour">
            <ul>
                <li id="t_over" class="removeactive active"><a rel="nofollow" href="javascript:void(0);" onclick="add_active('t_over','tour-summary');"><span class="fa fa-info-circle"></span>Overview</a></li>
                <li id="t_iti" class="removeactive"><a rel="nofollow" href="javascript:void(0);" onclick="add_active('t_iti','full-tour');"><span class="fa fa-map-marker"></span>View Full Itinerary</a></li>
                <li id="t_inc" class="removeactive"><a rel="nofollow" href="javascript:void(0);" onclick="add_active('t_inc', 'include-exclude');"><span class="fa fa-list"></span>Inclusions</a></li>
                <li id="t_review" class="removeactive"><a rel="nofollow" href="javascript:void(0);" onclick="add_active('t_review', 'review');"><span class="fa fa-quote-left"></span>Review</a></li>
                
                <li id="t_map" class="right"><a class="view_map_detail" rel="nofollow" href="/tour-map/{{ $tour->name_link }}.html"><span class="fa fa-map"></span>View Map</a></li>
            </ul>
        </div>
        <div class="content-tab" id="content-tab">
            <div id="day-tour" class="tour-summary tab-detail-tour">
                <p class="descrip-tour">{!! $tour->description !!}</p>
				@if($tour->video_link)
                <div class="video_link">
                    <iframe id="video" width="420" height="315" src="//www.youtube.com/embed/{{ str_replace('https://youtu.be/','',$tour->video_link) }}?rel=0" frameborder="0" allowfullscreen></iframe>
                </div>
				@endif
				<br>
                <div class="highlight-over" style="width:100; margin-top:10px;">
                    <div id="l-detail-tour">
                        <div id="txt-highlights">
                            <p>Highlights</p>
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
                </div>

                <table id="activities">
                    <tr class="dark">
                        <td>By Day</td>
                        <td style="text-align: left;">Destinations</td>
                        <td style="text-align: left;">Activities</td>
                        <td>Meals</td>
                    </tr>
                    <?php
                    $arr_det_table = explode("#",$tour->detail);
                    for($s = 0;$s<count($arr_det_table);$s++){
                    $st_tr = "";
                    $arr_info_table = explode("|",$arr_det_table[$s]);
                    if($s%2!=0){$st_tr = "class='dark'";}
                    ?>
                    <tr <?=$st_tr?>>
                        <td class="red" style="text-align: left;"><a href="javascript:;"><?=get_train($arr_info_table[5]);?>Day <?=$s+1?></a></td>
                        <td class="red" style="text-align: left;"><?=str_limit($arr_info_table[0],40)?></td>
                        <td style="text-align: left;"><?=str_limit($arr_info_table[1],70)?></td>
                        <td><?php
                            $arr_info_table[2] = str_replace("inner","",$arr_info_table[2]);
                            $arr_info_table[2] = str_replace("reakfast","",$arr_info_table[2]);
                            $arr_info_table[2] = str_replace("unch","",$arr_info_table[2]);
                            echo $arr_info_table[2];
                            ?></td>
                    </tr>
                    <?php }?>
                </table>
                <div class="view_full_iti">
                    <a id="view_full_itinerary_tdetail" href="javascript:;" onclick="add_active('t_iti','full-tour');">Click to view full itinerary →</a>
                </div>

            </div>
            <div id="day-tour" class="full-tour tab-detail-tour" style="display: none;">
                @php
                    $dura = intval($tour->duration);
                    $arr_det = explode("#",$tour->detail);
                @endphp
                @for($j=1;$j<=$dura;$j++)
                    @php
                        @$arr_detail_info = explode("|",$arr_det[$j-1]);
                        @$arr_info = explode("|",$arr_det[$j-1]);
                    @endphp
                    <div id="day-tour">

                        <div id="title-day">

                            <div id="day-number"><font><?=$j?></font></div>

                            <h2><?=$arr_info[0]?></h2>

                            <?=get_train(@$arr_info[5]);?>

                        </div>

                        <div id="info-day">

                            <ul>

                                <?php if(!empty(@$arr_info[2])){ ?>

                                <li class="meals">

                                    <span class="fa fa-cutlery icon_meals"></span>

                                    <font>Meals:</font>

                                    <p><?=@$arr_info[2]?></p>

                                </li>

                                <?php }if(!empty(@$arr_info[1])){?>

                                <li>

                                    <span class="fa fa-university icon_meals"></span>

                                    <font>Activities:</font>

                                    <p><?=@$arr_info[1]?></p>

                                </li>

                                <?php }?>

                            </ul>

                            <div id="txt-tour">

                                <p><?=@$arr_info[3]?></p>

                            </div>

                        </div>
                    </div>
                @endfor

            </div>
            <div id="day-tour" class="include-exclude tab-detail-tour" style="display: none;">

                <div id="box-inclusions">

                    <h2>Inclusions</h2>

                    <div class="inclusions-product">

                        <p><i class="fa fa-cutlery icon_meals"></i> Meals</p>

                        <?php

                        $dura = intval($tour->duration);

                        $arr_det = explode("#",$tour->detail);

                        $arr_meal_yes_ = array();

                        $arr_tran_yes_ = array();

                        for($j=1;$j<=$dura;$j++){

                            @$arr_info = explode("|",$arr_det[$j-1]);

                            @$arr_meal_yes = explode(",",$arr_info[2]);

                            for($m=0;$m<count($arr_meal_yes);$m++){

                                if(!empty($arr_meal_yes[$m])){

                                    array_push($arr_meal_yes_,trim($arr_meal_yes[$m]));

                                }

                            }

                            @array_push($arr_tran_yes_,trim($arr_info[5]));

                        }

                        $arr_meal_s_yes = array_count_values($arr_meal_yes_);

                        ?>

                        <?php

                        if(isset($arr_meal_s_yes['Breakfast'])) {

                            if($arr_meal_s_yes['Breakfast'] > 1){

                                echo $arr_meal_s_yes['Breakfast']." breakfasts";

                            }else{

                                echo $arr_meal_s_yes['Breakfast']." breakfast";

                            }
                        }
                        if(isset($arr_meal_s_yes['Lunch'])) {

                            if($arr_meal_s_yes['Lunch'] > 1){

                                echo ", ".$arr_meal_s_yes['Lunch']." lunches";

                            }else{

                                echo ", ".$arr_meal_s_yes['Lunch']." lunch";

                            }
                        }
                        if(isset($arr_meal_s_yes['Dinner'])) {

                            if($arr_meal_s_yes['Dinner'] > 1){

                                echo ", ".$arr_meal_s_yes['Dinner']." dinners";

                            }else{

                                echo ", ".$arr_meal_s_yes['Dinner']." dinner";

                            }
                        }


                        ?>

                    </div>



                    <div class="inclusions-product">

                        <p><i class="fa fa-exchange"></i> Transport </p>

                        <?php

                        $arr_tran_yes_s = array_unique($arr_tran_yes_);

                        $dem = 0;

                        for($ty=0;$ty<count($arr_tran_yes_);$ty++){

                            if(!empty($arr_tran_yes_s[$ty])){

                                if($dem==0){

                                    echo get_name_train($arr_tran_yes_s[$ty]);

                                    $dem++;

                                }else{

                                    echo ", ".get_name_train($arr_tran_yes_s[$ty]);

                                    $dem++;

                                }

                            }

                        }

                        ?>

                    </div>



                    <div class="inclusions-product">

                        <p><i class="fa fa-university icon_meals"></i> Included services </p>

                    </div>



                    <ul>

                        <?php

                        $inexclude = explode("|",$tour->include);

                        $include_arr = array();


                        @$includecontent = preg_replace("/<p[^>]*?>/", "", $inexclude[0]);

                        $include = str_replace("</p>", "<br />", $includecontent);

                        $include_arr = explode("<br />",$include);

                        $exclude_arr = array();

                        @$excludecontent = preg_replace("/<p[^>]*?>/", "", $inexclude[1]);

                        $exclude_arr = explode("<br />",$excludecontent);

                        foreach($include_arr as $include){ if(strlen($include)>5){ ?>

                        <li><span class="in"></span><?=$include?></li>

                        <?php }}?>

                    </ul>

                </div>



                <div id="box-inclusions" style="margin-right:0; border-right:none; padding-right:0;">

                    <h2>Exclusions</h2>

                    <ul>

                        <?php foreach($exclude_arr as $exclude){ if(strlen($exclude)>5){ ?>

                        <li><span class="ex"></span><?=$exclude?></li>

                        <?php }}?>

                    </ul>

                </div>

            </div>
            <div id="day-tour" class="review tab-detail-tour" style="display: none;">
                @if(@$tour->review)
                    @php @$rev_data = explode("#", $tour->review); @endphp
                    @for($j=0;$j<count($rev_data);$j++)
                        @php $review_data = explode("|", $rev_data[$j]); @endphp
                        <div class="review-data">
                            <div class="header-review">
                                <ins>
                                <img src="{{ @$review_data[5] }}" alt="{{ $review_data[0] }}">
                                </ins>
                                <span>{{ $review_data[0] }}</span>
                                <small>{{ $review_data[1] }}</small>
                            </div>
                            <div class="content-review">
                                <h3>"{{ $review_data[2] }}"</h3>
                                <i class="fa fa-thumbs-up"></i>
                                <span class="star-review">
                                    @for($i = 1; $i <= $review_data[3]; $i++)
                                    <i class="fa fa-star"></i>
                                    @endfor
                                </span>
                                <blockquote>
                                    <p>{!! $review_data[4] !!}</p>
                                </blockquote>
                            </div>
                        </div>
                    @endfor
                @endif
            </div>
        </div>
    </div>
    <div class="line-sup">
        <span></span>
    </div>
    @if($tour->price>0)
    <div id="title-price">
        <p class="price-detail">TOUR PRICE  |</p>
        <div id="price-pk">
            <h3>Only From : </h3>
            {!! get_price($tour->price,$tour->discount) !!}
            {!! get_special($tour->id,$tour->name_link,$tour->specialoff) !!}
        </div>
    </div>
    @endif
    
            <p class="title-sup">Tour price is indicative only, please inquiry for a <b>best quotation</b> & <b>best offers</b> from us. Don't miss out! We are always here to help you...</p>
            <div class="btn-cruise">
                <a id="tailormadetour" href="#inquiry" class="bt-tailormadetour login-window2"><span class="icon-tailor"></span>Tailor Made This Tours</a>
                <a href="#inquiry_booking" rel="nofollow" title="Inquiry This Tour" class="bt-enquiry login-window2 free_quotetour"><span class="icon-email"><i class="fa fa-envelope-o"></i></span>Free Quote for This Tour</a>
            </div>
    </div>

    <div class="grid-1">
        <div id="filter_h" style="margin: 10px 0;">
                    <ul>
                @foreach((
                    new \App\Group())->getAll()->sortBy('id') as $group)
                    <li><a href="{{ route('group.show',$group->name_link)}}" title="{{ $group->name }}">{{ $group->name }}</a></li>
                @endforeach
            </ul>
        </div>
    </div>

    <div class="grid-1 clear">
        <div id="title-line" style="margin-bottom: 10px;">
            <h2>RELATED TOURS <span class="line"></span></h2>
        </div>
    </div>
    <div id="container-scrolltours" style="padding:25px 0;">
        <div class="grid-1 clear">
    
            <div id="scroll-tours">
                <div id="owl-demo2" class="owl-carousel">
                    @foreach(get_list_tours(6,$tour->groups->map->id->toArray()) as $item)
                    <div class="item">
                            <div id="box-tour">
                                <div class="alink">
                                    <div id="img-tour">
                                        <a href="{{ route('tours.show',@$item->name_link) }}" title="{{ @$item->name }}"><img src="{{ @$item->photo }}" class="lazyload" original="{{ @$item->photo }}" style="display: block;"></a>
                                        <div id="title-tour">
                                            <h2 style="text-align:center"><a href="{{ $item->link }}" title="{{ @$item->name }}">{{ @$item->name }}</a></h2>
                                        </div>
                                        <span class="best-seller"></span>
                                        <a class="heart-tour tooltip tooltipstered" rel="nofollow" id="love_tour50" onclick="love_tour(50)" href="javascript:;"><i class="fa fa-heart-o"></i></a>            </div>
                                    <div id="txt-tour">
                                        <span class="i-nav"></span>
                                        <div id="price-tour">{{ @$item->duration }} DAYS </div>
                                        <p>{{ strip_tags(str_limit(@$item->description,80)) }}</p>
                                        <br clear="all">
                                        <a href="{{ route('tours.show',@$item->name_link) }}" title="{{ @$item->name }}"><span class="bt-detail">More Info</span></a>
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
    </div>

    
</div>

@include('partial.popup_book',['tour' => $tour])


<div id="main-why" class="main_why">
    <div class="grid-1">
        <div id="box-why">
            <a href="javascript:">
                <span class="icon1"></span>
                <div id="txt-why">
                    <h3>Reply within <strong>0.5 ~ 12H</strong></h3>
                    <font><b class="nav">•</b>1-on-1 Personal Consultant</font>
                    <font><b class="nav">•</b>Free Quote Quickly</font>
                </div>
            </a>
        </div>
        <div id="box-why">
            <a href="javascript:">
                <span class="icon2"></span>
                <div id="txt-why">
                    <h3><strong>100% tailor-made</strong> Tour</h3>
                    <font><b class="nav">•</b>Designed for you and by you</font>
                    <font><b class="nav">•</b>Until it fits your needs</font>
                </div>
            </a>
        </div>
        <div id="box-why">
            <a href="javascript:">
                <span class="icon3"></span>
                <div id="txt-why">
                    <h3>Enjoy tour in<strong>"My Style"</strong></h3>
                    <font><b class="nav">•</b>Flexible, Authentic &amp; Unique</font>
                    <font><b class="nav">•</b>Private guide &amp; car</font>
                </div>
            </a>
        </div>
        <div id="box-why">
            <a href="javascript:">
                <span class="icon4"></span>
                <div id="txt-why">
                    <h3>Best Local <strong>Support 24/7</strong></h3>
                    <font><b class="nav">•</b>We are always by your side</font>
                    <font><b class="nav">•</b>24/7 hotline support</font>
                </div>
            </a>
        </div>
        <div id="box-why">
            <a href="javascript:">
                <span class="icon5"></span>
                <div id="txt-why">
                    <h3><strong>Your smiles</strong> are our success</strong></h3>
                    <font><b class="nav">•</b>We always try our best to work</font>
                    <font><b class="nav">•</b>Your satisfaction is our goal</font>
                </div>
            </a>
        </div>
    </div>
</div>

@endsection