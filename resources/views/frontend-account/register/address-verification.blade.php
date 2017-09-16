@extends('layouts.frontend-account')
@section('content')
    <div id="page-content" class="col-md-12 center-margin frontend-components mrg25T">
        <div class="row">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">

                        <div id="page-title">
                        </div>

                        <div class="panel">
                            <div class="panel-body">

                                <div class="example-box-wrapper">
                                    <form action="{{ url('account/register/register') }}" method="get"
                                          class="form-horizontal bordered-row">
                                        {!! csrf_field() !!}
                                        <div class="col-md-12">
                                            <p>

                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">What would you like to do?</label>

                                                <div class="col-sm-9">
                                                    <select class="form-control" name="preference">
                                                        <option selected="selected" value="buy-online-exam">Buy Online Exam</option>
                                                        <option value="buy-practical-exam">Buy Practical Exam</option>
                                                        <option value="buy-rockschool-exam">Buy Rockschool Exam</option>
                                                    </select>
                                                    <span class="errormsg">{{ $errors->first('preference') }}</span>
                                                </div>
                                            </div>
                                            </p>

                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">Where do you live?</label>

                                                <div class="col-sm-9">
                                                    <select class="form-control {{ $errors->first('state') ? 'errorbox' : ''  }}" id="state" name="state">
                                                        <option value="">Select State (Country)</option>
                                                        @foreach($states as $state)
                                                            <option value="{{ $state->id }}" {{ old('state') == $state->id ? 'selected="selected"' : '' }}>
                                                                {{ $state->name }}</option>
                                                        @endforeach
                                                        <option value="others">Other</option>
                                                    </select>
                                                    <span class="errormsg">{{ $errors->first('state') }}</span>
                                                </div>
                                            </div>
                                            <div class="form-group {{ $errors->first('state') ? 'errorbox' : ''  }}" id="otherdiv" style="{{ old('state', '') != 'others' ? "display:none" : '' }}">
                                                <label class="col-sm-3 control-label">If other, please specify</label>

                                                <div class="col-sm-9">
                                                    <select name="country" class="form-control">
                                                        <option value="">Select Country</option>
                                                        @foreach($countries as $country)
                                                            <option value="{{ $country->code }}">{{ $country->name }}</option>
                                                        @endforeach
                                                    </select>
                                                    <span class="errormsg">{{ $errors->first('country') }}</span>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-sm-3 pull-right">
                                                    <input type="submit" id="" name="btn" value="Next"
                                                           class="btn border-default btn-success btn-block">
                                                </div>
                                            </div>
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
@section('page-specific-scripts')
    <script type="text/javascript">
        $('#state').change(function () {
            var state = $('#state').val();
            if (state == 'others') {
                $('#otherdiv').show();
            }
            else {
                $('#otherdiv').hide();
            }
        });
    </script>
@endsection