@extends('superadmin.layouts.layouts')
@section('content')
<div id="page-content-wrapper">
    <div id="page-content">

        <div class="container">

            <div id="page-title">
                <h2>Add Product</h2>
                <p>Online Music Theory</p>
            </div>

            <div class="panel">
                <div class="panel-body">
                    <h3 class="title-hero">
                        Add Online Music Theory Exam
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
                            This is unique for this Online Music Theory Category (Repeats on Online Theory Exam Category)
                                <label class="col-sm-3 control-label">Subject Code*</label>
                                <div class="col-sm-6">
                                    <input type="text" name="" class="form-control" placeholder="">
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
                                <label class="col-sm-3 control-label">Expiry Date (in month) *</label>
                                <div class="col-sm-6">
                                    <select class="form-control">
                                        <option>1 </option>
                                        <option>2 </option>
                                        <option>3 </option>
                                        <option>4 </option>
                                        <option>5 </option>
                                        <option>6 </option>
                                        <option>7 </option>
                                        <option>8 </option>
                                        <option>9 </option>
                                        <option>10 </option>
                                        <option>11 </option>
                                        <option selected="selected">12 </option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Renewal Fee Type</label>
                                <div class="col-sm-6">
                                    <select class="form-control">
                                        <option>Default </option>
                                        <option>Custom</option>
                                        <option>Non-renewable</option>
                                    
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                            This should appear only if custom is selected on renewal type
                                <label class="col-sm-3 control-label">Renewal Fee*</label>
                                <div class="col-sm-6">
                                    <input type="text" name="" class="form-control" placeholder="00.00">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Category *</label>
                                <div class="col-sm-6">
                                    <select multiple="" class="multi-select" name="" style="position: absolute; left: -9999px;" id="714multiselect">
                                        <option>Pull from Sub-category</option>
                                        <option>Theory of Music</option>
                                        <option>Music Craft</option>
                                        <option>Musicianship</option>

                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Grade *</label>
                                <div class="col-sm-6">
                                    <select class="form-control">
                                    <option>Pull from Grade</option>
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
                                    <input type="text" name="" placeholder="Duration in minutes" class="form-control">
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
                                        <option>Pull this from States</option>
                                        <option>Victoria</option>
                                        <option>New South Wales</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Default Price *</label>
                                <div class="col-sm-6">
                                   
                                        
                                           
                                                <input type="text" name="" placeholder="Global Price" class="form-control" value="000.00">
                                            
                                        
                                    
<!--                                    <div class="row">
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
                                    </div> -->
                                </div>


                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Rising Software Key *</label>
                                <div class="col-sm-6">
                                    <input type="text" name="" id="" class="form-control">
                                </div>
                            </div>
                             <div class="form-group">
                                <label class="col-sm-3 control-label">State Price</label>
                                <div class="col-sm-6">
                                    <div class="bootstrap-switch bootstrap-switch-wrapper bootstrap-switch-on bootstrap-switch-medium bootstrap-switch-animate"><div class="bootstrap-switch-container"><input data-on-color="primary" name="checkbox-example-1" class="input-switch" checked="" data-size="medium" data-on-text="Enabled" data-off-text="Disabled" type="checkbox"></div></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Status</label>
                                <div class="col-sm-6">
                                    <div class="bootstrap-switch bootstrap-switch-wrapper bootstrap-switch-on bootstrap-switch-medium bootstrap-switch-animate"><div class="bootstrap-switch-container"><input data-on-color="primary" name="checkbox-example-1" class="input-switch" checked="" data-size="medium" data-on-text="Enabled" data-off-text="Disabled" type="checkbox"></div></div>
                                </div>
                            </div>
                             <div class="form-group">
                                <label class="col-sm-3 control-label">Visibility</label>
                                <div class="col-sm-6">
                                    <div class="bootstrap-switch bootstrap-switch-wrapper bootstrap-switch-on bootstrap-switch-medium bootstrap-switch-animate"><div class="bootstrap-switch-container"><input data-on-color="primary" name="checkbox-example-1" class="input-switch" checked="" data-size="medium" data-on-text="Show" data-off-text="Hide" type="checkbox"></div></div>
                                </div>
                            </div>

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
                                    <input type="submit" class="btn btn-success" value="Add Product">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
@endsection

