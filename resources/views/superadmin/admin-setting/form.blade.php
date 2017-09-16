{{ csrf_field() }}

<div class="form-group">
    <label class="col-sm-3 control-label">First Name</label>
    <div class="col-sm-6">
        <input type="text" name="first_name" class="form-control" value="{{ old('first_name', isset($user->first_name) ? $user->first_name : '') }}">
    </div>
    @if ($errors->has('first_name'))
        <span class="validation-error">
        <strong>{{ $errors->first('first_name') }}</strong>
    </span>
    @endif
</div>



<div class="form-group">
    <label class="col-sm-3 control-label">Last Name</label>
    <div class="col-sm-6">
        <input type="text" name="last_name" class="form-control" value="{{ old('last_name', isset($user->last_name) ? $user->last_name : '') }}">
    </div>
    @if ($errors->has('last_name'))
        <span class="validation-error">
        <strong>{{ $errors->first('last_name') }}</strong>
    </span>
    @endif
</div>


<div class="form-group">
    <label class="col-sm-3 control-label">Phone</label>
    <div class="col-sm-6">
        <input type="text" name="phone" class="form-control" value="{{ old('phone', isset($user->phone) ? $user->phone : '') }}">
    </div>
    @if ($errors->has('phone'))
        <span class="validation-error">
        <strong>{{ $errors->first('phone') }}</strong>
    </span>
    @endif
</div>



<div class="form-group">
    <label class="col-sm-3 control-label">User Name</label>
    <div class="col-sm-6">
        <input type="text" name="username" class="form-control" value="{{ old('name', isset($user->username) ? $user->username : '') }}">
    </div>
    @if ($errors->has('username'))
        <span class="validation-error">
        <strong>{{ $errors->first('username') }}</strong>
    </span>
    @endif
</div>


<div class="form-group">
    <label class="col-sm-3 control-label">Email</label>
    <div class="col-sm-6">
        <input type="text" name="email" class="form-control" value="{{ old('email', isset($user->email) ? $user->email : '') }}">
    </div>
    @if ($errors->has('email'))
        <span class="validation-error">
        <strong>{{ $errors->first('email') }}</strong>
    </span>
    @endif
</div>


<div class="form-group">
    <label class="col-sm-3 control-label">Address</label>
    <div class="col-sm-6">
        <input type="text" name="address" class="form-control" value="{{ old('address', isset($user->address) ? $user->address : '') }}">
    </div>
    @if ($errors->has('address'))
        <span class="validation-error">
        <strong>{{ $errors->first('address') }}</strong>
    </span>
    @endif
</div>




<div class="form-group">
    <label class="col-sm-3 control-label">Status</label>
    <div class="col-sm-6">
        <input type="radio" name="status" value="active" class="radio-inline"
               {{ old('status', isset($user->status) ? $user->status : '')=='active'?'checked="checked"':''}}> Active
        <input type="radio" name="status" value="in_active" class="radio-inline"
                {{ old('status', isset($user->status) ? $user->status : '')=='in_active'?'checked="checked"':''}}> Inactive
    </div>
</div>
@if ($errors->has('status'))
    <span class="validation-error">
        <strong>{{ $errors->first('status') }}</strong>
    </span>
@endif
<div class="form-group">
    <label class="col-sm-3 control-label"></label>
    <div class="col-sm-6">
        <input type="submit" name="" value="Update" class="btn btn-success">
    </div>
</div>