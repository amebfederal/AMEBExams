@extends('layouts.super-admin')

@section('content')
<div id="page-title">
    <h2>Add Sub Category</h2>

    <p>For Category - {{ isset($category->name) ? "for -  $category->name" : '' }}</p>
</div>

<div class="panel">
    <div class="panel-body">
        <h3 class="title-hero">
            Basic Information
        </h3>

        <div class="example-box-wrapper">
            <form class="form-horizontal bordered-row" method="POST" action="{{ route('category.sub-category.store', !empty($category->slug) ? $category->slug : '999-new-cat') }}"
                    enctype="multipart/form-data">
                @include('superadmin.product.sub-category.form')
            </form>
        </div>
    </div>
</div>

@stop