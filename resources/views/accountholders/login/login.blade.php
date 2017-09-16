@extends('layouts.frontend-account')
@section('content')

    <div id="page-content" class="col-md-12 center-margin frontend-components mrg25T">
        <div class="row">
            <div class="container">

                <div id="page-content" class="col-md-12 center-margin frontend-components mrg25T">
                    <div class="row">
                        <div class="center-vertical">
                            <div class="center-content row">

                                <div class="col-md-10 center-margin">


                                    <div class="row">

                                        <div class="col-md-8 center-margin">

                                            <form method="POST" action="{{route('accountholders.login')}}">
                                                {{ csrf_field() }}
                                                <div class="content-box">
                                                    <h3 class="content-box-header content-box-header-alt bg-default">
                                <span class="icon-separator">
                                    <i class="glyph-icon icon-sign-in"></i>
                                </span>
                                                        <span class="header-wrapper">
                                    Login
                                    <small>
                                    <ul>
                                    <li> Parent or Teacher, please use your email address and password to login.</li>
                                    <li> Candidate, please use your Exam Key and PIN to login.</li>
                                    </ul></small>
                                </span>

                                                    </h3>
                                                    <div class="content-box-wrapper">
                                                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                                            <div class="input-group">
                                                                <input class="form-control" name="email" id="exampleInputEmail1"
                                                                       placeholder="Enter Email"
                                                                       type="email" value="{{ old('email') }}">
                                                                <span class="input-group-addon bg-blue">
                                                                <i class="glyph-icon icon-envelope-o"></i>
                                                            </span>
                                                            </div>
                                                        </div>
                                                        @if ($errors->has('email'))
                                                            <span class="help-block">
                                                         <strong>{{ $errors->first('email') }}</strong>
                                                        </span>
                                                        @endif

                                                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                                            <div class="input-group">
                                                                <input class="form-control" name="password" id="exampleInputPassword1"
                                                                       placeholder="Password or PIN" type="password">
                                                                <span class="input-group-addon bg-blue">
                                                                <i class="glyph-icon icon-unlock-alt"></i>
                                                                </span>
                                                            </div>
                                                        </div>

                                                        @if ($errors->has('password'))
                                                            <span class="help-block">
                                                        <strong>{{ $errors->first('password') }}</strong>
                                                        </span>
                                                        @endif

                                                        <div class="form-group">
                                                            <!--  <a href="" title="Recover password">Forgot Your Password?</a> -->
                                                        </div>
                                                        <button type="submit" class="btn btn-success btn-block">Login</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <!-- Old -->

                                </div>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection