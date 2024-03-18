<h4 class="section-title">{{ trans('fields.section_education') }}</h4>
<div class="row">
    <div class="col-sm-3">
        <div class="form-group mb-3">
            <label class="form-label" for="education_id">{{ trans('fields.education') }}<span
                    class="require-star">*</span></label>
            <div class="input-group">
                <div class="input-group-prepend"><span class="input-group-text"><i
                            class="fas fa-graduation-cap"></i></span></div>
                <select type="select" name="education_id" id="education_id"
                    class="form-control aiz-selectpicker required " data-live-search="true" -data-width="auto">
                    <option style="display:none" value="">-- Select --</option>
                    @isset($record['educations'])
                        @foreach ($record['educations'] as $value => $label)
                            <option value="{{ $value }}" @selected(old('education_id') ?? ($profileBasic->education_id ?? '') == $value)>{{ $label }}</option>
                        @endforeach
                    @endisset
                </select>
            </div>
            <small class="form-text text-muted text-help"></small>
            <span class="invalid-feedback"></span>
        </div>
    </div>

    <div class="col-sm-3">
        <div class="form-group mb-3">
            <label class="form-label" for="education_details">{{ trans('fields.education_details') }}<span
                    class="require-star">*</span></label>
            <div class="input-group">
                <div class="input-group-prepend"><span class="input-group-text"><i
                            class="fas fa-graduation-cap"></i></span></div>
                <input type="text" class="form-control required "
                    value="{{ old('education_details') ?? ($profileBasic->education_details ?? '') }}"
                    id="education_details" name="education_details" maxlength="150">
            </div>
            <small class="form-text text-muted text-help"></small>
            <span class="invalid-feedback"></span>
        </div>
    </div>
    <div class="col-sm-3">
        <div class="form-group mb-3">
            <label class="form-label" for="work_id">{{ trans('fields.work') }}<span
                    class="require-star">*</span></label>
            <div class="input-group">
                <div class="input-group-prepend"><span class="input-group-text"><i class="fas fa-caret-down"></i></span>
                </div>
                <select type="select" name="work_id" id="work_id" class="form-control aiz-selectpicker required "
                    data-live-search="true" -data-width="auto">
                    <option style="display:none" value="">-- Select --</option>
                    @isset($record['works'])
                        @foreach ($record['works'] as $value => $label)
                            <option value="{{ $value }}" @selected(old('work_id') ?? ($profileBasic->work_id ?? '') == $value)>{{ $label }}</option>
                        @endforeach
                    @endisset
                </select>
            </div>
            <small class="form-text text-muted text-help"></small>
            <span class="invalid-feedback"></span>
        </div>
    </div>

    <div class="col-sm-3">
        <div class="form-group mb-3">
            <label class="form-label" for="work_details">{{ trans('fields.work_details') }}<span
                    class="require-star">*</span></label>
            <div class="input-group">
                <div class="input-group-prepend"><span class="input-group-text"><i class="fas fa-pen"></i></span></div>
                <input type="text" class="form-control required "
                    value="{{ old('work_details') ?? ($profileBasic->work_details ?? '') }}" id="work_details"
                    name="work_details" maxlength="150">
            </div>
            <small class="form-text text-muted text-help"></small>
            <span class="invalid-feedback"></span>
        </div>
    </div>
    <div class="col-sm-3 div-work-place">
        <div class="form-group mb-3">
            <label class="form-label" for="work_place_id">{{ trans('fields.work_place') }}<span
                    class="require-star">*</span></label>
            <div class="input-group">
                <div class="input-group-prepend"><span class="input-group-text"><i class="fas fa-caret-down"></i></span>
                </div>
                <select type="select" name="work_place_id" id="work_place_id"
                    class="form-control aiz-selectpicker required " data-live-search="true" -data-width="auto">
                    <option style="display:none" value="">-- Select --</option>
                    @isset($record['work_places'])
                        @foreach ($record['work_places'] as $value => $label)
                            <option value="{{ $value }}" @selected(old('work_place_id') ?? ($profileBasic->work_place_id ?? '') == $value)>{{ $label }}</option>
                        @endforeach
                    @endisset
                </select>
            </div>
            <small class="form-text text-muted text-help"></small>
            <span class="invalid-feedback"></span>
        </div>
    </div>
    <div class="col-sm-3">
        <div class="form-group mb-3">
            <label class="form-label" for="monthly_income">{{ trans('fields.monthly_income') }}<span
                    class="require-star">*</span></label>
            <div class="input-group">
                <div class="input-group-prepend"><span class="input-group-text"><i
                            class="fas fa-rupee-sign"></i></span></div>
                <input type="number" class="form-control required "
                    value="{{ old('monthly_income') ?? ($profileBasic->monthly_income ?? '') }}" id="monthly_income"
                    name="monthly_income" maxlength="255">
            </div>
            <small class="form-text text-muted text-help"></small>
            <span class="invalid-feedback"></span>
        </div>
    </div>
</div>
