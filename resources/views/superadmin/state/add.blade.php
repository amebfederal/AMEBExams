@extends('superadmin.layouts.layouts')
@section('content')
<div id="page-content-wrapper">
    <div id="page-content">

        <div class="container">

            <div id="page-title">
                <h2>Add State</h2>
            </div>

            <div class="panel">
                <div class="panel-body">
                    <div class="example-box-wrapper">
                        <form class="form-horizontal bordered-row" action="add_product_step2.php">
                            <div class="form-group">
                                <label class="col-sm-3 control-label">State Name</label>
                                <div class="col-sm-6">
                                    <input type="text" name="" class="form-control" value="#">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">State Prefix</label>
                                <div class="col-sm-6">
                                    <input type="text" name="" class="form-control" value="#">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Notification Email Address</label>
                                <div class="col-sm-6">
                                    <input type="text" name="" class="form-control" value="#">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Contact Email Address</label>
                                <div class="col-sm-6">
                                    <input type="text" name="" class="form-control" value="#">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Phone</label>
                                <div class="col-sm-6">
                                    <input type="text" name="" class="form-control" value="#">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Address</label>
                                <div class="col-sm-6">
                                    <input type="text" name="" class="form-control" value="#">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Contact Person</label>
                                <div class="col-sm-6">
                                    <input type="text" name="" class="form-control" value="#">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Contact Person Phone</label>
                                <div class="col-sm-6">
                                    <input type="text" name="" class="form-control" value="#">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Contact Person Email</label>
                                <div class="col-sm-6">
                                    <input type="text" name="" class="form-control" value="#">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Email Notification</label>
                                <div class="col-sm-6">
                                    <input type="radio" name="pri2ce" class="radio-inline" checked="checked"> Enabled
                                    <input type="radio" name="pri2ce" class="radio-inline"> Disabled
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">API Authority</label>
                                <div class="col-sm-6">
                                    <input type="radio" name="pr12ice" class="radio-inline" checked="checked"> Enabled
                                    <input type="radio" name="pri21ce" class="radio-inline"> Disabled
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">API ID</label>
                                <div class="col-sm-6">
                                    <input type="text" name="" class="form-control" value="#">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">API Secret Key</label>
                                <div class="col-sm-6">
                                    <input type="text" name="" class="form-control" value="#">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label"></label>
                                <div class="col-sm-6">
                                    <input type="submit" name="" value="Continue" class="btn btn-success">
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