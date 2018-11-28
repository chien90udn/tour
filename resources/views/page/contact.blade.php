@extends('layouts.frontend')
@push('header')
<link rel="stylesheet" type="text/css" href="{{ frontend_asset('css/bootstrap.min.css') }}">
<style>
.payment-form{margin:30px 30px 0}
.payment-form .form{position:relative;padding-bottom:20px}
.payment-form .form:before{display:block;top:150px;bottom:0;width:1px;height: 520px;background:url(https://d1gxfpv2yvv0vk.cloudfront.net/hvn/images/bg-border-h.png) top left repeat-y;left:50%;content:'';position:absolute}
.payment-form>.row{margin-left:-30px;margin-right:-30px}
.payment-form>.row>[class*=col-]{padding-left:30px;padding-right:30px}
.payment-form h2{margin:0 0 25px;padding-top:30px;color:#333;font-size:24px;line-height:28px}
.payment-form span{color:#333;line-height:25px;margin:36px 0 11px;font-size:24px}
.payment-form span img{vertical-align:top;margin-left:5px}
.payment-form .form-field{margin-top:10px}
.payment-form .form-field .field-input{border:1px solid #dedede;padding:14px 20px;color:#333;width:100%;font-family:'Open sans', serif;outline:0}
.payment-form .form-field .field-input:-moz-placeholder{color:#333}
.payment-form .form-field .field-input:-ms-input-placeholder{color:#333}
.payment-form .form-field .field-input::-webkit-input-placeholder{color:#333}
.payment-form .radio-checkbox{margin-top:20px}
.payment-form ul{list-style:none;margin:10px 0 0;padding:0;overflow:hidden}
.cruise-booking .payment-form .radio-checkbox{margin-left:6px;margin-top:8px}
.cruise-booking .payment-form .form-field .field-input{padding:9px 20px}
.payment-form ul li{float:left;width:25%;padding:5px 0}
.payment-form ul li .radio-checkbox{margin-top:0}
.payment-form ul li .radio-checkbox label{color:#666;padding-left:28px}
.payment-form label{margin-bottom:0;color:#25ab4b}
.payment-form .cart-number{margin-top:30px}
.payment-form .cart-number .row{margin-left:-3px;margin-right:-3px}
.payment-form .cart-number .row [class*=col-]{padding-left:3px;padding-right:3px}
.payment-form .cart-number .field-input{text-align:center;padding:9px 5px}
.payment-form .card-holder{margin-top:30px}
.payment-form .card-holder .field-input{padding:9px 5px}
.payment-form .expiry-date{margin-top:40px}
.payment-form .expiry-date:before{content:'/';left:50%;position:absolute;color:#666;bottom:6px;font-size:18px;-webkit-transform:translate(-50%, 0);-moz-transform:translate(-50%, 0);-ms-transform:translate(-50%, 0);-o-transform:translate(-50%, 0)}
.payment-form .expiry-date .row{margin-left:-10px;margin-right:-10px}
.payment-form .expiry-date .row [class*=col-]{padding-left:10px;padding-right:10px}
.payment-form .expiry-date .form-field .field-input{background:url(https://d1gxfpv2yvv0vk.cloudfront.net/hvn/images/icon-calendar.png) right 10px center no-repeat;padding:9px 20px;color:#25ab4b;font-weight:700}
.payment-form .cvc-code{margin-top:40px}
.payment-form .cvc-code .field-input{padding:9px 5px}
.payment-form .submit{background:url(https://d1gxfpv2yvv0vk.cloudfront.net/hvn/images/bg-border-v.png) top left repeat-x;padding-top:30px}
.payment-form .submit .awe-btn{margin-top:20px}
.payment-form .col-md-6 .form-field .select-country{border:1px solid #dedede;padding:14px 20px;color:#333;width:100%;font-family:'Open sans', serif;outline:0}
.payment-form .col-md-6 .form-field .select-class{border:1px solid #dedede;padding:9px 20px;color:#333;width:100%;font-family:'Open sans', serif;outline:0}
.intl-tel-input { margin-bottom: 0;}
.payment-form .submit{background:url(https://d1gxfpv2yvv0vk.cloudfront.net/hvn/images/bg-border-v.png) top left repeat-x;padding-top:30px}
.payment-form .submit .awe-btn{margin-top:20px}
.awe-btn.awe-btn-lager{line-height:50px;font-size:18px;padding-left:35px;padding-right:35px;}
.awe-btn.arrow-right.arrow-white,
.awe-btn.arrow-right.arrow-white:hover{background-image:url(https://d1gxfpv2yvv0vk.cloudfront.net/hvn/images/icon-arrow-white.png)}
@media( max-width: 991px ){
    .payment-form>.row>[class*=col-]{
      padding: 0;
    }
    .payment-form .form:before{
        display: none;
    }
}
</style>
@endpush
@section('content')
<div class="container">
    <div id="title-line">
        <h2>Contact Us<span class="line"></span></h2>
    </div>
    <div class="main-cn bg-white clearfix">
        <div class="payment-form">
            <div class="row form">
                <div class="col-md-6 col-xs-12">
                    <h2 style="font-size: 18px;">{{ get_option('contact_title') }}</h2>
                    {!! get_option('contact_content') !!}
                </div>
                <form name="form_contact" action="contact-us.html" method="post" id="contact">
                {{  csrf_field() }}
                <div class="col-md-6 col-xs-12">
                    <h2>Leave us a message</h2>
                    <div class="form-field">
                        @if($errors->has('name'))
                        <div class="has-error">
                            <div class="help-block">* {{ $errors->first('name') }}</div>
                        </div>
                        @endif
                        <input type="text" name="name" id="name" placeholder="Full Name" class="field-input" value="{{ old('name') }}">
                    </div>
                    <div class="form-field">
                        @if($errors->has('email'))
                        <div class="has-error">
                            <div class="help-block">* {{ $errors->first('email') }}</div>
                        </div>
                        @endif
                        <input type="text" id="email" name="email" placeholder="Email" class="field-input" value="{{ old('email') }}">
                    </div>
                    <div class="form-field">
                        <input type="text" class="field-input" id="phone" name="phone" value="{{ old('phone') }}" style="padding-left:48px!important;"/>
                    </div>
                    <div class="form-field field-select">
                            {!! Form::select('country', $list_country, old('country'), ['class' => 'select-country', 'id' => 'country']) !!}
                    </div>
                    <div class="form-field form-field-area">
                        <textarea placeholder="Message" name="message" id="request" class="field-input" cols="30" rows="6">{{ old('message') }}</textarea>
                    </div>
                    
                    <input type="hidden" value="{{ getClientIp() }}" id="ip_client" name="ip_client">

                    <div class="submit text-center id-bottom-book" style="background: none;padding-top: 0;">
                        <button type="submit" style="width: 100%;" class="awe-btn awe-btn-2 arrow-right arrow-white awe-btn-lager float-right">Send</button>
                    </div>
                    
                    
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
@stop