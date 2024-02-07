<div class="form-row">
    <div class="col-md-6 div-photo text-center">
        <div class="form-group mx-auto">
            <label class="form-label w-100" for="photo">Upload your Photo<span class="require-star">*</span></label>
            <div class="input-group fileinput fileinput-new text-center" data-provides="fileinput">
                <div class="fileinput-new thumbnail img-raised">
                    <img src="{{ asset('img/registration/profile.png') }}" alt="photo">
                </div>
                <div class="fileinput-preview fileinput-exists thumbnail img-raised"></div>
                <div>
                    <span class="btn btn-raised btn-round btn-primary btn-file btn-sm">
                        <span class="fileinput-new" onclick="$('#photo').trigger('click');">Upload your Photo</span>
                        <span class="fileinput-exists" onclick="$('#photo').trigger('click');">Change</span>
                        <input type="file" class="required" name="photo_file" id="photo_file" accept=".jpg,.jpeg,.png" />
                    </span>
                    <a href="#pablo" class="btn btn-danger btn-round btn-sm fileinput-exists"
                        data-dismiss="fileinput"><i class="fas fa-times"></i> Remove</a>
                </div>
            </div>
            <h5 class="info-text mb-0" id="photo_help"></h5>
            <small class="form-text text-muted">Only jpeg, jpg, png files less than <span class="text-bold">2 MB</span>
                are allowed.</small>
            <span class="invalid-feedback"></span>
        </div>
    </div>
    <div class="col-md-6 text-center">
        <div class="form-group mx-auto">
            <label class="form-label w-100" for="jathagam_file">Upload your Horoscope<span
                    class="require-star">*</span></label>
            <div class="input-group fileinput fileinput-new text-center" data-provides="fileinput">
                <div class="fileinput-new thumbnail img-raised">
                    <img src="{{ asset('img/registration/horoscope.png') }}"
                        alt="jathagam_file">
                </div>
                <div class="fileinput-preview fileinput-exists thumbnail img-raised"></div>
                <div>
                    <span class="btn btn-raised btn-round btn-primary btn-file btn-sm">
                        <span class="fileinput-new" onclick="$('#jathagam_file').trigger('click');">Upload your
                            Horoscope</span>
                        <span class="fileinput-exists" onclick="$('#jathagam_file').trigger('click');">Change</span>
                        <input type="file" class="required" name="jathagam_file" id="jathagam_file"
                            accept=".jpg,.jpeg,.png" />
                    </span>
                    <a href="#pablo" class="btn btn-danger btn-round btn-sm fileinput-exists"
                        data-dismiss="fileinput"><i class="fas fa-times"></i> Remove</a>
                </div>
            </div>
            <h5 class="info-text mb-0" id="jathagam_file_help"></h5>
            <small class="form-text text-muted">Only jpeg, jpg, png files less than <span class="text-bold">2 MB</span>
                are allowed.</small>
            <span class="invalid-feedback"></span>
        </div>
    </div>
</div>
    
<h4 class="section-title">Basic Information</h4>
<div class="row">
    <div class="col-sm-4">
        <div class="form-group mb-3">
            <label class="form-label" for="title">Name<span class="require-star">*</span></label>
            <div class="input-group">
                <div class="input-group-prepend"><span class="input-group-text"><i class="fas fa-user"></i></span></div>
                <input type="text" class="form-control required " value="" id="title" name="title"
                    maxlength="255">
            </div>
            <small class="form-text text-muted text-help"><span style="color:red">முடிந்தவரை தமிழில் பதிவு
                    செய்யவும்.</span></small>
            <span class="invalid-feedback"></span>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="form-group mb-3">
            <label class="form-label" for="email">Email<span class="require-star">*</span></label>
            <div class="input-group">
                <div class="input-group-prepend"><span class="input-group-text"><i class="fas fa-envelope"></i></span>
                </div>
                <input type="email" class="form-control required " value="" id="email" name="email"
                    maxlength="255">
            </div>
            <small class="form-text text-muted text-help"></small>
            <span class="invalid-feedback"></span>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="form-group mb-3">
            <label class="form-label" for="passwd">New Password<span class="require-star">*</span></label>
            <div class="input-group">
                <div class="input-group-prepend"><span class="input-group-text"><i class="fas fa-key"></i></span>
                </div>
                <input type="password" class="form-control required " value="" id="password" name="password"
                    maxlength="100"><button id="toggle-pwd" type="button"><i class="fa fa-eye"></i></button><span
                    class="">
            </div>
            <small class="form-text text-muted text-help">New Password for
                login.</small>
            <span class="invalid-feedback"></span>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="form-group mb-3">
            <label class="form-label" for="gender_id">Gender<span class="require-star">*</span></label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-caret-down"></i></span>
                </div>
                <select type="select" name="gender_id" id="gender_id"
                    class="form-control aiz-selectpicker required " data-live-search="true" -data-width="auto">
                    <option style="display:none" value="">-- Select --</option>
                    @isset($record['genders'])
                        @foreach ($record['genders'] as $value => $label)
                            <option value="{{ $value }}">{{ $label }}</option>
                        @endforeach
                    @endisset
                </select>
            </div>
            <small class="form-text text-muted text-help"></small>
            <span class="invalid-feedback"></span>
        </div>
    </div>
    <div class="col-sm-4 div-marital_status_id">
        <div class="form-group mb-3">
            <label class="form-label" for="marital_status_id">Marital Status<span
                    class="require-star">*</span></label>
            <div class="input-group">
                <div class="input-group-prepend"><span class="input-group-text"><i
                            class="fas fa-caret-down"></i></span>
                </div>
                <select type="select" name="marital_status_id" id="marital_status_id"
                    class="form-control aiz-selectpicker required " data-live-search="true" -data-width="auto">
                    <option style="display:none" value="">-- Select --</option>
                    @isset($record['marital_statuses'])
                        @foreach ($record['marital_statuses'] as $value => $label)
                            <option value="{{ $value }}">{{ $label }}</option>
                        @endforeach
                    @endisset
                </select>
            </div>
            <small class="form-text text-muted text-help"></small>
            <span class="invalid-feedback"></span>
        </div>
    </div>
    <div class="col-sm-4 div-marital-details hide">
        <div class="form-group mb-3">
            <label class="form-label" for="marital_details">Marriage Details<span
                    class="require-star">*</span></label>
            <div class="input-group">
                <div class="input-group-prepend"><span class="input-group-text"><i class="fas fa-pen"></i></span>
                </div>
                <input type="text" class="form-control required " value="" id="marital_details"
                    name="marital_details" maxlength="255">
            </div>
            <small class="form-text text-muted text-help"></small>
            <span class="invalid-feedback"></span>
        </div>
    </div>
    <div class="col-sm-4 div-marital-details hide">
        <div class="form-group mb-3">
            <label class="form-label" for="children_details">Children Details<span
                    class="require-star">*</span></label>
            <div class="input-group">
                <div class="input-group-prepend"><span class="input-group-text"><i class="fas fa-pen"></i></span>
                </div>
                <input type="text" class="form-control required " value="" id="children_details"
                    name="children_details" maxlength="255">
            </div>
            <small class="form-text text-muted text-help"></small>
            <span class="invalid-feedback"></span>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="form-group mb-3">
            <label class="form-label" for="registered_by_id">Registered By<span class="require-star">*</span></label>
            <div class="input-group">
                <div class="input-group-prepend"><span class="input-group-text"><i
                            class="fas fa-caret-down"></i></span></div>
                <select type="select" name="registered_by_id" id="registered_by_id"
                    class="form-control aiz-selectpicker required " data-live-search="true" -data-width="auto">
                    <option style="display:none" value="">-- Select --</option>
                    @isset($record['registered_bies'])
                        @foreach ($record['registered_bies'] as $value => $label)
                            <option value="{{ $value }}">{{ $label }}</option>
                        @endforeach
                    @endisset
                </select>
            </div>
            <small class="form-text text-muted text-help"></small>
            <span class="invalid-feedback"></span>
        </div>
    </div>
</div>
