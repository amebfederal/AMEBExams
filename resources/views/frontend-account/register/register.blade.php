@extends('layouts.frontend-account')
@section('content')
    <div id="page-content" class="col-md-12 center-margin frontend-components mrg25T">
        <div class="row">
            <div class="container">
<div class="row">
    <div class="col-md-12">


        <div id="page-title">
        </div>

        <div class="panel">
            <div class="panel-body">
                <h3 class="title-hero">
                    Fields with (*) are Mandatory
                </h3>
                <ul>
                    <li><p>You will need to register on this site before you can purchase an exam.</p></li>
                    <li><p> If you have already registered please login using the links at the top of this page.</p></li>
                    <li><p>Registration is free and you will receive full details of available examinations and costs when you have registered.</p></li>
                    <li><p> To purchase an online exam you must be 18 years of age or older.</p></li>
                </ul>
                <div class="example-box-wrapper">
                    <form class="form-horizontal bordered-row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Title</label>
                                <div class="col-sm-9">
                                    <select class="form-control">
                                        <option selected="selected">Select Title</option>
                                        <option>None</option>
                                        <option>Mr</option>
                                        <option>Ms</option>
                                        <option>Mrs</option>
                                        <option>Dr</option>
                                        <option>Prof</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Role*</label>
                                <div class="col-sm-9">
                                    <label class="radio-inline">
                                        <input type="radio" id="" name="role" value="option1" checked="checked">
                                        Teacher
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" id="" name="role" value="option2">
                                        Parent
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" id="" name="role" value="option2">
                                        Adult Learner
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">First Name *</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control errorbox" id="" placeholder="Your first name" >
                                    <i class="errormsg">First Name can not be left blank</i>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Last Name *</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id=""  placeholder="Your last name">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Email Address*</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id=""  placeholder="Your email address">
                                    <small><p><i style="color: #999999;">Your email address will be your Account Holder username.</i></p></small>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Confirm Email*</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id=""  placeholder="Re-confirm email address">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-3 control-label">Password*</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id=""  placeholder="Your password">
                                    <small><i style="color: #999999;">Password must be at least 8 characters long,
                                            must contain at least one capital letter, one symbol and one number.</i></small>
                                </div>

                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Confirm Password*</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id=""  placeholder="Re-confirm password">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Preferred Phone*</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control popover-button-default" placeholder="Your phone or mobile number" >
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Other Phone</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control popover-button-default" placeholder="Your phone or mobile number" >

                                </div>
                            </div>



                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-sm-3 control-label">School Name</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control popover-button-default" placeholder="Your School name (only if account is for a school)" >
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Address Line 1*</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control popover-button-default" placeholder="Your unit number / street number and name" >
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Address Line 2</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control popover-button-default" placeholder="Your unit number / street number and name" >
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">City*</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control popover-button-default" placeholder="Your city name" >
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Suburb*</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control popover-button-default" placeholder="Your suburb name" >
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">State*</label>
                                <div class="col-sm-9">
                                    <select class="form-control">
                                        <option>Select State (Country)</option>
                                        <option>New South Wales</option>
                                        <option>Australian Capital Territory</option>
                                        <option>Victoria</option>
                                        <option>Queensland</option>
                                        <option>Western Australia</option>
                                        <option>Tasmania</option>
                                        <option>South Australia</option>
                                        <option>Northern Territory</option>
                                    </select>
                                    If Other is selected display country list here.
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Postcode*</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control popover-button-default" placeholder="Your postcode" >
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label"></label>
                                <div class="col-sm-9">
                                    <div class="checkbox">
                                        <label>
                                            Google Captcha Here
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label"></label>
                                <div class="col-sm-9">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" value="">
                                            Please tick this box to confirm that you are 18 years of age or older.

                                        </label>
                                    </div>
                                    <br/>
                                    <p><b>Please note:</b> Your IP address will be recorded as a requirement of our security policy if you continue past this point.</p>
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
        </div>
    </div>
</div>
@endsection

