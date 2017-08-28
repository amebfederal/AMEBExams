@include('layouts.super-admin.head')
@include('layouts.super-admin.header')

<div id="page-wrapper">
    @include('layouts.super-admin.sidebar')
    <div id="page-content-wrapper">
        <div id="page-content">

            <div class="container">
                @yield('content')
                @yield('page-specific-scripts')
            </div>
        </div>
    </div>
</div>
@include('layouts.super-admin.footer')