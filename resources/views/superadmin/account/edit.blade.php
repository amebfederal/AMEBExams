@extends('layouts.super-admin')

@section('content')
    <div id="page-title">
        <h2>Edit Account</h2>
    </div>
    <div class="panel">
        <div class="panel-body">
            <div class="example-box-wrapper">
                <form class="form-horizontal bordered-row" method="POST" action="{{ route('account.update', $account->id) }}"
                      enctype="multipart/form-data">
                    {{ method_field('patch') }}
                    @include('superadmin.account.form')
                </form>
            </div>
        </div>
    </div>

@stop