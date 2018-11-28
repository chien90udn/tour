<div id="inquiry" class="login-popup">
    <div id="popup-header-contact">
        <h3>We are always here to help you</h3>
        <p>Don't hesitate to send us your requests. We will send you the best offers quickly!</p>
    </div>
    <a href="javascript:;" class="close"><img src="/assets/frontend/images/cancel.png" class="btn_close" title="Close Window" alt="Close" width="35" height="35" /></a>
    <form method="post" class="signin" action="">
        <textarea class="sms question" name="question" id="question" onblur="onblur_obj('question','Type your request here...');" onclick="onclick_obj('question','Type your request here...');">Type your request here...</textarea>
        <div class="contact_sub contact_detail">
            <div class="contact_sub">
                <select class="short" name="subname" id="subname">
                    <option value="Mr.">Mr.</option>
                    <option value="Mrs.">Mrs.</option>
                    <option value="Ms.">Ms.</option>
                    <option value="Miss.">Miss.</option>
                    <option value="Dr.">Dr.</option>
                </select>
            </div>
        </div>
        <input type="text" name="name" class="question short full-name" id="name" value="Name" onblur="onblur_obj('name','Name');" onclick="onclick_obj('name','Name');"   />
        <input type="text" name="mail" class="question long e-mail"  id="mail" value="Email" onblur="onblur_obj('mail','Email');" onclick="onclick_obj('mail','Email');" />
        <div id="detail_phone">
            <input style="padding-left: 48px;" type="tel" class="long phone_number" id="phone_popup" name="phone" value="Phone"/>
            <div class="contact_sub contact_us">
                {!! Form::select('country', $list_country, NULL, ['class' => 'long', 'id' => 'country_pop']) !!}
            </div>
        </div>
        <font id="message_popup" style="margin-top: 10px;float: left;">&nbsp;</font>
        <div class="row">
            <div class="top_booking no-margin submit-booking">
                <div class="col-md-12">
                    <a href="javascript:;" class="button"  onclick="quickcontq_popup(); return false;"><i class="fa fa-envelope-o"></i> Send »</a>
                </div>
            </div>
        </div>
    <input type="hidden" value="{{ getClientIp() }}" id="ip_client" name="ip_client">
    </form>
</div>