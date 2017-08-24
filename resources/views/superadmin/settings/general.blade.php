@extends('superadmin.layouts.layouts')
@section('content')
<div id="page-content-wrapper">
    <div id="page-content">

        <div class="container">

            <div id="page-title">
                <h2>General Settings</h2>
            </div>

            <div class="panel">
                <div class="panel-body">
                    <div class="example-box-wrapper">
                        <form class="form-horizontal bordered-row" action="add_product_step2.php">
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Pricing Policy</label>
                                <div class="col-sm-6">
                                    <input type="radio" name="price" class="radio-inline" checked="checked"> Global Price
                                    <input type="radio" name="price" class="radio-inline"> State Price
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Email Notifier Address</label>
                                <div class="col-sm-6">
                                    <input type="text" name="" class="form-control" value="online@ameb.edu.au">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Display Site Notice</label>
                                <div class="col-sm-6">
                                    <input type="radio" name="123" class="radio-inline" > Yes
                                    <input type="radio" name="123" class="radio-inline" checked="checked"> No
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Message for Site wise Notice</label>
                                <div class="col-sm-6">
                                    <input type="text" name="" class="form-control" value="online@ameb.edu.au">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Make Site Unavailable</label>
                                <div class="col-sm-6">
                                    <input type="radio" name="234" class="radio-inline" > Yes
                                    <input type="radio" name="234" class="radio-inline" checked="checked"> No
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Make Exam Unavailable</label>
                                <div class="col-sm-6">
                                    <input type="radio" name="456" class="radio-inline" > Yes
                                    <input type="radio" name="456" class="radio-inline" checked="checked"> No
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Price for Extension</label>
                                <div class="col-sm-6">
                                    <input type="text" name="" class="form-control" value="0.00">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-3 control-label">Scripts in Head</label>
                                <div class="col-sm-6">
                                    <textarea class="form-control" ></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Scripts in Footer</label>
                                <div class="col-sm-6">
                                    <textarea class="form-control" ></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label"></label>
                                <div class="col-sm-6">
                                    <input type="submit" name="" value="Continue" class="btn btn-success">
                                </div>
                            </div>
                    </div>
                    </form>
                </div>
                @endsection
                @section('page-specific-scripts')
                <script type="text/javascript" src="{{asset('resources/assets/widgets/summernote-wysiwyg/summernote-wysiwyg.js')}}"></script>
                <script type="text/javascript">
                    $(function() { "use strict";
                        $('.wysiwyg-editor').summernote({
                            height: 350
                        });
                    });
                </script>
                @endsection
