{!! csrf_field() !!}

<div class="form-group">
    <label class="col-sm-3 control-label">Title <span class="text-danger">*</span></label>

    <div class="col-sm-6">
        <input type="text" class="form-control" name="title"
               value="{{ old('title', isset($banner->title) ? $banner->title : '') }}"/>
        <span class="validation-error">{{ $errors->first('title') }}</span>
    </div>
</div>

<div class="form-group">
    <label class="col-sm-3 control-label">Description</label>

    <div class="col-sm-6">
        <textarea class="form-control"
                  name="description" >{{ old('description', isset($banner->description) ? $banner->description : '') }}</textarea>
        <span class="validation-error">{{ $errors->first('description') }}</span>
    </div>
</div>


<div class="form-group">
    <label class="col-sm-3 control-label">Position <span class="text-danger">*</span></label>

    <div class="col-sm-6">
        <input type="text" name="position" class="form-control"
               value="{{ old('position', isset($banner->position) ? $banner->position: '')}}">
        <span class="validation-error">{{ $errors->first('position') }}</span>
    </div>
</div>

<div class="form-group">
    <label class="col-sm-3 control-label">Image</label>

    <div class="col-sm-6">
        @if(isset($banner->image))
            <img src="{{ asset($banner->thumbnail_path) }}" height="100px" alt=""/>
            <br/>
            <br/>
        @endif
        <input type="file" class="form-control" name="file"/>
        <span class="validation-error">{{ $errors->first('file') }}</span>
    </div>
</div>


<div class="form-group">
    <label class="col-sm-3 control-label">Button Status</label>
    <div class="col-sm-6">
        <input type="radio" name="button_status" value="active" class="radio-inline"
                {{ old('button_status', isset($banner->button_status) ? $banner->button_status : '')=='active'?'checked="checked"':''}}> Available
        <input type="radio" name="button_status" value="in_active" class="radio-inline"
                {{ old('button_status', isset($banner->button_status) ? $banner->button_status : '')=='in_active'?'checked="checked"':''}}> Not Available
    </div>
</div>

<div class="form-group">
    <label class="col-sm-3 control-label">Button Text <span class="text-danger"></span></label>

    <div class="col-sm-6">
        <input type="text" class="form-control" name="button_text"
               value="{{ old('button_text', isset($banner->button_text) ? $banner->button_text : '') }}"/>
        <span class="validation-error">{{ $errors->first('button_text') }}</span>
    </div>
</div>


<div class="form-group">
    <label class="col-sm-3 control-label">Button Link <span class="text-danger"></span></label>

    <div class="col-sm-6">
        <input type="text" class="form-control" name="button_link"
               value="{{ old('button_link', isset($banner->button_link) ? $banner->button_link : '') }}"/>
        <span class="validation-error">{{ $errors->first('button_link') }}</span>
    </div>
</div>


<div class="form-group">
    <label class="col-sm-3 control-label">Button Target</label>
    <div class="col-sm-6">
        <input type="radio" name="button_target" value="parent" class="radio-inline"
                {{ old('button_target', isset($banner->button_target) ? $banner->button_target : '')=='parent'?'checked="checked"':''}}> Available
        <input type="radio" name="button_target" value="newtab" class="radio-inline"
                {{ old('button_target', isset($banner->button_target) ? $banner->button_target : '')=='newtab'?'checked="checked"':''}}> Not Available
    </div>
</div>

<div class="form-group">
    <label class="col-sm-3 control-label">Second Button Status</label>
    <div class="col-sm-6">
        <input type="radio" name="second_button_status" value="active" class="radio-inline"
                {{ old('second_button_status', isset($banner->second_button_status) ? $banner->second_button_status : '')=='active'?'checked="checked"':''}}> Available
        <input type="radio" name="second_button_status" value="in_active" class="radio-inline"
                {{ old('second_button_status', isset($banner->button_status) ? $banner->button_status : '')=='in_active'?'checked="checked"':''}}> Not Available
    </div>
</div>

<div class="form-group">
    <label class="col-sm-3 control-label">Second Button Text <span class="text-danger"></span></label>

    <div class="col-sm-6">
        <input type="text" class="form-control" name="second_button_text"
               value="{{ old('button_text', isset($banner->second_button_text) ? $banner->second_button_text : '') }}"/>
        <span class="validation-error">{{ $errors->first('second_button_text') }}</span>
    </div>
</div>


<div class="form-group">
    <label class="col-sm-3 control-label">Second Button Link <span class="text-danger"></span></label>

    <div class="col-sm-6">
        <input type="text" class="form-control" name="second_button_link"
               value="{{ old('second_button_link', isset($banner->second_button_link) ? $banner->second_button_link : '') }}"/>
        <span class="validation-error">{{ $errors->first('second_button_link') }}</span>
    </div>
</div>


<div class="form-group">
    <label class="col-sm-3 control-label">Second Button Target</label>
    <div class="col-sm-6">
        <input type="radio" name="second_button_target" value="parent" class="radio-inline"
                {{ old('second_button_target', isset($banner->second_button_target) ? $banner->second_button_target : '')=='parent'?'checked="checked"':''}}> Available
        <input type="radio" name="second_button_target" value="newtab" class="radio-inline"
                {{ old('second_button_target', isset($banner->second_button_target) ? $banner->second_button_target : '')=='newtab'?'checked="checked"':''}}> Not Available
    </div>
</div>


<div class="form-group">
    <label class="col-sm-3 control-label">Visibility</label>
    <div class="col-sm-6">
        <input type="radio" name="visibility" value="visible" class="radio-inline"
                {{ old('visibility', isset($banner->visibility) ? $banner->visibility : '')=='visible'?'checked="checked"':''}}> Visible
        <input type="radio" name="visibility" value="not_visible" class="radio-inline"
                {{ old('visibility', isset($banner->visibility) ? $banner->visibility : '')=='not_visible'?'checked="checked"':''}}> Not Visible
    </div>
</div>


<div class="form-group">
    <label class="col-sm-3 control-label">Status <span class="text-danger">*</span></label>

    <div class="col-sm-6">
        <select class="form-control" name="status">
            <option value="active"
                    {{ old('status', isset($banner->status) ? $banner->status : '') == 'active' ? 'selected="selected"' : '' }}
            >Active
            </option>
            <option value="in_active"
                    {{ old('status', isset($banner->status) ? $banner->status : '') == 'in_active' ? 'selected="selected"' : '' }}
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
        <a href="{{ route('banner.index') }}" class="btn btn-default btn-sm">
            <i class="icon-reply"></i> Back
        </a>
    </div>
</div>

@section('page-specific-scripts')
    <script type="text/javascript">
        $('#category_id').change(function () {
            var category_id = $('#category_id').val();
            var optionText = '<option value ="0">Select Sub-Category</option>';
            $.ajax({
                method: 'POST',
                url: '{{ route('course.getsubcat') }}',
                data: {
                    '_token' : '{{ csrf_token() }}',
                    category_id:category_id,
                },
                dataType:"json",

                success: function (response) {
                    $.each(response, function(key,value) {
                        optionText += '<option value="' + value.id + '">' + value.name + '</option>';
                    });

                    $('#sub_category_id').html(optionText);

                    //document.getElementById("sub_category_id").innerHTML=response;
                },

                error: function(jqXHR, textStatus, errorThrown) {
                    console.log(textStatus, errorThrown);
                }
            });
        });

        $('#sub_category_id').change(function () {
            var sub_category_id = $('#sub_category_id').val();
            var optionGradeText = '<option value ="0">Select Grade</option>';
            $.ajax({
                method: 'POST',
                url: '{{ route('course.getGrade') }}',
                data: {
                    '_token' : '{{ csrf_token() }}',
                    sub_category_id:sub_category_id,
                },
                dataType:"json",

                success: function (response) {
                    $.each(response, function(key,value) {
                        optionGradeText += '<option value="' + value.id + '">' + value.title + '</option>';
                    });

                    $('#grade_id').html(optionGradeText);

                    //document.getElementById("sub_category_id").innerHTML=response;
                },

                error: function(jqXHR, textStatus, errorThrown) {
                    console.log(textStatus, errorThrown);
                }
            });
        });

    </script>
@endsection