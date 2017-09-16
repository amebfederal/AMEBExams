@extends('superadmin.layouts.layouts')
@section('content')
<div id="page-content-wrapper">
    <div id="page-content">

        <div class="container">

            <div id="page-title">
                <h2>Social Settings</h2>
            </div>

            <div class="panel">
                <div class="panel-body">
                    <div class="example-box-wrapper">
                        <form class="form-horizontal bordered-row" action="add_product_step2.php">
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Display Social Links</label>
                                <div class="col-sm-6">
                                    <input type="radio" name="price" class="radio-inline" checked="checked"> Yes
                                    <input type="radio" name="price" class="radio-inline"> no
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Facebook</label>
                                <div class="col-sm-6">
                                    <input type="text" name="" class="form-control" value="#">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Twitter</label>
                                <div class="col-sm-6">
                                    <input type="text" name="" class="form-control" value="#">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">YouTube</label>
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