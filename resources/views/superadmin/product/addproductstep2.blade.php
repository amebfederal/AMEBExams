@extends('superadmin.layouts.layouts')
@section('content')
<div id="page-content-wrapper">
    <div id="page-content">

        <div class="container">

            <div id="page-title">
                <h2>Add Product</h2>
                <p>Choose Product Type.</p>
            </div>

            <div class="panel">
                <div class="panel-body">
                    <h3 class="title-hero">
                        Select Product Type
                    </h3>

                    <div class="example-box-wrapper">
                        <form class="form-horizontal bordered-row">
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Exam Title *</label>
                                <div class="col-sm-6">
                                    <input type="text" name="" id="" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Rising Software Key *</label>
                                <div class="col-sm-6">
                                    <input type="text" name="" id="" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Image *</label>
                                <div class="col-sm-6">
                                    <input type="file" name="" id="" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Short Description</label>
                                <div class="col-sm-6">
                                    <textarea name="" rows="3" class="form-control textarea-counter"></textarea>
                                    <div class="character-remaining clear input-description">125 characters left</div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Expiry Date *</label>
                                <div class="col-sm-6">
                                    <select class="form-control">
                                        <option>1 year from purchase date</option>
                                        <option>Seasonal Sessions</option>
                                        <option>Never Expires</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Renewal Fee*</label>
                                <div class="col-sm-6">
                                    <input type="text" name="" class="form-control" placeholder="000.00">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Category *</label>
                                <div class="col-sm-6">
                                    <select multiple="" class="multi-select" name="" style="position: absolute; left: -9999px;" id="714multiselect">
                                        <option>Online Exam Theory</option>
                                        <option>Practical Exam</option>
                                        <option>Written Exam</option>
                                        <option>Rockschool Exam</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Grade *</label>
                                <div class="col-sm-6">
                                    <select class="form-control">
                                        <option>Grade 1</option>
                                        <option>Grade 2</option>
                                        <option>Grade 3</option>
                                        <option>Grade 4</option>
                                        <option>Grade 5</option>
                                        <option>Grade 6</option>
                                        <option>Grade 7</option>
                                        <option>Grade 8</option>
                                        <option>Performance</option>
                                    </select>
                                </div>
                            </div>
                            <!-- <div class="form-group">
                                 <label class="col-sm-3 control-label">Session Type *</label>
                                 <div class="col-sm-6">
                                     <div class="bootstrap-switch bootstrap-switch-wrapper bootstrap-switch-on bootstrap-switch-medium bootstrap-switch-animate"><div class="bootstrap-switch-container"><input data-on-color="primary" name="checkbox-example-1" class="input-switch" checked="" data-size="medium" data-on-text="Fixed" data-off-text="Free" type="checkbox"></div></div>
                                 </div>
                             </div>
                             <div class="form-group">
                                 <label class="col-sm-3 control-label">Session</label>
                                 <div class="col-sm-1">
                                     <input type="text" name="" placeholder="Start on" class="form-control">
                                 </div>
                                 <div class="col-sm-1">
                                     <input type="text" name="" placeholder="Ends on" class="form-control">
                                 </div>
                                 <div class="col-sm-1">
                                     <input type="text" name="" placeholder="Time" class="form-control">
                                 </div>
                                 <div class="col-sm-3">
                                     <input type="text" name="" placeholder="Venue" class="form-control">
                                 </div>
                                 <div class="col-sm-9 pull-right text-center">Add more</div>

                             </div> -->
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Exam Duration *</label>
                                <div class="col-sm-6">
                                    <input type="text" name="" placeholder="Duration in minutes" class="form-control"> Display in Hours
                                </div>

                            </div>
                            <!-- <div class="form-group">
                                 <label class="col-sm-3 control-label">Global Pricing *</label>
                                 <div class="col-sm-6">
                                     <label class="checkbox-inline">
                                         <input id="" value="option1" type="checkbox" checked="checked">
                                         Product Price
                                     </label>
                                     <label class="checkbox-inline">
                                         <input id="" value="option2" type="checkbox" checked="checked">
                                         Renewal Fees
                                     </label>

                                 </div>
                             </div> -->
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Availability for States *</label>
                                <div class="col-sm-6">
                                    <select multiple="" class="multi-select" name="" style="position: absolute; left: -9999px;" id="714multiselect">
                                        <option>Victoria</option>
                                        <option>Queensland</option>
                                        <option>Southern Territory </option>
                                        <option>Tasmania</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Price *</label>
                                <div class="col-sm-6">
                                    <div class="row">
                                        <div class="panel-body">
                                            <div class="col-sm-12">
                                                <input type="text" name="" placeholder="Global Price" class="form-control" value="000.00"><small>Global Price *</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="panel-body">
                                            <div class="col-sm-2">
                                                <input type="text" name="" placeholder="VIC" class="form-control" value="000.00"><small>VIC Price</small>
                                            </div>
                                            <div class="col-sm-2">
                                                <input type="text" name="" placeholder="NSW/ACT" class="form-control" value="000.00"><small>NSW/ACT Price</small>
                                            </div>
                                            <div class="col-sm-2">
                                                <input type="text" name="" placeholder="TAS" class="form-control" value="000.00"><small>TAS Price</small>
                                            </div>
                                            <div class="col-sm-2">
                                                <input type="text" name="" placeholder="SA/NT" class="form-control" value="000.00"><small>SA/NT Price</small>
                                            </div>
                                            <div class="col-sm-2">
                                                <input type="text" name="" placeholder="WA" class="form-control" value="000.00"><small>WA Price</small>
                                            </div>
                                            <div class="col-sm-2">
                                                <input type="text" name="" placeholder="NZ" class="form-control" value="000.00"><small>NZ Price</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </div>

                            <div class="form-group">
                                <label class="col-sm-3 control-label">Availability</label>
                                <div class="col-sm-3">
                                    <input type="text" name="" placeholder="Start on" class="form-control"><small>Available from </small>
                                </div>
                                <div class="col-sm-3">
                                    <input type="text" name="" placeholder="Ends on" class="form-control"><small>Available till </small>
                                </div>

                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Status</label>
                                <div class="col-sm-6">
                                    <div class="bootstrap-switch bootstrap-switch-wrapper bootstrap-switch-on bootstrap-switch-medium bootstrap-switch-animate"><div class="bootstrap-switch-container"><input data-on-color="primary" name="checkbox-example-1" class="input-switch" checked="" data-size="medium" data-on-text="Enabled" data-off-text="Disabled" type="checkbox"></div></div>
                                </div>
                            </div>
                            <div class="form-group">

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
                            <div class="form-group">
                                <label class="col-sm-3 control-label"></label>
                                <div class="col-sm-6">
                                    <input type="submit" class="btn btn-success" value="Add Product">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
@endsection

