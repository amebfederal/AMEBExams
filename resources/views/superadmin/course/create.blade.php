@extends('layouts.super-admin')

@section('content')
<div id="page-title">
    <h2>Add Course</h2>
</div>

<div class="panel">
    <div class="panel-body">
        <h3 class="title-hero">
            Basic Information
        </h3>

        <div class="example-box-wrapper">
            <form class="form-horizontal bordered-row" method="POST" action="{{ route('course.store') }}"
                    enctype="multipart/form-data">
                @include('superadmin.course.form')
            </form>
        </div>
    </div>
</div>

@stop

