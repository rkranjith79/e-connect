<h4 class="section-title">{{ trans('fields.section_expectation') }}</h4>
<div class="form-row">
    <div class="col-sm-4">
        <div class="form-group mb-3">
            <label class="form-label" for="expectation_jathagam_id">{{ trans('fields.expectation_jathagam') }}<span
                    class="require-star">*</span></label>
            <div class="input-group">
                <div class="input-group-prepend"><span class="input-group-text"><i class="fas fa-caret-down"></i></span>
                </div>
                <select type="select" name="expectation_jathagam_id[]" id="exp_jathagam"
                    class="form-control aiz-selectpicker required " multiple "" data-live-search="true"
                    -data-width="auto">
                    <option style="display:none" value="">-- Select --</option>
                    @isset($record['jathagams'])
                        @foreach ($record['jathagams'] as $value => $label)
                            <option value="{{ $value }}" @selected(in_array($value, @old('expectation_jathagam_id') ?? ($profile->expectation_jathagam_id ?? [])))>{{ $label }}</option>
                        @endforeach
                    @endisset
                </select>
            </div>
            <small class="form-text text-muted text-help"></small>
            <span class="invalid-feedback"></span>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="form-group mb-3">
            <label class="form-label"
                for="expectation_marital_status_id">{{ trans('fields.expectation_marital_status') }}<span
                    class="require-star">*</span></label>
            <div class="input-group">
                <div class="input-group-prepend"><span class="input-group-text"><i class="fas fa-caret-down"></i></span>
                </div>
                <select type="select" name="expectation_marital_status_id[]" id="exp_maritalstatus"
                    class="form-control aiz-selectpicker required " multiple "" data-live-search="true"
                    -data-width="auto">
                    <option style="display:none" value="">-- Select --</option>
                    @isset($record['marital_statuses'])
                        @foreach ($record['marital_statuses'] as $value => $label)
                            <option value="{{ $value }}" @selected(in_array($value, @old('expectation_marital_status_id') ?? ($profile->expectation_marital_status_id ?? [])))>{{ $label }}</option>
                        @endforeach
                    @endisset
                </select>
            </div>
            <small class="form-text text-muted text-help"></small>
            <span class="invalid-feedback"></span>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="form-group mb-3">
            <label class="form-label" for="expectation_work_place_id">{{ trans('fields.expectation_work_place') }}<span
                    class="require-star">*</span></label>
            <div class="input-group">
                <div class="input-group-prepend"><span class="input-group-text"><i class="fas fa-caret-down"></i></span>
                </div>
                <select type="select" name="expectation_work_place_id[]" id="exp_work_place"
                    class="form-control aiz-selectpicker required " multiple "" data-live-search="true"
                    -data-width="auto">
                    <option style="display:none" value="">-- Select --</option>
                    @isset($record['work_places'])
                        @foreach ($record['work_places'] as $value => $label)
                            <option value="{{ $value }}" @selected(in_array($value, @old('expectation_work_place_id') ?? ($profile->expectation_work_place_id ?? [])))>{{ $label }}</option>
                        @endforeach
                    @endisset
                </select>
            </div>
            <small class="form-text text-muted text-help"></small>
            <span class="invalid-feedback"></span>
        </div>
    </div>
</div>
<div class="form-row">
    <div class="col-sm-6">
        <div class="form-group mb-3">
            <label class="form-label" for="expectation_nakshatra">{{ trans('fields.expectation_nakshatra') }}<span
                    class="require-star">*</span></label>
            <textarea class="form-control required" id="expectation_nakshatra" name="expectation_nakshatra" rows="3"
                maxlength="300">{{ @old('expectation_nakshatra') ?? ($profile->expectation_nakshatra ?? '') }}</textarea>
            <small class="form-text text-muted text-help"></small>
            <span class="invalid-feedback"></span>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group mb-3">
            <label class="form-label" for="expectation">{{ trans('fields.expectation') }}<span
                    class="require-star">*</span></label>
            <textarea class="form-control required" id="expectation" name="expectation" rows="3" maxlength="300">{{ @old('expectation') ?? ($profile->expectation ?? '') }}</textarea>
            <small class="form-text text-muted text-help"></small>
            <span class="invalid-feedback"></span>
        </div>
    </div>
</div>
