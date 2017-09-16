@extends('accountholders.layouts.layouts')

@section('title', 'User Dashboard')

@section('content')
    <div id="page-content" class="col-md-12 center-margin frontend-components mrg25T">
        <div class="row">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <!--Teacher/Parent/Adult Learner Menu -->
                       @include('accountholders.layouts.sidebar')
                        <!--Teacher/Parent/Adult Learner Menu -->
                    </div>
                    <div class="col-md-9">


                        <div class="row">

                            <div class="col-md-12">
                                <div class="row">
                                    <div class="panel">
                                        <div class="panel-body">

                                            <div class="example-box-wrapper">
                                                <h4> Welcome, First Name Last Name</h4>

                                                Please make sure all your information are up to date.
                                                <div class="clearfix"></div>

                                                <div class="col-md-6">
                                                    <div class="panel-layout">
                                                        <div class="panel-box">

                                                            <div class="panel-content image-box">

                                                                <div class="bg-primary">General</div>
                                                                <div class="image-content font-white">

                                                                    <div class="meta-box ">

                                                                        <h3 class="meta-heading">Mohammad Sarfaraz</h3>
                                                                        <h4 class="meta-subheading">Teacher</h4>
                                                                        <h4 class="meta-subheading">
                                                                            smohammad@ameb.edu.au</h4>
                                                                        <h4 class="meta-subheading">0406551602</h4>
                                                                        <h4 class="meta-subheading">1300 728 800</h4>

                                                                    </div>

                                                                </div>
                                                                <img src="{{ asset('resources/assets/image-resources/blurred-bg/blurred-bg-13.jpg')}}"
                                                                     alt="">

                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="panel-layout">
                                                        <div class="panel-box">

                                                            <div class="panel-content image-box">

                                                                <div class="bg-primary">Address</div>
                                                                <div class="image-content font-white">

                                                                    <div class="meta-box ">

                                                                        <h3 class="meta-heading">School Name</h3>
                                                                        <h4 class="meta-subheading">Address Line 1</h4>
                                                                        <h4 class="meta-subheading">Address Line 2</h4>
                                                                        <h4 class="meta-subheading">City</h4>
                                                                        <h4 class="meta-subheading">Suburb</h4>
                                                                        <h4 class="meta-subheading">State(Country)</h4>
                                                                        <h4 class="meta-subheading">Postcode</h4>
                                                                    </div>

                                                                </div>
                                                                <img src="{{ asset('resources/assets/image-resources/blurred-bg/blurred-bg-12.jpg')}}"
                                                                     alt="">


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
        </div>


    </div>
@endsection

    <!-- Calendar -->
@section('page-specific-scripts')
    <link rel="stylesheet" type="text/css" href="{{ asset('resources/assets/widgets/tabs-ui/tabs.css')}}">
    <script type="text/javascript" src="{{ asset('resources/assets/widgets/tabs-ui/tabs.js') }}"></script>
    <script type="text/javascript">
        /* jQuery UI Tabs */

        $(function () {
            "use strict";
            $(".tabs").tabs();
        });

        $(function () {
            "use strict";
            $(".tabs-hover").tabs({
                event: "mouseover"
            });
        });
    </script>
@endsection
