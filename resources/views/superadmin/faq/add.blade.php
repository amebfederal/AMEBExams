@extends('superadmin.layouts.layouts')
@section('content')
<div id="page-content-wrapper">
    <div id="page-content">

        <div class="container">

            <div id="page-title">
                <h2>Add FAQ</h2>
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
                                <label class="col-sm-3 control-label">Description</label>
                                <div class="col-sm-6">
                                    <div class="wysiwyg-editor"></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Featured Image</label>
                                <div class="col-sm-6">
                                    <input type="file" name="" value="Continue" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Category</label>
                                <div class="col-sm-6">
                                    <select name="" class="form-control">
                                        <option>Category 1</option>
                                        <option>Category 2</option>
                                    </select>
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
                    <?php include 'footer.php'; ?>
                    <script type="text/javascript">
                        $(function() { "use strict";
                            $('.wysiwyg-editor').summernote({
                                height: 350
                            });
                        });
                    </script>
@endsection