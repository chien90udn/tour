var dropdown_timeout=500;var dropdown_close_timer=0;var dropdown_menu_item=0;function dropdown_open(){dropdown_canceltimer();dropdown_close();dropdown_menu_item=$(this).find('ul').css('visibility','visible');if($(this).find('ul').length!=0){$(this).addClass('active');hide_header_boxes();}}
function dropdown_close(){if(dropdown_menu_item){dropdown_menu_item.css('visibility','hidden');$('#nav li').removeClass('active');}}
function dropdown_timer(){dropdown_close_timer=window.setTimeout(dropdown_close,dropdown_timeout);}
function dropdown_canceltimer(){if(dropdown_close_timer){window.clearTimeout(dropdown_close_timer);dropdown_close_timer=null;}}
function hide_header_boxes(){$('header .contact-dropdown').fadeOut('fast');$('#nav li a.contact').parent().removeClass('stay-active');$('#facebook-search .search-box').fadeOut('fast');$('#facebook-search .search a').removeClass('active');}
function calculate_slide_distance(){var current_step=parseInt($('#questionnaire').attr('data-current-step'));var slide_margin=parseInt($('#questionnaire .slides .slide-1').css('margin-left').replace('px',''));var slide_width=$('#questionnaire .slides .slide-1').width();if(slide_margin<0)
slide_width+=slide_margin;return 0-((current_step-1)*slide_width);}
var questionnaire_link_clicked=false;$('#questionnaire .slide article label input[type="checkbox"]').change(function(){if(questionnaire_link_clicked){if($(this).is('.active'))
$(this).parent().parent().find('figure a').addClass('active').append('<img src="'+$('#selected-img').attr('src')+'" class="selected">');else
$(this).parent().parent().find('figure a').removeClass('active').find('img.selected').remove();questionnaire_link_clicked=false;}
else{if($(this).is(':checked'))
$(this).parent().parent().find('figure a').addClass('active').append('<img src="'+$('#selected-img').attr('src')+'" class="selected">');else
$(this).parent().parent().find('figure a').removeClass('active').find('img.selected').remove();$(this).toggleClass('active');}});$('#questionnaire figure a').click(function(){questionnaire_link_clicked=true;$(this).parent().parent().find('label input[type="checkbox"]').toggleClass('active').trigger('click');return false;});$('#questionnaire .slider-nav li a').click(function(){if($(this).parent().is('.active'))
return false;var my_step=$(this).parent().attr('data-step');$('#questionnaire').attr('class','step-'+my_step);$('#questionnaire').attr('data-current-step',my_step);$('#questionnaire .slider-nav li').removeClass('active');$(this).parent().addClass('active');$('#questionnaire .slide-count span').text(my_step);var distance=calculate_slide_distance();$('#questionnaire .slides').animate({marginLeft:distance},700,'easeInOutQuart');return false;});$('#questionnaire .prev').click(function(){var current_step=parseInt($('#questionnaire').attr('data-current-step'));if(current_step>1){$('#questionnaire .slider-nav li[data-step="'+(current_step-1)+'"] a').click();}});$('#questionnaire .next').click(function(){var current_step=parseInt($('#questionnaire').attr('data-current-step'));if(current_step<3){$('#questionnaire .slider-nav li[data-step="'+(current_step+1)+'"] a').click();}});$('#questionnaire .form .date').datepicker({dateFormat:'dd/mm/yy',changeMonth:true,changeYear:true,yearRange:'2014:2040'});function is_valid_email(email){if(/^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(email))
return true;else
return false;}
function check_empty(obj,is_email,error_msg,inquiry){var flag=true;if(obj.attr('value')==''||obj.attr('value')==obj.attr('placeholder')||(is_email&&!(obj.attr('value').indexOf(".")>2&&obj.attr('value').indexOf("@")>0))){obj.addClass('error');obj.attr('placeholder',error_msg);obj.keyup(function(){obj.unbind('keyup');submit_button_click=false;if(inquiry)
validate_inquiry_form();else
validate_contact_form();obj.focus();});flag=false;}
else
obj.removeClass('error').unbind('keyup');return flag;}
var validate_contact_form=function(position){if(position=='header'){var flag=true;if(!check_empty($(".contact-dropdown .name"),false,lang_core.form_error_name,false))flag=false;if(!check_empty($(".contact-dropdown .email"),true,lang_core.form_error_email,false))flag=false;if(!check_empty($(".contact-dropdown .phone"),false,lang_core.form_error_phone,false))flag=false;if(!check_empty($(".contact-dropdown .inquiry"),false,lang_core.form_error_inquiry,false))flag=false;if(!check_empty($(".contact-dropdown .destination"),false,'',false))flag=false;enable_placeholders();if(flag){$.blockUI({message:$('<div id="block-ui-message"><img src="" width="60" height="60" alt=""><h1>'+lang_core.book_form_processing+'</h1></div>'),onBlock:function(){$('#block-ui-message img').attr('src',stylesheet_directory+'assets/images/form-processing.gif');}});}
return flag;}
return false;}
function validate_home_form(){if($('#personal_name').attr('value')==''||$('#personal_phone').attr('value')==''||$('#personal_email').attr('value')==''||!is_valid_email($('#personal_email').attr('value'))){alert(lang_core_travels.form_error);return false;}
$('textarea, .input-text').each(function(){if($(this).val()==$(this).attr('placeholder'))
$(this).val('');});$.blockUI({message:$('<div id="block-ui-message"><img src="" width="60" height="60" alt=""><h1>'+lang_core_travels.please_wait+'</h1></div>'),onBlock:function(){$('#block-ui-message img').attr('src',stylesheet_directory+'assets/images/form-processing.gif');}});return true;}