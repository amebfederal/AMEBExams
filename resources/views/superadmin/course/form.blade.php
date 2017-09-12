{!! csrf_field() !!}

<div class="form-group">
    <label class="col-sm-3 control-label">Title <span class="text-danger">*</span></label>

    <div class="col-sm-6">
        <input type="text" class="form-control" name="title"
               value="{{ old('title', isset($course->title) ? $course->title : '') }}"/>
        <span class="validation-error">{{ $errors->first('title') }}</span>
    </div>
</div>

<div class="form-group">
    <label class="col-sm-3 control-label">Subject Code <span class="text-danger">*</span></label>

    <div class="col-sm-6">
        <input type="text" name="subject_code" class="form-control"
               value="{{ old('subject_code', isset($course->subject_code) ? $course->subject_code: '')}}">
        <span class="validation-error">{{ $errors->first('subject_code') }}</span>
    </div>
</div>

<div class="form-group">
    <label class="col-sm-3 control-label">Image</label>

    <div class="col-sm-6">
        @if(isset($course->image))
            <img src="{{ asset($course->thumbnail_path) }}" height="100px" alt=""/>
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
                  name="description" >{{ old('description', isset($course->description) ? $course->description : '') }}</textarea>
        <span class="validation-error">{{ $errors->first('description') }}</span>
    </div>
</div>



<div class="form-group">
    <label class="col-sm-3 control-label">Category <span class="text-danger">*</span></label>

    <div class="col-sm-6">
        <select class="form-control" name="category_id" id="category_id">
            <option value="">Select Category</option>

             @foreach ($categories as $category)
            <option value="{{$category->id}}"
                    @if(isset($savedCategory))
                    {{$category->id==$savedCategory->id?'selected="selected"':''}}
                    @endif
            >{{$category->name}}
            </option>
            @endforeach

        </select>
        <span class="validation-error">{{ $errors->first('status') }}</span>
    </div>
</div>


<div class="form-group">
    <label class="col-sm-3 control-label">Sub Category <span class="text-danger">*</span></label>

    <div class="col-sm-6">
        <select class="form-control" name="sub_category_id" id="sub_category_id">
        @if(isset($subCategories)&&!empty($subCategories))
        <option value="{{$subCategories->id}}" selected="selected">{{$subCategories->name}}</option>
        @endif



        </select>
        <span class="validation-error">{{ $errors->first('sub_category_id') }}</span>
    </div>
</div>


<div class="form-group">
    <label class="col-sm-3 control-label">Grade <span class="text-danger">*</span></label>

    <div class="col-sm-6">
        <select class="form-control" name="grade_id" id="grade_id">
            @if(isset($grade)&&!empty($grade))
                <option value="{{$grade->id}}" selected="selected">{{$grade->title}}</option>
            @endif
        </select>
        <span class="validation-error">{{ $errors->first('grade_id') }}</span>
    </div>
</div>




<div class="form-group">
    <label class="col-sm-3 control-label">Default Price <span class="text-danger">*</span></label>

    <div class="col-sm-6">
        <input type="text" class="form-control" name="default_price"
               value="{{ old('default_price', isset($course->default_price) ? $course->default_price : '') }}"/>
        <span class="validation-error">{{ $errors->first('default_price') }}</span>
    </div>
</div>

<div class="form-group">
    <label class="col-sm-3 control-label">Rising Software Key <span class="text-danger"></span></label>

    <div class="col-sm-6">
        <input type="text" class="form-control" name="rising_software_key"
               value="{{ old('rising_software_key', isset($course->rising_software_key) ? $course->rising_software_key : '') }}"/>
        <span class="validation-error">{{ $errors->first('rising_software_key') }}</span>
    </div>
</div>

<div class="form-group">
    <label class="col-sm-3 control-label">State Price</label>

    <div class="col-sm-6">
        <div class="bootstrap-switch bootstrap-switch-wrapper bootstrap-switch-on bootstrap-switch-medium bootstrap-switch-animate">
            <div class="bootstrap-switch-container">
                <input data-on-color="primary" name="state_price"
                       {{ old('state_price', isset($course->state_price) ? $course->state_price : '') == 'state' ? 'checked' : '' }}
                       class="input-switch" data-size="medium"
                       data-on-text="Enabled" data-off-text="Disabled"
                       type="checkbox"></div>
        </div>
    </div>
</div>


<div class="form-group">
    <label class="col-sm-3 control-label">Availiability Status</label>
    <div class="col-sm-6">
        <input type="radio" name="availiability_state" value="available" class="radio-inline"
                {{ old('availiability_state', isset($course->availiability_state) ? $course->availiability_state : '')=='available'?'checked="checked"':''}}> Available
        <input type="radio" name="availiability_state" value="not_available" class="radio-inline"
                {{ old('availiability_state', isset($course->availiability_state) ? $course->availiability_state : '')=='not_available'?'checked="checked"':''}}> Not Available
    </div>
</div>


<div class="form-group">
    <label class="col-sm-3 control-label">Visibility</label>
    <div class="col-sm-6">
        <input type="radio" name="visibility" value="visible" class="radio-inline"
                {{ old('visibility', isset($course->visibility) ? $course->visibility : '')=='visible'?'checked="checked"':''}}> Visible
        <input type="radio" name="visibility" value="not_visible" class="radio-inline"
                {{ old('visibility', isset($course->visibility) ? $course->visibility : '')=='not_visible'?'checked="checked"':''}}> Not Visible
    </div>
</div>


<div class="form-group">
    <label class="col-sm-3 control-label">Status <span class="text-danger">*</span></label>

    <div class="col-sm-6">
        <select class="form-control" name="status">
            <option value="active"
                    {{ old('status', isset($course->status) ? $course->status : '') == 'active' ? 'selected="selected"' : '' }}
                    >Active
            </option>
            <option value="in_active"
                    {{ old('status', isset($course->status) ? $course->status : '') == 'in_active' ? 'selected="selected"' : '' }}
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
        <a href="{{ route('course.index') }}" class="btn btn-default btn-sm">
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