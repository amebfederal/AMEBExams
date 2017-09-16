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
    View Ticket
</h3>
<div class="content-box">
        <div class="mail-toolbar pad15A clearfix">
            <div class="float-left">
                <h4 class="font-primary">Ticket Title Here</h4>
            </div>
            <div class="float-right">
                <a href="#reply_block" class="btn btn-primary" title="Reply">
                    Reply
                    <i class="glyph-icon icon-mail-reply"></i>
                </a>
                <a href="#" class="btn btn-danger" title="Close Ticket">
                    Close Ticket
                    <i class="glyph-icon icon-close"></i>
                </a>
                <a href="#" class="btn btn-default" title="Print">
                    <i class="glyph-icon icon-print"></i>
                </a>
            </div>
        </div>
        <div class="pad15A clearfix mrg10B">
            <div class="float-left">
                <b>AMEB Support</b> (Chris) <i>to</i> <b>me</b>
            </div>
            <div class="float-right opacity-80">
                <i class="glyph-icon icon-clock-o mrg5R"></i>
                Mon 20 July 2017 11:50 PM
            </div>
        </div>
        <div class="email-body pad15A">
            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>

            <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?</p>

            <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio.</p>

        </div>
                <div class="pad15A clearfix mrg10B">
            <div class="float-left">
                <b>me</b> (Sarfaraz) <i>to</i> <b>AMEB Support</b>
            </div>
            <div class="float-right opacity-80">
                <i class="glyph-icon icon-clock-o mrg5R"></i>
                Mon 20 July 2017 11:50 PM
            </div>
        </div>
        <div class="email-body pad15A">
            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>

            <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?</p>

            <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio.</p>

        </div>
        <div class="email-body pad15A" id="reply_block">
        <h3>Reply </h3>
        </div>
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
            <a href="#" class="btn btn-success" title="Reply">
                <i class="glyph-icon icon-mail-reply"></i>
                Reply
            </a>
            <a href="#" class="btn btn-default" title="Reply">
                Cancel
                
            </a>
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