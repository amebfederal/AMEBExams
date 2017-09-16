<?php
include 'head.php';
?>
    <div class="row">
        <div class="col-md-3">
        <?php include 'sidebar.php'; ?>
        </div>
        <div class="col-md-9">

<div class="row">
    <div class="col-md-12">
        <div class="panel">
    <div class="panel-body">
        <h3 class="title-hero">
            Add New Candidate
        </h3>
        <div class="row">
            <div class="container">
                <div class="col-md-3 text-right pull-right">
                 <a href="manage_group.php"><h5><i class="glyph-icon font-primary icon-users"></i> Manage Group</h5></a>
                </div>
            </div>
        </div>
        <div class="divider"></div>
        <div class="example-box-wrapper">
            <form class="form-horizontal bordered-row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="col-sm-3 control-label">First Name *</label>
                                                    <div class="col-sm-9">
                                                        <input class="form-control" id="" placeholder="Candidate first name..." type="text">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-3 control-label">Middle Name *</label>
                                                    <div class="col-sm-9">
                                                        <input class="form-control" id="" placeholder="Candidate middle name ..." type="text">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-3 control-label">Last Name *</label>
                                                    <div class="col-sm-9">
                                                        <input class="form-control" id="" placeholder="Candidate last name ..." type="text">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-3 control-label">Gender </label>
                                                    <div class="col-sm-9">
                                                        <label class="radio-inline">
                                                            <input id="" name="example-radio1" value="option1" checked="checked" type="radio">
                                                           Male
                                                        </label>
                                                        <label class="radio-inline">
                                                            <input id="" name="example-radio1" value="option2" type="radio">
                                                            Female
                                                        </label>
                                                        <label class="radio-inline">
                                                            <input id="" name="example-radio1" value="option2" type="radio">
                                                           Other 
                                                        </label>
                                                        <label class="radio-inline">
                                                            <input id="" name="example-radio1" value="" placeholder="Specify " type="text">
                                                            
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-3 control-label">DOB*</label>
                                                    <div class="col-sm-9">
                                                        <input class="form-control" id="" placeholder="Candidate DOB ..." type="text">
                                                        
                                                    </div>
                                                </div>
                                                </div>
                                                <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="col-sm-3 control-label">AMEB Candidate No</label>
                                                    <div class="col-sm-9">
                                                        <input class="form-control popover-button-default" placeholder="AMEB candidate number" data-original-title="" title="" type="text">
                                                        <small>You will have an AMEB Candidate Number if you have enrolled for previous AMEB Exams. If you don't know this number please contact your AMEB State Office or leave this field blank.</small>
                                                    </div>
                                                </div>
                                                                                <div class="form-group">
                                                    <label class="col-sm-3 control-label">LUI number (QLD only)</label>
                                                    <div class="col-sm-9">
                                                        <input class="form-control popover-button-default" placeholder="Candidate LUI number (QLD only)" data-original-title="" title="" type="text">
                                                    </div>
                                                </div>
                                                                                <div class="form-group">
                                                    <label class="col-sm-3 control-label">Year of Registration (QLD only)</label>
                                                    <div class="col-sm-9">
                                                        <input class="form-control popover-button-default" placeholder="Candidate year of registration (QLD only)" data-original-title="" title="" type="text">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-3 control-label">Group </label>
                                                    <div class="col-sm-9">
                                                        <select class="form-control">
                                                        <option>From group database</option>
                                                        <option>From group database</option>
                                                        <option>From group database</option>
                                                        <option>From group database</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                                <div class="form-group">
                                                    <label class="col-sm-3 control-label"></label>
                                                    <div class="col-sm-9">
                                                        <div class="checkbox">
                                                            <label>
                                                                <input value="" type="checkbox">
                                                                 Candidate agrees to personal details and qualifications being provided to the Tasmanian Qualifications Authority for recording on the Tasmanian Certificate of Education.   (TAS only) 

                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                  <div class="bg-default text-center pad20A mrg25T">
                    <button class="btn border-default btn-success ">Save Candidate</button>
                </div>
                                                <b>Note: hide state wise data based on parent/teache based on the role</b>
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

<?php 
include 'footer.php';
 ?>