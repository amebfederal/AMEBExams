{!! csrf_field() !!}
<div class="col-md-6">
    <div class="form-group">
        <label class="col-sm-3 control-label">Title</label>
        <div class="col-sm-6">
            <select class="form-control" name="title">
                <option selected="selected" value="">Select Title</option>
                <option value="none">None</option>
                <option value="mr" {{ old('title', isset($account->title) ? $account->title : '') == 'mr' ? 'selected="selected"' : '' }}>
                    Mr
                </option>
                <option value="ms" {{ old('title', isset($account->title) ? $account->title : '') == 'ms' ? 'selected="selected"' : '' }}>
                    Ms
                </option>
                <option value="mrs" {{ old('title', isset($account->title) ? $account->title : '') == 'mrs' ? 'selected="selected"' : '' }}>
                    Mrs
                </option>
                <option value="dr" {{ old('title', isset($account->title) ? $account->title : '') == 'dr' ? 'selected="selected"' : '' }}>
                    Dr
                </option>
                <option value="prof" {{ old('title', isset($account->title) ? $account->title : '') == 'prof' ? 'selected="selected"' : '' }}>
                    Prof
                </option>
            </select>
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-3 control-label">Role*</label>

        <div class="col-sm-6">
            <label class="radio-inline">
                <input type="radio" id="" name="role" value="teacher"
                        {{ old('role', isset($account->role) ? $account->role : '') == 'teacher' ? 'checked="checked"' : '' }}>
                Teacher
            </label>
            <label class="radio-inline">
                <input type="radio" id="" name="role" value="parent"
                        {{ old('role', isset($account->role) ? $account->role : '') == 'parent' ? 'checked="checked"' : '' }}>
                Parent
            </label>
            <label class="radio-inline">
                <input type="radio" id="" name="role" value="adult-learner"
                        {{ old('role', isset($account->role) ? $account->role : '') == 'adult-learner' ? 'checked="checked"' : '' }}>
                Adult Learner
            </label>
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-3 control-label">First Name*</label>

        <div class="col-sm-6">
            <input type="text" name="fname" value="{{ old('fname', isset($account->fname) ? $account->fname : '') }}"
                   class="form-control {{ $errors->first('fname') ? 'errorbox' : '' }}"
                   placeholder="Your first name">
            <i class="errormsg">{{ $errors->first('fname') }}</i>
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-3 control-label">Last Name*</label>

        <div class="col-sm-6">
            <input type="text" name="lname" value="{{ old('fname', isset($account->lname) ? $account->lname : '') }}"
                   class="form-control {{ $errors->first('lname') ? 'errorbox' : '' }}"
                   id=""
                   placeholder="Your last name">
            <i class="errormsg">{{ $errors->first('lname') }}</i>
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-3 control-label">Email Address*</label>

        <div class="col-sm-6">
            <input type="text" name="email"
                   class="form-control {{ $errors->first('email') ? 'errorbox' : '' }}"
                   value="{{ old('fname', isset($account->email) ? $account->email : '') }}"
                   placeholder="Your email address">
            <small><p><i style="color: #999999;">Your email address will be your
                        Account Holder username.</i></p></small>
            <i class="errormsg">{{ $errors->first('email') }}</i>
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-3 control-label">Confirm Email*</label>

        <div class="col-sm-6">
            <input type="text"
                   name="confirm_email"
                   class="form-control {{ $errors->first('confirm_email') ? 'errorbox' : '' }}" id="" value="{{ old('confirm_email', isset($account->confirm_email) ? $account->confirm_email : '') }}"
                   placeholder="Re-confirm email address">
            <i class="errormsg">{{ $errors->first('confirm_email') }}</i>
        </div>
    </div>

    <div class="form-group">
        <label class="col-sm-3 control-label">Password*</label>

        <div class="col-sm-6">
            <input type="password"
                   class="form-control {{ $errors->first('password') ? 'errorbox' : '' }}"
                   name="password"
                   placeholder="Your password">
            <i class="errormsg" style="display: block">{{ $errors->first('password') }}</i>
        </div>

    </div>
    <div class="form-group">
        <label class="col-sm-3 control-label">Confirm Password*</label>

        <div class="col-sm-6">
            <input type="password"
                   class="form-control {{ $errors->first('confirm_password') ? 'errorbox' : '' }}"
                   id=""
                   name="confirm_password" placeholder="Re-confirm password">
            <i class="errormsg">{{ $errors->first('confirm_password') }}</i>
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-3 control-label">Preferred Phone*</label>

        <div class="col-sm-6">
            <input type="text" name="phone" value="{{ old('phone', isset($account->phone) ? $account->phone : '') }}"
                   class="form-control popover-button-default {{ $errors->first('phone') ? 'errorbox' : '' }}"
                   placeholder="Your phone or mobile number">
            <i class="errormsg">{{ $errors->first('phone') }}</i>
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-3 control-label">Other Phone</label>

        <div class="col-sm-6">
            <input type="text" name="o_phone" value="{{ old('o_phone', isset($account->o_phone) ? $account->o_phone : '') }}"
                   class="form-control popover-button-default {{ $errors->first('o_phone') ? 'errorbox' : '' }}"
                   placeholder="Your phone or mobile number">
            <i class="errormsg">{{ $errors->first('o_phone') }}</i>
        </div>
    </div>


</div>
<div class="col-md-6">
    <div class="form-group">
        <label class="col-sm-3 control-label">School Name</label>

        <div class="col-sm-6">
            <input type="text" name="school_name"
                   value="{{ old('school_name', isset($account->school_name) ? $account->school_name : '') }}"
                   class="form-control popover-button-default"
                   placeholder="Your School name (only if account is for a school)">
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-3 control-label">Address Line 1*</label>

        <div class="col-sm-6">
            <input type="text" name="address" value="{{ old('address', isset($account->address) ? $account->address : '') }}"
                   class="form-control popover-button-default {{ $errors->first('address') ? 'errorbox' : '' }}"
                   placeholder="Your unit number / street number and name">
            <i class="errormsg">{{ $errors->first('address') }}</i>
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-3 control-label">Address Line 2</label>

        <div class="col-sm-6">
            <input type="text" name="alt_address"
                   value="{{ old('alt_address', isset($account->alt_address) ? $account->alt_address : '') }}"
                   class="form-control popover-button-default"
                   placeholder="Your unit number / street number and name">
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-3 control-label">City*</label>

        <div class="col-sm-6">
            <input type="text" name="city" value="{{ old('city', isset($account->city) ? $account->city : '') }}"
                   class="form-control popover-button-default {{ $errors->first('city') ? 'errorbox' : '' }}"
                   placeholder="Your city name">
            <i class="errormsg">{{ $errors->first('city') }}</i>
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-3 control-label">Suburb*</label>

        <div class="col-sm-6">
            <input type="text" name="suburb" value="{{ old('suburb', isset($account->suburb) ? $account->suburb : '') }}"
                   class="form-control popover-button-default {{ $errors->first('suburb') ? 'errorbox' : '' }}"
                   placeholder="Your suburb name">
            <i class="errormsg">{{ $errors->first('suburb') }}</i>
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-3 control-label">{{ $account['state'] == 'others' ? 'Country' : 'State' }}
            *</label>

        <div class="col-sm-6">
            <select class="form-control" name="state_id">
                <option>Select State (Country)</option>
                @if($account['state'] == 'others')
                    @foreach($countries as $country)
                        <option value="{{ $country->id }}" {{ old('state') == $country->id ? 'selected="selected"' : '' }}
                                {{ $country->code == $account['country'] ? 'selected="selected"' : '' }}
                        ></option>
                    @endforeach
                @else
                    @foreach($states as $state)
                        <option value="{{ $state->id }}" {{ old('state') == $state->id ? 'selected="selected"' : '' }}
                                {{ $state->id == $account['state'] ? 'selected="selected"' : '' }}>
                            {{ $state->name }}
                        </option>
                    @endforeach
                @endif
            </select>
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-3 control-label">Postcode*</label>

        <div class="col-sm-6">
            <input type="text" name="postcode" value="{{ old('postcode', isset($account->postcode) ? $account->postcode : '') }}"
                   class="form-control popover-button-default {{ $errors->first('postcode') ? 'errorbox' : '' }}"
                   placeholder="Your postcode">
            <i class="errormsg">{{ $errors->first('postcode') }}</i>
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-3 control-label"></label>

        <div class="col-sm-6">
            <?php echo Recaptcha::render(['lang' => 'en']); ?>
            <i class="errormsg">{{ $errors->first('g-recaptcha-response') }}</i>
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-3 control-label"></label>

        <div class="col-sm-6">
            <div class="checkbox">
                <label>
                    <input type="checkbox"
                           name="age_verification" {{ old('age_verification') == 'on' ? 'checked="checked"' : '' }}>
                    Please tick this box to confirm that you are 18 years of age
                    or older.
                </label>
            </div>
            <br/>

            <p><b>Please note:</b> Your IP address will be recorded as a
                requirement of our security policy if you continue past this
                point.</p>
        </div>
    </div>
    <div class="form-group">

        <div class="col-sm-6 pull-right">
            <input type="submit" id="" name="register" value="Update"
                   class="btn border-default btn-success btn-block">
        </div>
    </div>
</div>