@extends('layouts.super-admin')

@section('content')

    <div id="page-title">
        <h2>Lessons</h2>


    </div>

    <div class="panel">
        <div class="panel-body">

            <a class="btn btn-sm btn-success add-button"
               href="{{ route('course.lesson.create',$course->slug) }}">
                <i class="fa fa-aw fc-agenda-axis"></i> Add Lesson

            </a>

            <table id="datatable-fixedcolumns" class="table table-striped table-bordered">
                <thead>
                <tr>
                    <th>SN</th>
                    <th>Title</th>
                    <th>video Link</th>
                    <th>Rising Software Link</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                @if($lessons->count() > 0)
                    @foreach($lessons as $k => $lesson)
                        <tr>
                            <td>{{ ++$k }}</td>
                            <td>{{ $lesson->title }}</td>
                            <td>{{ $lesson->status_text }}</td>
                            <td>{{$lesson->video_link}}</td>
                            <td>{{ $lesson->rising_software_link }}</td>
                            <td>
                                <a href="{{ route('course.lesson.edit', [$course->slug,$lesson->id]) }}">Edit</a>
                                ||
                                {!! delete_form(route('course.lesson.destroy',
                                [$course->slug,$lesson->id]))
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
