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
    Manage Exams
</h3>
<!-- Data tables -->
<div class="example-box-wrapper">
<table class="table table-bordered table-striped table-condensed cf">
                    <thead class="cf">
                    <tr>
                        <th>Exam Name</th>
                        <th>Exam Grade</th>
                        <th>Exam Type</th>
                        <th>Status</th>
                        <th>Purchased Date</th>
                        <th>Expiry Date</th>
                        <th>Price</th>
                        <th>Action </th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td data-title="Candidate Name">Online Music Theory  </td>
                        <td>Grade 1</td>
                        <td data-title="Product Name" class="numeric">Individual</td>
                        <td data-title="Status"><span class="bs-badge badge-info">Active</span></td>
                        <td data-title="Purchased Date" class="numeric">23/08/2017</td>
                        <td data-title="Purchased Date" class="numeric">23/08/2017</td>
                        <td data-title="Price" class="numeric">$25.00</td>
                        <th><div class="dropdown">
            <a href="#" title="" class="btn btn-default" data-toggle="dropdown" aria-expanded="false">
                <i class="glyph-icon icon-cog"></i>
                <i class="glyph-icon icon-chevron-down"></i>
            </a>
            <ul class="dropdown-menu float-right" style="display: none;">
                <li>
                    <a href="#" title="" data-toggle="modal" data-target=".view_details">
                        <i class="glyph-icon icon-eye mrg5R"></i>
                        View Candidate
                    </a>
                </li>
                <li>
                    <a href="#" data-toggle="modal"  data-target=".edit_details">
                        <i class="glyph-icon icon-pencil mrg5R"></i>
                        Request Edit
                    </a>
                </li>
                <li>
                    <a href="#" data-toggle="modal" data-target=".change_password">
                        <i class="glyph-icon icon-cog mrg5R"></i>
                        Change Exam Password
                    </a>
                </li>
                <li>
                    <a href="#" data-toggle="modal" data-target=".send_details_email">
                        <i class="glyph-icon icon-refresh mrg5R"></i>
                        Resend Exam Details
                    </a>
                </li>
                <li>
                    <a href="view_courses.php" title="">
                        <i class="glyph-icon icon-book mrg5R"></i>
                        View Courses
                    </a>
                </li>
                <li>
                    <a href="#" title="">
                        <i class="glyph-icon icon-file mrg5R"></i>
                        Download Invoice
                    </a>
                </li>
                <li class="divider"></li>
                <li>
                    <a href="#" class="font-red" title="" data-toggle="modal" data-target=".request_refund">
                        <i class="glyph-icon icon-money mrg5R"></i>
                        Refund
                    </a>
                </li>
                <li>
                    <a href="#" class="font-blue" data-toggle="modal" data-target=".request_extension">
                        <i class="glyph-icon icon-calendar mrg5R"></i>
                        Extension
                    </a>
                </li>
            </ul>
        </div></th>
                    </tr>
                                               <tr>
                        <td data-title="Candidate Name">Online Music Theory  </td>
                        <td>Grade 1</td>
                        <td data-title="Product Name" class="numeric">Class</td>
                        <td data-title="Status"><span class="bs-badge badge-warning">Expiring Soon</span></td>
                        <td data-title="Purchased Date" class="numeric">23/08/2017</td>
                        <td data-title="Purchased Date" class="numeric">23/08/2017</td>
                        <td data-title="Price" class="numeric">$25.00</td>
                        <th><div class="dropdown">
            <a href="#" title="" class="btn btn-default" data-toggle="dropdown" aria-expanded="false">
                <i class="glyph-icon icon-cog"></i>
                <i class="glyph-icon icon-chevron-down"></i>
            </a>
            <ul class="dropdown-menu float-right" style="display: none;">
                <li>
                    <a href="view_enrollers.php" title="">
                        <i class="glyph-icon icon-eye mrg5R"></i>
                        View Candidate
                    </a>
                </li>
                <li>
                    <a href="#" data-target=".edit_details">
                        <i class="glyph-icon icon-pencil mrg5R"></i>
                        Request Edit
                    </a>
                </li>
                <li>
                    <a href="#" data-toggle="modal" data-target=".change_password">
                        <i class="glyph-icon icon-cog mrg5R"></i>
                        Change Exam Password
                    </a>
                </li>
                <li>
                    <a href="#" data-toggle="modal" data-target=".send_details_email">
                        <i class="glyph-icon icon-refresh mrg5R"></i>
                        Resend Exam Details
                    </a>
                </li>
                <li>
                    <a href="view_courses.php" title="">
                        <i class="glyph-icon icon-book mrg5R"></i>
                        View Courses
                    </a>
                </li>
                <li>
                    <a href="#" title="">
                        <i class="glyph-icon icon-file mrg5R"></i>
                        Download Invoice
                    </a>
                </li>
                <li class="divider"></li>
                <li>
                    <a href="#" title="">
                        <i class="glyph-icon icon-file mrg5R"></i>
                        Authorize Exam
                    </a>
                </li>
                <li>
                    <a href="#" class="font-red" title="" data-toggle="modal" data-target=".request_refund">
                        <i class="glyph-icon icon-money mrg5R"></i>
                        Refund
                    </a>
                </li>
                <li>
                    <a href="#" class="font-blue" data-toggle="modal" data-target=".request_extension">
                        <i class="glyph-icon icon-calendar mrg5R"></i>
                        Extension
                    </a>
                </li>
            </ul>
        </div></th>
                    </tr>
                    <tr>
                        <td data-title="Candidate Name">Online Music Theory  </td>
                        <td>Grade 1</td>
                        <td data-title="Product Name" class="numeric">Individual</td>
                        <td data-title="Status"><span class="bs-badge badge-danger">Expired</span></td>
                        <td data-title="Purchased Date" class="numeric">23/08/2017</td>
                        <td data-title="Purchased Date" class="numeric">23/08/2017</td>
                        <td data-title="Price" class="numeric">$25.00</td>
                        <th><div class="dropdown">
            <a href="#" title="" class="btn btn-default" data-toggle="dropdown" aria-expanded="false">
                <i class="glyph-icon icon-cog"></i>
                <i class="glyph-icon icon-chevron-down"></i>
            </a>
            <ul class="dropdown-menu float-right" style="display: none;">
                <li>
                    <a href="view_enrollers.php" title="">
                        <i class="glyph-icon icon-eye mrg5R"></i>
                        View Candidate
                    </a>
                </li>
                <li>
                    <a href="#" data-target=".edit_details">
                        <i class="glyph-icon icon-pencil mrg5R"></i>
                        Request Edit
                    </a>
                </li>
                <li>
                    <a href="#" data-toggle="modal" data-target=".change_password">
                        <i class="glyph-icon icon-cog mrg5R"></i>
                        Change Exam Password
                    </a>
                </li>
                <li>
                    <a href="#" data-toggle="modal" data-target=".send_details_email">
                        <i class="glyph-icon icon-refresh mrg5R"></i>
                        Resend Exam Details
                    </a>
                </li>
                <li>
                    <a href="view_courses.php" title="">
                        <i class="glyph-icon icon-book mrg5R"></i>
                        View Courses
                    </a>
                </li>
                <li>
                    <a href="#" title="">
                        <i class="glyph-icon icon-file mrg5R"></i>
                        Download Invoice
                    </a>
                </li>
                <li class="divider"></li>
                <li>
                    <a href="#" class="font-red" title="" data-toggle="modal" data-target=".request_refund">
                        <i class="glyph-icon icon-money mrg5R"></i>
                        Refund
                    </a>
                </li>
                <li>
                    <a href="#" class="font-blue" data-toggle="modal" data-target=".request_extension">
                        <i class="glyph-icon icon-calendar mrg5R"></i>
                        Extension
                    </a>
                </li>
            </ul>
        </div></th>
                    </tr>
                    <tr>
                        <td data-title="Candidate Name">Online Music Theory  </td>
                        <td>Grade 1</td>
                        <td data-title="Product Name" class="numeric">Class</td>
                        <td data-title="Status"><span class="bs-badge badge-success">Completed</span></td>
                        <td data-title="Purchased Date" class="numeric">23/08/2017</td>
                        <td data-title="Purchased Date" class="numeric">23/08/2017</td>
                        <td data-title="Price" class="numeric">$25.00</td>
                        <th><div class="dropdown">
            <a href="#" title="" class="btn btn-default" data-toggle="dropdown" aria-expanded="false">
                <i class="glyph-icon icon-cog"></i>
                <i class="glyph-icon icon-chevron-down"></i>
            </a>
            <ul class="dropdown-menu float-right" style="display: none;">
                <li>
                    <a href="view_enrollers.php" title="">
                        <i class="glyph-icon icon-eye mrg5R"></i>
                        View Candidate
                    </a>
                </li>
                <li>
                    <a href="#" data-target=".edit_details">
                        <i class="glyph-icon icon-pencil mrg5R"></i>
                        Request Edit
                    </a>
                </li>
                <li>
                    <a href="#" data-toggle="modal" data-target=".change_password">
                        <i class="glyph-icon icon-cog mrg5R"></i>
                        Change Exam Password
                    </a>
                </li>
                <li>
                    <a href="#" data-toggle="modal" data-target=".send_details_email">
                        <i class="glyph-icon icon-refresh mrg5R"></i>
                        Resend Exam Details
                    </a>
                </li>
                <li>
                    <a href="view_courses.php" title="">
                        <i class="glyph-icon icon-book mrg5R"></i>
                        View Courses
                    </a>
                </li>
                <li>
                    <a href="#" title="">
                        <i class="glyph-icon icon-file mrg5R"></i>
                        Download Invoice
                    </a>
                </li>
                <li class="divider"></li>
                <li>
                    <a href="#" class="font-red" title="" data-toggle="modal" data-target=".request_refund">
                        <i class="glyph-icon icon-money mrg5R"></i>
                        Refund
                    </a>
                </li>
                <li>
                    <a href="#" class="font-blue" data-toggle="modal" data-target=".request_extension">
                        <i class="glyph-icon icon-calendar mrg5R"></i>
                        Extension
                    </a>
                </li>
            </ul>
        </div></th>
                    </tr>
                    </tbody>
                </table>
</div>
<div class="col-md-12 text-right">
<ul class="pagination">
                                <li class="disabled"><a href="#">«</a></li>
                                <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">5</a></li>
                                <li><a href="#">»</a></li>
                            </ul>
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
<!--Model for Change Password -->
                    <div class="modal fade change_password" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                    <h4 class="modal-title">Change Candidate Password</h4>
                                </div>
                                <div class="modal-body">
                                            <div class="row">
                                            <div class="form-group">
                                                <label class="col-sm-2 control-label">New Password*</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" id=""  placeholder="Your password ...">
                                                </div>
                                            </div>
                                        </div>
                                          
                                          <div class="row">
                                            <div class="form-group">
                                                <label class="col-sm-2 control-label">Confirm Password*</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" id=""  placeholder="Re-confirm password ...">
                                                </div>
                                            </div>
                                        </div>
                                           
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Update</button>
                                </div>
                            </div>
                        </div>
                    </div>
<!--Model for Change Password -->
<!--Model for View Details -->
                    <div class="modal fade view_details" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                    <h4 class="modal-title">Product Details</h4>
                                </div>
                                <div class="modal-body">
                                      
                                            <div class="col-md-6">
                                                <div class="row">
                                                    <div class="row">
                                                    <div class="form-group">
                                                        <label class="col-sm-5 control-label">Candidate First Name</label>
                                                        <div class="col-sm-7">
                                                            First name
                                                        </div>
                                                    </div>
                                                    </div>
                                                    <div class="row">
                                                    <div class="form-group">
                                                        <label class="col-sm-5 control-label">Candidate Middle Name</label>
                                                        <div class="col-sm-7">
                                                            Middle name
                                                        </div>
                                                    </div>
                                                    </div>
                                                    <div class="row">
                                                    <div class="form-group">
                                                        <label class="col-sm-5 control-label">Candidate Last Name</label>
                                                        <div class="col-sm-7">
                                                            Last name
                                                        </div>
                                                    </div>
                                                    </div>
                                                    <div class="row">
                                                    <div class="form-group">
                                                        <label class="col-sm-5 control-label">Gender</label>
                                                        <div class="col-sm-7">
                                                            Gender
                                                        </div>
                                                    </div>
                                                    </div>
                                                    <div class="row">
                                                    <div class="form-group">
                                                        <label class="col-sm-5 control-label">DOB</label>
                                                        <div class="col-sm-7">
                                                            DOB
                                                        </div>
                                                    </div>
                                                    </div>
                                                    <div class="row">
                                                    <div class="form-group">
                                                        <label class="col-sm-5 control-label">AMEB Candidate No</label>
                                                        <div class="col-sm-7">
                                                            Gender
                                                        </div>
                                                    </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="row">
                                                    <div class="row">
                                                    <div class="form-group">
                                                        <label class="col-sm-5 control-label">LUI Number (QLD only)</label>
                                                        <div class="col-sm-7">
                                                            LUI Number
                                                        </div>
                                                    </div>
                                                    </div>
                                                    <div class="row">
                                                    <div class="form-group">
                                                        <label class="col-sm-5 control-label">Year of Registration (QLD only)</label>
                                                        <div class="col-sm-7">
                                                            Gender
                                                        </div>
                                                    </div>
                                                    </div>
                                                                                                         <div class="row">
                                                    <div class="form-group">
                                                        <label class="col-sm-5 control-label">Exam Name</label>
                                                        <div class="col-sm-7">
                                                            Gender
                                                        </div>
                                                    </div>
                                                    </div>
                                                     <div class="row">
                                                    <div class="form-group">
                                                        <label class="col-sm-5 control-label">Candidate Id</label>
                                                        <div class="col-sm-7">
                                                            Gender
                                                        </div>
                                                    </div>
                                                    </div>
                                                     <div class="row">
                                                    <div class="form-group">
                                                        <label class="col-sm-5 control-label">Password</label>
                                                        <div class="col-sm-7">
                                                            Gender
                                                        </div>
                                                    </div>
                                                    </div>
                                                </div>
                                            </div>

                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>

<!--Model for View Details-->


<!--Model for Send Details via Email -->
                    <div class="modal fade send_details_email" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                    <h4 class="modal-title">Email Details</h4>

                                </div>
                                <div class="modal-body">
                                <p>If you would like to re-send the exam details to a candidate please type their email adddress here or you can choose to send them to your own email address.</p>
                                            <div class="row">
                                            <div class="form-group">
                                                <label class="col-sm-2 control-label">Email*</label>
                                                <div class="col-sm-5">
                                                    <input type="text" class="form-control" id=""  placeholder="Receiver email address...">
                                                </div>
                                            </div>
                                        </div>
                                           
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Send</button>
                                </div>
                            </div>
                        </div>
                    </div>
<!--Model for Send Details via Email -->
<!--Model for Request Refund -->
                    <div class="modal fade request_refund" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                    <h4 class="modal-title">Request Refund</h4>
                                </div>
                                <div class="modal-body">
                                            <div class="row">
                                            <div class="form-group">
                                                <label class="col-sm-12 control-label">Why do you want a refund? *</label>
                                                <div class="col-sm-12">
                                                    <select class="form-control textarea-counter">
                                                        <option>Bought a wrong exam</option>
                                                        <option>Bought it accidentally</option>
                                                        <option>I want to buy another exam</option>
                                                        <option>This purchase was repeated twice</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group">
                                                <label class="col-sm-12 control-label">Please describe you reason in short*</label>
                                                <div class="col-sm-12">
                                                    <textarea name="" rows="3" class="form-control textarea-counter"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group">
                                                <label class="col-sm-12 control-label">Attachment(s)</label>
                                                <div class="col-sm-12">
                                                    <input type="file" class="form-control" />
                                            </div>
                                        </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                            Note:<br/>
                                            <ul>
                                            <li> Refund are subjected to our refund policy.</li>
                                            <li> You might receive email or phone call during this process. </li>
                                            </ul>
                                            </div>
                                        </div>    
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Request</button>
                                </div>
                            </div>
                        </div>
                    </div>
<!--Model for Request Refund -->
<!--Model for Request Edit -->
                    <div class="modal fade edit_details" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                    <h4 class="modal-title">Request Edit</h4>
                                </div>
                                <div class="modal-body">
                                           <form class="form-horizontal bordered-row">
                                            <div class="col-md-6">
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
                                                           Not Specified 
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-3 control-label">Date of Birth *</label>
                                                    <div class="col-sm-9">
                                                        <input class="form-control" id="" placeholder="Candidate DOB ..." type="text">
                                                        
                                                    </div>
                                                </div>
                                                </div>
                                                <div class="col-md-6">
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
                                                           
                                                <b>Note: hide state wise data based on parent/teache based on the role</b>
                                                                </div>
                                            </form>  
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Request Edit</button>
                                </div>
                            </div>
                        </div>
                    </div>
<!--Model for Request Edit -->
<!--Model for Request Extension -->
                    <div class="modal fade request_extension" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                    <h4 class="modal-title">Request Extension</h4>
                                </div>
                                <div class="modal-body">
                                            <div class="row">
                                                <div class="class="form-group"">

                                                <div class="col-md-12 text-center"><button type="button" value="buy_extension" class="btn btn-primary">Buy Extension for $10</button></div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="class="form-group"">

                                                <div class="col-md-12 text-center"> <big style="font-size: 32px;">Or</big> </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="class="form-group"">

                                                <div class="col-md-12 text-center"><button type="button" value="buy_extension" class="btn btn-primary" id="buy_extension">Request Extension</button></div>
                                                </div>
                                            </div>
                                            
                                            <div class="row">
                                            <div class="form-group">
                                                <label class="col-sm-12 control-label">Why do you want an extension ? *</label>
                                                <div class="col-sm-12">
                                                    <select class="form-control textarea-counter">
                                                        <option>I am not prepared at the moment.</option>
                                                        <option>I am sick and can't sit on  the exam.</option>
                                                        <option>I just changed my mind to sit later. </option>
                                                        <option>I forgot the date and time is not enough. </option>
                                                        <option>Other</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group">
                                                <label class="col-sm-12 control-label">Please describe your reason as much as possible*</label>
                                                <div class="col-sm-12">
                                                    <textarea name="" rows="3" class="form-control textarea-counter"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group">
                                                <label class="col-sm-12 control-label">Attachment(s)</label>
                                                <div class="col-sm-12">
                                                    <input type="file" class="form-control">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                            Note:<br/>
                                            <ul>
                                            <li> In general, you will get 1 month extension.</li>
                                            <li> State office makes decision if its over a month </li>
                                            <li> Decision might vary from person to person based on the reason provided. </li>
                                            </ul>
                                            </div>
                                        </div>   
                                        </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Request Extrension</button>
                                </div>
                                
                        </div>
                    </div>
<!--Model for Request Extension -->

<!-- WIDGETS -->
<style>
.modal {
  position: fixed;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  overflow: hidden;
  margin: 0 auto;
}

.modal-dialog {
  margin: 30px auto;
  width: 80%;
  height: 60%;
  padding: 0;
}

.modal-content {
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  border: 1px solid #5c5c5c;
  border-radius: 0;
  box-shadow: none;
}

.modal-header {
  position: absolute;
  top: 0;
  right: 0;
  left: 0;
  height: 50px;
  padding: 10px;
  background: #6598d9;
  border: 0;
}

.modal-title {
  font-weight: 300;
  font-size: 2em;
  color: #fff;
  line-height: 30px;
}

.modal-body {
  position: absolute;
  top: 50px;
  bottom: 60px;
  width: 100%;
  font-weight: 300;
  overflow: auto;
}

.modal-footer {
  position: absolute;
  right: 0;
  bottom: 0;
  left: 0;
  height: 60px;
  padding: 10px;
  background: #f1f3f5;
}

</style>
<!-- Bootstrap Dropdown -->

<script type="text/javascript">
    $('document').ready(function(){
        
        $('#buy_extension').click(function(){
            $('#extension_form').css("visibility","visible");
        })
        
    });
    
</script>


