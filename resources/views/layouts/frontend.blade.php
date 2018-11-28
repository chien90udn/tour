<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ (isset($title) ? $title : get_option('site_name')) }}</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="{{ isset($description) ? $description : get_option('site_description') }}">
    <meta name="keywords" content="{{ isset($keyworld) ? $keyworld : 'Indochina tours, Indochina tour, Indochina Private Tours, Indochina Private Tour, Private tours indochina, Vietnam tours, Cambodia tours, Laos tours, Hotels, Destinations'}}">
    <meta name="robots" content="index, follow">
    <meta name="revisit-after" content="1 day">
    <meta name="distribution" content="Global">
    <meta name="google-site-verification" content="Se46e0ByEmF-qAkopIL26uXViMm2DLNA6qAtF6Gk38g">
    <link type="image/x-icon" href="{{ get_option('site_favicon') }}" rel="icon">
    {{-- <link rel="stylesheet" type="text/css" href="{{ frontend_asset('css/bootstrap.min.css') }}"> --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-modal/2.2.6/css/bootstrap-modal-bs3patch.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-modal/2.2.6/css/bootstrap-modal.min.css">
    <link rel="stylesheet" type="text/css" href="{{ frontend_asset('css/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ frontend_asset('css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ frontend_asset('css/ficon.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ frontend_asset('css/step.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ frontend_asset('css/flexslider.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ frontend_asset('css/animations.css') }}">
    @stack('header')
</head>
<body>
<!-- Preloader -->
<div id="preloader" style="display: none;">
    <div class="tb-cell">
        <div id="page-loading">
            <div><img src="{{ frontend_asset('/images/load_dvc.gif') }}"></div>
        </div>
    </div>
</div>
<!-- Wrap -->
<div id="main-head">
    <div id="top-head">
        <div class="grid-1">
            <div class="group-left-head">
                <div id="title-top">
                    <h1><strong>Indochina tours, Indochina Private tours, Tours Indochina, Vietnam Cambodia Tours, Vietnam Cambodia Laos Tours</strong></h1>
                </div>
            </div>
        </div>
    </div>
    <div id="bot-head" class="fixed-class" style="position: static;">
        <div class="grid-2">
            <div id="logo"><a href="/" title="{{ get_option('site_name') }}" tours=""><img class="logo-scr" src="{{ get_option('site_logo') }}" width="224" height="45"></a></div>
            <div id="head-right">
                <div id="top-head-right">
                    <div id="contact-email">
                        <font><span class="about"></span><a href="javascript:" class="pop-up-header" id="pop-up-header">International Tour License:#22-053</a></font>
                        <a href="mailto:{{ get_option('site_email') }}"><span class="i-contact"></span>{{ get_option('site_email') }}</a>
                    </div>
                    <div id="languages">
                        <a title="My shortlist" href="javascript:;" id="like_pac_home">
                            <i class="fa fa fa-heart-o"></i>
                            <span id="total_like"></span>
                            <span class="love_text">My shortlist</span>
                        </a>
                    </div>
                </div>
                <div id="bot-head-right">
                    <div class="search-toggle">
                        <a class="icon-s" href="#"></a>
                        <form id="seach_box" name="form_quick_sear" method="GET" action="/tours/search">
                            <div id="search-top">
                                <input type="text" class="search" id="keysearch" name="q" placeholder="Enter Search" value="{{ request()->get('q') }}">
                                <a href="javascript:" onclick="document.getElementById('seach_box').submit();" class="i-search" title="Enter Search"><i class="fa fa-search"></i></a>
                            </div>
                        </form>
                    </div>
                    <div id="right-menu">
                        <a id="btn-header" class="login-window2" href="/customized-tour.html">LET'S PLAN YOUR TRIP</a>
                    </div>
                    <div id="menu">
                        <nav class="main-nav">
                            <ul>
                                @foreach(fly_menu('main-menu') as $item)
                                <li class="{{ count($item->children) > 0 ? 'menu-dropdown clearfix' : '' }}">
                                    <a class="smooth" href="{{ $item->url }}" title="">{{ $item->name }}</a>
                                    @if(count($item->children) > 0)
                                    <ul class="clearfix">
                                        @foreach($item->children as $sub)
                                        <li><a class="smooth" href="{{ $sub->url }}" title=""><span>{{ $sub->name }}</span><img src="{{ $sub->thumbnail }}"></a></li>
                                        @endforeach
                                    </ul>
                                    @endif
                                </li>
                                @endforeach
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <button class="menu-btn nav-open hidden-lg hidden-md" type="button"><i></i></button>
</div>
<div class="m-nav hidden-lg hidden-md">
    <button class="menu-btn act nav-close" type="button"><i></i></button>
    <div class="nav-ct"></div>
</div>
<div id="goTop" style="display: none;">
    <span></span>
</div>
<div id="mask_license"></div>
<div id="popup_license" class="license-popup">
    <div id="popup-header-mj">
        <h3>International Tour Operator License</h3>
        <p>International Tour Operator License No: 22-053/2014/TCDL-GPLHQT - Issued by Vietnam National Administration of Tourism (VNAT)</p>
    </div>
    <a href="javascript:" class="close"><img src="/assets/frontend/images/cancel.png" class="btn_close" title="Close Window" alt="Close" width="35" height="35"></a>
    <div id="popup-content">
        {!! get_option('international-tour-license') !!}
    </div>
    <div id="popup-footer"><span></span></div>
</div>
@yield('content')
<div id="main-bottom">
    <div id="help-contact">
        <div class="grid-1">
            <a href="#"><img class="lazyload" src="/assets/frontend/images/sup2.jpg" width="100" height="100" original="/assets/frontend/images/sup2.jpg" style="display: block;"></a>
            <div id="txt-help">
                <h2>Let us assist you if you couldn't find a perfect trip for you!</h2>
                <p>We love our country and know it inside and out. This enables us to create an itinerary that suits you perfectly. Please let us know your desires and interests and we will tailor the best trip for you Or send us your own preferred itinerary and we will provide the best offer.</p>
            </div>
            <a id="btn" href="#inquiry" class="bt-help login-window2"><span class="icon-mail"></span>Send Us Your Request</a>
        </div>
    </div>
    <div id="footer">
        <div class="grid-1">
            <div class="row-margin">
                <div id="f-box">
                    <h2>Contact us</h2>
                    <div id="about-ft">

                        <a href="/" title="Indochina Tours"><img src="/assets/frontend/images/4-logoindochina.svg" class="lazyload" original="/assets/frontend/images/4-logoindochina.svg" style="display: inline;"></a>

                        <p>

                            <b>{{ get_option('site_business_license') }}</b><br>

                            {{ get_option('site_address') }}<br>

                            Hotline: {{ get_option('site_phone') }} <br>

                            Email1: <a href="mailto:{{ get_option('site_email') }}">{{ get_option('site_email') }}</a> <br>

                        </p>

                    </div>
                </div>
                <div id="f-box">

                    <h2>Quick Links</h2>

                    <div id="box-link">

                        <ul>
                            @foreach(fly_menu('quick-links') as $item)
                            <li><a rel="nofollow" href="{{ $item->url }}" title="{{ $item->name }}"><span class="nav"></span>{{ $item->name }}</a></li>
                            @endforeach
                        </ul>

                    </div>

                </div>
                <div id="f-box" class="journeys">

                    <h2>Indochina Tours</h2>

                    <div id="box-link">

                        <ul>
                            @foreach(fly_menu('indochina-tours') as $item)
                                <li><a rel="nofollow" href="{{ $item->url }}" title="{{ $item->name }}"><span class="nav"></span>{{ $item->name }}</a></li>
                            @endforeach

                        </ul>

                    </div>

                </div>
                <div id="f-box" class="consultants" style="margin-right:12px;float:right;width:213px">
                    <h2>Brochure Online</h2>
                    <a href="javascript:;" rel="nofollow"><img style="margin-top: 10px; display: inline;" class="lazyload brochure" src="/assets/frontend/images/brochure.jpg" width="213" height="272" original="/assets/frontend/images/brochure.jpg"></a>
                </div>
            </div>
        </div>
    </div>
    <div id="bottom-ft">
        <div class="grid-1">
            <div id="country">
                <img src="/assets/frontend/images/logo_footer.jpg" width="100%" original="/assets/frontend/images/logo_footer.jpg" style="display: inline;">
            </div>
        </div>
        <div id="bot-ft">
            <div class="grid-2">
                <div id="copy-r">All Contents of this website are © 2010 Discoverindochina.com</div>
            </div>
        </div>
    </div>
</div>

@include('partial.popup')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-modal/2.2.6/js/bootstrap-modal.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-modal/2.2.6/js/bootstrap-modalmanager.min.js"></script>
<script src="//maps.google.com/maps?file=api&amp;v=2&amp;key=AIzaSyAOK6r2qDrP56Jph6-eHaUHYr17stCRFD8" type="text/javascript"></script>
<script type="text/javascript" src="{{ frontend_asset('js/common.js') }}" defer=""></script>
<script type="text/javascript" src="{{ frontend_asset('js/jquery-ui.min.js') }}" defer=""></script>
<script type="text/javascript" src="{{ frontend_asset('js/owl.carousel.min.js') }}" defer=""></script>
<script type="text/javascript" src="{{ frontend_asset('js/jquery.flexslider-min.js') }}" defer=""></script>
<script type="text/javascript" src="{{ frontend_asset('js/suplier.js') }}" defer=""></script>
<script type="text/javascript" src="{{ frontend_asset('js/jquery.scrollbox.js') }}" defer=""></script>
<script type="text/javascript" src="{{ frontend_asset('js/jquery.selectbox-0.2.js') }}" defer=""></script>
<script type="text/javascript" src="{{ frontend_asset('js/jquery.popup.min.js') }}" defer=""></script>
<script type="text/javascript" src="{{ frontend_asset('js/jquery.mousewheel.min.js') }}" defer=""></script>
<script type="text/javascript" src="{{ frontend_asset('js/jquery.mCustomScrollbar.js') }}" defer=""></script>
<script type="text/javascript" src="{{ frontend_asset('js/jquery.lazyload.mini.js') }}" defer=""></script>
<script type="text/javascript" src="{{ frontend_asset('js/intlTelInput.js') }}" defer=""></script>
<script type="text/javascript" src="{{ frontend_asset('js/jquery.validate.js') }}" defer=""></script>
<script type="text/javascript" src="{{ frontend_asset('js/core.js') }}" defer=""></script>
<script type="text/javascript" src="{{ frontend_asset('js/jquery.tooltipster.min.js') }}" defer=""></script>
<script type="text/javascript" src="{{ frontend_asset('js/fancybox.js') }}" defer=""></script>
<script type="text/javascript" src="{{ frontend_asset('js/jquery.mixitup.js') }}" defer=""></script>
<script type="text/javascript" src="{{ frontend_asset('js/lightbox.min.js') }}" defer=""></script>
<script type="text/javascript" src="{{ frontend_asset('js/page-gallery.js') }}" defer=""></script>
@stack('footer')
</body>
</html>