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
    Support Tickets 
</h3>
<div class="content-box">
        <form class="form-horizontal mrg15T" role="form">
            <div class="form-group row">
                <label for="inputEmail4" class="col-sm-2 control-label">Subject:</label>
                <div class="col-sm-8">
                    <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
                </div>
            </div>
        </form>

        <div class="pad15A">
            <div class="wysiwyg-editor"></div>
            <script type="text/javascript" src="../../assets/widgets/summernote-wysiwyg/summernote-wysiwyg.js"></script>
            <script type="text/javascript">
                
    /* WYSIWYG editor */

    $(function() { "use strict";
        $('.wysiwyg-editor').summernote({
            height: 350
        });
    });
            </script>
        </div>

        <div class="button-pane">
            <button class="btn btn-success">Create ticket</button>
            <button class="btn btn-link font-gray-dark">Cancel</button>
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