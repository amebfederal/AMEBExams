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
            Edit Candidate
        </h3>
        <div class="row">
            <div class="container">
                <div class="col-md-3 text-right pull-right">
                 <a href="manage_candidate.php"><h5><i class="glyph-icon font-primary icon-users"></i> Manage Groups</h5></a>
                </div>
                <div class="col-md-3 text-right pull-right">
                 <a href="manage_candidate.php"><h5><i class="glyph-icon font-primary icon-user"></i> Manage Candidate</h5></a>
                </div>
            </div>
        </div>
        <div class="divider"></div>
        <div class="example-box-wrapper">
            <form class="form-horizontal bordered-row" id="demo-form" data-parsley-validate="">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Candidate ID</label>
                            <div class="col-sm-6">
                                <input type="text" placeholder="Required Field" required class="form-control" value="0124569254" disabled="disabled">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">First Name</label>
                            <div class="col-sm-6">
                                <input type="text" placeholder="Required Field" required class="form-control" value="Mohammad">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Last Name</label>
                            <div class="col-sm-6">
                                <input type="text" placeholder="Required Field" required class="form-control" value="Sarfaraz">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">DOB</label>
                            <div class="col-sm-6">
                                <input type="date" placeholder="Required Field" required class="form-control" value="21/12/1999">
                            </div>
                        </div>
                         <div class="form-group">
                            <label class="col-sm-3 control-label">Group</label>
                            <div class="col-sm-6">
                                <select required class="form-control">
                                    <option selected="selected">Group from his list / (No Group is unknown)</option>
                                    <option>Group from his list</option>
                                    <option>Group from his list</option>
                                    <option>Group from his list</option>
                                    <option>Group from his list</option>
                                    <option>Group from his list</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Status</label>
                            <div class="col-sm-6">
                                <select required class="form-control">
                                    <option selected="selected">Active</option>
                                    <option>Inactive</option>
                                </select>
                            </div>
                        </div>
                      
                    </div>
                </div>
                <div class="bg-default text-center pad20A mrg25T">
                    <button class="btn border-default btn-success ">Update Candidate</button>
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