@extends('layouts.frontend')

@section('content')
<div id="banner-cat">
    <div id="gadient">&nbsp;</div>
    <a href="/" title="{{ get_option('site_name') }}"><img src="/assets/frontend/images/thailand-vn-laos-cam.jpg"></a>
    <div id="container-txtcat">
        <div class="grid-1">
            <div id="component-bre-page">
                <h2>Search Result<span class="line"></span></h2>
                <div id="bre-page">
                    <a href="/" title="{{ get_option('site_name') }}"><span class="i-home"></span></a>
                    <span class="i-nav"></span>
                    Find the best tours
                </div>
            </div>
            <div id="right-expert">
                <a href="javascript:;"><img src="https://www.discoverindochina.com/images/sup1.jpg" alt="Send an Enquiry"></a>
                <div id="item-expert">
                    <h2>We are always here to help you!!!</h2>
                    <p>Don't hesitate to send us your requests. We will send you the best offers quickly!</p>
                </div>
                <a id="need-help" href="#inquiry" class="bt-enquiry login-window2" title="Need Help?">Need Help?</a>
            </div>        </div>
    </div>
</div>

@include('partial.search_home')

<br clear="all" />
<div class="main-group">
<div id="icon" style="padding-top: 5px;"><span class="vietnam"></span></div>
<div id="container-scrolltours" class="tour-top-10-pages" style="padding:0;margin-top: -25px;">

<div class="grid-1 clear">
<div id="title-line" style="margin-bottom:0;">
<h1>Search Result<span class="line"></span></h1>
</div>
</div>
</div>

<div class="grid-1">
@foreach($tours as $tour)
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
<div class="col-md-12 text-center">
{!! $tours->links() !!}
</div>

</div>
<style>
.ui-autocomplete{width: 180px;}
</style>
<div class="grid-1">
<div class="needhelp-tg">
<a id="tailormadetour" href="#inquiry" class="bt-tailormadetour login-window2 free_quotetour"><span class="icon-tailor"></span>Help Me Plan My Trip</a>
</div>
</div>
<div id="directional">
<div id="title-line" style="margin-top: 20px;margin-bottom: 0;">
<h2>You May Also Like<span class="line"></span></h2>
</div>
<div class="grid-1">
<div class="exp-col-md-2">
<a href="/tours/vietnam/" title="Vietnam">
<div class="item" style="margin-left: 0;">
<span class="icon-vn">&nbsp;</span>
<p>Vietnam</p>
</div>
</a>
</div>
<div class="exp-col-md-2">
<a href="/tours/cambodia/" title="Cambodia">
<div class="item">
<span class="icon-cam">&nbsp;</span>
<p>Cambodia</p>
</div>
</a>
</div>
<div class="exp-col-md-2">
<a href="/tours/laos/" title="Laos">
<div class="item">
<span class="icon-laos">&nbsp;</span>
<p>Laos</p>
</div>
</a>
</div>
<div class="exp-col-md-2">
<a href="/tours/myanmar/" title="Myanmar">
<div class="item">
<span class="icon-mm">&nbsp;</span>
<p>Myanmar</p>
</div>
</a>
</div>
<div class="exp-col-md-2">
<a href="/tours/thailand/" title="Thailand">
<div class="item" style="margin-right: 0;">
<span class="icon-tl">&nbsp;</span>
<p>Thailand</p>
</div>
</a>
</div>
</div>
</div>
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
