<h4 class="section-title div-astro">{{ trans('fields.section_astro') }}</h4>

<div class="form-row">
    <div class="col-sm-3 div-astro">
        <div class="form-group mb-3">
            <label class="form-label" for="rasi_nakshatra_id">{{ trans('fields.rasi_nakshatra') }}<span
                    class="require-star">*</span></label>
            <div class="input-group">
                <div class="input-group-prepend"><span class="input-group-text"><i class="fas fa-caret-down"></i></span>
                </div>
                <select type="select" name="rasi_nakshatra_id" id="rasi_nakshatra_id"
                    class="form-control aiz-selectpicker required " data-live-search="true" -data-width="auto">
                    <option style="display:none" value="">-- Select --</option>
                    @isset($record['rasi_nakshatras'])
                        @foreach ($record['rasi_nakshatras'] as $value => $label)
                            <option value="{{ $value }}" @selected(@old('rasi_nakshatra_id') ?? ($profileJathagam->rasi_nakshatra_id ?? '') == $value)>{{ $label }}</option>
                        @endforeach
                    @endisset
                </select>
            </div>
            <small class="form-text text-muted text-help"></small>
            <span class="invalid-feedback"></span>
        </div>
    </div>
    <div class="col-sm-3 div-astro">
        <div class="form-group mb-3">
            <label class="form-label" for="nakshatra_patham_id">{{ trans('fields.nakshatra_patham') }}<span
                    class="require-star">*</span></label>
            <div class="input-group">
                <div class="input-group-prepend"><span class="input-group-text"><i class="fas fa-caret-down"></i></span>
                </div>
                <select type="select" name="nakshatra_patham_id" id="nakshatra_patham_id"
                    class="form-control aiz-selectpicker required " data-live-search="true" -data-width="auto">
                    <option style="display:none" value="">-- Select --</option>
                    @isset($record['nakshatra_pathams'])
                        @foreach ($record['nakshatra_pathams'] as $value => $label)
                            <option value="{{ $value }}" @selected(@old('nakshatra_patham_id') ?? ($profileJathagam->nakshatra_patham_id ?? '') == $value)>{{ $label }}</option>
                        @endforeach
                    @endisset
                </select>
            </div>
            <small class="form-text text-muted text-help"></small>
            <span class="invalid-feedback"></span>
        </div>
    </div>
    <div class="col-sm-3 div-astro">
        <div class="form-group mb-3">
            <label class="form-label" for="lagnam_id">{{ trans('fields.lagnam') }}</label>
            <div class="input-group">
                <div class="input-group-prepend"><span class="input-group-text"><i class="fas fa-caret-down"></i></span>
                </div>
                <select type="select" name="lagnam_id" id="lagnam_id" class="form-control aiz-selectpicker "
                    data-live-search="true" -data-width="auto">
                    <option style="display:none" value="">-- Select --</option>
                    @isset($record['lagnams'])
                        @foreach ($record['lagnams'] as $value => $label)
                            <option value="{{ $value }}" @selected(@old('lagnam_id') ?? ($profileJathagam->lagnam_id ?? '') == $value)>{{ $label }}</option>
                        @endforeach
                    @endisset

                </select>
            </div>
            <small class="form-text text-muted text-help"></small>
            <span class="invalid-feedback"></span>
        </div>
    </div>
    <div class="col-sm-3 div-astro">
        <div class="form-group mb-3">
            <label class="form-label" for="jathagam_id">{{ trans('fields.jathagam') }}<span
                    class="require-star">*</span></label>
            <div class="input-group">
                <div class="input-group-prepend"><span class="input-group-text"><i class="fas fa-caret-down"></i></span>
                </div>
                <select type="select" name="jathagam_id" id="jathagam_id"
                    class="form-control aiz-selectpicker required " data-live-search="true" -data-width="auto">
                    <option style="display:none" value="">-- Select --</option>
                    @isset($record['jathagams'])
                        @foreach ($record['jathagams'] as $value => $label)
                            <option value="{{ $value }}" @selected(@old('jathagam_id') ?? ($profileJathagam->jathagam_id ?? '') == $value)>{{ $label }}</option>
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
    <div class="col-sm-3">
        <div class="form-group mb-3">
            <p class="mb-0 form-label" style="margin-bottom: 8px !important;">
                {{ trans('fields.date_of_birth') }} <span class="require-star">*</span></p>
            <div class="input-group">
                <input type="date" class="form-control required "
                    value="{{ @old('date_of_birth') ?? ($profileJathagam->date_of_birth ?? '') }}" id="date_of_birth"
                    name="date_of_birth">
            </div>
            <small class="form-text text-muted text-help"></small>
            <span class="invalid-feedback"></span>
        </div>

    </div>

    <div class="col-sm-3">
        <div class="form-group mb-3">
            <p class="mb-0 form-label" style="margin-bottom: 8px !important;">
                {{ trans('fields.time_of_birth') }} <span class="require-star">*</span></p>
            <div class="input-group">
                <input type="time" class="form-control required "
                    value="{{ @old('time_of_birth') ?? ($profileJathagam->time_of_birth ?? '') }}" id="time_of_birth"
                    name="time_of_birth">
            </div>
            <small class="form-text text-muted text-help"></small>
            <span class="invalid-feedback"></span>
        </div>

    </div>

    <div class="col-sm-3 div-astro">
        <div class="form-group mb-3">
            <label class="form-label" for="place_of_birth">{{ trans('fields.place_of_birth') }}<span
                    class="require-star">*</span></label>
            <div class="input-group">
                <div class="input-group-prepend"><span class="input-group-text"><i
                            class="fas fa-map-marker-alt"></i></span></div>
                <input type="text" class="form-control required "
                    value="{{ @old('place_of_birth') ?? ($profileJathagam->place_of_birth ?? '') }}"
                    id="place_of_birth" name="place_of_birth" maxlength="255">
            </div>
            <small class="form-text text-muted text-help"></small>
            <span class="invalid-feedback"></span>
        </div>
    </div>
    <div class="col-sm-3 div-astro">
        <div class="form-group mb-3">
            <label class="form-label" for="birth_dasa_id">{{ trans('fields.birth_dasa') }}<span
                    class="require-star">*</span></label>
            <div class="input-group">
                <div class="input-group-prepend"><span class="input-group-text"><i
                            class="fas fa-caret-down"></i></span></div>
                <select type="select" name="birth_dasa_id" id="birth_dasa_id"
                    class="form-control aiz-selectpicker " data-live-search="true" -data-width="auto">
                    <option style="display:none" value="">-- Select --</option>
                    @isset($record['districts'])
                        @foreach ($record['districts'] as $value => $label)
                            <option value="{{ $value }}" @selected(@old('birth_dasa_id') ?? ($profileJathagam->birth_dasa_id ?? '') == $value)>{{ $label }}</option>
                        @endforeach
                    @endisset
                </select>
            </div>
            <small class="form-text text-muted text-help"></small>
            <span class="invalid-feedback"></span>
        </div>
    </div>
    <div class="col-sm-3 div-astro">
        <div class="form-row">
            <div class="col-12">
                <p class="mb-0 form-label" style="margin-bottom: 8px !important;">
                    {{ trans('fields.birth_dasa_remaining') }}</p>
            </div>
            <div class="col-4">
                <div class="form-group mb-3">
                    <div class="input-group">
                        <select type="select" name="birth_dasa_remaining_year" id="birth_dasa_remaining_year"
                            class="form-control aiz-selectpicker" data-live-search="true" -data-width="auto"
                            -data-size="5">
                            <option value="">Year</option>
                            @for ($i = 0; $i <= 20; $i++)
                                <option value="{{ $i }}" @selected(@old('birth_dasa_remaining_year') ?? ($profileJathagam->birth_dasa_remaining_year ?? '') == $i)>{{ $i }}
                                </option>
                            @endfor
                        </select>
                    </div>
                    <small class="form-text text-muted text-help"></small>
                    <span class="invalid-feedback"></span>
                </div>
            </div>
            <div class="col-4">
                <div class="form-group mb-3">
                    <div class="input-group">
                        <select type="select" name="birth_dasa_remaining_month" id="birth_dasa_remaining_month"
                            class="form-control aiz-selectpicker" data-live-search="true" -data-width="auto"
                            -data-size="5">
                            <option value="">Month</option>
                            @for ($i = 0; $i <= 12; $i++)
                                <option value="{{ $i }}" @selected(@old('birth_dasa_remaining_month') ?? ($profileJathagam->birth_dasa_remaining_month ?? '') == $i)>{{ $i }}
                                </option>
                            @endfor
                        </select>
                    </div>
                    <small class="form-text text-muted text-help"></small>
                    <span class="invalid-feedback"></span>
                </div>
            </div>
            <div class="col-4">
                <div class="form-group mb-3">
                    <div class="input-group">
                        <select type="select" name="birth_dasa_remaining_day" id="birth_dasa_remaining_day"
                            class="form-control aiz-selectpicker" data-live-search="true" -data-width="auto"
                            -data-size="5">
                            <option value="">Day</option>
                            @for ($i = 0; $i <= 31; $i++)
                                <option value="{{ $i }}" @selected(@old('birth_dasa_remaining_day') ?? ($profileJathagam->birth_dasa_remaining_day ?? '') == $i)>{{ $i }}
                                </option>
                            @endfor
                        </select>
                    </div>
                    <small class="form-text text-muted text-help"></small>
                    <span class="invalid-feedback"></span>
                </div>
            </div>
        </div>
    </div>
</div>



<div class="form-row">
    <div class="col-md-6 div-astro my-2 mt-sm-0">
        <table class="tablehoro" border="0" cellpadding="0" cellspacing="0" align="center">
            <tr>
                <td>
                    <p></p>
                    <div class="form-group mb-3">
                        <label class="form-label" for="rasi_12"></label>
                        <div class="input-group">
                            <select type="select" name="rasi_12[]" id="rasi_12"
                                class="form-control aiz-selectpicker " multiple "" data-live-search="true"
                                -data-width="auto">
                                <option style="display:none" value="">-- Select --</option>
                                @isset($record['rasis'])
                                    @foreach ($record['rasis'] as $value => $label)
                                        <option value="{{ $value }}" @selected(in_array($value, @old('rasi_12') ?? ($profileJathagam->rasi->{"12"} ?? [])))>
                                            {{ $label }}</option>
                                    @endforeach
                                @endisset
                            </select>
                        </div>
                        <small class="form-text text-muted text-help"></small>
                        <span class="invalid-feedback"></span>
                    </div>
                </td>
                <td>
                    <p></p>
                    <div class="form-group mb-3">
                        <label class="form-label" for="rasi_1"></label>
                        <div class="input-group">
                            <select type="select" name="rasi_1[]" id="rasi_1"
                                class="form-control aiz-selectpicker " multiple "" data-live-search="true"
                                -data-width="auto">
                                <option style="display:none" value="">-- Select --</option>
                                @isset($record['rasis'])
                                    @foreach ($record['rasis'] as $value => $label)
                                        <option value="{{ $value }}" @selected(in_array($value, @old('rasi_1') ?? ($profileJathagam->rasi->{"1"} ?? [])))>
                                            {{ $label }}</option>
                                    @endforeach
                                @endisset
                            </select>
                        </div>
                        <small class="form-text text-muted text-help"></small>
                        <span class="invalid-feedback"></span>
                    </div>
                </td>
                <td>
                    <p></p>
                    <div class="form-group mb-3">
                        <label class="form-label" for="rasi_2"></label>
                        <div class="input-group">
                            <select type="select" name="rasi_2[]" id="rasi_2"
                                class="form-control aiz-selectpicker " multiple "" data-live-search="true"
                                -data-width="auto">
                                <option style="display:none" value="">-- Select --</option>
                                @isset($record['rasis'])
                                    @foreach ($record['rasis'] as $value => $label)
                                        <option value="{{ $value }}" @selected(in_array($value, @old('rasi_2') ?? ($profileJathagam->rasi->{"2"} ?? [])))>
                                            {{ $label }}</option>
                                    @endforeach
                                @endisset
                            </select>
                        </div>
                        <small class="form-text text-muted text-help"></small>
                        <span class="invalid-feedback"></span>
                    </div>
                </td>
                <td>
                    <p></p>
                    <div class="form-group mb-3">
                        <label class="form-label" for="rasi_3"></label>
                        <div class="input-group">
                            <select type="select" name="rasi_3[]" id="rasi_3"
                                class="form-control aiz-selectpicker " multiple "" data-live-search="true"
                                -data-width="auto">
                                <option style="display:none" value="">-- Select --</option>
                                @isset($record['rasis'])
                                    @foreach ($record['rasis'] as $value => $label)
                                        <option value="{{ $value }}" @selected(in_array($value, @old('rasi_3') ?? ($profileJathagam->rasi->{"3"} ?? [])))>
                                            {{ $label }}</option>
                                    @endforeach
                                @endisset
                            </select>
                        </div>
                        <small class="form-text text-muted text-help"></small>
                        <span class="invalid-feedback"></span>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <p></p>
                    <div class="form-group mb-3">
                        <label class="form-label" for="rasi_11"></label>
                        <div class="input-group">
                            <select type="select" name="rasi_11[]" id="rasi_11"
                                class="form-control aiz-selectpicker " multiple "" data-live-search="true"
                                -data-width="auto">
                                <option style="display:none" value="">-- Select --</option>
                                @isset($record['rasis'])
                                    @foreach ($record['rasis'] as $value => $label)
                                        <option value="{{ $value }}" @selected(in_array($value, @old('rasi_11') ?? ($profileJathagam->rasi->{"11"} ?? [])))>
                                            {{ $label }}</option>
                                    @endforeach
                                @endisset
                            </select>
                        </div>
                        <small class="form-text text-muted text-help"></small>
                        <span class="invalid-feedback"></span>
                    </div>
                </td>
                <td rowspan="2" colspan="2">
                    <strong>{{ trans('fields.rasi') }}</strong>
                </td>
                <td>
                    <p></p>
                    <div class="form-group mb-3">
                        <label class="form-label" for="rasi_4"></label>
                        <div class="input-group">
                            <select type="select" name="rasi_4[]" id="rasi_4"
                                class="form-control aiz-selectpicker " multiple "" data-live-search="true"
                                -data-width="auto">
                                <option style="display:none" value="">-- Select --</option>
                                @isset($record['rasis'])
                                    @foreach ($record['rasis'] as $value => $label)
                                        <option value="{{ $value }}" @selected(in_array($value, @old('rasi_4') ?? ($profileJathagam->rasi->{"4"} ?? [])))>
                                            {{ $label }}</option>
                                    @endforeach
                                @endisset
                            </select>
                        </div>
                        <small class="form-text text-muted text-help"></small>
                        <span class="invalid-feedback"></span>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <p></p>
                    <div class="form-group mb-3">
                        <label class="form-label" for="rasi_10"></label>
                        <div class="input-group">
                            <select type="select" name="rasi_10[]" id="rasi_10"
                                class="form-control aiz-selectpicker " multiple "" data-live-search="true"
                                -data-width="auto">
                                <option style="display:none" value="">-- Select --</option>
                                @isset($record['rasis'])
                                    @foreach ($record['rasis'] as $value => $label)
                                        <option value="{{ $value }}" @selected(in_array($value, @old('rasi_10') ?? ($profileJathagam->rasi->{"10"} ?? [])))>
                                            {{ $label }}</option>
                                    @endforeach
                                @endisset
                            </select>
                        </div>
                        <small class="form-text text-muted text-help"></small>
                        <span class="invalid-feedback"></span>
                    </div>
                </td>
                <td>
                    <p></p>
                    <div class="form-group mb-3">
                        <label class="form-label" for="rasi_5"></label>
                        <div class="input-group">
                            <select type="select" name="rasi_5[]" id="rasi_5"
                                class="form-control aiz-selectpicker " multiple "" data-live-search="true"
                                -data-width="auto">
                                <option style="display:none" value="">-- Select --</option>
                                @isset($record['rasis'])
                                    @foreach ($record['rasis'] as $value => $label)
                                        <option value="{{ $value }}" @selected(in_array($value, @old('rasi_5') ?? ($profileJathagam->rasi->{"5"} ?? [])))>
                                            {{ $label }}</option>
                                    @endforeach
                                @endisset
                            </select>
                        </div>
                        <small class="form-text text-muted text-help"></small>
                        <span class="invalid-feedback"></span>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <p></p>
                    <div class="form-group mb-3">
                        <label class="form-label" for="rasi_9"></label>
                        <div class="input-group">
                            <select type="select" name="rasi_9[]" id="rasi_9"
                                class="form-control aiz-selectpicker " multiple "" data-live-search="true"
                                -data-width="auto">
                                <option style="display:none" value="">-- Select --</option>
                                @isset($record['rasis'])
                                    @foreach ($record['rasis'] as $value => $label)
                                        <option value="{{ $value }}" @selected(in_array($value, @old('rasi_9') ?? ($profileJathagam->rasi->{"9"} ?? [])))>
                                            {{ $label }}</option>
                                    @endforeach
                                @endisset
                            </select>
                        </div>
                        <small class="form-text text-muted text-help"></small>
                        <span class="invalid-feedback"></span>
                    </div>
                </td>
                <td>
                    <p></p>
                    <div class="form-group mb-3">
                        <label class="form-label" for="rasi_8"></label>
                        <div class="input-group">
                            <select type="select" name="rasi_8[]" id="rasi_8"
                                class="form-control aiz-selectpicker " multiple "" data-live-search="true"
                                -data-width="auto">
                                <option style="display:none" value="">-- Select --</option>
                                @isset($record['rasis'])
                                    @foreach ($record['rasis'] as $value => $label)
                                        <option value="{{ $value }}" @selected(in_array($value, @old('rasi_8') ?? ($profileJathagam->rasi->{"8"} ?? [])))>
                                            {{ $label }}</option>
                                    @endforeach
                                @endisset
                            </select>
                        </div>
                        <small class="form-text text-muted text-help"></small>
                        <span class="invalid-feedback"></span>
                    </div>
                </td>
                <td>
                    <p></p>
                    <div class="form-group mb-3">
                        <label class="form-label" for="rasi_7"></label>
                        <div class="input-group">
                            <select type="select" name="rasi_7[]" id="rasi_7"
                                class="form-control aiz-selectpicker " multiple "" data-live-search="true"
                                -data-width="auto">
                                <option style="display:none" value="">-- Select --</option>
                                @isset($record['rasis'])
                                    @foreach ($record['rasis'] as $value => $label)
                                        <option value="{{ $value }}" @selected(in_array($value, @old('rasi_7') ?? ($profileJathagam->rasi->{"7"} ?? [])))>
                                            {{ $label }}</option>
                                    @endforeach
                                @endisset
                            </select>
                        </div>
                        <small class="form-text text-muted text-help"></small>
                        <span class="invalid-feedback"></span>
                    </div>
                </td>
                <td>
                    <p></p>
                    <div class="form-group mb-3">
                        <label class="form-label" for="rasi_6"></label>
                        <div class="input-group">
                            <select type="select" name="rasi_6[]" id="rasi_6"
                                class="form-control aiz-selectpicker " multiple "" data-live-search="true"
                                -data-width="auto">
                                <option style="display:none" value="">-- Select --</option>
                                @isset($record['rasis'])
                                    @foreach ($record['rasis'] as $value => $label)
                                        <option value="{{ $value }}" @selected(in_array($value, @old('rasi_6') ?? ($profileJathagam->rasi->{"6"} ?? [])))>
                                            {{ $label }}</option>
                                    @endforeach
                                @endisset
                            </select>
                        </div>
                        <small class="form-text text-muted text-help"></small>
                        <span class="invalid-feedback"></span>
                    </div>
                </td>
            </tr>
        </table>
    </div>
    <div class="col-md-6 div-astro my-2 mt-sm-0">
        <table class="tablehoro" border="0" cellpadding="0" cellspacing="0" align="center">
            <tr>
                <td>
                    <p></p>
                    <div class="form-group mb-3">
                        <label class="form-label" for="navamsam_12"></label>
                        <div class="input-group">
                            <select type="select" name="navamsam_12[]" id="navamsam_12"
                                class="form-control aiz-selectpicker " multiple "" data-live-search="true"
                                -data-width="auto">
                                <option style="display:none" value="">-- Select --</option>
                                @isset($record['rasis'])
                                    @foreach ($record['rasis'] as $value => $label)
                                        <option value="{{ $value }}" @selected(in_array($value, @old('navamsam_12') ?? ($profileJathagam->navamsam->{"12"} ?? [])))>
                                            {{ $label }}</option>
                                    @endforeach
                                @endisset
                            </select>
                        </div>
                        <small class="form-text text-muted text-help"></small>
                        <span class="invalid-feedback"></span>
                    </div>
                </td>
                <td>
                    <p></p>
                    <div class="form-group mb-3">
                        <label class="form-label" for="navamsam_1"></label>
                        <div class="input-group">
                            <select type="select" name="navamsam_1[]" id="navamsam_1"
                                class="form-control aiz-selectpicker " multiple "" data-live-search="true"
                                -data-width="auto">
                                <option style="display:none" value="">-- Select --</option>
                                @isset($record['navamsams'])
                                    @foreach ($record['navamsams'] as $value => $label)
                                        <option value="{{ $value }}" @selected(in_array($value, @old('navamsam_1') ?? ($profileJathagam->navamsam->{"1"} ?? [])))>
                                            {{ $label }}</option>
                                    @endforeach
                                @endisset
                            </select>
                        </div>
                        <small class="form-text text-muted text-help"></small>
                        <span class="invalid-feedback"></span>
                    </div>
                </td>
                <td>
                    <p></p>
                    <div class="form-group mb-3">
                        <label class="form-label" for="navamsam_2"></label>
                        <div class="input-group">
                            <select type="select" name="navamsam_2[]" id="navamsam_2"
                                class="form-control aiz-selectpicker " multiple "" data-live-search="true"
                                -data-width="auto">
                                <option style="display:none" value="">-- Select --</option>
                                @isset($record['navamsams'])
                                    @foreach ($record['navamsams'] as $value => $label)
                                        <option value="{{ $value }}" @selected(in_array($value, @old('navamsam_2') ?? ($profileJathagam->navamsam->{"2"} ?? [])))>
                                            {{ $label }}</option>
                                    @endforeach
                                @endisset
                            </select>
                        </div>
                        <small class="form-text text-muted text-help"></small>
                        <span class="invalid-feedback"></span>
                    </div>
                </td>
                <td>
                    <p></p>
                    <div class="form-group mb-3">
                        <label class="form-label" for="navamsam_3"></label>
                        <div class="input-group">
                            <select type="select" name="navamsam_3[]" id="navamsam_3"
                                class="form-control aiz-selectpicker " multiple "" data-live-search="true"
                                -data-width="auto">
                                <option style="display:none" value="">-- Select --</option>
                                @isset($record['navamsams'])
                                    @foreach ($record['navamsams'] as $value => $label)
                                        <option value="{{ $value }}" @selected(in_array($value, @old('navamsam_3') ?? ($profileJathagam->navamsam->{"3"} ?? [])))>
                                            {{ $label }}</option>
                                    @endforeach
                                @endisset
                            </select>
                        </div>
                        <small class="form-text text-muted text-help"></small>
                        <span class="invalid-feedback"></span>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <p></p>
                    <div class="form-group mb-3">
                        <label class="form-label" for="navamsam_11"></label>
                        <div class="input-group">
                            <select type="select" name="navamsam_11[]" id="navamsam_11"
                                class="form-control aiz-selectpicker " multiple "" data-live-search="true"
                                -data-width="auto">
                                <option style="display:none" value="">-- Select --</option>
                                @isset($record['navamsams'])
                                    @foreach ($record['navamsams'] as $value => $label)
                                        <option value="{{ $value }}" @selected(in_array($value, @old('navamsam_11') ?? ($profileJathagam->navamsam->{"11"} ?? [])))>
                                            {{ $label }}</option>
                                    @endforeach
                                @endisset
                            </select>
                        </div>
                        <small class="form-text text-muted text-help"></small>
                        <span class="invalid-feedback"></span>
                    </div>
                </td>
                <td rowspan="2" colspan="2">
                    <strong>{{ trans('fields.navamsam') }}</strong>
                </td>
                <td>
                    <p></p>
                    <div class="form-group mb-3">
                        <label class="form-label" for="navamsam_4"></label>
                        <div class="input-group">
                            <select type="select" name="navamsam_4[]" id="navamsam_4"
                                class="form-control aiz-selectpicker " multiple "" data-live-search="true"
                                -data-width="auto">
                                <option style="display:none" value="">-- Select --</option>
                                @isset($record['navamsams'])
                                    @foreach ($record['navamsams'] as $value => $label)
                                        <option value="{{ $value }}" @selected(in_array($value, @old('navamsam_4') ?? ($profileJathagam->navamsam->{"4"} ?? [])))>
                                            {{ $label }}</option>
                                    @endforeach
                                @endisset
                            </select>
                        </div>
                        <small class="form-text text-muted text-help"></small>
                        <span class="invalid-feedback"></span>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <p></p>
                    <div class="form-group mb-3">
                        <label class="form-label" for="navamsam_10"></label>
                        <div class="input-group">
                            <select type="select" name="navamsam_10[]" id="navamsam_10"
                                class="form-control aiz-selectpicker " multiple "" data-live-search="true"
                                -data-width="auto">
                                <option style="display:none" value="">-- Select --</option>
                                @isset($record['navamsams'])
                                    @foreach ($record['navamsams'] as $value => $label)
                                        <option value="{{ $value }}" @selected(in_array($value, @old('navamsam_10') ?? ($profileJathagam->navamsam->{"10"} ?? [])))>
                                            {{ $label }}</option>
                                    @endforeach
                                @endisset
                            </select>
                        </div>
                        <small class="form-text text-muted text-help"></small>
                        <span class="invalid-feedback"></span>
                    </div>
                </td>
                <td>
                    <p></p>
                    <div class="form-group mb-3">
                        <label class="form-label" for="navamsam_5"></label>
                        <div class="input-group">
                            <select type="select" name="navamsam_5[]" id="navamsam_5"
                                class="form-control aiz-selectpicker " multiple "" data-live-search="true"
                                -data-width="auto">
                                <option style="display:none" value="">-- Select --</option>
                                @isset($record['navamsams'])
                                    @foreach ($record['navamsams'] as $value => $label)
                                        <option value="{{ $value }}" @selected(in_array($value, @old('navamsam_5') ?? ($profileJathagam->navamsam->{"5"} ?? [])))>
                                            {{ $label }}</option>
                                    @endforeach
                                @endisset
                            </select>
                        </div>
                        <small class="form-text text-muted text-help"></small>
                        <span class="invalid-feedback"></span>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <p></p>
                    <div class="form-group mb-3">
                        <label class="form-label" for="navamsam_9"></label>
                        <div class="input-group">
                            <select type="select" name="navamsam_9[]" id="navamsam_9"
                                class="form-control aiz-selectpicker " multiple "" data-live-search="true"
                                -data-width="auto">
                                <option style="display:none" value="">-- Select --</option>
                                @isset($record['navamsams'])
                                    @foreach ($record['navamsams'] as $value => $label)
                                        <option value="{{ $value }}" @selected(in_array($value, @old('navamsam_9') ?? ($profileJathagam->navamsam->{"9"} ?? [])))>
                                            {{ $label }}</option>
                                    @endforeach
                                @endisset
                            </select>
                        </div>
                        <small class="form-text text-muted text-help"></small>
                        <span class="invalid-feedback"></span>
                    </div>
                </td>
                <td>
                    <p></p>
                    <div class="form-group mb-3">
                        <label class="form-label" for="navamsam_8"></label>
                        <div class="input-group">
                            <select type="select" name="navamsam_8[]" id="navamsam_8"
                                class="form-control aiz-selectpicker " multiple "" data-live-search="true"
                                -data-width="auto">
                                <option style="display:none" value="">-- Select --</option>
                                @isset($record['navamsams'])
                                    @foreach ($record['navamsams'] as $value => $label)
                                        <option value="{{ $value }}" @selected(in_array($value, @old('navamsam_8') ?? ($profileJathagam->navamsam->{"8"} ?? [])))>
                                            {{ $label }}</option>
                                    @endforeach
                                @endisset
                            </select>
                        </div>
                        <small class="form-text text-muted text-help"></small>
                        <span class="invalid-feedback"></span>
                    </div>
                </td>
                <td>
                    <p></p>
                    <div class="form-group mb-3">
                        <label class="form-label" for="navamsam_7"></label>
                        <div class="input-group">
                            <select type="select" name="navamsam_7[]" id="navamsam_7"
                                class="form-control aiz-selectpicker " multiple "" data-live-search="true"
                                -data-width="auto">
                                <option style="display:none" value="">-- Select --</option>
                                @isset($record['navamsams'])
                                    @foreach ($record['navamsams'] as $value => $label)
                                        <option value="{{ $value }}" @selected(in_array($value, @old('navamsam_7') ?? ($profileJathagam->navamsam->{"7"} ?? [])))>
                                            {{ $label }}</option>
                                    @endforeach
                                @endisset
                            </select>
                        </div>
                        <small class="form-text text-muted text-help"></small>
                        <span class="invalid-feedback"></span>
                    </div>
                </td>
                <td>
                    <p></p>
                    <div class="form-group mb-3">
                        <label class="form-label" for="navamsam_6"></label>
                        <div class="input-group">
                            <select type="select" name="navamsam_6[]" id="navamsam_6"
                                class="form-control aiz-selectpicker " multiple "" data-live-search="true"
                                -data-width="auto">
                                <option style="display:none" value="">-- Select --</option>
                                @isset($record['navamsams'])
                                    @foreach ($record['navamsams'] as $value => $label)
                                        <option value="{{ $value }}" @selected(in_array($value, @old('navamsam_6') ?? ($profileJathagam->navamsam->{"6"} ?? [])))>
                                            {{ $label }}</option>
                                    @endforeach
                                @endisset
                            </select>
                        </div>
                        <small class="form-text text-muted text-help"></small>
                        <span class="invalid-feedback"></span>
                    </div>
                </td>
            </tr>
        </table>
    </div>
</div>
