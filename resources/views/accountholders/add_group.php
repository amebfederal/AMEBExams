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
            Add New Group
        </h3>
                <div class="row">
            <div class="container">
                <div class="col-md-3 text-right pull-right">
                 <a href="manage_group.php"><h5><i class="glyph-icon font-primary icon-users"></i> Manage Groups</h5></a>
                </div>
            </div>
        </div>
        <div class="divider"></div>
        <div class="example-box-wrapper">
            <form class="form-horizontal bordered-row" id="demo-form" data-parsley-validate="">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Group Name</label>
                            <div class="col-sm-6">
                                <input type="text" placeholder="Required Field" required class="form-control">
                            </div>
                        </div>
                      
                    </div>
                </div>
                               <div class="bg-default text-center pad20A mrg25T">
                    <button class="btn border-default btn-success ">Save Group</button>
                </div>
            </form>
</div>

</div>

        </div>
    </div>
</div>

<br><br>
</div>
</div>
    </div>

</div>


<?php 
include 'footer.php';
 ?>