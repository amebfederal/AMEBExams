@extends('layouts.super-admin')

@section('content')
<div id="page-title">
    <h2>Add FAQ-Category</h2>


</div>

<div class="panel">
    <div class="panel-body">
        <h3 class="title-hero">
            Basic Information
        </h3>

        <div class="example-box-wrapper">
            <form class="form-horizontal bordered-row" method="POST" action="{{ route('faq-category.store') }}"
                    enctype="multipart/form-data">
                @include('superadmin.faq.category.form')
            </form>
        </div>
    </div>
</div>

@stop