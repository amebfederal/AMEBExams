@extends('layouts.super-admin')

@section('content')

    <div id="page-title">
        <h2>Course Management</h2>

        <p></p>
    </div>

    <div class="panel">
        <div class="panel-body">

            <a class="btn btn-sm btn-success add-button" href="{{ route('course.create') }}">
                <i class="fa fa-aw fc-agenda-axis"></i> Add a new Course
            </a>

            <table id="datatable-fixedcolumns" class="table table-striped table-bordered">
                <thead>
                <tr>
                    <th>SN</th>
                    <th>Title</th>
                    <th>Subject Code</th>
                    <th>Image</th>
                    <th>State Price</th>
                    <th>Rising Software Key</th>
                    <th>Availability</th>
                    <th>Visibility</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>


                @foreach($courses as $k => $course)

                    <tr>
                        <td>{{ ++$k }}</td>
                        <td>
                          <a href="{{ route('course.lesson.index',$course->slug) }}"> {{ $course->title }} </a>
                        </td>
                        <td>{{$course->subject_code}}</td>

                        <td><img src="{{ asset($course->thumbnail_path) }}" height="60px" /></td>
                        <td>{{$course->state_price}}</td>
                        <td>{{$course->rising_software_key}}</td>
                        <td>{{ $course->availability_text }}</td>
                        <td>{{ $course->visibility_text }}</td>
                        <td>{{ $course->status_text }}</td>
                        <td>
                            <a href="{{ route('course.edit', [$course->id]) }}">Edit</a>
                            ||
                            @if($course->has_state_price)
                                <a href="{{ route('course.manage-price', $course->id) }}"
                                   title="Manage Exam price"><i
                                            class="glyph-icon icon-money" aria-hidden="true"></i> Price </a>
                                ||
                            @endif

                            {!! delete_form(route('course.destroy', [$course->id]))
                            !!}
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@stop
