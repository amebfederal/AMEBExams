@extends('layouts.super-admin')
@section('content')
    <div id="page-title">
        <h2>Manage Page</h2>
        <p>Pages on the website</p>
    </div>

    <div class="panel">
        <div class="panel-body">

            <a class="btn btn-sm btn-success add-button" href="{{ route('parent-page.create') }}">
                <i class="fa fa-aw fc-agenda-axis"></i> Add Parent Page Here
            </a>

            <table id="datatable-fixedcolumns" class="table table-striped table-bordered">
                <thead>
                <tr>
                    <th>SN</th>
                    <th>Title</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($p_pages as $k => $p_page)
                    <tr>
                        <td>{{ ++$k }}</td>
                        <td>{{$p_page->title }}</td>
                        <td>{{$p_page->status }}</td>
                        <td>
                            <a href="{{ route('parent-page.edit', [$p_page->id]) }}">Edit</a>
                            ||
                            {!! delete_form(route('parent-page.destroy', [$p_page->id]))
                            !!}
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <div class="col-md-12 text-right">
                {!! $p_pages->render() !!}
            </div>
        </div>
    </div>
@stop

