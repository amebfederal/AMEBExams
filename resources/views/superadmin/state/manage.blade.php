@extends('superadmin.layouts.layouts')
@section('content')
<div id="page-content-wrapper">
    <div id="page-content">

        <div class="container">

            <div id="page-title">
                <h2>Manage State</h2>
                <p>Add states</p>
            </div>

            <div class="panel">
                <div class="panel-body">

                    <table id="datatable-fixedcolumns" class="table table-striped table-bordered">
                        <thead>
                        <tr>
                            <th>State Name</th>
                            <th>Short Name</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>Victoria</td>
                            <td>VIC</td>
                            <td>Active</td>
                            <td><a href="#"><i class="glyph-icon icon-edit"></i>Edit</a> <a href="#"><i class="glyph-icon icon-trash"></i> Delete</a></td>
                        </tr>
                        <tr>
                            <td>New South Wales</td>
                            <td>NSW</td>
                            <td>Active</td>
                            <td><a href="#"><i class="glyph-icon icon-edit"></i>Edit</a> <a href="#"><i class="glyph-icon icon-trash"></i> Delete</a></td>
                        </tr>
                        <tr>
                            <td>Queensland</td>
                            <td>QLD</td>
                            <td>Active</td>
                            <td><a href="#"><i class="glyph-icon icon-edit"></i>Edit</a> <a href="#"><i class="glyph-icon icon-trash"></i> Delete</a></td>
                        </tr>
                        <tr>
                            <td>Tasmania</td>
                            <td>TAS</td>
                            <td>Active</td>
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
                    @endsection
