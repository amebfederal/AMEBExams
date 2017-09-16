@extends('superadmin.layouts.layouts')
@section('content')
<div id="page-content-wrapper">
    <div id="page-content">

        <div class="container">

            <div id="page-title">
                <h2>Manage Candidate </h2>
            </div>

            <div class="panel">
                <div class="panel-body">
                A search box would be good to filter the data
                               <br/><br/>
                    <table id="datatable" class="table table-striped table-bordered">
                        <thead>
                        <tr>
                            <th>S.N.</th>
                            <th>Candidate Id</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Date of Birth</th>
                            <th>Exam Title</th>
                            <th>Category</th>
                            <th>Grade</th>
                            <th>Exam Type</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>1</td>
                            <td>VIC245785698</td>
                            <td>Mohammad</td>
                            <td>Sarfaraz</td>
                            <td>25/25/2548</td>
                            <td>Musician - Grade 1</td>
                            <td>Theory of Music</td>
                            <td>Grade 1</td>
                            <td>Individual</td>
                            <td><div class="dropdown">
                                    <a href="#" title="" class="btn btn-default" data-toggle="dropdown" aria-expanded="false">
                                        <i class="glyph-icon icon-cog"></i>
                                        <i class="glyph-icon icon-chevron-down"></i>
                                    </a>
                                    <ul class="dropdown-menu float-right">
                                        <li>
                                            <a href="{{ url('superadmin/canidate/edit/')}}" title="">
                                                <i class="glyph-icon icon-pencil mrg5R"></i>
                                                Edit Candidate
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ url('superadmin/candidate/editexam/')}}" title="">
                                                <i class="glyph-icon icon-pencil mrg5R"></i>
                                                Edit Exam
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ url('superadmin/candidate/viewresult')}}" title="">
                                                <i class="glyph-icon icon-file mrg5R"></i>
                                                View Result
                                            </a>
                                        </li>
                                        
                                    </ul>
                                </div></td>
                        <tr>
                            <td>2</td>
                            <td>NSW245785698</td>
                            <td>Mohammad</td>
                            <td>Sarfaraz</td>
                            <td>25/25/2548</td>
                            <td>Musician - Grade 1</td>
                            <td>Theory of Music</td>
                            <td>Grade 1</td>
                            <td>Class</td>
                            <td><div class="dropdown">
                                    <a href="#" title="" class="btn btn-default" data-toggle="dropdown" aria-expanded="false">
                                        <i class="glyph-icon icon-cog"></i>
                                        <i class="glyph-icon icon-chevron-down"></i>
                                    </a>
                                    <ul class="dropdown-menu float-right">
                                        <li>
                                            <a href="{{ url('superadmin/canidate/edit/')}}" title="">
                                                <i class="glyph-icon icon-pencil mrg5R"></i>
                                                Edit Candidate
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ url('superadmin/candidate/editexam/')}}" title="">
                                                <i class="glyph-icon icon-pencil mrg5R"></i>
                                                Edit Exam
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ url('superadmin/candidate/viewresult/')}}" title="">
                                                <i class="glyph-icon icon-file mrg5R"></i>
                                                View Result
                                            </a>
                                        </li>
                                        
                                    </ul>
                                </div></td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>TAS245785698</td>
                            <td>Mohammad</td>
                            <td>Sarfaraz</td>
                            <td>25/25/2548</td>
                            <td>Musician - Grade 1</td>
                            <td>Theory of Music</td>
                            <td>Grade 1</td>
                            <td>Individual</td>
                            <td><div class="dropdown">
                                    <a href="#" title="" class="btn btn-default" data-toggle="dropdown" aria-expanded="false">
                                        <i class="glyph-icon icon-cog"></i>
                                        <i class="glyph-icon icon-chevron-down"></i>
                                    </a>
                                    <ul class="dropdown-menu float-right">
                                        <li>
                                            <a href="{{ url('superadmin/canidate/edit/')}}" title="">
                                                <i class="glyph-icon icon-pencil mrg5R"></i>
                                                Edit Candidate
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ url('superadmin/candidate/editexam/')}}" title="">
                                                <i class="glyph-icon icon-pencil mrg5R"></i>
                                                Edit Exam
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ url('superadmin/candidate/viewresult/')}}" title="">
                                                <i class="glyph-icon icon-file mrg5R"></i>
                                                View Result
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