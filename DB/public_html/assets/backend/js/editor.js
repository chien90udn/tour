var editor = function () {
    var pluginMCE = [
            "advlist autolink autosave link image lists charmap print preview hr anchor pagebreak",
            "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
            "table contextmenu directionality emoticons template textcolor paste textcolor colorpicker textpattern moxiemanager codesample"
    ],
        setupMCE = function (editor) {
            editor.on('change', function () {
                tinymce.triggerSave();
            });
        };

    var TinyMCETextEditor = function() {
        tinymce.init({
            selector: '.simple_editor',
            height: 200,
            moxiemanager_filelist_main_toolbar: 'create upload manage', // moxiemanager
            // statusbar: false,
            image_advtab: true,
            plugins: pluginMCE,
            toolbar1: "bold italic underline strikethrough | alignleft aligncenter alignright alignjustify | styleselect formatselect fontselect fontsizeselect | code",
            setup: setupMCE,
            menubar: false,
            relative_urls: false,
            entity_encoding : "raw",
            toolbar_items_size: 'small'
        });

        tinymce.init({
            selector: '.editor',
            height: 500,
            theme: 'modern',
            moxiemanager_filelist_main_toolbar: 'create upload manage', // moxiemanager
            plugins: pluginMCE,
            toolbar1: "bold italic underline strikethrough | alignleft aligncenter alignright alignjustify | styleselect formatselect fontselect fontsizeselect",
            toolbar2: "cut copy paste | searchreplace | bullist numlist | outdent indent blockquote | undo redo | link unlink anchor image media code codesample | insertdatetime preview | forecolor backcolor",
            toolbar3: "table | hr removeformat | subscript superscript | charmap emoticons | print fullscreen | ltr rtl | visualchars visualblocks nonbreaking template pagebreak restoredraft",
            image_advtab: true,
            valid_elements : '*[*]',
            menubar: false,
            setup: setupMCE,
            relative_urls: false,
            entity_encoding : "raw",
            toolbar_items_size: 'small'
        });

        tinymce.init({
            selector: '.editor_html',
            height: 500,
            theme: 'modern',
            plugins: [
                'fullpage save advlist autolink lists link image charmap print preview hr anchor pagebreak',
                'searchreplace wordcount visualblocks visualchars code fullscreen',
                'insertdatetime media nonbreaking save table contextmenu directionality',
                'template paste textcolor colorpicker textpattern imagetools toc moxiemanager codesample'
            ],
            toolbar1: "bold italic underline strikethrough | alignleft aligncenter alignright alignjustify | styleselect formatselect fontselect fontsizeselect",
            toolbar2: "cut copy paste | searchreplace | bullist numlist | outdent indent blockquote | undo redo | link unlink anchor image media code codesample | insertdatetime preview | forecolor backcolor",
            toolbar3: "table | hr removeformat | subscript superscript | charmap emoticons | print fullscreen | ltr rtl | visualchars visualblocks nonbreaking template pagebreak restoredraft",
            image_advtab: true,
            valid_elements : '*[*]',
            statusbar: false,
            setup: setupMCE,
            relative_urls: false,
            entity_encoding : "raw"
        });
    };
    
    var ChooseThumbnail = function () {
        $('.choose-thumbnail').each(function (e) {
            var target = $(this),
                input  = $(this).find('input[type=hidden]'),
                showPicture;

            // function show image in block
            showPicture = function (src) {
                var image = new Image();
                image.src = src;
                return image;
            };
            // show image default
            if(input.val().length > 0) {
                target.find('img').remove();
                target.prepend(showPicture(
                    input.val()
                ));
            }

            // click choose images
            $(this).off();
            $(this).on('click', function () {
                // remove all picture after select
                input.val('');
                target.find('img').remove();

                return moxman.browse({relative_urls: false, no_host: true, fields: input.attr('id'), view: 'thumbs'});
            });

            // change picture
            input.off();
            input.change(function(e) {
                target.find('img').remove();
                target.prepend(showPicture(
                    $(this).val()
                ));
            })
        });
    };

    var chooseFilesComponent = function () {
        var btn = $('button[data-toggle=files]');

        if (btn.length > 0) {
            btn.on('click', function(e) {
                e.preventDefault();
                return moxman.browse({relative_urls: false, no_host: true, fields: btn.data('target'), view: 'thumbs'});
            });
        }
    };

    var autoRenderSlugViaName = function () {
          var nameBox = $('input[name="name"]'),
              slugBox = $('input[name="slug"]');

         if(slugBox.length > 0) {
             nameBox.change(function () {
                 slugBox.val(
                     slugify(
                         $(this).val()
                     )
                 )
             });
         }

    };

    return {
        init: function () {
            TinyMCETextEditor();
            ChooseThumbnail();
            chooseFilesComponent();
            autoRenderSlugViaName();
        }
    }
};

$(document).ready(function () {
    editor().init();
});

var slugify = function(str) {
    str = str.toString().toLowerCase();
    str = str.replace(/(à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ)/g, 'a');
    str = str.replace(/(è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ)/g, 'e');
    str = str.replace(/(ì|í|ị|ỉ|ĩ)/g, 'i');
    str = str.replace(/(ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ)/g, 'o');
    str = str.replace(/(ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ)/g, 'u');
    str = str.replace(/(ỳ|ý|ỵ|ỷ|ỹ)/g, 'y');
    str = str.replace(/(đ)/g, 'd');
    str = str.replace(/([^0-9a-z-\s])/g, '');
    str = str.replace(/(\s+)/g, '-');
    str = str.replace(/^-+/g, '');
    str = str.replace(/-+$/g, '');
    return str;
};

jQuery('#tags').tagsInput({width:'auto'});

jQuery('#fac_high').tagsInput({width:'auto'});