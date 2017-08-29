@extends('layouts.super-admin')

@section('content')
    <div id="page-title">
        <h2>Add Product Category</h2>

        <p>Something that I don't know.</p>
    </div>

    <div class="panel">
        <div class="panel-body">
            <h3 class="title-hero">
                Basic Information
            </h3>

            <div class="example-box-wrapper">
                <form class="form-horizontal bordered-row" method="POST" action="{{ route('product-category.update', $category->id) }}"
                      enctype="multipart/form-data">
                    {{ method_field('patch') }}
                    @include('superadmin.product.category.form')
                </form>
            </div>
        </div>
    </div>

@stop