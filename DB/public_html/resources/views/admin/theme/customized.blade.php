@extends('layouts.layout')
@section('content')
{{-- <div class="grid-1 clear">
    <div id="col-md-12">
        <div class="container">
            <div id="box-txt-detail">
                <div id="title-line">
                    <h2>Customized Tours<span class="line"></span></h2>
                </div>
                <form role="form" action="/customized-tour.html" method="post" id="customizedtour" class="form-validate" name="form" data-toggle="validator" onsubmit="return checkEqual();">
                    {{ csrf_field() }}
                    <div class="form-group col-md-12 col-sm-12">
                        <label for="checkindate" class="col-sm-12 col-form-label">
                            If you would prefer to create your own itinerary, our travel consultants will be happy to work with you and provide you personal assistance and send you itinerary suggestion and budget options within 1 to 12 hours.
                        </label>
                    </div>
                    <div class="form-group col-md-12 col-sm-12 cachtren10">
                        <div class="col-md-3 col-sm-12 cachphai5">
                            <select name="info[adult]" class="form-control required batbuoc" id="adult" style="width:auto;" required="required" aria-required="true" aria-invalid="false">
                                <option value="default">Number of travelers?</option><option value="1">1 Person</option><option value="2">2 Persons</option><option value="3">3 Persons</option><option value="4">4 Persons</option><option value="5">5 Persons</option><option value="6">6 Persons</option><option value="7">7 Persons</option><option value="8">8 Persons</option><option value="9">9 Persons</option><option value="10">10 Persons</option><option value="11">11 Persons</option><option value="12">12 Persons</option><option value="13">13 Persons</option><option value="14">14 Persons</option><option value="15">15 Persons</option><option value="16">16 Persons</option><option value="17">17 Persons</option><option value="18">18 Persons</option><option value="19">19 Persons</option><option value="20">20 Persons</option><option value="HH">&gt; 20 Persons</option>								
                            </select> 
                        </div>
                        <div class="col-md-3 col-sm-12 cachtren10">
                            <select name="info[lengthoftrip]" class="form-control required batbuoc" id="length" style="width:auto;" required="required" aria-required="true">
                                <option value="default">How many days?</option><option value="1">1 Day</option><option value="2">2 Days</option><option value="3">3 Days</option><option value="4">4 Days</option><option value="5">5 Days</option><option value="6">6 Days</option><option value="7">7 Days</option><option value="8">8 Days</option><option value="9">9 Days</option><option value="10">10 Days</option><option value="11">11 Days</option><option value="12">12 Days</option><option value="13">13 Days</option><option value="14">14 Days</option><option value="15">15 Days</option><option value="16">16 Days</option><option value="17">17 Days</option><option value="18">18 Days</option><option value="19">19 Days</option><option value="20">20 Days</option><option value="HH">&gt; 20 Days</option>							
                            </select>
                        </div>
                        <div class="col-md-2 col-sm-12 khongcachtrai cachphai10 cachtren10"> 
                            <select name="info[hotelcategory]" class="form-control required batbuoc" id="hotelcat" style="width:140px;" required="required" aria-required="true">
                                <option value="default">Hotel Category?</option><option value="3 Stars">3 Stars</option><option value="4 Stars">4 Stars</option><option value="5 Stars">5 Stars</option><option value="Luxury">Top Luxury</option>							
                            </select>     
                        </div>
                        <div class="col-md-3 col-sm-12 cachtren10">
                            <input id="datepicker" type="text" name="datepicker" class="form-control date" placeholder="Arrival date" required/> 
                            <span class="i-date"></span>
                        </div>
                    </div>
                    <div class="form-bottom contactinfor">	
                        <div class="col-sm-12">					
                            <div class="form-group col-sm-12 cus-contact-infor">Contact Information</div>
                        </div>
                        <div class="form-group noleft col-md-12 col-sm-12">
                            <div class="col-sm-12 col-md-6 cachtren10"> 
                                <input type="text" class="form-control batbuoc inputdai" name="info[yourname]" id="namefull" placeholder="Full name" value="" required="required">
                                <input name="info[subject]" id="subject" value="Customize Private Cambodia Tour" maxlength="100" size="40" type="hidden">
                                <input name="info[laip]" id="listip" value="{{ getClientIp() }}" maxlength="250" size="40" type="hidden">
                            </div>
                            <div class="col-sm-12 col-md-6 cachtren10">
                                <input type="text" class="form-control inputdai" name="info[phonenumber]" id="phonenumber" placeholder="Phone number" value="">
                            </div>
                        </div>
                        <div class="form-group noleft col-md-12 col-sm-12">
                            <div class="col-sm-12 col-md-4 cachtren10">
                                <input type="email" class="form-control batbuoc required validate-email inputdai " name="info[email]" id="email" placeholder="Email" value="" aria-required="true" required="required">
                            </div>
                            <div class="col-sm-12 col-md-4 cachtren10">
                                <input type="email" class="form-control batbuoc required validate-email inputdai " name="info[ccemail]" id="ccemail" placeholder="Confirm email" value="" aria-required="true" required="required">
                            </div>
                            <div class="col-sm-12 col-md-4 cachtren10">
                                <div class="contact_sub contact_us">
                                    {!! Form::select('country', $list_country, NULL, ['class' => 'long form-control', 'id' => 'country_pop']) !!}
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12">	
                            <div class="form-group col-sm-12 cus-contact-infor">Choose the cities you would like to visit:</div>
                        </div>
                        <div class="col-sm-12">
                            <h3>
                                <div id="listResults"> 
                                    <div class="checkbox checkbox-circle checkbox-green"> 
                                        <input id="vietnam" name="destination[]" value="vietnam" aria-invalid="false" checked="" type="checkbox">
                                        <label for="vietnam">VIETNAM</label>
                                    </div> 
                                </div>
                            </h3>
                        </div>
                        <div class="col-md-12 col-sm-12 vhienra" id="vietnamdiv" style="display: block;">
                            <div class="col-sm-12">
                                <div>
                                    <ul class="list-group row">
                                        @foreach(get_all_dest_mu('vietnam',0) as $vietnam)
                                            <li class="list-group-item col-md-4  col-sm-6 col-xs-12">
                                                <input value="{{ $vietnam->name }}" name="check_vietnam[]" id="{{ strtolower($vietnam->name) }}" type="checkbox"> 
                                                <label for="{{ strtolower($vietnam->name) }}">{{ $vietnam->name }}</label>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- Laos -->
                        <div class="col-sm-12">
                            <h3>
                                <div id="listResults"> 
                                    <div class="checkbox checkbox-circle checkbox-green"> 
                                        <input id="laos" name="destination[]" value="laos" aria-invalid="false" type="checkbox">
                                        <label for="laos">Laos</label>
                                    </div> 
                                </div>
                            </h3>
                        </div>
                        <div class="col-md-12 col-sm-12 vhienra" id="laosdiv" style="display: none;">
                            <div class="col-sm-12">
                                <div>
                                    <ul class="list-group row">
                                        @foreach(get_all_dest_mu('laos',0) as $laos)
                                            <li class="list-group-item col-md-4  col-sm-6 col-xs-12">
                                                <input value="{{ $laos->name }}" name="check_laos[]" id="{{ strtolower($laos->name) }}" type="checkbox"> 
                                                <label for="{{ strtolower($laos->name) }}">{{ $laos->name }}</label>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- Myanmar -->
                        <div class="col-sm-12">
                            <h3>
                                <div id="listResults"> 
                                    <div class="checkbox checkbox-circle checkbox-green"> 
                                        <input id="myanmar" name="destination[]" value="myanmar" aria-invalid="false" type="checkbox">
                                        <label for="myanmar">Myanmar</label>
                                    </div> 
                                </div>
                            </h3>
                        </div>
                        <div class="col-md-12 col-sm-12 vhienra" id="myanmardiv" style="display: none;">
                            <div class="col-sm-12">
                                <div>
                                    <ul class="list-group row">
                                        @foreach(get_all_dest_mu('myanmar',0) as $myanmar)
                                            <li class="list-group-item col-md-4  col-sm-6 col-xs-12">
                                                <input value="{{ $myanmar->name }}" name="check_myanmar[]" id="{{ strtolower($myanmar->name) }}" type="checkbox"> 
                                                <label for="{{ strtolower($myanmar->name) }}">{{ $myanmar->name }}</label>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- Thailand -->
                        <div class="col-sm-12">
                            <h3>
                                <div id="listResults"> 
                                    <div class="checkbox checkbox-circle checkbox-green"> 
                                        <input id="thailand" name="destination[]" value="thailand" aria-invalid="false" type="checkbox">
                                        <label for="thailand">Thailand</label>
                                    </div> 
                                </div>
                            </h3>
                        </div>
                        <div class="col-md-12 col-sm-12 vhienra" id="thailanddiv" style="display: none;">
                            <div class="col-sm-12">
                                <div>
                                    <ul class="list-group row">
                                        @foreach(get_all_dest_mu('thailand',0) as $thailand)
                                            <li class="list-group-item col-md-4  col-sm-6 col-xs-12">
                                                <input value="{{ $thailand->name }}" name="check_thailand[]" id="{{ strtolower($thailand->name) }}" type="checkbox"> 
                                                <label for="{{ strtolower($thailand->name) }}">{{ $thailand->name }}</label>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- Cambodia -->
                        <div class="col-sm-12">
                            <h3>
                                <div id="listResults"> 
                                    <div class="checkbox checkbox-circle checkbox-green"> 
                                        <input id="cambodia" name="destination[]" value="cambodia" aria-invalid="false" type="checkbox">
                                        <label for="cambodia">Cambodia</label>
                                    </div> 
                                </div>
                            </h3>
                        </div>
                        <div class="col-md-12 col-sm-12 vhienra" id="cambodiadiv" style="display: none;">
                            <div class="col-sm-12">
                                <div>
                                    <ul class="list-group row">
                                        @foreach(get_all_dest_mu('cambodia',0) as $cambodia)
                                            <li class="list-group-item col-md-4  col-sm-6 col-xs-12">
                                                <input value="{{ $cambodia->name }}" name="check_cambodia[]" id="{{ strtolower($cambodia->name) }}" type="checkbox"> 
                                                <label for="{{ strtolower($cambodia->name) }}">{{ $cambodia->name }}</label>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="form-group col-md-12 col-sm-12">
                            <label for="hhmess" class="col-sm-12 col-form-label">Your message:</label>
                            <div class="col-sm-12">
                                <textarea name="info[hhmess]" class="form-control" id="hhmess" rows="3"></textarea>
                            </div>
                        </div>
                        <button type="submit" id="submit" class="btn btn-xanh form-trai">Start your Journey</button>
                    </div>
                </form>   
            </div>
        </div>
    </div>
</div> --}}

<div class="page-main-wrapper">
    <div class="container">
        <div class="main-cn">
            <div id="title-line">
                <h1>CUSTOMIZE TOUR</h1>
                <!-- <p>Tell us about your holiday requirements, and we'll get back to you shortly.</p> -->
            </div>
            <div class="row">
                    <div class="form-box">
                    <form action="/customized-tour.html" method="POST" id="customizedtour">
                        {{ csrf_field() }}
                        <fieldset>
                            <div class="form-bottom">
                                <div class="row">
                                    <div class="form-group col-md-12 col-sm-12">
                                        <label for="checkindate" class="col-sm-12 col-form-label">
                                            If you would prefer to create your own itinerary, our travel consultants will be happy to work with you and provide you personal assistance and send you itinerary suggestion and budget options within 1 to 12 hours.
                                        </label>
                                    </div>
                                    <div class="col-md-12 col-sm-12 cachtren10">
                                        <div class="form-group col-md-3 col-sm-12 cachphai5">
                                            <select name="info[adult]" class="form-control required" id="adult" required="required" aria-required="true" aria-invalid="false">
                                                <option value="default">Number of travelers?</option><option value="1">1 Person</option><option value="2">2 Persons</option><option value="3">3 Persons</option><option value="4">4 Persons</option><option value="5">5 Persons</option><option value="6">6 Persons</option><option value="7">7 Persons</option><option value="8">8 Persons</option><option value="9">9 Persons</option><option value="10">10 Persons</option><option value="11">11 Persons</option><option value="12">12 Persons</option><option value="13">13 Persons</option><option value="14">14 Persons</option><option value="15">15 Persons</option><option value="16">16 Persons</option><option value="17">17 Persons</option><option value="18">18 Persons</option><option value="19">19 Persons</option><option value="20">20 Persons</option><option value="HH">&gt; 20 Persons</option>								
                                            </select>
                                        </div>
                                        <div class="form-group col-md-3 col-sm-12 cachphai5">
                                            <select name="info[lengthoftrip]" class="form-control required" id="length" required="required" aria-required="true" aria-invalid="false">
                                                <option value="default">How many days?</option><option value="1">1 Day</option><option value="2">2 Days</option><option value="3">3 Days</option><option value="4">4 Days</option><option value="5">5 Days</option><option value="6">6 Days</option><option value="7">7 Days</option><option value="8">8 Days</option><option value="9">9 Days</option><option value="10">10 Days</option><option value="11">11 Days</option><option value="12">12 Days</option><option value="13">13 Days</option><option value="14">14 Days</option><option value="15">15 Days</option><option value="16">16 Days</option><option value="17">17 Days</option><option value="18">18 Days</option><option value="19">19 Days</option><option value="20">20 Days</option><option value="HH">&gt; 20 Days</option>							
                                            </select>
                                        </div>
                                        <div class="form-group col-md-3 col-sm-12 cachphai5">
                                            <select name="info[hotelcategory]" class="form-control required" id="hotelcat" required="required" aria-required="true" aria-invalid="false">
                                                <option value="default">Hotel Category?</option>
                                                <option value="1">3 Stars</option>
                                                <option value="2">4 Stars</option>
                                                <option value="3">5 Stars</option>
                                                <option value="4">Top Luxury</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-3 col-sm-12 cachtren10">
                                            <div class="form-control input-group date">
                                                <input id="datepicker" type="text" name="datepicker" class="date hasDatepicker" data-toggle="datepicker" placeholder="Arrival date">
                                    
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-bottom contactinfor">
                                <div class="form-group col-sm-12 cus-contact-infor">Contact Information</div>
                                <div class="col-md-6 form-group">
                                    <input name="info[yourname]" type="text" class="form-control" placeholder="Full name" required>
                                    <input name="info[laip]" id="listip" value="{{ getClientIp() }}" maxlength="250" size="40" type="hidden">
                                </div>
                                <div class="col-md-6 form-group">
                                    <input name="info[phonenumber]" type="text" class="form-control" placeholder="Phone number" required>
                                </div>
                                <div class="col-md-6 form-group">
                                    <input name="info[email]" type="text" class="form-control" placeholder="Email" required>
                                </div>
                                <div class="col-md-6 form-group">
                                    <input name="info[ccemail]" type="text" class="form-control" placeholder="Confirm email" required>
                                </div>
                                <div class="col-md-6 form-group">
                                    {!! Form::select('country', $list_country, NULL, ['class' => 'form-control select-country required']) !!}
                                </div>
                                <div class="form-group col-sm-12 cus-contact-infor">Choose the cities you would like to visit:</div>
                                <div class="col-md-12 col-sm-12 ">
                                    <h3>
                                        <div id="listResults">
                                            <div class="checkbox"> 
                                                <input id="cambodia" name="destination[]" value="cambodia" data-checkedshow="#cambodiadiv" aria-invalid="false" checked="" type="checkbox">
                                                <label for="cambodia">CAMBODIA</label>
                                            </div>
                                        </div>
                                    </h3>
                                </div>
                                <div class="col-md-12 col-sm-12 vhienra" id="cambodiadiv" style="display: block;">
                                    <div class="col-sm-12">
                                        <div class="list-group">
                                            <ul class="row">
                                                <li class="list-group-item col-md-4 col-sm-6 col-xs-12"><input value="SiemReap" name="check_cambodia[]" id="SiemReap" type="checkbox"> <label for="SiemReap">&nbsp;Siem Reap</label></li>
                                                <li class="list-group-item col-md-4 col-sm-6 col-xs-12"><input value="Phnompenh" name="check_cambodia[]" id="Phnompenh" type="checkbox"> <label for="Phnompenh">&nbsp;Phnompenh City</label> </li>
                                                <li class="list-group-item col-md-4 col-sm-6 col-xs-12"><input value="Sihanoukville" name="check_cambodia[]" id="Sihanoukville" type="checkbox"> <label for="Sihanoukville">&nbsp;Sihanoukville</label> </li>
                                                <li class="list-group-item col-md-4 col-sm-6 col-xs-12"><input value="Tonle_Sap_Lake" name="check_cambodia[]" id="TonleSapLake" type="checkbox"> <label for="TonleSapLake">&nbsp;Tonle Sap Lake</label> </li>
                                                <li class="list-group-item col-md-4 col-sm-6 col-xs-12"><input value="Battambang" name="check_cambodia[]" id="Battambang" type="checkbox"> <label for="Battambang">&nbsp;Battambang</label> </li>
                                                <li class="list-group-item col-md-4 col-sm-6 col-xs-12"><input value="Kampot" name="check_cambodia[]" id="Kampot" type="checkbox"> <label for="Kampot">&nbsp;Kampot</label> </li>
                                                <li class="list-group-item col-md-4 col-sm-6 col-xs-12"><input value="Kep_City" name="check_cambodia[]" id="KepCity" type="checkbox"> <label for="KepCity">&nbsp;Kep City</label> </li>
                                                <li class="list-group-item col-md-4 col-sm-6 col-xs-12"><input value="Rattanakiri" name="check_cambodia[]" id="Rattanakiri" type="checkbox"> <label for="Rattanakiri">&nbsp;Rattanakiri</label> </li>		
                                                <li class="list-group-item col-md-4 col-sm-6 col-xs-12"><input value="Mondulkiri" name="check_cambodia[]" id="Mondulkiri" type="checkbox"> <label for="Mondulkiri">&nbsp;Mondulkiri</label> </li>
                                                <li class="list-group-item col-md-4 col-sm-6 col-xs-12"><input value="Steung_Treng" name="check_cambodia[]" id="SteungTreng" type="checkbox"> <label for="SteungTreng">&nbsp;Steung Treng</label> </li>
                                                <li class="list-group-item col-md-4 col-sm-6 col-xs-12"><input value="Kampong_Thom" name="check_cambodia[]" id="KampongThom" type="checkbox"> <label for="KampongThom">&nbsp;Kampong Thom</label> </li>
                                                <li class="list-group-item col-md-4 col-sm-6 col-xs-12"><input value="Kratie" name="check_cambodia[]" id="Kratie" type="checkbox"> <label for="Kratie">&nbsp;Kratie</label> </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 col-sm-12 ">
                                    <h3>
                                        <div id="listResults">
                                            <div class="checkbox"> 
                                                <input id="laos" name="destination[]" value="laos" data-checkedshow="#laosdiv" aria-invalid="false" type="checkbox">
                                                <label for="laos">LAOS</label>
                                            </div>
                                        </div>
                                    </h3>
                                </div>
                                <div class="col-md-12 col-sm-12 vhienra" id="laosdiv" style="display: none;">		
                                    <div class="col-sm-12">
                                        <div class="list-group">
                                            <ul class="row">
                                                <li class="list-group-item col-md-4  col-sm-6 col-xs-12"><input value="Vientiane" name="check_laos[]" id="Vientiane" type="checkbox"> <label for="Vientiane">&nbsp;Vientiane</label> </li>
                                                <li class="list-group-item col-md-4  col-sm-6 col-xs-12"><input value="Luang_Prabang" name="check_laos[]" id="Luang Prabang" type="checkbox"> <label for="Luang Prabang">&nbsp;Luang Prabang</label> </li>		
                                                <li class="list-group-item col-md-4  col-sm-6 col-xs-12"><input value="Phonsavan" name="check_laos[]" id="Phonsavan" type="checkbox"> <label for="Phonsavan">&nbsp;Phonsavan (Plain of Jars)</label> </li>
                                                <li class="list-group-item col-md-4  col-sm-6 col-xs-12"><input value="Vang_Vieng" name="check_laos[]" id="Vang Vieng" type="checkbox"> <label for="Vang Vieng">&nbsp;Vang Vieng</label> </li>		
                                                <li class="list-group-item col-md-4  col-sm-6 col-xs-12"><input value="Khong_Island" name="check_laos[]" id="Khong Island" type="checkbox"> <label for="Khong Island">&nbsp;Khong Island</label>  </li>
                                                <li class="list-group-item col-md-4  col-sm-6 col-xs-12"><input value="Pakse" name="check_laos[]" id="Pakse" type="checkbox"> <label for="Pakse">&nbsp;Pakse</label> </li>
                                                <li class="list-group-item col-md-4  col-sm-6 col-xs-12"><input value="Nong Khiaw" name="check_laos[]" id="Nong Khiaw" type="checkbox"> <label for="Nong Khiaw">&nbsp;Nong Khiaw</label>  </li>
                                                <li class="list-group-item col-md-4  col-sm-6 col-xs-12"><input value="Houayxay" name="check_laos[]" id="Houayxay" type="checkbox"> <label for="Houayxay">&nbsp;Houayxay</label> </li>
                                                <li class="list-group-item col-md-4  col-sm-6 col-xs-12"><input value="Oudomxay" name="check_laos[]" id="Oudomxay" type="checkbox"> <label for="Oudomxay">&nbsp;Oudomxay</label> </li>
                                                <li class="list-group-item col-md-4  col-sm-6 col-xs-12"><input value="Luang Namtha" name="check_laos[]" id="Luang Namtha" type="checkbox"> <label for="Luang Namtha">&nbsp;Luang Namtha</label> </li>
                                                <li class="list-group-item col-md-4  col-sm-6 col-xs-12"><input value="Phongsali" name="check_laos[]" id="Phongsali" type="checkbox"> <label for="Phongsali">&nbsp;Phongsali</label> </li>
                                                <li class="list-group-item col-md-4  col-sm-6 col-xs-12"><input value="Pakbeng" name="check_laos[]" id="Pakbeng" type="checkbox"> <label for="Pakbeng">&nbsp;Pakbeng</label> </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <h3>
                                        <div id="listResults"> 
                                            <div class="checkbox checkbox-circle checkbox-green"> 
                                                <input id="myanmar" name="destination[]" value="myanmar" data-checkedshow="#myanmardiv" aria-invalid="false" type="checkbox">
                                                <label for="myanmar">MYANMAR</label>
                                            </div> 
                                        </div>
                                    </h3>
                                </div>
                                <div class="col-md-12 col-sm-12 vhienra" id="myanmardiv" style="display: none;">
                                    <div class="col-sm-12">
                                        <div class="list-group">
                                            <ul class="row">
                                                    <li class="list-group-item col-md-4  col-sm-6 col-xs-12"><input value="Yangon" name="check_myanmar[]" id="Yangon" type="checkbox"> <label for="Yangon">&nbsp;Yangon</label> </li>
                                                    <li class="list-group-item col-md-4  col-sm-6 col-xs-12"><input value="Mandalay" name="check_myanmar[]" id="Mandalay" type="checkbox"> <label for="Mandalay">&nbsp;Mandalay</label> </li>
                                                    <li class="list-group-item col-md-4  col-sm-6 col-xs-12"><input value="Bagan" name="check_myanmar[]" id="Bagan" type="checkbox"> <label for="Bagan">&nbsp;Bagan</label> </li>
                                                    <li class="list-group-item col-md-4  col-sm-6 col-xs-12"><input value="Inle Lake" ba="" name="check_myanmar[]" id="Inle Lake" type="checkbox"> <label for="Inle Lake">&nbsp;Inle Lake</label> </li>
                                                    <li class="list-group-item col-md-4  col-sm-6 col-xs-12"><input value="Mawlamyaing" name="check_myanmar[]" id="Mawlamyaing" type="checkbox"> <label for="Mawlamyaing">&nbsp;Mawlamyaing</label> </li>
                                                    <li class="list-group-item col-md-4  col-sm-6 col-xs-12"><input value="Kyaikhtiyo" name="check_myanmar[]" id="Kyaikhtiyo" type="checkbox"> <label for="Kyaikhtiyo">&nbsp;Kyaikhtiyo</label> </li>
                                                    <li class="list-group-item col-md-4  col-sm-6 col-xs-12"><input value="Mrauk U" name="check_myanmar[]" id="Mrauk U" type="checkbox"> <label for="Mrauk U">&nbsp;Mrauk U</label> </li>
                                                    <li class="list-group-item col-md-4  col-sm-6 col-xs-12"><input value="Ngapali" name="check_myanmar[]" id="Ngapali" type="checkbox"> <label for="Ngapali">&nbsp;Ngapali</label> </li>
                                                    <li class="list-group-item col-md-4  col-sm-6 col-xs-12"><input value="Ngwe Saung" name="check_myanmar[]" id="Ngwe Saung" type="checkbox"> <label for="Ngwe Saung">&nbsp;Ngwe Saung</label> </li>
                                                    <li class="list-group-item col-md-4  col-sm-6 col-xs-12"><input value="Golden Triangle" name="check_myanmar[]" id="Golden Triangle" type="checkbox"> <label for="Golden Triangle">&nbsp;Golden Triangle</label> </li>
                                                    <li class="list-group-item col-md-4  col-sm-6 col-xs-12"><input value="Chaung Thar" name="check_myanmar[]" id="Chaung Thar" type="checkbox"> <label for="Chaung Thar">&nbsp;Chaung Thar</label> </li>
                                                    <li class="list-group-item col-md-4  col-sm-6 col-xs-12"><input value="Nay Pyi Taw" name="check_myanmar[]" id="Nay Pyi Taw" type="checkbox"> <label for="Nay Pyi Taw">&nbsp;Nay Pyi Taw</label> </li>
                                                    <li class="list-group-item col-md-4  col-sm-6 col-xs-12"><input value="Taunggyi" name="check_myanmar[]" id="Taunggyi" type="checkbox"> <label for="Taunggyi">&nbsp;Taunggyi</label> </li>
                                                    <li class="list-group-item col-md-4  col-sm-6 col-xs-12"><input value="Pindaya" name="check_myanmar[]" id="Pindaya" type="checkbox"> <label for="Pindaya">&nbsp;Pindaya</label> </li>
                                                    <li class="list-group-item col-md-4  col-sm-6 col-xs-12"><input value="Myitkyina" name="check_myanmar[]" id="Myitkyina" type="checkbox"> <label for="Myitkyina">&nbsp;Myitkyina</label> </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <h3>
                                        <div id="listResults"> 
                                            <div class="checkbox checkbox-circle checkbox-green"> 
                                                <input id="thailand" name="destination[]" value="thailand" data-checkedshow="#thailanddiv" aria-invalid="false" type="checkbox">
                                                <label for="thailand">THAILAND</label>
                                            </div> 
                                        </div>
                                    </h3>
                                </div>
                                <div class="col-md-12 col-sm-12 vhienra" id="thailanddiv" style="display: none;">
                                    <div class="col-sm-12">
                                        <div class="list-group">
                                            <ul class="row">
                                                <li class="list-group-item col-md-4  col-sm-6 col-xs-12"><input value="Bangkok" name="check_thailand[]" id="Bangkok" type="checkbox"> <label for="Bangkok">&nbsp;Bangkok</label> </li>
                                                <li class="list-group-item col-md-4  col-sm-6 col-xs-12"><input value="Ayutthaya" name="check_thailand[]" id="Ayutthaya" type="checkbox"> <label for="Ayutthaya">&nbsp;Ayutthaya</label> </li>
                                                <li class="list-group-item col-md-4  col-sm-6 col-xs-12"><input value="Phitsanulok" name="check_thailand[]" id="Phitsanulok" type="checkbox"> <label for="Phitsanulok">&nbsp;Phitsanulok</label> </li>
                                                <li class="list-group-item col-md-4  col-sm-6 col-xs-12"><input value="Lampang" name="check_thailand[]" id="Lampang" type="checkbox"> <label for="Lampang">&nbsp;Lampang</label> </li>		
                                                <li class="list-group-item col-md-4  col-sm-6 col-xs-12"><input value="Sukhothai" name="check_thailand[]" id="Sukhothai" type="checkbox"> <label for="Sukhothai">&nbsp;Sukhothai</label> </li>
                                                <li class="list-group-item col-md-4  col-sm-6 col-xs-12"><input value="Chiang Mai" name="check_thailand[]" id="Chiang Mai" type="checkbox"> <label for="Chiang Mai">&nbsp;Chiang Mai</label> </li>
                                                <li class="list-group-item col-md-4  col-sm-6 col-xs-12"><input value="Chiang Rai" name="check_thailand[]" id="Chiang Rai" type="checkbox"> <label for="Chiang Rai">&nbsp;Chiang Rai</label> </li>
                                                <li class="list-group-item col-md-4  col-sm-6 col-xs-12"><input value="Mae Hong Son" name="check_thailand[]" id="Mae Hong Son" type="checkbox"> <label for="Mae Hong Son">&nbsp;Mae Hong Son</label> </li>
                                                <li class="list-group-item col-md-4  col-sm-6 col-xs-12"><input value="Phuket" name="check_thailand[]" id="Phuket" type="checkbox"> <label for="Phuket">&nbsp;Phuket</label> </li>
                                                <li class="list-group-item col-md-4  col-sm-6 col-xs-12"><input value="Samui" name="check_thailand[]" id="Samui" type="checkbox"> <label for="Samui">&nbsp;Samui</label> </li>
                                                <li class="list-group-item col-md-4  col-sm-6 col-xs-12"><input value="Krabi" name="check_thailand[]" id="Krabi" type="checkbox"> <label for="Krabi">&nbsp;Krabi</label> </li>
                                                <li class="list-group-item col-md-4  col-sm-6 col-xs-12"><input value="Pattaya" name="check_thailand[]" id="Pattaya" type="checkbox"> <label for="Pattaya">&nbsp;Pattaya</label> </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <h3>
                                        <div id="listResults"> 
                                            <div class="checkbox checkbox-circle checkbox-green"> 
                                                <input id="vietnam" name="destination[]" value="vietnam" data-checkedshow="#vietnamdiv" aria-invalid="false" type="checkbox">
                                                <label for="vietnam">VIETNAM</label>
                                            </div> 
                                        </div>
                                    </h3>
                                </div>
                                <div class="col-md-12 col-sm-12 vhienra" id="vietnamdiv" style="display: none;">
                                    <div class="col-sm-12">
                                        <div class="list-group">
                                            <ul class="row">
                                                <li class="list-group-item col-md-4  col-sm-6 col-xs-12"><input value="Hanoi" name="check_vietnam[]" id="hanoi" type="checkbox"> <label for="hanoi">&nbsp;Hanoi</label></li>
                                                <li class="list-group-item col-md-4  col-sm-6 col-xs-12"><input value="HalongBay" name="check_vietnam[]" id="Halong" type="checkbox"> <label for="Halong">&nbsp;Halong bay</label></li>
                                                <li class="list-group-item col-md-4  col-sm-6 col-xs-12"><input value="Sapa" name="check_vietnam[]" id="Sapa" type="checkbox"> <label for="Sapa">&nbsp;Sapa</label></li>
                                                <li class="list-group-item col-md-4  col-sm-6 col-xs-12"><input value="NinhBinh_TamCoc" name="check_vietnam[]" id="NinhBinh" type="checkbox"> <label for="NinhBinh">&nbsp;Ninh Binh - Tam Coc</label></li>
                                                <li class="list-group-item col-md-4  col-sm-6 col-xs-12"><input value="PerfumePagoda" name="check_vietnam[]" id="Perfume" type="checkbox"> <label for="Perfume">&nbsp;Perfume pagoda</label></li>
                                                <li class="list-group-item col-md-4  col-sm-6 col-xs-12"><input value="Dien_Bien" name="check_vietnam[]" id="DienBien" type="checkbox"> <label for="DienBien">&nbsp;Dien Bien</label></li>
                                                <li class="list-group-item col-md-4  col-sm-6 col-xs-12"><input value="Ha_Giang" name="check_vietnam[]" id="HaGiang" type="checkbox"> <label for="HaGiang">&nbsp;Ha Giang</label></li>
                                                <li class="list-group-item col-md-4  col-sm-6 col-xs-12"><input value="MaiChau" name="check_vietnam[]" id="MaiChau" type="checkbox"> <label for="MaiChau">&nbsp;Mai Chau</label></li>
                                                <li class="list-group-item col-md-4  col-sm-6 col-xs-12"><input value="HaiPhong_CatBa" name="check_vietnam[]" id="HaiPhong" type="checkbox"> <label for="HaiPhong">&nbsp;Hai Phong - Cat Ba</label></li>
                                                <li class="list-group-item col-md-4  col-sm-6 col-xs-12"><input value="Hue" name="check_vietnam[]" id="Hue" type="checkbox"> <label for="Hue">&nbsp;Hue</label></li>
                                                <li class="list-group-item col-md-4  col-sm-6 col-xs-12"><input value="Hoian" name="check_vietnam[]" id="Hoian" type="checkbox"> <label for="Hoian">&nbsp;Hoian</label></li>
                                                <li class="list-group-item col-md-4  col-sm-6 col-xs-12"><input value="MySon" name="check_vietnam[]" id="MySon" type="checkbox"> <label for="MySon">&nbsp;My Son</label></li>
                                                <li class="list-group-item col-md-4  col-sm-6 col-xs-12"><input value="LangCo_DMZ" name="check_vietnam[]" id="DMZ" type="checkbox"> <label for="DMZ">&nbsp;DMZ</label></li>
                                                <li class="list-group-item col-md-4  col-sm-6 col-xs-12"><input value="QuiNhon" name="check_vietnam[]" id="QuiNhon" type="checkbox"> <label for="QuiNhon">&nbsp;Qui Nhon</label></li>
                                                <li class="list-group-item col-md-4  col-sm-6 col-xs-12"><input value="NhaTrang" name="check_vietnam[]" id="NhaTrang" type="checkbox"> <label for="NhaTrang">&nbsp;Nha Trang</label></li>
                                                <li class="list-group-item col-md-4  col-sm-6 col-xs-12"><input value="PhongNha" name="check_vietnam[]" id="PhongNha" type="checkbox"> <label for="PhongNha">&nbsp;Phong Nha</label></li>
                                                <li class="list-group-item col-md-4  col-sm-6 col-xs-12"><input value="HCMCity_Saigon" name="check_vietnam[]" id="Saigon" type="checkbox"> <label for="Saigon">&nbsp;HCM City (Saigon)</label></li>
                                                <li class="list-group-item col-md-4  col-sm-6 col-xs-12"><input value="CuChi_TayNinh" name="check_vietnam[]" id="CuChi" type="checkbox"> <label for="CuChi">&nbsp;Cu Chi - Tay Ninh</label></li>
                                                <li class="list-group-item col-md-4  col-sm-6 col-xs-12"><input value="Can_Tho" name="check_vietnam[]" id="CanTho" type="checkbox"> <label for="CanTho">&nbsp;Can Tho</label></li>
                                                <li class="list-group-item col-md-4  col-sm-6 col-xs-12"><input value="Chau_Doc" name="check_vietnam[]" id="ChauDoc" type="checkbox"> <label for="ChauDoc">&nbsp;Chau Doc</label></li>
                                                <li class="list-group-item col-md-4  col-sm-6 col-xs-12"><input value="MuiNe_PhanThiet" name="check_vietnam[]" id="MuiNe" type="checkbox"> <label for="MuiNe">&nbsp;Mui Ne - Phan Thiet</label></li>
                                                <li class="list-group-item col-md-4  col-sm-6 col-xs-12"><input value="PhuQuoc" name="check_vietnam[]" id="PhuQuoc" type="checkbox"> <label for="PhuQuoc">&nbsp;Phu Quoc</label></li>
                                                <li class="list-group-item col-md-4  col-sm-6 col-xs-12"><input value="DaLat" name="check_vietnam[]" id="DaLat" type="checkbox"> <label for="DaLat">&nbsp;Da Lat</label></li>
                                                <li class="list-group-item col-md-4  col-sm-6 col-xs-12"><input value="Central_Highland" name="check_vietnam[]" id="CentralHighland" type="checkbox"> <label for="CentralHighland">&nbsp;Central Highland</label></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group col-md-12 col-sm-12">
                                    <label for="hhmess" class="col-sm-12 col-form-label">Your message:</label>
                                    <div class="col-sm-12"><textarea name="hh[hhmess]" class="form-control" id="hhmess" rows="3"></textarea>
                                    </div>
                                </div>
                                <div class="form-check form-trai col-sm-12">
                                    <label class="form-check-label chunghieng">
                                        <input type="checkbox" class="form-check-input" name="hh[email_copy]" checked="">
                                        &nbsp;&nbsp;&nbsp;Send copy to yourself
                                    </label>
                                </div>
                                <div class="form-check form-trai col-sm-12">
                                    <label class="form-check-label chunghieng">
                                        <input name="hh[Agree]" type="checkbox" class="form-check-input" checked="">
                                        &nbsp;&nbsp;&nbsp;I certify that I have read and agreed to the <a href="/term-conditions.html" target="_blank">Terms &amp; Conditions</a>, <a href="/privacy-policy.html" target="_blank">Privacy Policy</a>
                                    </label>
                                </div>
                                <div class="form-check form-trai col-sm-12">
                                    <label class="form-check-label chunghieng">
                                    <i>* NOTE: If you don't receive our email reply in your inbox in the next 24 hours, please check your spam folder, or call us: 0084 934 564 690.</i>							</label>
                                </div>
                                <div class="col-sm-12">
                                    <button type="submit" id="submit" name="submit" class="btn form-trai">Start your Journey</button>
                                </div>
                                
                                <div class="form-check form-trai col-sm-12">
                                    <div class="row">
                                        {!! get_option('customize_tour') !!}
                                    </div>
                                </div>
                                <div class="form-check col-sm-12 form-trai chusieunho leftmobile">We respect privacy policy. Your personal information is safe with us. You will receive an email acknowledgement submitting this form.<br></div>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@stop