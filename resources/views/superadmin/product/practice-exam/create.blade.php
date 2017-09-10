@extends('layouts.super-admin')
@section('content')

    <div id="page-title">
        <h2>Add Product</h2>

        <p>Online Music Theory</p>
    </div>

    <div class="panel">
        <div class="panel-body">
            <h3 class="title-hero">
                Add Online Music Theory Exam
            </h3>

            <div class="example-box-wrapper">
                <form class="form-horizontal bordered-row" method="post" action="{{ route('online-examination.store') }}" enctype="multipart/form-data">

                    @include('superadmin.product.practice-exam.form')
                </form>
            </div>
        </div>
    </div>

@stop

