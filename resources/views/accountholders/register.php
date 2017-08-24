<?php
include 'head.php';
?>

    <div class="row">
        <div class="col-md-12">
        

<div id="page-title">
</div>

<div class="panel">
    <div class="panel-body">
        <h3 class="title-hero">
            Fields with (*) are Mandatory
        </h3>
       
        <div class="example-box-wrapper">
            <form class="form-horizontal bordered-row">
            <div class="col-md-6">
             <div class="form-group">
                    <label class="col-sm-3 control-label">Title</label>
                    <div class="col-sm-9">
                        <select class="form-control">
                            <option>Mr</option>
                            <option>Ms.</option>
                            <option>Mrs.</option>
                            <option>Dr.</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">First Name</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="" placeholder="Your first name...">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Last Name</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id=""  placeholder="Your last name ...">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Email Address</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id=""  placeholder="Your email address ...">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Confirm Email</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id=""  placeholder="Re-Confirm Email address...">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Password</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id=""  placeholder="Your password ...">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Confirm Password</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id=""  placeholder="Re-confirm password ...">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Role</label>
                    <div class="col-sm-9">
                        <label class="radio-inline">
                            <input type="radio" id="" name="role" value="option1" checked="checked">
                           Teacher
                        </label>
                        <label class="radio-inline">
                            <input type="radio" id="" name="role" value="option2">
                            Parent
                        </label>
                    </div>
                </div>
                </div>
                <div class="col-md-6">
                <div class="form-group">
                    <label class="col-sm-3 control-label">Address Line 1</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control popover-button-default" placeholder="Your House / Street / Appartment name and number" >
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Suburb</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control popover-button-default" placeholder="Your Suburb Name" >
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">City</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control popover-button-default" placeholder="Your City name" >
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label">State</label>
                    <div class="col-sm-9">
                        <select class="form-control">
                            <option>New South Wales</option>
                            <option>Victoria</option>
                            <option>Queensland</option>
                            <option>Western Australia</option>
                            <option>Tasmania</option>
                            <option>South Australia & Northern Territory</option>
                        </select>
                    </div>
                </div>
                                <div class="form-group">
                    <label class="col-sm-3 control-label">Postcode</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control popover-button-default" placeholder="Your Full Address" >
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label"></label>
                    <div class="col-sm-9">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" value="">
                                I have read and agree to terms and conditions.
                            </label>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    
                    <div class="col-sm-9 pull-right">
                        <input type="submit" id="" name="btn" value="Register" class="btn border-default btn-success btn-block">
                    </div>
                </div>
                                </div>
            </form>
        </div>
    </div>
</div>
</div>

        </div>

    </div>
<?php
include 'footer.php';
?>

