/**
 *  Themes: Velonic Admin theme
 *
 **/


! function($) {
    "use strict";

    /**
    Sidebar Module
    */
    var SideBar = function() {
        this.$body = $("body");
        this.$sideBar = $("aside.left-panel");
        this.$navbarToggle = $(".navbar-toggle");
        this.$navbarItem = $("aside.left-panel nav.navigation > ul > li:has(ul) > a");
    };

    //initilizing 
    SideBar.prototype.init = function() {
        //on toggle side menu bar
        var $this = this;
        $(document).on("click", ".navbar-toggle", function () {
            $this.$sideBar.toggleClass("collapsed");
        }); 

        //on menu item clicking
        this.$navbarItem.click(function () {
            if ($this.$sideBar.hasClass("collapsed") === false || $(window).width() < 768) {
                $("aside.left-panel nav.navigation > ul > li > ul").slideUp(300);
                $("aside.left-panel nav.navigation > ul > li").removeClass("active");
                if (!$(this).next().is(":visible")) {
                    $(this).next().slideToggle(300, function () {
                        $("aside.left-panel:not(.collapsed)").getNiceScroll().resize();
                    });
                    $(this).closest("li").addClass("active");
                }
                return false;
            }
        });

        //adding nicescroll to sidebar
        if ($.isFunction($.fn.niceScroll)) {
            $("aside.left-panel:not(.collapsed)").niceScroll({
                cursorcolor: "#8e909a",
                cursorborder: "0px solid #fff",
                cursoropacitymax: "0.5",
                cursorborderradius: "0px"
            });
        }
    },

    //exposing the sidebar module
    $.SideBar = new SideBar; $.SideBar.Constructor = SideBar;
    
}(window.jQuery);


//portlets
(function ($) {
    "use strict";

    /**
    Portlet Widget
    */
    var Portlet = function() {
        this.$body = $("body");
        this.$portletIdentifier = ".portlet";
        this.$portletCloser = '.portlet a[data-toggle="remove"]';
        this.$portletRefresher = '.portlet a[data-toggle="reload"]';
    };

    //on init
    Portlet.prototype.init = function() {
        // Panel closest
        var $this = this;
        $(document).on("click",this.$portletCloser, function (ev) {
            ev.preventDefault();
            var $portlet = $(this).closest($this.$portletIdentifier);
            var $portlet_parent = $portlet.parent();

            $portlet.remove();

            if ($portlet_parent.children().length === 0) {
                $portlet_parent.remove();
            }
        });

        // Panel Reload
        $(document).on("click",this.$portletRefresher, function (ev) {
            ev.preventDefault();
            var $portlet = $(this).closest($this.$portletIdentifier);
            $portlet.append('<div class="panel-disabled"><div class="loader-1"></div></div>');
            var $pd = $portlet.find('.panel-disabled');
            setTimeout(function () {
                $pd.fadeOut('fast', function () {
                    $pd.remove();
                });
            }, 500 + 300 * (Math.random() * 5));
        });
    };

    $.Portlet = new Portlet;
    $.Portlet.Constructor = Portlet;
    
}(window.jQuery));
 

//main app module
(function($){
    "use strict";
    
    var VelonicApp = function() {
        this.VERSION = "1.0.0";
        this.AUTHOR = "Coderthemes";
        this.SUPPORT = "coderthemes@gmail.com";
        this.pageScrollElement = "html, body";
        this.$body = $("body");
    };

    //initializing tooltip
    VelonicApp.prototype.initTooltipPlugin = function() {
        $.fn.tooltip && $('[data-toggle="tooltip"]').tooltip()
    };

    //initializing popover
    VelonicApp.prototype.initPopoverPlugin = function() {
        $.fn.popover && $('[data-toggle="popover"]').popover()
    };

    //initializing nicescroll
    VelonicApp.prototype.initNiceScrollPlugin = function() {
        //You can change the color of scroll bar here
        $.fn.niceScroll &&  $(".nicescroll").niceScroll({ cursorcolor: '#9d9ea5', cursorborderradius: '0px'});
    };

    //initializing knob
    VelonicApp.prototype.initKnob = function() {
        var el = $(".knob");
        if (el.length > 0) {
            el.knob();
        }
    };
    
    //initilizing 
    VelonicApp.prototype.init = function() {
        this.initTooltipPlugin();
        this.initPopoverPlugin();
        this.initNiceScrollPlugin();
        this.initKnob();

        $.SideBar.init();
        $.Portlet.init();
    },

    $.VelonicApp = new VelonicApp;
    $.VelonicApp.Constructor = VelonicApp;

}(window.jQuery));

//initializing main application module
(function($) {
    "use strict";
    $.VelonicApp.init();

    $(".alert:not(.alert-important)").delay(3000).fadeOut(350);

    var confirmAlert = function (callback) {
        swal({
            title: "Bạn có chắc không?",
            text: "Bạn sẽ không thể phục hồi nếu thực hiện hành động này.",
            type: "warning",
            showCancelButton: true,
            confirmButtonText: "Có",
            cancelButtonText: "Không",
        }).then(function () {
            if (typeof callback === "function") {
                callback();
            }
        });
    };

    $('[data-action="link-confirm"]').each(function () {
        $(this).click(function (event) {
            event.preventDefault();

            var _this = $(this);

            confirmAlert(function () {
                window.location.href = _this.data('url');
            });

            return false;
        });
    });

    $('[data-action="form-confirm"]').each(function () {
        $(this).click(function (event) {
            event.preventDefault();

            var _this = $(this);

            confirmAlert(function () {
                $('#' + _this.data('target')).submit();
            });

            return false;
        });
    });

    $('[data-action="toggle-checkbox-table"]').each(function () {
        $(this).change(function () {
            var status = $(this).prop('checked');
            var checkboxes = $('td input[name="id[]"]');

            checkboxes.each(function () {
                $(this).prop('checked', !! status);
            });
        });
    });
}(window.jQuery));

var wow = new WOW(
    {
        boxClass: "wow",
        animateClass: "animated",
        offset: 50,
        mobile: false
    }
);
wow.init();

function load_iti(){
    $('#dayFirst').html('');
    var day = document.getElementById("duration").value;
    var html = '';
    for (var i = 1; i <= day; i++) {
        var template = $('#attribute-group-template').html();
        var content = template.replace(/__KEY__/g, i);
        html += content;
    }
    $('#day-groups').html(html);
}

function addReview(){
    var i = parseInt($('#totalReview').val()) + 1;
    $('#totalReview').val(i);
    var template = $('#review-group-template').html();
    var content = template.replace(/__KEY__/g, i);
    $('#review-group').append(content);
}

function addPromotion(){
    var template = $('#promotion-template').html();
    $('#addPromotion').append(template);
    editor().init();
}


function addRoom(){
    var room = document.getElementById("roomTotal").value;
    var template = $('#room-group-template').html();
    template += $('#room-group-js').html();
    var content = template.replace(/__KEY__/g, parseFloat(room)+1);
    var html = content.replace(/__KEYMINUS__/g, parseFloat(room));
    console.log(html);
    $('#roomTotal').val(parseFloat(room)+1);
    $('#room-group').append(html);
    editor().init();
}

function load_EditIti(){
    var day = document.getElementById("duration").value;
    var totalDay = parseInt(document.getElementById("totalDay").value);
    var html = '';
    for (var i = totalDay + 1; i <= day; i++) {
        var template = $('#attribute-group-template').html();
        var content = template.replace(/__KEY__/g, i);
        html += content;
    }
    $('#day-groups').html(html);
    editor().init();
}


'use strict';
var deleteButton = function () {
        var button = document.createElement('button'),
            icon = document.createElement('i'),
            txt = document.createElement('span');

        txt.setAttribute('class', 'sr-only');
        txt.innerText = 'delete';
        icon.setAttribute('class', 'fa fa-trash-o');
        button.setAttribute('class', 'btn btn-danger btn-xs delete-image');
        button.setAttribute('type', 'button');
        button.appendChild(icon);
        button.appendChild(txt);

        return button;
    },
    hiddenInput = function(url) {
        var input = document.createElement('input');
        input.setAttribute('type', 'hidden');
        input.setAttribute('name', 'images[]');
        input.setAttribute('value', url);

        return input;
    },
    createNewImageBlock = function(url) {
        var images = document.getElementById('images'),
            block = document.createElement('div'),
            image = new Image;
        image.src = url;
        block.setAttribute('class', 'image-item col-md-2 col-sm-2 col-xs-2');
        block.appendChild(image);
        block.appendChild(deleteButton());
        block.appendChild(hiddenInput(url));
        images.appendChild(block);
    }

$('#add-new-image').on('click', function (e) {
    e.preventDefault();

    moxman.browse({
        oninsert: function(args) {
            args.files.forEach(function (item, index) {
                createNewImageBlock(item.url);
            });
        },
        view: 'thumbs'
    });

});


$(document).on('click', '.delete-image', function (event) {
    event.preventDefault();
    $(this).parent().remove();
});

$('#my_multi_select').multiSelect();
