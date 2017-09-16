<!DOCTYPE html>
<html lang="en">
<head>

    <style>
        /* Loading Spinner */
        .spinner{margin:0;width:70px;height:18px;margin:-35px 0 0 -9px;position:absolute;top:50%;left:50%;text-align:center}.spinner > div{width:18px;height:18px;background-color:#333;border-radius:100%;display:inline-block;-webkit-animation:bouncedelay 1.4s infinite ease-in-out;animation:bouncedelay 1.4s infinite ease-in-out;-webkit-animation-fill-mode:both;animation-fill-mode:both}.spinner .bounce1{-webkit-animation-delay:-.32s;animation-delay:-.32s}.spinner .bounce2{-webkit-animation-delay:-.16s;animation-delay:-.16s}@-webkit-keyframes bouncedelay{0%,80%,100%{-webkit-transform:scale(0.0)}40%{-webkit-transform:scale(1.0)}}@keyframes bouncedelay{0%,80%,100%{transform:scale(0.0);-webkit-transform:scale(0.0)}40%{transform:scale(1.0);-webkit-transform:scale(1.0)}}
    </style>


    <meta charset="UTF-8">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <title> AMEB Portal </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <!-- Favicons -->

    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{ asset('resources/assets/images/icons/apple-touch-icon-144-precomposed.png') }}">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{ asset('resources/assets/images/icons/apple-touch-icon-114-precomposed.png') }}">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{ asset('resources/assets/images/icons/apple-touch-icon-72-precomposed.png') }}">
    <link rel="apple-touch-icon-precomposed" href="{{ asset('resources/assets/images/icons/apple-touch-icon-57-precomposed.png') }}">
    <link rel="shortcut icon" href="{{ asset('resources/assets/images/icons/favicon.png') }}">



    <link rel="stylesheet" type="text/css" href="{{ asset('resources/assets/bootstrap/css/bootstrap.css') }}">


    <!-- HELPERS -->

    <link rel="stylesheet" type="text/css" href="{{ asset('resources/assets/helpers/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('resources/assets/helpers/backgrounds.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('resources/assets/helpers/boilerplate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('resources/assets/helpers/border-radius.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('resources/assets/helpers/grid.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('resources/assets/helpers/page-transitions.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('resources/assets/helpers/spacing.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('resources/assets/helpers/typography.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('resources/assets/helpers/utils.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('resources/assets/helpers/colors.css') }}">

    <!-- ELEMENTS -->

    <link rel="stylesheet" type="text/css" href="{{ asset('resources/assets/elements/badges.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('resources/assets/elements/buttons.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('resources/assets/elements/content-box.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('resources/assets/elements/dashboard-box.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('resources/assets/elements/forms.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('resources/assets/elements/images.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('resources/assets/elements/info-box.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('resources/assets/elements/invoice.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('resources/assets/elements/loading-indicators.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('resources/assets/elements/menus.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('resources/assets/elements/panel-box.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('resources/assets/elements/response-messages.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('resources/assets/elements/responsive-tables.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('resources/assets/elements/ribbon.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('resources/assets/elements/social-box.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('resources/assets/elements/tables.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('resources/assets/elements/tile-box.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('resources/assets/elements/timeline.css') }}">



    <!-- ICONS -->

    <link rel="stylesheet" type="text/css" href="{{ asset('resources/assets/icons/fontawesome/fontawesome.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('resources/assets/icons/linecons/linecons.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('resources/assets/icons/spinnericon/spinnericon.css') }}">


    <!-- WIDGETS -->

    <link rel="stylesheet" type="text/css" href="{{ asset('resources/assets/widgets/accordion-ui/accordion.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('resources/assets/widgets/calendar/calendar.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('resources/assets/widgets/carousel/carousel.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('resources/assets/widgets/charts/justgage/justgage.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('resources/assets/widgets/charts/morris/morris.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('resources/assets/widgets/charts/piegage/piegage.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('resources/assets/widgets/charts/xcharts/xcharts.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('resources/assets/widgets/chosen/chosen.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('resources/assets/widgets/colorpicker/colorpicker.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('resources/assets/widgets/datatable/datatable.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('resources/assets/widgets/datepicker/datepicker.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('resources/assets/widgets/datepicker-ui/datepicker.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('resources/assets/widgets/daterangepicker/daterangepicker.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('resources/assets/widgets/dialog/dialog.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('resources/assets/widgets/dropdown/dropdown.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('resources/assets/widgets/dropzone/dropzone.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('resources/assets/widgets/file-input/fileinput.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('resources/assets/widgets/input-switch/inputswitch.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('resources/assets/widgets/input-switch/inputswitch-alt.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('resources/assets/widgets/ionrangeslider/ionrangeslider.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('resources/assets/widgets/jcrop/jcrop.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('resources/assets/widgets/jgrowl-notifications/jgrowl.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('resources/assets/widgets/loading-bar/loadingbar.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('resources/assets/widgets/maps/vector-maps/vectormaps.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('resources/assets/widgets/markdown/markdown.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('resources/assets/widgets/modal/modal.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('resources/assets/widgets/multi-select/multiselect.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('resources/assets/widgets/multi-upload/fileupload.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('resources/assets/widgets/nestable/nestable.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('resources/assets/widgets/noty-notifications/noty.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('resources/assets/widgets/popover/popover.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('resources/assets/widgets/pretty-photo/prettyphoto.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('resources/assets/widgets/progressbar/progressbar.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('resources/assets/widgets/range-slider/rangeslider.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('resources/assets/widgets/slidebars/slidebars.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('resources/assets/widgets/slider-ui/slider.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('resources/assets/widgets/summernote-wysiwyg/summernote-wysiwyg.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('resources/assets/widgets/tabs-ui/tabs.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('resources/assets/widgets/theme-switcher/themeswitcher.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('resources/assets/widgets/timepicker/timepicker.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('resources/assets/widgets/tocify/tocify.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('resources/assets/widgets/tooltip/tooltip.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('resources/assets/widgets/touchspin/touchspin.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('resources/assets/widgets/uniform/uniform.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('resources/assets/widgets/wizard/wizard.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('resources/assets/widgets/xeditable/xeditable.css') }}">

    <!-- SNIPPETS -->

    <link rel="stylesheet" type="text/css" href="{{ asset('resources/assets/snippets/chat.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('resources/assets/snippets/files-box.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('resources/assets/snippets/login-box.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('resources/assets/snippets/notification-box.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('resources/assets/snippets/progress-box.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('resources/assets/snippets/todo.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('resources/assets/snippets/user-profile.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('resources/assets/snippets/mobile-navigation.css') }}">

    <!-- APPLICATIONS -->

    <link rel="stylesheet" type="text/css" href="{{ asset('resources/assets/applications/mailbox.css') }}">

    <!-- Admin theme -->

    <link rel="stylesheet" type="text/css" href="{{ asset('resources/assets/themes/admin/layout.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('resources/assets/themes/admin/color-schemes/default.css') }}">

    <!-- Components theme -->

    <link rel="stylesheet" type="text/css" href="{{ asset('resources/assets/themes/components/default.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('resources/assets/themes/components/border-radius.css') }}">

    <!-- Admin responsive -->

    <link rel="stylesheet" type="text/css" href="{{ asset('resources/assets/helpers/responsive-elements.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('resources/assets/helpers/admin-responsive.css') }}">

    <!-- JS Core -->

    <script type="text/javascript" src="{{ asset('resources/assets/js-core/jquery-core.js') }}"></script>
    <script type="text/javascript" src="{{ asset('resources/assets/js-core/jquery-ui-core.js') }}"></script>
    <script type="text/javascript" src="{{ asset('resources/assets/js-core/jquery-ui-widget.js') }}"></script>
    <script type="text/javascript" src="{{ asset('resources/assets/js-core/jquery-ui-mouse.js') }}"></script>
    <script type="text/javascript" src="{{ asset('resources/assets/js-core/jquery-ui-position.js') }}"></script>
    <!--<script type="text/javascript" src="{{ asset('resources/assets/js-core/transition.js') }}"></script>-->
    <script type="text/javascript" src="{{ asset('resources/assets/js-core/modernizr.js') }}"></script>
    <script type="text/javascript" src="{{ asset('resources/assets/js-core/jquery-cookie.js') }}"></script>





    <script type="text/javascript">
        $(window).load(function(){
            setTimeout(function() {
                $('#loading').fadeOut( 400, "linear" );
            }, 300);
        });
    </script>



</head>


<body>


<div class="sb-slidebar bg-black sb-right sb-style-overlay">
    <div class="scrollable-content scrollable-slim-sidebar">
        <div class="pad15A">
            <a href="#" title="" data-toggle="collapse" data-target="#sidebar-toggle-1" class="popover-title">
                Cloud status
                <span class="caret"></span>
            </a>
            <div id="sidebar-toggle-1" class="collapse in">
                <div class="pad15A container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="text-center font-gray pad5B text-transform-upr font-size-12">API Check</div>
                            <div class="text-center font-gray pad5B text-transform-upr font-size-16"><i class="glyph-icon icon-thumbs-up"></i></div>
                        </div>
                        <div class="col-md-6">
                            <div class="text-center font-gray pad5B text-transform-upr font-size-12">RS Server</div>
                            <div class="text-center font-gray pad5B text-transform-upr font-size-16"><i class="glyph-icon icon-thumbs-up"></i></div>
                        </div>
                    </div>
                    <div class="divider mrg15T mrg15B"></div>
                    <div class="text-center">
                        <a href="#" class="btn center-div btn-info mrg5T btn-sm text-transform-upr updateEasyPieChart">
                            <i class="glyph-icon icon-refresh"></i>
                            Sync with RS
                        </a>
                    </div>
                </div>
            </div>
            <div id="sidebar-toggle-4" class="collapse in">
                <ul class="notifications-box notifications-box-alt">
                    <li>
                        <span class="bg-purple icon-notification glyph-icon icon-users"></span>
                        <span class="notification-text">This is an error notification</span>
                        <div class="notification-time">
                            a few seconds ago
                            <span class="glyph-icon icon-clock-o"></span>
                        </div>
                        <a href="#" class="notification-btn btn btn-xs btn-black tooltip-button" data-placement="left" title="View details">
                            <i class="glyph-icon icon-arrow-right"></i>
                        </a>
                    </li>
                    <li>
                        <span class="bg-warning icon-notification glyph-icon icon-ticket"></span>
                        <span class="notification-text">This is a warning notification</span>
                        <div class="notification-time">
                            <b>15</b> minutes ago
                            <span class="glyph-icon icon-clock-o"></span>
                        </div>
                        <a href="#" class="notification-btn btn btn-xs btn-black tooltip-button" data-placement="left" title="View details">
                            <i class="glyph-icon icon-arrow-right"></i>
                        </a>
                    </li>
                    <li>
                        <span class="bg-green icon-notification glyph-icon icon-random"></span>
                        <span class="notification-text font-green">A success message example.</span>
                        <div class="notification-time">
                            <b>2 hours</b> ago
                            <span class="glyph-icon icon-clock-o"></span>
                        </div>
                        <a href="#" class="notification-btn btn btn-xs btn-black tooltip-button" data-placement="left" title="View details">
                            <i class="glyph-icon icon-arrow-right"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div id="loading">
    <div class="spinner">
        <div class="bounce1"></div>
        <div class="bounce2"></div>
        <div class="bounce3"></div>
    </div>
</div>

<div id="page-wrapper">
    <div id="page-header" class="bg-black">
        <div id="mobile-navigation">
            <button id="nav-toggle" class="collapsed" data-toggle="collapse" data-target="#page-sidebar"><span></span></button>
            <a href="index.html" class="logo-content-small" title="MonarchUI"></a>
        </div>
        <div id="header-logo" class="logo-bg">
            <a href="index.html" class="logo-content-big" title="MonarchUI">
                AMEB <i>Portal</i>
                <span>The perfect solution for user interfaces</span>
            </a>
            <a href="index.html" class="logo-content-small" title="MonarchUI">
                AMEB <i>Portal</i>
                <span>The perfect solution for user interfaces</span>
            </a>
            <a id="close-sidebar" href="#" title="Close sidebar">
                <i class="glyph-icon icon-angle-left"></i>
            </a>
        </div>
        <div id="header-nav-left">
            <div class="user-account-btn dropdown">
                <a href="#" title="My Account" class="user-profile clearfix" data-toggle="dropdown">
                    <img width="28" src="{{ asset('resources/assets/image-resources/gravatar.jpg') }}" alt="Profile image">
                    <span>SuperAdmin</span>
                    <i class="glyph-icon icon-angle-down"></i>
                </a>
                <div class="dropdown-menu float-left">
                    <div class="box-sm">
                        <div class="login-box clearfix">
                            <div class="user-img">
                                <a href="#" title="" class="change-img">Change photo</a>
                                <img src="{{ asset('resources/assets/image-resources/gravatar.jpg') }}" alt="">
                            </div>
                            <div class="user-info">
                            <span>
                                AMEB Online
                                <i>Administrator</i>
                            </span>
                                <a href="{{ url('/') }}" title="Edit profile">Edit profile</a>
                                <a href="#" title="View notifications">Lock Screen</a>
                            </div>
                        </div>
                        <div class="divider"></div>
                        <div class="pad5A button-pane button-pane-alt text-center">
                            <a href="{{ url('super-admin/logout') }}" class="btn display-block font-normal btn-danger">
                                <i class="glyph-icon icon-power-off"></i>
                                Logout
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- #header-nav-left -->

        <div id="header-nav-right">
            <div class="dropdown" id="notifications-btn">
                <a data-toggle="dropdown" href="#" title="">
                    <span class="small-badge bg-yellow"></span>
                    <i class="glyph-icon icon-linecons-megaphone"></i>
                </a>
                <div class="dropdown-menu box-md float-right">

                    <div class="popover-title display-block clearfix pad10A">
                        Notifications
                        <a class="text-transform-cap font-primary font-normal btn-link float-right" href="#" title="View more options">
                            More options...
                        </a>
                    </div>
                    <div class="scrollable-content scrollable-slim-box">
                        <ul class="no-border notifications-box">
                            <li>
                                <span class="bg-danger icon-notification glyph-icon icon-bullhorn"></span>
                                <span class="notification-text">This is an error notification</span>
                                <div class="notification-time">
                                    a few seconds ago
                                    <span class="glyph-icon icon-clock-o"></span>
                                </div>
                            </li>
                            <li>
                                <span class="bg-warning icon-notification glyph-icon icon-users"></span>
                                <span class="notification-text font-blue">This is a warning notification</span>
                                <div class="notification-time">
                                    <b>15</b> minutes ago
                                    <span class="glyph-icon icon-clock-o"></span>
                                </div>
                            </li>
                            <li>
                                <span class="bg-green icon-notification glyph-icon icon-sitemap"></span>
                                <span class="notification-text font-green">A success message example.</span>
                                <div class="notification-time">
                                    <b>2 hours</b> ago
                                    <span class="glyph-icon icon-clock-o"></span>
                                </div>
                            </li>
                            <li>
                                <span class="bg-azure icon-notification glyph-icon icon-random"></span>
                                <span class="notification-text">This is an error notification</span>
                                <div class="notification-time">
                                    a few seconds ago
                                    <span class="glyph-icon icon-clock-o"></span>
                                </div>
                            </li>
                            <li>
                                <span class="bg-warning icon-notification glyph-icon icon-ticket"></span>
                                <span class="notification-text">This is a warning notification</span>
                                <div class="notification-time">
                                    <b>15</b> minutes ago
                                    <span class="glyph-icon icon-clock-o"></span>
                                </div>
                            </li>
                            <li>
                                <span class="bg-blue icon-notification glyph-icon icon-user"></span>
                                <span class="notification-text font-blue">Alternate notification styling.</span>
                                <div class="notification-time">
                                    <b>2 hours</b> ago
                                    <span class="glyph-icon icon-clock-o"></span>
                                </div>
                            </li>
                            <li>
                                <span class="bg-purple icon-notification glyph-icon icon-user"></span>
                                <span class="notification-text">This is an error notification</span>
                                <div class="notification-time">
                                    a few seconds ago
                                    <span class="glyph-icon icon-clock-o"></span>
                                </div>
                            </li>
                            <li>
                                <span class="bg-warning icon-notification glyph-icon icon-user"></span>
                                <span class="notification-text">This is a warning notification</span>
                                <div class="notification-time">
                                    <b>15</b> minutes ago
                                    <span class="glyph-icon icon-clock-o"></span>
                                </div>
                            </li>
                            <li>
                                <span class="bg-green icon-notification glyph-icon icon-user"></span>
                                <span class="notification-text font-green">A success message example.</span>
                                <div class="notification-time">
                                    <b>2 hours</b> ago
                                    <span class="glyph-icon icon-clock-o"></span>
                                </div>
                            </li>
                            <li>
                                <span class="bg-purple icon-notification glyph-icon icon-user"></span>
                                <span class="notification-text">This is an error notification</span>
                                <div class="notification-time">
                                    a few seconds ago
                                    <span class="glyph-icon icon-clock-o"></span>
                                </div>
                            </li>
                            <li>
                                <span class="bg-warning icon-notification glyph-icon icon-user"></span>
                                <span class="notification-text">This is a warning notification</span>
                                <div class="notification-time">
                                    <b>15</b> minutes ago
                                    <span class="glyph-icon icon-clock-o"></span>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="pad10A button-pane button-pane-alt text-center">
                        <a href="#" class="btn btn-primary" title="View all notifications">
                            View all notifications
                        </a>
                    </div>
                </div>
            </div>

            <div class="dropdown" id="cloud-btn">
                <a href="#" data-placement="bottom" class="tooltip-button sb-toggle-right" title="Statistics Sidebar">
                    <i class="glyph-icon icon-linecons-cloud"></i>
                </a>
            </div>
            <a class="header-btn" id="logout-btn" href="lockscreen-3.html" title="Lockscreen page example">
                <i class="glyph-icon icon-linecons-lock"></i>
            </a>

        </div><!-- #header-nav-right -->

    </div>