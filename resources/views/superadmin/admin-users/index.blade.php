@extends('layouts.super-admin')
@section('content')


            <div id="page-title">
                <h2>Manage State</h2>
                <p>Add states</p>
            </div>

            <div class="panel">
                <div class="panel-body">

                    <table id="datatable-fixedcolumns" class="table table-striped table-bordered">
                        <thead>
                        <tr>
                            <th>Full Name</th>
                            <th>Username</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Role</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>Chris</td>
                            <td>chrs</td>
                            <td>chris@ameb.edu.au</td>
                            <th>123123</th>
                            <th>Customer Support</th>
                            <td><a href="#"><i class="glyph-icon icon-edit"></i>Edit</a> <a href="#"><i class="glyph-icon icon-trash"></i> Delete</a></td>
                        </tr>
                        <tr>
                            <td>Matthew</td>
                            <td>matthew</td>
                            <td>matthew@ameb.edu.au</td>
                            <th>123123</th>
                            <th>Supervisor</th>
                            <td><a href="#"><i class="glyph-icon icon-edit"></i>Edit</a> <a href="#"><i class="glyph-icon icon-trash"></i> Delete</a></td>
                        </tr>
                        <tr>
                            <td>Jo</td>
                            <td>jo</td>
                            <td>jo@ameb.edu.au</td>
                            <th>123123</th>
                            <th>Customer Support</th>
                            <td><a href="#"><i class="glyph-icon icon-edit"></i>Edit</a> <a href="#"><i class="glyph-icon icon-trash"></i> Delete</a></td>
                        </tr>
                        <tr>
                            <td>Mohammad Sarfaraz</td>
                            <td>sarfaraz</td>
                            <td>sarfaraz@ameb.edu.au</td>
                            <th>123123</th>
                            <th>Administrator</th>
                            <td><a href="#"><i class="glyph-icon icon-edit"></i>Edit</a> <a href="#"><i class="glyph-icon icon-trash"></i> Delete</a></td>
                        </tr>
                        <tr>
                            <td>Zak</td>
                            <td>zak</td>
                            <td>zak@ameb.edu.au</td>
                            <th>123123</th>
                            <th>Finance/Accounts</th>
                            <td><a href="#"><i class="glyph-icon icon-edit"></i>Edit</a> <a href="#"><i class="glyph-icon icon-trash"></i> Delete</a></td>
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

                </div>
            </div>
@endsection
