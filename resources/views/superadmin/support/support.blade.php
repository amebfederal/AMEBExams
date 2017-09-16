@extends('superadmin.layouts.layouts')
@section('content')
<div id="page-content-wrapper">
    <div id="page-content">

        <div class="container">

            <div id="page-title">
                <h2>Request/Support</h2>
            </div>

            <div class="panel">
                <div class="panel-body">
                    <table id="datatable-fixedcolumns" class="table table-striped table-bordered">
                        <thead>
                        <tr>
                            <th>S.N.</th>
                            <th>Email</th>
                            <th>Account Holder Name</th>
                            <th>State</th>
                            <th>Exam Name</th>
                            <th>Candidate ID</th>
                            <th>Candidate Name</th>
                            <th>Created on</th>
                            <th>Last Replied</th>
                            <th>Processed by</th>
                            <th>Status</th>
                            <th> </th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>1</td>
                            <td>asda@gamil.com</td>
                            <td>sada asdasdas</td>
                            <td>Victoria </td>
                            <td>Music theory grade 1</td>
                            <td>13123123</td>
                            <td>John Smith</td>
                            <td>10:30PM 10/20/2017</td>
                            <td>11:45PM 11/20/2017</td>
                            <td>Matthew</td>
                            <td>Closed</td>
                            <td><div class="dropdown">
                                    <a href="#" title="" class="btn btn-default" data-toggle="dropdown" aria-expanded="false">
                                        <i class="glyph-icon icon-cog"></i>
                                        <i class="glyph-icon icon-chevron-down"></i>
                                    </a>
                                    <ul class="dropdown-menu float-right">
                                        <li>
                                            <a href="view_support.php" title="">
                                                <i class="glyph-icon icon-eye mrg5R"></i>
                                                View / Reply
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" title="">
                                                <i class="glyph-icon icon-close mrg5R"></i>
                                                Close
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" title="">
                                                <i class="glyph-icon icon-refresh mrg5R"></i>
                                                Re-Open
                                            </a>
                                        </li>
                                        <li>
                                            <a href="view_enrollers-courses.php" title="">
                                                <i class="glyph-icon icon-check mrg5R"></i>
                                                Resolved
                                            </a>
                                        </li>
                                        <li class="divider"></li>
                                        <li>
                                            <a href="view_enrollers-courses.php" title="" class="font-red">
                                                <i class="glyph-icon icon-trash mrg5R"></i>
                                                Delete
                                            </a>
                                        </li>
                                    </ul>
                                </div></td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>asda@gamil.com</td>
                            <td>sada asdasdas</td>
                            <td>Victoria </td>
                            <td>Music theory grade 1</td>
                            <td>13123123</td>
                            <td>John Smith</td>
                            <td>10:30PM 10/20/2017</td>
                            <td>11:45PM 11/20/2017</td>
                            <td>Matthew</td>
                            <td>Updated</td>
                            <td><div class="dropdown">
                                    <a href="#" title="" class="btn btn-default" data-toggle="dropdown" aria-expanded="false">
                                        <i class="glyph-icon icon-cog"></i>
                                        <i class="glyph-icon icon-chevron-down"></i>
                                    </a>
                                    <ul class="dropdown-menu float-right">
                                        <li>
                                            <a href="view_support.php" title="">
                                                <i class="glyph-icon icon-eye mrg5R"></i>
                                                View / Reply
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" title="">
                                                <i class="glyph-icon icon-close mrg5R"></i>
                                                Close
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" title="">
                                                <i class="glyph-icon icon-refresh mrg5R"></i>
                                                Re-Open
                                            </a>
                                        </li>
                                        <li>
                                            <a href="view_enrollers-courses.php" title="">
                                                <i class="glyph-icon icon-check mrg5R"></i>
                                                Resolved
                                            </a>
                                        </li>
                                        <li class="divider"></li>
                                        <li>
                                            <a href="view_enrollers-courses.php" title="" class="font-red">
                                                <i class="glyph-icon icon-trash mrg5R"></i>
                                                Delete
                                            </a>
                                        </li>
                                    </ul>
                                </div></td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>asda@gamil.com</td>
                            <td>sada asdasdas</td>
                            <td>Victoria </td>
                            <td>Music theory grade 1</td>
                            <td>13123123</td>
                            <td>John Smith</td>
                            <td>10:30PM 10/20/2017</td>
                            <td>11:45PM 11/20/2017</td>
                            <td>Matthew</td>
                            <td>Pending</td>
                            <td><div class="dropdown">
                                    <a href="#" title="" class="btn btn-default" data-toggle="dropdown" aria-expanded="false">
                                        <i class="glyph-icon icon-cog"></i>
                                        <i class="glyph-icon icon-chevron-down"></i>
                                    </a>
                                    <ul class="dropdown-menu float-right">
                                        <li>
                                            <a href="view_support.php" title="">
                                                <i class="glyph-icon icon-eye mrg5R"></i>
                                                View / Reply
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" title="">
                                                <i class="glyph-icon icon-close mrg5R"></i>
                                                Close
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" title="">
                                                <i class="glyph-icon icon-refresh mrg5R"></i>
                                                Re-Open
                                            </a>
                                        </li>
                                        <li>
                                            <a href="view_enrollers-courses.php" title="">
                                                <i class="glyph-icon icon-check mrg5R"></i>
                                                Resolved
                                            </a>
                                        </li>
                                        <li class="divider"></li>
                                        <li>
                                            <a href="view_enrollers-courses.php" title="" class="font-red">
                                                <i class="glyph-icon icon-trash mrg5R"></i>
                                                Delete
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
