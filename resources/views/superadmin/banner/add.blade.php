@extends('superadmin.layouts.layouts')
@section('content')
<div id="page-content-wrapper">
    <div id="page-content">

        <div class="container">

            <div id="page-title">
                <h2>Add Banner</h2>
            </div>

            <div class="panel">
                <div class="panel-body">
                    <div class="example-box-wrapper">
                        <form class="form-horizontal bordered-row" action="add_product_step2.php">
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Title</label>
                                <div class="col-sm-6">
                                    <input type="text" name="" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Banner Image</label>
                                <div class="col-sm-6">
                                    <input type="file" name="" value="Continue" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Link</label>
                                <div class="col-sm-6">
                                    <input type="text" name="" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Open Link in</label>
                                <div class="col-sm-6">
                                    <select name="" class="form-control">
                                        <option>New Window</option>
                                        <option>Self</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Order</label>
                                <div class="col-sm-6">
                                    <input type="text" name="" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Status</label>
                                <div class="col-sm-6">
                                    <select name="" class="form-control">
                                        <option>Enabled</option>
                                        <option>Disabled</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Expires</label>
                                <div class="col-sm-6">
                                    <input type="date" name="" class="form-control">
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
                    <script type="text/javascript" src="{{ asset('admintemplate/assets/widgets/summernote-wysiwyg/summernote-wysiwyg.js') }}"></script>
                    <script type="text/javascript">
                        $(function() { "use strict";
                            $('.wysiwyg-editor').summernote({
                                height: 350
                            });
                        });
                    </script>
                     @endsection
