@extends('layouts.super-admin')

@section('content')
<div id="page-title">
    <h2>Add Session</h2>
</div>

<div class="panel">
    <div class="panel-body">
        <h3 class="title-hero">
            Basic Information
        </h3>

        <div class="example-box-wrapper">
            <form class="form-horizontal bordered-row" method="POST" action="{{ route('session.store') }}"
                    enctype="multipart/form-data">
                @include('superadmin.session.form')
            </form>
        </div>
    </div>
</div>

@stop