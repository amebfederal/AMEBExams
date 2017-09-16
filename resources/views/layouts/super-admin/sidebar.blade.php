<div id="page-sidebar">
    <div class="scroll-sidebar">


        <ul id="sidebar-menu">
            <li class="header"><span>Manage</span></li>
            <li>
                <a href="{{URL::route('superadmin.dashboard')}}" title="Admin Dashboard">
                    <i class="glyph-icon icon-linecons-tv"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li>
                <a href="#" title="Elements">
                    <i class="glyph-icon icon-linecons-graduation-cap"></i>
                    <span>Online Examination</span>
                </a>

                <div class="sidebar-submenu">

                    <ul>
                        <li><a href="{{ url('super-admin/category')}}"
                               title="Manage Exam Sub-Category"><span>Category</span></a></li>

                        <li><a href="{{ url('super-admin/sub-category')}}" title="Manage Exam Sub-Category"><span>Sub Category</span></a>
                        </li>
                        <li><a href="{{ url('super-admin/grade')}}"
                               title="Manage Exam Sub-Category"><span>Grade</span></a></li>
                        <li><a href="{{URL::route('online-examination.index')}}" title="Add & Manage Exams"><span>Product</span></a>
                        </li>

                        <!-- Hide this for now

                        <li><a href="{{url('super-admin/venue')}}" title="Manage Venue"><span>Venue</span></a></li>

                        <li><a href="{{url('super-admin/session')}}" title="Manage Session"><span>Session</span></a></li>

                        -->

                    </ul>
                </div>
                <!-- .sidebar-submenu -->
            </li>
         {{--   <li>
                <a href="#" title="Elements">
                    <i class="glyph-icon icon-linecons-graduation-cap"></i>
                    <span>Practice Examination</span>
                </a>

                <div class="sidebar-submenu">

                    <ul>
                        <li><a href="{{ route('practice-exam.create')}}"
                               title="Add Exam"><span>Add Exam</span></a></li>

                        <li><a href="{{ route('practice-exam.index')}}" title="Manage Exam"><span>Manage Exam</span></a>
                        </li>
                    </ul>
                </div>
                <!-- .sidebar-submenu -->
            </li>--}}

            <li class="{{ Request::is('super-admin/course*')?'active':'' }}">
                <a href="#" title="Elements">
                    <i class="glyph-icon icon-book"></i>
                    <span>Course</span>
                </a>
                <div class="sidebar-submenu">

                    <ul>
                        <li class="{{ Request::is('super-admin/course/create')?'active':'' }}"><a href="{{route('course.create')}}" title="Add Course"><span>Add Course</span></a></li>

                        <li class="{{ Request::is('super-admin/course')?'active':'' }}"><a href="{{ route('course.index')}}" title="Manage Course"><span>Manage Course</span></a></li>


                    </ul>
                </div><!-- .sidebar-submenu -->
            </li>



            <li>
                <a href="#" title="Widgets">
                    <i class="glyph-icon icon-linecons-user"></i>
                    <span>User</span>
                </a>

                <div class="sidebar-submenu">

                    <ul>
                        <li><a href="{{url('super-admin/account')}}"
                               title="Account Holders"><span>Account Holders</span></a>
                        </li>
                        <li><a href="{{ url('superadmin/candidate/manage')}}"
                               title="Manage Candidate"><span>Candidate</span></a></li>
                        <li><a href="{{ url('superadmin/marker/manage')}}" title="Manage Marker"><span>Marker</span></a>
                        </li>
                        <li><a href="{{url('superadmin/administrator/manage')}}" title="Manage Administrator"><span>Administration</span></a>
                        </li>

                    </ul>

                </div>
                <!-- .sidebar-submenu -->
            <li>
                <a href="#" title="Pages">
                    <i class="glyph-icon icon-linecons-beaker"></i>
                    <span>Support</span>
                </a>

                <div class="sidebar-submenu">

                    <ul>
                        <li><a href="{{ url('superadmin/support/viewenrollerrefund')}}"
                               title="Alternate dashboard"><span>Refunds</span></a></li>
                        <li><a href="{{ url('superadmin/support/viewenrollerextension')}}"
                               title="Alternate dashboard"><span>Extensions</span></a></li>
                        <li><a href="{{ url('superadmin/support/support')}}"
                               title="Alternate dashboard"><span>Requests</span></a></li>
                    </ul>

                </div>
                <!-- .sidebar-submenu -->
            </li>
            <li>
                <a href="#" title="Forms UI">
                    <i class="glyph-icon icon-linecons-shop"></i>
                    <span>Sales</span>
                </a>

                <div class="sidebar-submenu">

                    <ul>
                        <li><a href="#" title="Form elements"><span>Individual Exam</span></a></li>
                        <li><a href="#" title="Form validation"><span>Group Exam</span></a></li>
                        <li><a href="#" title="Collapsables"><span>Courses</span></a></li>
                        <li><a href="#" title="Collapsables"><span>Invoices</span></a></li>
                    </ul>

                </div>
                <!-- .sidebar-submenu -->
            </li>
            <li>
                <a href="#" title="Other Pages">
                    <i class="glyph-icon icon-linecons-calendar"></i>
                    <span>Report</span>
                </a>

                <div class="sidebar-submenu">
                    <ul>
                        <li><a href="{{ url('superadmin/reports/reports/manage') }}" target="_blank"
                               title="Login page 2"><span>View/Generate</span></a></li>
                    </ul>
                </div>
                <!-- .sidebar-submenu -->
            </li>
            <li class="header"><span>CMS</span></li>
            <li>
                <a href="#" title="Pages">
                    <i class="glyph-icon icon-linecons-doc"></i>
                    <span>Pages</span>
                </a>

                <div class="sidebar-submenu">

                    <ul>
                        <li><a href="{{url('super-admin/parent-page')}}"
                               title="View profile"><span>Manage Parent Pages</span></a></li>
                        <li><a href="{{url('super-admin/page/create')}}"
                               title="Alternate dashboard"><span>Add Pages</span></a></li>
                        <li><a href="{{url('super-admin/page')}}"
                               title="Alternate dashboard"><span>Manage Pages</span></a></li>

                    </ul>

                </div>
                <!-- .sidebar-submenu -->
            </li>
            <li>
                <a href="#" title="Other Pages">
                    <i class="glyph-icon icon-linecons-lightbulb"></i>
                    <span>FAQ</span>
                </a>

                <div class="sidebar-submenu">

                    <ul>
                        <li><a href="{{route('faq.create')}}" title="Login page 1"><span>Add FAQ</span></a></li>
                        <li><a href="{{route('faq.index')}}" title="Login page 2"><span>Manage FAQ</span></a>
                        </li>
                        <li><a href="{{route('faq-category.index')}}" title="Login page 2"><span>FAQ Category</span></a>
                        </li>
                    </ul>

                </div>
                <!-- .sidebar-submenu -->
            </li>
            <li>
                <a href="#" title="Other Pages">
                    <i class="glyph-icon icon-linecons-photo"></i>
                    <span>Banner</span>
                </a>

                <div class="sidebar-submenu">

                    <ul>
                        <li><a href="{{route('banner.create')}}" title="Login page 1"><span>Add Banner</span></a>
                        </li>
                        <li><a href="{{route('banner.indexde')}}"
                               title="Login page 2"><span>Manage Banner</span></a></li>
                    </ul>

                </div>
                <!-- .sidebar-submenu -->
            </li>
            <li>
                <a href="#" title="Mailbox">
                    <i class="glyph-icon icon-linecons-mail"></i>
                    <span>Email Templates</span>
                </a>

                <div class="sidebar-submenu">

                    <ul>
                        <li><a href="#" title="Compose message"><span>Manage Templates</span></a></li>
                    </ul>

                </div>
                <!-- .sidebar-submenu -->
            </li>
            <li class="header"><span>Settings</span></li>
            <li>
                <a href="#" title="Pages">
                    <i class="glyph-icon icon-linecons-params"></i>
                    <span>General</span>
                </a>

                <div class="sidebar-submenu">

                    <ul>
                        <li><a href="{{url('superadmin/settings/general')}}"
                               title="Alternate dashboard"><span>Manage</span></a></li>
                        <li><a href="{{url('superadmin/settings/social')}}" title="Alternate dashboard"><span>Social / SEO</span></a>
                        </li>
                    </ul>

                </div>
                <!-- .sidebar-submenu -->
            </li>
            <li>
                <a href="#" title="Pages">
                    <i class="glyph-icon icon-linecons-globe"></i>
                    <span>AMEB State</span>
                </a>

                <div class="sidebar-submenu">

                    <ul>
                        <li><a href="{{url('super-admin/state/create')}}"
                               title="Alternate dashboard"><span>Add</span></a></li>
                        <li><a href="{{url('super-admin/state')}}" title="Alternate dashboard"><span>Manage</span></a>
                        </li>
                    </ul>

                </div>
                <!-- .sidebar-submenu -->
            </li>
            <li>
                <a href="#" title="Pages">
                    <i class="glyph-icon icon-linecons-star"></i>
                    <span>Federal Office</span>
                </a>

                <div class="sidebar-submenu">

                    <ul>
                        <li><a href="{{url('superadmin/federal/office')}}"
                               title="Alternate dashboard"><span>Settings</span></a></li>
                    </ul>

                </div>
                <!-- .sidebar-submenu -->
            </li>
            <li>
                <a href="#" title="Other Pages">
                    <i class="glyph-icon icon-linecons-user"></i>
                    <span>Backend User</span>
                </a>

                <div class="sidebar-submenu">
                    <ul>


                    </ul>


                </div>
                <!-- .sidebar-submenu -->
            </li>
            <li>
                <a href="#" title="Pages">
                    <i class="glyph-icon icon-linecons-money"></i>
                    <span>Payments</span>
                </a>

                <div class="sidebar-submenu">

                    <ul>
                        <li><a href="{{url('superadmin/payments/manage')}}"
                               title="Alternate dashboard"><span>Manage</span></a></li>
                    </ul>

                </div>
                <!-- .sidebar-submenu -->
            </li>
        </ul>
        <!-- #sidebar-menu -->


    </div>
</div>