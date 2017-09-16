{!! csrf_field() !!}

<div class="form-group">
    <label class="col-sm-3 control-label">State Name</label>
    <div class="col-sm-6">
        <input type="text" name="name" class="form-control"  value="{{ old('name', isset($state->name) ? $state->name : '') }}">
        <span class="validation-error">{{ $errors->first('name') }}</span>
    </div>
</div>
<div class="form-group">
    <label class="col-sm-3 control-label">State Prefix</label>
    <div class="col-sm-6">
        <input type="text" name="prefix" class="form-control" value="{{ old('prefix', isset($state->prefix) ? $state->prefix: '')}}">
        <span class="validation-error">{{ $errors->first('prefix') }}</span>
    </div>
</div>
<div class="form-group">
    <label class="col-sm-3 control-label">Notification Email Address</label>
    <div class="col-sm-6">
        <input type="text" name="notification_email" class="form-control" value="{{ old('notification_email', isset($state->notification_email) ? $state->notification_email: '')}}">
        <span class="validation-error">{{ $errors->first('notification_email') }}</span>
    </div>
</div>
<div class="form-group">
    <label class="col-sm-3 control-label">Contact Email Address</label>
    <div class="col-sm-6">
        <input type="text" name="contact_email" class="form-control" value="{{ old('contact_email', isset($state->contact_email) ?$state->contact_email: '')}}">
        <span class="validation-error">{{ $errors->first('contact_email') }}</span>
    </div>
</div>
<div class="form-group">
    <label class="col-sm-3 control-label">Phone</label>
    <div class="col-sm-6">
        <input type="text" name="phone" class="form-control" value="{{ old('phone',isset($state->phone) ?$state->phone: '')}}">
        <span class="validation-error">{{ $errors->first('phone') }}</span>
    </div>
</div>
<div class="form-group">
    <label class="col-sm-3 control-label">Address</label>
    <div class="col-sm-6">
        <input type="text" name="address" class="form-control" value="{{ old('address',isset($state->address) ?$state->address: '')}}">
        <span class="validation-error">{{ $errors->first('address') }}</span>
    </div>
</div>
<div class="form-group">
    <label class="col-sm-3 control-label">Contact Person</label>
    <div class="col-sm-6">
        <input type="text" name="contact_person" class="form-control" value="{{old('contact_person',isset($state->contact_person) ?$state->contact_person:'')}}">
        <span class="validation-error">{{ $errors->first('contact_person') }}</span>
    </div>
</div>
<div class="form-group">
    <label class="col-sm-3 control-label">Contact Person Phone</label>
    <div class="col-sm-6">
        <input type="text" name="contact_person_phone" class="form-control" value="{{old('contact_person_phone',isset($state->contact_person_phone)?$state->contact_person_phone:'')}}">
        <span class="validation-error">{{ $errors->first('contact_person_phone') }}</span>
    </div>
</div>
<div class="form-group">
    <label class="col-sm-3 control-label">Contact Person Email</label>
    <div class="col-sm-6">
        <input type="text" name="contact_person_email" class="form-control" value="{{old('contact_person_email',isset($state->contact_person_email)?$state->contact_person_email:'')}}">
        <span class="validation-error">{{ $errors->first('contact_person_email') }}</span>
    </div>
</div>
<div class="form-group">
    <label class="col-sm-3 control-label">Email Notification</label>
    <div class="col-sm-6">
        <input type="radio" name="notification" value="enabled" class="radio-inline"
               {{old('notification',isset($state->notification)?$state->notification:'')=='enabled'?'checked="checked"':''}} > Enabled
        <input type="radio" name="notification" value="disabled" class="radio-inline"
        {{old('notification',isset($state->notification)?$state->notification:'')=='disabled'?'checked="checked"':''}}> Disabled
    </div>
</div>
<div class="form-group">
    <label class="col-sm-3 control-label">API Authority</label>
    <div class="col-sm-6" >
        <input type="radio" name="authority" class="api" value="enabled" class="radio-inline"
                {{old('authority',isset($state->authority)?$state->authority:'')=='enabled'?'checked="checked"':''}}> Enabled
        <input type="radio" name="authority" class="api" value="disabled" class="radio-inline"
                {{old('authority',isset($state->authority)?$state->authority:'')=='disabled'?'checked="checked"':''}}> Disabled
    </div>
</div>
<div class="form-group" id="otherdiv1">
    <label class="col-sm-3 control-label">API ID</label>
    <div class="col-sm-6">
        <input type="text" name="api" class="form-control" value="{{old('api',isset($state->api)?$state->api:'')}}">
        <span class="validation-error">{{ $errors->first('api') }}</span>
    </div>
</div>
<div class="form-group" id="otherdiv2">
    <label class="col-sm-3 control-label">API Secret Key</label>
    <div class="col-sm-6">
        <input type="text" name="key" class="form-control" value="{{old('key',isset($state->key)?$state->key:'')}}">
        <span class="validation-error">{{ $errors->first('key') }}</span>
    </div>
</div>
<div class="form-group">
    <label class="col-sm-3 control-label"></label>
    <div class="col-sm-6">
        <button type="submit" class="btn btn-success btn-sm">Save</button>
        <a href="{{ route('state.index') }}" class="btn btn-default btn-sm">
            <i class="icon-reply"></i> Back
        </a>
    </div>
</div>
@section('page-specific-scripts')
    <script type="text/javascript">
        $('.api').click(function(){
            var radioValue = $("input[name='authority']:checked").val();
            if(radioValue=='enabled')
            {
                $('#otherdiv1').show();
                $('#otherdiv2').show();
            }
            if(radioValue=='disabled')
            {
                $('#otherdiv1').hide();
                $('#otherdiv2').hide();
            }


        });
        $('#otherdiv1').show();
        $('#otherdiv2').show();
    </script>
@endsection