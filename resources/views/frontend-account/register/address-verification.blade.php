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
                    <form action="{{ url('frontend-account/register/register') }}" method="post" class="form-horizontal bordered-row">
                        {!! csrf_field() !!}
                        <div class="col-md-12">
                            <p>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">What would you like to do?</label>
                                <div class="col-sm-9">
                                    <select class="form-control">
                                        <option selected="selected">Buy Online Exam</option>
                                        <option>Buy Practical Exam</option>
                                        <option>Buy Rockschool Exam</option>
                                    </select>
                                </div>
                            </div>
                            </p>

                            <div class="form-group">
                                <label class="col-sm-3 control-label">Where do you live?</label>
                                <div class="col-sm-9">
                                    <select class="form-control" id="state">
                                        <option>Select State (Country)</option>
                                        @foreach($states as $state)
                                            <option value="{{ $state->id }}">
                                            {{ $state->name }}</option>
                                        @endforeach
                                            <option value="others">Other</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group" id="otherdiv">
                                <label class="col-sm-3 control-label">If other, please specify</label>
                                <div class="col-sm-9">
                                    <input type="text" name="" placeholder="Country name" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">

                                <div class="col-sm-3 pull-right">
                                    <input type="submit" id="" name="btn" value="Next" class="btn border-default btn-success btn-block">
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
    $('#state').change(function(){
    var state =    $('#state').val();
        if(state=='others')
        {
          $('#otherdiv').show();
        }
        else
        {
            $('#otherdiv').hide();
        }
    });
    $('#otherdiv').hide();
    </script>
@endsection

