<h4 class="section-title div-astro">{{ trans('fields.section_asset') }}</h4>
<div class="row">
    <div class="col-sm-4">
        <div class="form-group mb-3">
            <label class="form-label" for="asset_value_id">{{ trans('fields.assets_value') }}<span
                    class="require-star">*</span></label>
            <div class="input-group">
                <div class="input-group-prepend"><span class="input-group-text"><i class="fas fa-caret-down"></i></span>
                </div>
                <select type="select" name="asset_value_id" id="asset_value_id"
                    class="form-control aiz-selectpicker required " data-live-search="true" -data-width="auto">
                    <option style="display:none" value="">-- Select --</option>
                    @foreach ($record['asset_values'] ?? [] as $value => $label)
                        <option value="{{ $value }}" @selected(@old('asset_value_id') ?? ($profileBasic->asset_value_id ?? '') == $value)>{{ $label }}</option>
                    @endforeach

                </select>
            </div>
            <small class="form-text text-muted text-help"></small>
            <span class="invalid-feedback"></span>
        </div>
    </div>
    <div class="col-sm">
        <div class="form-group mb-3">
            <label class="form-label" for="asset_details">{{ trans('fields.assets_value') }}<span
                    class="require-star">*</span></label>
            <textarea class="form-control required" id="asset_details" name="asset_details" rows="3" maxlength="300">{{ @old('asset_details') ?? ($profileBasic->asset_details ?? '') }}</textarea>
            <small class="form-text text-muted text-help"></small>
            <span class="invalid-feedback"></span>
        </div>
    </div>
    <div class="col-sm-4 div-seimurai ">
        <div class="form-group mb-3">
            <label class="form-label" for="seimurai">{{ trans('fields.seimurai') }}<span
                    class="require-star">*</span></label>
            <textarea class="form-control required" id="seimurai" name="seimurai" rows="3" maxlength="300">{{ @old('seimurai') ?? ($profileBasic->seimurai ?? '') }}</textarea>
            <small class="form-text text-muted text-help"></small>
            <span class="invalid-feedback"></span>
        </div>
    </div>
</div>
