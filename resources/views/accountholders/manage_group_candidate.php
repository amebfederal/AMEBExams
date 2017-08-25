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
    Manage Group Candidate
</h3>
<div class="row">
    <div class="col-md-3 pull-left text-right">
            <input type="text" name="grp" value="Rockschool Group" class="form-control">
    </div>
        <div class="col-md-3 pull-left text-right">
            <input type="text" name="grp" value="Remarks" class="form-control">
    </div>
    <div class="col-md-1 pull-left text-left">
                <button type="submit" class="btn btn-default btn-success">Update Group</button>
    </div>
    </div>
    <div class="divider"></div>
                <div class="row">
            <div class="container">
                <div class="col-md-3 text-right pull-right">
                 <a href="add_candidate.php"><h5><i class="glyph-icon font-primary icon-user"></i> Add Candidate</h5></a>
                </div>
                <div class="col-md-3 text-right pull-right">
                 <a href="add_group.php"><h5><i class="glyph-icon font-primary icon-users"></i> Add Group</h5></a>
                </div>
            </div>
<!-- Data tables -->
<div class="row">
    <div class="col-md-3 pull-left text-right">
            <select class="form-control">
                <option>View</option>
                <option>Edit</option>
                <option>Trash</option>
            </select>
    </div>
    <div class="col-md-1 pull-left text-left">
                <button type="submit" class="btn btn-default btn-success">Go</button>
    </div>
</div>
<br/>
<div class="divider"></div>

<div class="example-box-wrapper">
<table class="table table-bordered table-striped table-condensed cf">
                    <thead class="cf">
                    <tr>
                        <th>&nbsp;</th>
                        <th>Candidate ID</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Date of Birth</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td data-title="S.N."><div class="checkbox"><label><input type="checkbox" value=""></label></div></td>
                        <td data-title="ID"><a href="edit_candidate.php">0121548956</a></td>
                        <td data-title="First Name"><a href="view_candidate.php">Mohammad</a></td>
                        <td data-title="Last Name" class="numeric"><a href="view_candidate.php">Sarfaraz</a></td>
                        <td data-title="Date of Birth" class="numeric"><a href="view_candidate.php">22/12/2017</a></td>
                    </tr>
                    <tr>
                        <td data-title="S.N."><div class="checkbox"><label><input type="checkbox" value=""></label></div></td>
                        <td data-title="ID"><a href="edit_candidate.php">0121548956</a></td>
                        <td data-title="First Name"><a href="view_candidate.php">Mohammad</a></td>
                        <td data-title="Last Name" class="numeric"><a href="view_candidate.php">Sarfaraz</a></td>
                        <td data-title="Date of Birth" class="numeric"><a href="view_candidate.php">22/12/2017</a></td>
                    </tr>
                    <tr>
                        <td data-title="S.N."><div class="checkbox"><label><input type="checkbox" value=""></label></div></td>
                        <td data-title="ID"><a href="edit_candidate.php">0121548956</a></td>
                        <td data-title="First Name"><a href="view_candidate.php">Mohammad</a></td>
                        <td data-title="Last Name" class="numeric"><a href="view_candidate.php">Sarfaraz</a></td>
                        <td data-title="Date of Birth" class="numeric"><a href="view_candidate.php">22/12/2017</a></td>
                    </tr>
                    <tr>
                        <td data-title="S.N."><div class="checkbox"><label><input type="checkbox" value=""></label></div></td>
                        <td data-title="ID"><a href="edit_candidate.php">0121548956</a></td>
                        <td data-title="First Name"><a href="view_candidate.php">Mohammad</a></td>
                        <td data-title="Last Name" class="numeric"><a href="view_candidate.php">Sarfaraz</a></td>
                        <td data-title="Date of Birth" class="numeric"><a href="view_candidate.php">22/12/2017</a></td>
                    </tr>
                    <tr>
                        <td data-title="S.N."><div class="checkbox"><label><input type="checkbox" value=""></label></div></td>
                        <td data-title="ID"><a href="edit_candidate.php">0121548956</a></td>
                        <td data-title="First Name"><a href="view_candidate.php">Mohammad</a></td>
                        <td data-title="Last Name" class="numeric"><a href="view_candidate.php">Sarfaraz</a></td>
                        <td data-title="Date of Birth" class="numeric"><a href="view_candidate.php">22/12/2017</a></td>
                    </tr>
                    <tr>
                        <td data-title="S.N."><div class="checkbox"><label><input type="checkbox" value=""></label></div></td>
                        <td data-title="ID"><a href="edit_candidate.php">0121548956</a></td>
                        <td data-title="First Name"><a href="view_candidate.php">Mohammad</a></td>
                        <td data-title="Last Name" class="numeric"><a href="view_candidate.php">Sarfaraz</a></td>
                        <td data-title="Date of Birth" class="numeric"><a href="view_candidate.php">22/12/2017</a></td>
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
</div>


<?php 
include 'footer.php';
 ?>