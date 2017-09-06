@extends('layouts.super-admin')
@section('content')
    <div id="page-title">
        <h2>Manage State</h2>

        <p>Add states</p>
    </div>

    <div class="panel">
        <div class="panel-body">

            <a class="btn btn-sm btn-success add-button" href="{{ route('state.create') }}">
                <i class="fa fa-aw fc-agenda-axis"></i> Add State Here
            </a>

            <table id="datatable-fixedcolumns" class="table table-striped table-bordered">
                <thead>
                <tr>
                    <th>SN</th>
                    <th>State Name</th>
                    <th>Short Name</th>
                    <th>Notification Email</th>
                    <th>Phone</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($states as $k => $state)
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

