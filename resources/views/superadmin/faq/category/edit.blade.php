@extends('layouts.super-admin')

@section('content')
    <div id="page-title">
        <h2>Edit FAQ-Category</h2>


    </div>

    <div class="panel">
        <div class="panel-body">
            <h3 class="title-hero">
                Basic Information
            </h3>

            <div class="example-box-wrapper">
                <form class="form-horizontal bordered-row" method="POST" action="{{ route('faq-category.update',[$category->id]) }}"
                      enctype="multipart/form-data">
                    {{ method_field('patch') }}
                    @include('superadmin.faq.category.form')
                </form>
            </div>
        </div>
    </div>

@stop