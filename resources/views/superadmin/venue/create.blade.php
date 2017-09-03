@extends('layouts.super-admin')

@section('content')
    <div id="page-title">
        <h2>Add Venue</h2>
    </div>
    <div class="panel">
        <div class="panel-body">
            <div class="example-box-wrapper">
                <form class="form-horizontal bordered-row" method="POST" action="{{ route('venue.store') }}"
                      enctype="multipart/form-data">
                    @include('superadmin.venue.form')
                </form>
            </div>
        </div>
    </div>

@stop