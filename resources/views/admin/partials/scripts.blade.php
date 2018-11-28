<!-- js placed at the end of the document so the pages load faster -->
<script src="{{ backend_asset('js/app.js') }}"></script>
<script src="{{ backend_asset('js/pace.min.js') }}"></script>
<script src="{{ backend_asset('js/wow.min.js') }}"></script>
<script src="{{ backend_asset('js/jquery.nicescroll.js') }}" type="text/javascript"></script>
<script src="{{ backend_asset('vendor/sweet-alert/sweet-alert.min.js') }}"></script>
<script src="{{ backend_asset('vendor/select2/select2.min.js') }}" type="text/javascript"></script>
<script type="text/javascript" src="{{ backend_asset('vendor/jquery-multi-select/jquery.multi-select.js') }}"></script>
<script src="{{ backend_asset('vendor/tinymce/tinymce.min.js') }}"></script>
<script src="{{ backend_asset('vendor/tagsinput/jquery.tagsinput.min.js') }}"></script>
<script src="{{ backend_asset('vendor/tinymce/plugins/moxiemanager/js/moxman.loader.min.js') }}"></script>
<script src="{{ backend_asset('js/editor.js') }}"></script>
<!--common script for all pages-->
<script src="{{ backend_asset('js/jquery.app.js') }}"></script>
<script src="{{ backend_asset('js/menu.js') }}"></script>
<script>
    'use strict';
    $('[name="name"]').keyup(function() {
        $('[data="slug"]').html(slugify($(this).val()));
        $('#name-link').html(slugify($(this).val()));
        $('[name="name_link"]').val(slugify($(this).val()));
    });

    jQuery(".select2").select2({
        width: '100%'
    });
</script>