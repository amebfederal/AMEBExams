@extends('layouts.super-admin')

@section('content')

    <div id="page-title">
        <h2>Product Categories</h2>

        <p>Products categories on the website</p>
    </div>

    <div class="panel">
        <div class="panel-body">
        <a href="{{url('super-admin/category/create')}}" title="Add new exam" class="btn btn-sm btn-success add-button"><span>Add Category</span></a>
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
                        <td><a href="{{ route('category.sub-category.index', $category->slug) }}">{{ $category->name }}</a></td>
                        <td><img src="{{ asset($category->thumbnail_path) }}" height="60px" /></td>
                        <td>{{ $category->status_text }}</td>
                        <td>{{ $category->visibility_text }}</td>
                        <td>{{ $category->availability_text }}</td>
                        <td>
                            <a href="{{ route('category.edit', $category->id) }}">Edit</a>
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
