{!! csrf_field() !!}

<div class="form-group">
    <label class="col-sm-3 control-label">Venue Name</label>
    <div class="col-sm-6">
        <input type="text" name="name" class="form-control"  value="{{ old('name', isset($venues->name) ? $venues->name : '') }}">
        <span class="validation-error">{{ $errors->first('name') }}</span>
    </div>
</div>

<div class="form-group">
    <label class="col-sm-3 control-label">Location</label>
    <div class="col-sm-6">
        <input type="text" name="location" class="form-control" value="{{ old('location', isset($venues->location) ? $venues->location: '')}}">
        <span class="validation-error">{{ $errors->first('location') }}</span>
    </div>
</div>

<div class="form-group">
    <label class="col-sm-3 control-label">No. of Seats</label>
    <div class="col-sm-6">
        <input type="number" name="seats" class="form-control" value="{{ old('seats', isset($venues->seats) ?$venues->seats: '')}}">
        <span class="validation-error">{{ $errors->first('seats') }}</span>
    </div>
</div>

<div class="form-group">
    <label class="col-sm-3 control-label">Type of Venue</label>

    <div class="col-sm-6">
        <select class="form-control" name="venue">
            <option value="private"
                    {{ old('availability', isset($venues->venue) ? $venues->venue : '') == 'available' ? 'selected="selected"' : '' }}
            >Private
            </option>
            <option value="group"
                    {{ old('availability', isset($venues->venue) ? $venues->venue : '') == 'not_available' ? 'selected="selected"' : '' }}
            >Group
            </option>
        </select>
        <span class="validation-error">{{ $errors->first('venue') }}</span>
    </div>
</div>

<div class="form-group">
    <label class="col-sm-3 control-label">Available From</label>
    <div class="col-sm-6">
        <input type="date" name="from" class="form-control" value="{{ old('contact_email', isset($venues->from) ?$venues->from: '')}}">
        <span class="validation-error">{{ $errors->first('from') }}</span>
    </div>
</div>

<div class="form-group">
    <label class="col-sm-3 control-label">Available Till </label>
    <div class="col-sm-6">
        <input type="date" name="till" class="form-control" value="{{ old('contact_email', isset($venues->till) ?$venues->till: '')}}">
        <span class="validation-error">{{ $errors->first('till') }}</span>
    </div>
</div>

<div class="form-group">
    <label class="col-sm-3 control-label">Status</label>

    <div class="col-sm-6">
        <select class="form-control" name="status">
            <option value="active"
                    {{ old('status', isset($venues->status) ? $venues->status : '') == 'active' ? 'selected="selected"' : '' }}
            >Active
            </option>
            <option value="inactive"
                    {{ old('status', isset($venues->status) ? $venues->status : '') == 'inactive' ? 'selected="selected"' : '' }}
            >Inactive
            </option>
        </select>
        <span class="validation-error">{{ $errors->first('status') }}</span>
    </div>
</div>

<div class="form-group">
    <label class="col-sm-3 control-label"></label>
    <div class="col-sm-6">
        <button type="submit" class="btn btn-success btn-sm">Save</button>
        <a href="{{ route('venue.index') }}" class="btn btn-default btn-sm">
            <i class="icon-reply"></i> Back
        </a>
    </div>
</div>