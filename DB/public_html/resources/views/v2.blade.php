@extends('layouts.layout')

@section('content')

<div class="slider-searchtrip">
    <div class="slider-cas">
        @foreach(get_option('home-slider') as $slider)
        <div class="item {{ !$loop->first ? 'slick-slider' : '' }}">
            <div class="img">
                <img src="{{ @$slider['url'] }}" alt="">
            </div>
        </div>
        @endforeach
    </div>
    <div class="banner-trip-form prominent ">
        <div class="main-form">
            <div class="container">
                <div class="form-title">
                    <h1 class="title">Your Journey of a Lifetime</h1>
                    <div class="subtitle">Let our experts plan your private, tailor-made and seamless tour in 40 inspiring destinations.</div>
                </div>
                <div class="trip-search">
                    <form>
                        <fieldset>	
                            <div class="field">
                                <select name="choose1" id="choose1" class="form-control">
                                    <option value="">Where do you want to go?</option>
                                    <option value="option-1">Lựa chọn 1</option>
                                    <option value="option-2">Lựa chọn 2</option>
                                    <option value="option-3">Lựa chọn 3</option>
                                    <option value="option-4">Lựa chọn 4</option>
                                </select>
                            </div>	
                            <div class="field">
                                <select name="choose2" id="choose2" class="form-control">
                                    <option value="">Your Interests?</option>
                                    <option value="option-1">Lựa chọn 1</option>
                                    <option value="option-2">Lựa chọn 2</option>
                                    <option value="option-3">Lựa chọn 3</option>
                                    <option value="option-4">Lựa chọn 4</option>
                                </select>
                            </div>
                            <div class="field guests">
                                <select name="choose3" id="choose3" class="form-control">
                                    <option value="">No. of travelers</option>
                                    <option value="option-1">Lựa chọn 1</option>
                                    <option value="option-2">Lựa chọn 2</option>
                                    <option value="option-3">Lựa chọn 3</option>
                                    <option value="option-4">Lựa chọn 4</option>
                                </select>
                            </div>
                            <div class="field budget">
                                <select name="choose4" id="choose4" class="form-control">
                                    <option value="">Budget Per Person</option>
                                    <option value="option-1">Lựa chọn 1</option>
                                    <option value="option-2">Lựa chọn 2</option>
                                    <option value="option-3">Lựa chọn 3</option>
                                    <option value="option-4">Lựa chọn 4</option>
                                </select>
                            </div>
                            <div class="field submit-wrap">
                                <button name="sgt-submit" id="sgt-submit" type="submit" class="search-btn btn">Create My Trip Now</button>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="info-about-trip">
    <div class="container">
        {!! get_option('main-why') !!}
    </div>
</div>


<div class="inspiration">
    <div class="container">
        <div class="md-head">
            <h2 class="title">Find Inspiration</h2>
        </div>
        <div class="inspiration-list">
            <div class="rows">
                {!! get_option('inspiration-block')  !!}
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</div>

<div class="tour-love">
    <div class="container">
        <div class="md-head">
            <h2 class="title">{{ get_option('best-month') }}</h2>
            <div class="des-box col-md-10 col-md-offset-1 text-center">
                    {!! get_option('best-month-description') !!}
            </div>
        </div>
        <div class="list-tour">
            <div class="row">
                @foreach(get_list_tours(2,43,true,'featured') as $tour)
                <div class="col-md-6">
                    <div id="special-tour">
                        <div id="img-cruise">
                            <a title="{{ @$tour->name }}" href="{{ route('tours.show',@$tour->name_link) }}"><img src="{{ @$tour->photo }}" alt=""></a>
                            <div class="gradient-st">
                                <a href="{{ route('tours.show',@$tour->name_link) }}" title="{{ @$tour->name }}">&nbsp;</a>
                            </div>
                            <a href="{{ route('tours.show',@$tour->name_link) }}" title="{{ @$tour->name }}" id="title-tours">{{ @$tour->name }}</a>
                            <span class="best-seller"></span>
                            <a class="heart-tour" href="javascript:;"><i class="far fa-heart"></i></a>
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
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

<div id="main-besttours">
    <div class="container">
        <div class="md-head">
            <h2 class="title">Popular Indochina Tours</h2>
        </div>
        <div id="scroll-tours">
            <div class="row">
                @foreach(get_list_tours(5,43,true,'featured') as $tour)
                @if($loop->iteration > 2)
                <div class="col-md-4">
                    <div id="box-tour">
                        <div class="alink">
                            <div id="img-tour">
                                <a href="{{ route('tours.show',@$tour->name_link) }}" title="{{ @$tour->name }}"><img src="{{ @$tour->photo }}"></a>
                                <div id="title-tour">
                                    <h2 style="text-align:center"><a href="{{ route('tours.show',@$tour->name_link) }}" title="{{ @$tour->name }}">{{ @$tour->name }}</a></h2>
                                </div>
                                <span class="best-seller"></span>
                                <a class="heart-tour" rel="nofollow" ><i class="far fa-heart"></i></a></div>
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
<div class="step-home">
    <div id="title-line1">
        <h2>Best tailor made tours for you</h2>
    </div>
</div>

<div class="main-tailormade">
    <section id="questionnaire" class="step-1" data-current-step="1">
            <img src="/assets/frontend/themes/images/selected.png" width="265" height="142" alt="" id="selected-img">
        <form>
            <input type="hidden" value="{{ getClientIp() }}" id="ip_client" name="ip_client">
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
                                    <a href="#" class=""><img class="lazyload" src="/assets/frontend/themes/images/vietnam(1).jpg" width="265" height="142" alt="Vietnam" style="display: inline;"></a>
                                </figure>
                                <label>
                                    <input type="checkbox" name="check_cat[]" value="Vietnam" class="checkbox_cat">
                                    Vietnam
                                </label>
                            </article>
                            <article>
                                <figure>
                                    <a href="#"><img class="lazyload" src="/assets/frontend/themes/images/cambodia(1).jpg" width="265" height="142" alt="Cambodia" style="display: inline;"></a>
                                </figure>
                                <label>
                                    <input type="checkbox" name="check_cat[]" value="Cambodia" class="checkbox_cat">
                                    Cambodia
                                </label>
                            </article>
                            <article>
                                <figure>
                                    <a href="#"><img class="lazyload" src="/assets/frontend/themes/images/laos(1).jpg" width="265" height="142" alt="Laos" style="display: inline;"></a>
                                </figure>
                                <label>
                                    <input type="checkbox" name="check_cat[]" value="Laos" class="checkbox_cat">
                                    Laos
                                </label>
                            </article>
                            <article>
                                <figure>
                                    <a href="#"><img class="lazyload" src="/assets/frontend/themes/images/myanmar(1).jpg" width="265" height="142" alt="Myanmar" style="display: inline;"></a>
                                </figure>
                                <label>
                                    <input type="checkbox" name="check_cat[]" value="Myanmar" class="checkbox_cat">
                                    Myanmar
                                </label>
                            </article>
                            <article>
                                <figure>
                                    <a href="#"><img class="lazyload" src="/assets/frontend/themes/images/thailand(1).jpg" width="265" height="142" alt="Thailand" style="display: inline;"></a>
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
                                    <a href="#"><img src="/assets/frontend/themes/images/Cultures-Heritages.jpg" width="265" height="142" alt="Cultures &amp; Heritages"></a>
                                </figure>
                                <label>
                                    <input type="checkbox" name="check[]" value="Cultures | Heritage" class="checkbox_tour">
                                    Cultures &amp; Heritages
                                </label>
                            </article>
                            <article>
                                <figure>
                                    <a href="#"><img src="/assets/frontend/themes/images/Beach-Relaxation.jpg" width="265" height="142" alt="Beach &amp; Relaxation"></a>
                                </figure>
                                <label>
                                    <input type="checkbox" name="check[]" value="Beach | Relaxation" class="checkbox_tour">
                                    Beach &amp; Relaxation
                                </label>
                            </article>
                            <article>
                                <figure>
                                    <a href="#"><img src="/assets/frontend/themes/images/Nature-Wildlife.jpg" width="265" height="142" alt="Nature &amp; Wildlife"></a>
                                </figure>
                                <label>
                                    <input type="checkbox" name="check[]" value="Nature | Wildlife" class="checkbox_tour">
                                    Nature &amp; Wildlife
                                </label>
                            </article>
                            <article>
                                <figure>
                                    <a href="#"><img src="/assets/frontend/themes/images/Cruise-Journeys.jpg" width="265" height="142" alt="Cruise Journeys"></a>
                                </figure>
                                <label>
                                    <input type="checkbox" name="check[]" value="Cruise Journeys" class="checkbox_tour">
                                    Cruise Journeys
                                </label>
                            </article>
                            <article>
                                <figure>
                                    <a href="#"><img src="/assets/frontend/themes/images/Adventure-activities.jpg" width="265" height="142" alt="Adventure Activities"></a>
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
                                    <input type="text" id="datepicker" name="datepicker" data-toggle="datepicker" class="input-text date hasDatepicker" placeholder="Select Approx Start Date">
                                    <input type="text" id="text_name" name="text_name" class="input-text" placeholder="Enter # Your Trip Length">
                                    <textarea id="info_contact" name="info_contact" placeholder="Any notes or special requests?" class="mobile-hide"></textarea>
                                </div>
                                <div class="col-right">
                                    <input type="text" name="name_contact" id="name_contact" class="input-text" placeholder="Full Name *">
                                    <input type="text" name="email_contact" id="email_contact" class="input-text" placeholder="Email Address *">
                                    <input type="tel" id="phone_contact" name="phone_contact" class="input-text" placeholder="Phone Number *" autocomplete="off">
                                    <select name="country" id="country_step" class="required">
                                <option value="0">-- Country *--</option>
                                <option value="Australia">Australia</option><option value="United Kingdom">United Kingdom</option><option value="United States">United States</option><option value="Canada">Canada</option><option value="NewZealand">NewZealand</option><option value="France">France</option><option value="Italy">Italy</option><option value="Germany">Germany</option><option value="Spain">Spain</option><option value="Singapore">Singapore</option><option value="Afghanistan">Afghanistan</option><option value="Albania">Albania</option><option value="Algeria">Algeria</option><option value="American Samoa">American Samoa</option><option value="Argentina">Argentina</option><option value="Austria">Austria</option><option value="Azerbaijan">Azerbaijan</option><option value="Bangladesh">Bangladesh</option><option value="Barbados">Barbados</option><option value="Belarus">Belarus</option><option value="Belgium">Belgium</option><option value="Belize">Belize</option><option value="Benin">Benin</option><option value="Bermuda">Bermuda</option><option value="Bhutan">Bhutan</option><option value="Bolivia">Bolivia</option><option value="Botswana">Botswana</option><option value="Bouvet">Bouvet</option><option value="Brazil">Brazil</option><option value="Brunei Darussalam">Brunei Darussalam</option><option value="Bulgaria">Bulgaria</option><option value="BurkinaFaso">BurkinaFaso</option><option value="Burundi">Burundi</option><option value="ByelorussianSSR">ByelorussianSSR</option><option value="Cambodia">Cambodia</option><option value="Cameroon">Cameroon</option><option value="CapeVerde">CapeVerde</option><option value="Cayman Islands">Cayman Islands</option><option value="Centra lAfrican">Centra lAfrican</option><option value="Chad">Chad</option><option value="Chile">Chile</option><option value="China">China</option><option value="Colombia">Colombia</option><option value="Comoros">Comoros</option><option value="Congo">Congo</option><option value="Cook Islands">Cook Islands</option><option value="CostaRica">CostaRica</option><option value="Coted Ivoire">Coted Ivoire</option><option value="Croatia">Croatia</option><option value="Cuba">Cuba</option><option value="Cyprus">Cyprus</option><option value="Czech">Czech</option><option value="Czechoslovakia">Czechoslovakia</option><option value="Denmark">Denmark</option><option value="Djibouti">Djibouti</option><option value="Dominica">Dominica</option><option value="Dominican">Dominican</option><option value="EastTimor">EastTimor</option><option value="Ecuador">Ecuador</option><option value="Egypt">Egypt</option><option value="ElSalvador">ElSalvador</option><option value="England">England</option><option value="Equatorial Guinea">Equatorial Guinea</option><option value="Eritrea">Eritrea</option><option value="Estonia">Estonia</option><option value="Ethiopia">Ethiopia</option><option value="Falkland">Falkland</option><option value="Faroe">Faroe</option><option value="Fiji">Fiji</option><option value="Finland">Finland</option><option value="Gabon">Gabon</option><option value="Gambia">Gambia</option><option value="Georgia">Georgia</option><option value="Ghana">Ghana</option><option value="Gibraltar">Gibraltar</option><option value="Great Britain">Great Britain</option><option value="Greece">Greece</option><option value="Greenland">Greenland</option><option value="Grenada">Grenada</option><option value="Guadeloupe">Guadeloupe</option><option value="Guam">Guam</option><option value="Guatemela">Guatemela</option><option value="Guernsey">Guernsey</option><option value="Guiana">Guiana</option><option value="Guinea">Guinea</option><option value="Guinea-Bissau">Guinea-Bissau</option><option value="Guyana">Guyana</option><option value="Haiti">Haiti</option><option value="Heard">Heard</option><option value="Honduras">Honduras</option><option value="HongKong">HongKong</option><option value="Hungary">Hungary</option><option value="Iceland">Iceland</option><option value="India">India</option><option value="Indonesia">Indonesia</option><option value="Iran">Iran</option><option value="Iraq">Iraq</option><option value="Ireland">Ireland</option><option value="IsleOfMan">IsleOfMan</option><option value="Israel">Israel</option><option value="Jamaica">Jamaica</option><option value="Japan">Japan</option><option value="Jersey">Jersey</option><option value="Jordan">Jordan</option><option value="Kazakhstan">Kazakhstan</option><option value="Kenya">Kenya</option><option value="Kiribati">Kiribati</option><option value="South Korea">South Korea</option><option value="North Korea">North Korea</option><option value="Kuwait">Kuwait</option><option value="Kyrgyzstan">Kyrgyzstan</option><option value="Lao">Lao</option><option value="Latvia">Latvia</option><option value="Lebanon">Lebanon</option><option value="Lesotho">Lesotho</option><option value="Liberia">Liberia</option><option value="Libya">Libya</option><option value="Liechtenstein">Liechtenstein</option><option value="Lithuania">Lithuania</option><option value="Luxembourg">Luxembourg</option><option value="Macau">Macau</option><option value="Macedonia">Macedonia</option><option value="Madagascar">Madagascar</option><option value="Malawi">Malawi</option><option value="Malaysia">Malaysia</option><option value="Maldives">Maldives</option><option value="Mali">Mali</option><option value="Malta">Malta</option><option value="Mariana">Mariana</option><option value="Marshall">Marshall</option><option value="Martinique">Martinique</option><option value="Mauritania">Mauritania</option><option value="Mauritius">Mauritius</option><option value="Mayotte">Mayotte</option><option value="Mexico">Mexico</option><option value="Micronesia">Micronesia</option><option value="Moldova">Moldova</option><option value="Monaco">Monaco</option><option value="Mongolia">Mongolia</option><option value="Montserrat">Montserrat</option><option value="Morocco">Morocco</option><option value="Mozambique">Mozambique</option><option value="Myanmar">Myanmar</option><option value="Namibia">Namibia</option><option value="Nauru">Nauru</option><option value="Nepal">Nepal</option><option value="Netherlands">Netherlands</option><option value="NeutralZone">NeutralZone</option><option value="NewCaledonia">NewCaledonia</option><option value="Nicaragua">Nicaragua</option><option value="Niger">Niger</option><option value="Nigeria">Nigeria</option><option value="Niue">Niue</option><option value="Norfolk Island">Norfolk Island</option><option value="Northern Ireland">Northern Ireland</option><option value="Norway">Norway</option><option value="Oman">Oman</option><option value="Pakistan">Pakistan</option><option value="Palau">Palau</option><option value="Panama">Panama</option><option value="Papua New Guinea">Papua New Guinea</option><option value="Paraguay">Paraguay</option><option value="Peru">Peru</option><option value="Philippines">Philippines</option><option value="Pitcairn">Pitcairn</option><option value="Poland">Poland</option><option value="Polynesia">Polynesia</option><option value="Portugal">Portugal</option><option value="PuertoRico">PuertoRico</option><option value="Qatar">Qatar</option><option value="Reunion">Reunion</option><option value="Romania">Romania</option><option value="Russian">Russian</option><option value="Rwanda">Rwanda</option><option value="SaintHelena">SaintHelena</option><option value="SaintKitts">SaintKitts</option><option value="SaintLucia">SaintLucia</option><option value="SaintPierre">SaintPierre</option><option value="SaintVincent">SaintVincent</option><option value="Samoa">Samoa</option><option value="SanMarino">SanMarino</option><option value="SaudiArabia">SaudiArabia</option><option value="Scotland">Scotland</option><option value="Senegal">Senegal</option><option value="Seychelles">Seychelles</option><option value="SierraLeone">SierraLeone</option><option value="Slovakia">Slovakia</option><option value="Slovenia">Slovenia</option><option value="Solomon">Solomon</option><option value="Somalia">Somalia</option><option value="South Africa">South Africa</option><option value="South Georgia">South Georgia</option><option value="SriLanka">SriLanka</option><option value="Sudan">Sudan</option><option value="Suriname">Suriname</option><option value="Svalbard">Svalbard</option><option value="Swaziland">Swaziland</option><option value="Sweden">Sweden</option><option value="Switzerland">Switzerland</option><option value="Syrian Arab">Syrian Arab</option><option value="Taiwan">Taiwan</option><option value="Tajikista">Tajikista</option><option value="Tanzania">Tanzania</option><option value="Thailand">Thailand</option><option value="Togo">Togo</option><option value="Tokelau">Tokelau</option><option value="Tonga">Tonga</option><option value="Trinidad and Tobago">Trinidad and Tobago</option><option value="Tunisia">Tunisia</option><option value="Turkey">Turkey</option><option value="Turkmenistan">Turkmenistan</option><option value="Turksand Caicos">Turksand Caicos</option><option value="Tuvalu">Tuvalu</option><option value="Uganda">Uganda</option><option value="Ukraine">Ukraine</option><option value="UAE">UAE</option><option value="Uruguay">Uruguay</option><option value="Uzbekistan">Uzbekistan</option><option value="Vanuatu">Vanuatu</option><option value="Vatican">Vatican</option><option value="Venezuela">Venezuela</option><option value="Vietnam">Vietnam</option><option value="Virgin">Virgin</option><option value="Wales">Wales</option><option value="Western Sahara">Western Sahara</option><option value="Yemen">Yemen</option><option value="Yugoslavia">Yugoslavia</option><option value="Zaire">Zaire</option><option value="Zambia">Zambia</option><option value="Zimbabwe">Zimbabwe</option><option value="other...">other...</option></select>
                                <select name="adults" id="adults" class="required">
                                <option value="1000">-- Adults --</option>
                                <option value="0">0</option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option></select>
                                <select name="childrens" id="childrens" class="required">
                                <option value="0">-- Children --</option>
                                <option value="0">0</option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option></select>
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

<section class="travel_guide">
        <div class="title-wrap">
            <div class="container">
                <div class="travel-title float-left">
                    <h2>{!! get_option('travel-guide') !!}</h2>
                </div>
            <a href="/blogs/blog" title="Mekong Travel Guide" class="awe-btn awe-btn-5 awe-btn-lager arrow-right text-uppercase float-right">{{ strip_tags(get_option('travel-guide-description')) }}</a>
            </div>
        </div>
        <div class="guide">
            <div class="container">
                @foreach(get_list_posts(6,1)->chunk(4) as $list)
                <div class="row">
                    @foreach($list as $post)                
                    <div id="most-read-articles" class="col-xs-12 col-md-3 col-sm-6">
                        <div class="articles">
                            <div class="hv-over" title="{{ @$post->name }}">
                                <img class="lazyload" src="{{ @$post->photo }}" alt="{{ @$post->name }}">
                            </div>
                            <div class="guide-name">
                                <a href="{{ @$post->link }}" title="">{{ @$post->name }}</a>
                            </div>
                            <span>{{ str_limit(@$post->description,'120') }}</span>
                        </div>
                    </div>
                    @endforeach
                </div>
                @endforeach  
            </div>
        </div>
    </section>
@endsection
