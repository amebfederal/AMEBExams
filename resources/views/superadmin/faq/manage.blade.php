@extends('superadmin.layouts.layouts')
@section('content')
<div id="page-content-wrapper">
    <div id="page-content">

        <div class="container">

            <div id="page-title">
                <h2>Manage FAQ</h2>
                <p>FAQ on the website</p>
            </div>

            <div class="panel">
                <div class="panel-body">
                    <table id="datatable-fixedcolumns" class="table table-striped table-bordered">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Category</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>1</td>
                            <td>Why Online Exam?</td>
                            <td>sad asd asd ....</td>
                            <td>General</td>
                            <td>Active</td>
                            <td><a href="#"><i class="glyph-icon icon-edit"></i>Edit</a> <a href="#"><i class="glyph-icon icon-trash"></i> Delete</a></td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Why AMEB?</td>
                            <td>sad asd asd ....</td>
                            <td>General</td>
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
