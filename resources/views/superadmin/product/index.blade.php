@extends('superadmin.layouts.layouts')
@section('content')
<div id="page-content-wrapper">
    <div id="page-content">

        <div class="container">

            <div id="page-title">
                <h2>Manage Product</h2>
                <p>Products available on the website</p>
            </div>

            <div class="panel">
                <div class="panel-body">
                    <table id="datatable-fixedcolumns" class="table table-striped table-bordered">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Product Name</th>
                            <th>SKU</th>
                            <th>Type</th>
                            <th>Category</th>
                            <th>Status</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>12</td>
                            <td>Grade 1 Performance</td>
                            <td>614564551</td>
                            <td>Single</td>
                            <td>Online Music Theory</td>
                            <td>Active</td>
                        </tr>
                        <tr>
                            <td>12</td>
                            <td>Grade 1 Performance</td>
                            <td>614564551</td>
                            <td>Single</td>
                            <td>Online Music Theory</td>
                            <td>Active</td>
                        </tr>
                        <tr>
                            <td>12</td>
                            <td>Grade 1 Performance</td>
                            <td>614564551</td>
                            <td>Single</td>
                            <td>Online Music Theory</td>
                            <td>Active</td>
                        </tr>
                        <tr>
                            <td>12</td>
                            <td>Grade 1 Performance</td>
                            <td>614564551</td>
                            <td>Single</td>
                            <td>Online Music Theory</td>
                            <td>Active</td>
                        </tr>    <tr>
                            <td>12</td>
                            <td>Grade 1 Performance</td>
                            <td>614564551</td>
                            <td>Single</td>
                            <td>Online Music Theory</td>
                            <td>Active</td>
                        </tr>    <tr>
                            <td>12</td>
                            <td>Grade 1 Performance</td>
                            <td>614564551</td>
                            <td>Single</td>
                            <td>Online Music Theory</td>
                            <td>Active</td>
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
