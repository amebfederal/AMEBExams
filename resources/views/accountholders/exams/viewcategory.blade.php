@extends('accountholders.layouts.layouts')

@section('title', 'User Dashboard')

@section('content')

        <div class="col-md-9">

<div class="row">
<div class="col-md-12">
      
    <div class="panel">
        <div class="panel-title">
        </div>
        <div class="panel-body">
        <h3 class="title-hero">
            Which exam do you want to purchase ?
        </h3>
        <div class="example-box-wrapper">
            <div class="row">
                <div class="col-md-3">

                    <div class="panel-layout">
                        <div class="panel-box">

                            <div class="panel-content image-box">

                                <div class="image-content font-white">

                                    <div class="center-vertical">
                                        <div class="meta-box center-content">
                                            <h3 class="meta-heading">Online Exam Theory</h3>
                                            <p class="meta-desc">Lorem ipsum dolor sic amet dixit tu dolor sic amet dixit tu</p>
                                        </div>
                                    </div>

                                </div>
                                <img src="{{asset('resources/assets/image-resources/blurred-bg/blurred-bg-4.jpg')}}" alt="">

                            </div>
                            <div class="panel-content bg-white">
                                <ul class="list-group list-group-separator mrg0A row list-group-icons">

                                    <li class="col-md-12">
                                        <a class="list-group-item" href="{{ url('accountholders/exams/products') }}" class="list-group-item">
                                            <i class="glyph-icon font-grey icon-shopping-cart"></i>
                                            Buy Exam
                                        </a>
                                    </li>
                                </ul>
                               
                            </div>

                        </div>
                    </div>

                </div>
                <div class="col-md-3">

                    <div class="panel-layout">
                        <div class="panel-box">

                            <div class="panel-content image-box">

                                <div class="image-content font-white">

                                    <div class="center-vertical">
                                        <div class="meta-box center-content">
                                            <h3 class="meta-heading">Practical Exam</h3>
                                            <p class="meta-desc">Lorem ipsum dolor sic amet dixit tu dolor sic amet dixit tu</p>
                                        </div>
                                    </div>

                                </div>
                                <img src="{{asset('resources/assets/image-resources/blurred-bg/blurred-bg-1.jpg')}}" alt="">

                            </div>
                            <div class="panel-content bg-white">
                                <ul class="list-group list-group-separator mrg0A row list-group-icons">

                                    <li class="col-md-12">
                                        <a href="{{ url('accountholders/exams/products') }}" class="list-group-item">
                                            <i class="glyph-icon font-green icon-shopping-cart"></i>
                                            Buy Exam
                                        </a>
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>

                </div>
                <div class="col-md-3">

                    <div class="panel-layout">
                        <div class="panel-box">

                            <div class="panel-content image-box">

                                <div class="image-content font-white">

                                    <div class="center-vertical">
                                        <div class="meta-box center-content">
                                            <h3 class="meta-heading">Written Exam</h3>
                                            <p class="meta-desc">Lorem ipsum dolor sic amet dixit tu dolor sic amet dixit tu</p>
                                        </div>
                                    </div>

                                </div>
                                <img src="{{asset('resources/assets/image-resources/blurred-bg/blurred-bg-2.jpg')}}" alt="">

                            </div>
                            <div class="panel-content bg-white">
                                <ul class="list-group list-group-separator mrg0A row list-group-icons">

                                    <li class="col-md-12">
                                        <a href="{{ url('accountholders/exams/products') }}" class="list-group-item">
                                            <i class="glyph-icon font-orange icon-shopping-cart"></i>
                                            Buy Exam
                                        </a>
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>

                </div>
                <div class="col-md-3">

                    <div class="panel-layout">
                        <div class="panel-box">

                            <div class="panel-content image-box">

                                <div class="image-content font-white">

                                    <div class="center-vertical">
                                        <div class="meta-box center-content">
                                            <h3 class="meta-heading">Rockschool Exam</h3>
                                            <p class="meta-desc">Lorem ipsum dolor sic amet dixit tu dolor sic amet dixit tu</p>
                                        </div>
                                    </div>

                                </div>
                                <img src="{{asset('resources/assets/image-resources/blurred-bg/blurred-bg-8.jpg')}}" alt="">

                            </div>
                            <div class="panel-content bg-white">
                                <ul class="list-group list-group-separator mrg0A row list-group-icons">

                                    <li class="col-md-12">
                                        <a href="{{ url('accountholders/exams/products') }}" class="list-group-item">
                                            <i class="glyph-icon font-blue icon-shopping-cart"></i>
                                            Buy Exam
                                        </a>
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>

                </div>

                </div>
            </div>
        </div>
    </div>
    </div>
</div>





    </div>
</div>

        </div>

<!-- WIDGETS -->
@endsection
@section('page-specific-scripts')
<!-- Calendar -->
@section('page-specific-scripts')
    <!--<link rel="stylesheet" type="text/css" href="../../assets/widgets/tabs-ui/tabs.css">-->
<!-- Bootstrap Dropdown -->
<script type="text/javascript" src="../../assets/bootstrap/js/bootstrap.min.js"></script>
@endsection

