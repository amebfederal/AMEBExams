@extends('layouts.super-admin')
@section('content')

    <div id="page-title">
        <h2>Add Exam</h2>

        <p>Add a practice exam from form below.</p>
    </div>

    <div class="panel">
        <div class="panel-body">
            <h3 class="title-hero">
                Add Online Music Theory Exam
            </h3>

            <div class="example-box-wrapper">
                <form class="form-horizontal bordered-row" method="post" action="{{ route('practice-exam.store') }}" enctype="multipart/form-data">

                    @include('superadmin.practice-exam.form')
                </form>
            </div>
        </div>
    </div>

@stop

