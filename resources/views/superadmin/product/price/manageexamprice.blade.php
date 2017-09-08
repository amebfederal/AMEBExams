@extends('superadmin.layouts.layouts')
@section('content')
<div id="page-content-wrapper">
    <div id="page-content">

        <div class="container">

            <div id="page-title">
                <h2>Manage State Price</h2>
                <p></p>
            </div>

            <div class="panel">
                <div class="panel-body">
                    <h3 class="title-hero">
                        Set exam price for States
                    </h3>

                    <div class="example-box-wrapper">
                        <form class="form-horizontal bordered-row">
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Exam Title *</label>
                                <div class="col-sm-6">
                                    <input type="text" name="" id="" class="form-control" disabled="disabled" placeholder="Exam name here">
                                </div>
                            </div>
                            <div class="form-group">
                            
                                <label class="col-sm-3 control-label">Default Price</label>
                                <div class="col-sm-6">
                                    <input type="text" name="" class="form-control" placeholder="">
                                </div>
                            </div>
                                                        <div class="form-group">
                            
                                <label class="col-sm-3 control-label">Queensland</label>
                                <div class="col-sm-6">
                                    <input type="text" name="" class="form-control" placeholder="">
                                </div>
                            </div>
                                                        <div class="form-group">
                            
                                <label class="col-sm-3 control-label">Tasmania</label>
                                <div class="col-sm-6">
                                    <input type="text" name="" class="form-control" placeholder="">
                                </div>
                            </div>
                                                        <div class="form-group">
                            
                                <label class="col-sm-3 control-label">Victoria</label>
                                <div class="col-sm-6">
                                    <input type="text" name="" class="form-control" placeholder="">
                                </div>
                            </div>
                                                        <div class="form-group">
                            
                                <label class="col-sm-3 control-label">New South Wales</label>
                                <div class="col-sm-6">
                                    <input type="text" name="" class="form-control" placeholder="">
                                </div>
                            </div>
                                                        <div class="form-group">
                            
                                <label class="col-sm-3 control-label">Northern Australia</label>
                                <div class="col-sm-6">
                                    <input type="text" name="" class="form-control" placeholder="">
                                </div>
                            </div>
                                                        <div class="form-group">
                            
                                <label class="col-sm-3 control-label">New Zealand</label>
                                <div class="col-sm-6">
                                    <input type="text" name="" class="form-control" placeholder="">
                                </div>
                            </div>

                            Display all states from database and ask price for each state.
                           

                            <!-- <div class="form-group">

                                <div class="col-md-12">Visible only if bundled option is selected</div>
                                <label class="col-sm-3 control-label">Bundled Products</label>
                                <div class="col-sm-6">
                                    <small>Product 1 - $50.00   <a href="#">Remove</a>
                                        <div class="divider"></div>
                                        Product 2 - $60.00  <a href="#">Remove</a>
                                        <div class="divider"></div>
                                    </small>
                                    <a href="#">+ Add Product</a>
                                </div>
                            </div> 
                            -->
                            <div class="form-group">
                                <label class="col-sm-3 control-label"></label>
                                <div class="col-sm-6">
                                    <input type="submit" class="btn btn-success" value="Update Price">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
@endsection

