{!! csrf_field() !!}

<div class="form-group">
    <label class="col-sm-3 control-label">Name</label>

    <div class="col-sm-6">
        <input type="text" class="form-control" name="name"
               value="{{ old('name', isset($category->name) ? $category->name : '') }}"/>
        <span class="validation-error">{{ $errors->first('name') }}</span>
    </div>
</div>

<div class="form-group">
    <label class="col-sm-3 control-label">Visibility</label>

    <div class="col-sm-6">
        <select class="form-control" name="visibility">
            <option value="visible"
                    {{ old('visibility', isset($category->visibility) ? $category->visibility : '') == 'visible' ? 'selected="selected"' : '' }}
                    >Visible
            </option>
            <option value="not_visible"
                    {{ old('visibility', isset($category->visibility) ? $category->visibility : '') == 'not_visible' ? 'selected="selected"' : '' }}
                    >Not Visible
            </option>
        </select>
        <span class="validation-error">{{ $errors->first('visibility') }}</span>
    </div>
</div>

<div class="form-group">
    <label class="col-sm-3 control-label">Status</label>

    <div class="col-sm-6">
        <select class="form-control" name="status">
            <option value="active"
                    {{ old('status', isset($category->status) ? $category->status : '') == 'active' ? 'selected="selected"' : '' }}
                    >Active
            </option>
            <option value="in_active"
                    {{ old('status', isset($category->status) ? $category->status : '') == 'in_active' ? 'selected="selected"' : '' }}
                    >Inactive
            </option>
        </select>
        <span class="validation-error">{{ $errors->first('status') }}</span>
    </div>
</div>

<div class="form-group">
    <label class="col-sm-3 control-label">Availability</label>

    <div class="col-sm-6">
        <select class="form-control" name="availability">
            <option value="available"
                    {{ old('availability', isset($category->availability) ? $category->availability : '') == 'available' ? 'selected="selected"' : '' }}
                    >Available
            </option>
            <option value="not_available"
                    {{ old('availability', isset($category->availability) ? $category->availability : '') == 'not_available' ? 'selected="selected"' : '' }}
                    >Not Available
            </option>
        </select>
        <span class="validation-error">{{ $errors->first('availability') }}</span>
    </div>
</div>

<div class="form-group">
    <label class="col-sm-3 control-label">Image</label>

    <div class="col-sm-6">
        @if(isset($category->image))
            <img src="{{ asset($category->thumbnail_path) }}" height="100px" alt=""/>
            <br/>
            <br/>
        @endif
        <input type="file" class="form-control" name="file"/>
        <span class="validation-error">{{ $errors->first('file') }}</span>
    </div>
</div>

<div class="form-group">
    <label class="col-sm-3 control-label">Description</label>

    <div class="col-sm-6">
        <textarea class="form-control"
                  name="description">{{ old('description', isset($category->description) ? $category->description : '') }}</textarea>
        <span class="validation-error">{{ $errors->first('description') }}</span>
    </div>
</div>

<div class="form-group">
    <label class="col-sm-3 control-label"></label>

    <div class="col-sm-6">
        <button type="submit" class="btn btn-success btn-sm">Save</button>
        <a href="{{ route('course.index') }}" class="btn btn-default btn-sm">
            <i class="fa fa-aw fa-reply-o"></i> Back
        </a>
    </div>
</div>