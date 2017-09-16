@extends('layouts.super-admin')

@section('content')

    <div id="page-title">
        <h2>Banner Management</h2>

        <p></p>
    </div>

    <div class="panel">
        <div class="panel-body">

            <a class="btn btn-sm btn-success add-button" href="{{ route('banner.create') }}">
                <i class="fa fa-aw fc-agenda-axis"></i> Add a new Banner
            </a>

            <table id="datatable-fixedcolumns" class="table table-striped table-bordered">
                <thead>
                <tr>
                    <th>SN</th>
                    <th>Title</th>
                    <th>Image</th>
                    <th>Position</th>
                    <th>Visibility</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>


                @foreach($banners as $k => $banner)

                    <tr>
                        <td>{{ ++$k }}</td>
                        <td>
                          <a href=""> {{ $banner->title }} </a>
                        </td>
                        <td><img src="{{ asset($banner->thumbnail_path) }}" height="60px" /></td>
                        <td>{{$banner->position}}</td>
                        <td>{{$banner->visibility}}</td>
                        <td>{{ $banner->status_text }}</td>
                        <td>
                            <a href="{{ route('banner.edit', [$banner->id]) }}">Edit</a>
                            || {!! delete_form(route('banner.destroy', [$banner->id]))
                            !!}
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@stop
