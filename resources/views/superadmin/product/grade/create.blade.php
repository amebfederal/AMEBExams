@extends('layouts.super-admin')

@section('content')
<div id="page-title">
    <h2>Add Grade</h2>

    <p>For Sub Category - {{ $subCategory->name }}</p>
</div>

<div class="panel">
    <div class="panel-body">
        <h3 class="title-hero">
            Basic Information
        </h3>

        <div class="example-box-wrapper">
            <form class="form-horizontal bordered-row" method="POST" action="{{ route('sub-category.grade.store', $subCategory->slug) }}"
                    enctype="multipart/form-data">
                @include('superadmin.product.grade.form')
            </form>
        </div>
    </div>
</div>

@stop