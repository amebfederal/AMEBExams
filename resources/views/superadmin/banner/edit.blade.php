@extends('layouts.super-admin')

@section('content')
    <div id="page-title">
        <h2>Edit Cousre</h2>

        <p>Update Banner - {{ $banner->title }}</p>
    </div>

    <div class="panel">
        <div class="panel-body">
            <h3 class="title-hero">
                Basic Information
            </h3>

            <div class="example-box-wrapper">
                <form class="form-horizontal bordered-row" method="POST" action="{{ route('banner.update', [$banner->id]) }}"
                      enctype="multipart/form-data">
                    {{ method_field('patch') }}
                    @include('superadmin.banner.form')

                </form>
            </div>
        </div>
    </div>

@stop