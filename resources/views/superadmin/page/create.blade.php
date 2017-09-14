@extends('layouts.super-admin')

@section('content')
    <div id="page-title">
        <h2>Add New Page </h2>
    </div>
    <div class="panel">
        <div class="panel-body">
            <div class="example-box-wrapper">
                <form class="form-horizontal bordered-row" method="POST" action="{{ route('page.store') }}"
                      enctype="multipart/form-data">
                    @include('superadmin.page.form')
                </form>
            </div>
        </div>
    </div>

@stop