<h4 class="section-title">{{ trans('fields.section_family') }}</h4>
<div class="row">
    <div class="col-sm-3">
        <div class="form-group mb-3">
            <label class="form-label" for="father_name">{{ trans('fields.father_name') }}<span
                    class="require-star">*</span></label>
            <div class="input-group">
                <div class="input-group-prepend"><span class="input-group-text"><i class="fas fa-user"></i></span></div>
                <input type="text" class="form-control required "
                    value="{{ @old('father_name') ?? ($profileBasic->father_name ?? '') }}" id="father_name"
                    name="father_name" maxlength="255">
            </div>
            <small class="form-text text-muted text-help"></small>
            <span class="invalid-feedback"></span>
        </div>
    </div>
    <div class="col-sm-3">
        <div class="form-group mb-3">
            <label class="form-label" for="father_status_id">{{ trans('fields.father_status') }}<span
                    class="require-star">*</span></label>
            <div class="input-group">
                <div class="input-group-prepend"><span class="input-group-text"><i class="fas fa-caret-down"></i></span>
                </div>
                <select type="select" name="father_status_id" id="father_status_id"
                    class="form-control aiz-selectpicker required " data-live-search="true" -data-width="auto">
                    <option style="display:none" value="">-- Select --</option>
                    @isset($record['parant_status'])
                        @foreach ($record['parant_status'] as $value => $label)
                            <option value="{{ $value }}" @selected(@old('father_status_id') ?? ($profileBasic->father_status_id ?? '') == $value)>{{ $label }}</option>
                        @endforeach
                    @endisset
                </select>
            </div>
            <small class="form-text text-muted text-help"></small>
            <span class="invalid-feedback"></span>
        </div>
    </div>
    <div class="col-sm-3 div-father-occu">
        <div class="form-group mb-3">
            <label class="form-label" for="father_occupation">{{ trans('fields.father_occupation') }}</label>
            <div class="input-group">
                <div class="input-group-prepend"><span class="input-group-text"><i class="fas fa-keyboard"></i></span>
                </div>
                <input type="text" class="form-control required "
                    value="{{ @old('father_occupation') ?? ($profileBasic->father_occupation ?? '') }}"
                    id="father_occupation" name="father_occupation" maxlength="255">
            </div>
            <small class="form-text text-muted text-help"></small>
            <span class="invalid-feedback"></span>
        </div>
    </div>
    <div class="col-sm-3">
        <div class="form-group mb-3">
            <label class="form-label" for="mother_name">{{ trans('fields.mother_name') }}<span
                    class="require-star">*</span></label>
            <div class="input-group">
                <div class="input-group-prepend"><span class="input-group-text"><i class="fas fa-user"></i></span></div>
                <input type="text" class="form-control required "
                    value="{{ @old('mother_name') ?? ($profileBasic->mother_name ?? '') }}" id="mother_name"
                    name="mother_name" maxlength="255">
            </div>
            <small class="form-text text-muted text-help"></small>
            <span class="invalid-feedback"></span>
        </div>
    </div>
    <div class="col-sm-3">
        <div class="form-group mb-3">
            <label class="form-label" for="mother_status_id">{{ trans('fields.mother_status') }}<span
                    class="require-star">*</span></label>
            <div class="input-group">
                <div class="input-group-prepend"><span class="input-group-text"><i class="fas fa-caret-down"></i></span>
                </div>
                <select type="select" name="mother_status_id" id="mother_status_id"
                    class="form-control aiz-selectpicker required " data-live-search="true" -data-width="auto">
                    <option style="display:none" value="">-- Select --</option>
                    @isset($record['parant_status'])
                        @foreach ($record['parant_status'] as $value => $label)
                            <option value="{{ $value }}" @selected(@old('mother_status_id') ?? ($profileBasic->mother_status_id ?? '') == $value)>{{ $label }}</option>
                        @endforeach
                    @endisset
                </select>
            </div>
            <small class="form-text text-muted text-help"></small>
            <span class="invalid-feedback"></span>
        </div>
    </div>
    <div class="col-sm-3 div-mother-occu">
        <div class="form-group mb-3">
            <label class="form-label" for="mother_occupation">{{ trans('fields.mother_occupation') }}</label>
            <div class="input-group">
                <div class="input-group-prepend"><span class="input-group-text"><i class="fas fa-keyboard"></i></span>
                </div>
                <input type="text" class="form-control required "
                    value="{{ @old('mother_occupation') ?? ($profileBasic->mother_occupation ?? '') }}"
                    id="mother_occupation" name="mother_occupation" maxlength="255">
            </div>
            <small class="form-text text-muted text-help"></small>
            <span class="invalid-feedback"></span>
        </div>
    </div>
    <div class="col-sm-3">
        <div class="form-group mb-3">
            <label class="form-label" for="social_type_id">{{ trans('fields.social_type') }}<span
                    class="require-star">*</span></label>
            <div class="input-group">
                <div class="input-group-prepend"><span class="input-group-text"><i
                            class="fas fa-caret-down"></i></span></div>
                <select type="select" name="social_type_id" id="social_type_id"
                    class="form-control aiz-selectpicker required " data-live-search="true" -data-width="auto">
                    <option style="display:none" value="">-- Select --</option>
                    @isset($record['social_types'])
                        @foreach ($record['social_types'] as $value => $label)
                            <option value="{{ $value }}" @selected(@old('social_type_id') ?? ($profileBasic->social_type_id ?? '') == $value)>
                                {{ $label }}</option>
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
            <label class="form-label" for="native">{{ trans('fields.native') }}<span
                    class="require-star">*</span></label>
            <div class="input-group">
                <div class="input-group-prepend"><span class="input-group-text"><i
                            class="fas fa-keyboard"></i></span></div>
                <input type="text" class="form-control required "
                    value="{{ @old('native') ?? ($profileBasic->native ?? '') }}" id="native" name="native"
                    maxlength="255">
            </div>
            <small class="form-text text-muted text-help"></small>
            <span class="invalid-feedback"></span>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group mb-3">
            <label class="form-label" for="siblings">{{ trans('fields.siblings') }}<span
                    class="require-star">*</span></label>
            <div class="input-group">
                <div class="input-group-prepend"><span class="input-group-text"><i
                            class="fas fa-keyboard"></i></span></div>
                <input type="text" class="form-control required "
                    value="{{ @old('siblings') ?? ($profileBasic->siblings ?? '') }}" id="siblings" name="siblings"
                    maxlength="255">
            </div>
            <small class="form-text text-muted text-help"></small>
            <span class="invalid-feedback"></span>
        </div>
    </div>
</div>
