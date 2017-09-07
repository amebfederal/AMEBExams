@extends('layouts.super-admin')

@section('content')

    <div id="page-title">
        <h2>Session Management</h2>

        <p></p>
    </div>

    <div class="panel">
        <div class="panel-body">

            <a class="btn btn-sm btn-success add-button" href="{{ route('session.create') }}">
                <i class="fa fa-aw fc-agenda-axis"></i> Add a new Session
            </a>

            <table id="datatable-fixedcolumns" class="table table-striped table-bordered">
                <thead>
                <tr>
                    <th>SN</th>
                    <th>Name</th>
                    <th>Start Date</th>
                    <th>End Date</th>
                    <th>Status</th>
                    <th>Venues</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach($sessions as $k => $session)
                    <tr>
                        <td>{{ ++$k }}</td>
                        <td>
                            {{ $session->name }}
                        </td>
                        <td>{{ $session->start_date }}</td>
                        <td>{{ $session->end_date }}</td>
                        <td>{{ $session->status_text }}</td>
                        <td>
                            <ul>
                                @foreach($session->venues as $venue)
                                    <li>{{ $venue->name }}</li>
                                @endforeach
                            </ul>
                        </td>
                        <td>
                            <a href="{{ route('session.edit', [$session->id]) }}">Edit</a>
                            ||
                            {!! delete_form(route('session.destroy', [$session->id]))
                            !!}
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@stop
