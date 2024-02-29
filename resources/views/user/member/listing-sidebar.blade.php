<div class="aiz-filter-sidebar collapse-sidebar-wrap sidebar-xl z-1035">
    <div class="overlay overlay-fixed dark c-pointer" data-toggle="class-toggle" data-target=".aiz-filter-sidebar" data-same=".filter-sidebar-thumb"></div>
    <div class="card collapse-sidebar c-scrollbar-light shadow-none">
        <div class="card-header pr-1 pl-3">
            <h5 class="mb-0 h6">ADVANCED SEARCH</h5>
            <button class="btn btn-sm p-2 d-xl-none filter-sidebar-thumb" data-toggle="class-toggle" data-target=".aiz-filter-sidebar" type="button">
                <i class="fas fa-times fa-2x"></i>
            </button>
        </div>
        <div class="card-body px-0 pt-1">
            <form id="filter-form" action="{{ route('user.search') }}" method="get">
                <div class="accordion" id="accordionPersonal">
                    <h4 class="btn btn-primary" data-toggle="collapse" data-target="#collapsePersonal" aria-expanded="true" aria-controls="collapsePersonal">
                        தனிப்பட்ட விவரங்கள் <i class="fas fa-chevron-down float-right"></i>
                    </h4>
                    <div id="collapsePersonal" class="collapse show" data-parent="#accordionPersonal">
                        <div class="form-row">
                            <div class="col-12">
                                <div class="form-group mb-3">
                                    <div class="form-group mb-3">
                                        <label class="form-label" for="member_id">உறுப்பினர்
                                            எண்</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend"><span class="input-group-text"><i class="fas fa-user"></i></span></div>
                                            <input type="text" class="form-control " value="" id="member_id" name="member_id" maxlength="255">
                                        </div>
                                        <small class="form-text text-muted text-help">.</small>
                                        <span class="invalid-feedback"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-12">
                                <div class="form-row">
                                    <div class="col-6">
                                        <div class="form-group mb-3">
                                            <div class="form-group mb-3">
                                                <label class="form-label" for="age_from">வயது
                                                    முதல்</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend"><span class="input-group-text"><i class="fas fa-calendar-alt"></i></span>
                                                    </div>
                                                    <select type="select" name="age_from" id="age_from" class="form-control aiz-selectpicker " data-live-search="true" -data-width="auto">
                                                        <option style="display:none" value="">-- Select --</option>
                                                        @for ($i=18; $i<=60; $i++)
                                                            <option value="{{ $i }}">{{ $i }}</option>
                                                        @endfor
                                                    </select>
                                                </div>
                                                <small class="form-text text-muted text-help"></small>
                                                <span class="invalid-feedback"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group mb-3">
                                            <div class="form-group mb-3">
                                                <label class="form-label" for="age_to">வயது
                                                    வரை</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend"><span class="input-group-text"><i class="fas fa-calendar-alt"></i></span>
                                                    </div>
                                                    <select type="select" name="age_to" id="age_to" class="form-control aiz-selectpicker " data-live-search="true" -data-width="auto">
                                                        <option style="display:none" value="">-- Select --
                                                        </option>
                                                        @for ($i=18; $i<=60; $i++)
                                                            <option value="{{ $i }}">{{ $i }}</option>
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
                            <div class="col-12">
                                <div class="form-group mb-3">
                                    <label class="form-label" for="exp_maritalstatus">திருமண
                                        நிலை</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text"><i class="fas fa-caret-down"></i></span></div>
                                        <select type="select" name="exp_maritalstatus[]" id="exp_maritalstatus" class="form-control aiz-selectpicker " multiple "" data-live-search="true" -data-width="auto">
                                            <option style="display:none" value="">--
                                                Select --</option>
                                            @foreach ($data['select']['marital_statuses'] ?? [] as $value => $label)
                                                <option value="{{ $value }}">{{ $label }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <small class="form-text text-muted text-help"></small>
                                    <span class="invalid-feedback"></span>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-12">
                                <div class="form-group mb-3">
                                    <label class="form-label" for="splcategory">உடல்
                                        நிலை</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text"><i class="fas fa-caret-down"></i></span></div>
                                        <select type="select" name="splcategory" id="splcategory" class="form-control aiz-selectpicker " data-live-search="true" -data-width="auto">
                                            <option style="display:none" value="">--
                                                Select --</option>
                                            <option selected value="">அனைத்தும்</option>
                                            @foreach ($data['select']['physical_statuses'] ?? [] as $value => $label)
                                                <option value="{{ $value }}">{{ $label }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <small class="form-text text-muted text-help"></small>
                                    <span class="invalid-feedback"></span>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group mb-3">
                                    <label class="form-label" for="body_type">உடல்
                                        அமைப்பு</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text"><i class="fas fa-caret-down"></i></span></div>
                                        <select type="select" name="body_type[]" id="body_type" class="form-control aiz-selectpicker " multiple "" data-live-search="true" -data-width="auto">
                                            <option style="display:none" value="">--
                                                Select --</option>
                                            @foreach ($data['select']['body_types'] ?? [] as $value => $label)
                                                <option value="{{ $value }}">{{ $label }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <small class="form-text text-muted text-help"></small>
                                    <span class="invalid-feedback"></span>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-12">
                                <div class="form-group mb-3">
                                    <label class="form-label" for="color">நிறம்</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text"><i class="fas fa-caret-down"></i></span></div>
                                        <select type="select" name="color[]" id="color" class="form-control aiz-selectpicker " multiple "" data-live-search="true" -data-width="auto">
                                            <option style="display:none" value="">--
                                                Select --</option>
                                            @foreach ($data['select']['colors'] ?? [] as $value => $label)
                                                <option value="{{ $value }}">{{ $label }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <small class="form-text text-muted text-help"></small>
                                    <span class="invalid-feedback"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="accordion" id="accordionReligious">
                    <h4 class="btn btn-primary collapsed" data-toggle="collapse" data-target="#collapseReligious" aria-expanded="false" aria-controls="collapseReligious">
                        மதம், படிப்பு, தொழில் <i class="fas fa-chevron-down float-right"></i>
                    </h4>
                    <div id="collapseReligious" class="collapse" data-parent="#accordionReligious">
                        <div class="form-row">
                            <div class="col-12">
                                <div class="form-group mb-3">
                                    <label class="form-label" for="caste">சாதி</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text"><i class="fas fa-caret-down"></i></span></div>
                                        <select type="select" name="caste[]" id="caste" class="form-control aiz-selectpicker " multiple "" data-live-search="true" -data-width="auto">
                                            <option style="display:none" value="">--
                                                Select --</option>
                                            @foreach ($data['select']['castes'] ?? [] as $value => $label)
                                                <option value="{{ $value }}">{{ $label }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <small class="form-text text-muted text-help"></small>
                                    <span class="invalid-feedback"></span>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group mb-3">
                                    <label class="form-label" for="sub_caste">குலம்</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text"><i class="fas fa-caret-down"></i></span></div>
                                        <select type="select" name="sub_caste[]" id="sub_caste" class="form-control aiz-selectpicker " multiple "" data-live-search="true" -data-width="auto">
                                            <option style="display:none" value="">--
                                                Select --</option>
                                            @foreach ($data['select']['sub_castes'] ?? [] as $value => $label)
                                                <option value="{{ $value }}">{{ $label }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <small class="form-text text-muted text-help"></small>
                                    <span class="invalid-feedback"></span>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group mb-3">
                                    <label class="form-label" for="education">படிப்பு</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text"><i class="fas fa-graduation-cap"></i></span>
                                        </div>
                                        <select type="select" name="education[]" id="education" class="form-control aiz-selectpicker " multiple "" data-live-search="true" -data-width="auto">
                                            <option style="display:none" value="">--
                                                Select --</option>
                                            @foreach ($data['select']['educations'] ?? [] as $value => $label)
                                                <option value="{{ $value }}">{{ $label }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <small class="form-text text-muted text-help"></small>
                                    <span class="invalid-feedback"></span>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group mb-3">
                                    <label class="form-label" for="work">பணி</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text"><i class="fas fa-caret-down"></i></span></div>
                                        <select type="select" name="work[]" id="work" class="form-control aiz-selectpicker " multiple "" data-live-search="true" -data-width="auto">
                                            <option style="display:none" value="">--
                                                Select --</option>
                                            @foreach ($data['select']['works'] ?? [] as $value => $label)
                                                <option value="{{ $value }}">{{ $label }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <small class="form-text text-muted text-help"></small>
                                    <span class="invalid-feedback"></span>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group mb-3">
                                    <label class="form-label" for="exp_work_place">பணியிடம்</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text"><i class="fas fa-caret-down"></i></span></div>
                                        <select type="select" name="exp_work_place[]" id="exp_work_place" class="form-control aiz-selectpicker " multiple "" data-live-search="true" -data-width="auto">
                                            <option style="display:none" value="">--
                                                Select --</option>
                                            @foreach ($data['select']['work_places'] ?? [] as $value => $label)
                                                <option value="{{ $value }}">{{ $label }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <small class="form-text text-muted text-help"></small>
                                    <span class="invalid-feedback"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="accordion" id="accordionLocation">
                    <h4 class="btn btn-primary collapsed" data-toggle="collapse" data-target="#collapseLocation" aria-expanded="false" aria-controls="collapseLocation">
                        இருப்பிடம் <i class="fas fa-chevron-down float-right"></i>
                    </h4>
                    <div id="collapseLocation" class="collapse" data-parent="#accordionLocation">
                        <div class="form-row">
                            <div class="col-12">
                                <div class="form-group mb-3">
                                    <label class="form-label" for="country">நாடு</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text"><i class="fas fa-globe-asia"></i></span></div>
                                        <select type="select" name="country" id="country" class="form-control aiz-selectpicker " data-live-search="true" -data-width="auto">
                                            <option style="display:none" value="">--
                                                Select --</option>
                                            @foreach ($data['select']['countries'] ?? [] as $value => $label)
                                                <option value="{{ $value }}">{{ $label }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <small class="form-text text-muted text-help"></small>
                                    <span class="invalid-feedback"></span>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group mb-3">
                                    <label class="form-label" for="state">மாநிலம்</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text"><i class="fas fa-map-marker-alt"></i></span>
                                        </div>
                                        <select type="select" name="state" id="state" class="form-control aiz-selectpicker " data-live-search="true" -data-width="auto">
                                            <option style="display:none" value="">--
                                                Select --</option>
                                            @foreach ($data['select']['states'] ?? [] as $value => $label)
                                                <option value="{{ $value }}">{{ $label }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <small class="form-text text-muted text-help"></small>
                                    <span class="invalid-feedback"></span>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group mb-3">
                                    <label class="form-label" for="district">மாவட்டம்</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text"><i class="fas fa-map-marker-alt"></i></span>
                                        </div>
                                        <select type="select" name="district[]" id="district" class="form-control aiz-selectpicker " multiple "" data-live-search="true" -data-width="auto">
                                            <option style="display:none" value="">--
                                                Select --</option>
                                            @foreach ($data['select']['districts'] ?? [] as $value => $label)
                                                <option value="{{ $value }}">{{ $label }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <small class="form-text text-muted text-help"></small>
                                    <span class="invalid-feedback"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="accordion" id="accordionJathagam">
                    <h4 class="btn btn-primary collapsed" data-toggle="collapse" data-target="#collapseJathagam" aria-expanded="false" aria-controls="collapseJathagam">
                        ஜாதக விவரங்கள் <i class="fas fa-chevron-down float-right"></i>
                    </h4>
                    <div id="collapseJathagam" class="collapse" data-parent="#accordionJathagam">
                        <div class="form-row">
                            <div class="col-12">
                                <div class="form-group mb-3">
                                    <label class="form-label" for="rasi_nakshatra">இராசி -
                                        நட்சத்திரம்</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text"><i class="fas fa-caret-down"></i></span></div>
                                        <select type="select" name="rasi_nakshatra[]" id="rasi_nakshatra" class="form-control aiz-selectpicker " multiple "" data-live-search="true" -data-width="auto">
                                            <option style="display:none" value="">--
                                                Select --</option>
                                            @foreach ($data['select']['rasi_nakshatras'] ?? [] as $value => $label)
                                                <option value="{{ $value }}">{{ $label }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <small class="form-text text-muted text-help"></small>
                                    <span class="invalid-feedback"></span>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group mb-3">
                                    <label class="form-label" for="lagnam">லக்னம்</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text"><i class="fas fa-caret-down"></i></span></div>
                                        <select type="select" name="lagnam[]" id="lagnam" class="form-control aiz-selectpicker " multiple "" data-live-search="true" -data-width="auto">
                                            <option style="display:none" value="">--
                                                Select --</option>
                                            @foreach ($data['select']['rasis'] ?? [] as $value => $label)
                                                <option value="{{ $value }}">{{ $label }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <small class="form-text text-muted text-help"></small>
                                    <span class="invalid-feedback"></span>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group mb-3">
                                    <label class="form-label" for="exp_jathagam">ஜாதகம்</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text"><i class="fas fa-caret-down"></i></span></div>
                                        <select type="select" name="exp_jathagam[]" id="exp_jathagam" class="form-control aiz-selectpicker " multiple "" data-live-search="true" -data-width="auto">
                                            <option style="display:none" value="">--
                                                Select --</option>
                                            @foreach ($data['select']['jathagams'] ?? [] as $value => $label)
                                                <option value="{{ $value }}">{{ $label }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <small class="form-text text-muted text-help"></small>
                                    <span class="invalid-feedback"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-circle btn-sm btn-primary mt-2">Search</button>
                </div>
            </form>
        </div>
    </div>
</div>
<style>
    h4.btn {
        width: 100%;
        margin-top: 5px;
        margin-bottom: 0;
        text-align: left;
    }

    div.collapse {
        padding: 8px;
        border: solid 1px #248822;
        border-top: none;
        border-radius: 0.25rem;
    }

    h4 i {
        padding: 3px;
    }

    h4[aria-expanded="true"] i {
        -webkit-transform: rotateX(180deg);
        transform: rotateX(180deg);
    }
</style>