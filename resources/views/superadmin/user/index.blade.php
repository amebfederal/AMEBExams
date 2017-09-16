@extends('superadmin.layouts.layouts')
@section('content')
<div id="page-content-wrapper">
    <div id="page-content">

        <div class="container">

            <div id="page-title">
                <h2>Manage Account Holder </h2>
            </div>

            <div class="panel">
                <div class="panel-body">
                <div class="dropdown float-right">
                                    <a href="#" title="" class="btn btn-default" data-toggle="dropdown" aria-expanded="false">
                                        Filter by
                                        <i class="glyph-icon icon-chevron-down"></i>
                                    </a>
                                    <ul class="dropdown-menu float-right">
                                        <li>
                                            <a href="#" title="">
                                               
                                                Teacher
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" title="">
                                                
                                                Parent
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" title="">
                                               
                                                School
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" title="">
                                                
                                                Adult Candidate
                                            </a>
                                        </li>
                                        
                                    </ul>
                                </div>
                               <br/><br/>
                    <table id="datatable" class="table table-striped table-bordered">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Email</th>
                            <th>State</th>
                            <th>Postcode</th>
                            <th>Phone</th>
                            <th>Action </th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>1</td>
                            <td>Rob</td>
                            <td>Dugdale</td>
                            <td>rdugdale@ameb.edu.au</td>
                            <td>Southern Australia / Northern Territory</td>
                            <td>3000</td>
                            <td>0406551602</td>
                            <td><div class="dropdown">
                                    <a href="#" title="" class="btn btn-default" data-toggle="dropdown" aria-expanded="false">
                                        <i class="glyph-icon icon-cog"></i>
                                        <i class="glyph-icon icon-chevron-down"></i>
                                    </a>
                                    <ul class="dropdown-menu float-right">
                                        <li>
                                            <a href="{{ url('superadmin/user/edit/')}}" title="">
                                                <i class="glyph-icon icon-pencil mrg5R"></i>
                                                View / Edit
                                            </a>
                                        </li>
                                        <li>
                                            <a href="view_enrollers-purchase.php" title="">
                                                <i class="glyph-icon icon-book mrg5R"></i>
                                                Exam History
                                            </a>
                                        </li>
                                        <li class="divider"></li>
                                        <li>
                                            <a href="view_enrollers-request.php" class="font-blue" title="">
                                                <i class="glyph-icon icon-ticket mrg5R"></i>
                                                 Support
                                            </a>
                                        </li>
                                        <li>
                                            <a href="view_enrollers-refunds.php" class="font-blue" title="">
                                                <i class="glyph-icon icon-bank mrg5R"></i>
                                                Refund
                                            </a>
                                        </li>
                                    </ul>
                                </div></td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Rob</td>
                            <td>Dugdale</td>
                            <td>rdugdale@ameb.edu.au</td>
                            <td>Southern Australia / Northern Territory</td>
                            <td>3000</td>
                            <td>0406551602</td>
                            <td><div class="dropdown">
                                    <a href="#" title="" class="btn btn-default" data-toggle="dropdown" aria-expanded="false">
                                        <i class="glyph-icon icon-cog"></i>
                                        <i class="glyph-icon icon-chevron-down"></i>
                                    </a>
                                    <ul class="dropdown-menu float-right">
                                        <li>
                                            <a href="view_enrollers.php" title="">
                                                <i class="glyph-icon icon-eye mrg5R"></i>
                                                View
                                            </a>
                                        </li>
                                        <li>
                                            <a href="edit_enrollers.php" title="">
                                                <i class="glyph-icon icon-pencil mrg5R"></i>
                                                Edit
                                            </a>
                                        </li>
                                        <li>
                                            <a href="view_enrollers-candidates.php" title="">
                                                <i class="glyph-icon icon-user mrg5R"></i>
                                                Candidates
                                            </a>
                                        </li>
                                        <li>
                                            <a href="view_enrollers-groups.php" title="">
                                                <i class="glyph-icon icon-user mrg5R"></i>
                                                Groups
                                            </a>
                                        </li>
                                        <li>
                                            <a href="view_enrollers-purchase.php" title="">
                                                <i class="glyph-icon icon-money mrg5R"></i>
                                                Purchase History
                                            </a>
                                        </li>
                                        <li>
                                            <a href="view_enrollers-courses.php" title="">
                                                <i class="glyph-icon icon-book mrg5R"></i>
                                                Courses
                                            </a>
                                        </li>
                                        <li class="divider"></li>
                                        <li>
                                            <a href="view_enrollers-request.php" class="font-red" title="">
                                                <i class="glyph-icon icon-bell mrg5R"></i>
                                                Requests
                                            </a>
                                        </li>
                                        <li>
                                            <a href="view_enrollers-refunds.php" class="font-blue" title="">
                                                <i class="glyph-icon icon-bank mrg5R"></i>
                                                Refunds
                                            </a>
                                        </li>
                                    </ul>
                                </div></td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Rob</td>
                            <td>Dugdale</td>
                            <td>rdugdale@ameb.edu.au</td>
                            <td>Southern Australia / Northern Territory</td>
                            <td>3000</td>
                            <td>0406551602</td>
                            <td><div class="dropdown">
                                    <a href="#" title="" class="btn btn-default" data-toggle="dropdown" aria-expanded="false">
                                        <i class="glyph-icon icon-cog"></i>
                                        <i class="glyph-icon icon-chevron-down"></i>
                                    </a>
                                    <ul class="dropdown-menu float-right">
                                        <li>
                                            <a href="view_enrollers.php" title="">
                                                <i class="glyph-icon icon-eye mrg5R"></i>
                                                View
                                            </a>
                                        </li>
                                        <li>
                                            <a href="edit_enrollers.php" title="">
                                                <i class="glyph-icon icon-pencil mrg5R"></i>
                                                Edit
                                            </a>
                                        </li>
                                        <li>
                                            <a href="view_enrollers-candidates.php" title="">
                                                <i class="glyph-icon icon-user mrg5R"></i>
                                                Candidates
                                            </a>
                                        </li>
                                        <li>
                                            <a href="view_enrollers-groups.php" title="">
                                                <i class="glyph-icon icon-user mrg5R"></i>
                                                Groups
                                            </a>
                                        </li>
                                        <li>
                                            <a href="view_enrollers-purchase.php" title="">
                                                <i class="glyph-icon icon-money mrg5R"></i>
                                                Purchase History
                                            </a>
                                        </li>
                                        <li>
                                            <a href="view_enrollers-courses.php" title="">
                                                <i class="glyph-icon icon-book mrg5R"></i>
                                                Courses
                                            </a>
                                        </li>
                                        <li class="divider"></li>
                                        <li>
                                            <a href="view_enrollers-request.php" class="font-red" title="">
                                                <i class="glyph-icon icon-bell mrg5R"></i>
                                                Requests
                                            </a>
                                        </li>
                                        <li>
                                            <a href="view_enrollers-refunds.php" class="font-blue" title="">
                                                <i class="glyph-icon icon-bank mrg5R"></i>
                                                Refunds
                                            </a>
                                        </li>
                                    </ul>
                                </div></td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Rob</td>
                            <td>Dugdale</td>
                            <td>rdugdale@ameb.edu.au</td>
                            <td>Southern Australia / Northern Territory</td>
                            <td>3000</td>
                            <td>0406551602</td>
                            <td><div class="dropdown">
                                    <a href="#" title="" class="btn btn-default" data-toggle="dropdown" aria-expanded="false">
                                        <i class="glyph-icon icon-cog"></i>
                                        <i class="glyph-icon icon-chevron-down"></i>
                                    </a>
                                    <ul class="dropdown-menu float-right">
                                        <li>
                                            <a href="view_enrollers.php" title="">
                                                <i class="glyph-icon icon-eye mrg5R"></i>
                                                View
                                            </a>
                                        </li>
                                        <li>
                                            <a href="edit_enrollers.php" title="">
                                                <i class="glyph-icon icon-pencil mrg5R"></i>
                                                Edit
                                            </a>
                                        </li>
                                        <li>
                                            <a href="view_enrollers-candidates.php" title="">
                                                <i class="glyph-icon icon-user mrg5R"></i>
                                                Candidates
                                            </a>
                                        </li>
                                        <li>
                                            <a href="view_enrollers-groups.php" title="">
                                                <i class="glyph-icon icon-user mrg5R"></i>
                                                Groups
                                            </a>
                                        </li>
                                        <li>
                                            <a href="view_enrollers-purchase.php" title="">
                                                <i class="glyph-icon icon-money mrg5R"></i>
                                                Purchase History
                                            </a>
                                        </li>
                                        <li>
                                            <a href="view_enrollers-courses.php" title="">
                                                <i class="glyph-icon icon-book mrg5R"></i>
                                                Courses
                                            </a>
                                        </li>
                                        <li class="divider"></li>
                                        <li>
                                            <a href="view_enrollers-request.php" class="font-red" title="">
                                                <i class="glyph-icon icon-bell mrg5R"></i>
                                                Requests
                                            </a>
                                        </li>
                                        <li>
                                            <a href="view_enrollers-refunds.php" class="font-blue" title="">
                                                <i class="glyph-icon icon-bank mrg5R"></i>
                                                Refunds
                                            </a>
                                        </li>
                                    </ul>
                                </div></td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Rob</td>
                            <td>Dugdale</td>
                            <td>rdugdale@ameb.edu.au</td>
                            <td>Southern Australia / Northern Territory</td>
                            <td>3000</td>
                            <td>0406551602</td>
                            <td><div class="dropdown">
                                    <a href="#" title="" class="btn btn-default" data-toggle="dropdown" aria-expanded="false">
                                        <i class="glyph-icon icon-cog"></i>
                                        <i class="glyph-icon icon-chevron-down"></i>
                                    </a>
                                    <ul class="dropdown-menu float-right">
                                        <li>
                                            <a href="view_enrollers.php" title="">
                                                <i class="glyph-icon icon-eye mrg5R"></i>
                                                View
                                            </a>
                                        </li>
                                        <li>
                                            <a href="edit_enrollers.php" title="">
                                                <i class="glyph-icon icon-pencil mrg5R"></i>
                                                Edit
                                            </a>
                                        </li>
                                        <li>
                                            <a href="view_enrollers-candidates.php" title="">
                                                <i class="glyph-icon icon-user mrg5R"></i>
                                                Candidates
                                            </a>
                                        </li>
                                        <li>
                                            <a href="view_enrollers-groups.php" title="">
                                                <i class="glyph-icon icon-user mrg5R"></i>
                                                Groups
                                            </a>
                                        </li>
                                        <li>
                                            <a href="view_enrollers-purchase.php" title="">
                                                <i class="glyph-icon icon-money mrg5R"></i>
                                                Purchase History
                                            </a>
                                        </li>
                                        <li>
                                            <a href="view_enrollers-courses.php" title="">
                                                <i class="glyph-icon icon-book mrg5R"></i>
                                                Courses
                                            </a>
                                        </li>
                                        <li class="divider"></li>
                                        <li>
                                            <a href="view_enrollers-request.php" class="font-red" title="">
                                                <i class="glyph-icon icon-bell mrg5R"></i>
                                                Requests
                                            </a>
                                        </li>
                                        <li>
                                            <a href="view_enrollers-refunds.php" class="font-blue" title="">
                                                <i class="glyph-icon icon-bank mrg5R"></i>
                                                Refunds
                                            </a>
                                        </li>
                                    </ul>
                                </div></td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Rob</td>
                            <td>Dugdale</td>
                            <td>rdugdale@ameb.edu.au</td>
                            <td>Southern Australia / Northern Territory</td>
                            <td>3000</td>
                            <td>0406551602</td>
                            <td><div class="dropdown">
                                    <a href="#" title="" class="btn btn-default" data-toggle="dropdown" aria-expanded="false">
                                        <i class="glyph-icon icon-cog"></i>
                                        <i class="glyph-icon icon-chevron-down"></i>
                                    </a>
                                    <ul class="dropdown-menu float-right">
                                        <li>
                                            <a href="view_enrollers.php" title="">
                                                <i class="glyph-icon icon-eye mrg5R"></i>
                                                View
                                            </a>
                                        </li>
                                        <li>
                                            <a href="edit_enrollers.php" title="">
                                                <i class="glyph-icon icon-pencil mrg5R"></i>
                                                Edit
                                            </a>
                                        </li>
                                        <li>
                                            <a href="view_enrollers-candidates.php" title="">
                                                <i class="glyph-icon icon-user mrg5R"></i>
                                                Candidates
                                            </a>
                                        </li>
                                        <li>
                                            <a href="view_enrollers-groups.php" title="">
                                                <i class="glyph-icon icon-user mrg5R"></i>
                                                Groups
                                            </a>
                                        </li>
                                        <li>
                                            <a href="view_enrollers-purchase.php" title="">
                                                <i class="glyph-icon icon-money mrg5R"></i>
                                                Purchase History
                                            </a>
                                        </li>
                                        <li>
                                            <a href="view_enrollers-courses.php" title="">
                                                <i class="glyph-icon icon-book mrg5R"></i>
                                                Courses
                                            </a>
                                        </li>
                                        <li class="divider"></li>
                                        <li>
                                            <a href="view_enrollers-request.php" class="font-red" title="">
                                                <i class="glyph-icon icon-bell mrg5R"></i>
                                                Requests
                                            </a>
                                        </li>
                                        <li>
                                            <a href="view_enrollers-refunds.php" class="font-blue" title="">
                                                <i class="glyph-icon icon-bank mrg5R"></i>
                                                Refunds
                                            </a>
                                        </li>
                                    </ul>
                                </div></td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Rob</td>
                            <td>Dugdale</td>
                            <td>rdugdale@ameb.edu.au</td>
                            <td>Southern Australia / Northern Territory</td>
                            <td>3000</td>
                            <td>0406551602</td>
                            <td><div class="dropdown">
                                    <a href="#" title="" class="btn btn-default" data-toggle="dropdown" aria-expanded="false">
                                        <i class="glyph-icon icon-cog"></i>
                                        <i class="glyph-icon icon-chevron-down"></i>
                                    </a>
                                    <ul class="dropdown-menu float-right">
                                        <li>
                                            <a href="view_enrollers.php" title="">
                                                <i class="glyph-icon icon-eye mrg5R"></i>
                                                View
                                            </a>
                                        </li>
                                        <li>
                                            <a href="edit_enrollers.php" title="">
                                                <i class="glyph-icon icon-pencil mrg5R"></i>
                                                Edit
                                            </a>
                                        </li>
                                        <li>
                                            <a href="view_enrollers-candidates.php" title="">
                                                <i class="glyph-icon icon-user mrg5R"></i>
                                                Candidates
                                            </a>
                                        </li>
                                        <li>
                                            <a href="view_enrollers-groups.php" title="">
                                                <i class="glyph-icon icon-user mrg5R"></i>
                                                Groups
                                            </a>
                                        </li>
                                        <li>
                                            <a href="view_enrollers-purchase.php" title="">
                                                <i class="glyph-icon icon-money mrg5R"></i>
                                                Purchase History
                                            </a>
                                        </li>
                                        <li>
                                            <a href="view_enrollers-courses.php" title="">
                                                <i class="glyph-icon icon-book mrg5R"></i>
                                                Courses
                                            </a>
                                        </li>
                                        <li class="divider"></li>
                                        <li>
                                            <a href="view_enrollers-request.php" class="font-red" title="">
                                                <i class="glyph-icon icon-bell mrg5R"></i>
                                                Requests
                                            </a>
                                        </li>
                                        <li>
                                            <a href="view_enrollers-refunds.php" class="font-blue" title="">
                                                <i class="glyph-icon icon-bank mrg5R"></i>
                                                Refunds
                                            </a>
                                        </li>
                                    </ul>
                                </div></td>
                        </tr>
                        </tbody>
                    </table>
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
@endsection
@section('page-specific-scripts')
                    <script type="text/javascript">
                        /* Data table fixed columns */
                        $(document).ready(function() {
                            var table = $('#datatable-fixedcolumns').DataTable( {
                                scrollY:        "380px",
                                scrollX:        true,
                                scrollCollapse: false,
                                paging:         false
                            } );
                            new $.fn.dataTable.FixedColumns( table );
                        } );
                    </script>
@endsection