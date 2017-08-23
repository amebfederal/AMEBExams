@extends('superadmin.layouts.layouts')
@section('content')
<div id="page-content-wrapper">
    <div id="page-content">

        <div class="container">

            <div id="page-title">
                <h2>Manage Page</h2>
                <p>Pages on the website</p>
            </div>

            <div class="panel">
                <div class="panel-body">
                    <table id="datatable-fixedcolumns" class="table table-striped table-bordered">
                        <thead>
                        <tr>
                            <th>Title</th>
                            <th>slug</th>
                            <th>Visibility</th>
                            <th>Status</th>
                            <th>Published Date</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>Home</td>
                            <td>/</td>
                            <td>Visible</td>
                            <td>Active</td>
                            <td>10/20/2017</td>
                            <td><a href="#"><i class="glyph-icon icon-edit"></i>Edit</a> <a href="#"><i class="glyph-icon icon-trash"></i> Delete</a></td>
                        </tr>
                        <tr>
                            <td>About</td>
                            <td>/about</td>
                            <td>Visible</td>
                            <td>Active</td>
                            <td>10/20/2017</td>
                            <td><a href="#"><i class="glyph-icon icon-edit"></i>Edit</a> <a href="#"><i class="glyph-icon icon-trash"></i> Delete</a></td>
                        </tr>
                        <tr>
                            <td>Contact</td>
                            <td>/contact</td>
                            <td>Visible</td>
                            <td>Active</td>
                            <td>10/20/2017</td>
                            <td><a href="#"><i class="glyph-icon icon-edit"></i>Edit</a> <a href="#"><i class="glyph-icon icon-trash"></i> Delete</a></td>
                        </tr>
                        <tr>
                            <td>FAQ</td>
                            <td>/faq</td>
                            <td>Visible</td>
                            <td>Active</td>
                            <td>10/20/2017</td>
                            <td><a href="#"><i class="glyph-icon icon-edit"></i>Edit</a> <a href="#"><i class="glyph-icon icon-trash"></i> Delete</a></td>
                        </tr>
                        <tr>
                            <td>How to use website</td>
                            <td>/how-to-use-website</td>
                            <td>Visible</td>
                            <td>Active</td>
                            <td>10/20/2017</td>
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
