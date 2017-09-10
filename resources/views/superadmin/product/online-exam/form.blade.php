{!! csrf_field() !!}

{{--@foreach ($errors->all() as $error)--}}
    {{--<div>{{ $error }}</div>--}}
{{--@endforeach--}}

<div class="form-group">
    <label class="col-sm-3 control-label">Exam Title <span class="text-danger">*</span></label>

    <div class="col-sm-6">
        <input type="text" name="title" id="title" class="form-control" placeholder="Title of Online Examination"
               value="{{ old('title', isset($product->title) ? $product->title : '') }}">
        <span class="validation-error">{{ $errors->first('title') }}</span>
    </div>
</div>
<div class="form-group">
    <label class="col-sm-3 control-label">
        Subject Code<span class="text-danger">*</span>
    </label>

    <div class="col-sm-6">
        <input type="text" name="subject_code" class="form-control" placeholder="Subject Code for Exam"
               value="{{ old('subject_code', isset($product->subject_code) ? $product->subject_code : '') }}">
        <span class="validation-error">{{ $errors->first('subject_code') }}</span>
    </div>
</div>
<div class="form-group">
    <label class="col-sm-3 control-label">Image <span class="text-danger">*</span></label>

    <div class="col-sm-6">
        @if(isset($product->image))
            <img src="{{ asset($product->thumbnail_path) }}" height="100px" alt=""/>
            <br/>
            <br/>
        @endif
        <input type="file" name="image" id="image" class="form-control">
        <span class="validation-error">{{ $errors->first('image') }}</span>
    </div>
</div>
<div class="form-group">
    <label class="col-sm-3 control-label">Short Description</label>

    <div class="col-sm-6">
        <textarea name="description" rows="3" class="form-control textarea-counter"
                  placeholder="Short description that is to be displayed for Exam">{{ old('description', isset($product->description) ? $product->description : '') }}</textarea>

        <div class="character-remaining clear input-description">125 characters left</div>
        <span class="validation-error">{{ $errors->first('description') }}</span>
    </div>
</div>
<div class="form-group">
    <label class="col-sm-3 control-label">Expiry Date (in month) <span class="text-danger">*</span></label>

    <div class="col-sm-6">
        <select class="form-control" name="expiry_months">
            @for($i = 1; $i <= 36; $i++)
                <option
                        {{ old('expiry_months', isset($product->expriry_months) ? $product->expiry_months : 12 == $i ? "selected='selected'" : '') }}>
                    {{ $i }}
                </option>
            @endfor
        </select>
        <span class="validation-error">{{ $errors->first('expiry_months') }}</span>
    </div>
</div>
<div class="form-group">
    <label class="col-sm-3 control-label">Renewal Fee Type</label>

    <div class="col-sm-6">
        <select class="form-control show-hide-renewable-fee" name="renewable_fee_type">
            <option value="default"
                    {{ old('renewable_fee_type', isset($product->renewable_fee_type) ? $product->renewable_fee_type : '') == 'default' ? 'selected="selected"' : '' }}>
                Default
            </option>
            <option value="custom"
                    {{ old('renewable_fee_type', isset($product->renewable_fee_type) ? $product->renewable_fee_type : '') == 'custom' ? 'selected="selected"' : '' }}>
                Custom
            </option>
            <option value="non-renewable"
                    {{ old('renewable_fee_type', isset($product->renewable_fee_type) ? $product->renewable_fee_type : '') == 'non-renewable' ? 'selected="selected"' : '' }}
                    }}>Non-renewable
            </option>
        </select>
    </div>
</div>
<?php $rnType = old('renewable_fee_type', isset($product->renewable_fee_type) ? $product->renewable_fee_type : '') ?>
<div class="form-group renewable-fee" style="{{ $rnType != 'custom' ? 'display: none;' : '' }}">
    <label class="col-sm-3 control-label">Renewal Fee<span class="text-danger">*</span></label>

    <div class="col-sm-6">
        <input type="text" name="renewable_fee" class="form-control" placeholder="Price of the Exam, default 0.00"
               value="{{ old('renewable_fee', isset($product->renewable_fee) ? $product->renewable_fee : '') }}">
        <span class="help-block">This should appear only if custom is selected on renewal type</span>

        <span class="validation-error">{{ $errors->first('renewable_fee') }}</span>
    </div>
</div>

<div class="form-group">
    <label class="col-sm-3 control-label">Category <span class="text-danger">*</span></label>

    <div class="col-sm-6">
        <select class="form-control change-section" name="sub_category_id" data-target=".category-grade">
            <option value="">Select Category</option>
            @foreach($subCategories as $subCategory)
                <option data-url="{{ route('sub-category.api-grade.index', $subCategory->slug) }}"
                        value="{{ $subCategory->id }}"
                        {{ old('sub_category_id', isset($product->sub_category_id) ? $product->sub_category_id : '') == $subCategory->id ? 'selected="selected"' : ''  }}>{{
                    $subCategory->name
                }}</option>
            @endforeach
        </select>
        <span class="validation-error">{{ $errors->first('sub_category_id') }}</span>
    </div>
</div>
<div class="form-group">
    <label class="col-sm-3 control-label">Grade <span class="text-danger">*</span></label>

    <div class="col-sm-6">
        <select class="form-control category-grade" name="grade_id">
            <option value="">Select Grades</option>
        </select>
        <span class="validation-error">{{ $errors->first('grade_id') }}</span>
    </div>
</div>

<div class="form-group">
    <label class="col-sm-3 control-label">Exam Duration <span class="text-danger">*</span></label>

    <div class="col-sm-6">
        <input type="text" name="exam_duration" placeholder="Duration in minutes" class="form-control"
               value="{{ old('exam_duration', isset($product->exam_duration) ? $product->exam_duration : '') }}">

        <span class="validation-error">{{ $errors->first('exam_duration') }}</span>
    </div>

</div>
<div class="form-group">
    <label class="col-sm-3 control-label">Marking Type <span class="text-danger">*</span></label>

    <div class="col-sm-6">
        <?php $markingTypes = old('marking_types', isset($product->marking_type) ? $product->marking_type : ['automated']); ?>
        <input type="checkbox" name="marking_types[]" class="checkbox-inline" value="manual"
                {{ in_array('manual', $markingTypes) ? 'checked="checked"' : '' }}>
        Manual Marking
        <input type="checkbox" name="marking_types[]" class="checkbox-inline" value="automated"
                {{ in_array('automated', $markingTypes) ? 'checked="checked"' : '' }}>
        Automated Marking
            <div class="clearfix"></div>
        <div class="validation-error">{{ $errors->first('marking_types') }}</div>
    </div>

</div>
<div class="form-group">
    <label class="col-sm-3 control-label">Certificate Type <span class="text-danger">*</span></label>

    <div class="col-sm-6">
        <?php $certificateTypes = old('certificate_types', isset($product->certificate_type) ? $product->certificate_type : []); ?>
        <input type="checkbox" name="certificate_types[]" class="checkbox-inline" value="e-certificate"
                {{ in_array('e-certificate', $certificateTypes) ? 'checked="checked"' : '' }}>
        E-Certificate Marking
        <input type="checkbox" name="certificate_types[]" class="checkbox-inline" value="hard-copy"
                {{ in_array('hard-copy', $certificateTypes) ? 'checked="checked"' : '' }}>
        Hard Copy
            <div class="clearfix"></div>
        <span class="validation-error">{{ $errors->first('certificate_types') }}</span>
    </div>

</div>

<div class="form-group">
    <label class="col-sm-3 control-label">Availability for States <span class="text-danger">*</span></label>

    <div class="col-sm-6">
        <input type="checkbox" name="all_states" class="checkbox-inline all-states" value="all"/> Select All States
        <select multiple="" class="multi-select state-options" name="states[]"
                style="position: absolute; left: -9999px;"
                id="714multiselect">
            <?php $stateIds = old('states', isset($product->state_ids) ? $product->state_ids : []); ?>
            @foreach($states as $state)
                <option value="{{ $state->id }}"
                        {{ in_array($state->id, $stateIds) ? 'selected="selected"' : '' }}
                        >{{ $state->name }}</option>
            @endforeach
        </select>
    </div>
</div>

<div class="form-group">
    <label class="col-sm-3 control-label">Default Price <span class="text-danger">*</span></label>

    <div class="col-sm-6">
        <input type="text" name="default_price" placeholder="Global Price" class="form-control"
               value="{{ old('default_price', isset($product->default_price) ? $product->default_price : '') }}">
        <span class="validation-error">{{ $errors->first('default_price') }}</span>
    </div>
</div>

<div class="form-group">
    <label class="col-sm-3 control-label">Rising Software Key <span class="text-danger">*</span></label>

    <div class="col-sm-6">
        <input type="text" name="rising_software_key" id="" class="form-control" placeholder="Enter Rising Software Key"
               value="{{ old('rising_software_key', isset($product->rising_software_key) ? $product->rising_software_key : '') }}">
        <span class="validation-error">{{ $errors->first('rising_software_key') }}</span>
    </div>
</div>

<div class="form-group">
    <label class="col-sm-3 control-label">State Price</label>

    <div class="col-sm-6">
        <div class="bootstrap-switch bootstrap-switch-wrapper bootstrap-switch-on bootstrap-switch-medium bootstrap-switch-animate">
            <div class="bootstrap-switch-container">
                <input data-on-color="primary" name="state_price"
                        {{ old('state_price', isset($product->state_price) ? $product->state_price : '') == 'state' ? 'checked' : '' }}
                       class="input-switch" data-size="medium"
                       data-on-text="Enabled" data-off-text="Disabled"
                       type="checkbox"></div>
        </div>
    </div>
</div>

<div class="form-group">
    <label class="col-sm-3 control-label">Status</label>

    <div class="col-sm-6">
        <div class="bootstrap-switch bootstrap-switch-wrapper bootstrap-switch-on bootstrap-switch-medium bootstrap-switch-animate">
            <div class="bootstrap-switch-container">
                <input data-on-color="primary" name="status"
                        {{ old('status', isset($product->status) ? $product->status : 'active') == 'active' ? 'checked' : '' }}
                       class="input-switch" data-size="medium"
                       data-on-text="Enabled" data-off-text="Disabled"
                       type="checkbox"></div>
        </div>
    </div>
</div>

<div class="form-group">
    <label class="col-sm-3 control-label">Visibility</label>

    <div class="col-sm-6">
        <div class="bootstrap-switch bootstrap-switch-wrapper bootstrap-switch-on bootstrap-switch-medium bootstrap-switch-animate">
            <div class="bootstrap-switch-container">
                <input data-on-color="primary" name="visibility"
                        {{ old('visibility', isset($product->visibility) ? $product->visibility : 'visible') == 'visible' ? 'checked' : '' }}
                       class="input-switch" data-size="medium"
                       data-on-text="Show" data-off-text="Hide" type="checkbox">
            </div>
        </div>
    </div>
</div>


<div class="form-group">
    <label class="col-sm-3 control-label"></label>

    <div class="col-sm-6">
        <input type="submit" class="btn btn-success btn-sm" value="Save Exam">
        <a href="{{ route('online-examination.index') }}" class="btn btn-default btn-sm">
            <i class="fa fa-aw fa-reply-o"></i> Back
        </a>
    </div>
</div>

@section('page-specific-scripts')

    <script type="text/javascript">

        $(function () {

            var currentCat = $('.change-section').val();
            if (currentCat != '' && currentCat != undefined) {
                loadGrades($('.change-section'));
            }

            $('.change-section').on('change', function (e) {
                var $this = $(this);
                loadGrades($this);
            });


            $(document).on('click', '.all-states', function () {
                if ($(this).is(':checked')) {
                    $('.state-options').multiSelect('select_all');
                } else {
                    $('.state-options').multiSelect('deselect_all');
                }
            });


            $(document).on('change', '.show-hide-renewable-fee', function () {
                var $this = $(this);

                if ($this.val() == 'custom') {
                    $('.renewable-fee').show();
                } else {
                    $('.renewable-fee').hide();
                }
            });
        });


        function loadGrades($this) {
            var target = $this.data('target'),
                    url = $('.change-section option:selected').data('url');

            optionText = '';

            ajaxCall(url, 'get', 'json', '', function (response) {
                $.each(response, function (i, v) {
                    optionText += '<option value="' + v.id + '">' + v.title + '</option>';
                });
                $(target).html(optionText);
            })
        }

    </script>

@stop