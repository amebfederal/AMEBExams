@extends('layouts.super-admin')

@section('content')

    <div id="page-title">
        <h2>Sub Categories</h2>

        <p>Sub Categories for - {{ $category->name }}</p>
    </div>

    <div class="panel">
        <div class="panel-body">

            <a class="btn btn-sm btn-success add-button" href="{{ route('category.sub-category.create', $category->slug) }}">
                <i class="fa fa-aw fc-agenda-axis"></i> Add Sub Category - {{ $category->name }}
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
                @foreach($subCategories as $k => $subCategory)
                    <tr>
                        <td>{{ ++$k }}</td>
                        <td>
                            <a href="{{ route('sub-category.grade.index', $subCategory->slug) }}">
                                {{ $subCategory->name }}
                            </a>
                        </td>
                        <td><img src="{{ asset($subCategory->thumbnail_path) }}" height="60px"/></td>
                        <td>{{ $subCategory->status_text }}</td>
                        <td>{{ $subCategory->visibility_text }}</td>
                        <td>{{ $subCategory->availability_text }}</td>
                        <td>
                            <a href="{{ route('category.sub-category.edit', [$category->slug,$subCategory->id]) }}">Edit</a>
                            ||
                            {!! delete_form(route('category.sub-category.destroy', [$category->slug,$subCategory->id]))
                            !!}
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>

            <a href="{{ route('category.index') }}">
                <i class="icon-reply"></i> Go to Categories
            </a>
        </div>
    </div>
@stop
