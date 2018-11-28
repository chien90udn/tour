@extends('layouts.frontend')

@section('content')
<br clear="all">
<div id="main-banner">
    <div id="slide-home">
        <div class="slider">
            <div class="flexslider">
                <ul class="slides">
                    @foreach(get_option('home-slider') as $slider)
                    <li><a href="{{ @$slider['link'] }}" title=""><img src="{{ @$slider['url'] }}"/></a></li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>

@include('partial.search_home')

<div id="about-me">
    <div class="grid-1">
        <div id="scroll-tours">
            <div id="owl-demo7">
                @foreach(get_option('member-slider') as $slider)
                <div class="item">
                    <div id="slide-des">
                        <a href="{{ @$slider['link'] }}"><img src="{{ @$slider['url'] }}" width="90" height="90"/> </a>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="customNavigation9">
                <a class="btn9 prev9 btn-primary"><i class="fa fa-angle-left fa-5x"></i></a>
                <a class="btn9 next9 btn-primary"><i class="fa fa-angle-right fa-5x"></i></a>
            </div>
        </div>
        <div class="title-about-home">
            <h2>{{ get_option('title-about-home') }}</h2>
        </div>
    </div>
</div>
<div id="main-why" class="main_why">
    <div class="grid-1">
        {!!  get_option('main-why') !!}
    </div>
</div>
<div id="icon-down">
    <a href="javascript:;" class="view-us" onclick="show_with_us();">
        <p><b>Why travel with us</b></p>
        <span class="icon-us fa-stack fa-lg">
            <i class="fa fa-circle-thin fa-stack-2x"></i>
            <i class="fa fa-angle-down fa-stack-1x"></i>
        </span>
    </a>
</div>
<div id="with-us" style="display: none;"><div class="line-home">
    <span></span>
    <p class="text-line-home">Why travel with us</p>
 </div>
 <div class="grid-1">
    <div id="main-slogan2">
       <div id="box-slogan2">
            <a href="javascript:;">
               <span class="plexible"></span>
               <h2>Local &amp; Knowledge</h2>
               <p>Proud to be the locals, we live, breathe and travel in our land. To be local tour Operator Company working many years in tourism of Indochina; with widely and deeply knowledge about our homeland (history, culture, geography...) all the tours that we are offering, are the things we have experienced and gained the excellent feedback from the customers. We are proudly to help you get the authentic &amp; unique experiences.</p>
            </a>
       </div>
       <div id="box-slogan2">
            <a href="javascript:;">
               <span class="unique"></span>
               <h2>Authentic &amp; Unique</h2>
               <p>Being the locals, we know what the best of Indochina is. We are passionate travel experts and are happy to share the best of experiences with you.  We love discovering new places, new experiences, and making them accessible to you. In a way that suits your needs. Our purpose is to create something completely unique for you, wherever you want to travel to, however you want to do it. </p>
            </a>
       </div>
       <div id="box-slogan2">
            <a href="javascript:;">
               <span class="authentic"></span>
               <h2>Private &amp; Flexibility</h2>
               <p>We can do it all. We’re flexible and we know how to make planning easy for you. Our professional team will always listen and arrange everything as your desire. Whatever your travel preference is beach, cultural &amp; history, culinary... Everything is tailored to your exact needs and tastes. We’re here to take the stress out of the holiday planning process. Private car, Private Guide It's absolutely flexible to your trip...</p>
            </a>
       </div>
       <div id="box-slogan2">
            <a href="javascript:;">
               <span class="best-value"></span>
               <h2>Best Value &amp; Best Price</h2>
               <p>Customer's satisfaction is the biggest goal and inspiration in our career. We always try our best to deliver as much pleasure as possible to every single tourist. We respect every $ you paid; and we commit to bring the best travel experience which deserves your paid. Thanks to excellent relationship with supplier, our own private car and guide, as travelling with us you will have better quality service at a cheaper price. </p>
            </a>
       </div>
    </div>
 </div>
 <div id="icon-down-in">
  <a href="javascript:;" class="view-us">
       <span class="icon-us"><i class="fa fa-angle-down fa-3x"></i></span>
       <p><b>How we work</b></p>  
  </a>
 </div>
          
 <div id="we-word" style="display: none;">
    <div class="line-we-work">
          <span></span>
          <p class="text-line-home">How we work</p>
    </div>
    <div class="grid-1">  
       <div class="content" style="margin-top: 30px;">
          <span>1</span><br>
          <font>Send us your request</font>
          <p>Please kindly send us whatever about your trip:  date, itinerary, destinations or anything you are interested in. We’re there to inspire you with ideas on where and when to travel.</p>
       </div>
       <div class="content">
          <span>2</span><br>
          <font>Discuss your needs</font>
          <p>Base on your request, your personal travel expert will send you the best proposal and until it fits your needs.</p>
       </div>
       <div class="content">
          <span>3</span><br>
          <font>Perfecting your itinerary</font>
          <p>We’ll build your itinerary from scratch and tweak things until it’s completely perfect. You agree to the final proposal and pay a small amount of deposit.</p>
       </div>
       <div class="content">
          <span>4</span><br>
          <font>The final extras</font>
          <p>With the perfect itinerary, we’ll start to book every element of your trip: the flights, the hotels and the experiences… If you want to change anything of your trip, we’ll continue to be flexible and adjust everything until it’s exactly what you want.</p>
       </div>
       <div class="content">
          <span>5</span><br>
          <font>Enjoy your trip and we are always by your side</font>
          <p>All you need to do now is enjoying your trip and you always have our 24/7 hotline support in case you need any urgent assistance. We are local people; we are always here to support you 24/7.</p>
       </div>
       <div id="icon-down">
           <a href="javascript:;" class="view-us view-down">
                <span class="icon-us"><i class="fa fa-angle-down fa-3x"></i></span>
                <p>Let The Journey Begin</p>
                
           </a>
       </div>
    </div>
 </div>
 @push('footer')
 <script type="text/javascript">
       $(document).ready(function(){

            $('#we-word').hide();
            $('#icon-down-in').click(function(){
                $('#we-word').toggle();
            });  

            $('.view-down').click(function(){
                $('html,body').animate({
                    scrollTop: $("#best-month").offset().top
                }, 'slow');
            });
       });
</script>
@endpush
</div>
<br clear="all">
<div id="best-month">
    <div class="grid-1">
        <div id="title-line">
            <div class="icon-best"></div>
            <div class="icon-indochina-best"><a href="/tours/indochina/" title="Indochina tours"><img src="./assets/frontend/images/icon-top10-dcv.svg"></a></div>
            <h2>{{ get_option('best-month') }}<span class="line"></span></h2>
            {!! get_option('best-month-description') !!}
        </div>
    </div>
    <div class="grid-1">
        @foreach(get_list_tours(2,43,true,'featured') as $tour)
        <div id="special-tour">
            <div id="img-cruise">
                <a title="{{ @$tour->name }}" href="{{ route('tours.show',@$tour->name_link) }}"><img src="{{ @$tour->photo }}" alt="" class="lazyload" /></a>
                <div class="gradient-st">
                    <a href="{{ route('tours.show',@$tour->name_link) }}" title="{{ @$tour->name }}">&nbsp;</a>
                </div>
                <a href="{{ route('tours.show',@$tour->name_link) }}" title="{{ @$tour->name }}" id="title-tours">{{ @$tour->name }}</a>
                <span class="best-seller"></span>
                <a class="heart-tour tooltip tooltipstered" rel="nofollow" id="love_tour50" onclick="love_tour(50)" href="javascript:;"><i class="fa fa-heart-o"></i></a>
            </div>

            <div id="txt-cruise">
                <div id="itinerary">
                    <div id="days">{{ @$tour->duration }} <font class="day">Days</font></div>
                </div>
                <div id="destinations">
                    {!! get_route(@$tour->route) !!}
                </div>
                <p>{{ strip_tags(str_limit(@$tour->description,220)) }}</p>

                <div id="price">
                    <div id="right-styletour">
                        {!! get_styletour(@$tour->experience) !!}
                    </div>
                    @if(@$tour->price > 0)
                    <div id="price-tour">Only From {!! get_price(@$tour->price,@$tour->discount) !!}</div>
                    @endif
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
<div id="main-besttours">
    <div class="grid-1">
        <div id="title-line">
            <h2>Popular Indochina Tours<span class="line"></span></h2>
        </div>
        <div id="scroll-tours">
            <div id="box-best-tour">
                @foreach(get_list_tours(5,43,true,'featured') as $tour)
                    @if($loop->iteration > 2)
                    <div class="item">
                    <div id="box-tour">
                        <div class="alink">
                            <div id="img-tour">
                                <a href="{{ route('tours.show',@$tour->name_link) }}" title="{{ @$tour->name }}"><img src="{{ @$tour->photo }}" class="lazyload" original="{{ @$tour->photo }}" style="display: block;"></a>
                                <div id="title-tour">
                                    <h2 style="text-align:center"><a href="{{ route('tours.show',@$tour->name_link) }}" title="{{ @$tour->name }}">{{ @$tour->name }}</a></h2>
                                </div>
                                <span class="best-seller"></span>
                                <a class="heart-tour tooltip tooltipstered" rel="nofollow" id="love_tour50" onclick="love_tour(50)" href="javascript:;"><i class="fa fa-heart-o"></i></a>            </div>
                            <div id="txt-tour">
                                <span class="i-nav"></span>
                                <div id="price-tour">{{ @$tour->duration }} DAYS </div>
                                <p>{{ strip_tags(str_limit(@$tour->description,80)) }}</p>
                                <br clear="all">
                                <a href="{{ route('tours.show',@$tour->name_link) }}" title="{{ @$tour->name }}"><span class="bt-detail">More Info</span></a>
                            </div>
                        </div>
                    </div>
                </div>
                    @endif
                @endforeach
            </div>
        </div>
        <div class="view-tour">
            <a href="/tours/indochina/" title="Indochina Tours" class="bt-more-tourhome">View All Indochina Tours »</a>
        </div>
    </div>
</div>
<br clear="all">
<div class="step-home">
    <div class="grid-1">
        <div id="title-line1">
            <h2>Best tailor made tours for you</h2>
        </div>
    </div>
</div>
<div id="main-tailormade">
    <section id="questionnaire" class="step-1" data-current-step="1">
        <img src="./assets/frontend/images/selected.png" width="265" height="142" alt="" id="selected-img">
        <form method="post" action="/" onsubmit="return validate_home_form()">
            <input type="hidden" id="questionnaire_nonce" name="questionnaire_nonce" value="8577cc3120"><input type="hidden" name="_wp_http_referer" value="/"> <input type="hidden" name="caller" value="home">
            <div class="slider-wrap-nav">
                <div class="extension-left">&nbsp;</div>
                <div class="extension-right">&nbsp;</div>
                <ul class="slider-nav">
                    <li class="step-1 active" data-step="1"><a href="#">Step 1<span>: <span>Select </span>Destinations</span></a></li>
                    <li class="step-2" data-step="2"><a href="#">Step 2<span>: <span>Choose </span>Your Style</span></a></li>
                    <li class="step-3" data-step="3"><a href="#">Step 3<span>: <em>Fill in </em>the Details</span></a></li>
                </ul>
            </div>
            <div class="slider-wrap slideLeft">
                <div class="slider-stage">
                    <div class="slides">
                        <div class="slide slide-1">
                            <article>
                                <figure>
                                    <a href="#"><img class="lazyload" src="./assets/frontend/images/vietnam(1).jpg" width="265" height="142" alt="Vietnam" original="./assets/frontend/images/vietnam(1).jpg" style="display: inline;"></a>
                                </figure>
                                <label>
                                    <input type="checkbox" name="check_cat[]" value="Vietnam" class="checkbox_cat">
                                    Vietnam
                                </label>
                            </article>
                            <article>
                                <figure>
                                    <a href="#"><img class="lazyload" src="./assets/frontend/images/cambodia(1).jpg" width="265" height="142" alt="Cambodia" original="./assets/frontend/images/cambodia(1).jpg" style="display: inline;"></a>
                                </figure>
                                <label>
                                    <input type="checkbox" name="check_cat[]" value="Cambodia" class="checkbox_cat">
                                    Cambodia
                                </label>
                            </article>
                            <article>
                                <figure>
                                    <a href="#"><img class="lazyload" src="./assets/frontend/images/laos(1).jpg" width="265" height="142" alt="Laos" original="./assets/frontend/images/laos(1).jpg" style="display: inline;"></a>
                                </figure>
                                <label>
                                    <input type="checkbox" name="check_cat[]" value="Laos" class="checkbox_cat">
                                    Laos
                                </label>
                            </article>
                            <article>
                                <figure>
                                    <a href="#"><img class="lazyload" src="./assets/frontend/images/myanmar(1).jpg" width="265" height="142" alt="Myanmar" original="./assets/frontend/images/myanmar(1).jpg" style="display: inline;"></a>
                                </figure>
                                <label>
                                    <input type="checkbox" name="check_cat[]" value="Myanmar" class="checkbox_cat">
                                    Myanmar
                                </label>
                            </article>
                            <article>
                                <figure>
                                    <a href="#"><img class="lazyload" src="./assets/frontend/images/thailand(1).jpg" width="265" height="142" alt="Thailand" original="./assets/frontend/images/thailand(1).jpg" style="display: inline;"></a>
                                </figure>
                                <label>
                                    <input type="checkbox" name="check_cat[]" value="Thailand" class="checkbox_cat">
                                    Thailand
                                </label>
                            </article>
                            <article>
                                <figure>
                                    <textarea name="other_destination" id="other_destination" placeholder="Hanoi, Halong bay, Siem Reap, Luang Prabang, Yangon, Bagan..."></textarea>
                                </figure>
                                <label>
                                    <input type="checkbox" name="check_cat[]" value="Specified Destinations">
                                    Specified Destinations
                                </label>
                            </article>
                        </div>
                        <div class="slide slide-2">
                            <article>
                                <figure>
                                    <a href="#"><img src="./assets/frontend/images/Cultures-Heritages.jpg" width="265" height="142" alt="Cultures &amp; Heritages"></a>
                                </figure>
                                <label>
                                    <input type="checkbox" name="check[]" value="Cultures | Heritage" class="checkbox_tour">
                                    Cultures &amp; Heritages
                                </label>
                            </article>
                            <article>
                                <figure>
                                    <a href="#"><img src="./assets/frontend/images/Beach-Relaxation.jpg" width="265" height="142" alt="Beach &amp; Relaxation"></a>
                                </figure>
                                <label>
                                    <input type="checkbox" name="check[]" value="Beach | Relaxation" class="checkbox_tour">
                                    Beach &amp; Relaxation
                                </label>
                            </article>
                            <article>
                                <figure>
                                    <a href="#"><img src="./assets/frontend/images/Nature-Wildlife.jpg" width="265" height="142" alt="Nature &amp; Wildlife"></a>
                                </figure>
                                <label>
                                    <input type="checkbox" name="check[]" value="Nature | Wildlife" class="checkbox_tour">
                                    Nature &amp; Wildlife
                                </label>
                            </article>
                            <article>
                                <figure>
                                    <a href="#"><img src="./assets/frontend/images/Cruise-Journeys.jpg" width="265" height="142" alt="Cruise Journeys"></a>
                                </figure>
                                <label>
                                    <input type="checkbox" name="check[]" value="Cruise Journeys" class="checkbox_tour">
                                    Cruise Journeys
                                </label>
                            </article>
                            <article>
                                <figure>
                                    <a href="#"><img src="./assets/frontend/images/Adventure-activities.jpg" width="265" height="142" alt="Adventure Activities"></a>
                                </figure>
                                <label>
                                    <input type="checkbox" name="check[]" value="Adventure Activities">
                                    Adventure Activities
                                </label>
                            </article>
                            <article>
                                <figure>
                                    <textarea name="other_interests" id="other_interests" placeholder="Trekking, Walking, Biking..."></textarea>
                                </figure>
                                <label>
                                    <input type="checkbox" name="check_cat[]" value="Other Interests">
                                    Other Interests
                                </label>
                            </article>
                        </div>
                        <div class="slide slide-3">
                            <div id="step-form" class="form">
                                <div class="col-left">
                                    <div class="field adjust-field">
                                        <select class="dropper" name="tour" id="tour_sel">
                                            <option value="Economy">Economy #3 Star Hotels</option>
                                            <option value="Deluxe">Deluxe #4 Star Hotels</option>
                                            <option value="Luxury">Luxury #5 Star Hotels</option>
                                        </select>
                                    </div>
                                    <input type="text" id="datepicker" name="datepicker" class="input-text date" placeholder="Select Approx Start Date">
                                    <input type="text" id="text_name" name="text_name" class="input-text" placeholder="Enter # Your Trip Length">
                                    <textarea id="info_contact" name="info_contact" placeholder="Any notes or special requests?" class="mobile-hide"></textarea>
                                </div>
                                <div class="col-right">
                                    <input type="text" name="name_contact" id="name_contact" class="input-text" placeholder="Full Name *">
                                    <input type="text" name="email_contact" id="email_contact" class="input-text" placeholder="Email Address *">
                                    <input type="tel" id="phone_contact" name="phone_contact" class="input-text" />
                                    <select name="country" id="country_step" class="required">
                                        <option value="0">-- Country *--</option>
                                        <option value="Australia">Australia</option><option value="United Kingdom">United Kingdom</option><option value="United States">United States</option><option value="Canada">Canada</option><option value="NewZealand">NewZealand</option><option value="France">France</option><option value="Italy">Italy</option><option value="Germany">Germany</option><option value="Spain">Spain</option><option value="Singapore">Singapore</option><option value="Afghanistan">Afghanistan</option><option value="Albania">Albania</option><option value="Algeria">Algeria</option><option value="American Samoa">American Samoa</option><option value="Argentina">Argentina</option><option value="Austria">Austria</option><option value="Azerbaijan">Azerbaijan</option><option value="Bangladesh">Bangladesh</option><option value="Barbados">Barbados</option><option value="Belarus">Belarus</option><option value="Belgium">Belgium</option><option value="Belize">Belize</option><option value="Benin">Benin</option><option value="Bermuda">Bermuda</option><option value="Bhutan">Bhutan</option><option value="Bolivia">Bolivia</option><option value="Botswana">Botswana</option><option value="Bouvet">Bouvet</option><option value="Brazil">Brazil</option><option value="Brunei Darussalam">Brunei Darussalam</option><option value="Bulgaria">Bulgaria</option><option value="BurkinaFaso">BurkinaFaso</option><option value="Burundi">Burundi</option><option value="ByelorussianSSR">ByelorussianSSR</option><option value="Cambodia">Cambodia</option><option value="Cameroon">Cameroon</option><option value="CapeVerde">CapeVerde</option><option value="Cayman Islands">Cayman Islands</option><option value="Centra lAfrican">Centra lAfrican</option><option value="Chad">Chad</option><option value="Chile">Chile</option><option value="China">China</option><option value="Colombia">Colombia</option><option value="Comoros">Comoros</option><option value="Congo">Congo</option><option value="Cook Islands">Cook Islands</option><option value="CostaRica">CostaRica</option><option value="Coted Ivoire">Coted Ivoire</option><option value="Croatia">Croatia</option><option value="Cuba">Cuba</option><option value="Cyprus">Cyprus</option><option value="Czech">Czech</option><option value="Czechoslovakia">Czechoslovakia</option><option value="Denmark">Denmark</option><option value="Djibouti">Djibouti</option><option value="Dominica">Dominica</option><option value="Dominican">Dominican</option><option value="EastTimor">EastTimor</option><option value="Ecuador">Ecuador</option><option value="Egypt">Egypt</option><option value="ElSalvador">ElSalvador</option><option value="England">England</option><option value="Equatorial Guinea">Equatorial Guinea</option><option value="Eritrea">Eritrea</option><option value="Estonia">Estonia</option><option value="Ethiopia">Ethiopia</option><option value="Falkland">Falkland</option><option value="Faroe">Faroe</option><option value="Fiji">Fiji</option><option value="Finland">Finland</option><option value="Gabon">Gabon</option><option value="Gambia">Gambia</option><option value="Georgia">Georgia</option><option value="Ghana">Ghana</option><option value="Gibraltar">Gibraltar</option><option value="Great Britain">Great Britain</option><option value="Greece">Greece</option><option value="Greenland">Greenland</option><option value="Grenada">Grenada</option><option value="Guadeloupe">Guadeloupe</option><option value="Guam">Guam</option><option value="Guatemela">Guatemela</option><option value="Guernsey">Guernsey</option><option value="Guiana">Guiana</option><option value="Guinea">Guinea</option><option value="Guinea-Bissau">Guinea-Bissau</option><option value="Guyana">Guyana</option><option value="Haiti">Haiti</option><option value="Heard">Heard</option><option value="Honduras">Honduras</option><option value="HongKong">HongKong</option><option value="Hungary">Hungary</option><option value="Iceland">Iceland</option><option value="India">India</option><option value="Indonesia">Indonesia</option><option value="Iran">Iran</option><option value="Iraq">Iraq</option><option value="Ireland">Ireland</option><option value="IsleOfMan">IsleOfMan</option><option value="Israel">Israel</option><option value="Jamaica">Jamaica</option><option value="Japan">Japan</option><option value="Jersey">Jersey</option><option value="Jordan">Jordan</option><option value="Kazakhstan">Kazakhstan</option><option value="Kenya">Kenya</option><option value="Kiribati">Kiribati</option><option value="South Korea">South Korea</option><option value="North Korea">North Korea</option><option value="Kuwait">Kuwait</option><option value="Kyrgyzstan">Kyrgyzstan</option><option value="Lao">Lao</option><option value="Latvia">Latvia</option><option value="Lebanon">Lebanon</option><option value="Lesotho">Lesotho</option><option value="Liberia">Liberia</option><option value="Libya">Libya</option><option value="Liechtenstein">Liechtenstein</option><option value="Lithuania">Lithuania</option><option value="Luxembourg">Luxembourg</option><option value="Macau">Macau</option><option value="Macedonia">Macedonia</option><option value="Madagascar">Madagascar</option><option value="Malawi">Malawi</option><option value="Malaysia">Malaysia</option><option value="Maldives">Maldives</option><option value="Mali">Mali</option><option value="Malta">Malta</option><option value="Mariana">Mariana</option><option value="Marshall">Marshall</option><option value="Martinique">Martinique</option><option value="Mauritania">Mauritania</option><option value="Mauritius">Mauritius</option><option value="Mayotte">Mayotte</option><option value="Mexico">Mexico</option><option value="Micronesia">Micronesia</option><option value="Moldova">Moldova</option><option value="Monaco">Monaco</option><option value="Mongolia">Mongolia</option><option value="Montserrat">Montserrat</option><option value="Morocco">Morocco</option><option value="Mozambique">Mozambique</option><option value="Myanmar">Myanmar</option><option value="Namibia">Namibia</option><option value="Nauru">Nauru</option><option value="Nepal">Nepal</option><option value="Netherlands">Netherlands</option><option value="NeutralZone">NeutralZone</option><option value="NewCaledonia">NewCaledonia</option><option value="Nicaragua">Nicaragua</option><option value="Niger">Niger</option><option value="Nigeria">Nigeria</option><option value="Niue">Niue</option><option value="Norfolk Island">Norfolk Island</option><option value="Northern Ireland">Northern Ireland</option><option value="Norway">Norway</option><option value="Oman">Oman</option><option value="Pakistan">Pakistan</option><option value="Palau">Palau</option><option value="Panama">Panama</option><option value="Papua New Guinea">Papua New Guinea</option><option value="Paraguay">Paraguay</option><option value="Peru">Peru</option><option value="Philippines">Philippines</option><option value="Pitcairn">Pitcairn</option><option value="Poland">Poland</option><option value="Polynesia">Polynesia</option><option value="Portugal">Portugal</option><option value="PuertoRico">PuertoRico</option><option value="Qatar">Qatar</option><option value="Reunion">Reunion</option><option value="Romania">Romania</option><option value="Russian">Russian</option><option value="Rwanda">Rwanda</option><option value="SaintHelena">SaintHelena</option><option value="SaintKitts">SaintKitts</option><option value="SaintLucia">SaintLucia</option><option value="SaintPierre">SaintPierre</option><option value="SaintVincent">SaintVincent</option><option value="Samoa">Samoa</option><option value="SanMarino">SanMarino</option><option value="SaudiArabia">SaudiArabia</option><option value="Scotland">Scotland</option><option value="Senegal">Senegal</option><option value="Seychelles">Seychelles</option><option value="SierraLeone">SierraLeone</option><option value="Slovakia">Slovakia</option><option value="Slovenia">Slovenia</option><option value="Solomon">Solomon</option><option value="Somalia">Somalia</option><option value="South Africa">South Africa</option><option value="South Georgia">South Georgia</option><option value="SriLanka">SriLanka</option><option value="Sudan">Sudan</option><option value="Suriname">Suriname</option><option value="Svalbard">Svalbard</option><option value="Swaziland">Swaziland</option><option value="Sweden">Sweden</option><option value="Switzerland">Switzerland</option><option value="Syrian Arab">Syrian Arab</option><option value="Taiwan">Taiwan</option><option value="Tajikista">Tajikista</option><option value="Tanzania">Tanzania</option><option value="Thailand">Thailand</option><option value="Togo">Togo</option><option value="Tokelau">Tokelau</option><option value="Tonga">Tonga</option><option value="Trinidad and Tobago">Trinidad and Tobago</option><option value="Tunisia">Tunisia</option><option value="Turkey">Turkey</option><option value="Turkmenistan">Turkmenistan</option><option value="Turksand Caicos">Turksand Caicos</option><option value="Tuvalu">Tuvalu</option><option value="Uganda">Uganda</option><option value="Ukraine">Ukraine</option><option value="UAE">UAE</option><option value="Uruguay">Uruguay</option><option value="Uzbekistan">Uzbekistan</option><option value="Vanuatu">Vanuatu</option><option value="Vatican">Vatican</option><option value="Venezuela">Venezuela</option><option value="Vietnam">Vietnam</option><option value="Virgin">Virgin</option><option value="Wales">Wales</option><option value="Western Sahara">Western Sahara</option><option value="Yemen">Yemen</option><option value="Yugoslavia">Yugoslavia</option><option value="Zaire">Zaire</option><option value="Zambia">Zambia</option><option value="Zimbabwe">Zimbabwe</option><option value="other...">other...</option></select>
                                    <div id="g-people">
                                    </div>
                                    <select name="adults" id="adults" class="required">
                                        <option value="1000">-- Adults --</option>
                                        <option value="0">0</option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option></select>
                                    <select name="childrens" id="childrens" class="required">
                                        <option value="0">-- Children --</option>
                                        <option value="0">0</option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option></select>
                                    <p id="quickconmesq" class="required"></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button type="button" class="prev"><p>Prev Step</p></button>
                <button type="button" class="next"><p>Next Step</p></button>
                <button type="button" onclick="sub_contact();return false" class="finish">Finish</button>
                <p class="slide-count"><span>1</span> <em>of</em> 3</p>
            </div>
        </form>
    </section>
</div>
<div class="mapindochina">
    <div id="title-line">
        <div class="icon-best"></div>
        <h2>Choose your destination<span class="line"></span></h2>
    </div>
    <br clear="all">
    <img src="./assets/frontend/images/mapvietnam.jpg" width="1px" height="1px">
    <img src="./assets/frontend/images/maplaos.jpg" width="1px" height="1px">
    <img src="./assets/frontend/images/mapcambodia.jpg" width="1px" height="1px">
    <img src="./assets/frontend/images/mapthailand.jpg" width="1px" height="1px">
    <img src="./assets/frontend/images/mapmyanmar.jpg" width="1px" height="1px">
    <div class="map_indo">
        <div class="country">
            <img src="./assets/frontend/images/mapthailand.jpg" alt="" usemap="#Map" id="imgmap" width="390" height="533">
            <map name="Map" id="Map">
                <area alt="" onmouseover="document.getElementById(&#39;imgmap&#39;).src=&#39;./assets/frontend/images/mapvietnam.jpg&#39;" title="Vietnam" href="/tours/vietnam/" shape="poly" coords="298,134,297,137,308,143,324,145,325,154,325,159,325,167,333,166,339,171,350,175,338,187,327,189,321,205,307,215,301,234,318,253,332,275,353,292,372,315,382,361,375,398,355,416,333,424,324,425,314,441,275,466,269,463,276,434,269,431,264,424,280,410,305,412,298,401,305,390,331,382,333,384,343,351,336,340,338,314,322,292,277,229,269,220,267,227,278,198,262,192,244,180,231,155,240,148,253,147,266,149,276,149,285,137">
                <area alt="" onmouseover="document.getElementById(&#39;imgmap&#39;).src=&#39;./assets/frontend/images/maplaos.jpg&#39;" title="Laos" href="/tours/laos/" shape="poly" coords="222,153,222,153,237,162,244,179,256,192,275,201,281,217,272,220,271,230,288,242,308,265,320,291,337,299,335,311,340,319,338,335,327,338,311,337,307,342,292,342,289,337,297,320,297,306,288,299,278,281,278,267,268,254,248,254,236,259,218,253,203,266,201,266,203,248,210,219,192,218,183,203,207,176,222,180,220,161">
                <area alt="" onmouseover="document.getElementById(&#39;imgmap&#39;).src=&#39;./assets/frontend/images/mapthailand.jpg&#39;" title="Thailand" href="/tours/thailand/" shape="poly" coords="185,201,191,218,195,224,199,218,209,217,210,226,201,259,203,268,214,256,225,250,238,257,266,250,280,269,291,300,300,306,299,323,290,340,253,333,236,342,226,353,224,367,231,386,221,376,204,376,204,362,196,360,186,360,182,368,180,391,165,441,169,455,181,458,186,471,186,486,196,495,210,502,225,514,219,526,207,526,204,524,204,516,186,507,182,513,173,502,162,485,146,475,142,463,156,418,173,388,165,364,144,323,155,293,128,248,136,216">
                <area alt="" onmouseover="document.getElementById(&#39;imgmap&#39;).src=&#39;./assets/frontend/images/mapcambodia.jpg&#39;" title="Cambodia" href="/tours/cambodia/" shape="poly" coords="247,334,267,336,283,336,306,341,321,332,336,338,343,355,338,385,317,389,300,397,308,414,283,414,265,423,245,412,230,395,225,372,224,353">
                <area alt="" onmouseover="document.getElementById(&#39;imgmap&#39;).src=&#39;./assets/frontend/images/mapmyanmar.jpg&#39;" title="Myanmar" href="/tours/myanmar/" shape="poly" coords="133,9,146,20,154,33,161,35,162,58,159,73,135,102,136,120,163,112,166,137,181,140,177,159,189,167,209,171,208,179,184,199,156,219,143,216,132,244,135,254,157,295,153,316,146,325,158,345,167,361,164,373,172,397,157,417,149,435,148,423,150,392,143,353,129,288,117,270,114,291,100,296,83,311,58,304,57,292,41,215,10,181,35,119,53,116,64,85,77,54,112,35,122,42,119,33">
            </map>
        </div>
    </div>
</div>
<br clear="all">
<div class="find-inspiration">
    <div class="grid-1">
        <div id="title-line">
            <h2>Find inspiration<span class="line"></span></h2>
        </div>
    </div>
    <div class="grid-1">
        <div class="wrap">
                <div>
                        <figure>
                            <a href="/tours/vietnam/" title="Vietnam Tours">
                                <h3 class="contry">Vietnam Tours</h3>
                                <img src="./assets/frontend/images/vietnam(2).jpg" class="lazyload" original="./assets/frontend/images/vietnam(2).jpg" style="display: inline;">
                                <div class="content">
                                    <div class="container">
                                        <div>
                                            <p><span class="line">&nbsp;</span>The Land of Timeless Charm</p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </figure>
                        <figure>
                            <a href="/tours/cambodia/" title="Cambodia Tours">
                                <h3 class="contry">Cambodia Tours</h3>
                                <img src="./assets/frontend/images/cambodia(2).jpg" class="lazyload" original="./assets/frontend/images/cambodia(2).jpg" style="display: inline;">
                                <div class="content">
                                    <div class="container">
                                        <div>
                                            <p><span class="line">&nbsp;</span>The Land of Temples and Towers</p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </figure>
                        <figure>
                            <a href="/tours/laos/" title="Laos Tours">
                                <h3 class="contry">Laos Tours</h3>
                                <img src="./assets/frontend/images/laos(2).jpg" class="lazyload" original="./assets/frontend/images/laos(2).jpg" style="display: inline;">
                                <div class="content">
                                    <div class="container">
                                        <div>
                                            <p><span class="line">&nbsp;</span>The Land of Million Elephants</p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </figure>
                        <figure>
                            <a href="/tours/myanmar/" title="Myanmar Tours">
                                <h3 class="contry">Myanmar Tours</h3>
                                <img src="./assets/frontend/images/myanmar(2).jpg" class="lazyload" original="./assets/frontend/images/myanmar(2).jpg" style="display: inline;">
                                <div class="content">
                                    <div class="container">
                                        <div>
                                            <p><span class="line">&nbsp;</span>The Land of Golden Pagodas</p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </figure>
                        <figure>
                            <a href="/tours/thailand/" title="Thailand Tours">
                                <h3 class="contry">Thailand Tours</h3>
                                <img src="./assets/frontend/images/thailand(2).jpg" class="lazyload" original="./assets/frontend/images/thailand(2).jpg" style="display: inline;">
                                <div class="content">
                                    <div class="container">
                                        <div>
                                            <p><span class="line">&nbsp;</span>The Land of Smiles</p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </figure>
                        <figure>
                            <a href="/tours/indochina/" title="Indochina Tours">
                                <h3 class="contry">Indochina Tours</h3>
                                <img src="./assets/frontend/images/indochina.jpg" class="lazyload" original="./assets/frontend/images/indochina.jpg" style="display: inline;">
                                <div class="content">
                                    <div class="container">
                                        <div>
                                            <p><span class="line">&nbsp;</span>Discover Your Way!</p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </figure>
                    </div>
        </div>
    </div>
</div>
<div class="grid-1">
    <div id="title-line" class="title-article">
        <h2>Most Read Articles<span class="line"></span></h2>
    </div>
    @foreach(get_list_posts(6,1)->chunk(3) as $list)
    <div class="exp_row">
        @foreach($list as $post)
        <div id="most-read-articles">
            <div class="articles articles-private">
                <a href="{{ @$post->link }}" title="{{ @$post->name }}">
                    <img src="{{ @$post->photo }}" title="{{ @$post->name }}">
                    {{ @$post->name }}<br>
                </a>
                <span>{{ str_limit(@$post->description,'120') }}</span>
            </div>
        </div>
        @endforeach
    </div>
    @endforeach


    <div class="view-all view_all_article">
        <a href="/blogs/blog" title="Best Indochina Tours" class="bt-more-all">View All Articles »</a>
    </div>
</div>

@include('partial.popup')
@endsection
