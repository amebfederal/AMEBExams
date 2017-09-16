@extends('layouts.super-admin')

@section('content')

    <div id="page-title">
        <h2>Grades</h2>

        <p>Sub Category {{ isset($subCategory->name) ? '- '.$subCategory->name : '' }}</p>
    </div>

    <div class="panel">
        <div class="panel-body">

            <a class="btn btn-sm btn-success add-button"
               href="{{ route('sub-category.grade.create', isset($subCategory->slug) ? $subCategory->slug : '999-test-subcat') }}">
                <i class="fa fa-aw fc-agenda-axis"></i> Add Grade
                {{ isset($subCategory->name) ? '- '.$subCategory->name : '' }}
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
                @if($grades->count() > 0)
                    @foreach($grades as $k => $grade)
                        <tr>
                            <td>{{ ++$k }}</td>
                            <td>{{ $grade->title }}</td>
                            <td>{{ $grade->status_text }}</td>
                            <td>{{ $grade->code }}</td>
                            <td>
                                <a href="{{ route('sub-category.grade.edit', [$grade->sub_category->slug,$grade->id]) }}">Edit</a>
                                ||
                                {!! delete_form(route('sub-category.grade.destroy',
                                [$grade->sub_category->slug,$grade->id]))
                                !!}
                            </td>
                        </tr>
                    @endforeach
                @else
                    <tr>
                        <td colspan="5">No data found.</td>
                    </tr>
                @endif
                </tbody>
            </table>

            <a href="{{ route('category.index') }}">
                <i class="icon-reply"></i> Go to Categories
            </a>
            @if(!empty($subCategory))
                <a href="{{ route('category.sub-category.index', $subCategory->slug) }}">
                    <i class="icon-reply"></i> Go to Sub Categories
                </a>
            @else
                <a href="{{ url('super-admin/sub-category') }}">
                    <i class="icon-reply"></i> Go to Sub Categories
                </a>
            @endif
        </div>
    </div>
@stop
