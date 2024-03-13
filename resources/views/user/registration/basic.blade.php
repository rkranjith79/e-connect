<h4 class="section-title">{{ trans("fields.section_basic") }}</h4>
<div class="row">
    <div class="col-sm-4">
        <div class="form-group mb-3">
            <label class="form-label" for="title">{{ trans("fields.name") }}<span class="require-star">*</span></label>
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
            <label class="form-label" for="email">{{ trans("fields.email") }}<span class="require-star">*</span></label>
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
            <label class="form-label" for="passwd">{{ trans("fields.password") }}<span class="require-star">*</span></label>
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
            <label class="form-label" for="gender_id">{{ trans("fields.gender") }}<span class="require-star">*</span></label>
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
            <label class="form-label" for="marital_status_id">{{ trans("fields.marital_status") }}<span
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
            <label class="form-label" for="marital_details">{{ trans("fields.marital_details") }}<span
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
            <label class="form-label" for="children_details">{{ trans("fields.children_details") }}<span
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
            <label class="form-label" for="registered_by_id">{{ trans("fields.registered_by") }}<span class="require-star">*</span></label>
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
