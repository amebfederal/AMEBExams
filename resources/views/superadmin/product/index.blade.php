@extends('superadmin.layouts.layouts')
@section('content')
<div id="page-content-wrapper">
    <div id="page-content">

        <div class="container">

            <div id="page-title">
                <h2>Manage Product</h2>
                <p></p>
            </div>

            <div class="panel">
                <div class="panel-body">
                <a class="btn btn-sm btn-success add-button" href="{{URL::route('superadmin.product.addproductstep2')}}">
                <i class="fa fa-aw fc-agenda-axis"></i> Add Product</a>
                    
                    <table id="datatable-fixedcolumns" class="table table-striped table-bordered">
                        <thead>
                        <tr>
                            <th>S.N.</th>
                            <th>Product Name</th>
                            <th>Subject Code</th>
                            <th>Grade</th>
                            <th>Category</th>
                            <th>Price</th>
                            <th>Status</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>1</td>
                            <td>Online Music Exam - Grade 1</td>
                            <td>5658745895</td>
                            <td>1</td>
                            <td>Musicianship</td>
                            <td>89.95</td>
                            <td>Active</td>
                        </tr>
                         <tr>
                            <td>2</td>
                            <td>Online Music Exam - Grade 2</td>
                            <td>5658745895</td>
                            <td>1</td>
                            <td>Theory of Music</td>
                            <td>89.95</td>
                            <td>Active</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Online Music Exam - Grade 3</td>
                            <td>5658745895</td>
                            <td>1</td>
                            <td>Music Craft</td>
                            <td>89.95</td>
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
