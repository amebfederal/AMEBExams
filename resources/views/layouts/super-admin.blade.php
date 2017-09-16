@include('layouts.super-admin.head')
@include('layouts.super-admin.header')

<div id="page-wrapper">
    @include('layouts.super-admin.sidebar')
    <div id="page-content-wrapper">
        <div id="page-content">

            <div class="container">
                @include('layouts.super-admin.flash-message')
                @yield('content')
            </div>
        </div>
    </div>
</div>
@yield('page-specific-scripts')
@include('layouts.super-admin.footer')