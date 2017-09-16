@include('accountholders.layouts.head')

<div id="page-wrapper">
    @include('accountholders.layouts.header')
    @yield('content')
</div>

@yield('page-specific-scripts')
@include('accountholders.layouts.footer')