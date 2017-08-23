@extends('superadmin.layouts.layouts')
@section('content')
<div id="page-content-wrapper">
    <div id="page-content">

        <div class="container">

            <div id="page-title">
                <h2>Extension</h2>
            </div>

            <div class="panel">
                <div class="panel-body">

                    <table id="datatable-fixedcolumns" class="table table-striped table-bordered">
                        <thead>
                        <tr>
                            <th>S.N.</th>
                            <th>Email</th>
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
                            <td>asdsad@gmail.com</td>
                            <td>Victoria</td>
                            <td>Rockschool </td>
                            <td>123123123</td>
                            <td>sada asdasd</td>
                            <td>10:30PM 10/20/2017</td>
                            <td>11:45PM 11/20/2017</td>
                            <td>Matthew</td>
                            <td>Declined</td>
                            <td><div class="dropdown">
                                    <a href="#" title="" class="btn btn-default" data-toggle="dropdown" aria-expanded="false">
                                        <i class="glyph-icon icon-cog"></i>
                                        <i class="glyph-icon icon-chevron-down"></i>
                                    </a>
                                    <ul class="dropdown-menu float-right">
                                        <li>
                                            <a href="view_extension.php" title="">
                                                <i class="glyph-icon icon-eye mrg5R"></i>
                                                View / Reply
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" title="">
                                                <i class="glyph-icon icon-close mrg5R"></i>
                                                Cancel
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" title="">
                                                <i class="glyph-icon icon-money mrg5R"></i>
                                                Refunded
                                            </a>
                                        </li>
                                        <li class="divider"></li>
                                        <li>
                                            <a href="#" title="">
                                                <i class="glyph-icon icon-business mrg5R"></i>
                                                Request to State
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" title="" class="font-red">
                                                <i class="glyph-icon icon-trash mrg5R"></i>
                                                Delete
                                            </a>
                                        </li>
                                    </ul>
                                </div></td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>asdsad@gmail.com</td>
                            <td>Queensland</td>
                            <td>Rockschool </td>
                            <td>123123123</td>
                            <td>sada asdasd</td>
                            <td>10:30PM 10/20/2017</td>
                            <td>11:45PM 11/20/2017</td>
                            <td>Matthew</td>
                            <td>State Approved</td>
                            <td><div class="dropdown">
                                    <a href="#" title="" class="btn btn-default" data-toggle="dropdown" aria-expanded="false">
                                        <i class="glyph-icon icon-cog"></i>
                                        <i class="glyph-icon icon-chevron-down"></i>
                                    </a>
                                    <ul class="dropdown-menu float-right">
                                        <li>
                                            <a href="view_extension.php" title="">
                                                <i class="glyph-icon icon-eye mrg5R"></i>
                                                View / Reply
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" title="">
                                                <i class="glyph-icon icon-close mrg5R"></i>
                                                Cancel
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" title="">
                                                <i class="glyph-icon icon-money mrg5R"></i>
                                                Refunded
                                            </a>
                                        </li>
                                        <li class="divider"></li>
                                        <li>
                                            <a href="#" title="">
                                                <i class="glyph-icon icon-business mrg5R"></i>
                                                Request to State
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" title="" class="font-red">
                                                <i class="glyph-icon icon-trash mrg5R"></i>
                                                Delete
                                            </a>
                                        </li>
                                    </ul>
                                </div></td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>asdsad@gmail.com</td>
                            <td>NSW</td>
                            <td>Rockschool </td>
                            <td>123123123</td>
                            <td>sada asdasd</td>
                            <td>10:30PM 10/20/2017</td>
                            <td>11:45PM 11/20/2017</td>
                            <td>Matthew</td>
                            <td>Approval Requested</td>
                            <td><div class="dropdown">
                                    <a href="#" title="" class="btn btn-default" data-toggle="dropdown" aria-expanded="false">
                                        <i class="glyph-icon icon-cog"></i>
                                        <i class="glyph-icon icon-chevron-down"></i>
                                    </a>
                                    <ul class="dropdown-menu float-right">
                                        <li>
                                            <a href="view_extension.php" title="">
                                                <i class="glyph-icon icon-eye mrg5R"></i>
                                                View / Reply
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" title="">
                                                <i class="glyph-icon icon-close mrg5R"></i>
                                                Cancel
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" title="">
                                                <i class="glyph-icon icon-money mrg5R"></i>
                                                Refunded
                                            </a>
                                        </li>
                                        <li class="divider"></li>
                                        <li>
                                            <a href="#" title="">
                                                <i class="glyph-icon icon-business mrg5R"></i>
                                                Request to State
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" title="" class="font-red">
                                                <i class="glyph-icon icon-trash mrg5R"></i>
                                                Delete
                                            </a>
                                        </li>
                                    </ul>
                                </div></td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>asdsad@gmail.com</td>
                            <td>Victoria</td>
                            <td>Rockschool </td>
                            <td>123123123</td>
                            <td>sada asdasd</td>
                            <td>10:30PM 10/20/2017</td>
                            <td>11:45PM 11/20/2017</td>
                            <td>Matthew</td>
                            <td>Extended</td>
                            <td><div class="dropdown">
                                    <a href="#" title="" class="btn btn-default" data-toggle="dropdown" aria-expanded="false">
                                        <i class="glyph-icon icon-cog"></i>
                                        <i class="glyph-icon icon-chevron-down"></i>
                                    </a>
                                    <ul class="dropdown-menu float-right">
                                        <li>
                                            <a href="view_extension.php" title="">
                                                <i class="glyph-icon icon-eye mrg5R"></i>
                                                View / Reply
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" title="">
                                                <i class="glyph-icon icon-close mrg5R"></i>
                                                Cancel
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" title="">
                                                <i class="glyph-icon icon-money mrg5R"></i>
                                                Refunded
                                            </a>
                                        </li>
                                        <li class="divider"></li>
                                        <li>
                                            <a href="#" title="">
                                                <i class="glyph-icon icon-business mrg5R"></i>
                                                Request to State
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" title="" class="font-red">
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