<!DOCTYPE html>
<html itemscope="" itemtype="http://schema.org/WebPage" lang="vi">
	<head>
		<meta name="viewport" content="width=device-width">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>{{ (isset($title) ? $title : get_option('site_name')) }}</title>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="description" content="{{ isset($description) ? $description : get_option('site_description') }}">
        <meta name="keywords" content="{{ isset($keyworld) ? $keyworld : 'Indochina tours, Indochina tour, Indochina Private Tours, Indochina Private Tour, Private tours indochina, Vietnam tours, Cambodia tours, Laos tours, Hotels, Destinations'}}">
        <meta name="robots" content="index, follow">
        <meta name="revisit-after" content="1 day">
        <meta name="distribution" content="Global">
		<link href="/assets/frontend/themes/css/bootstrap.min.css" type="text/css" rel="stylesheet" />
		<link href="/assets/frontend/themes/css/fontawesome-all.css" type="text/css" rel="stylesheet" />
		<link href="/assets/frontend/themes/css/fa-regular.css" type="text/css" rel="stylesheet" />
		
		<link href="/assets/frontend/themes/css/animate.css" type="text/css" rel="stylesheet" />
		<link href="/assets/frontend/themes/css/datepicker.css" type="text/css" rel="stylesheet" />
		<link href="/assets/frontend/themes/css/slick.css" type="text/css" rel="stylesheet" />
		<link href="/assets/frontend/themes/css/icomoon.css" type="text/css" rel="stylesheet" />
		<link href="/assets/frontend/themes/css/step.css" type="text/css" rel="stylesheet" />
		<link href="/assets/frontend/themes/css/elegant-icons.min.css" type="text/css" rel="stylesheet" />
		<link href="/assets/frontend/themes/css/animations.css" type="text/css" rel="stylesheet" />

		<link href="/assets/frontend/themes/fancybox/jquery.fancybox.css" type="text/css" rel="stylesheet" />
		<link href="/assets/frontend/themes/fancybox/helpers/jquery.fancybox-thumbs.css" type="text/css" rel="stylesheet" />	
		
        <link href="/assets/frontend/themes/css/style.css" type="text/css" rel="stylesheet" />
        @stack('header')
	</head>

	<body>
		<header>
			<div class="header-bottom">
				<div class="container-fluid">
					<div class="row">
						<div class="col-lg-3 col-md-3 col-xs-6 md-center">
							<a class="logo" href="/" title="">
								<img src="{{ get_option('site_logo') }}" alt="" title=""/>
							</a>
						</div>
						<div class="col-lg-9 col-md-9 col-xs-6 text-right static">
							<div class="top-panel hidden-md">
								<ul class="contact">
									<li class="pop-up-header">
										<a href="#"><span class="about"></span> International Tour License:#22-053</a>
									</li>
									<li class="email">
										<a href="mailto:{{ get_option('site_email') }}"><span class="i-contact"></span>{{ get_option('site_email') }}</a>
									</li>
									<li class="cart">
							            <a href="#"><i class="fal fa-heart"></i> My shortlist</a>
							        </li>
							        <li class="account">
                            			<a href="#" class="login-window2 free_quotetour"><span>&nbsp;</span></a>
							        </li>
								</ul>
							</div>
							<nav class="main-nav">
								<ul>
                                    {{-- @foreach(fly_menu('main-menu') as $item)
                                    <li>
                                        <a class="smooth" href="{{ $item->url }}" title="">{{ $item->name }}</a>
                                        @if(count($item->children) > 0)
                                        <ul class="clearfix">
                                            @foreach($item->children as $sub)
                                            <li><a class="smooth" href="{{ $sub->url }}" title="">{{ $sub->name }}</a></li>
                                            @endforeach
                                        </ul>
                                        @endif
                                    </li>
                                    @endforeach --}}
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
								<div id="right-menu" class="hidden-md">
			                        <a id="btn-header" class="btn" href="/customized-tour.html">LET'S PLAN YOUR TRIP</a>
			                    </div>
			                    <div class="search-toggle hidden-md">
			                        <form method="get" action="">
										<input type="text" placeholder="Search" class="term" name="term">
										<button class="search-btn icon" type="submit">
                                            <span class="icon-search"></span>
                                        </button>
									</form>
			                    </div>
							</nav>
						</div>
					</div>
				</div>
			</div>
			<button class="menu-btn nav-open hidden-lg hidden-md" type="button"><i></i></button>
		</header>

		<div class="m-nav hidden-lg hidden-md">
			<button class="menu-btn act nav-close" type="button"><i></i></button>
			<div class="nav-ct"></div>
        </div>
        
		@yield('content')
		<div class="h-footer">
			<div class="container">
				<div class="row">
					<div class="col-xl-9 col-lg-8">
						<div class="img-support">
							<img src="/assets/frontend/themes/images/support.png" alt="">
						</div>
						<div class="text-content">
							<h3>Let us assist you if you couldn't find a perfect trip for you!</h3>
							<p>We love our country and know it inside and out. This enables us to create an itinerary that suits you perfectly. Please let us know your desires and interests and we will tailor the best trip for you Or send us your own preferred itinerary and we will provide the best offer.</p>
						</div>
					</div>
					<div class="col-xl-3 col-lg-4">
						<a href="#" class="action send-mail"><span class="icon-mail"></span> Send us your request</a>
					</div>
				</div>
			</div>
		</div>
		<footer>
			<div class="container">
				<div class="row row-ibl">
					<div class="col-xl-4 col-md-3 col-sm-12 col-xs-12 wow fadeInUp about">
						<div class="about-company">
							<h4 class="f-title">Contact us</h4>
							<img src="/assets/frontend/themes/images/4-logoindochina.svg" alt="" />
							<p>

                                    <b>{{ get_option('site_business_license') }}</b><br>

                                    {{ get_option('site_address') }}<br>
        
                                    Hotline: {{ get_option('site_phone') }} <br>

	                            Email1: <a href="mailto:{{ get_option('site_email') }}">{{ get_option('site_email') }}</a> <br>

	                        </p>
						</div>
					</div>
					<div class="col-xl-2 col-md-3 col-sm-4 col-xs-12 wow fadeInUp info-contact" data-wow-delay="0.2s">
						<h4 class="f-title">Quick Links</h4>
						<ul>
                            @foreach(fly_menu('quick-links') as $item)
                            <li><a class="smooth" href="{{ $item->url }}" title="{{ $item->name }}">{{ $item->name }}</a></li>
                            @endforeach
						</ul>
					</div>
					<div class="col-xl-2 col-md-3 col-sm-4 col-xs-12 wow fadeInUp info-contact" data-wow-delay="0.2s">
						<h4 class="f-title">Indochina Tours</h4>
						<ul>
                            @foreach(fly_menu('indochina-tours') as $item)
                            <li><a class="smooth" href="{{ $item->url }}" title="{{ $item->name }}">{{ $item->name }}</a></li>
                            @endforeach
						</ul>
					</div>
					<div class="col-xl-2 col-md-3 col-sm-4 col-xs-12 wow fadeInUp info-contact" data-wow-delay="0.2s">
						<h4 class="f-title">Brochure Online</h4>
						<a href="#"><img style="margin-top: 10px; display: inline;" class="lazyload brochure" src="/assets/frontend/themes/images/brochure.jpg"></a>
					</div>
				</div>
			</div>
			
		</footer>
		<div id="bottom-ft">
        <div class="container">
            <div id="country">
                <img src="/assets/frontend/themes/images/logo_footer.jpg" alt="">
            </div>
        </div>
    </div>
		<div class="foot">
			<div class="container">
				<span class="f-left">All Contents of this website are © 2010 Discoverindochina.com</span>
			</div>
		</div>
        
        @include('partial.popup')

		<script src="/assets/frontend/themes/js/jquery-2.2.1.min.js" defer></script>
		<script src="/assets/frontend/themes/js/jquery-ui.min.js" defer></script>
		
		<script src="/assets/frontend/themes/js/popper.min.js" defer></script>
		<script src="/assets/frontend/themes/js/bootstrap.min.js" defer></script>
		<script src="/assets/frontend/themes/js/bootstrap-tabcollapse.js" defer></script>
		<script src="/assets/frontend/themes/js/bootstrap-multiselect.min.js" defer></script>
		<script src="/assets/frontend/themes/js/datepicker.js" defer></script>
		<script src="/assets/frontend/themes/js/wow.js" defer></script>
		<script src="/assets/frontend/themes/js/slick.min.js" defer></script>

		<script src="/assets/frontend/themes/fancybox/jquery.fancybox.pack.js" defer></script>
		<script src="/assets/frontend/themes/fancybox/helpers/jquery.fancybox-thumbs.js" defer></script>
		
		<script src="/assets/frontend/themes/js/script.js" defer></script>
	</body>
</html>