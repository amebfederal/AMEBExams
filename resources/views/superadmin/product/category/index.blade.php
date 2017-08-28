@extends('layouts.super-admin')

@section('content')

    <div id="page-title">
        <h2>Product Categories</h2>

        <p>Products categories on the website</p>
    </div>

    <div class="panel">
        <div class="panel-body">

            <a class="btn btn-sm btn-success" href="{{ route('product-category.create') }}">
                <i class="fa fa-aw fc-agenda-axis"></i> Add Product Category
            </a>

            <table id="datatable-fixedcolumns" class="table table-striped table-bordered">
                <thead>
                <tr>
                    <th>SN</th>
                    <th>Name</th>
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
                </tbody>
            </table>
            <div class="col-md-12 text-right">

            </div>
        </div>
    </div>
@stop
