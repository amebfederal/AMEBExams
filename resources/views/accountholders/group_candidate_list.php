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
    Group Exam Candidates for MD04401154214
</h3>
<h5>Exam Name</h5>
<!-- Data tables -->
<div class="row">

            <div class="row">
            <div class="col-md-12">
             <button class="btn btn-default" data-toggle="modal" data-target=".change_password">Change Candidate Password</button>
            <button class="btn btn-default" data-toggle="modal" data-target=".view_details">View Candidate Details</button>
            <button class="btn btn-default" data-toggle="modal" data-target=".send_details_email">Email Candidate Details</button>
            <button class="btn btn-default" data-toggle="modal" data-target=".request_refund">Request Refund</button>
            <button class="btn btn-default" data-toggle="modal" data-target=".edit_details">Request Edit</button>
            </div>
            </div>
</div>
<br/>
<div class="example-box-wrapper">
<table class="table table-bordered table-striped table-condensed cf">
                    <thead class="cf">
                    <tr>
                        <th>&nbsp;</th>
                        <th>Candidate Number</th>
                        <th>Candidate First Name</th>
                        <th>Candidate Last Name</th>
                        <th>DOB</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td data-title=""><div class="checkbox"><label><input type="radio" name="purchase_list" value=""></label></div></td>
                        <td>123123123123</td>
                        <td data-title="First Name">Bernard</td>
                        <td data-title="Last Name">Depasquale</td>
                        <td data-title="DOB" class="numeric">12/12/2000</td>
                    </tr>
                                           <tr>
                        <td data-title=""><div class="checkbox"><label><input type="radio" name="purchase_list" value=""></label></div></td>
                        <td>123123123123</td>
                        <td data-title="First Name">Bernard</td>
                        <td data-title="Last Name">Depasquale</td>
                        <td data-title="DOB" class="numeric">12/12/2000</td>
                    </tr>
                                        <tr>
                        <td data-title=""><div class="checkbox"><label><input type="radio" name="purchase_list" value=""></label></div></td>
                        <td>123123123123</td>
                        <td data-title="First Name">Bernard</td>
                        <td data-title="Last Name">Depasquale</td>
                        <td data-title="DOB" class="numeric">12/12/2000</td>
                    </tr>
                                        <tr>
                        <td data-title=""><div class="checkbox"><label><input type="radio" name="purchase_list" value=""></label></div></td>
                        <td>123123123123</td>
                        <td data-title="First Name">Bernard</td>
                        <td data-title="Last Name">Depasquale</td>
                        <td data-title="DOB" class="numeric">12/12/2000</td>
                    </tr>
                                        <tr>
                        <td data-title=""><div class="checkbox"><label><input type="radio" name="purchase_list" value=""></label></div></td>
                        <td>123123123123</td>
                        <td data-title="First Name">Bernard</td>
                        <td data-title="Last Name">Depasquale</td>
                        <td data-title="DOB" class="numeric">12/12/2000</td>
                    </tr>
                                        <tr>
                        <td data-title=""><div class="checkbox"><label><input type="radio" name="purchase_list" value=""></label></div></td>
                        <td>123123123123</td>
                        <td data-title="First Name">Bernard</td>
                        <td data-title="Last Name">Depasquale</td>
                        <td data-title="DOB" class="numeric">12/12/2000</td>
                    </tr>
                                        <tr>
                        <td data-title=""><div class="checkbox"><label><input type="radio" name="purchase_list" value=""></label></div></td>
                        <td>123123123123</td>
                        <td data-title="First Name">Bernard</td>
                        <td data-title="Last Name">Depasquale</td>
                        <td data-title="DOB" class="numeric">12/12/2000</td>
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
                                    <h4 class="modal-title">Change Password</h4>
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
                                                        <label class="col-sm-5 control-label">Product Name</label>
                                                        <div class="col-sm-7">
                                                            asdasd
                                                        </div>
                                                    </div>
                                                    </div>
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
                                            <div class="row">
                                            <div class="form-group">
                                                <label class="col-sm-2 control-label">Email*</label>
                                                <div class="col-sm-10">
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
                                            <div class="row">
                                            <div class="form-group">
                                                <label class="col-sm-12 control-label">What do you want to edit? *</label>
                                                <div class="col-sm-12">
                                                    <select class="form-control textarea-counter">
                                                        <option>Name</option>
                                                        <option>DOB</option>
                                                        <option>Gender</option>
                                                        <option>DOB</option>
                                                        <option>AMEB Candidate No.</option>
                                                        <option>LUI Number (Qld only)</option>
                                                        <option>Year of Registration (Qld Only)</option>
                                                        <option>All</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group">
                                                <label class="col-sm-12 control-label">Please mention your new information here*</label>
                                                <div class="col-sm-12">
                                                    <textarea name="" rows="3" class="form-control textarea-counter"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                            Note:<br/>
                                            <ul>
                                            <li> Change in complete details of candidate is not allowed.</li>
                                            <li> Minor mistakes are only editable. </li>
                                            <li> Exam Candidate name can not be updated to a new candidate. </li>
                                            </ul>
                                            </div>
                                        </div>    
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
                                            <div class="form-group">
                                                <label class="col-sm-12 control-label">Why do you want an extension ? *</label>
                                                <div class="col-sm-12">
                                                    <select class="form-control textarea-counter">
                                                        <option>I am not prepared at the moment.</option>
                                                        <option>I am sick and can't sit on exam.</option>
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
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Request Extrension</button>
                                </div>
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
<script type="text/javascript" src="../../assets/bootstrap/js/bootstrap.min.js"></script>


