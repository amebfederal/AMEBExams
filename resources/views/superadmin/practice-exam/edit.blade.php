@extends('layouts.super-admin')
@section('content')

    <div id="page-title">
        <h2>Edit Exam</h2>

        <p>Edit {{ $product->title }} from form below.</p>
    </div>

    <div class="panel">
        <div class="panel-body">
            <h3 class="title-hero">
                Add Online Music Theory Exam
            </h3>

            <div class="example-box-wrapper">
                <form class="form-horizontal bordered-row" method="post" action="{{ route('practice-exam.update', $product->id) }}" enctype="multipart/form-data">
                    {{ method_field('patch') }}
                    @include('superadmin.practice-exam.form')
                </form>
            </div>
        </div>
    </div>

@stop

