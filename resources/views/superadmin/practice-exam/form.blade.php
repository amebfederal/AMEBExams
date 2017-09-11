{!! csrf_field() !!}

@foreach ($errors->all() as $error)
    <div>{{ $error }}</div>
@endforeach

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
        Exam Id<span class="text-danger">*</span>
    </label>

    <div class="col-sm-6">
        <select class="form-control" name="exam_id">
            @foreach($exams as $exam)
                <option value="{{ $exam->id }}"
                        {{ old('exam_id', isset($product->exam_id) ? $product->exam_id : '') == $exam->exam_id ? 'selected="selected"' : '' }}
                        >{{ $cat->name }}
                </option>
            @endforeach
        </select>
        <span class="validation-error">{{ $errors->first('exam_id') }}</span>
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
    <label class="col-sm-3 control-label">Price <span class="text-danger">*</span></label>

    <div class="col-sm-6">
        <input type="text" name="price" placeholder="Price for the Exam" class="form-control"
               value="{{ old('price', isset($product->price) ? $product->price : '') }}">
        <span class="validation-error">{{ $errors->first('price') }}</span>
    </div>
</div>

<div class="form-group">
    <label class="col-sm-3 control-label">No of Practice Exams <span class="text-danger">*</span></label>

    <div class="col-sm-6">
        <input type="text" name="no_of_practice_exams" placeholder="Price for the Exam" class="form-control"
               value="{{ old('no_of_practice_exams', isset($product->no_of_practice_exams) ? $product->no_of_practice_exams : '2') }}">
        <span class="validation-error">{{ $errors->first('no_of_practice_exams') }}</span>
    </div>
</div>


<div class="form-group">
    <label class="col-sm-3 control-label">Allowed Number <span class="text-danger">*</span></label>

    <div class="col-sm-6">
        <input type="text" name="allowed_number" placeholder="Allowed number for the Exam" class="form-control"
               value="{{ old('allowed_number', isset($product->allowed_number) ? $product->allowed_number : '') }}">
        <span class="validation-error">{{ $errors->first('allowed_number') }}</span>
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
        <a href="{{ route('practice-exam.index') }}" class="btn btn-default btn-sm">
            <i class="fa fa-aw fa-reply-o"></i> Back
        </a>
    </div>
</div>