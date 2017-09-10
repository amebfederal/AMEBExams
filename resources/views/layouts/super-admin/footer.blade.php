<!-- WIDGETS -->
<script type="text/javascript" src="{{ asset('resources/assets/bootstrap/js/bootstrap.js') }}"></script>
<!-- Bootstrap Dropdown -->
<!-- <script type="text/javascript" src="{{ asset('resources/assets/widgets/dropdown/dropdown.js') }}"></script> -->
<!-- Bootstrap Tooltip -->
<!-- <script type="text/javascript" src="{{ asset('resources/assets/widgets/tooltip/tooltip.js') }}"></script> -->

<!-- Bootstrap Popover -->

<!-- <script type="text/javascript" src="{{ asset('resources/assets/widgets/popover/popover.js') }}"></script> -->

<!-- Bootstrap Progress Bar -->

<script type="text/javascript" src="{{ asset('resources/assets/widgets/progressbar/progressbar.js') }}"></script>

<!-- Bootstrap Buttons -->

<!-- <script type="text/javascript" src="{{ asset('resources/assets/widgets/button/button.js') }}"></script> -->

<!-- Bootstrap Collapse -->

<!-- <script type="text/javascript" src="{{ asset('resources/assets/widgets/collapse/collapse.js') }}"></script> -->

<!-- Superclick -->

<script type="text/javascript" src="{{ asset('resources/assets/widgets/superclick/superclick.js') }}"></script>

<!-- Input switch alternate -->

<script type="text/javascript" src="{{ asset('resources/assets/widgets/input-switch/inputswitch-alt.js') }}"></script>

<!-- Slim scroll -->

<script type="text/javascript" src="{{ asset('resources/assets/widgets/slimscroll/slimscroll.js') }}"></script>

<!-- Slidebars -->

<script type="text/javascript" src="{{ asset('resources/assets/widgets/slidebars/slidebars.js') }}"></script>
<script type="text/javascript" src="{{ asset('resources/assets/widgets/slidebars/slidebars-demo.js') }}"></script>

<!-- PieGage -->

<script type="text/javascript" src="{{ asset('resources/assets/widgets/charts/piegage/piegage.js') }}"></script>
<script type="text/javascript" src="{{ asset('resources/assets/widgets/charts/piegage/piegage-demo.js') }}"></script>

<!-- Screenfull -->

<script type="text/javascript" src="{{ asset('resources/assets/widgets/screenfull/screenfull.js') }}"></script>

<!-- Content box -->

<script type="text/javascript" src="{{ asset('resources/assets/widgets/content-box/contentbox.js') }}"></script>

<!-- Overlay -->

<script type="text/javascript" src="{{ asset('resources/assets/widgets/overlay/overlay.js') }}"></script>

<!-- Widgets init for demo -->

<script type="text/javascript" src="{{ asset('resources/assets/js-init/widgets-init.js') }}"></script>

<!-- Theme layout -->

<script type="text/javascript" src="{{ asset('resources/assets/themes/admin/layout.js') }}"></script>

<!-- Theme switcher -->

<!-- jQueryUI Spinner -->

<script type="text/javascript" src="{{ asset('resources/assets/widgets/spinner/spinner.js') }}"></script>
<script type="text/javascript">
    /* jQuery UI Spinner */

    $(function () {
        "use strict";
        $(".spinner-input").spinner();
    });
</script>

<!-- jQueryUI Autocomplete -->

<script type="text/javascript" src="{{ asset('resources/assets/widgets/autocomplete/autocomplete.js') }}"></script>
<script type="text/javascript" src="{{ asset('resources/assets/widgets/autocomplete/menu.js') }}"></script>
<script type="text/javascript" src="{{ asset('resources/assets/widgets/autocomplete/autocomplete-demo.js') }}"></script>

<!-- Touchspin -->

<!--<link rel="stylesheet" type="text/css" href="{{ asset('resources/assets/widgets/touchspin/touchspin.css') }}">-->
<script type="text/javascript" src="{{ asset('resources/assets/widgets/touchspin/touchspin.js') }}"></script>
<script type="text/javascript" src="{{ asset('resources/assets/widgets/touchspin/touchspin-demo.js') }}"></script>

<!-- Input switch -->

<!--<link rel="stylesheet" type="text/css" href="{{ asset('resources/assets/widgets/input-switch/inputswitch.css') }}">-->
<script type="text/javascript" src="{{ asset('resources/assets/widgets/input-switch/inputswitch.js') }}"></script>
<script type="text/javascript">
    /* Input switch */

    $(function () {
        "use strict";
        $('.input-switch').bootstrapSwitch();
    });
</script>

<!-- Textarea -->

<script type="text/javascript" src="{{ asset('resources/assets/widgets/textarea/textarea.js') }}"></script>
<script type="text/javascript">
    /* Textarea autoresize */

    $(function () {
        "use strict";
        $('.textarea-autosize').autosize();
    });
</script>

<!-- Multi select -->

<!--<link rel="stylesheet" type="text/css" href="{{ asset('resources/assets/widgets/multi-select/multiselect.css') }}">-->
<script type="text/javascript" src="{{ asset('resources/assets/widgets/multi-select/multiselect.js') }}"></script>
<script type="text/javascript">
    /* Multiselect inputs */

    $(function () {
        "use strict";
        $(".multi-select").multiSelect();
        $(".ms-container").append('<i class="glyph-icon icon-exchange"></i>');
    });
</script>

<!-- Uniform -->

<!--<link rel="stylesheet" type="text/css" href="{{ asset('resources/assets/widgets/uniform/uniform.css') }}">-->
<script type="text/javascript" src="{{ asset('resources/assets/widgets/uniform/uniform.js') }}"></script>
<script type="text/javascript" src="{{ asset('resources/assets/widgets/uniform/uniform-demo.js') }}"></script>

<!-- Chosen -->


<script type="text/javascript" src="{{ asset('resources/assets/widgets/chosen/chosen.js') }}"></script>
<script type="text/javascript" src="{{ asset('resources/assets/widgets/chosen/chosen-demo.js') }}"></script>
<script type="text/javascript" src="{{ asset('resources/assets/widgets/datatable/datatable.js') }}"></script>
<script type="text/javascript" src="{{ asset('resources/assets/widgets/datatable/datatable-bootstrap.js') }}"></script>
<script type="text/javascript"
        src="{{ asset('resources/assets/widgets/datatable/datatable-fixedcolumns.js') }}"></script>


<script type="text/javascript" src="{{ asset('js/custom.js') }}"></script>

<script>
    siteUrl = "<?php echo url('/') ?>";
    $(function () {

        $('.sfActive').parents('.sidebar-submenu').show();
        $('.sfActive').parents('.sidebar-submenu').parents('li').addClass('sfHover');

    })
</script>


</div>
</body>
</html>