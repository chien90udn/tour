@extends('layouts.layout')

@section('content')
<div class="page-main-wrapper booking-tours">
    <div class="container">
        <div class="main-cn bg-white">
            <div class="step">
                <!-- Step -->
                <ul class="payment-step text-center clearfix">
                    <li class="step-part">
                        <a href="javascript:;" data-toggle="tooltip" data-original-title="Send us your request">
                            <span>1</span>
                            <p>Send us your request</p>
                        </a>
                    </li>
                    <li class="step-part">
                        <a href="javascript:;" data-toggle="tooltip" data-original-title="Receive multiple best offers">
                            <span>2</span>
                            <p>Receive multiple best offers</p>
                        </a>
                    </li>
                    <li class="step-part">
                        <a href="javascript:;" data-toggle="tooltip" data-original-title="Book &amp; Enjoy your holiday">
                            <span>3</span>
                            <p>Book &amp; Enjoy your holiday</p>
                        </a>
                    </li>
                </ul>
                <!-- ENd Step -->
            </div>
            <div class="payment-room">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="payment-info">
                            <h2>{{ $hotel->name }}</h2>
                            <ul>
                                <li>
                                    <span>Cruise Packages:</span>
                                    {{ $package->name }}
                                </li>
                                <li>
                                    <span>Duration:</span>
                                    {{ $package->duration }} Days
                                </li>
                                <li style="border-bottom: 0;">
                                    <span>Room:</span>
                                    {{ $request->nocabin_t }}
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <form action="/tour/booking" method="POST" name="form_booking" id="form_booking">
                {{ csrf_field() }}
                <div class="payment-form">
                    <div class="row form">
                        <div class="col-md-6">
                            <div class="div-class-t form-book">
                                <span>Tour Class</span>
                                <ul>
                                    <li class="star active" data-select="#select-star-3">
                                        <span class="star-3"></span>
                                        <div class="radio-checkbox">
                                            <input type="radio" name="class_t" id="radio-5" value="Economy" class="radio" checked="checked">
                                            <label for="radio-5">3 Star Economy</label>
                                        </div>
                                    </li>
                                    <li class="star" data-select="#select-star-4">
                                        <span class="star-4"></span>
                                        <div class="radio-checkbox">
                                            <input type="radio" name="class_t" id="radio-6" value="Deluxe" class="radio">
                                            <label for="radio-6">4 Star Deluxe</label>
                                        </div>
                                    </li>
                                    <li class="star" data-select="#select-star-5">
                                        <span class="star-5"></span>
                                        <div class="radio-checkbox">
                                            <input type="radio" name="class_t" id="radio-7" value="Luxury" class="radio">
                                            <label for="radio-7">5 Star Luxury</label>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="col-md-6">
                            <h2>Contact Info</h2>
                            <div class="form-field">
                                <input type="text" id="name" name="name" placeholder="*Full Name" class="field-input" required>
                            </div>
                            <div class="form-field">
                                <input type="text" id="email" name="email" placeholder="*Email" class="field-input" required>
                            </div>
                            <div class="form-field">
                                <input type="text" id="phone" name="phone" placeholder="*Phone" class="field-input" required>
                            </div>
                            <div class="form-field field-select">
                                {!! Form::select('country', $list_country, NULL, ['class' => 'form-control select-country required']) !!}
                            </div>
                            <div class="form-field form-field-area">
                                <textarea placeholder="Other Request" name="info" class="field-input" cols="30" rows="6"></textarea>
                            </div>
                            <div class="radio-checkbox checkbox-booking">
                                <div class="please">
                                    <b>Please:</b>
                                    <li>
                                        <div class="radio-checkbox">
                                            <input type="radio" name="please" id="please_call" value="1" checked="checked" class="radio">
                                            <label for="please_call">Send me via email</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="radio-checkbox">
                                            <input type="radio" name="please" id="please_call_1" value="2" class="radio">
                                            <label for="please_call_1">Call me if possible</label>
                                        </div>
                                    </li>
                                </div>
                                <div class="i_am_b">
                                    <b>I am...:&nbsp;&nbsp;</b>
                                    <li>
                                        <div class="radio-checkbox">
                                            <input type="radio" name="iam_ready" value="1" id="ready" checked="checked" class="radio">
                                            <label for="ready">Ready to book</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="radio-checkbox">
                                            <input type="radio" name="iam_ready" value="2" id="ready_1" class="radio">
                                            <label for="ready_1">Considering</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="radio-checkbox">
                                            <input type="radio" name="iam_ready" value="3" id="ready_2" class="radio">
                                            <label for="ready_2">General inquiry</label>
                                        </div>
                                    </li>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <input type="hidden" name="tour_id" value="{{ $package->id }}" />
                            <input type="hidden" name="type_group" value="1">
                            <input type="hidden" name="tour_name" value="{{ $package->name }}" />
                            <input type="hidden" name="tour_link" value="{{ $package->name_link }}.html" />
                            <input type="hidden" name="mode_price" value="{{ $package->price }}" />
                            <input type="hidden" name="tour_code" value="{{ "DIC-".$package->id }}" />
                            <input type="hidden" name="enjoy" value="{{ $package->country }}" /> 
                            <input type="hidden" name="duration" value="{{ $package->duration }}" />
                            <input type="hidden" name="adult" value="{{ $request->adult1 }}">
                            <input type="hidden" name="child" value="{{ $request->child1 }}">
                            <input type="hidden" name="babies" value="{{ $request->infant1 }}">
                            <input type="hidden" value="{{ getClientIp() }}" id="ip_client" name="ip_client">
                            <button type="submit" id="submit_book" class="awe-btn awe-btn-2 arrow-right arrow-white awe-btn-lager float-right">Send Now</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</div>
@stop
