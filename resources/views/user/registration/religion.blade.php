<h4 class="section-title">{{ trans("fields.section_religion") }}</h4>
<div class="row">
    <div class="col-sm-3">
        <div class="form-group mb-3">
            <label class="form-label" for="religion_id">{{ trans("fields.religion") }}<span class="require-star">*</span></label>
            <div class="input-group">
                <div class="input-group-prepend"><span class="input-group-text"><i class="fas fa-caret-down"></i></span>
                </div>
                <select type="select" name="religion_id" id="religion_id"
                    class="form-control aiz-selectpicker required " data-live-search="true" -data-width="auto">
                    <option style="display:none" value="">-- Select --</option>
                    @isset($record['religions'])
                    @foreach ($record['religions'] as $value => $label)
                        <option value="{{ $value }}" @selected(old('religion_id') ?? ($profileBasic->religion_id ?? '') == $value)>{{ $label }}</option>
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
            <label class="form-label" for="caste_id">{{ trans("fields.caste") }}<span class="require-star">*</span></label>
            <div class="input-group">
                <div class="input-group-prepend"><span class="input-group-text"><i class="fas fa-caret-down"></i></span>
                </div>
                <select type="select" name="caste_id" id="caste_id" class="form-control aiz-selectpicker required "
                    data-live-search="true" -data-width="auto">
                    <option style="display:none" value="">-- Select --</option>
                    @isset($record['castes'])
                        @foreach ($record['castes'] as $value => $label)
                            <option value="{{ $value }}" @selected(old('caste_id') ?? ($profileBasic->caste_id ?? '') == $value)>{{ $label }}</option>
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
            <label class="form-label" for="sub_caste_id">{{ trans("fields.sub_caste") }}<span class="require-star">*</span></label>
            <div class="input-group">
                <div class="input-group-prepend"><span class="input-group-text"><i class="fas fa-caret-down"></i></span>
                </div>
                <select type="select" name="sub_caste_id" id="sub_caste_id" class="form-control aiz-selectpicker required "
                    data-live-search="true" -data-width="auto">
                    <option style="display:none" value="">-- Select --</option>
                    @isset($record['sub_castes'])
                        @foreach ($record['sub_castes'] as $value => $label)
                            <option value="{{ $value }}" @selected(old('sub_caste_id') ?? ($profileBasic->sub_caste_id ?? '') == $value)>{{ $label }}</option>
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
            <label class="form-label" for="temple">{{ trans("fields.temple") }}<span class="require-star">*</span></label>
            <div class="input-group">
                <div class="input-group-prepend"><span class="input-group-text"><i class="fas fa-keyboard"></i></span>
                </div>
                <input type="text" class="form-control required " value="{{ old('temple') ?? ($profileBasic->temple ?? '') }}" id="temple" name="temple"
                    maxlength="255">
            </div>
            <small class="form-text text-muted text-help"></small>
            <span class="invalid-feedback"></span>
        </div>
    </div>
</div>
