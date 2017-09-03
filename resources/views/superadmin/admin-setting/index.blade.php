@extends('layouts.super-admin')
@section('content')


            <div id="page-title">
                <h2>Manage Users</h2>

            </div>

            <div class="panel">
                <div class="panel-body">

                    <table id="datatable-fixedcolumns" class="table table-striped table-bordered">
                        <thead>
                        <tr>
                            <th>Full Name</th>
                            <th>Username</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Role</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($users as $k => $user)
                        <tr>
                            <td>{{ $user->first_name." ".$user->last_name }}</td>
                            <td>{{ $user->username }}</td>
                            <td>{{ $user->email }}</td>
                            <th>{{ $user->phone }}</th>
                            <th>{{ucwords($user->user_type)}}</th>
                            <td><a href="{{ route('admin-setting.edit', $user->id) }}"><i class="glyph-icon icon-edit"></i>Edit</a>
                                </td>
                        </tr>
                        @endforeach

                        </tbody>
                    </table>
                    <div class="col-md-12 text-right">
                        {!! $users->render() !!}
                    </div>

                </div>
            </div>
@endsection
