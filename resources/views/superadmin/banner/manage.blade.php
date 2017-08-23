@extends('superadmin.layouts.layouts')
@section('content')
<div id="page-content-wrapper">
    <div id="page-content">

        <div class="container">

            <div id="page-title">
                <h2>Manage Banners</h2>
                <p>Banner on the website</p>
            </div>

            <div class="panel">
                <div class="panel-body">
                    <table id="datatable-fixedcolumns" class="table table-striped table-bordered">
                        <thead>
                        <tr>
                            <th>Title</th>
                            <th>Thumbnail</th>
                            <th>Order</th>
                            <th>Status</th>
                            <th>Expires</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>My Tempo Banner</td>
                            <td><img src="" width="50px" height="50px" /></td>
                            <td>1</td>
                            <td>Active</td>
                            <td>10/20/2018</td>
                            <td><a href="#"><i class="glyph-icon icon-edit"></i>Edit</a> <a href="#"><i class="glyph-icon icon-trash"></i> Delete</a></td>
                        </tr>
                        <tr>
                            <td>My Tempo Banner</td>
                            <td><img src="" width="50px" height="50px" /></td>
                            <td>2</td>
                            <td>Active</td>
                            <td>10/20/2018</td>
                            <td><a href="#"><i class="glyph-icon icon-edit"></i>Edit</a> <a href="#"><i class="glyph-icon icon-trash"></i> Delete</a></td>
                        </tr>
                        <tr>
                            <td>My Tempo Banner</td>
                            <td><img src="" width="50px" height="50px" /></td>
                            <td>3</td>
                            <td>Active</td>
                            <td>10/20/2018</td>
                            <td><a href="#"><i class="glyph-icon icon-edit"></i>Edit</a> <a href="#"><i class="glyph-icon icon-trash"></i> Delete</a></td>
                        </tr>
                        <tr>
                            <td>My Tempo Banner</td>
                            <td><img src="" width="50px" height="50px" /></td>
                            <td>5</td>
                            <td>Active</td>
                            <td>10/20/2018</td>
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
