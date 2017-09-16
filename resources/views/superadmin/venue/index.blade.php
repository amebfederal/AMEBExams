@extends('layouts.super-admin')
@section('content')
    <div id="page-title">
        <h2>Manage Venue</h2>

        <p>Add Venue</p>
    </div>

    <div class="panel">
        <div class="panel-body">

            <a class="btn btn-sm btn-success add-button" href="{{ route('venue.create') }}">
                <i class="fa fa-aw fc-agenda-axis"></i> Add Venue Here
            </a>

            <table id="datatable-fixedcolumns" class="table table-striped table-bordered">
                <thead>
                <tr>
                    <th>SN</th>
                    <th>Venue Name</th>
                    <th>Location</th>
                    <th>No. of Seats</th>
                    <th>Type</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($venues as $k => $venue)
                    <tr>
                        <td>{{ ++$k }}</td>
                        <td>{{ $venue->name }}</td>
                        <td>{{$venue->location }}</td>
                        <td>{{$venue->seats }}</td>
                        <td>{{$venue->venue }}</td>
                        <td>{{$venue->status }}</td>
                        <td>
                            <a href="{{ route('venue.edit', [$venue->id]) }}">Edit</a>
                            ||
                            {!! delete_form(route('venue.destroy', [$venue->id]))
                            !!}
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <div class="col-md-12 text-right">
                {!! $venues->render() !!}
            </div>
        </div>
    </div>
@stop

