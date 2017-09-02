@extends('layouts.super-admin')
@section('content')


    <div id="page-title">
        <h2>Change Password</h2>
    </div>

    <div class="panel">
        <div class="panel-body">
            <div class="example-box-wrapper">
                <form class="form-horizontal bordered-row" action="{{route('admin-setting.change-password', $user->id)}}" method="POST">
                    {{ csrf_field() }}

                    <div class="form-group">
                        <label class="col-sm-3 control-label">Old Password</label>
                        <div class="col-sm-6">
                            <input type="password" name="old_password" class="form-control" value="{{ old('old_password') }}">
                        </div>
                        @if ($errors->has('old_password'))
                            <span class="validation-error">
                                <strong>{{ $errors->first('old_password') }}</strong>
                        </span>
                        @endif
                    </div>



                    <div class="form-group">
                        <label class="col-sm-3 control-label">New Password</label>
                        <div class="col-sm-6">
                            <input type="password" name="password" class="form-control" value="{{ old('password') }}">
                        </div>
                        @if ($errors->has('password'))
                            <span class="validation-error">
                        <strong>{{ $errors->first('password') }}</strong>
                        </span>
                        @endif
                    </div>


                    <div class="form-group">
                        <label class="col-sm-3 control-label">Confirm Password</label>
                        <div class="col-sm-6">
                            <input type="password" name="password_confirmation" class="form-control" value="{{ old('password_confirmation') }}">
                        </div>
                        @if ($errors->has('password_confirmation'))
                            <span class="validation-error">
                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                        </span>
                        @endif
                    </div>

            </div>

            <div class="form-group">
                <label class="col-sm-3 control-label"></label>
                <div class="col-sm-6">
                    <input type="submit" name="" value="Change Password" class="btn btn-success">
                </div>
            </div>

            </form>

            @endsection
            @section('page-specific-scripts')
                <script type="text/javascript" src="{{asset('resources/assets/widgets/summernote-wysiwyg/summernote-wysiwyg.js')}}"></script>
                <script type="text/javascript">
                    $(function() { "use strict";
                        $('.wysiwyg-editor').summernote({
                            height: 350
                        });
                    });
                </script>

        </div>
    </div>
@endsection