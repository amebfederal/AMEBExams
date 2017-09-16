@extends('layouts.super-admin')
@section('content')


            <div id="page-title">
                <h2>Update User</h2>
            </div>

            <div class="panel">
                <div class="panel-body">
                    <div class="example-box-wrapper">
                        <form class="form-horizontal bordered-row" method="POST" action="{{route('admin-setting.update', $user->id)}}">
                            {{ method_field('patch') }}
                           @include('superadmin.admin-setting.form')
                        </form>
                    </div>

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