@extends('layouts.frontend-account')
@section('content')
    <div id="page-content" class="col-md-12 center-margin frontend-components mrg25T">
        @foreach ($errors->all() as $error)
                                    <div>{{ $error }}</div>
                                @endforeach
        <div class="row">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">

                        <div id="page-title">
                        </div>

                        <div class="panel">
                            <div class="panel-body">
                                <h3 class="title-hero">
                                    Fields with (*) are Mandatory
                                </h3>
                                <div class="example-box-wrapper">
                                    <form class="form-horizontal bordered-row" method="post"
                                          action="{{ route('do-register') }}">
                                        {!! csrf_field() !!}
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="hidden" name="preference" value="{{ $data['preference'] }}"/>
                                                <label class="col-sm-3 control-label">Title</label>

                                                <div class="col-sm-9">
                                                    <select class="form-control" name="title">
                                                        <option selected="selected" value="">Select Title</option>
                                                        <option value="none">None</option>
                                                        <option value="mr" {{ old('title') == 'mr' ? 'selected="selected"' : '' }}>
                                                            Mr
                                                        </option>
                                                        <option value="ms" {{ old('title') == 'ms' ? 'selected="selected"' : '' }}>
                                                            Ms
                                                        </option>
                                                        <option value="mrs" {{ old('title') == 'mrs' ? 'selected="selected"' : '' }}>
                                                            Mrs
                                                        </option>
                                                        <option value="dr" {{ old('title') == 'dr' ? 'selected="selected"' : '' }}>
                                                            Dr
                                                        </option>
                                                        <option value="prof" {{ old('title') == 'prof' ? 'selected="selected"' : '' }}>
                                                            Prof
                                                        </option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">Role*</label>

                                                <div class="col-sm-9">
                                                    <label class="radio-inline">
                                                        <input type="radio" id="" name="role" value="teacher"
                                                                {{ old('role') == 'teacher' ? 'checked="checked"' : '' }}>
                                                        Teacher
                                                    </label>
                                                    <label class="radio-inline">
                                                        <input type="radio" id="" name="role" value="parent"
                                                                {{ old('role') == 'parent' ? 'checked="checked"' : '' }}>
                                                        Parent
                                                    </label>
                                                    <label class="radio-inline">
                                                        <input type="radio" id="" name="role" value="adult-learner"
                                                                {{ old('role') == 'adult-learner' ? 'checked="checked"' : '' }}>
                                                        Adult Learner
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">First Name*</label>

                                                <div class="col-sm-9">
                                                    <input type="text" name="fname" value="{{ old('fname') }}"
                                                           class="form-control {{ $errors->first('lname') ? 'errorbox' : '' }}"
                                                           placeholder="Your first name">
                                                    <i class="errormsg">{{ $errors->first('fname') }}</i>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">Last Name*</label>

                                                <div class="col-sm-9">
                                                    <input type="text" name="lname" value="{{ old('lname') }}"
                                                           class="form-control {{ $errors->first('lname') ? 'errorbox' : '' }}"
                                                           id=""
                                                           placeholder="Your last name">
                                                    <i class="errormsg">{{ $errors->first('lname') }}</i>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">Email Address*</label>

                                                <div class="col-sm-9">
                                                    <input type="text" name="email"
                                                           class="form-control {{ $errors->first('email') ? 'errorbox' : '' }}"
                                                           value="{{ old('email') }}"
                                                           placeholder="Your email address">
                                                    <small><p><i style="color: #999999;">Your email address will be your
                                                                Account Holder username.</i></p></small>
                                                    <i class="errormsg">{{ $errors->first('email') }}</i>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">Confirm Email*</label>

                                                <div class="col-sm-9">
                                                    <input type="text"
                                                           name="confirm_email"
                                                           class="form-control {{ $errors->first('confirm_email') ? 'errorbox' : '' }}" id="" value="{{ old('confirm_email') }}"
                                                           placeholder="Re-confirm email address">
                                                    <i class="errormsg">{{ $errors->first('confirm_email') }}</i>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">Password*</label>

                                                <div class="col-sm-9">
                                                    <input type="password"
                                                           class="form-control {{ $errors->first('password') ? 'errorbox' : '' }}"
                                                           name="password"
                                                           placeholder="Your password">
                                                    <small><i style="{{ !$errors->first('password') ? 'color: #999999;' : 'color: red' }}">Password must be at least 8
                                                            characters long,
                                                            must contain at least one capital letter, one symbol and one
                                                            number.</i></small>
                                                </div>

                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">Confirm Password*</label>

                                                <div class="col-sm-9">
                                                    <input type="password"
                                                           class="form-control {{ $errors->first('confirm_password') ? 'errorbox' : '' }}"
                                                           id=""
                                                           name="confirm_password" placeholder="Re-confirm password">
                                                    <i class="errormsg">{{ $errors->first('confirm_password') }}</i>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">Preferred Phone*</label>

                                                <div class="col-sm-9">
                                                    <input type="text" name="phone" value="{{ old('phone') }}"
                                                           class="form-control popover-button-default {{ $errors->first('phone') ? 'errorbox' : '' }}"
                                                           placeholder="Your phone or mobile number">
                                                    <i class="errormsg">{{ $errors->first('phone') }}</i>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">Other Phone</label>

                                                <div class="col-sm-9">
                                                    <input type="text" name="o_phone" value="{{ old('o_phone') }}"
                                                           class="form-control popover-button-default {{ $errors->first('o_phone') ? 'errorbox' : '' }}"
                                                           placeholder="Your phone or mobile number">
                                                    <i class="errormsg">{{ $errors->first('o_phone') }}</i>
                                                </div>
                                            </div>


                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">School Name</label>

                                                <div class="col-sm-9">
                                                    <input type="text" name="school_name"
                                                           value="{{ old('school_name') }}"
                                                           class="form-control popover-button-default"
                                                           placeholder="Your School name (only if account is for a school)">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">Address Line 1*</label>

                                                <div class="col-sm-9">
                                                    <input type="text" name="address" value="{{ old('address') }}"
                                                           class="form-control popover-button-default {{ $errors->first('address') ? 'errorbox' : '' }}"
                                                           placeholder="Your unit number / street number and name">
                                                    <i class="errormsg">{{ $errors->first('address') }}</i>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">Address Line 2</label>

                                                <div class="col-sm-9">
                                                    <input type="text" name="alt_address"
                                                           value="{{ old('alt_address') }}"
                                                           class="form-control popover-button-default"
                                                           placeholder="Your unit number / street number and name">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">City*</label>

                                                <div class="col-sm-9">
                                                    <input type="text" name="city" value="{{ old('city') }}"
                                                           class="form-control popover-button-default {{ $errors->first('city') ? 'errorbox' : '' }}"
                                                           placeholder="Your city name">
                                                    <i class="errormsg">{{ $errors->first('city') }}</i>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">Suburb*</label>

                                                <div class="col-sm-9">
                                                    <input type="text" name="suburb" value="{{ old('suburb') }}"
                                                           class="form-control popover-button-default {{ $errors->first('suburb') ? 'errorbox' : '' }}"
                                                           placeholder="Your suburb name">
                                                    <i class="errormsg">{{ $errors->first('suburb') }}</i>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">{{ $data['state'] == 'others' ? 'Country' : 'State' }}
                                                    *</label>

                                                <div class="col-sm-9">
                                                    <input name="chosen_state" type="hidden" value="{{ $data['state'] }}">
                                                    <select class="form-control" name="state_id">
                                                        <option>Select State (Country)</option>
                                                        @if($data['state'] == 'others')
                                                            @foreach($countries as $country)
                                                                <option value="{{ $country->id }}" {{ old('state') == $country->id ? 'selected="selected"' : '' }}
                                                                        {{ $country->code == $data['country'] ? 'selected="selected"' : '' }}
                                                                        >{{ $country->name }}</option>
                                                            @endforeach
                                                        @else
                                                            @foreach($states as $state)
                                                                <option value="{{ $state->id }}" {{ old('state') == $state->id ? 'selected="selected"' : '' }}
                                                                        {{ $state->id == $data['state'] ? 'selected="selected"' : '' }}>
                                                                    {{ $state->name }}
                                                                </option>
                                                            @endforeach
                                                        @endif
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">Postcode*</label>

                                                <div class="col-sm-9">
                                                    <input type="text" name="postcode" value="{{ old('postcode') }}"
                                                           class="form-control popover-button-default {{ $errors->first('postcode') ? 'errorbox' : '' }}"
                                                           placeholder="Your postcode">
                                                    <i class="errormsg">{{ $errors->first('postcode') }}</i>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label"></label>

                                                <div class="col-sm-9">
                                                    <?php echo Recaptcha::render(['lang' => 'en']); ?>
                                                    <i class="errormsg">{{ $errors->first('g-recaptcha-response') }}</i>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label"></label>

                                                <div class="col-sm-9">
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

                                                <div class="col-sm-9 pull-right">
                                                    <input type="submit" id="" name="register" value="Register"
                                                           class="btn border-default btn-success btn-block">
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection

