<!DOCTYPE html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ (isset($title) ? $title : get_option('site_name')) }}</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="{{ isset($description) ? $description : get_option('site_description') }}">
    <meta name="keywords" content="{{ isset($keyworld) ? $keyworld : 'Indochina tours, Indochina tour, Indochina Private Tours, Indochina Private Tour, Private tours indochina, Vietnam tours, Cambodia tours, Laos tours, Hotels, Destinations'}}">
    <link rel="stylesheet" href="/assets/css/bootstrap.css" />
    <link rel="stylesheet" href="/assets/css/font-awesome.css" />
    <link rel="stylesheet" href="/assets/css/font-awesome.min.css" />
    <link rel="stylesheet" href="/assets/css/style.css" />
    <link rel="stylesheet" href="/assets/css/mobilenav.css" />
</head>

<body>
    <!--Search Modal -->
<div id="search-popup" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-body">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <form>
            <div class="row">
            <div class="col-md-10 col-sm-9">
              <div class="form-group">
                <input type="text" class="inputsearch" placeholder="Search...">
              </div>
              </div>
              <div class="col-md-2 col-sm-3">
              <button type="submit" class="search-btn01">Search</button>
              </div>
            </div>
        </form>
      </div>
    </div>
  </div>
</div>



<div class="bannersilder">
    
    <div class="header" data-spy="affix" data-offset-top="50">
        <nav class="navbar">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="/"> <img width="250" src="{{ get_option('site_logo') }}" alt="" /></a>
              <div class="mobilecallicons">
                <a href="#"><i class="fa fa-phone mobiconscol" aria-hidden="true"></i></a>
                <a href="#" data-toggle="modal" data-target="#search-popup"><i class="fa fa-search mobiconscol" aria-hidden="true"></i></a>
              </div>
              <div class="phoneno">
              <a href="#"><i class="fa fa-phone" aria-hidden="true"></i> CALL US : +84 902 011-200</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="#"><i class="fa fa-home" aria-hidden="true">
              </i></a>
              </div>
            </div>
            <div id="navbar" class="collapse navbar-collapse pull-right">
              <ul class="nav navbar-nav">
                
                <li>
                    <a href="#">DESTINATIONS</a>
                    <ul class="megamenu1">
                        <div class="megamenu1bg">
                            <div class="row">
                            
                                <div class="col-md-3 col-sm-3">
                                    <div class="menuwithimg">
                                    <a href="#">
                                    <img src="/assets/images/vn.jpg" alt="" />
                                    <span>Vietnam</span>
                                    </a>
                                    </div>
                                </div>
                            
                                <div class="col-md-3 col-sm-3">
                                    <div class="menuwithimg">
                                    <a href="#">
                                    <img src="/assets/images/thai.jpg" alt="" />
                                    <span>Thailand</span>
                                    </a>
                                    </div>
                                </div>
                            
                                <div class="col-md-3 col-sm-3">
                                    <div class="menuwithimg">
                                    <a href="#">
                                    <img src="/assets/images/cam.jpg" alt="" />
                                    <span>Cambodia</span>
                                    </a>
                                    </div>
                                </div>
                            
                                <div class="col-md-3 col-sm-3">
                                    <div class="menuwithimg">
                                    <a href="#">
                                    <img src="/assets/images/myama.jpg" alt="" />
                                    <span>Myanmar</span>
                                    </a>
                                    </div>
                                </div>
                            
                                <div class="col-md-3 col-sm-3">
                                    <div class="menuwithimg">
                                    <a href="#">
                                    <img src="/assets/images/indo.jpg" alt="" />
                                    <span>Indonesia</span>
                                    </a>
                                    </div>
                                </div>
                            
                                <div class="col-md-3 col-sm-3">
                                    <div class="menuwithimg">
                                    <a href="#">
                                    <img src="/assets/images/vn.jpg" alt="" />
                                    <span>lao</span>
                                    </a>
                                    </div>
                                </div>
                            
                                <div class="col-md-3 col-sm-3">
                                    <div class="menuwithimg">
                                    <a href="#">
                                    <img src="/assets/images/multi-country.jpg" alt="" />
                                    <span>Mutli-country</span>
                                    </a>
                                    </div>
                                </div>
                            
                                <div class="col-md-3 col-sm-3">
                                    <div class="menuwithimg">
                                    <a href="#">
                                    <img src="/assets/images/indo.jpg" alt="" />
                                    <span>More destinations</span>
                                    </a>
                                    </div>
                                </div>
                            
                            
                            </div>
                        </div>
                    </ul>
                </li>
               
                <li><a href="#">INTERESTS</a>
                  <ul>
                        <li><a href="#">Sub Menu</a></li>
                        <li><a href="#">Sub Menu</a></li>
                        <li><a href="#">Sub Menu</a></li>
                        <li><a href="#">Sub Menu</a></li>
                    </ul>          
                </li>
              
                <li><a href="#">TRAVEL STYLES</a>
                    <ul>
                        <li><a href="#">Sub Menu</a></li>
                        <li><a href="#">Sub Menu</a></li>
                        <li><a href="#">Sub Menu</a></li>
                        <li><a href="#">Sub Menu</a></li>
                    </ul>
                </li>
                <li><a href="#">ABOUT</a>
                    <ul>
                        <li><a href="#">Sub Menu</a></li>
                        <li><a href="#">Sub Menu</a></li>
                        <li><a href="#">Sub Menu</a></li>
                        <li><a href="#">Sub Menu</a></li>
                    </ul>
                </li>
                <li><a href="#">CONTACT</a></li>
                <li><a href="#" data-toggle="modal" data-target="#search-popup" class="searchpopup" style="margin-top:5px;"><i class="fa fa-search" aria-hidden="true"></i></a></li>
                <li class="enquirebtn"><a href="#">ENQUIRE</a></li>
                </ul>
                </li>
              </ul>
            </div><!--/.nav-collapse -->
          </div>
        </nav>
    </div>
    
    @if(request()->is('/'))
        @include('partial.slider')
    @endif

</div>

<nav id="nav-mobile" role="navigation" data-spy="affix" data-offset-top="50"> <a href="#nav-mobile" title=""><img src="/assets/images/mobilenavicon.png" border="0" alt=""  /></a>
 <a href="#" title="navigation"><img src="/assets/images/mobilenavicon.png" border="0" alt=""  /></a>
  <ul class="clearfix">    
    <li> <a class="menuopen"><span>DESTINATIONS</span></a>
          <ul>
        <li><a href="">Vietnam</a></li>
        <li><a href="">Thailand</a></li>
        <li><a href="">Cambodia</a></li>
        <li><a href="">Myanmar</a></li>
        <li><a href="">Indonesia</a></li>
        <li><a href="">lao</a></li>
        <li><a href="">Mutli-country</a></li>
        <li><a href="">More destinations</a></li>
      </ul>
        </li>
    <li> <a class="menuopen"><span>INTERESTS</span></a>
       <ul>
        <li><a href="">ACTIVE</a></li>
        <li><a href="">ARTS &amp; CRAFT</a></li>
        <li><a href="">CULINARY</a></li>
        <li><a href="">FAMILY</a></li>
        <li><a href="">CULTURE &amp; HISTORY</a></li>
        <li><a href="">PHILANTHROPY</a></li>
        <li><a href="">PHOTOGRAPHY</a></li>
        <li><a href="">ROMANCE</a></li>
        <li><a href="">SLOW JOURNEY</a></li>
        <li><a href="">WELLNESS</a></li>
      </ul>
        </li>
        
        
    <li> <a class="menuopen"><span>TRAVEL STYLES</span></a>
       <ul>
        <li><a href="">SMALL GROUP JOURNEYS</a></li>
        <li><a href="">EXPERT LED TOURS</a></li>
        <li><a href="">MICE</a></li>
        <li><a href="">CONCIERGE &amp; ASSISTANCE</a></li>
      </ul>
    </li>
        
        
    <li> <a class="menuopen"><span>ABOUT</span></a>
       <ul>
        <li><a href="">ABOUT US</a></li>
        <li><a href="">MEET THE TEAM</a></li>
        <li><a href="">TESTIMONITALS</a></li>
        <li><a href="">BROCHURES</a></li>
        <li><a href="">FAQS</a></li>
        <li><a href="">FEEDBACK</a></li>
      </ul>
    </li>
    <li><a href="">Contacts</a></li>
    <li>
        <div class="btnmenushow">
            <input type="button" value="ENQUIRE"  class="enquiremobilebtn"/>
        </div>
    </li>
  </ul>
</nav>

<div class="sidelinks">
<a href="#">WHY US</a>
<div class="sidelinks-content">
    <div class="sidemenuss">
        <ul>
            <li><img src="/assets/images/bulletpoint-side.png" border="0" alt="" /> Contact Traveller Assistance at care@mywaytravel.com (non-emergency) </li>
             <li> <img src="/assets/images/bulletpoint-side.png" border="0" alt="" /> Customer Care: +84 902 011 200 (Vietnam) </li>
             <li><img src="/assets/images/bulletpoint-side.png" border="0" alt="" /> Medical Assistance: +84 988 600 388 (Vietnam)</li>
        </ul>
    </div>
</div>
</div>

<div class="sidelinks02">
<a href="#">ASSOSTAMCE</a>
<div class="sidelinks02-content">
    <div class="sidemenuss">
        <ul>
            <li><img src="/assets/images/bulletpoint-side.png" border="0" alt="" /> Contact Traveller Assistance at care@mywaytravel.com (non-emergency) </li>
             <li><img src="/assets/images/bulletpoint-side.png" border="0" alt="" /> Customer Care: +84 902 011 200 (Vietnam) </li>
             <li><img src="/assets/images/bulletpoint-side.png" border="0" alt="" /> Medical Assistance: +84 988 600 388 (Vietnam)</li>
        </ul>
    </div>
</div>
</div>

<div class="sidelinks03">
<a href="#">ENQUIRE</a>
</div>

</div>
    @yield('content')
<div class="tailor-made-holiday">
<div class="container">
<div class="col-md-9">
<h1>TAILOR-MADE HOLIDAY</h1>
<p>Our Tailor-made holiday specialists can customise your dream escape, to suit your budget, style and your pace.</p>
</div>
<div class="col-md-3"><a href="#">PLAN YOUR TRIP</a></div>
</div>
</div>

<div class="clear"></div>
<div class="hotels">
<div class="container">
<h1>GET IN TOUCH</h1>
<h2>We love to talk travel. If you have any questions, please don't hesitate to<br> get in touch. We're here to help!</h2>

<div class="viewbtn"><a href="#">Enquire</a></div>

</div>
</div>
<div class="footer">
<div class="container">

<div class="footer-top">

<div class="footer-contact">
<h1>CONTACT US</h1>
<p>sales@thailandprivatetravel.com</p>
<div class="follow">
<h5>Follow us:</h5>
<a href="#"><i class="fa fa-facebook " aria-hidden="true "></i></a>
<a href="#"><i class="fa fa-twitter " aria-hidden="true "></i></a>
<a href="#"><i class="fa fa-pinterest " aria-hidden="true "></i></a>
<a href="#"><i class="fa fa-linkedin " aria-hidden="true "></i></a>
<a href="#"><i class="fa fa-youtube " aria-hidden="true "></i></a>
<a href="#"><i class="fa fa-instagram " aria-hidden="true "></i></a>
</div>
<div class="newslatterbox">
<h5>Subscribe to our newsletter:</h5>
<input type="email"value="" placeholder="Email Address">
<input type="submit" class="newslatterbtn" value="SUBSCRIBE">
</div>
</div>

<div class="destinations">
<h1>DESTINATIONS</h1>
<ul>
<li><a href="#">Vietnam</a></li>
<li><a href="#">Thailand</a></li>
<li><a href="#">Cambodia</a></li>
<li><a href="#">Myanmar</a></li>
<li><a href="#">Laos</a></li>
<li><a href="#">Indonesia</a></li>
</ul>
</div>

<div class="interest-links">
<h1>INTERESTS</h1>
<ul>
<li><a href="#">Active</a></li>
<li><a href="#">Philanthropy</a></li>
<li><a href="#">Arts & Crafts</a></li>
<li><a href="#">Photography</a></li>
<li><a href="#">Culinary</a></li>
<li><a href="#">Romance</a></li>
<li><a href="#">Culture & History</a></li>
<li><a href="#">Slow Journey</a></li>
<li><a href="#">Family</a></li>
<li><a href="#">Wellness</a></li>
</ul>
</div>

<div class="interest-links privatelinks">
<h1>THAILAND PRIVATE TRAVEL</h1>
<ul>
<li><a href="#">About Us</a></li>
<li><a href="#">Privacy Policy</a></li>
<li><a href="#">Careers</a></li>
<li><a href="#">Terms & Conditions</a></li>
<li><a href="#">FAQs</a></li>
<li><a href="#">Contact Us</a></li>
</ul>
</div>

</div>

<div class="footer-bottom">
<p>THAILANDPRIVATETRAVEL © 2018 | All Right Reseved</p>
<ul>
<li><a href="#"><img src="/assets/images/1.png" alt="" /></a></li>
<li><a href="#"><img src="/assets/images/2.png" alt="" /></a></li>
<li><a href="#"><img src="/assets/images/3.png" alt="" /></a></li>
<li><a href="#"><img src="/assets/images/4.png" alt="" /></a></li>
<li><a href="#"><img src="/assets/images/5.png" alt="" /></a></li>
</ul>
</div>

</div>
</div>
    {{-- <div id="wrap" class="boxed ">
        <div class="grey-bg">

            <!-- STATIC MEDIA IMAGE -->
            <div class="banner">
                <header id="nav" class="header header-1 no-transparent mobile-no-transparent affix">
                    <div class="header-wrapper">
                        <div class="container-m-30 clearfix">
                            <div class="logo-row">
                                <div class="logo-container-2">
                                    <div class="logo-2">
                                        <a href="#" class="clearfix" title="THAILAND PRIVATE TRAVEL">
                                            <div id="companyname" class="logo-img">
                                                <img src="{{ get_option('site_logo') }}" alt="" />
                                            </div>
                                            <i class="fas fa-phone phone-icon"></i>
                                            <div class="txt-header border-">
                                                
                                                <span class="rTapNumber222646" style="color:#fff;"> &nbsp;&nbsp;CALL US : {{ get_option('site_phone') }}
                                                </span>&nbsp;&nbsp;&nbsp;
                                               
                                                <a href="/" class="home-icon">
                                                    <i class="fa fa-home"></i>
                                                </a>
                                                <br/>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="nav-mobi">
                                    <i class="fas fa-phone"></i>
                                    <button id="search-button">
                                        <i class="fa fa-search search-mb"></i>
                                    </button>
                                </div>

                                <div class="menu-btn-respons-container">
                                    <button type="button" class="navbar-toggle btn-navbar collapsed" data-toggle="collapse" data-target="#main-menu .navbar-collapse">
                                        <span aria-hidden="true" class="icon_menu hamb-mob-icon"></span>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <!-- MAIN MENU CONTAINER -->
                        <div class="main-menu-container">
                            <div class="container-m-30 clearfix">
                                <!-- MAIN MENU -->
                                <div id="main-menu">
                                    <div class="navbar navbar-default" role="navigation">
                                        <!-- MAIN MENU LIST -->
                                        <nav class="collapse collapsing navbar-collapse right-1024">
                                            <ul class="nav navbar-nav">
                                                @foreach(fly_menu('main-menu') as $key => $item)
                                                <!-- MEGA MENU ITEM -->
                                                <li class="parent megamenu menu-des {{ count($item->children) > 0 ? 'travel-wrapper' : '' }} {{ $loop->iteration == 1 ? 'menu-des' : '' }} {{ $loop->iteration == 2 ? 'menu-in' : '' }}">
                                                    <a href="{{ $item->url }}">
                                                        <div class="main-menu-title">{{ $item->name }}</div>
                                                        <i class="fal fa-angle-down"></i>
                                                    </a>
                                                    @if(count($item->children) > 0)
                                                    <ul class="sub">
                                                        <li>
                                                            <div class="warp-submnu warp-submnu6 {{ $key == 0 ? 'warp-submnu6-des' : '' }}">
                                                                @foreach($item->children->chunk(4) as $subMenu)
                                                                <div class="row row-mnu6 {{ $loop->iteration != 1 ? 'row-2-menu' : '' }}">
                                                                    @foreach($subMenu as $sub)
                                                                    <div class="col-md-3">
                                                                        <a href="{{ $sub->url }}" class="warp-">
                                                                            <img src="{{ $sub->thumbnail }}">
                                                                            <div class="pd10"></div>
                                                                            <div class="txt-">
                                                                                {{ $sub->name }}
                                                                            </div>
                                                                        </a>
                                                                    </div>
                                                                    @endforeach
                                                                </div>
                                                                @endforeach
                                                            </div>
                                                        </li>
                                                    </ul>
                                                    @endif
                                                </li>
                                                @endforeach
                                                <!-- MEGA MENU ITEM -->
                                               
                                                
                                                <li class="parent megamenu li-search">
                                                    <button id="search_button">
                                                        <i class="fa fa-search search"></i>
                                                    </button>
                                                </li>

                                                <div id="myModal" class="modal">
                                                    <span class="close">&times;</span>
                                                    <form class="example" action="">
                                                        <input type="text" placeholder="Search.." name="search" class="search_input">
                                                        <button type="submit">
                                                            Search
                                                        </button>
                                                    </form>
                                                </div>
                                                <li class="border-right">
                                                    
                                                 </li>
                                                <!-- MENU ITEM -->
                                                <li class="enquire-button">
                                                    <div class="div-en" style="">
                                                        <a href="/contact-us.html" class="enquire">ENQUIRE</a>
                                                    </div>

                                                </li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                                <!-- END main-menu -->
                            </div>
                            <!-- END container-m-30 -->
                        </div>
                        <!-- END main-menu-container -->
                    </div>
                </header>
                @if(request()->is('/'))
                    @include('partial.slider')
                @endif
            </div>
        </div>

        @yield('content')

        
            <hr class="mt-0 mb-0 ">

            <!-- CLIENTS 1 & TESTIMONIALS 1 -->
            <div class="page-section grey-light-bg tailor-space">
                <div class="container ">
                    <div class="row ">
                        <div class="col-md-9 pb-30  tailor-title">
                            <h4 class="mt-0 mb-5">
                                <span class="bold ">TAILOR-MADE HOLIDAY</span>
                            </h4>
                            <span>Our Tailor-made holiday specialists can customise your dream escape, to suit your budget, style
                                and your pace.</span>
                        </div>

                        <div class="col-md-3 text-center pb-30 ">


                            <a class="button medium thin gray " href="/customized-tour.html" title="Plan your dream holiday ">PLAN YOUR TRIP</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade bootstrap-modal " id="myModal " tabindex="-1 " role="dialog " aria-labelledby="myModalLabel " aria-hidden="true "
                style="display:none ">
                <div class="modal-dialog ">
                    <div class="modal-body ">
                        <div class="modal-content ">
                            <ul id="myTab1 " class="nav nav-tabs-login ">
                                <li class="active ">
                                    <a href="# " data-toggle="tab ">LOG-IN</a>
                                </li>
                                <li>
                                    <a href="# " data-toggle="tab ">REGISTER</a>
                                </li>
                                <li class="dropdown " style="float:right;padding:0px;margin-right:0px; ">
                                    <a href="# " data-dismiss="modal " aria-hidden="true ">×</a>
                                </li>
                            </ul>

                            <div id="myTabContent " class="tab-content white-bg p-20 " style="min-height:225px ">

                                <!--SIGN-IN-->
                                <div class="tab-pane fade in active " id="signin ">
                                    <strong class="mb-20 ">Welcome! Login in to your account</strong>
                                    <br>
                                    <form id="formcheck1 " action="# " method="post " target="votar1 ">
                                        <div class="form-container ">
                                            <input type="text " name="username " id="username " data-msg-required="username? " class="controled " value=" " placeholder="USERNAME "
                                                autofocus=" " required=" ">
                                            <div class="clear "></div>
                                        </div>
                                        <div class="form-container ">
                                            <input type="password " name="password " id="password " data-msg-required="username? " class="controled " value=" " placeholder="PASSWORD "
                                                required=" ">
                                            <div class="clear "></div>
                                        </div>
                                        <a href="# " style="float:right ">Forgot your password?</a>
                                        <button class="btn-submit " style="width:130px ">
                                            <span class="btn-submit-l ">
                                                <i class="fas fa-lock "></i>
                                            </span>LOGIN
                                            <div class="clear "></div>
                                        </button>

                                        <div class="clear "></div>
                                        <input type="hidden " name="action " value="check ">
                                    </form>
                                </div>
                                <!--REGISTER-->
                                <div class="tab-pane fade " id="register ">
                                    <strong class="mb-20 ">Your Email</strong>
                                    <br>
                                    <form id="formcheck2 " action="# " method="post " target="votar2 ">
                                        <div class="form-container ">
                                            <input type="text " name="new_username " id="new_username " data-msg-required="username? " class="controled " placeholder="Your E-mail Address? "
                                                autofocus=" " required=" ">
                                            <div class="clear "></div>
                                        </div>
                                        <input type="hidden " name="order " value="check_new_username ">
                                        <button type="submit " class="button medium gray-light w-100-767 ">NEXT</button>

                                        <div class="clear "></div>
                                    </form>
                                    <iframe name="votar2 " class="none " src="# "></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade bootstrap-modal " id="Enquiry " tabindex="-1 " role="dialog " aria-labelledby="myModalLabel " aria-hidden="true "
                style="display:none ">
                <div class="modal-dialog ">
                    <div class="modal-body ">
                        <div class="modal-content ">
                            <div class="contact-form-cont ">
                                <div class="mb-20 ">
                                    <h2 class="section-title ">CONTACT
                                        <span class="bold ">FORM</span>
                                    </h2>
                                </div>
                                <!-- CONTACT FORM -->
                                <div>
                                    <form id="contact-form " action="# " method="POST " class=" ">
                                        <div class="row ">
                                            <div class="col-md-12 mb-10 ">
                                                <!-- <label>Your name *</label> -->
                                                <input type="text " value=" " data-msg-required="Please enter your name " maxlength="100 " class="controled " name="USER_NAME "
                                                    id="USER_NAME " placeholder="NAME " required=" ">
                                            </div>
                                        </div>

                                        <div class="row ">
                                            <div class="col-md-12 mb-40 ">
                                                <!-- <label>Your email address *</label> -->
                                                <input type="email " value=" " data-msg-required="Please enter your email address " data-msg-email="Please enter a valid email address "
                                                    maxlength="150 " class="controled " name="USER_EMAIL " id="USER_EMAIL " placeholder="EMAIL "
                                                    required=" ">
                                            </div>
                                        </div>

                                        <div class="row ">
                                            <div class="col-md-12 mb-10 ">
                                                <!-- <label>Your email address *</label> -->
                                                <input type="text " value="One night in Bangkok " data-msg-required="Please enter question " maxlength="200 " class="controled "
                                                    name="SUBJECT " id="SUBJECT " placeholder="TOPIC/SUBJECT " required=" ">
                                            </div>
                                        </div>

                                        <div class="row ">
                                            <div class="col-md-12 mb-10 ">
                                                <textarea maxlength="12000 " data-msg-required="Please enter your message " rows="4 " class="controled " name="QUESTION "
                                                    id="QUESTION " placeholder="MESSAGE " value=" " required=" "></textarea>
                                            </div>
                                        </div>

                                        <div class="row ">
                                            <div class="col-md-12 mb-20 ">
                                                <div class="mycapt ">
                                                    <input type="text " name="capt " id="capt " placeholder="SECURITY CODE " data-msg-required="Please enter security code "
                                                        class="controled " onkeypress="return isNumberKey(event) " onchange="javascript:this.value=this.value.toUpperCase(); "
                                                        required=" ">
                                                    <div>
                                                        <img src="#" id="mycapt " align="absmiddle " style="margin:0px ">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row ">
                                            <div class="col-md-12 text-right ">
                                                <button type="submit " class="button medium gray ">SEND MESSAGE</button>
                                            </div>
                                        </div>
                                        <input type="hidden " name="order " value="sent_enquiry ">
                                        <input type="hidden " name="URL " value="# ">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- FOOTER -->
            <footer>
                <div class="container ">
                    <div class="row ">
                        <div class="col-sm-5">
                            <div class="row ">
                                <div class="col-sm-7">
                                    <div class="footer1 links ">
                                        <h3>Contact Us</h3>
                                        <p>sales@thailandprivatetravel.com</p>
                                        <h6 style="color:white">Follow us:</h6>
                                        <ul class="footer-social ">

                                            <li>
                                                <a href="# ">
                                                    <i class="fa fa-facebook " aria-hidden="true "></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="# ">
                                                    <i class="fa fa-twitter " aria-hidden="true "></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="# ">
                                                    <i class="fa fa-pinterest " aria-hidden="true "></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="# ">
                                                    <i class="fa fa-linkedin " aria-hidden="true "></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="# ">
                                                    <i class="fa fa-youtube " aria-hidden="true "></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="# ">
                                                    <i class="fa fa-instagram " aria-hidden="true "></i>
                                                </a>
                                            </li>


                                        </ul>

                                        <div class="subscribe ">
                                            <p>Subscribe to our newsletter:</p>
                                            <form action="# ">
                                                <input type="text " name=" " placeholder="E-Mail Address ">
                                                <br>

                                                <button type="button " class="footer-subscribe ">SUBSCRIBE</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-5">
                                    <div class="footer1 des">
                                        <h3>Destinations</h3>
                                        <ul>
                                            <li>
                                                <a href="# ">Vietnam</a>
                                            </li>
                                            <li>
                                                <a href="# ">Thailand</a>
                                            </li>
                                            <li>
                                                <a href="# ">Cambodia</a>
                                            </li>
                                            <li>
                                                <a href="# ">Myanmar</a>
                                            </li>
                                            <li>
                                                <a href="# ">Laos</a>
                                            </li>
                                            <li>
                                                <a href="# ">Indonesia</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-7 ">
                            <div class="row ">
                                <div class="col-sm-6">
                                    <div class="footer1 inter">
                                        <h3>Interests</h3>
                                        <div class="row ">
                                            <div class="col-sm-5">
                                                <ul>
                                                    <li>
                                                        <a href="# ">Active</a>
                                                    </li>
                                                    <li>
                                                        <a href="# ">Arts & Crafts</a>
                                                    </li>
                                                    <li>
                                                        <a href="# ">Culinary</a>
                                                    </li>
                                                    <li>
                                                        <a href="# ">Culture & History</a>
                                                    </li>
                                                    <li>
                                                        <a href="# ">Family</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-sm-6">
                                                <ul>
                                                    <li>
                                                        <a href="# ">Philanthropy</a>
                                                    </li>
                                                    <li>
                                                        <a href="# ">Photography</a>
                                                    </li>
                                                    <li>
                                                        <a href="# ">Romance</a>
                                                    </li>
                                                    <li>
                                                        <a href="# ">Slow Journey</a>
                                                    </li>
                                                    <li>
                                                        <a href="# ">Wellness</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 ">
                                    <div class="footer1 footer-last">
                                        <h3>THAILAND PRIVATE TRAVEL</h3>
                                        <div class="row ">
                                            <div class="col-sm-5">
                                                <ul>
                                                    <li>
                                                        <a href="# ">About Us</a>
                                                    </li>
                                                    <li>
                                                        <a href="# ">Careers</a>
                                                    </li>
                                                    <li>
                                                        <a href="# ">FAQs</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-sm-6">
                                                <ul>
                                                    <li>
                                                        <a href="# ">Privacy Policy</a>
                                                    </li>
                                                    <li>
                                                        <a href="# ">Terms & Conditions</a>
                                                    </li>
                                                    <li>
                                                        <a href="# ">Contact Us</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
            <section class="copyright ">
                <div class="container " style="padding-top: 1%;">
                    <p>THAILANDPRIVATETRAVEL © 2018 | All Right Reseved</p>
                </div>
                <div class="footer-logo">
                    <img src="/assets/frontend/content/images/1.png" />
                    <img src="/assets/frontend/content/images/2.png" />
                    <img src="/assets/frontend/content/images/3.png" />
                    <img src="/assets/frontend/content/images/4.png" class="four-logo" />
                    <img src="/assets/frontend/content/images/5.png" class="last-logo" />
                </div>
        </div>
        </section>
        <!-- BACK TO TOP -->
        <p id="back-top " style="display: block; ">
            <a href="#/#top " title="Back to Top ">
                <span class="icon icon-arrows-up "></span>
            </a>
        </p>
    </div> --}}
    <!-- End BG -->
    {{-- </div> --}}
    <!-- Hot link -->
    {{-- <div class="hotlink-wrapper hidden-xs"> --}}
        {{-- <div id="slideout">
            <div class="xoay">
                <a href="#" id="about">WHY US</a>
            </div>
            <div id="slideout_inner">
                {!! get_option('why-us-right-side-bar') !!}
            </div>
        </div> --}}

       {{--  <div id="slideout2">
            <div class="xoay">
                <a href="#" id="blog">ASSISTANCE</a>
            </div>
            <div id="slideout_inner2">
                <img src="https://www.trailsofindochina.com/wp-content/themes/trailsofindochina/dist/images/bulletpoint-side.png" alt="">
                <span> Contact Traveller Assistance at care@trailsofindochina.com (non-emergency)</span>
                <br>
                <img src="https://www.trailsofindochina.com/wp-content/themes/trailsofindochina/dist/images/bulletpoint-side.png" alt="">
                <span> Customer Care: +84 918 71 3456 (Vietnam)</span>
                <br>
                <img src="https://www.trailsofindochina.com/wp-content/themes/trailsofindochina/dist/images/bulletpoint-side.png"
                    alt="">
                <span> Medical Assistance: +84 28 3811 4881 (Vietnam)</span>
             
                <br/>
            </div>
        </div> --}}

        {{-- < div id="slideout2">
            <div class="xoay">
                <a href="/contact-us.html" id="projects">ENQUIRE</a>
            </div>
        </div> --}}

        <!-- <div id="mySidenav" class="sidenav">
        <div id="about">
            <a href="#" id="about">Why Us</a>
            <div class="">
                <div class="">
                    <img src="https://www.trailsofindochina.com/wp-content/themes/trailsofindochina/dist/images/bulletpoint-side.png" alt=""><span> Contact Traveller Assistance at care@trailsofindochina.com (non-emergency)</span>
                    <br><img src="https://www.trailsofindochina.com/wp-content/themes/trailsofindochina/dist/images/bulletpoint-side.png" alt=""><span> Customer Care: +84 918 71 3456 (Vietnam)</span>
                    <br><img src="https://www.trailsofindochina.com/wp-content/themes/trailsofindochina/dist/images/bulletpoint-side.png" alt=""><span> Medical Assistance: +84 28 3811 4881 (Vietnam)</span>
                </div>
            </div>
        
        <a href="#" id="blog">Assistance</a>
        <a href="#" id="projects">ENQUIRE</a>
      </div> -->

    {{-- </div> --}}
   
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript" src="/assets/js/bootstrap.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="/assets/js/agency.min.js"></script>
    <script type="text/javascript">
    $(document).ready(function(){
        $(".tophead").affix({
            offset: { 
                top: $(".headernavshow").outerHeight(true)
            }
        });
    });
    </script>

    <script>
    $(document).ready(function () {
      var trigger = $('.hamburger'),
          overlay = $('.overlay'),
         isClosed = false;

        trigger.click(function () {
          hamburger_cross();      
        });

        function hamburger_cross() {

          if (isClosed == true) {          
            overlay.hide();
            trigger.removeClass('is-open');
            trigger.addClass('is-closed');
            isClosed = false;
          } else {   
            overlay.show();
            trigger.removeClass('is-closed');
            trigger.addClass('is-open');
            isClosed = true;
          }
      }
      
      $('[data-toggle="offcanvas"]').click(function () {
            $('#wrapper').toggleClass('toggled');
      });  
      
      $(".menuopen").on("click", function(){
      $(".menuopen").not(this).parent().find('ul').hide();
       $(this).parent().find('ul').slideToggle();
    });
    });
    </script>
</body>

</html>