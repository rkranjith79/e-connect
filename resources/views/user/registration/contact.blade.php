<h4 class="section-title">Contact Details</h4>
<div class="row">
    <div class="col-sm-3">
        <div class="form-group mb-3">
            <label class="form-label" for="phone">Contact Number<span class="require-star">*</span></label>
            <div class="input-group">
                <div class="input-group-prepend"><span class="input-group-text"><i class="fas fa-phone-alt"></i></span>
                </div>
                <input type="number" class="form-control required " value="" id="phone" name="phone"
                    maxlength="10">
            </div>
            <small class="form-text text-muted text-help"></small>
            <span class="invalid-feedback"></span>
        </div>
    </div>
    <div class="col-sm-3">
        <div class="form-group mb-3">
            <label class="form-label" for="whatsapp">Whatsapp Number<span class="require-star">*</span></label>
            <div class="input-group">
                <div class="input-group-prepend"><span class="input-group-text"><i
                            class="fas fab fa-whatsapp"></i></span></div>
                <input type="number" class="form-control required " value="" id="whatsapp" name="whatsapp"
                    maxlength="10">
            </div>
            <small class="form-text text-muted text-help"></small>
            <span class="invalid-feedback"></span>
        </div>
    </div>
    <div class="col-sm-6 div-address">
        <div class="form-group mb-3">
            <label class="form-label" for="address">Address<span class="require-star">*</span></label>
            <textarea class="form-control required" id="address" name="address" rows="3" maxlength="300"></textarea>
            <small class="form-text text-muted text-help"></small>
            <span class="invalid-feedback"></span>
        </div>
    </div>

    <div class="col-sm-4">
        <div class="form-group mb-3">
            <label class="form-label" for="country_id">Country<span class="require-star">*</span></label>
            <div class="input-group">
                <div class="input-group-prepend"><span class="input-group-text"><i class="fas fa-globe-asia"></i></span>
                </div>
                <select type="select" name="country_id" id="country_id" class="form-control aiz-selectpicker required "
                    data-live-search="true" -data-width="auto">
                    <option style="display:none" value="">-- Select --</option>
                    @isset($record['countries'])
                        @foreach ($record['countries'] as $value => $label)
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
            <label class="form-label" for="state_id">State<span class="require-star">*</span></label>
            <div class="input-group">
                <div class="input-group-prepend"><span class="input-group-text"><i
                            class="fas fa-map-marker-alt"></i></span></div>
                <select type="select" name="state_id" id="state_id" class="form-control aiz-selectpicker required "
                    data-live-search="true" -data-width="auto">
                    <option style="display:none" value="">-- Select --</option>
                    @isset($record['states'])
                        @foreach ($record['states'] as $value => $label)
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
            <label class="form-label" for="district_id">District<span class="require-star">*</span></label>
            <div class="input-group">
                <div class="input-group-prepend"><span class="input-group-text"><i
                            class="fas fa-map-marker-alt"></i></span></div>
                <select type="select" name="district_id" id="district_id"
                    class="form-control aiz-selectpicker required " data-live-search="true" -data-width="auto">
                    @isset($record['districts'])
                        @foreach ($record['districts'] as $value => $label)
                            <option value="{{ $value }}">{{ $label }}</option>
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
            <label class="form-label" for="country_others">Country Name<span class="require-star">*</span></label>
            <div class="input-group">
                <div class="input-group-prepend"><span class="input-group-text"><i
                            class="fas fa-map-marker-alt"></i></span></div>
                <input type="text" class="form-control required " value="" id="country_others"
                    name="country_others" maxlength="255">
            </div>
            <small class="form-text text-muted text-help"></small>
            <span class="invalid-feedback"></span>
        </div>
    </div>
    <div class="col-sm-4 div-state-others">
        <div class="form-group mb-3">
            <label class="form-label" for="state_others">State Name<span class="require-star">*</span></label>
            <div class="input-group">
                <div class="input-group-prepend"><span class="input-group-text"><i
                            class="fas fa-map-marker-alt"></i></span></div>
                <input type="text" class="form-control required " value="" id="state_others"
                    name="state_others" maxlength="255">
            </div>
            <small class="form-text text-muted text-help"></small>
            <span class="invalid-feedback"></span>
        </div>
    </div>

    <div class="col-sm-4 div-district-others">
        <div class="form-group mb-3">
            <label class="form-label" for="district_others">District Name<span class="require-star">*</span></label>
            <div class="input-group">
                <div class="input-group-prepend"><span class="input-group-text"><i
                            class="fas fa-map-marker-alt"></i></span></div>
                <input type="text" class="form-control required " value="" id="district_others"
                    name="district_others" maxlength="255">
            </div>
            <small class="form-text text-muted text-help"></small>
            <span class="invalid-feedback"></span>
        </div>
    </div>
</div>
