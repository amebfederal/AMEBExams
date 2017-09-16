@extends('accountholders.layouts.layouts')

@section('title', 'User Dashboard')

@section('content')

      <div class="col-md-9">
            

<div class="panel">
    <div class="panel-body">
        <h1>
            Product Title
        </h1>

        <br/>
        <div class="example-box-wrapper">
            <div class="row">
                <div class="col-md-2 col-sm-2 col-xs-5">
                    <div class="thumbnail-box-wrapper">
                        <div class="thumbnail-box">
                            
                            <img src="../../assets/image-resources/stock-images/img-17.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-md-5 col-sm-10 col-xs-7">
                        
                            <h3 class="animated rollIn">
                                
                                    Short Info
                       
                       </h3>
                       <div class="divider"></div>
                       	<p> Lorem Ipsum Dorem. Lorem Ipsum Dorem. Lorem Ipsum Dorem. Lorem Ipsum Dorem. Lorem Ipsum Dorem. Lorem Ipsum Dorem. Lorem Ipsum Dorem. Lorem Ipsum Dorem. Lorem Ipsum Dorem. Lorem Ipsum Dorem. Lorem Ipsum Dorem. Lorem Ipsum Dorem. Lorem Ipsum Dorem. Lorem Ipsum Dorem. Lorem Ipsum Dorem. Lorem Ipsum Dorem. Lorem Ipsum Dorem. Lorem Ipsum Dorem. Lorem Ipsum Dorem. Lorem Ipsum 
                       	</p>
                        <br/>
                          <h3 class="title-hero">
            <strong>Price:</strong> $300 AUD
        </h3>       
                </div>
                <div class="col-md-5 col-sm-12">

    <div class="panel-body">
        <h3 class="title-hero">
            Product Information
        </h3>
        <div class="example-box-wrapper">
            <div class="hide-columns">
                <table class="table table-bordered table-striped table-condensed">
                    <thead>
                    <tr>
                        <th>Grade</th>
                        <th>1</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>Valid</td>
                        <td>1 Year /  Session</td>
                    </tr>
                    </tbody>
                    <thead>
                    <tr>
                        <th>Expiry Date</th>
                        <th>1 Year from Today</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>Price</td>
                        <td>$200</td>
                    </tr>
                    </tbody>
                    <thead>
                    <tr>
                        <th>Exam Duration</th>
                        <th>3 Hours</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>Marking</td>
                        <td>Computer Marked * / Manually Marked * </td>
                    </tr>
                    <tr>
                        <td>Certificate</td>
                        <td>E-Certificate / Hard Copy</td>
                    </tr>
                    </tbody>
                </table>
                <small> * Online exams automatically marked by computer. <br/>
* Online exams manually marked by a member of the AMEB Online examining panel.
Higher level exams are manually marked by a panel of examiners. Candidates will receive their results within 3-4 business days. </small>
            </div>
                                  
                                    
        </div>

</div>

</div>
           <div class="row">
           <div class="col-md-12">
            <div class="form-group">
                                                    <label class="col-sm-12 control-label"> Do you want to purchase this exam as group or individual ? </label>
                                                    <div class="col-sm-9">
                                                        <label class="radio-inline">
                                                            <input id="" name="example-radio1" value="option1" checked="checked" type="radio">
                                                           Individual
                                                        </label>
                                                        <label class="radio-inline">
                                                            <input id="" name="example-radio1" value="option2" type="radio">
                                                            Group
                                                        </label>
                                                
                                                 
                                                    </div>
                                                </div>
        </div>
        </div>
                </div>
                <div class="panel-body">
        </div>
                <div class="row">
                  <div class="col-md-12">
                    <a href="#" style="float: right;"><img src="../../assets/image-resources/add_blue.png" align="absmiddle" /> Add Candidate</a> <a href="#" style="float: right;"><img src="../../assets/image-resources/add_blue.png" align="absmiddle" /> Add Candidate From List</a> 
                  </div>
                  "Add Candidate From List" visible only to school accounts
                  </div>
                  <div class="row">
                  <div class="col-md-12">
                  <div id="accordion" class="panel-group">
    <div class="panel">
        <div class="panel-heading">
            <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" class="display-block" href="#Elements">
                    John Doe
                    <i class="glyph-icon icon-angle-down float-right"></i>
                </a>
            </h4>
        </div>
        <div id="Elements" class="panel-collapse collapse">
            <div class="panel-body">
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
                                                    <label class="col-sm-3 control-label"></label>
                                                    <div class="col-sm-9">
                                                        <div class="checkbox">
                                                            <label>
                                                                <input type="checkbox" value="">
                                                                 Candidate agrees to personal details and qualifications being provided to the Tasmanian Qualifications Authority for recording on the Tasmanian Certificate of Education.    (TAS only) 

                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <b>Note: hide state wise data based on parent/teache based on the role</b>
                                                                </div>
                                            </form>
                                            
            </div>
        </div>
    </div>

    <div class="panel">
        <div class="panel-heading">
            <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" class="display-block" href="#Dashboard">
                    Will Smith
                    <i class="glyph-icon icon-angle-down float-right"></i>
                </a>
            </h4>
        </div>
        <div id="Dashboard" class="panel-collapse collapse">
            <div class="panel-body">
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
                                                    <label class="col-sm-3 control-label"></label>
                                                    <div class="col-sm-9">
                                                        <div class="checkbox">
                                                            <label>
                                                                <input type="checkbox" value="">
                                                                 Candidate agrees to personal details and qualifications being provided to the Tasmanian Qualifications Authority for recording on the Tasmanian Certificate of Education. (TAS only) 

                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <b>Note: hide state wise data based on parent/teache based on the role</b>
                                                                </div>
                                            </form>
                                            
            </div>
        </div>
    </div>

    <div class="panel">
        <div class="panel-heading">
            <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" class="display-block" href="#Widgets">
                    Candidate 3
                    <i class="glyph-icon icon-angle-down float-right"></i>
                </a>
            </h4>
        </div>
        <div id="Widgets" class="panel-collapse collapse">
            <div class="panel-body">
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
                                                    <label class="col-sm-3 control-label"></label>
                                                    <div class="col-sm-9">
                                                        <div class="checkbox">
                                                            <label>
                                                                <input type="checkbox" value="">
                                                                 Candidate agrees to personal details and qualifications being provided to the Tasmanian Qualifications Authority for recording on the Tasmanian Certificate of Education.    (TAS only) 

                                                            </label>
                                                        </div>
                                                    </div>
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

                               <div class="row">
                              <div class="col-md-4 col-xs-6 pull-right">
                           <br/><a href="cart.php" class="btn border-default btn-success btn-block" min="1">Continue</a>
                            </div>
                            <div class="col-md-4 col-xs-6 pull-right">
                           <br/><a href="#" class="btn border-default btn-success btn-block" min="1">Add to Cart</a>
                            </div>
            </div>
        </div>
    </div>
</div>

<div class="panel">
    <div class="panel-body">
        <h1>
            Related Exams
        </h1>
        <br/>
        <div class="example-box-wrapper">
            <div class="row">
                <div class="col-md-2 col-sm-4 col-xs-6">
                    <div class="thumbnail-box-wrapper">
                        <div class="thumbnail-box">
                            <a class="thumb-link" href="single_exam.php" title=""></a>
                            <div class="thumb-content">
                                <div class="center-vertical">
                                    <div class="center-content">
                                        <i class="icon-helper icon-center animated zoomInUp font-white glyph-icon icon-linecons-camera"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="thumb-overlay bg-black"></div>
                            <img src="../../assets/image-resources/stock-images/img-17.jpg" alt="">
                        </div>
                        <div class="thumb-pane">
                            <h3 class="thumb-heading animated rollIn">
                                <a href="single_exam.php" title="">
                                    Working in the morning
                                </a>
                                <small>$200</small>
                            </h3>
                        </div>
                    </div>
                </div>
                            <div class="col-md-2 col-sm-4 col-xs-6">
                    <div class="thumbnail-box-wrapper">
                        <div class="thumbnail-box">
                            <a class="thumb-link" href="single_exam.php" title=""></a>
                            <div class="thumb-content">
                                <div class="center-vertical">
                                    <div class="center-content">
                                        <i class="icon-helper icon-center animated zoomInUp font-white glyph-icon icon-linecons-camera"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="thumb-overlay bg-black"></div>
                            <img src="../../assets/image-resources/stock-images/img-17.jpg" alt="">
                        </div>
                        <div class="thumb-pane">
                            <h3 class="thumb-heading animated rollIn">
                                <a href="single_exam.php" title="">
                                    Working in the morning
                                </a>
                                <small>$200</small>
                            </h3>
                        </div>
                    </div>
                </div>
                                <div class="col-md-2 col-sm-4 col-xs-6">
                    <div class="thumbnail-box-wrapper">
                        <div class="thumbnail-box">
                            <a class="thumb-link" href="single_exam.php" title=""></a>
                            <div class="thumb-content">
                                <div class="center-vertical">
                                    <div class="center-content">
                                        <i class="icon-helper icon-center animated zoomInUp font-white glyph-icon icon-linecons-camera"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="thumb-overlay bg-black"></div>
                            <img src="../../assets/image-resources/stock-images/img-17.jpg" alt="">
                        </div>
                        <div class="thumb-pane">
                            <h3 class="thumb-heading animated rollIn">
                                <a href="single_exam.php" title="">
                                    Working in the morning
                                </a>
                                <small>$200</small>
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 col-sm-4 col-xs-6">
                    <div class="thumbnail-box-wrapper">
                        <div class="thumbnail-box">
                            <a class="thumb-link" href="single_exam.php" title=""></a>
                            <div class="thumb-content">
                                <div class="center-vertical">
                                    <div class="center-content">
                                        <i class="icon-helper icon-center animated zoomInUp font-white glyph-icon icon-linecons-camera"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="thumb-overlay bg-black"></div>
                            <img src="../../assets/image-resources/stock-images/img-17.jpg" alt="">
                        </div>
                        <div class="thumb-pane">
                            <h3 class="thumb-heading animated rollIn">
                                <a href="single_exam.php" title="">
                                    Working in the morning
                                </a>
                                <small>$200</small>
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 col-sm-4 col-xs-6">
                    <div class="thumbnail-box-wrapper">
                        <div class="thumbnail-box">
                            <a class="thumb-link" href="single_exam.php" title=""></a>
                            <div class="thumb-content">
                                <div class="center-vertical">
                                    <div class="center-content">
                                        <i class="icon-helper icon-center animated zoomInUp font-white glyph-icon icon-linecons-camera"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="thumb-overlay bg-black"></div>
                            <img src="../../assets/image-resources/stock-images/img-17.jpg" alt="">
                        </div>
                        <div class="thumb-pane">
                            <h3 class="thumb-heading animated rollIn">
                                <a href="single_exam.php" title="">
                                    Working in the morning
                                </a>
                                <small>$200</small>
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 col-sm-4 col-xs-6">
                    <div class="thumbnail-box-wrapper">
                        <div class="thumbnail-box">
                            <a class="thumb-link" href="single_exam.php" title=""></a>
                            <div class="thumb-content">
                                <div class="center-vertical">
                                    <div class="center-content">
                                        <i class="icon-helper icon-center animated zoomInUp font-white glyph-icon icon-linecons-camera"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="thumb-overlay bg-black"></div>
                            <img src="../../assets/image-resources/stock-images/img-17.jpg" alt="">
                        </div>
                        <div class="thumb-pane">
                            <h3 class="thumb-heading animated rollIn">
                                <a href="single_exam.php" title="">
                                    Working in the morning
                                </a>
                                <small>$200</small>
                            </h3>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
    </div>
    </div>
    </div>
<!-- WIDGETS -->
@endsection
@section('page-specific-scripts')
<!-- Calendar -->
@section('page-specific-scripts')
    <!--<link rel="stylesheet" type="text/css" href="../../assets/widgets/tabs-ui/tabs.css">-->
<!-- Bootstrap Dropdown -->
<script type="text/javascript" src="../../assets/bootstrap/js/bootstrap.min.js"></script>
@endsection