@extends('layouts.user')

@section('content')
    <div class="py-6 py-lg-8 bg-cover bg-center d-flex align-items-center position-relative"
        style="background-image: url(https://ganeshkongumatrimony.com/uploads/all/iajOd79XuUcPqOVehemGLDHv8YBk3wj2tn4H4M0w.jpg)">
        <span class="mask"></span>
        <div class="container">
            <div class="row">
                <div class="col col-xl-6 col-md-8 mx-auto">
                    <div class="card profile-search">
                        <div class="card-body px-3">
                            <div class="mb-3 text-center">
                                <h4 class="text-primary mb-2">Profile Search</h4>
                                <div
                                    class="nav nav-tabs aiz-nav-tabs bottom-bordered active-primary justify-content-center border-0">
                                    <a class="text-dark fw-600 fs-15 px-2 px-md-3 py-2 active" data-toggle="tab"
                                        href="#quick">Quick Search</a>
                                    <a class="text-dark fw-600 fs-15 px-2 px-md-3 py-2" data-toggle="tab"
                                        href="#id_search">ID Search</a>
                                    <a class="text-dark fw-600 fs-15 px-2 px-md-3 py-2" data-toggle="tab"
                                        href="#advance">Advance Search</a>
                                </div>
                            </div>
                            <div class="tab-content">
                                <div class="tab-pane show active" id="quick">
                                    <form action="{{ route('user.advancedSearch') }}" method="GET">
                                        <div class="form-row">
                                            <div class="col-sm-6">
                                                <div class="form-row">
                                                    <div class="col-6">
                                                        <div class="form-group mb-3">
                                                            <div class="form-group mb-3">
                                                                <label class="form-label" for="age_from">வயது முதல்</label>
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend"><span
                                                                            class="input-group-text"><i
                                                                                class="fas fa-calendar-alt"></i></span>
                                                                    </div>
                                                                    <select type="select" name="age_from" id="age_from"
                                                                        class="form-control aiz-selectpicker "
                                                                        data-live-search="true" -data-width="auto">
                                                                        <option style="display:none" value="">--
                                                                            Select --</option>
                                                                        <option selected value="18">18</option>
                                                                        @for ($i = 19; $i <= 60; $i++)
                                                                            <option value="{{ $i }}">
                                                                                {{ $i }}</option>
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
                                                                <label class="form-label" for="age_to">வயது வரை</label>
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend"><span
                                                                            class="input-group-text"><i
                                                                                class="fas fa-calendar-alt"></i></span>
                                                                    </div>
                                                                    <select type="select" name="age_to" id="age_to"
                                                                        class="form-control aiz-selectpicker "
                                                                        data-live-search="true" -data-width="auto">
                                                                        <option style="display:none" value="">--
                                                                            Select --</option>
                                                                        @for ($i = 18; $i <= 59; $i++)
                                                                            <option value="{{ $i }}">
                                                                                {{ $i }}</option>
                                                                        @endfor
                                                                        <option selected value="60">60</option>
                                                                    </select>
                                                                </div>
                                                                <small class="form-text text-muted text-help"></small>
                                                                <span class="invalid-feedback"></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group mb-3">
                                                    <label class="form-label" for="exp_maritalstatus">திருமண நிலை</label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend"><span class="input-group-text"><i
                                                                    class="fas fa-caret-down"></i></span></div>
                                                        <select type="select" name="exp_maritalstatus[]"
                                                            id="exp_maritalstatus" class="form-control aiz-selectpicker "
                                                            multiple "" data-live-search="true" -data-width="auto">
                                                            <option style="display:none" value="">-- Select --
                                                            </option>
                                                            @foreach ($data['select']['marital_statuses'] as $value => $label)
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
                                            <div class="col-sm-4">
                                                <div class="form-group mb-3">
                                                    <label class="form-label" for="caste">சாதி</label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend"><span class="input-group-text"><i
                                                                    class="fas fa-caret-down"></i></span></div>
                                                        <select type="select" name="caste[]" id="caste"
                                                            class="form-control aiz-selectpicker " multiple ""
                                                            data-live-search="true" -data-width="auto">
                                                            <option style="display:none" value="">-- Select --
                                                            </option>
                                                            @foreach ($data['select']['castes'] as $value => $label)
                                                                <option value="{{ $value }}">{{ $label }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <small class="form-text text-muted text-help"></small>
                                                    <span class="invalid-feedback"></span>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-group mb-3">
                                                    <label class="form-label" for="sub_caste">குலம்</label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend"><span class="input-group-text"><i
                                                                    class="fas fa-caret-down"></i></span></div>
                                                        <select type="select" name="sub_caste[]" id="sub_caste"
                                                            class="form-control aiz-selectpicker " multiple ""
                                                            data-live-search="true" -data-width="auto">
                                                            <option style="display:none" value="">-- Select --
                                                            </option>
                                                            @foreach ($data['select']['sub_castes'] as $value => $label)
                                                                <option value="{{ $value }}">{{ $label }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <small class="form-text text-muted text-help"></small>
                                                    <span class="invalid-feedback"></span>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-group mb-3">
                                                    <label class="form-label" for="exp_jathagam">ஜாதகம்</label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend"><span class="input-group-text"><i
                                                                    class="fas fa-caret-down"></i></span></div>
                                                        <select type="select" name="exp_jathagam[]" id="exp_jathagam"
                                                            class="form-control aiz-selectpicker " multiple ""
                                                            data-live-search="true" -data-width="auto">
                                                            <option style="display:none" value="">-- Select --
                                                            </option>
                                                            @foreach ($data['select']['jathagams'] as $value => $label)
                                                                <option value="{{ $value }}">{{ $label }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <small class="form-text text-muted text-help"></small>
                                                    <span class="invalid-feedback"></span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="text-center mb-3">
                                            <button type="submit" class="btn btn-primary btn-circle">Search <i
                                                    class="fas fa-search"></i></button>
                                        </div>
                                    </form>
                                </div>
                                <div class="tab-pane show" id="id_search">
                                    <form action="{{ route('user.advancedSearch') }}" method="GET">
                                        <div class="form-row">
                                            <div class="col-sm-6 mx-auto">
                                                <div class="form-group mb-3">
                                                    <label class="form-label" for="member_id">உறுப்பினர் எண்</label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend"><span class="input-group-text"><i
                                                                    class="fas fa-id-card"></i></span></div>
                                                        <input type="text" class="form-control " value=""
                                                            id="member_id" name="member_id" maxlength="255">
                                                    </div>
                                                    <small class="form-text text-muted text-help"></small>
                                                    <span class="invalid-feedback"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-center mb-3">
                                            <button type="submit" class="btn btn-primary btn-circle">Search <i
                                                    class="fas fa-search"></i></button>
                                        </div>
                                    </form>
                                </div>
                                <div class="tab-pane show" id="advance">
                                    <form action="{{ route('user.member-listing') }}" method="GET">
                                        <h4 class="section-title">தனிப்பட்ட விவரங்கள்</h4>
                                        <div class="form-row">
                                            <div class="col-sm-6">
                                                <div class="form-group mb-3">
                                                    <label class="form-label" for="name">பெயர்</label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend"><span class="input-group-text"><i
                                                                    class="fas fa-user"></i></span></div>
                                                        <input type="text" class="form-control " value=""
                                                            id="name" name="name" maxlength="255">
                                                    </div>
                                                    <small class="form-text text-muted text-help"></small>
                                                    <span class="invalid-feedback"></span>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-row">
                                                    <div class="col-6">
                                                        <div class="form-group mb-3">
                                                            <div class="form-group mb-3">
                                                                <label class="form-label" for="age_from">வயது
                                                                    முதல்</label>
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend"><span
                                                                            class="input-group-text"><i
                                                                                class="fas fa-calendar-alt"></i></span>
                                                                    </div>
                                                                    <select type="select" name="age_from" id="age_from"
                                                                        class="form-control aiz-selectpicker "
                                                                        data-live-search="true" -data-width="auto">
                                                                        <option style="display:none" value="">--
                                                                            Select --</option>
                                                                        <option selected value="18">18</option>
                                                                        @for ($i = 19; $i <= 60; $i++)
                                                                            <option value="{{ $i }}">
                                                                                {{ $i }}</option>
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
                                                                <label class="form-label" for="age_to">வயது வரை</label>
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend"><span
                                                                            class="input-group-text"><i
                                                                                class="fas fa-calendar-alt"></i></span>
                                                                    </div>
                                                                    <select type="select" name="age_to" id="age_to"
                                                                        class="form-control aiz-selectpicker "
                                                                        data-live-search="true" -data-width="auto">
                                                                        <option style="display:none" value="">--
                                                                            Select --</option>
                                                                        @for ($i = 18; $i <= 59; $i++)
                                                                            <option value="{{ $i }}">
                                                                                {{ $i }}</option>
                                                                        @endfor
                                                                        <option selected value="60">60</option>
                                                                    </select>
                                                                </div>
                                                                <small class="form-text text-muted text-help"></small>
                                                                <span class="invalid-feedback"></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group mb-3">
                                                    <label class="form-label" for="exp_maritalstatus">திருமண நிலை</label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend"><span class="input-group-text"><i
                                                                    class="fas fa-caret-down"></i></span></div>
                                                        <select type="select" name="exp_maritalstatus[]"
                                                            id="exp_maritalstatus" class="form-control aiz-selectpicker "
                                                            multiple "" data-live-search="true" -data-width="auto">
                                                            <option style="display:none" value="">-- Select --
                                                            </option>
                                                            @foreach ($data['select']['marital_statuses'] as $value => $label)
                                                                <option value="{{ $value }}">{{ $label }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <small class="form-text text-muted text-help"></small>
                                                    <span class="invalid-feedback"></span>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group mb-3">
                                                    <label class="form-label" for="splcategory">உடல் நிலை</label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend"><span class="input-group-text"><i
                                                                    class="fas fa-caret-down"></i></span></div>
                                                        <select type="select" name="splcategory" id="splcategory"
                                                            class="form-control aiz-selectpicker " data-live-search="true"
                                                            -data-width="auto">
                                                            <option style="display:none" value="">-- Select --
                                                            </option>
                                                            @foreach ($data['select']['physical_statuses'] as $value => $label)
                                                                <option value="{{ $value }}">{{ $label }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <small class="form-text text-muted text-help"></small>
                                                    <span class="invalid-feedback"></span>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group mb-3">
                                                    <label class="form-label" for="body_type">உடல் அமைப்பு</label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend"><span class="input-group-text"><i
                                                                    class="fas fa-caret-down"></i></span></div>
                                                        <select type="select" name="body_type[]" id="body_type"
                                                            class="form-control aiz-selectpicker " multiple ""
                                                            data-live-search="true" -data-width="auto">
                                                            <option style="display:none" value="">-- Select --
                                                            </option>
                                                            @foreach ($data['select']['body_types'] as $value => $label)
                                                                <option value="{{ $value }}">{{ $label }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <small class="form-text text-muted text-help"></small>
                                                    <span class="invalid-feedback"></span>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group mb-3">
                                                    <label class="form-label" for="color">நிறம்</label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend"><span class="input-group-text"><i
                                                                    class="fas fa-caret-down"></i></span></div>
                                                        <select type="select" name="color[]" id="color"
                                                            class="form-control aiz-selectpicker " multiple ""
                                                            data-live-search="true" -data-width="auto">
                                                            <option style="display:none" value="">-- Select --
                                                            </option>
                                                            @foreach ($data['select']['colors'] as $value => $label)
                                                                <option value="{{ $value }}">{{ $label }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <small class="form-text text-muted text-help"></small>
                                                    <span class="invalid-feedback"></span>
                                                </div>
                                            </div>
                                        </div>

                                        <h4 class="section-title">மதம், படிப்பு மற்றும் தொழில் விவரங்கள்</h4>
                                        <div class="form-row">
                                            <div class="col-sm-6">
                                                <div class="form-group mb-3">
                                                    <label class="form-label" for="caste">சாதி</label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend"><span class="input-group-text"><i
                                                                    class="fas fa-caret-down"></i></span></div>
                                                        <select type="select" name="caste[]" id="caste"
                                                            class="form-control aiz-selectpicker " multiple ""
                                                            data-live-search="true" -data-width="auto">
                                                            <option style="display:none" value="">-- Select --
                                                            </option>
                                                            @foreach ($data['select']['castes'] as $value => $label)
                                                                <option value="{{ $value }}">{{ $label }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <small class="form-text text-muted text-help"></small>
                                                    <span class="invalid-feedback"></span>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group mb-3">
                                                    <label class="form-label" for="sub_caste">குலம்</label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend"><span class="input-group-text"><i
                                                                    class="fas fa-caret-down"></i></span></div>
                                                        <select type="select" name="sub_caste[]" id="sub_caste"
                                                            class="form-control aiz-selectpicker " multiple ""
                                                            data-live-search="true" -data-width="auto">
                                                            <option style="display:none" value="">-- Select --
                                                            </option>
                                                            @foreach ($data['select']['sub_castes'] as $value => $label)
                                                                <option value="{{ $value }}">{{ $label }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <small class="form-text text-muted text-help"></small>
                                                    <span class="invalid-feedback"></span>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group mb-3">
                                                    <label class="form-label" for="education">படிப்பு</label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend"><span class="input-group-text"><i
                                                                    class="fas fa-graduation-cap"></i></span></div>
                                                        <select type="select" name="education[]" id="education"
                                                            class="form-control aiz-selectpicker " multiple ""
                                                            data-live-search="true" -data-width="auto">
                                                            <option style="display:none" value="">-- Select --
                                                            </option>
                                                            @foreach ($data['select']['educations'] as $value => $label)
                                                                <option value="{{ $value }}">{{ $label }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <small class="form-text text-muted text-help"></small>
                                                    <span class="invalid-feedback"></span>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group mb-3">
                                                    <label class="form-label" for="work">பணி</label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend"><span class="input-group-text"><i
                                                                    class="fas fa-caret-down"></i></span></div>
                                                        <select type="select" name="work[]" id="work"
                                                            class="form-control aiz-selectpicker " multiple ""
                                                            data-live-search="true" -data-width="auto">
                                                            <option style="display:none" value="">-- Select --
                                                            </option>
                                                            @foreach ($data['select']['works'] as $value => $label)
                                                                <option value="{{ $value }}">{{ $label }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <small class="form-text text-muted text-help"></small>
                                                    <span class="invalid-feedback"></span>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group mb-3">
                                                    <label class="form-label" for="exp_work_place">பணியிடம்</label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend"><span class="input-group-text"><i
                                                                    class="fas fa-caret-down"></i></span></div>
                                                        <select type="select" name="exp_work_place[]"
                                                            id="exp_work_place" class="form-control aiz-selectpicker "
                                                            multiple "" data-live-search="true" -data-width="auto">
                                                            <option style="display:none" value="">-- Select --
                                                            </option>
                                                            @foreach ($data['select']['work_places'] as $value => $label)
                                                                <option value="{{ $value }}">{{ $label }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <small class="form-text text-muted text-help"></small>
                                                    <span class="invalid-feedback"></span>
                                                </div>
                                            </div>
                                        </div>


                                        <h4 class="section-title">இருப்பிடம்</h4>
                                        <div class="form-row">
                                            <div class="col-sm-4">
                                                <div class="form-group mb-3">
                                                    <label class="form-label" for="country">நாடு</label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend"><span class="input-group-text"><i
                                                                    class="fas fa-globe-asia"></i></span></div>
                                                        <select type="select" name="country" id="country"
                                                            class="form-control aiz-selectpicker " data-live-search="true"
                                                            -data-width="auto">
                                                            <option style="display:none" value="">-- Select --
                                                            </option>
                                                            @foreach ($data['select']['countries'] as $value => $label)
                                                                <option value="{{ $value }}">{{ $label }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <small class="form-text text-muted text-help"></small>
                                                    <span class="invalid-feedback"></span>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-group mb-3">
                                                    <label class="form-label" for="state">மாநிலம்</label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend"><span class="input-group-text"><i
                                                                    class="fas fa-map-marker-alt"></i></span></div>
                                                        <select type="select" name="state" id="state"
                                                            class="form-control aiz-selectpicker " data-live-search="true"
                                                            -data-width="auto">
                                                            <option style="display:none" value="">-- Select --
                                                            </option>
                                                            @foreach ($data['select']['states'] as $value => $label)
                                                                <option value="{{ $value }}">{{ $label }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <small class="form-text text-muted text-help"></small>
                                                    <span class="invalid-feedback"></span>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-group mb-3">
                                                    <label class="form-label" for="district">மாவட்டம்</label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend"><span class="input-group-text"><i
                                                                    class="fas fa-map-marker-alt"></i></span></div>
                                                        <select type="select" name="district[]" id="district"
                                                            class="form-control aiz-selectpicker " multiple ""
                                                            data-live-search="true" -data-width="auto">
                                                            <option style="display:none" value="">-- Select --
                                                            </option>
                                                            @foreach ($data['select']['districts'] as $value => $label)
                                                                <option value="{{ $value }}">{{ $label }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <small class="form-text text-muted text-help"></small>
                                                    <span class="invalid-feedback"></span>
                                                </div>
                                            </div>
                                        </div>

                                        <h4 class="section-title">ஜாதக விவரங்கள்</h4>
                                        <div class="form-row">
                                            <div class="col-sm-4">
                                                <div class="form-group mb-3">
                                                    <label class="form-label" for="rasi_nakshatra">இராசி -
                                                        நட்சத்திரம்</label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend"><span class="input-group-text"><i
                                                                    class="fas fa-caret-down"></i></span></div>
                                                        <select type="select" name="rasi_nakshatra[]"
                                                            id="rasi_nakshatra" class="form-control aiz-selectpicker "
                                                            multiple "" data-live-search="true" -data-width="auto">
                                                            <option style="display:none" value="">-- Select --
                                                            </option>
                                                            @foreach ($data['select']['rasi_nakshatras'] as $value => $label)
                                                                <option value="{{ $value }}">{{ $label }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <small class="form-text text-muted text-help"></small>
                                                    <span class="invalid-feedback"></span>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-group mb-3">
                                                    <label class="form-label" for="lagnam">லக்னம்</label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend"><span
                                                                class="input-group-text"><i
                                                                    class="fas fa-caret-down"></i></span></div>
                                                        <select type="select" name="lagnam[]" id="lagnam"
                                                            class="form-control aiz-selectpicker " multiple ""
                                                            data-live-search="true" -data-width="auto">
                                                            <option style="display:none" value="">-- Select --
                                                            </option>
                                                            @foreach ($data['select']['lagnams'] as $value => $label)
                                                                <option value="{{ $value }}">{{ $label }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <small class="form-text text-muted text-help"></small>
                                                    <span class="invalid-feedback"></span>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-group mb-3">
                                                    <label class="form-label" for="exp_jathagam">ஜாதகம்</label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend"><span
                                                                class="input-group-text"><i
                                                                    class="fas fa-caret-down"></i></span></div>
                                                        <select type="select" name="exp_jathagam[]" id="exp_jathagam"
                                                            class="form-control aiz-selectpicker " multiple ""
                                                            data-live-search="true" -data-width="auto">
                                                            <option style="display:none" value="">-- Select --
                                                            </option>
                                                            @foreach ($data['select']['jathagams'] as $value => $label)
                                                                <option value="{{ $value }}">{{ $label }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <small class="form-text text-muted text-help"></small>
                                                    <span class="invalid-feedback"></span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="text-center mb-3">
                                            <button type="submit" class="btn btn-primary btn-circle">Search <i
                                                    class="fas fa-search"></i></button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
