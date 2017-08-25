@extends('superadmin.layouts.layouts')
@section('content')
<div id="page-content-wrapper">
    <div id="page-content">

        <div class="container">




            <div id="page-title">
                <h2>Reports</h2>
                <p>Summary on what's going on</p>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4">
                <div class="dashboard-box dashboard-box-chart bg-white content-box">
                    <div class="content-wrapper">
                        <div class="header">
                            $34,657
                            <span>Total Earnings<b> this year</b> </span>
                        </div>
                        <div class="bs-label bg-green">+18</div>
                        <div class="center-div sparkline-big-alt">1245,1450,1312,1121,986,1489</div>
                        <div class="row list-grade">
                            <div class="col-md-2">January</div>
                            <div class="col-md-2">February</div>
                            <div class="col-md-2">March</div>
                            <div class="col-md-2">April</div>
                            <div class="col-md-2">May</div>
                            <div class="col-md-2">June</div>
                        </div>
                    </div>
                    <div class="button-pane">
                        <div class="size-md float-left">
                            <a href="#" title="">
                                Complete Report
                            </a>
                        </div>
                        <a href="#" class="btn btn-info float-right tooltip-button" data-placement="top" title="View details">
                            <i class="glyph-icon icon-plus"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="dashboard-box dashboard-box-chart bg-white content-box">
                    <div class="content-wrapper">
                        <div class="header">
                            169
                            <span>Exam Purchased<b> in last</b> 7 days</span>
                        </div>
                        <div class="bs-label bg-red">-14</div>
                        <div class="center-div sparkline-big-alt">21,41,31,50,18,41</div>
                        <div class="row list-grade">
                            <div class="col-md-2">M</div>
                            <div class="col-md-2">T</div>
                            <div class="col-md-2">W</div>
                            <div class="col-md-2">T</div>
                            <div class="col-md-2">F</div>
                            <div class="col-md-2">S</div>
                        </div>
                    </div>
                    <div class="button-pane">
                        <div class="size-md float-left">
                            <a href="#" title="">
                                Sales Report
                            </a>
                        </div>
                        <a href="#" class="btn btn-default float-right tooltip-button" data-placement="top" title="View details">
                            <i class="glyph-icon icon-angle-right"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="dashboard-box dashboard-box-chart bg-white content-box">
                    <div class="content-wrapper">
                        <div class="header">
                            8960
                            <span>Total Candidate Sit for Exam</span>
                        </div>
                        <div class="bs-label bg-orange">~51</div>
                        <div class="center-div sparkline-big-alt">2210,2310,2010,2310,2123,2350</div>
                        <div class="row list-grade">
                            <div class="col-md-2">Week 1</div>
                            <div class="col-md-2">Week 2</div>
                            <div class="col-md-2">Week 3</div>
                            <div class="col-md-2">Week 4</div>
                        </div>
                    </div>
                    <div class="button-pane">
                        <div class="size-md float-left">
                            <a href="#" title="">
                                View Trend
                            </a>
                        </div>
                        <a href="#" class="btn btn-primary float-right tooltip-button" data-placement="top" title="View details">
                            <i class="glyph-icon icon-caret-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <h3>Sales Report</h3>
                <div class="bg-white content-box">
                    <br/>
                    <form class="form-horizontal">
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Start Date</label>
                            <div class="col-sm-6">
                                <input type="date" name="" class="form-control" value="#">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">End Date</label>
                            <div class="col-sm-6">
                                <input type="date" name="" class="form-control" value="#">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Report Type</label>
                            <div class="col-sm-6">
                                <select class="form-control" name="">
                                    <option>Option 1</option>
                                    <option>Option 2</option>
                                    <option>MYOB</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label"></label>
                            <div class="col-sm-6">
                                <input type="button" name="" class="form-control" value="Generate">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-6">
                <h3>Individual Report</h3>
                <div class="bg-white content-box">
                    <br/>
                    <form class="form-horizontal">
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Invoice Id / Candidate Id</label>
                            <div class="col-sm-6">
                                <input type="text" name="" class="form-control" value="#">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label"></label>
                            <div class="col-sm-6">
                                <input type="button" name="" class="form-control" value="View">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
@endsection
@section('page-specific-scripts')
    <!-- Sparklines charts -->

        <script type="text/javascript" src="{{asset('resources/assets/widgets/charts/sparklines/sparklines.js')}}"></script>
        <script type="text/javascript" src="{{asset('resources/assets/widgets/charts/sparklines/sparklines-demo.js')}}"></script>

        <!-- Flot charts -->

        <!-- PieGage charts -->

        <script type="text/javascript" src="{{asset('resources/assets/widgets/charts/piegage/piegage.js')}}"></script>
        <script type="text/javascript" src="{{asset('resources/assets/widgets/charts/piegage/piegage-demo.js')}}"></script>
@endsection