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
        <div class="row">
            <div class="panel">
            <div class="panel-body">
                    
                             <div class="example-box-wrapper">
                               <h4> Welcome, First Name Last Name</h4>

                               
                                <div class="clearfix"></div>
<div class="col-md-12 center-margin">
                        <div class="content-box mrg15B ">
                            <h3 class="content-box-header clearfix ">
                                Change Password
                               
                            </h3>
                            <div class="content-box-wrapper pad0T clearfix">
                                <form class="form-horizontal pad15L pad15R bordered-row">
                                    <div class="form-group">
                                        <label class="col-sm-6 control-label">Old password:</label>
                                        <div class="col-sm-6">
                                            <input class="form-control" id="" placeholder="" type="text">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-6 control-label">New password:</label>
                                        <div class="col-sm-6">
                                            <input class="form-control" id="" placeholder="" type="text">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-6 control-label">Repeat password:</label>
                                        <div class="col-sm-6">
                                            <input class="form-control" id="" placeholder="" type="text">
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="button-pane mrg20T">
                                <button class="btn btn-success">Update Password</button>
                            </div>
                        </div>
                    </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>




    </div>
</div>

        </div>

<br><br>
<!-- Calendar -->

<!--<link rel="stylesheet" type="text/css" href="../../assets/widgets/tabs-ui/tabs.css">-->
<script type="text/javascript" src="../../assets/widgets/tabs-ui/tabs.js"></script>
<script type="text/javascript">
    /* jQuery UI Tabs */

    $(function() { "use strict";
        $(".tabs").tabs();
    });

    $(function() { "use strict";
        $(".tabs-hover").tabs({
            event: "mouseover"
        });
    });
</script>

<!-- Boostrap Tabs -->

<script type="text/javascript" src="../../assets/widgets/tabs/tabs.js"></script>
<?php 
include 'footer.php';
 ?>