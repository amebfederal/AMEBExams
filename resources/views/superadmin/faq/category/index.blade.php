@extends('layouts.super-admin')

@section('content')

    <div id="page-title">
        <h2>FAQ Categories</h2>


    </div>

    <div class="panel">
        <div class="panel-body">

            <a class="btn btn-sm btn-success add-button"
               href="{{ route('faq-category.create') }}">
                <i class="fa fa-aw fc-agenda-axis"></i> Add FAQ-Category

            </a>

            <table id="datatable-fixedcolumns" class="table table-striped table-bordered">
                <thead>
                <tr>
                    <th>SN</th>
                    <th>Title</th>
                    <th>Discription</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                @if($categories->count() > 0)
                    @foreach($categories as $k => $category)
                        <tr>
                            <td>{{ ++$k }}</td>
                            <td>{{ $category->title }}</td>
                            <td>{{$category->description}}</td>
                            <td>{{ $category->status_text }}</td>

                            <td>
                                <a href="{{ route('faq-category.edit', [$category->id]) }}">Edit</a>
                                ||
                                {!! delete_form(route('faq-category.destroy',
                                [$category->id]))
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


        </div>
    </div>
@stop
