{!! csrf_field() !!}

@if(empty($category))

    <div class="form-group">
        <label class="col-sm-3 control-label">Category</label>

        <div class="col-sm-6">
            <select class="form-control" name="category_id">
                @foreach($categories as $cat)
                    <option value="{{ $cat->id }}"
                            {{ old('category_id', isset($subCategory->category_id) ? $subCategory->category_id : '') == $cat->id ? 'selected="selected"' : '' }}
                            >{{ $cat->name }}
                    </option>
                @endforeach
            </select>
            <span class="validation-error">{{ $errors->first('category_id') }}</span>
        </div>
    </div>

@endif

<div class="form-group">
    <label class="col-sm-3 control-label">Name</label>

    <div class="col-sm-6">
        <input type="text" class="form-control" name="name"
               value="{{ old('name', isset($subCategory->name) ? $subCategory->name : '') }}"/>
        <span class="validation-error">{{ $errors->first('name') }}</span>
    </div>
</div>

<div class="form-group">
    <label class="col-sm-3 control-label">Visibility</label>

    <div class="col-sm-6">
        <select class="form-control" name="visibility">
            <option value="visible"
                    {{ old('visibility', isset($subCategory->visibility) ? $subCategory->visibility : '') == 'visible' ? 'selected="selected"' : '' }}
                    >Visible
            </option>
            <option value="not_visible"
                    {{ old('visibility', isset($subCategory->visibility) ? $subCategory->visibility : '') == 'not_visible' ? 'selected="selected"' : '' }}
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
                    {{ old('status', isset($subCategory->status) ? $subCategory->status : '') == 'active' ? 'selected="selected"' : '' }}
                    >Active
            </option>
            <option value="in_active"
                    {{ old('status', isset($subCategory->status) ? $subCategory->status : '') == 'in_active' ? 'selected="selected"' : '' }}
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
                    {{ old('availability', isset($subCategory->availability) ? $subCategory->availability : '') == 'available' ? 'selected="selected"' : '' }}
                    >Available
            </option>
            <option value="not_available"
                    {{ old('availability', isset($subCategory->availability) ? $subCategory->availability : '') == 'not_available' ? 'selected="selected"' : '' }}
                    >Not Available
            </option>
        </select>
        <span class="validation-error">{{ $errors->first('availability') }}</span>
    </div>
</div>

<div class="form-group">
    <label class="col-sm-3 control-label">Image</label>

    <div class="col-sm-6">
        @if(isset($subCategory->image))
            <img src="{{ asset($subCategory->thumbnail_path) }}" height="100px" alt=""/>
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
                  name="description">{{ old('description', isset($subCategory->description) ? $subCategory->description : '') }}</textarea>
        <span class="validation-error">{{ $errors->first('description') }}</span>
    </div>
</div>

<div class="form-group">
    <label class="col-sm-3 control-label"></label>

    <div class="col-sm-6">
        <button type="submit" class="btn btn-success btn-sm">Save</button>
        @if(!empty($category))
            <a href="{{ route('category.sub-category.index', $category->slug) }}" class="btn btn-default btn-sm">
                <i class="fa fa-aw fa-reply-o"></i> Back
            </a>
        @else
            <a href="{{ url('super-admin/sub-category') }}" class="btn btn-default btn-sm">
                <i class="fa fa-aw fa-reply-o"></i> Back
            </a>
        @endif
    </div>
</div>