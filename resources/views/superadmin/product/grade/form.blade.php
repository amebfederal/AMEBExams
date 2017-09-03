{!! csrf_field() !!}

<div class="form-group">
    <label class="col-sm-3 control-label">Title</label>

    <div class="col-sm-6">
        <input type="text" class="form-control" name="title"
               value="{{ old('title', isset($grade->title) ? $grade->title : '') }}"/>
        <span class="validation-error">{{ $errors->first('title') }}</span>
    </div>
</div>

<div class="form-group">
    <label class="col-sm-3 control-label">Code</label>

    <div class="col-sm-6">
        <input type="text" class="form-control" name="code"
               value="{{ old('code', isset($grade->code) ? $grade->code : '') }}"/>
        <span class="validation-error">{{ $errors->first('code') }}</span>
    </div>
</div>

<div class="form-group">
    <label class="col-sm-3 control-label">Status</label>

    <div class="col-sm-6">
        <select class="form-control" name="status">
            <option value="active"
                    {{ old('status', isset($grade->status) ? $grade->status : '') == 'active' ? 'selected="selected"' : '' }}
                    >Active
            </option>
            <option value="in_active"
                    {{ old('status', isset($grade->status) ? $grade->status : '') == 'in_active' ? 'selected="selected"' : '' }}
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
        <a href="{{ route('sub-category.grade.index', $subCategory->slug) }}" class="btn btn-default btn-sm">
            <i class="fa fa-aw fa-reply-o"></i> Back
        </a>
    </div>
</div>