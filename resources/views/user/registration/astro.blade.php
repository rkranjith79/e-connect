<h4 class="section-title div-astro">Astro Details</h4>

<div class="form-row">
    <div class="col-sm-3 div-astro">
        <div class="form-group mb-3">
            <label class="form-label" for="rasi_nakshatra_id">Rasi - Nakshatra<span class="require-star">*</span></label>
            <div class="input-group">
                <div class="input-group-prepend"><span class="input-group-text"><i class="fas fa-caret-down"></i></span>
                </div>
                <select type="select" name="rasi_nakshatra_id" id="rasi_nakshatra_id"
                    class="form-control aiz-selectpicker required " data-live-search="true" -data-width="auto">
                    <option style="display:none" value="">-- Select --</option>
                    @isset($record['rasi_nakshatras'])
                        @foreach ($record['rasi_nakshatras'] as $value => $label)
                            <option value="{{ $value }}">{{ $label }}</option>
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
            <label class="form-label" for="nakshatra_patham_id">Nakshatra Patham<span
                    class="require-star">*</span></label>
            <div class="input-group">
                <div class="input-group-prepend"><span class="input-group-text"><i class="fas fa-caret-down"></i></span>
                </div>
                <select type="select" name="nakshatra_patham_id" id="nakshatra_patham_id"
                    class="form-control aiz-selectpicker required " data-live-search="true" -data-width="auto">
                    <option style="display:none" value="">-- Select --</option>
                    @isset($record['nakshatra_pathams'])
                        @foreach ($record['nakshatra_pathams'] as $value => $label)
                            <option value="{{ $value }}">{{ $label }}</option>
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
            <label class="form-label" for="lagnam_id">Lagnam</label>
            <div class="input-group">
                <div class="input-group-prepend"><span class="input-group-text"><i class="fas fa-caret-down"></i></span>
                </div>
                <select type="select" name="lagnam_id" id="lagnam_id" class="form-control aiz-selectpicker "
                    data-live-search="true" -data-width="auto">
                    <option style="display:none" value="">-- Select --</option>
                    @isset($record['lagnams'])
                        @foreach ($record['lagnams'] as $value => $label)
                            <option value="{{ $value }}">{{ $label }}</option>
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
            <label class="form-label" for="jathagam_id">Jathagam<span class="require-star">*</span></label>
            <div class="input-group">
                <div class="input-group-prepend"><span class="input-group-text"><i class="fas fa-caret-down"></i></span>
                </div>
                <select type="select" name="jathagam_id" id="jathagam_id"
                    class="form-control aiz-selectpicker required " data-live-search="true" -data-width="auto">
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
</div>
<div class="form-row">
    <div class="col-sm-3">
        <div class="form-group mb-3">
            <p class="mb-0 form-label" style="margin-bottom: 8px !important;">
                Date of Birth <span class="require-star">*</span></p>
            <div class="input-group">
                <input type="date" class="form-control required " value="" id="date_of_birth"
                    name="date_of_birth">
            </div>
            <small class="form-text text-muted text-help"></small>
            <span class="invalid-feedback"></span>
        </div>

    </div>

    <div class="col-sm-3">
        <div class="form-group mb-3">
            <p class="mb-0 form-label" style="margin-bottom: 8px !important;">
                Time of Birth <span class="require-star">*</span></p>
            <div class="input-group">
                <input type="time" class="form-control required " value="" id="time_of_birth"
                    name="time_of_birth">
            </div>
            <small class="form-text text-muted text-help"></small>
            <span class="invalid-feedback"></span>
        </div>

    </div>

    <div class="col-sm-3 div-astro">
        <div class="form-group mb-3">
            <label class="form-label" for="place_of_birth">Place of Birth<span class="require-star">*</span></label>
            <div class="input-group">
                <div class="input-group-prepend"><span class="input-group-text"><i
                            class="fas fa-map-marker-alt"></i></span></div>
                <input type="text" class="form-control required " value="" id="place_of_birth"
                    name="place_of_birth" maxlength="255">
            </div>
            <small class="form-text text-muted text-help"></small>
            <span class="invalid-feedback"></span>
        </div>
    </div>
    <div class="col-sm-3 div-astro">
        <div class="form-group mb-3">
            <label class="form-label" for="birth_dasa_id">Birth Dasa</label>
            <div class="input-group">
                <div class="input-group-prepend"><span class="input-group-text"><i
                            class="fas fa-caret-down"></i></span></div>
                <select type="select" name="birth_dasa_id" id="birth_dasa_id"
                    class="form-control aiz-selectpicker " data-live-search="true" -data-width="auto">
                    <option style="display:none" value="">-- Select --</option>
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
    <div class="col-sm-3 div-astro">
        <div class="form-row">
            <div class="col-12">
                <p class="mb-0 form-label" style="margin-bottom: 8px !important;">
                    Birth Dasa Remaining</p>
            </div>
            <div class="col-4">
                <div class="form-group mb-3">
                    <div class="input-group">
                        <select type="select" name="birth_dasa_remaining_year" id="birth_dasa_remaining_year"
                            class="form-control aiz-selectpicker" data-live-search="true" -data-width="auto"
                            -data-size="5">
                            <option value="">Year</option>
                            <option value="0">0</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>
                            <option value="13">13</option>
                            <option value="14">14</option>
                            <option value="15">15</option>
                            <option value="16">16</option>
                            <option value="17">17</option>
                            <option value="18">18</option>
                            <option value="19">19</option>
                            <option value="20">20</option>
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
                            <option value="0">0</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>
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
                            <option value="0">0</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>
                            <option value="13">13</option>
                            <option value="14">14</option>
                            <option value="15">15</option>
                            <option value="16">16</option>
                            <option value="17">17</option>
                            <option value="18">18</option>
                            <option value="19">19</option>
                            <option value="20">20</option>
                            <option value="21">21</option>
                            <option value="22">22</option>
                            <option value="23">23</option>
                            <option value="24">24</option>
                            <option value="25">25</option>
                            <option value="26">26</option>
                            <option value="27">27</option>
                            <option value="28">28</option>
                            <option value="29">29</option>
                            <option value="30">30</option>
                            <option value="31">31</option>
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
                                    <option value="{{ $value }}">{{ $label }}</option>
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
                                    <option value="{{ $value }}">{{ $label }}</option>
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
                                    <option value="{{ $value }}">{{ $label }}</option>
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
                                    <option value="{{ $value }}">{{ $label }}</option>
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
                                    <option value="{{ $value }}">{{ $label }}</option>
                                @endforeach
                            @endisset
                            </select>
                        </div>
                        <small class="form-text text-muted text-help"></small>
                        <span class="invalid-feedback"></span>
                    </div>
                </td>
                <td rowspan="2" colspan="2">
                    <strong>இராசி</strong>
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
                                    <option value="{{ $value }}">{{ $label }}</option>
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
                                    <option value="{{ $value }}">{{ $label }}</option>
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
                                    <option value="{{ $value }}">{{ $label }}</option>
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
                                    <option value="{{ $value }}">{{ $label }}</option>
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
                                    <option value="{{ $value }}">{{ $label }}</option>
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
                                    <option value="{{ $value }}">{{ $label }}</option>
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
                                    <option value="{{ $value }}">{{ $label }}</option>
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
                                    <option value="{{ $value }}">{{ $label }}</option>
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
                                        <option value="{{ $value }}">{{ $label }}</option>
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
                                        <option value="{{ $value }}">{{ $label }}</option>
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
                                        <option value="{{ $value }}">{{ $label }}</option>
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
                                        <option value="{{ $value }}">{{ $label }}</option>
                                    @endforeach
                                @endisset
                            </select>
                        </div>
                        <small class="form-text text-muted text-help"></small>
                        <span class="invalid-feedback"></span>
                    </div>
                </td>
                <td rowspan="2" colspan="2">
                    <strong>நவாம்சம்</strong>
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
                                        <option value="{{ $value }}">{{ $label }}</option>
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
                                        <option value="{{ $value }}">{{ $label }}</option>
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
                                        <option value="{{ $value }}">{{ $label }}</option>
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
                                        <option value="{{ $value }}">{{ $label }}</option>
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
                                        <option value="{{ $value }}">{{ $label }}</option>
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
                                        <option value="{{ $value }}">{{ $label }}</option>
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
                                        <option value="{{ $value }}">{{ $label }}</option>
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
