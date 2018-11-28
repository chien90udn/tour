@extends('layouts.layout')

@section('content')
<div class="clearfix"></div>
<div class="soutaisasrtip">
    <div class="container">

        <div class="col-md-5">
            <div class="aisatxt">
                <div class="aisaheding">
                    <h2>EXPERIENCE</h2>
                    <h6>SOUTHEAST ASIA</h6>
                </div>
                <p>A large selection of travel services in Southeast Asia</p>
            </div>
        </div>

        <div class="col-md-4">
            <div class="pakegedetials">
                <div class="pakeicon"><i class="fa fa-picture-o iconsshow" aria-hidden="true"></i></div>
                <div class="pakeginfo">
                    <h3><a href="#"> TOUR PACKAGES </a></h3>
                    <h4>A smart ways to travel</h4>
                </div>
            </div>
            <div class="pakegedetials">
                <div class="pakeicon"><i class="fa fa-map-marker iconsshow" aria-hidden="true"></i></div>
                <div class="pakeginfo">
                    <h3><a href="#"> CITY TRANSFER</a></h3>
                    <h4>Comfortably, Reliably and Safely</h4>
                </div>
            </div>
        </div>
        
        <div class="col-md-3">
            <div class="pakegedetials">
                <div class="pakeicon"><i class="fa fa-camera iconsshow" aria-hidden="true"></i></div>
                <div class="pakeginfo">
                    <h3><a href="#">DAILY SIGHTSEEING</a></h3>
                    <h4>Make your day unforgettable</h4>
                </div>
            </div>
            <div class="pakegedetials">
                <div class="pakeicon"><i class="fa fa-pencil-square-o iconsshow" aria-hidden="true"></i></div>
                <div class="pakeginfo">
                    <h3><a href="#">CUSTOMIZED TRAVEL </a></h3>
                    <h4>Tailor-made tours</h4>
                </div>
            </div>
        </div>

    </div>
</div>

<div class="discoverstrip">
    <div class="container padpakage">
        {!! get_option('main-why') !!}         
    </div>
</div>

<div class="holidaystrip">
    <div class="container">
        <div class="hodlidayhead">
            <h3>HOLIDAY PACKAGE OF THE MONTH</h3>
        </div>
    </div>
</div>

<div class="pakeagediv">
    <div class="container">
        @foreach(get_list_tours(12,43,true,'featured')->chunk(4) as $tours)
        <div class="row">
            @foreach($tours as $tour)
            <div class="col-md-3 padpakage">
                <div class="pakegdetials">
                    <div class="pakegimg"><img src="{{ @$tour->photo }}" border="0" alt="" /></div>   
                    <div class="packinfos">
                        <h4>{{ @$tour->name }}</h4>
                        <div class="durations">
                            <div class="drutionshow">
                                <div class="drutionshow">
                                    <h6>DURATION / {{ @$tour->duration }} DAYS</h6>
                                    <div class="staricon">
                                        <i class="fa fa-star stsrcolor" aria-hidden="true"></i>
                                        <i class="fa fa-star stsrcolor" aria-hidden="true"></i>
                                        <i class="fa fa-star stsrcolor" aria-hidden="true"></i>
                                        <i class="fa fa-star stsrcolor" aria-hidden="true"></i>
                                        <i class="fa fa-star stsrcolor" aria-hidden="true"></i>
                                    </div>                                
                                </div>                                                        
                            </div>
                            <div class="rateright">
                                <h3>{{ $tour->price > 0 ? '$'.number_format($tour->price) : 'Contact' }}</h3>
                                <p>TOUR PRICE</p>
                            </div>
                        </div>
                        <p>{{ strip_tags(str_limit(@$tour->description,80)) }}</p>
                        <a href="{{ route('tours.show',@$tour->name_link) }}" class="slectbtn">SELECT</a>
                    </div>
                </div>
            </div>
            @endforeach
            {{-- <div class="col-md-3 padpakage">
                <div class="pakegdetials">
                    <div class="pakegimg"><img src="/assets/images/pack02.jpg" border="0" alt="" /></div>   
                    <div class="packinfos">
                        <h4>Northern Thailand Scenic Route</h4>
                        <div class="durations">
                            <div class="drutionshow">
                                <div class="drutionshow">
                                    <h6>DURATION / 7 DAYS</h6>
                                    <div class="staricon">
                                        <i class="fa fa-star stsrcolor" aria-hidden="true"></i>
                                        <i class="fa fa-star stsrcolor" aria-hidden="true"></i>
                                        <i class="fa fa-star stsrcolor" aria-hidden="true"></i>
                                        <i class="fa fa-star stsrcolor" aria-hidden="true"></i>
                                        <i class="fa fa-star stsrcolor" aria-hidden="true"></i>
                                    </div>                                
                                </div>                                                        
                            </div>
                            <div class="rateright">
                                <h3>25,375฿</h3>
                                <p>TOUR PRICE</p>
                            </div>
                        </div>
                        <p>Your Thailand northern trip will never be completed and fulfilled without this </p>
                        <a href="#" class="slectbtn">SELECT</a>
                    </div>
                </div>
            </div>        
        
            <div class="col-md-3 padpakage">
                <div class="pakegdetials">
                    <div class="pakegimg"><img src="/assets/images/pack03.jpg" border="0" alt="" /></div>   
                    <div class="packinfos">
                        <h4>The Treasures of Ayutthaya</h4>
                        <div class="durations">
                            <div class="drutionshow">
                                <div class="drutionshow">
                                    <h6>DURATION / 7 DAYS</h6>
                                    <div class="staricon">
                                        <i class="fa fa-star stsrcolor" aria-hidden="true"></i>
                                        <i class="fa fa-star stsrcolor" aria-hidden="true"></i>
                                        <i class="fa fa-star stsrcolor" aria-hidden="true"></i>
                                        <i class="fa fa-star stsrcolor" aria-hidden="true"></i>
                                        <i class="fa fa-star stsrcolor" aria-hidden="true"></i>
                                    </div>                                
                                </div>                                                        
                            </div>
                            <div class="rateright">
                                <h3>25,375฿</h3>
                                <p>TOUR PRICE</p>
                            </div>
                        </div>
                        <p>In the year 2016, Bangkok reclaimed the top rank of the most visited city in... </p>
                        <a href="#" class="slectbtn">SELECT</a>
                    </div>
                </div>
            </div>        
        
            <div class="col-md-3 padpakage">
                <div class="pakegdetials">
                    <div class="pakegimg"><img src="/assets/images/pack04.jpg" border="0" alt="" /></div>   
                    <div class="packinfos">
                        <h4>The Treasures of Ayutthaya</h4>
                        <div class="durations">
                            <div class="drutionshow">
                                <div class="drutionshow">
                                    <h6>DURATION / 7 DAYS</h6>
                                    <div class="staricon">
                                        <i class="fa fa-star stsrcolor" aria-hidden="true"></i>
                                        <i class="fa fa-star stsrcolor" aria-hidden="true"></i>
                                        <i class="fa fa-star stsrcolor" aria-hidden="true"></i>
                                        <i class="fa fa-star stsrcolor" aria-hidden="true"></i>
                                        <i class="fa fa-star stsrcolor" aria-hidden="true"></i>
                                    </div>                                
                                </div>                                                        
                            </div>
                            <div class="rateright">
                                <h3>25,375฿</h3>
                                <p>TOUR PRICE</p>
                            </div>
                        </div>
                        <p>In the year 2016, Bangkok reclaimed the top rank of the most visited city in... </p>
                        <a href="#" class="slectbtn">SELECT</a>
                    </div>
                </div>
            </div> --}}

        </div>
        @endforeach
        {{-- <div class="row">
            <div class="col-md-3 padpakage">
                <div class="pakegdetials">
                    <div class="pakegimg"><img src="/assets/images/pack05.jpg" border="0" alt="" /></div>   
                    <div class="packinfos">
                        <h4>The Treasures of Ayutthaya</h4>
                        <div class="durations">
                            <div class="drutionshow">
                                <div class="drutionshow">
                                    <h6>DURATION / 7 DAYS</h6>
                                    <div class="staricon">
                                        <i class="fa fa-star stsrcolor" aria-hidden="true"></i>
                                        <i class="fa fa-star stsrcolor" aria-hidden="true"></i>
                                        <i class="fa fa-star stsrcolor" aria-hidden="true"></i>
                                        <i class="fa fa-star stsrcolor" aria-hidden="true"></i>
                                        <i class="fa fa-star stsrcolor" aria-hidden="true"></i>
                                    </div>                                
                                </div>                                                        
                            </div>
                            <div class="rateright">
                                <h3>25,375฿</h3>
                                <p>TOUR PRICE</p>
                            </div>
                        </div>
                        <p>In the year 2016, Bangkok reclaimed the top rank of the most visited city in... </p>
                        <a href="#" class="slectbtn">SELECT</a>
                    </div>
                </div>
            </div>
            
            <div class="col-md-3 padpakage">
                <div class="pakegdetials">
                    <div class="pakegimg"><img src="/assets/images/pack06.jpg" border="0" alt="" /></div>   
                    <div class="packinfos">
                        <h4>The Treasures of Ayutthaya</h4>
                        <div class="durations">
                            <div class="drutionshow">
                                <div class="drutionshow">
                                    <h6>DURATION / 7 DAYS</h6>
                                    <div class="staricon">
                                        <i class="fa fa-star stsrcolor" aria-hidden="true"></i>
                                        <i class="fa fa-star stsrcolor" aria-hidden="true"></i>
                                        <i class="fa fa-star stsrcolor" aria-hidden="true"></i>
                                        <i class="fa fa-star stsrcolor" aria-hidden="true"></i>
                                        <i class="fa fa-star stsrcolor" aria-hidden="true"></i>
                                    </div>                                
                                </div>                                                        
                            </div>
                            <div class="rateright">
                                <h3>25,375฿</h3>
                                <p>TOUR PRICE</p>
                            </div>
                        </div>
                        <p>In the year 2016, Bangkok reclaimed the top rank of the most visited city in... </p>
                        <a href="#" class="slectbtn">SELECT</a>
                    </div>
                </div>
            </div>        
        
            <div class="col-md-3 padpakage">
                <div class="pakegdetials">
                    <div class="pakegimg"><img src="/assets/images/pack07.jpg" border="0" alt="" /></div>   
                    <div class="packinfos">
                        <h4>The Treasures of Ayutthaya</h4>
                        <div class="durations">
                            <div class="drutionshow">
                                <div class="drutionshow">
                                    <h6>DURATION / 7 DAYS</h6>
                                    <div class="staricon">
                                        <i class="fa fa-star stsrcolor" aria-hidden="true"></i>
                                        <i class="fa fa-star stsrcolor" aria-hidden="true"></i>
                                        <i class="fa fa-star stsrcolor" aria-hidden="true"></i>
                                        <i class="fa fa-star stsrcolor" aria-hidden="true"></i>
                                        <i class="fa fa-star stsrcolor" aria-hidden="true"></i>
                                    </div>                                
                                </div>                                                        
                            </div>
                            <div class="rateright">
                                <h3>25,375฿</h3>
                                <p>TOUR PRICE</p>
                            </div>
                        </div>
                        <p>In the year 2016, Bangkok reclaimed the top rank of the most visited city in... </p>
                        <a href="#" class="slectbtn">SELECT</a>
                    </div>
                </div>
            </div>        
        
            <div class="col-md-3 padpakage">
                <div class="pakegdetials">
                    <div class="pakegimg"><img src="/assets/images/pack08.jpg" border="0" alt="" /></div>   
                    <div class="packinfos">
                        <h4>The Treasures of Ayutthaya</h4>
                        <div class="durations">
                            <div class="drutionshow">
                                <div class="drutionshow">
                                    <h6>DURATION / 7 DAYS</h6>
                                    <div class="staricon">
                                        <i class="fa fa-star stsrcolor" aria-hidden="true"></i>
                                        <i class="fa fa-star stsrcolor" aria-hidden="true"></i>
                                        <i class="fa fa-star stsrcolor" aria-hidden="true"></i>
                                        <i class="fa fa-star stsrcolor" aria-hidden="true"></i>
                                        <i class="fa fa-star stsrcolor" aria-hidden="true"></i>
                                    </div>                                
                                </div>                                                        
                            </div>
                            <div class="rateright">
                                <h3>25,375฿</h3>
                                <p>TOUR PRICE</p>
                            </div>
                        </div>
                        <p>In the year 2016, Bangkok reclaimed the top rank of the most visited city in... </p>
                        <a href="#" class="slectbtn">SELECT</a>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="col-md-3 padpakage">
                <div class="pakegdetials">
                    <div class="pakegimg"><img src="/assets/images/pack09.jpg" border="0" alt="" /></div>   
                    <div class="packinfos">
                        <h4>The Treasures of Ayutthaya</h4>
                        <div class="durations">
                            <div class="drutionshow">
                                <div class="drutionshow">
                                    <h6>DURATION / 7 DAYS</h6>
                                    <div class="staricon">
                                        <i class="fa fa-star stsrcolor" aria-hidden="true"></i>
                                        <i class="fa fa-star stsrcolor" aria-hidden="true"></i>
                                        <i class="fa fa-star stsrcolor" aria-hidden="true"></i>
                                        <i class="fa fa-star stsrcolor" aria-hidden="true"></i>
                                        <i class="fa fa-star stsrcolor" aria-hidden="true"></i>
                                    </div>                                
                                </div>                                                        
                            </div>
                            <div class="rateright">
                                <h3>25,375฿</h3>
                                <p>TOUR PRICE</p>
                            </div>
                        </div>
                        <p>In the year 2016, Bangkok reclaimed the top rank of the most visited city in... </p>
                        <a href="#" class="slectbtn">SELECT</a>
                    </div>
                </div>
            </div>
            
            <div class="col-md-3 padpakage">
                <div class="pakegdetials">
                    <div class="pakegimg"><img src="/assets/images/pack10.jpg" border="0" alt="" /></div>   
                    <div class="packinfos">
                        <h4>The Treasures of Ayutthaya</h4>
                        <div class="durations">
                            <div class="drutionshow">
                                <div class="drutionshow">
                                    <h6>DURATION / 7 DAYS</h6>
                                    <div class="staricon">
                                        <i class="fa fa-star stsrcolor" aria-hidden="true"></i>
                                        <i class="fa fa-star stsrcolor" aria-hidden="true"></i>
                                        <i class="fa fa-star stsrcolor" aria-hidden="true"></i>
                                        <i class="fa fa-star stsrcolor" aria-hidden="true"></i>
                                        <i class="fa fa-star stsrcolor" aria-hidden="true"></i>
                                    </div>                                
                                </div>                                                        
                            </div>
                            <div class="rateright">
                                <h3>25,375฿</h3>
                                <p>TOUR PRICE</p>
                            </div>
                        </div>
                        <p>In the year 2016, Bangkok reclaimed the top rank of the most visited city in... </p>
                        <a href="#" class="slectbtn">SELECT</a>
                    </div>
                </div>
            </div>        
        
            <div class="col-md-3 padpakage">
                <div class="pakegdetials">
                    <div class="pakegimg"><img src="/assets/images/pack11.jpg" border="0" alt="" /></div>   
                    <div class="packinfos">
                        <h4>The Treasures of Ayutthaya</h4>
                        <div class="durations">
                            <div class="drutionshow">
                                <div class="drutionshow">
                                    <h6>DURATION / 7 DAYS</h6>
                                    <div class="staricon">
                                        <i class="fa fa-star stsrcolor" aria-hidden="true"></i>
                                        <i class="fa fa-star stsrcolor" aria-hidden="true"></i>
                                        <i class="fa fa-star stsrcolor" aria-hidden="true"></i>
                                        <i class="fa fa-star stsrcolor" aria-hidden="true"></i>
                                        <i class="fa fa-star stsrcolor" aria-hidden="true"></i>
                                    </div>                                
                                </div>                                                        
                            </div>
                            <div class="rateright">
                                <h3>25,375฿</h3>
                                <p>TOUR PRICE</p>
                            </div>
                        </div>
                        <p>In the year 2016, Bangkok reclaimed the top rank of the most visited city in... </p>
                        <a href="#" class="slectbtn">SELECT</a>
                    </div>
                </div>
            </div>        
        
            <div class="col-md-3 padpakage">
                <div class="pakegdetials">
                    <div class="pakegimg"><img src="/assets/images/pack12.jpg" border="0" alt="" /></div>   
                    <div class="packinfos">
                        <h4>The Treasures of Ayutthaya</h4>
                        <div class="durations">
                            <div class="drutionshow">
                                <div class="drutionshow">
                                    <h6>DURATION / 7 DAYS</h6>
                                    <div class="staricon">
                                        <i class="fa fa-star stsrcolor" aria-hidden="true"></i>
                                        <i class="fa fa-star stsrcolor" aria-hidden="true"></i>
                                        <i class="fa fa-star stsrcolor" aria-hidden="true"></i>
                                        <i class="fa fa-star stsrcolor" aria-hidden="true"></i>
                                        <i class="fa fa-star stsrcolor" aria-hidden="true"></i>
                                    </div>                                
                                </div>                                                        
                            </div>
                            <div class="rateright">
                                <h3>25,375฿</h3>
                                <p>TOUR PRICE</p>
                            </div>
                        </div>
                        <p>In the year 2016, Bangkok reclaimed the top rank of the most visited city in... </p>
                        <a href="#" class="slectbtn">SELECT</a>
                    </div>
                </div>
            </div>
        </div> --}}
        
        <a href="/tours/indochina/" class="viewallpagkebtn">VIEW ALL TOUR PACKAGES</a>
        
    </div>
</div>



<div class="holidaystrip">
    <div class="container">
        <div class="hodlidayhead">
            <h3>ONE DAY TRIP/SIGHTSEEING TOUR OF THE MONTH</h3>
        </div>
    </div>
</div>


<div class="tripstrip">
    <div class="container">
        @foreach(get_list_tours(16,43,true,'featured') as $tour)
            @if($loop->iteration > 12)
                <div class="row">
                    <div class="tripinfo">
                        <div class="col-md-3 trippad">
                            <div class="tripimg"><a href="{{ route('tours.show',@$tour->name_link) }}"><img src="{{ @$tour->photo }}" border="0" alt=""  /></a></div>
                        </div>
                        <div class="col-md-8 trippad">
                            <div class="tripdetails">
                                <h3><a href="{{ route('tours.show',@$tour->name_link) }}">{{ @$tour->name }}</a></h3>
                                <h6>DURATION / {{ @$tour->duration }} Days <div class="tourstarformobile">
                                    <ul>
                                        <li><i class="fa fa-star stsrcolor" aria-hidden="true"></i></li>
                                        <li><i class="fa fa-star stsrcolor" aria-hidden="true"></i></li>
                                        <li><i class="fa fa-star stsrcolor" aria-hidden="true"></i></li>
                                        <li><i class="fa fa-star stsrcolor" aria-hidden="true"></i></li>
                                        <li><i class="fa fa-star stsrcolor" aria-hidden="true"></i></li>
                                    </ul>                           
                                </div></h6>
                                <div class="tripshowinfos">
                                    <p>{{ strip_tags(str_limit(@$tour->description,220)) }}</p>
{{--                                     <span>TOUR CATALOG : <a href="{{ route('tours.show',@$tour->name_link) }}" class="histr">HISTORY</a></span> --}}
                                </div>
                            </div>
                        </div>
                        <div class="col-md-1 trippad">
                            <div class="tourprize">
                                <div class="tourstar">
                                    <ul>
                                        <li><i class="fa fa-star stsrcolor" aria-hidden="true"></i></li>
                                        <li><i class="fa fa-star stsrcolor" aria-hidden="true"></i></li>
                                        <li><i class="fa fa-star stsrcolor" aria-hidden="true"></i></li>
                                        <li><i class="fa fa-star stsrcolor" aria-hidden="true"></i></li>
                                        <li><i class="fa fa-star stsrcolor" aria-hidden="true"></i></li>
                                    </ul>                           
                                </div>
                              <div class="onlycost">   <h4>{{ $tour->price > 0 ? '$'.number_format($tour->price) : 'Contact' }}</h4>
                                <h6>TOUR PRICE</h6>
                                </div>
                                <div class="select-button">
                                 <a href="{{ route('tours.show',@$tour->name_link) }}" class="slectbtn02">SELECT</a>   
                            </div>                                          
                            </div>
                        </div>
                    </div>
                </div>
            @endif
        @endforeach
        
        
        {{-- <div class="row">
            <div class="tripinfo">
                <div class="col-md-3 trippad">
                    <div class="tripimg"><a href="#"><img src="/assets/images/trip02.jpg" border="0" alt=""  /></a></div>
                </div>
                <div class="col-md-8 trippad">
                    <div class="tripdetails">
                        <h3><a href="#">Bangkok Landmarks</a></h3>
                        <h6>DURATION / ONE DAY <div class="tourstarformobile">
                            <ul>
                                <li><i class="fa fa-star stsrcolor" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star stsrcolor" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star stsrcolor" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star stsrcolor" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star stsrcolor" aria-hidden="true"></i></li>
                            </ul>                           
                        </div></h6>
                        <div class="tripshowinfos">
                            <p>A full-day tour to the ancient city of Ayutthaya, The Thai capital for 417 years, is one of Thailand’s major tourist attractions. Many ancient ruins and art works can be seen in a city that was founded in 1350 by </p>
                            <span>TOUR CATALOG : <a href="#" class="histr">HISTORY</a></span>
                        </div>
                    </div>
                </div>
                <div class="col-md-1 trippad">
                    <div class="tourprize">
                        <div class="tourstar">
                            <ul>
                                <li><i class="fa fa-star stsrcolor" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star stsrcolor" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star stsrcolor" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star stsrcolor" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star stsrcolor" aria-hidden="true"></i></li>
                            </ul>                           
                        </div>
                        <div class="onlycost">   <h4>3,650฿</h4>
                        <h6>TOUR PRICE</h6>
                        </div>
                        <div class="select-button">
                         <a href="#" class="slectbtn02">SELECT</a>   
                    </div>                                          
                    </div>
                </div>
            </div>
        </div>
        
        
        
        <div class="row">
            <div class="tripinfo">
                <div class="col-md-3 trippad">
                    <div class="tripimg"><a href="#"><img src="/assets/images/trip03.jpg" border="0" alt=""  /></a></div>
                </div>
                <div class="col-md-8 trippad">
                    <div class="tripdetails">
                        <h3><a href="#">Bridge over the River Kwai + Erawan Waterfall + Tiger Cave Temple</a></h3>
                        <h6>DURATION / ONE DAY <div class="tourstarformobile">
                            <ul>
                                <li><i class="fa fa-star stsrcolor" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star stsrcolor" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star stsrcolor" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star stsrcolor" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star stsrcolor" aria-hidden="true"></i></li>
                            </ul>                           
                        </div></h6>
                        <div class="tripshowinfos">
                            <p>A full-day tour to the ancient city of Ayutthaya, The Thai capital for 417 years, is one of Thailand’s major tourist attractions. Many ancient ruins and art works can be seen in a city that was founded in 1350 by </p>
                            <span>TOUR CATALOG : <a href="#" class="histr">HISTORY</a></span>
                        </div>
                    </div>
                </div>
                <div class="col-md-1 trippad">
                    <div class="tourprize">
                        <div class="tourstar">
                            <ul>
                                <li><i class="fa fa-star stsrcolor" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star stsrcolor" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star stsrcolor" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star stsrcolor" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star stsrcolor" aria-hidden="true"></i></li>
                            </ul>                           
                        </div>
                       <div class="onlycost">   <h4>3,650฿</h4>
                        <h6>TOUR PRICE</h6>
                        </div>
                        <div class="select-button">
                         <a href="#" class="slectbtn02">SELECT</a>   
                    </div>                                          
                    </div>
                </div>
            </div>
        </div>
        
        
        <div class="row">
            <div class="tripinfo">
                <div class="col-md-3 trippad">
                    <div class="tripimg"><a href="#"><img src="/assets/images/trip04.jpg" border="0" alt=""  /></a></div>
                </div>
                <div class="col-md-8 trippad">
                    <div class="tripdetails">
                        <h3><a href="#">One night in Bangkok</a></h3>
                        <h6>DURATION / ONE DAY <div class="tourstarformobile">
                            <ul>
                                <li><i class="fa fa-star stsrcolor" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star stsrcolor" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star stsrcolor" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star stsrcolor" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star stsrcolor" aria-hidden="true"></i></li>
                            </ul>                           
                        </div></h6>
                        <div class="tripshowinfos">
                            <p>A full-day tour to the ancient city of Ayutthaya, The Thai capital for 417 years, is one of Thailand’s major tourist attractions. Many ancient ruins and art works can be seen in a city that was founded in 1350 by </p>
                            <span>TOUR CATALOG : <a href="#" class="histr">HISTORY</a></span>
                        </div>
                    </div>
                </div>
                <div class="col-md-1 trippad">
                    <div class="tourprize">
                        <div class="tourstar">
                            <ul>
                                <li><i class="fa fa-star stsrcolor" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star stsrcolor" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star stsrcolor" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star stsrcolor" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star stsrcolor" aria-hidden="true"></i></li>
                            </ul>                           
                        </div>
                     <div class="onlycost">   <h4>3,650฿</h4>
                        <h6>TOUR PRICE</h6>
                        </div>
                        <div class="select-button">
                         <a href="#" class="slectbtn02">SELECT</a>   
                    </div>                       
                    </div>
                </div>
            </div>
        </div> --}}
        
         <a href="/tours/indochina/" class="viewallpagkebtn">VIEW ALL TOUR PACKAGES</a>
        
    </div>
</div>



<div class="gudiediv">
    <div class="gudideinfoshow">
            <h2>Travel Guides</h2>
            <div class="guidegellery">
                <div class="grid">
                    {!! get_option('travel-guides') !!}
                </div>
            </div>
    </div>
</div>


<div class="pakegefull">
    <div class="container">
        <div class="packeginfoss">
            <div class="col-md-3 col-sm-6 col-xs-6">
                <div class="infoshow">
                    <h5>63</h5>
                    <p>HOLIDAY PACKAGES</p>
                </div>
            </div>
            
            <div class="col-md-3 col-sm-6 col-xs-6">
                <div class="infoshow">
                    <h5>208</h5>
                    <p>SIGHTSEEING TOURS</p>
                </div>
            </div>
            
            <div class="col-md-3 col-sm-6 col-xs-6">
                <div class="infoshow">
                    <h5>151</h5>
                    <p>TRANSFER ROUTES</p>
                </div>
            </div>
            
            <div class="col-md-3 col-sm-6 col-xs-6">
                <div class="infoshow bornone">
                    <h5>45768</h5>
                    <p>HAPPY CLIENTS</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="cityimg"><img src="/assets/images/city-bangkok2.jpg" alt="" /></div>

<div class="thailand-transfer">
<div class="row">
<div class="col-md-6 pull-right">
<div class="row"><img src="/assets/images/pickup01.jpg" alt="" /></div>
</div>
<div class="col-md-6 pull-left">
<div class="thailand-transfer-content">
<h1>THAILAND</h1>
<h2>TRANSFER</h2>
<p>Thailand Airports Pick-up with professional drivers and high quality vehicles</p>
<a href="#">BOOK NOW</a>
</div>
</div>
</div>
</div>

<div class="thailand-transfer bronbottom">
<div class="row">
<div class="col-md-6">
<div class="row"><img src="/assets/images/driver1.jpg" alt="" /></div>
</div>
<div class="col-md-6">
<div class="thailand-transfer-content">
<h1>PRIVATE</h1>
<h2>TRANSPORT</h2>
<p>Travel the world with our professional drivers behind the wheel</p>
<a href="#">EXPLORE</a>
</div>
</div>
</div>
</div>


<div class="why-book-section">
<div class="container">
<h1><span>WHY</span> BOOK WITH US?</h1>
<div class="row">

<div class="col-md-4">
<div class="why-book-links">
<h3><a href="#">Authentic Travel Experience</a></h3>
<p>Come and experience South East Asia with us.</p>
</div>
</div>

<div class="col-md-4">
<div class="why-book-links">
<h3><a href="#">Freedom & Flexibility service</a></h3>
<p>You choose and we arrange it.</p>
</div>
</div>

<div class="col-md-4">
<div class="why-book-links">
<h3><a href="#">Multiple Classes for Selection</a></h3>
<p>Choose the options suitable for you.</p>
</div>
</div>

<div class="col-md-4">
<div class="why-book-links">
<h3><a href="#">Reliable Transportation</a></h3>
<p>Fully maintained vehicles with professional drivers.</p>
</div>
</div>

<div class="col-md-4">
<div class="why-book-links">
<h3><a href="#">Professional Team</a></h3>
<p>Guides that comes with knowledge and experience.</p>
</div>
</div>

<div class="col-md-4">
<div class="why-book-links">
<h3><a href="#">All admission fees included</a></h3>
<p>Enjoy the tour and worry less.</p>
</div>
</div>

<div class="col-md-4">
<div class="why-book-links">
<h3><a href="#">No forced shopping / No tourist traps</a></h3>
<p>Your time is valuable</p>
</div>
</div>

<div class="col-md-4">
<div class="why-book-links">
<h3><a href="#">Absolutely no hidden/extra charge</a></h3>
<p>No need to pay more (*see inclusions / exclusions)</p>
</div>
</div>

<div class="col-md-4">
<div class="why-book-links">
<h3><a href="#">Easy payment terms</a></h3>
<p>By cash or credit card, you choose.</p>
</div>
</div>

</div>
</div>
</div>
<!-- WORK PROCESS 1 -->
{{-- <div class="page-section">
    <div class="container fes4-cont">
        <div class="row">
            <div class="col-md-1 ">
            </div>
            {!! get_option('bottom-slider') !!}
            <div class="col-md-1"></div>
        </div>
    </div>
</div> --}}
<!-- TRAVEL DEPS -->

{{-- {!! get_option('main-why') !!} --}}

{{-- <div class="port-view-more-cont-dark">
    <a class="port-view-more-dark" href="#">HOLIDAY PACKAGE OF THE MONTH</a>
</div>
<div class="page-section fes10-cont  grey-light-bg">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="columns count4">
                    @foreach(get_list_tours(8,43,true,'featured') as $tour)
                    <div class="catalog-vertical">
                        <a href="{{ route('tours.show',@$tour->name_link) }}" title="{{ @$tour->name }}">
                            <img src="{{ @$tour->photo }}" alt="{{ @$tour->name }}">
                            <span class="icon icon-music-play-button"></span>
                        </a>
                        <div class="box-vertical">
                            <span class="text-ellipsis line-clamp1">
                                <b>
                                    <a href="{{ route('tours.show',@$tour->name_link) }}" title="{{ @$tour->name }}">{{ @$tour->name }}</a>
                                </b>
                            </span>
                            <div class="tour-offer">
                                <div class="tour-offer-l">
                                    <span class="tour-duration">Duration / {{ @$tour->duration }} Days</span>
                                    <div class="tour-rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                </div>
                                <div class="tour-offer-r">
                                    @if(@$tour->price > 0)
                                    {!! get_price_home(@$tour->price,@$tour->discount) !!}
                                    @else
                                    <b><a href="/contact-us.html">Contact us</a></b>
                                    @endif
                                    <span>TOUR PRICE</span>
                                </div>
                                <div class="clear"></div>
                            </div>
                            <span class="text-ellipsis line-clamp2"><p>{{ strip_tags(str_limit(@$tour->description,'120')) }}</p></span>
                            <a class="button small thin hover-dark mb-0" href="{{ route('tours.show',@$tour->name_link) }}">SELECT</a>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="col-md-12 ">
                <a class="port-view-more text-center " href="# ">VIEW ALL TOUR PACKAGES</a>
            </div>
            <!--ROW END-->
        </div>
    </div>
</div>
<div class="port-view-more-cont-dark ">
    <a class="port-view-more-dark " href="# ">ONE DAY TRIP/SIGHTSEEING TOUR OF THE MONTH</a>
</div>
<div class="page-section fes10-cont grey-light-bg ">
    <div class="container ">
        <div class="row ">
            
            <div class="col-md-12 ">
                @foreach(get_list_tours(13,43,true,'featured') as $tour)
                    @if($loop->iteration > 8)
                    <div class="catalog-horizon ">
                        <div class="catalog-horizon-image ">
                            <a href="{{ route('tours.show',@$tour->name_link) }} " title="{{ @$tour->name }} ">
                                <img src="{{ @$tour->photo }}" alt="{{ @$tour->name }} ">
                            </a>
                        </div>

                        <div class="box-horizon ">
                            <div class="tour-offer ">
                                <div class="tour-offer-l ">
                                    <span class="text-ellipsis line-clamp1 ">
                                        <b>
                                            <a href="{{ route('tours.show',@$tour->name_link) }} " title="{{ @$tour->name }} ">{{ @$tour->name }}</a>
                                        </b>
                                    </span>
                                    <span class="tour-duration ">Duration / {{ @$tour->duration }} Days</span>
                                </div>
                                <div class="tour-overview ">
                                    <span class="text-ellipsis line-clamp2 ">{{ strip_tags(str_limit(@$tour->description,'120')) }}</span>
                                    
                                </div>
                            </div>
                        </div>

                        <div class="tour-offer-r ">
                            <div class="tour-rating ">
                                <i class="fas fa-star "></i>
                                <i class="fas fa-star "></i>
                                <i class="fas fa-star "></i>
                                <i class="fas fa-star "></i>
                                <i class="fas fa-star "></i>
                            </div>
                            @if(@$tour->price > 0)
                                {!! get_price_home(@$tour->price,@$tour->discount) !!}
                            @else
                                <b><a href="/contact-us.html">Contact us</a></b>
                            @endif
                            <span>TOUR PRICE</span>
                            <a class="button small thin hover-dark mb-0 " href="{{ route('tours.show',@$tour->name_link) }} ">SELECT</a>
                        </div>
                    </div>
                    @endif
                @endforeach
            </div>

            <div class="col-md-12 ">
                <a class="port-view-more text-center " href="# ">VIEW ALL TOURs</a>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="row">
        <div class="page-section grey-light-bg-dedddd tailor-space">

            <div class="row ">
                <div class="col-md-12 pb-20 text-center">
                    <h4 class="mt-0 mb-5 ">
                        <span class="bold ">Travel Guides</span>
                    </h4>
                </div>
            </div>

        </div>
    </div>
</div>

<!-- PORTFOLIO SECTION 1 -->
<div class="page-section ">
    <div class="relative ">

        <!-- ITEMS GRID -->
        {!! get_option('travel-guides') !!}

    </div>
</div>
{!! get_option('transfer-block') !!}
<hr class="mt-0 mb-0 ">
<!-- FEATURES 8 -->
<div class="page-section fes10-cont">
    <div class="container ">
        <h2 class="section-title mb-10 ">
            <span class="bold ">WHY</span> BOOK WITH US?</h2>
                
                {!! get_option('why-book-with-us') !!}            

            </div>
        </div>
    </div> --}}
    <!-- DIVIDER -->
@stop