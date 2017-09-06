@extends('layouts.super-admin')

@section('content')

    <div id="page-title">
        <h2>Grades</h2>

        <p>For Sub Category - {{ $subCategory->name }}</p>
    </div>

    <div class="panel">
        <div class="panel-body">

            <a class="btn btn-sm btn-success add-button" href="{{ route('sub-category.grade.create', $subCategory->slug) }}">
                <i class="fa fa-aw fc-agenda-axis"></i> Add Grade - {{ $subCategory->name }}
            </a>

            <table id="datatable-fixedcolumns" class="table table-striped table-bordered">
                <thead>
                <tr>
                    <th>SN</th>
                    <th>Title</th>
                    <th>Status</th>
                    <th>Code</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach($grades as $k => $grade)
                    <tr>
                        <td>{{ ++$k }}</td>
                        <td>{{ $grade->title }}</td>
                        <td>{{ $grade->status_text }}</td>
                        <td>{{ $grade->code }}</td>
                        <td>
                            <a href="{{ route('sub-category.grade.edit', [$subCategory->slug,$grade->id]) }}">Edit</a>
                            ||
                            {!! delete_form(route('sub-category.grade.destroy', [$subCategory->slug,$grade->id])) !!}
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>

            <a href="{{ route('category.index') }}">
                <i class="icon-reply"></i> Go to Categories
            </a>

            <a href="{{ route('category.sub-category.index', $subCategory->category->slug) }}">
                <i class="icon-reply"></i> Go to Sub Categories
            </a>
        </div>
    </div>
@stop
