<h4 class="section-title">Expectation</h4>
<div class="form-row">
    <div class="col-sm-4">
        <div class="form-group mb-3">
            <label class="form-label" for="expectation_jathagam_id">Jathagam<span
                    class="require-star">*</span></label>
            <div class="input-group">
                <div class="input-group-prepend"><span class="input-group-text"><i
                            class="fas fa-caret-down"></i></span></div>
                <select type="select" name="expectation_jathagam_id[]" id="exp_jathagam"
                    class="form-control aiz-selectpicker required " multiple ""
                    data-live-search="true" -data-width="auto">
                    <option style="display:none" value="">-- Select --</option>
                    @isset($record['jathagams'])
                        @foreach ($record['jathagams'] as $value => $label)
                            <option value="{{ $value }}">{{ $label }}</option>
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
            <label class="form-label" for="expectation_marital_status_id">Marital Status<span
                    class="require-star">*</span></label>
            <div class="input-group">
                <div class="input-group-prepend"><span class="input-group-text"><i
                            class="fas fa-caret-down"></i></span></div>
                <select type="select" name="expectation_marital_status_id[]"
                    id="exp_maritalstatus"
                    class="form-control aiz-selectpicker required " multiple ""
                    data-live-search="true" -data-width="auto">
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
    <div class="col-sm-4">
        <div class="form-group mb-3">
            <label class="form-label" for="expectation_work_place_id">Work Place<span
                    class="require-star">*</span></label>
            <div class="input-group">
                <div class="input-group-prepend"><span class="input-group-text"><i
                            class="fas fa-caret-down"></i></span></div>
                <select type="select" name="expectation_work_place_id[]" id="exp_work_place"
                    class="form-control aiz-selectpicker required " multiple ""
                    data-live-search="true" -data-width="auto">
                    <option style="display:none" value="">-- Select --</option>
                    @isset($record['work_places'])
                        @foreach ($record['work_places'] as $value => $label)
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
<div class="form-row">
    <div class="col-sm-6">
        <div class="form-group mb-3">
            <label class="form-label" for="expectation_nakshatra">Matching Nakshatras<span
                    class="require-star">*</span></label>
            <textarea class="form-control required" id="expectation_nakshatra" name="exp_nakshatra" rows="3"
                maxlength="300"></textarea>
            <small class="form-text text-muted text-help"></small>
            <span class="invalid-feedback"></span>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group mb-3">
            <label class="form-label" for="expectation">Expectation<span
                    class="require-star">*</span></label>
            <textarea class="form-control required" id="expectation" name="expectation" rows="3" maxlength="300"></textarea>
            <small class="form-text text-muted text-help"></small>
            <span class="invalid-feedback"></span>
        </div>
    </div>
</div>