<div id="accordion" class="panel-group">
    <div class="panel">
        <div class="list-group">
            <a href="{{ url('accountholders/dashboard')}}" class="list-group-item {{ request()->is('accountholders/dashboard') ? 'active' : '' }}">
                <i class="glyph-icon icon-dashboard"></i>
                Dashboard
                <i class="glyph-icon"></i>
            </a>
            <a href="{{ url('accountholders/notifications')}}" class="list-group-item {{ request()->is('accountholders/notifications') ? 'active' : '' }}">
                <i class="glyph-icon icon-bell"></i>
                Notification
                <i class="glyph-icon"></i>
            </a>
            <a href="{{ url('accountholders/exams/category')}}" class="list-group-item {{ request()->is('accountholders/exams/*') ? 'active' : '' }}">
                <i class="glyph-icon font-blue icon-graduation-cap"></i>
                Buy Exam
                <i class="glyph-icon"></i>
            </a>
            <a href="{{ url('accountholders/payment/cart')}}" class="list-group-item {{ request()->is('accountholders/payment/cart') ? 'active' : '' }}">
                <i class="glyph-icon font-red icon-shopping-cart"></i>
                Cart
                <i class="glyph-icon"></i>
            </a>
            <a href="{{ url('accountholders/profile/manageexams')}}" class="list-group-item {{ request()->is('accountholders/profile/manageexams') ? 'active' : '' }}">
                <i class="glyph-icon font-green icon-file"></i>
                Manage Exam
                <i class="glyph-icon"></i>
            </a>
            <a href="{{ url('accountholders/support/manage')}}" class="list-group-item {{ request()->is('accountholders/support/manage') ? 'active' : '' }}">
                <i class="glyph-icon font-blue-alt icon-info"></i>
                FAQ & Support
                <i class="glyph-icon"></i>
            </a>
        </div>
    </div>
</div>