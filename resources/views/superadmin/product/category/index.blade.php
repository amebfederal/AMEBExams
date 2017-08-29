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
                    <th>Image</th>
                    <th>Status</th>
                    <th>Visibility</th>
                    <th>Availability</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach($categories as $k => $category)
                    <tr>
                        <td>{{ ++$k }}</td>
                        <td>{{ $category->name }}</td>
                        <td><img src="{{ asset($category->thumbnail_path) }}" height="60px" /></td>
                        <td>{{ $category->status_text }}</td>
                        <td>{{ $category->visibility_text }}</td>
                        <td>{{ $category->availability_text }}</td>
                        <td>
                            <a href="{{ route('product-category.edit', $category->id) }}">Edit</a>
                            ||
                            {!! delete_form(route('product-category.destroy', $category->id)) !!}
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <div class="col-md-12 text-right">
                {!! $categories->render() !!}
            </div>
        </div>
    </div>
@stop
