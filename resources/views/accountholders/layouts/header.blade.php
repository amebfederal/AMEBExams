<div class="top-bar bg-topbar">
    <div class="container">
        <div class="float-right user-account-btn dropdown">
            <a href="profile.php" title="Login" class="btn btn-sm float-left btn-alt btn-hover mrg10R btn-default btn-dashboard">
                <span>Dashboard</span>
                <i class="glyph-icon icon-arrow-right"></i>
            </a>
            <a href="#" title="My Account" class="user-profile" data-toggle="dropdown" aria-expanded="false">

                <span>AMEB Online</span>
                <i class="glyph-icon icon-angle-down"></i>
            </a>
            <div class="dropdown-menu pad0B float-right">
                <div class="box-sm">
                    <div class="login-box clearfix">
                        <div class="user-img">

                            <img src="{{ asset('resources/assets/image-resources/gravatar.jpg')}}" alt="">
                        </div>
                        <div class="user-info">
                        <span>
                            First last Name
                            <i>Role</i>
                        </span>
                            <a href="view_profile.php" title="">View profile</a>
                            <a href="view_notifications.php" title="">View notifications</a>
                        </div>
                    </div>
                    <div class="divider"></div>
                    <ul class="reset-ul mrg5B">
                        <li>
                            <a href="edit_profile.php">
                                Edit Profile

                            </a>
                        </li>
                        <li>
                            <a href="edit_password.php">
                                Change Password

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
<div class="hero-box hero-box-smaller full-bg-13 font-inverse" data-top-bottom="background-position: 50% 0px;" data-bottom-top="background-position: 50% -600px;">
    <div class="container">
        <h1 class="hero-heading wow fadeInDown" data-wow-duration="0.6s"> @yield('title')  </h1>
        <!-- <p class="hero-text wow bounceInUp" data-wow-duration="0.9s" data-wow-delay="0.2s">Page Info</p> -->
    </div>
    <div class="hero-overlay bg-black"></div>
</div>