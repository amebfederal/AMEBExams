@extends('layouts.super-admin')
@section('content')
    <div id="page-title">
        <h2>Manage Page</h2>
        <p>Pages on the website</p>
    </div>

    <div class="panel">
        <div class="panel-body">

            <a class="btn btn-sm btn-success add-button" href="{{ route('page.create') }}">
                <i class="fa fa-aw fc-agenda-axis"></i> Add CMS Page Here
            </a>

            <table id="datatable-fixedcolumns" class="table table-striped table-bordered">
                <thead>
                <tr>
                    <th>SN</th>
                    <th>Title</th>
                    <th>Menu Position</th>
                    <th>Visibility </th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($page as $k => $pages)
                    <tr>
                        <td>{{ ++$k }}</td>
                        <td>{{ $state->name }}</td>
                        <td>{{$state->prefix }}</td>
                        <td>{{$state->notification_email }}</td>
                        <td>{{$state->phone }}</td>
                        <td>
                            <a href="{{ route('state.edit', [$state->id]) }}">Edit</a>
                            ||
                            {!! delete_form(route('state.destroy', [$state->id]))
                            !!}
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <div class="col-md-12 text-right">
                {!! $states->render() !!}
            </div>
        </div>
    </div>
@stop

