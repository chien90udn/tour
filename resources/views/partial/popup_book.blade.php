<div id="inquiry_booking" class="login-popup">
    <div id="popup-header-mj">
        <h3><?=$tour->name?></h3>
        <p>Don't hesitate to send us your requests. We will send you the best offers quickly!</p>
    </div>
    <a href="javascript:;" class="close"><img src="/assets/frontend/images/cancel.png" class="btn_close" title="Close Window" alt="Close" /></a>
    <div id='images-load' style='height: 180px;margin-top:100px;'>
        <img style='display: table;margin: 0 auto;' src='/assets/frontend/images/ajax-request.gif' />
    </div>
    <form name="form_booking" id="tour_booking" method="post" class="signin" action="/tour/booking">
        {{ csrf_field() }}
        <div class="row">
            <div class="top_booking">
                <div class="col-md-8">
                    <div id="b-departure">
                        <label>Start Date (mm/dd/yyyy)</label>
                        <div id="input-sl" class="date_time">
                            <input id="datepicker" type="text" name="datepicker" class="date" value="MM/DD/YYYY"/> 
                            <span class="i-date"></span>
                        </div>
                        <div id="input-sl" class="input_time" style="display: none;">
                            <input id="dateinput" type="text" name="datepicker_input" class="date" placeholder="Your flexible date"/> 
                        </div>
                        <div id="plexible-date" style="width: 115px;float: left;">
                            <input name="checkdate" id="checkdate" style="cursor: pointer;" type="checkbox" class="checkbox" value="1" onclick="chackdate();">
                            <label id="datechek" for="checkdate" style="float: right;width: 81%;cursor: pointer;">Flexible Date ?</label>      
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div id="b-tourclass">
                        <label>Tour Class</label>
                        <div class="tourclass">
                            <select name="tour" class="wrap_box_input" id="class_tour">
                                <option value="Economy">Economy</option>
                                <option value="Deluxe">Deluxe</option>
                                <option value="Luxury">Luxury</option>
                             </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="top_booking no-margin">
                <div class="col-md-12">
                    <div class="line-bor"></div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="top_booking no-margin">
                <div class="col-md-4">
                    <div id="b-people">
                        <label>Adults ( > 12 )</label>
                        <div class="tourclass">
                            <select name="adult" id="adult" class="wrap_box_input">
                                <?
                                    for($i=0;$i<21;$i++){
                                        echo "<option value='".$i."'>".$i."</option>";
                                    }
                                ?> 
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">       
                    <div id="b-people">     
                        <label>Children ( 4 - 12 )</label> 
                        <div  class="tourclass">
                            <select name="child" id="child" class="wrap_box_input">
                                <?
                                    for($i=0;$i<21;$i++){
                                        echo "<option value='".$i."'>".$i."</option>";
                                    }
                                ?>
                            </select>
                        </div>   
                    </div>  
                </div>
                <div class="col-md-4">
                    <div id="b-people">      
                        <label>Infants ( 0 - 3 )</label>
                        <div  class="tourclass">
                         <select name="infant" id="infant" class="wrap_box_input">
                            <?
                                for($i=0;$i<21;$i++){
                                    echo "<option value='".$i."'>".$i."</option>";
                                }
                            ?>
                         </select>
                        </div>   
                    </div>
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="top_booking no-margin">
                <div class="col-md-12">
                    <div class="line-bor"></div>
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="top_booking no-margin">
                <div class="col-md-12">
                    <div class="contact_sub contact_detail">
                        <div class="contact_sub">
                            <select class="short" name="subname" id="subname_tour">
                                <option value="Mr.">Mr.</option> 
                                <option value="Mrs.">Mrs.</option> 
                                <option value="Ms.">Ms.</option> 
                                <option value="Miss.">Miss.</option> 
                                <option value="Dr.">Dr.</option>
                            </select>
                        </div>
                    </div>
                    <input type="text" name="name" class="question short full-name" id="name_poptour" value="Name" onblur="onblur_obj('name_poptour','Name');" onclick="onclick_obj('name_poptour','Name');"   />
                    <input type="text" name="email" class="question long e-mail"  id="mail_tour" value="Email" onblur="onblur_obj('mail_tour','Email');" onclick="onclick_obj('mail_tour','Email');" />
                    <div id="detail_phone" style="margin-bottom: 10px;">
                        <input type="text" class="long phone_number" id="phone_popuptour" name="phone" value="Phone" onblur="onblur_obj('phone_popuptour','Phone');" onclick="onclick_obj('phone_popuptour','Phone');" style="padding-left:48px!important;"/>
                        <div class="contact_us">
                            {!! Form::select('country', $list_country, NULL, ['class' => 'long', 'id' => 'country_poptour']) !!}
                        </div>
                    </div>
                    <textarea style="margin-bottom: 0;" class="sms question" name="info" id="question_tour" placeholder="Your Request" ></textarea>
                    <font id="message" style="margin-top: 0;float: left;">&nbsp;</font>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="top_booking no-margin submit-booking">
                <div class="col-md-12">
                    <a href="javascript:;" class="button free_quotetour"  onclick="booking_tour(); return false;"><i class="fa fa-envelope-o"></i> Send »</a>
                </div>
            </div>
        </div>
        
        <input type="hidden" name="tour_id" value="<?=$tour->id?>" />
        <input type="hidden" name="tour_name" value="<?=$tour->name?>" />
        <input type="hidden" name="tour_link" value="<?=$tour->name_link?>.html" />
        <input type="hidden" name="mode_price" value="<?=$tour->price?>" />
        <input type="hidden" name="tour_code" value="<?="DIC-".$tour->id?>" />
        <input type="hidden" name="enjoy" value="<?=$tour->country?>" /> 
        <input type="hidden" name="duration" value="<?=$tour->duration?>" />
        <input type="hidden" value="{{ getClientIp() }}" id="ip_client" name="ip_client">
        
    </form>
</div>