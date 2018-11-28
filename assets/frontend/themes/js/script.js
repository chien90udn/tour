
var script = function(){

    var win = $(window);
    var html = $('html');
    var body = $('body');

    var mMenu = function(){
        var menu = $('.m-nav');
        var ct = menu.find('.nav-ct');
        var open = $('.nav-open');
        var close = $('.nav-close');

        // ct.append($('.top-panel .contact').clone());
        // ct.append($('.language').clone());
        ct.append($('.main-nav').clone());
        // ct.append($('.top-panel .features').clone());

        open.click(function(e) {
            e.preventDefault();
            if(win.width()<1200){
                menu.addClass('act');
            }           
        });
        close.click(function(e) {
            e.preventDefault();
            if(win.width()<1200){
                menu.removeClass('act');
            }
        });


        var sidebar = $('.sb-nav');
        var ct2 = sidebar.find('.nav-ct');
        var open2 = $('.sb-open');
        var close2 = $('.sb-close');
        // ct2.append($('.main-nav').clone());
        open2.click(function(e) {
            e.preventDefault();
            if(win.width()<1200){
                sidebar.addClass('act');
            }           
        });
        close2.click(function(e) {
            e.preventDefault();
            if(win.width()<1200){
                sidebar.removeClass('act');
            }
        });

        win.click(function(e) {
            if(menu.has(e.target).length == 0 && !menu.is(e.target) && open.has(e.target).length == 0 && !open.is(e.target)){
                menu.removeClass('act');
            }
            if(sidebar.has(e.target).length == 0 && !sidebar.is(e.target) && open2.has(e.target).length == 0 && !open2.is(e.target)){
                sidebar.removeClass('act');
            }
        });


        nav = menu.find('.main-nav');
        nav.find("ul li").each(function() {
            if($(this).find("ul>li").length > 0){
                $(this).prepend('<i class="nav-drop"></i>');
            }
        });

        $(".nav-drop").click(function(){
            var ul = $(this).nextAll("ul");
            if(ul.is(":hidden") === true){
                ul.parent('li').parent().children().children('ul').slideUp(200);
                ul.parent('li').parent().children().children('.nav-drop').removeClass("act");
                $(this).addClass("act");
                ul.slideDown(200);
            }
            else{
                ul.slideUp(200);
                $(this).removeClass("act");
            }
        });
    }

    var uiDrop = function(){
        $('.drop').each(function() {
            var this_ = $(this);
            var label = this_.children('a');
            var ct = this_.children('ul');
            var item = ct.children('li').children('a');

            this_.click(function() {
                ct.slideToggle(150);
            });

            item.click(function(e) {
                e.preventDefault();
                label.html($(this).html());
            });

            win.click(function(e) {
                if(this_.has(e.target).length == 0 && !this_.is(e.target)){
                    this_.children('ul').slideUp(150);
                }
            })
        });  
    }

    var backToTop = function(){
        // var back_top = $('.back-to-top');

        // if(win.scrollTop() > 600){ back_top.fadeIn(); }

        // back_top.click(function(){
        //     $("html, body").animate({ scrollTop: 0 }, 800 );
        //     return false;
        // });

        // win.scroll(function() {    
        //     if(win.scrollTop() > 600) back_top.fadeIn(); 
        //     else back_top.fadeOut();
        // });
    }

    var uiClickShow = function(){
        var ani = 200;
        $('[data-show]').each(function() {
            var this_ = $(this);
            var ct = $(this_.attr('data-show'));

            this_.click(function(e) {
                e.preventDefault();
                this_.toggleClass('active');
                ct.slideToggle(ani);
            });
        });

        win.click(function(e) {
            // if($(this).width() > 991){
                $('[data-show]').each(function() {
                    var this_ = $(this);
                    var ct = $(this_.attr('data-show'));
                    if(ct.has(e.target).length == 0 && !ct.is(e.target) && this_.has(e.target).length == 0 && !this_.is(e.target)){
                        ct.slideUp(ani);
                         this_.removeClass('active');
                    }
                })
            // }
        });
    }

    function doAnimations( elems ) {
        var animEndEv = 'webkitAnimationEnd animationend';
        elems.each(function () {
            var $this = $(this),
            $animationType = $this.data('animation');
            $this.addClass($animationType).one(animEndEv, function () {
                $this.removeClass($animationType);
            });
        });
    }

    var uiSlider = function(){
        $('.slider-cas').slick({
            //nextArrow: '<img src="images/next.png" class="next" alt="Next">',
            //prevArrow: '<img src="images/prev.png" class="prev" alt="Prev">',
            // nextArrow: '<i class="fa fa-angle-right smooth next"></i>',
            // prevArrow: '<i class="fa fa-angle-left smooth prev"></i>',
            autoplay:true,
            autoplaySpeed:3000,
            arrows: false,
            dots: false,
        })
        $('.partner-cas').slick({
            slidesToShow: 5,
            autoplay:true,
            autoplaySpeed:1500,
            arrows: false,
            responsive: [
            {
                breakpoint: 420,
                settings: {
                    slidesToShow: 3,
                }
            },
            ],
        })
        doAnimations($(".slider-cas .slick-current [data-animation ^= 'animated']"));
        $('.slider-cas').on('beforeChange', function(event, slick, currentSlide, nextSlide){
            if(currentSlide!=nextSlide){
                var aniElm = $(this).find('.slick-slide').find("[data-animation ^= 'animated']");
                doAnimations(aniElm);
            }
        });
    }

    var uiSlick = function(){
        $('.related-slider').slick({
            slidesToShow: 3,
            slidesToScroll: 1,
            nextArrow: '<i class="far fa-angle-right smooth next"></i>',
            prevArrow: '<i class="far fa-angle-left smooth prev"></i>',
            swipeToSlide: true,
            autoplay: true,
            autoplaySpeed: 4000,
            responsive: [
            {
                breakpoint: 1199,
                settings: {
                    slidesToShow: 3,
                }
            },
            {
                breakpoint: 991,
                settings: {
                    slidesToShow: 1,
                }
            },
            {
                breakpoint: 700,
                settings: {
                    slidesToShow: 1,
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                }
            }
            ],

        })
    }

    var uiScroll = function(){
        var h = $('header').innerHeight();
        // var h2 = $('.header-bottom').innerHeight();
       if(win.width()>1025){
            if(win.scrollTop()> 200 ){
                $('header').addClass('fixed');
                // body.css('margin-top', h);
            }
        }
        else{
            if(win.scrollTop()> 0 ){
                $('header').addClass('fixed');
                // body.css('margin-top', h);
            }
        }
        win.scroll(function(e) {
            if(win.width()>1025){
                if(win.scrollTop()> 200){
                    $('header').addClass('fixed');
                    // body.css('margin-top', h);
                }
                else{
                    $('header').removeClass('fixed');
                    // body.css('margin-top', '');
                }
            }
            else{
                if(win.scrollTop()> 0){
                    $('header').addClass('fixed');
                    // body.css('margin-top', h);
                }
                else{
                    $('header').removeClass('fixed');
                    // body.css('margin-top', '');
                }
            }
        });
    }
    var tripsearch = function(){
        $('.dropdown > .caption').on('click', function() {
            $(this).parent().toggleClass('open');
          });
          
          $('.dropdown > .list > .item').on('click', function() {
            $('.dropdown > .list > .item').removeClass('selected');
            $(this).addClass('selected').parent().parent().removeClass('open').children('.caption').text( $(this).text() );
          });
          
          $(document).on('keyup', function(evt) {
            if ( (evt.keyCode || evt.which) === 27 ) {
              $('.dropdown').removeClass('open');
            }
          });
          
          $(document).on('click', function(evt) {
            if ( $(evt.target).closest(".dropdown > .caption").length === 0 ) {
              $('.dropdown').removeClass('open');
            }
          });
           $('#multiselect').multiselect({
            buttonWidth : '100%',
            // includeSelectAllOption : true,
            nonSelectedText: 'Select options'
          });
           $('[data-toggle="datepicker"]').datepicker();
    }
    var step = function(){
        function calculate_slide_distance() {
            var current_step = parseInt($('#questionnaire').attr('data-current-step'));
            var slide_margin = parseInt($('#questionnaire .slides .slide-1').css('margin-left').replace('px', ''));
            var slide_width = $('#questionnaire .slides .slide-1').width();
            if (slide_margin < 0)
                slide_width += slide_margin;
            return 0 - ((current_step - 1) * slide_width);
        }
        var questionnaire_link_clicked = false;
        $('#questionnaire .slide article label input[type="checkbox"]').change(function() {
            if (questionnaire_link_clicked) {
                if ($(this).is('.active'))
                    $(this).parent().parent().find('figure a').addClass('active').append('<img src="' + $('#selected-img').attr('src') + '" class="selected">');
                else
                    $(this).parent().parent().find('figure a').removeClass('active').find('img.selected').remove();
                questionnaire_link_clicked = false;
            } else {
                if ($(this).is(':checked'))
                    $(this).parent().parent().find('figure a').addClass('active').append('<img src="' + $('#selected-img').attr('src') + '" class="selected">');
                else
                    $(this).parent().parent().find('figure a').removeClass('active').find('img.selected').remove();
                $(this).toggleClass('active');
            }
        });
        $('#questionnaire figure a').click(function() {
            questionnaire_link_clicked = true;
            $(this).parent().parent().find('label input[type="checkbox"]').toggleClass('active').trigger('click');
            return false;
        });
        $('#questionnaire .slider-nav li a').click(function() {
            if ($(this).parent().is('.active'))
                return false;
            var my_step = $(this).parent().attr('data-step');
            $('#questionnaire').attr('class', 'step-' + my_step);
            $('#questionnaire').attr('data-current-step', my_step);
            $('#questionnaire .slider-nav li').removeClass('active');
            $(this).parent().addClass('active');
            $('#questionnaire .slide-count span').text(my_step);
            var distance = calculate_slide_distance();
            $('#questionnaire .slides').animate({
                marginLeft: distance
            }, 700, 'easeInOutQuart');
            return false;
        });
        $('#questionnaire .prev').click(function() {
            var current_step = parseInt($('#questionnaire').attr('data-current-step'));
            if (current_step > 1) {
                $('#questionnaire .slider-nav li[data-step="' + (current_step - 1) + '"] a').click();
            }
        });
        $('#questionnaire .next').click(function() {
            var current_step = parseInt($('#questionnaire').attr('data-current-step'));
            if (current_step < 3) {
                $('#questionnaire .slider-nav li[data-step="' + (current_step + 1) + '"] a').click();
            }
        });
        $('[data-toggle="datepicker"]').datepicker();
    }
    var moreless = function(){
        $('.more .viewmore').click(function(){
            $('#main-catdes #content-catdes #txt-des #body_about').css({"height": "auto", "overflow": "inherit"});
            $('.more').css({"display": "none"});
            $('.less').css({"display": "block"});
        });
        $('.less .viewmore').click(function(){
            $('#main-catdes #content-catdes #txt-des #body_about').css({"height": "62px", "overflow": "hidden"});
            $('.less').css({"display": "none"});
            $('.more').css({"display": "block"});
        });
    }
    var fancybox = function(){
      $(".fancybox")
        .attr('rel', 'gallery')
        .fancybox({
            helpers: {
                thumbs: {
                    width  : 40,
                    height : 40,
                    source  : function(current) {
                        return $(current.element).data('thumbnail');
                    }
                }
            }
        });
    }
    var showHide = function(){
       $('.show-more-rv #show_r').click(function(){
           $(this).hide();
           $('.customer-like > ul').css({"height":"auto","overflow":"inherit"});
           $('.show-more-rv #hide_r').show(); 
        });
        $('.show-more-rv #hide_r').click(function(){
           $('.show-more-rv #show_r').show();
           $('.customer-like > ul').css({"height":"200px","overflow":"hidden"});
           $(this).hide(); 
        });
        $('.quote-sidebar #show_more_r').click(function(){
          $(this).hide();
          $('.quote-sidebar #info-review').css({"height":"auto","overflow":"inherit"});
          $('.quote-sidebar #hide_more_r').show();
        });
        $('.quote-sidebar #hide_more_r').click(function(){
           $('.quote-sidebar #show_more_r').show();
           $('.quote-sidebar #info-review').css({"height":"100px","overflow":"hidden"});
           $(this).hide(); 
        });
         $('.exp-content #read_more_choosing').click(function(){
          $(this).hide();
          $('.exp-content .text-choosing').css({"height":"auto","overflow":"inherit"});
          $('.exp-content #read_less_choosing').show();
        });
        $('.exp-content #read_less_choosing').click(function(){
           $('.exp-content #read_more_choosing').show();
           $('.exp-content .text-choosing').css({"height":"34px","overflow":"hidden"});
           $(this).hide(); 
        });
        

    } 
    var selectRoom = function(){
         if ($('.cd-sub-close').length) {
            $('.cd-sub-close').click(function () {
                $('.cd-sub-room').hide();
                textroom();
            });
        }
        $('#ip-room,.cd-sub-room').click(function (event) {
            event.stopPropagation();
        });
        if ($("#ip-room").length) {
            $("#ip-room").click(function () {
                if ($('.cd-sub-room').is(':visible')) {
                    $(".cd-sub-room").hide();
                } else {
                    $(".cd-sub-room").show();
                    $(".cd-sub-duration").hide();
                    $(".cd-sub-room ul li").click(function () {
                        $("#ip-room").val($(this).text());
                        $(".cd-sub-room").hide();
                    });
                }
            });
        }
        $('body').click(function () {
            $(".cd-sub-room").hide();
        });
    }
    var tab = function(){
         $('#traveltabs').tabCollapse();
          $(".toggle-accordion").on("click", function() {
            var accordionId = $(this).attr("accordion-id"),
              numPanelOpen = $(accordionId + ' .collapse.in').length;
            
            $(this).toggleClass("active");

            if (numPanelOpen == 0) {
              openAllPanels(accordionId);
            } else {
              closeAllPanels(accordionId);
            }
          })

          openAllPanels = function(aId) {
            console.log("setAllPanelOpen");
            $(aId + ' .panel-collapse:not(".in")').collapse('show');
          }
          closeAllPanels = function(aId) {
            console.log("setAllPanelclose");
            $(aId + ' .panel-collapse.in').collapse('hide');
          }
    }
    var tab2 = function(){
         $('#highlighttabs').tabCollapse();
          $(".toggle-accordion").on("click", function() {
            var accordionId = $(this).attr("accordion-id"),
              numPanelOpen = $(accordionId + ' .collapse.in').length;
            
            $(this).toggleClass("active");

            if (numPanelOpen == 0) {
              openAllPanels(accordionId);
            } else {
              closeAllPanels(accordionId);
            }
          })

          openAllPanels = function(aId) {
            console.log("setAllPanelOpen");
            $(aId + ' .panel-collapse:not(".in")').collapse('show');
          }
          closeAllPanels = function(aId) {
            console.log("setAllPanelclose");
            $(aId + ' .panel-collapse.in').collapse('hide');
          }
    }
    var checkedshow = function(){
        var ani = 200;
        $('[data-checkedshow]').each(function() {
            var this_ = $(this);
            var ct = $(this_.attr('data-checkedshow'));

            this_.change(function(e) {
                e.preventDefault();
                ct.slideToggle(ani);
            });
        });
    }
    var selectedOption = function(){
        $('[data-select]').each(function() {
            var this_ = $(this);
            var ct = $(this_.attr('data-select'));

            this_.on('click', function(){
              var tab_id = $(this).attr('data-select');
              $('.payment-form .will_travel ul li').removeClass('active');
              $('.payment-form .div-class-t ul li').removeClass('active');
              $('.payment-form .will_travel ul li .select-form').css('display', 'none');
              $(this).addClass('active');
              $(""+tab_id).css('display', 'block');
          });
        });
    }
    var searchform = function(){
        var textdefault = $('#example-multiple-optgroups').attr("data-default-text");
        var textdefault2 = $('#choose2').attr("data-default-text");
        var textdefault3 = $('#choose3').attr("data-default-text");
        var textdefault4 = $('#choose4').attr("data-default-text");
        $('#example-multiple-optgroups').multiselect({
            nonSelectedText: textdefault
        });
        $('#choose2').multiselect({
            nonSelectedText: textdefault2
        });
        $('#choose3').multiselect({
            nonSelectedText: textdefault3
        });
        $('#choose4').multiselect({
            nonSelectedText: textdefault4
        });
    }
    return {

        uiInit: function($fun){
            switch ($fun) {
                case 'mMenu':
                mMenu();
                break;
                case 'backToTop':
                backToTop();
                break;
                case 'uiSlider':
                uiSlider();
                break;
                case 'uiSlick':
                uiSlick();
                break;
                case 'uiClickShow':
                uiClickShow();
                break;
                case 'uiScroll':
                uiScroll();
                break;
                case 'uiDrop':
                uiDrop();
                break;
                case 'tripsearch':
                tripsearch();
                break;
                case 'step':
                step();
                break;
                case 'moreless':
                moreless();
                break;
                case 'fancybox':
                fancybox();
                break;
                case 'showHide':
                showHide();
                break;
                case 'selectRoom':
                selectRoom();
                break;
                case 'tab':
                tab();
                break;
                case 'checkedshow':
                checkedshow();
                break;
                case 'selectedOption':
                selectedOption();
                break;
                case 'searchform':
                searchform();
                break;
                



                default:
                mMenu();
                backToTop();
                uiSlider();
                uiSlick();
                uiClickShow();
                uiScroll();
                uiDrop();
                tripsearch();
                step();
                moreless();
                fancybox();
                showHide();
                selectRoom();
                tab();
                checkedshow();
                selectedOption();
                searchform();
            }
        }
    }

}();


jQuery(function($) {
    var wow = new WOW({offset:50,mobile:false}); wow.init();
    script.uiInit();

    $('.yt-box .play').click(function(e) {
        var id = $(this).closest('.yt-box').attr('data-id');
        $(this).closest('.yt-box iframe').remove();
        $(this).closest('.yt-box').append('<iframe src="https://www.youtube.com/embed/'+ id + '?rel=0&amp;autoplay=1&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>');
    });

    if($(window).width() > 991){
        if($('.fanpage').innerWidth()>500){
            $('.fb-page').css({
                '-webkit-transform': 'scale('+$('.fanpage').innerWidth()/500+')',
                'transform': 'scale('+$('.fanpage').innerWidth()/500+')',
            });
        }
    }

    $(".t-gallery:not(.slick-cloned) a").fancybox({
        prevEffect  : 'fade',
        nextEffect  : 'fade',
        transitionIn: 'fade',
        transitionOut: 'fade',
        speedIn       :   600, 
        speedOut      :   200, 
        overlayShow   :   false,
        autoScale: true,
        helpers: {
            thumbs: {
                width: 50,
                height: 50
            }
        },
        // afterLoad : function() {
        //     this.title = 'Ảnh ' + (this.index + 1) + ' / ' + this.group.length + (this.title ? ' - ' + this.title : '');
        // }
    });
    $(".action.search").click(function(){
        $(".action-control-search").toggleClass("active");
    });
    // $("#chkInternational").change(function() {
    //     $(".content-checkbox-show.chkInternational").toggle(); 
    // });
    // $("#chkNewsletter").change(function() {
    //     $(".content-checkbox-show.sign-up").toggle(); 
    // });

});
function chackdate(){
    if(document.getElementById("flexible").checked==true){
        $('.datepicker-date').hide();
        $('.input-custom').show();
        document.getElementById("datepicker").disabled=true;
    }
    else{
        $('.input-custom').hide();
        $('.datepicker-date').show();
        document.getElementById("datepicker").disabled=false;
    }
}

