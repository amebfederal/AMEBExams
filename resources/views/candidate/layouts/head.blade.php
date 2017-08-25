<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        /* Loading Spinner */
        .spinner{margin:0;width:70px;height:18px;margin:-35px 0 0 -9px;position:absolute;top:50%;left:50%;text-align:center}.spinner > div{width:18px;height:18px;background-color:#333;border-radius:100%;display:inline-block;-webkit-animation:bouncedelay 1.4s infinite ease-in-out;animation:bouncedelay 1.4s infinite ease-in-out;-webkit-animation-fill-mode:both;animation-fill-mode:both}.spinner .bounce1{-webkit-animation-delay:-.32s;animation-delay:-.32s}.spinner .bounce2{-webkit-animation-delay:-.16s;animation-delay:-.16s}@-webkit-keyframes bouncedelay{0%,80%,100%{-webkit-transform:scale(0.0)}40%{-webkit-transform:scale(1.0)}}@keyframes bouncedelay{0%,80%,100%{transform:scale(0.0);-webkit-transform:scale(0.0)}40%{transform:scale(1.0);-webkit-transform:scale(1.0)}}
    </style>
    <meta charset="UTF-8">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <title> AMEB Exams </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <!-- Favicons -->

    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{ asset('resources/assets/images/icons/apple-touch-icon-144-precomposed.png') }}">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{ asset('resources/assets/images/icons/apple-touch-icon-114-precomposed.png') }}">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{ asset('resources/assets/images/icons/apple-touch-icon-72-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" href="{{ asset('resources/assets/images/icons/apple-touch-icon-57-precomposed.png') }}">
    <link rel="shortcut icon" href="{{ asset('resources/assets/images/icons/favicon.png') }}">



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

    <!-- FRONTEND ELEMENTS -->

    <link rel="stylesheet" type="text/css" href="{{ asset('resources/assets/frontend-elements/blog.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('resources/assets/frontend-elements/cta-box.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('resources/assets/frontend-elements/feature-box.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('resources/assets/frontend-elements/footer.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('resources/assets/frontend-elements/hero-box.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('resources/assets/frontend-elements/icon-box.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('resources/assets/frontend-elements/portfolio-navigation.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('resources/assets/frontend-elements/pricing-table.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('resources/assets/frontend-elements/sliders.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('resources/assets/frontend-elements/testimonial-box.css') }}">

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

    <!-- FRONTEND WIDGETS -->

    <link rel="stylesheet" type="text/css" href="{{ asset('resources/assets/widgets/layerslider/layerslider.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('resources/assets/widgets/owlcarousel/owlcarousel.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('resources/assets/widgets/fullpage/fullpage.css') }}">

    <!-- SNIPPETS -->

    <link rel="stylesheet" type="text/css" href="{{ asset('resources/assets/snippets/chat.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('resources/assets/snippets/files-box.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('resources/assets/snippets/login-box.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('resources/assets/snippets/notification-box.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('resources/resources') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('resources/assets/snippets/todo.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('resources/assets/snippets/user-profile.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('resources/assets/snippets/mobile-navigation.css') }}">

    <!-- Frontend theme -->

    <link rel="stylesheet" type="text/css" href="{{ asset('resources/assets/themes/frontend/layout.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('resources/assets/themes/frontend/color-schemes/default.css') }}">


    <!-- Components theme -->

    <link rel="stylesheet" type="text/css" href="{{ asset('resources/assets/themes/components/default.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('resources/assets/themes/components/border-radius.css') }}">

    <!-- Frontend responsive -->

    <link rel="stylesheet" type="text/css" href="{{ asset('resources/assets/helpers/responsive-elements.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('resources/assets/helpers/frontend-responsive.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('resources/assets/elements/cart.css') }}">


    <!-- JS Core -->

    <script type="text/javascript" src="{{ asset('resources/assets/js-core/jquery-core.js') }}"></script>
    <script type="text/javascript" src="{{ asset('resources/assets/js-core/jquery-ui-core.js') }}"></script>
    <script type="text/javascript" src="{{ asset('resources/assets/js-core/jquery-ui-widget.js') }}"></script>
    <script type="text/javascript" src="{{ asset('resources/assets/js-core/jquery-ui-mouse.js') }}"></script>
    <script type="text/javascript" src="{{ asset('resources/assets/js-core/jquery-ui-position.js') }}"></script>
    <script type="text/javascript" src="{{ asset('resources/assets/js-core/transition.js') }}"></script>
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

<body class="main-header-fixed">

<div id="loading">
    <div class="spinner">
        <div class="bounce1"></div>
        <div class="bounce2"></div>
        <div class="bounce3"></div>
    </div>
</div>
<div id="page-wrapper">
    <div class="top-bar bg-topbar">
        <div class="container">
            <div class="float-right user-account-btn dropdown">
                <a href=" " title="Login" class="btn btn-sm float-left btn-alt btn-hover mrg10R btn-default btn-dashboard">
                    <span>Dashboard</span>
                    <i class="glyph-icon icon-arrow-right"></i>
                </a>
                <a href="#" title="My Account" class="user-profile" data-toggle="dropdown" aria-expanded="false">
                    <img width="28" src="{{ asset('resources/assets/image-resources/gravatar.jpg') }}" alt="Profile image">
                    <span>AMEB Online</span>
                    <i class="glyph-icon icon-angle-down"></i>
                </a>
                <div class="dropdown-menu pad0B float-right">
                    <div class="box-sm">
                        <div class="login-box clearfix">
                            <div class="user-img">
                                <a href="#" title="" class="change-img">Change photo</a>
                                <img src="{{ asset('resources/assets/image-resources/gravatar.jpg') }}" alt="">
                            </div>
                            <div class="user-info">
                        <span>
                            AMEB Online
                            <i>Teacher </i>
                        </span>
                                <a href="#" title="My Account"></a>
                            </div>
                        </div>
                        <div class="divider"></div>
                        <ul class="reset-ul mrg5B">
                            <li>
                                <a href="profile.php">
                                    My Profile

                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Previous Purchase

                                </a>
                            </li>
                        </ul>
                        <div class="pad5A button-pane button-pane-alt text-center">
                            <a href="../guest/login.php" class="btn display-block font-normal btn-danger">
                                <i class="glyph-icon icon-power-off"></i>
                                Logout
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- .container -->
    </div><!-- .top-bar -->
    <div class="main-header bg-header wow fadeInDown">
        <div class="container">
            <a href="index.php" class="header-logo" title="Monarch - Create perfect presentation websites"></a><!-- .header-logo -->
            <div class="right-header-btn">
                <div id="mobile-navigation">
                    <button id="nav-toggle" class="collapsed" data-toggle="collapse" data-target=".header-nav"><span></span></button>
                </div>
                <div class="search-btn">
                    <a href="#" class="popover-button" title="Search" data-placement="bottom" data-id="#popover-search">
                        <i class="glyph-icon icon-search"></i>
                    </a>
                    <div class="hide" id="popover-search">
                        <div class="pad5A box-md">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search terms here ...">
                        <span class="input-group-btn">
                            <a class="btn btn-primary" href="#">Search</a>
                        </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- .header-logo -->
            <ul class="header-nav collapse">
                <li>
                    <a href="index.php" title="Homepages">
                        Home

                    </a>
                </li>
                <li>
                    <a href="shop.php" title="Hero sections">
                        Sample Questions
                    </a>
                    <ul>
                        <li>
                            <a href="shop.php" title="Components framework">
                                <span>Sample Paper</span>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="shop.php" title="Components framework">
                                <span>Tutorials</span>
                            </a>
                        </li>
                        <li class="divider"></li>
                    </ul>
                </li>
                <li>
                    <a href="#" title="Features">
                        Syllabuses
                        <i class="glyph-icon icon-angle-down"></i>
                    </a>

                    <ul>
                        <li>
                            <a href="syllabus.php" title="Components framework">
                                <span>Music Craft</span>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="syllabus.php" title="Components framework">
                                <span>Theory Of Music</span>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="syllabus.php" title="Components framework">
                                <span>Musicianship</span>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="syllabus.php" title="Components framework">
                                <span>Speech and Performance</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#" title="Features">
                        Information
                        <i class="glyph-icon icon-angle-down"></i>
                    </a>

                    <ul>
                        <li>
                            <a href="contact.php" title="Components framework">
                                <span>Contact us</span>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="about.php" title="Components framework">
                                <span>About us</span>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="faq.php" title="Components framework">
                                <span>FAQ</span>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul><!-- .header-nav -->
        </div><!-- .container -->
    </div><!-- .main-header -->
    <?php
    $page = basename($_SERVER['PHP_SELF']);
    if($page!="index.php"):
    ?>
    <div class="hero-box hero-box-smaller full-bg-13 font-inverse" data-top-bottom="background-position: 50% 0px;" data-bottom-top="background-position: 50% -600px;">
        <div class="container">
            <h1 class="hero-heading wow fadeInDown" data-wow-duration="0.6s">Page Title</h1>
            <p class="hero-text wow bounceInUp" data-wow-duration="0.9s" data-wow-delay="0.2s">Page Info</p>
        </div>
        <div class="hero-overlay bg-black"></div>
    </div>
    <div id="page-content" class="col-md-12 center-margin frontend-components mrg25T">
        <div class="row">
            <div class="container">
<?php endif; ?>