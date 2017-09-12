@extends('layouts.super-admin')
@section('content')
    <div id="page-title">
        <h2>Manage Account</h2>
    </div>

    <div class="panel">
        <div class="panel-body">
            <table id="datatable-fixedcolumns" class="table table-striped table-bordered">
                <thead>
                <tr>
                    <th>SN</th>
                    <th>Full Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Address</th>
                    <th>City</th>
                    <th>Suburb</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($accounts as $k => $account)
                    <tr>
                        <td>{{ ++$k }}</td>
                        <td>{{$account->title }} {{$account->fname }} {{$account->lname }}</td>
                        <td>{{$account->email }}</td>
                        <td>{{$account->phone }}</td>
                        <td>{{$account->address }}</td>
                        <td>{{$account->city }}</td>
                        <td>{{$account->suburb }}</td>
                        <td>
                            <a href="{{ route('account.edit', [$account->id]) }}">Edit</a>
                            ||
                            {!! delete_form(route('account.destroy', [$account->id]))
                            !!}
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <div class="col-md-12 text-right">
                {!! $accounts->render() !!}
            </div>
        </div>
    </div>
@stop

