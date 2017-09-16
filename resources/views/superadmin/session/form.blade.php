{!! csrf_field() !!}
<div class="form-group">
    <label class="col-sm-3 control-label">Name <span class="text-danger">*</span></label>
    <div class="col-sm-6">
        <input type="text" class="form-control" name="name"
               value="{{ old('name', isset($session->name) ? $session->name : '') }}"/>
        <span class="validation-error">{{ $errors->first('name') }}</span>
    </div>
</div>

<div class="form-group">
    <label class="col-sm-3 control-label">Start Date <span class="text-danger">*</span></label>

    <div class="col-sm-6">
        <input type="date" name="start_date" class="form-control"
               value="{{ old('start_date', isset($session->start_date) ? $session->start_date: '')}}">
        <span class="validation-error">{{ $errors->first('start_date') }}</span>
    </div>
</div>

<div class="form-group">
    <label class="col-sm-3 control-label">End Date <span class="text-danger">*</span></label>

    <div class="col-sm-6">
        <input type="date" name="end_date" class="form-control"
               value="{{ old('end_date', isset($session->end_date) ? $session->end_date: '')}}">
        <span class="validation-error">{{ $errors->first('end_date') }}</span>
    </div>
</div>

<div class="form-group">
    <label class="col-sm-3 control-label">Status <span class="text-danger">*</span></label>
    <div class="col-sm-6">
        <select class="form-control" name="status">
            <option value="active"
                    {{ old('status', isset($session->status) ? $session->status : '') == 'active' ? 'selected="selected"' : '' }}
                    >Active
            </option>
            <option value="in_active"
                    {{ old('status', isset($session->status) ? $session->status : '') == 'in_active' ? 'selected="selected"' : '' }}
                    >Inactive
            </option>
        </select>
        <span class="validation-error">{{ $errors->first('status') }}</span>
    </div>
</div>

<div class="form-group">
    <label class="col-sm-3 control-label">Venues <span class="text-danger">*</span> </label>

    <?php $selectedVenues = old('venues', isset($session->venue_ids) ? $session->venue_ids : []); ?>

    <div class="col-sm-6">
        <select multiple="" class="multi-select" name="venues[]">
            @foreach($venues as $venue)
                <option value="{{ $venue->id }}"
                       {{ in_array($venue->id, $session->savedVenue) ? 'selected="selected"' : '' }} >{{ $venue->name }}</option>
            @endforeach
        </select>
    </div>
</div>

<div class="form-group">
    <label class="col-sm-3 control-label"></label>

    <div class="col-sm-6">
        <button type="submit" class="btn btn-success btn-sm">Save</button>
        <a href="{{ route('session.index') }}" class="btn btn-default btn-sm">
            <i class="icon-reply"></i> Back
        </a>
    </div>
</div>