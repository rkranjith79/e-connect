<h4 class="section-title">{{ trans('fields.section_contact') }}</h4>
<div class="row">
    <div class="col-sm-3">
        <div class="form-group mb-3">
            <label class="form-label" for="phone">{{ trans('fields.phone') }}<span class="require-star">*</span></label>
            <div class="input-group">
                <div class="input-group-prepend"><span class="input-group-text"><i class="fas fa-phone-alt"></i></span>
                </div>
                <input type="number" class="form-control required "
                    value="{{ @old('phone') ?? ($profileBasic->phone ?? '') }}" id="phone" name="phone"
                    maxlength="10">
            </div>
            <small class="form-text text-muted text-help"></small>
            <span class="invalid-feedback"></span>
        </div>
    </div>
    <div class="col-sm-3">
        <div class="form-group mb-3">
            <label class="form-label" for="whatsapp">{{ trans('fields.whatsapp') }}<span
                    class="require-star">*</span></label>
            <div class="input-group">
                <div class="input-group-prepend"><span class="input-group-text"><i
                            class="fas fab fa-whatsapp"></i></span></div>
                <input type="number" class="form-control required "
                    value="{{ @old('whatsapp') ?? ($profileBasic->whatsapp ?? '') }}" id="whatsapp" name="whatsapp"
                    maxlength="10">
            </div>
            <small class="form-text text-muted text-help"></small>
            <span class="invalid-feedback"></span>
        </div>
    </div>
    <div class="col-sm-6 div-address">
        <div class="form-group mb-3">
            <label class="form-label" for="address">{{ trans('fields.address') }}<span
                    class="require-star">*</span></label>
            <textarea class="form-control required" id="address" name="address" rows="3" maxlength="300">{{ @old('address') ?? ($profileBasic->address ?? '') }}</textarea>
            <small class="form-text text-muted text-help"></small>
            <span class="invalid-feedback"></span>
        </div>
    </div>

    <div class="col-sm-4">
        <div class="form-group mb-3">
            <label class="form-label" for="country_id">{{ trans('fields.country') }}<span
                    class="require-star">*</span></label>
            <div class="input-group">
                <div class="input-group-prepend"><span class="input-group-text"><i class="fas fa-globe-asia"></i></span>
                </div>
                <select type="select" name="country_id" id="country_id" class="form-control aiz-selectpicker required "
                    data-live-search="true" -data-width="auto">
                    <option style="display:none" value="">-- Select --</option>
                    @isset($record['countries'])
                        @foreach ($record['countries'] as $value => $label)
                            <option value="{{ $value }}" @selected(@old('country_id') ?? ($profileBasic->country_id ?? '') == $value)>{{ $label }}
                            </option>
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
            <label class="form-label" for="state_id">{{ trans('fields.state') }}<span
                    class="require-star">*</span></label>
            <div class="input-group">
                <div class="input-group-prepend"><span class="input-group-text"><i
                            class="fas fa-map-marker-alt"></i></span></div>
                <select type="select" name="state_id" id="state_id" class="form-control aiz-selectpicker required "
                    data-live-search="true" -data-width="auto">
                    <option style="display:none" value="">-- Select --</option>
                    @isset($record['states'])
                        @foreach ($record['states'] as $value => $label)
                            <option value="{{ $value }}" @selected(@old('state_id') ?? ($profileBasic->state_id ?? '') == $value)>{{ $label }}</option>
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
            <label class="form-label" for="district_id">{{ trans('fields.district') }}<span
                    class="require-star">*</span></label>
            <div class="input-group">
                <div class="input-group-prepend"><span class="input-group-text"><i
                            class="fas fa-map-marker-alt"></i></span></div>
                <select type="select" name="district_id" id="district_id"
                    class="form-control aiz-selectpicker required " data-live-search="true" -data-width="auto">
                    @isset($record['districts'])
                        @foreach ($record['districts'] as $value => $label)
                            <option value="{{ $value }}" @selected(@old('district_id') ?? ($profileBasic->district_id ?? '') == $value)>{{ $label }}</option>
                        @endforeach
                    @endisset
                </select>
            </div>
            <small class="form-text text-muted text-help"></small>
            <span class="invalid-feedback"></span>
        </div>
    </div>

    <div class="col-sm-4 div-country-others">
        <div class="form-group mb-3">
            <label class="form-label" for="country_others">{{ trans('fields.country') }}<span
                    class="require-star">*</span></label>
            <div class="input-group">
                <div class="input-group-prepend"><span class="input-group-text"><i
                            class="fas fa-map-marker-alt"></i></span></div>
                <input type="text" class="form-control required "
                    value="{{ @old('district_id') ?? ($profileBasic->district_id ?? '') }}" id="country_others"
                    name="country_others" maxlength="255">
            </div>
            <small class="form-text text-muted text-help"></small>
            <span class="invalid-feedback"></span>
        </div>
    </div>
    <div class="col-sm-4 div-state-others">
        <div class="form-group mb-3">
            <label class="form-label" for="state_others">{{ trans('fields.state') }}<span
                    class="require-star">*</span></label>
            <div class="input-group">
                <div class="input-group-prepend"><span class="input-group-text"><i
                            class="fas fa-map-marker-alt"></i></span></div>
                <input type="text" class="form-control required "
                    value="{{ @old('state_others') ?? ($profileBasic->state_others ?? '') }}" id="state_others"
                    name="state_others" maxlength="255">
            </div>
            <small class="form-text text-muted text-help"></small>
            <span class="invalid-feedback"></span>
        </div>
    </div>

    <div class="col-sm-4 div-district-others">
        <div class="form-group mb-3">
            <label class="form-label" for="district_others">{{ trans('fields.district') }}<span
                    class="require-star">*</span></label>
            <div class="input-group">
                <div class="input-group-prepend"><span class="input-group-text"><i
                            class="fas fa-map-marker-alt"></i></span></div>
                <input type="text" class="form-control required "
                    value="{{ @old('district_others') ?? ($profileBasic->district_others ?? '') }}" id="district_others"
                    name="district_others" maxlength="255">
            </div>
            <small class="form-text text-muted text-help"></small>
            <span class="invalid-feedback"></span>
        </div>
    </div>
</div>
