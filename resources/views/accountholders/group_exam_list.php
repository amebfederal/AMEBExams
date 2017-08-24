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
    Group Exams
</h3>
<!-- Data tables -->
<div class="row">

            <div class="row">
            <div class="col-md-12">
            <button class="btn btn-default" data-toggle="modal" data-target=".request_refund">Request Refund</button>
            <button class="btn btn-default" data-toggle="modal" data-target=".authorise_exam">Authorise Group Exam</button>
            <a class="btn btn-default" href="group_candidate_list.php">View Candidates</a>
            </div>
            </div>
</div>
<br/>
<div class="example-box-wrapper">
<table class="table table-bordered table-striped table-condensed cf">
                    <thead class="cf">
                    <tr>
                        <th>&nbsp;</th>
                        <th>Group Identifier</th>
                        <th>Exam Name</th>
                        <th>Purchased Date</th>
                        <th>Expiry Date</th>
                        <th>Authorisation</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td data-title=""><div class="checkbox"><label><input type="radio" name="purchase_list" value=""></label></div></td>
                        <td data-title="Group Key">MD04401154214 <span class="bs-badge badge-success">Active</span></td>
                        <td data-title="Product Name" class="numeric">Grade 1 - Music Theory Exam</td>
                        <td data-title="Purchased Date" class="numeric">23/08/2017</td>
                        <td data-title="Purchased Date" class="numeric">23/08/2018</td>
                        <td data-title="Price" class="numeric">Hold</td>
                    </tr>
                        <tr>
                        <td data-title=""><div class="checkbox"><label><input type="radio"  name="purchase_list" value=""></label></div></td>
                        <td data-title="Candidate Name">MD04401154214 <span class="bs-badge badge-success">Active</span></td>
                        <td data-title="Product Name" class="numeric">Grade 1 - Music Theory Exam</td>
                        <td data-title="Purchased Date" class="numeric">23/08/2017</td>
                        <td data-title="Purchased Date" class="numeric">23/08/2018</td>
                        <td data-title="Price" class="numeric">Hold</td>
                    </tr>
                        <tr>
                        <td data-title=""><div class="checkbox"><label><input type="radio"  name="purchase_list" value=""></label></div></td>
                        <td data-title="Candidate Name">MD04401154214 <span class="bs-badge badge-danger">Completed</span></td>
                        <td data-title="Product Name" class="numeric">Grade 1 - Music Theory Exam</td>
                        <td data-title="Purchased Date" class="numeric">23/08/2017</td>
                        <td data-title="Purchased Date" class="numeric">23/08/2018</td>
                        <td data-title="Price" class="numeric">Completed</td>
                    </tr>
                        <tr>
                        <td data-title=""><div class="checkbox"><label><input type="radio"  name="purchase_list" value=""></label></div></td>
                        <td data-title="Candidate Name">MD04401154214 <span class="bs-badge badge-danger">Completed</span></td>
                        <td data-title="Product Name" class="numeric">Grade 1 - Music Theory Exam</td>
                        <td data-title="Purchased Date" class="numeric">23/08/2017</td>
                        <td data-title="Purchased Date" class="numeric">23/08/2018</td>
                        <td data-title="Price" class="numeric">Completed</td>
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
                                                <label class="col-sm-2 control-label">Why do you want a refund? *</label>
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
                                                <label class="col-sm-2 control-label">Please describe you reason in short*</label>
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

<!-- Model for Authorise Exam -->

<div class="modal fade authorise_exam" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                    <h4 class="modal-title">Authorise Exam</h4>
            </div>
            <div class="modal-body">
                <p>I acknowledge that I have read and understood the Terms and Conditions and undertake to supervise the Candidate(s) entered (Candidate) in the Australian Music Examinations Board (AMEB) Online Exam in accordance with the procedure and objectives referred to under the Supervisor Protocol of the AMEB Online Examination Policy. I have explained to and the Candidate acknowledges that, if in the event that any breach of the AMEB Online Examination Policy is found to have occurred, a range of actions may be taken or penalties imposed by the AMEB or the AMEB State Office against the Candidate as set out in the AMEB Online Examination Policy.</p><br/>
                <div class="row">
                <div class="form-group">
                                                <label class="col-sm-12 control-label">Purchase Date: 10/12/2017</label>
                                            </div>
                                        </div>
                                <div class="row">
                <div class="form-group">
                                                <label class="col-sm-12 control-label">No. of Candidates: 10</label>
                                            </div>
                                        </div>
                <div class="row">
                                            <div class="form-group">
                                                <label class="col-sm-12 control-label">Name*</label>
                                                <div class="col-sm-12">
                                                    <input type="text" name="" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                <div class="row">
                                            <div class="form-group">
                                                <label class="col-sm-12 control-label">Supervisor Name*</label>
                                                <div class="col-sm-12">
                                                    <input type="text" name="" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                <div class="row">
                                            <div class="form-group">
                                                <label class="col-sm-12 control-label">Mobile / Phone*</label>
                                                <div class="col-sm-12">
                                                    <input type="text" name="" class="form-control">
                                                </div>
                                            </div>
                                        </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <a class="btn btn-danger btn-ok">Authorise</a>
            </div>
        </div>
    </div>
</div>

<!-- Model for Authorise Exam -->
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


