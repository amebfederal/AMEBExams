{!! csrf_field() !!}



<div class="form-group">
    <label class="col-sm-3 control-label">Title</label>

    <div class="col-sm-6">
        <input type="text" class="form-control" name="title" placeholder="Title"
               value="{{ old('title', isset($category->title) ? $category->title : '') }}"/>
        <span class="validation-error">{{ $errors->first('title') }}</span>
    </div>
</div>



<div class="form-group">
    <label class="col-sm-3 control-label">Description</label>

    <div class="col-sm-9">
         <textarea class="form-control" name="description"  placeholder="Description">{{ old('description', isset($category->description) ? $category->description : '') }}</textarea>
        <span class="validation-error">{{ $errors->first('description') }}</span>
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
    <label class="col-sm-3 control-label"></label>

    <div class="col-sm-6">
        <button type="submit" class="btn btn-success btn-sm">Save</button>
        <a href="{{ route('faq-category.index') }}" class="btn btn-default btn-sm">
            <i class="fa fa-aw fa-reply-o"></i> Back
        </a>
    </div>
</div>
