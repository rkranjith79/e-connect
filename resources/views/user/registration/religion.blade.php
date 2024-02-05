<h4 class="section-title">Religious & Social Background</h4>
<div class="row">
    <div class="col-sm-3">
        <div class="form-group mb-3">
            <label class="form-label" for="religion_id">Religion<span class="require-star">*</span></label>
            <div class="input-group">
                <div class="input-group-prepend"><span class="input-group-text"><i class="fas fa-caret-down"></i></span>
                </div>
                <select type="select" name="religion_id" id="religion_id"
                    class="form-control aiz-selectpicker required " data-live-search="true" -data-width="auto">
                    <option style="display:none" value="">-- Select --</option>
                    @isset($record['religions'])
                    @foreach ($record['religions'] as $value => $label)
                        <option value="{{ $value }}">{{ $label }}</option>
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
            <label class="form-label" for="caste_id">Caste<span class="require-star">*</span></label>
            <div class="input-group">
                <div class="input-group-prepend"><span class="input-group-text"><i class="fas fa-caret-down"></i></span>
                </div>
                <select type="select" name="caste_id" id="caste_id" class="form-control aiz-selectpicker required "
                    data-live-search="true" -data-width="auto">
                    <option style="display:none" value="">-- Select --</option>
                    @isset($record['castes'])
                        @foreach ($record['castes'] as $value => $label)
                            <option value="{{ $value }}">{{ $label }}</option>
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
            <label class="form-label" for="sub_caste_id">Sub Caste<span class="require-star">*</span></label>
            <div class="input-group">
                <div class="input-group-prepend"><span class="input-group-text"><i class="fas fa-caret-down"></i></span>
                </div>
                <select type="select" name="sub_caste_id" id="sub_caste_id" class="form-control aiz-selectpicker required "
                    data-live-search="true" -data-width="auto">
                    <option style="display:none" value="">-- Select --</option>
                    @isset($record['sub_castes'])
                        @foreach ($record['sub_castes'] as $value => $label)
                            <option value="{{ $value }}">{{ $label }}</option>
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
            <label class="form-label" for="temple">Temple<span class="require-star">*</span></label>
            <div class="input-group">
                <div class="input-group-prepend"><span class="input-group-text"><i class="fas fa-keyboard"></i></span>
                </div>
                <input type="text" class="form-control required " value="" id="temple" name="temple"
                    maxlength="255">
            </div>
            <small class="form-text text-muted text-help"></small>
            <span class="invalid-feedback"></span>
        </div>
    </div>
</div>
