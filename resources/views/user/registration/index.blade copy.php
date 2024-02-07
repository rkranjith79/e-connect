
@extends('layouts.user')

@section('content')
     
<div class="py-4 py-lg-5 bg-cover bg-center d-flex align-items-center position-relative"
style="background-image: url(https://ganeshkongumatrimony.com/uploads/all/iajOd79XuUcPqOVehemGLDHv8YBk3wj2tn4H4M0w.jpg)">
<span class="mask"></span>
<div class="container-fluid">
    <div id="form_content" class="row">
        <div class="col-12 col-xl-10 mx-auto">
            <div class="card">
                <div class="card-body">
                    <div class="mb-2 text-center">
                        <h1 class="h3 text-primary mb-0">Create Your Account</h1>
                        <p>Register yourself in our website to access thousands of profiles and find your
                            life partner.</p>
                        <form>
                            <label class="text-primary font-weight-bold pr-2">Language/மொழி</label>
                            <a href="https://ganeshkongumatrimony.com/set_language/in"
                                class="text-reset font-weight-bold pr-2">
                                <div class="aiz-radio aiz-radio-inline">
                                    <input type="radio" name="lang"> தமிழ்<span
                                        class="aiz-rounded-check"></span>
                                </div>
                            </a>
                            <a href="https://ganeshkongumatrimony.com/set_language/en"
                                class="text-reset font-weight-bold pl-2">
                                <div class="aiz-radio aiz-radio-inline">
                                    <input type="radio" name="lang" checked> English<span
                                        class="aiz-rounded-check"></span>
                                </div>
                            </a>
                        </form>
                    </div>
                    <form class="form-default" id="registration_form" role="form"
                         method="POST">
                        @csrf
                        @include('basic')

                        <h4 class="section-title">Personal Details</h4>
                        <div class="row">
                            <div class="col-sm-3">
                                <div class="form-group mb-3">
                                    <label class="form-label" for="physical_status_id">Physical Status<span
                                            class="require-star">*</span></label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text"><i
                                                    class="fas fa-caret-down"></i></span></div>
                                        <select type="select" name="physical_status_id" id="physical_status_id"
                                            class="form-control aiz-selectpicker required "
                                            data-live-search="true" -data-width="auto">
                                            <option style="display:none" value="">-- Select --</option>
                                            @isset($record['registered_bies'])
                                                @foreach ($record['registered_bies'] as $value => $label)
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
                                    <label class="form-label" for="height_id">Height<span
                                            class="require-star">*</span></label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text"><i
                                                    class="fas fa-hashtag"></i></span></div>
                                        <select type="select" name="height_id" id="height_id"
                                            class="form-control aiz-selectpicker required "
                                            data-live-search="true" -data-width="auto">
                                            <option style="display:none" value="">-- Select --</option>
                                            @isset($record['heights'])
                                                @foreach ($record['heights'] as $value => $label)
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
                                    <label class="form-label" for="weight_id">Weight<span
                                            class="require-star">*</span></label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text"><i
                                                    class="fas fa-hashtag"></i></span></div>
                                        <select type="select" name="weight_id" id="weight_id"
                                            class="form-control aiz-selectpicker required "
                                            data-live-search="true" -data-width="auto">
                                            <option style="display:none" value="">-- Select --</option>
                                            @isset($record['weights'])
                                                @foreach ($record['weights'] as $value => $label)
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
                                    <label class="form-label" for="body_type_id">Body Type<span
                                            class="require-star">*</span></label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text"><i
                                                    class="fas fa-caret-down"></i></span></div>
                                        <select type="select" name="body_type_id" id="body_type_id"
                                            class="form-control aiz-selectpicker required "
                                            data-live-search="true" -data-width="auto">
                                            <option style="display:none" value="">-- Select --</option>
                                            @isset($record['body_types'])
                                                @foreach ($record['body_types'] as $value => $label)
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
                                    <label class="form-label" for="color_id">Color<span
                                            class="require-star">*</span></label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text"><i
                                                    class="fas fa-caret-down"></i></span></div>
                                        <select type="select" name="color_id" id="color_id"
                                            class="form-control aiz-selectpicker required "
                                            data-live-search="true" -data-width="auto">
                                            <option style="display:none" value="">-- Select --</option>
                                            @isset($record['colors'])
                                                @foreach ($record['colors'] as $value => $label)
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
                                    <label class="form-label" for="blood_group_id">Blood Group<span
                                            class="require-star">*</span></label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text"><i
                                                    class="fas fa-caret-down"></i></span></div>
                                        <select type="select" name="blood_group_id" id="blood_group_id"
                                            class="form-control aiz-selectpicker required "
                                            data-live-search="true" -data-width="auto">
                                            <option style="display:none" value="">-- Select --</option>
                                            @isset($record['blood_groups'])
                                                @foreach ($record['blood_groups'] as $value => $label)
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

                        <h4 class="section-title">Religious & Social Background</h4>
                        <div class="row">
                            <div class="col-sm-3">
                                <div class="form-group mb-3">
                                    <label class="form-label" for="religion_id">Religion<span
                                            class="require-star">*</span></label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text"><i
                                                    class="fas fa-caret-down"></i></span></div>
                                        <select type="select" name="religion_id" id="religion_id"
                                            class="form-control aiz-selectpicker required "
                                            data-live-search="true" -data-width="auto">
                                            <option style="display:none" value="">-- Select --</option>
                                            <option value="1">Kongu Vellala Gounder</option>
                                            <option value="2">Kongu Vellalar Division</option>
                                            <option value="3">Kongu Vellalar Mix</option>
                                        </select>
                                    </div>
                                    <small class="form-text text-muted text-help"></small>
                                    <span class="invalid-feedback"></span>
                                </div>
                            </div>

                            <div class="col-sm-3">
                                <div class="form-group mb-3">
                                    <label class="form-label" for="caste_id">Caste<span
                                            class="require-star">*</span></label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text"><i
                                                    class="fas fa-caret-down"></i></span></div>
                                        <select type="select" name="caste_id" id="caste_id"
                                            class="form-control aiz-selectpicker required "
                                            data-live-search="true" -data-width="auto">
                                            <option style="display:none" value="">-- Select --</option>
                                            <option value="1">Kongu Vellala Gounder</option>
                                            <option value="2">Kongu Vellalar Division</option>
                                            <option value="3">Kongu Vellalar Mix</option>
                                        </select>
                                    </div>
                                    <small class="form-text text-muted text-help"></small>
                                    <span class="invalid-feedback"></span>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group mb-3">
                                        </select>
                                    </div>
                                    <small class="form-text text-muted text-help"></small>
                                    <span class="invalid-feedback"></span>
                                </div>
                            </div>
                            
                            <div class="col-sm">
                                <div class="form-group mb-3">
                                    <label class="form-label" for="temple">Temple<span
                                            class="require-star">*</span></label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text"><i
                                                    class="fas fa-keyboard"></i></span></div>
                                        <input type="text" class="form-control required " value=""
                                            id="temple" name="temple" maxlength="255">
                                    </div>
                                    <small class="form-text text-muted text-help"></small>
                                    <span class="invalid-feedback"></span>
                                </div>
                            </div>
                        </div>

                        <h4 class="section-title">Education & Career</h4>
                        <div class="row">
                            <div class="col-sm-3">
                                <div class="form-group mb-3">
                                    <label class="form-label" for="education_id">Education<span
                                            class="require-star">*</span></label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text"><i
                                                    class="fas fa-graduation-cap"></i></span></div>
                                        <select type="select" name="education_id" id="education_id"
                                            class="form-control aiz-selectpicker required "
                                            data-live-search="true" -data-width="auto">
                                            <option style="display:none" value="">-- Select --</option>
                                            <option value="2">No Education</option>
                                            <option value="3">Student</option>
                                            <option value="4">Below SSLC</option>
                                            <option value="5">SSLC (10th)</option>
                                            <option value="6">HSC (12th)</option>
                                            <option value="7">Under Graduate</option>
                                            <option value="8">Post Graduate</option>
                                            <option value="9">Medical</option>
                                            <option value="10">Engineering</option>
                                            <option value="11">Diploma or ITI</option>
                                            <option value="1">Others</option>
                                            <option value="999">Don't Know</option>
                                        </select>
                                    </div>
                                    <small class="form-text text-muted text-help"></small>
                                    <span class="invalid-feedback"></span>
                                </div>
                            </div>
                            
                            <div class="col-sm-3">
                                <div class="form-group mb-3">
                                    <label class="form-label" for="education_details">Education Details<span
                                            class="require-star">*</span></label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text"><i
                                                    class="fas fa-graduation-cap"></i></span></div>
                                        <input type="text" class="form-control required " value=""
                                            id="education_details" name="education_details" maxlength="150">
                                    </div>
                                    <small class="form-text text-muted text-help"></small>
                                    <span class="invalid-feedback"></span>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group mb-3">
                                    <label class="form-label" for="work_id">Work<span
                                            class="require-star">*</span></label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text"><i
                                                    class="fas fa-caret-down"></i></span></div>
                                        <select type="select" name="work_id" id="work_id"
                                            class="form-control aiz-selectpicker required "
                                            data-live-search="true" -data-width="auto">
                                            <option style="display:none" value="">-- Select --</option>
                                            <option value="2">Agriculture</option>
                                            <option value="6">Doctor</option>
                                            <option value="4">Govt job</option>
                                            <option value="9">Not at work</option>
                                            <option value="5">Private work</option>
                                            <option value="3">Self Employed</option>
                                            <option value="7">Software</option>
                                            <option value="8">Student</option>
                                            <option value="1">Others</option>
                                            <option value="999">Don't Know</option>
                                        </select>
                                    </div>
                                    <small class="form-text text-muted text-help"></small>
                                    <span class="invalid-feedback"></span>
                                </div>
                            </div>
                            
                            <div class="col-sm-3">
                                <div class="form-group mb-3">
                                    <label class="form-label" for="work_details">Work Details<span
                                            class="require-star">*</span></label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text"><i
                                                    class="fas fa-pen"></i></span></div>
                                        <input type="text" class="form-control required " value=""
                                            id="work_details" name="work_details" maxlength="150">
                                    </div>
                                    <small class="form-text text-muted text-help"></small>
                                    <span class="invalid-feedback"></span>
                                </div>
                            </div>
                            <div class="col-sm-3 div-work-place">
                                <div class="form-group mb-3">
                                    <label class="form-label" for="work_place_id">Work Place<span
                                            class="require-star">*</span></label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text"><i
                                                    class="fas fa-caret-down"></i></span></div>
                                        <select type="select" name="work_place_id" id="work_place_id"
                                            class="form-control aiz-selectpicker required "
                                            data-live-search="true" -data-width="auto">
                                            <option style="display:none" value="">-- Select --</option>
                                            <option value="1">Tamil Nadu</option>
                                            <option value="2">Other State</option>
                                            <option value="3">Other Country</option>
                                            <option value="999">Don't Know</option>
                                        </select>
                                    </div>
                                    <small class="form-text text-muted text-help"></small>
                                    <span class="invalid-feedback"></span>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group mb-3">
                                    <label class="form-label" for="monthly_income">Monthly Income<span
                                            class="require-star">*</span></label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text"><i
                                                    class="fas fa-rupee-sign"></i></span></div>
                                        <input type="number" class="form-control required " value=""
                                            id="monthly_income" name="monthly_income" maxlength="255">
                                    </div>
                                    <small class="form-text text-muted text-help"></small>
                                    <span class="invalid-feedback"></span>
                                </div>
                            </div>
                        </div>

                        <h4 class="section-title">Contact Details</h4>
                        <div class="row">
                            <div class="col-sm-3">
                                <div class="form-group mb-3">
                                    <label class="form-label" for="phone">Contact Number<span
                                            class="require-star">*</span></label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text"><i
                                                    class="fas fa-phone-alt"></i></span></div>
                                        <input type="number" class="form-control required " value=""
                                            id="phone" name="phone" maxlength="10">
                                    </div>
                                    <small class="form-text text-muted text-help"></small>
                                    <span class="invalid-feedback"></span>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group mb-3">
                                    <label class="form-label" for="whatsapp">Whatsapp Number<span
                                            class="require-star">*</span></label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text"><i
                                                    class="fas fab fa-whatsapp"></i></span></div>
                                        <input type="number" class="form-control required " value=""
                                            id="whatsapp" name="whatsapp" maxlength="10">
                                    </div>
                                    <small class="form-text text-muted text-help"></small>
                                    <span class="invalid-feedback"></span>
                                </div>
                            </div>
                            <div class="col-sm-6 div-address">
                                <div class="form-group mb-3">
                                    <label class="form-label" for="address">Address<span
                                            class="require-star">*</span></label>
                                    <textarea class="form-control required" id="address" name="address"
                                        rows="3" maxlength="300"></textarea>
                                    <small class="form-text text-muted text-help"></small>
                                    <span class="invalid-feedback"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="form-group mb-3">
                                    <label class="form-label" for="country_id">Country<span
                                            class="require-star">*</span></label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text"><i
                                                    class="fas fa-globe-asia"></i></span></div>
                                        <select type="select" name="country_id" id="country_id"
                                            class="form-control aiz-selectpicker required "
                                            data-live-search="true" -data-width="auto">
                                            <option style="display:none" value="">-- Select --</option>
                                            
                                        </select>
                                    </div>
                                    <small class="form-text text-muted text-help"></small>
                                    <span class="invalid-feedback"></span>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group mb-3">
                                    <label class="form-label" for="state_id">State<span
                                            class="require-star">*</span></label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text"><i
                                                    class="fas fa-map-marker-alt"></i></span></div>
                                        <select type="select" name="state_id" id="state_id"
                                            class="form-control aiz-selectpicker required "
                                            data-live-search="true" -data-width="auto">
                                            <option style="display:none" value="">-- Select --</option>
                                            <option selected value="3">Tamilnadu</option>
                                        
                                            <option value="1">Others</option>
                                        </select>
                                    </div>
                                    <small class="form-text text-muted text-help"></small>
                                    <span class="invalid-feedback"></span>
                                </div>
                            </div>
                            <div class="col-sm-4 div-country-others">
                                <div class="form-group mb-3">
                                    <label class="form-label" for="country_others">Country Name<span
                                            class="require-star">*</span></label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text"><i
                                                    class="fas fa-map-marker-alt"></i></span></div>
                                        <input type="text" class="form-control required " value=""
                                            id="country_others" name="country_others" maxlength="255">
                                    </div>
                                    <small class="form-text text-muted text-help"></small>
                                    <span class="invalid-feedback"></span>
                                </div>
                            </div>
                            <div class="col-sm-4 div-state-others">
                                <div class="form-group mb-3">
                                    <label class="form-label" for="state_others">State Name<span
                                            class="require-star">*</span></label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text"><i
                                                    class="fas fa-map-marker-alt"></i></span></div>
                                        <input type="text" class="form-control required " value=""
                                            id="state_others" name="state_others" maxlength="255">
                                    </div>
                                    <small class="form-text text-muted text-help"></small>
                                    <span class="invalid-feedback"></span>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group mb-3">
                                    <label class="form-label" for="district_id">District<span
                                            class="require-star">*</span></label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text"><i
                                                    class="fas fa-map-marker-alt"></i></span></div>
                                        <select type="select" name="district_id" id="district_id"
                                            class="form-control aiz-selectpicker required "
                                            data-live-search="true" -data-width="auto">
                                            <option style="display:none" value="">-- Select --</option>
                                        
                                        </select>
                                    </div>
                                    <small class="form-text text-muted text-help"></small>
                                    <span class="invalid-feedback"></span>
                                </div>
                            </div>
                            <div class="col-sm-4 div-district-others">
                                <div class="form-group mb-3">
                                    <label class="form-label" for="district_others">District Name<span
                                            class="require-star">*</span></label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text"><i
                                                    class="fas fa-map-marker-alt"></i></span></div>
                                        <input type="text" class="form-control required " value=""
                                            id="district_others" name="district_others" maxlength="255">
                                    </div>
                                    <small class="form-text text-muted text-help"></small>
                                    <span class="invalid-feedback"></span>
                                </div>
                            </div>
                        </div>

                        <h4 class="section-title">Family Details</h4>
                        <div class="row">
                            <div class="col-sm-3">
                                <div class="form-group mb-3">
                                    <label class="form-label" for="father_name">Father Name<span
                                            class="require-star">*</span></label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text"><i
                                                    class="fas fa-user"></i></span></div>
                                        <input type="text" class="form-control required " value=""
                                            id="father_name" name="father_name" maxlength="255">
                                    </div>
                                    <small class="form-text text-muted text-help"></small>
                                    <span class="invalid-feedback"></span>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group mb-3">
                                    <label class="form-label" for="father_status_id">Father Status<span
                                            class="require-star">*</span></label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text"><i
                                                    class="fas fa-caret-down"></i></span></div>
                                        <select type="select" name="father_status_id" id="father_status_id"
                                            class="form-control aiz-selectpicker required "
                                            data-live-search="true" -data-width="auto">
                                            <option style="display:none" value="">-- Select --</option>
                                            <option value="1">Alive</option>
                                            <option value="2">Late</option>
                                            <option value="999">Don't Know</option>
                                        </select>
                                    </div>
                                    <small class="form-text text-muted text-help"></small>
                                    <span class="invalid-feedback"></span>
                                </div>
                            </div>
                            <div class="col-sm-3 div-father-occu">
                                <div class="form-group mb-3">
                                    <label class="form-label" for="father_occupation">Father Occupation<span
                                            class="require-star">*</span></label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text"><i
                                                    class="fas fa-keyboard"></i></span></div>
                                        <input type="text" class="form-control required " value=""
                                            id="father_occupation" name="father_occupation" maxlength="255">
                                    </div>
                                    <small class="form-text text-muted text-help"></small>
                                    <span class="invalid-feedback"></span>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group mb-3">
                                    <label class="form-label" for="mother_name">Mother Name<span
                                            class="require-star">*</span></label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text"><i
                                                    class="fas fa-user"></i></span></div>
                                        <input type="text" class="form-control required " value=""
                                            id="mother_name" name="mother_name" maxlength="255">
                                    </div>
                                    <small class="form-text text-muted text-help"></small>
                                    <span class="invalid-feedback"></span>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group mb-3">
                                    <label class="form-label" for="mother_status_id">Mother Status<span
                                            class="require-star">*</span></label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text"><i
                                                    class="fas fa-caret-down"></i></span></div>
                                        <select type="select" name="mother_status_id" id="mother_status_id"
                                            class="form-control aiz-selectpicker required "
                                            data-live-search="true" -data-width="auto">
                                            <option style="display:none" value="">-- Select --</option>
                                            <option value="1">Alive</option>
                                            <option value="2">Late</option>
                                            <option value="999">Don't Know</option>
                                        </select>
                                    </div>
                                    <small class="form-text text-muted text-help"></small>
                                    <span class="invalid-feedback"></span>
                                </div>
                            </div>
                            <div class="col-sm-3 div-mother-occu">
                                <div class="form-group mb-3">
                                    <label class="form-label" for="mother_occupation">Mother Occupation<span
                                            class="require-star">*</span></label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text"><i
                                                    class="fas fa-keyboard"></i></span></div>
                                        <input type="text" class="form-control required " value=""
                                            id="mother_occupation" name="mother_occupation" maxlength="255">
                                    </div>
                                    <small class="form-text text-muted text-help"></small>
                                    <span class="invalid-feedback"></span>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group mb-3">
                                    <label class="form-label" for="social_type_id">Social Type<span
                                            class="require-star">*</span></label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text"><i
                                                    class="fas fa-caret-down"></i></span></div>
                                        <select type="select" name="social_type_id" id="social_type_id"
                                            class="form-control aiz-selectpicker required "
                                            data-live-search="true" -data-width="auto">
                                            <option style="display:none" value="">-- Select --</option>
                                            <option value="1">Lower Middle Class</option>
                                            <option value="2">Middle</option>
                                            <option value="3">V.I.P.</option>
                                            <option value="4">V.V.I.P.</option>
                                            <option value="5">Royal</option>
                                            <option value="999">Don't Know</option>
                                        </select>
                                    </div>
                                    <small class="form-text text-muted text-help"></small>
                                    <span class="invalid-feedback"></span>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group mb-3">
                                    <label class="form-label" for="native">Native<span
                                            class="require-star">*</span></label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text"><i
                                                    class="fas fa-keyboard"></i></span></div>
                                        <input type="text" class="form-control required " value=""
                                            id="native" name="native" maxlength="255">
                                    </div>
                                    <small class="form-text text-muted text-help"></small>
                                    <span class="invalid-feedback"></span>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group mb-3">
                                    <label class="form-label" for="siblings">Siblings<span
                                            class="require-star">*</span></label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text"><i
                                                    class="fas fa-keyboard"></i></span></div>
                                        <input type="text" class="form-control required " value=""
                                            id="siblings" name="siblings" maxlength="255">
                                    </div>
                                    <small class="form-text text-muted text-help"></small>
                                    <span class="invalid-feedback"></span>
                                </div>
                            </div>
                        </div>

                        <h4 class="section-title">Assets and Pavun Details</h4>
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="form-group mb-3">
                                    <label class="form-label" for="asset_value_id">Assets Value<span
                                            class="require-star">*</span></label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text"><i
                                                    class="fas fa-caret-down"></i></span></div>
                                        <select type="select" name="asset_value_id" id="asset_value_id"
                                            class="form-control aiz-selectpicker required "
                                            data-live-search="true" -data-width="auto">
                                            <option style="display:none" value="">-- Select --</option>
                                            <option value="1">Below 50 lakhs</option>
                                         
                                        </select>
                                    </div>
                                    <small class="form-text text-muted text-help"></small>
                                    <span class="invalid-feedback"></span>
                                </div>
                            </div>
                            <div class="col-sm">
                                <div class="form-group mb-3">
                                    <label class="form-label" for="asset_details">Assets Details (Land House
                                        Rent)<span class="require-star">*</span></label>
                                    <textarea class="form-control required" id="asset_details"
                                        name="asset_details" rows="3" maxlength="300"></textarea>
                                    <small class="form-text text-muted text-help"></small>
                                    <span class="invalid-feedback"></span>
                                </div>
                            </div>
                            <div class="col-sm-4 div-seimurai ">
                                <div class="form-group mb-3">
                                    <label class="form-label" for="seimurai">Seimurai (Gold, Car
                                        Details)<span class="require-star">*</span></label>
                                    <textarea class="form-control required" id="seimurai" name="seimurai"
                                        rows="3" maxlength="300"></textarea>
                                    <small class="form-text text-muted text-help"></small>
                                    <span class="invalid-feedback"></span>
                                </div>
                            </div>
                        </div>

                        <h4 class="section-title div-astro">Astro Details</h4>
                       
                        <div class="form-row">
                            <div class="col-sm-3 div-astro">
                                <div class="form-group mb-3">
                                    <label class="form-label" for="rasi_nakshatra_id">Rasi - Nakshatra<span
                                            class="require-star">*</span></label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text"><i
                                                    class="fas fa-caret-down"></i></span></div>
                                        <select type="select" name="rasi_nakshatra_id" id="rasi_nakshatra_id"
                                            class="form-control aiz-selectpicker required "
                                            data-live-search="true" -data-width="auto">
                                            <option style="display:none" value="">-- Select --</option>
                                            <option value="1">Aries-Ashwini</option>
                                     
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
                                        <div class="input-group-prepend"><span class="input-group-text"><i
                                                    class="fas fa-caret-down"></i></span></div>
                                        <select type="select" name="nakshatra_patham_id" id="nakshatra_patham_id"
                                            class="form-control aiz-selectpicker required "
                                            data-live-search="true" -data-width="auto">
                                            <option style="display:none" value="">-- Select --</option>
                                            <option value="1">Patham 1</option>
                                        
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
                                        <div class="input-group-prepend"><span class="input-group-text"><i
                                                    class="fas fa-caret-down"></i></span></div>
                                        <select type="select" name="lagnam_id" id="lagnam_id"
                                            class="form-control aiz-selectpicker " data-live-search="true"
                                            -data-width="auto">
                                            <option style="display:none" value="">-- Select --</option>
                                            <option value="1">மேஷம் (Aries)</option>
                                            <option value="2">ரிஷபம் (Taurus)</option>
                                         
                                        </select>
                                    </div>
                                    <small class="form-text text-muted text-help"></small>
                                    <span class="invalid-feedback"></span>
                                </div>
                            </div>
                            <div class="col-sm-3 div-astro">
                                <div class="form-group mb-3">
                                    <label class="form-label" for="jathagam_id">Jathagam<span
                                            class="require-star">*</span></label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text"><i
                                                    class="fas fa-caret-down"></i></span></div>
                                        <select type="select" name="jathagam_id" id="jathagam_id"
                                            class="form-control aiz-selectpicker required "
                                            data-live-search="true" -data-width="auto">
                                            <option style="display:none" value="">-- Select --</option>
                                            <option value="1">No Dhosam</option>
                                            <option value="2">Sevvai Jathagam</option>
                                            <option value="3">Parigara Sevvai Jathagam</option>
                                            <option value="4">Raagu Kethu Jathagam</option>
                                            <option value="5">Raagu Kethu, Sevvai</option>
                                            <option value="99">No Horoscope / Do not view horoscope</option>
                                            <option value="999">Don't Know</option>
                                        </select>
                                    </div>
                                    <small class="form-text text-muted text-help"></small>
                                    <span class="invalid-feedback"></span>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-sm-3">
                                <div class="form-row">
                                    <div class="col-12">
                                        <p class="mb-0 form-label" style="margin-bottom: 8px !important;">
                                            Date of Birth <span class="require-star">*</span></p>
                                    </div>
                                    <div class="col-4">
                                        <div class="form-group mb-3">
                                            <div class="input-group" style="width: 88px;">
                                                <select type="select" name="dob_date" id="dob_date"
                                                    class="form-control aiz-selectpicker required"
                                                    data-live-search="true" -data-width="auto"
                                                    -data-size="5">
                                                    <option value="">Date</option>
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
                                    <div class="col-4">
                                        <div class="form-group mb-3">
                                            <div class="input-group" style="width: 88px;">
                                                <select type="select" name="dob_month" id="dob_month"
                                                    class="form-control aiz-selectpicker required"
                                                    data-live-search="true" -data-width="auto"
                                                    -data-size="5">
                                                    <option value="">Month</option>
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
                                            <div class="input-group" style="width: 88px;">
                                                <select type="select" name="dob_year" id="dob_year"
                                                    class="form-control aiz-selectpicker required"
                                                    data-live-search="true" -data-width="auto"
                                                    -data-size="5">
                                                    <option value="">Year</option>
                                                    <option value="2006">2006</option>
                                                    <option value="2005">2005</option>
                                                    <option value="2004">2004</option>
                                                    <option value="2003">2003</option>
                                                    <option value="2002">2002</option>
                                                    <option value="2001">2001</option>
                                                    <option value="2000">2000</option>
                                                    <option value="1999">1999</option>
                                                    <option value="1998">1998</option>
                                                    <option value="1997">1997</option>
                                                    <option value="1996">1996</option>
                                                    <option value="1995">1995</option>
                                                    <option value="1994">1994</option>
                                                    <option value="1993">1993</option>
                                                    <option value="1992">1992</option>
                                                    <option value="1991">1991</option>
                                                    <option value="1990">1990</option>
                                                    <option value="1989">1989</option>
                                                    <option value="1988">1988</option>
                                                    <option value="1987">1987</option>
                                                    <option value="1986">1986</option>
                                                    <option value="1985">1985</option>
                                                    <option value="1984">1984</option>
                                                    <option value="1983">1983</option>
                                                    <option value="1982">1982</option>
                                                    <option value="1981">1981</option>
                                                    <option value="1980">1980</option>
                                                    <option value="1979">1979</option>
                                                    <option value="1978">1978</option>
                                                    <option value="1977">1977</option>
                                                    <option value="1976">1976</option>
                                                    <option value="1975">1975</option>
                                                    <option value="1974">1974</option>
                                                    <option value="1973">1973</option>
                                                    <option value="1972">1972</option>
                                                    <option value="1971">1971</option>
                                                    <option value="1970">1970</option>
                                                    <option value="1969">1969</option>
                                                    <option value="1968">1968</option>
                                                    <option value="1967">1967</option>
                                                    <option value="1966">1966</option>
                                                    <option value="1965">1965</option>
                                                    <option value="1964">1964</option>
                                                </select>
                                            </div>
                                            <small class="form-text text-muted text-help"></small>
                                            <span class="invalid-feedback"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-row">
                                    <div class="col-12">
                                        <p class="mb-0 form-label" style="margin-bottom: 8px !important;">
                                            Time of Birth <span class="require-star">*</span></p>
                                    </div>
                                    <div class="col-4">
                                        <div class="form-group mb-3">
                                            <div class="input-group" style="width: 88px;">
                                                <select type="select" name="tob_hour" id="tob_hour"
                                                    class="form-control aiz-selectpicker required"
                                                    data-live-search="true" -data-width="auto"
                                                    -data-size="5">
                                                    <option value="">Hour</option>
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
                                            <div class="input-group" style="width: 88px;">
                                                <select type="select" name="tob_min" id="tob_min"
                                                    class="form-control aiz-selectpicker required"
                                                    data-live-search="true" -data-width="auto"
                                                    -data-size="5">
                                                    <option value="">Min</option>
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
                                                    <option value="32">32</option>
                                                    <option value="33">33</option>
                                                    <option value="34">34</option>
                                                    <option value="35">35</option>
                                                    <option value="36">36</option>
                                                    <option value="37">37</option>
                                                    <option value="38">38</option>
                                                    <option value="39">39</option>
                                                    <option value="40">40</option>
                                                    <option value="41">41</option>
                                                    <option value="42">42</option>
                                                    <option value="43">43</option>
                                                    <option value="44">44</option>
                                                    <option value="45">45</option>
                                                    <option value="46">46</option>
                                                    <option value="47">47</option>
                                                    <option value="48">48</option>
                                                    <option value="49">49</option>
                                                    <option value="50">50</option>
                                                    <option value="51">51</option>
                                                    <option value="52">52</option>
                                                    <option value="53">53</option>
                                                    <option value="54">54</option>
                                                    <option value="55">55</option>
                                                    <option value="56">56</option>
                                                    <option value="57">57</option>
                                                    <option value="58">58</option>
                                                    <option value="59">59</option>
                                                    <option value="60">60</option>
                                                </select>
                                            </div>
                                            <small class="form-text text-muted text-help"></small>
                                            <span class="invalid-feedback"></span>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="form-group mb-3">
                                            <div class="input-group" style="width: 88px;">
                                                <select type="select" name="tob_m" id="tob_m"
                                                    class="form-control aiz-selectpicker required"
                                                    data-live-search="true" -data-width="auto"
                                                    -data-size="5">
                                                    <option value="">Select</option>
                                                    <option value="A.M.">A.M.</option>
                                                    <option value="P.M.">P.M.</option>
                                                </select>
                                            </div>
                                            <small class="form-text text-muted text-help"></small>
                                            <span class="invalid-feedback"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3 div-astro">
                                <div class="form-group mb-3">
                                    <label class="form-label" for="place_of_birth">Place of Birth<span
                                            class="require-star">*</span></label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text"><i
                                                    class="fas fa-map-marker-alt"></i></span></div>
                                        <input type="text" class="form-control required " value=""
                                            id="place_of_birth" name="place_of_birth" maxlength="255">
                                    </div>
                                    <small class="form-text text-muted text-help"></small>
                                    <span class="invalid-feedback"></span>
                                </div>
                            </div>
                            <div class="col-sm-3 div-astro">
                                <div class="form-group mb-3">
                                    <label class="form-label" for="dasa_remaining">Birth Dasa</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text"><i
                                                    class="fas fa-caret-down"></i></span></div>
                                        <select type="select" name="dasa_remaining" id="dasa_remaining"
                                            class="form-control aiz-selectpicker " data-live-search="true"
                                            -data-width="auto">
                                            <option style="display:none" value="">-- Select --</option>
                                            <option value="2">சூரியன்/Sun</option>
                                            <option value="3">சந்திரன்/Moon</option>
                                            <option value="4">செவ்வாய்/Mars</option>
                                            <option value="5">ராகு/Raagu</option>
                                            <option value="6">குரு/Jupiter</option>
                                            <option value="7">சனி/Saturn</option>
                                            <option value="8">புதன்/Mercury</option>
                                            <option value="9">கேது/Kethu</option>
                                            <option value="10">சுக்கிரன்/Venus</option>
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
                                            <div class="input-group" style="width: 88px;">
                                                <select type="select" name="birth_dasa_remaining_year" id="birth_dasa_remaining_year"
                                                    class="form-control aiz-selectpicker"
                                                    data-live-search="true" -data-width="auto"
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
                                            <div class="input-group" style="width: 88px;">
                                                <select type="select" name="birth_dasa_remaining_month" id="birth_dasa_remaining_month"
                                                    class="form-control aiz-selectpicker"
                                                    data-live-search="true" -data-width="auto"
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
                                            <div class="input-group" style="width: 88px;">
                                                <select type="select" name="birth_dasa_remaining_day" id="birth_dasa_remaining_day"
                                                    class="form-control aiz-selectpicker"
                                                    data-live-search="true" -data-width="auto"
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


                   

                        <h4 class="section-title">Expectation</h4>
                        <div class="form-row">
                            <div class="col-sm-4">
                                <div class="form-group mb-3">
                                    <label class="form-label" for="exp_jathagam">Jathagam<span
                                            class="require-star">*</span></label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text"><i
                                                    class="fas fa-caret-down"></i></span></div>
                                        <select type="select" name="exp_jathagam[]" id="exp_jathagam"
                                            class="form-control aiz-selectpicker required " multiple ""
                                            data-live-search="true" -data-width="auto">
                                            <option style="display:none" value="">-- Select --</option>
                                            <option value="1">No Dhosam</option>
                                            <option value="2">Sevvai Jathagam</option>
                                            <option value="3">Parigara Sevvai Jathagam</option>
                                            <option value="4">Raagu Kethu Jathagam</option>
                                            <option value="5">Raagu Kethu, Sevvai</option>
                                            <option value="6">No Jathagam Match</option>
                                            <option value="7">Sevvai Jathagam Match</option>
                                            <option value="8">Raagu Kethu Jathagam Match</option>
                                            <option value="9">Raagu Kethu, Sevvai Match</option>
                                            <option value="99">No Horoscope / Do not view horoscope</option>
                                            <option value="999">Don't Know</option>
                                        </select>
                                    </div>
                                    <small class="form-text text-muted text-help"></small>
                                    <span class="invalid-feedback"></span>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group mb-3">
                                    <label class="form-label" for="exp_maritalstatus">Marital Status<span
                                            class="require-star">*</span></label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text"><i
                                                    class="fas fa-caret-down"></i></span></div>
                                        <select type="select" name="exp_maritalstatus[]"
                                            id="exp_maritalstatus"
                                            class="form-control aiz-selectpicker required " multiple ""
                                            data-live-search="true" -data-width="auto">
                                            <option style="display:none" value="">-- Select --</option>
                                            <option value="U">First Marriage</option>
                                            <option value="R">Remarriage</option>
                                            <option value="FO">First Marriage Okay</option>
                                            <option value="SO">Remarriage Okay</option>
                                        </select>
                                    </div>
                                    <small class="form-text text-muted text-help"></small>
                                    <span class="invalid-feedback"></span>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group mb-3">
                                    <label class="form-label" for="exp_work_place">Work Place<span
                                            class="require-star">*</span></label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text"><i
                                                    class="fas fa-caret-down"></i></span></div>
                                        <select type="select" name="exp_work_place[]" id="exp_work_place"
                                            class="form-control aiz-selectpicker required " multiple ""
                                            data-live-search="true" -data-width="auto">
                                            <option style="display:none" value="">-- Select --</option>
                                            <option value="1">Tamil Nadu</option>
                                            <option value="2">Other State</option>
                                            <option value="3">Other Country</option>
                                            <option value="4">Tamil Nadu Okay</option>
                                            <option value="5">Other State Okay</option>
                                            <option value="6">Other Country Okay</option>
                                            <option value="999">Don't Know</option>
                                        </select>
                                    </div>
                                    <small class="form-text text-muted text-help"></small>
                                    <span class="invalid-feedback"></span>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-sm-6">
                                <div class="form-group mb-3">
                                    <label class="form-label" for="exp_nakshatra">Matching Nakshatras<span
                                            class="require-star">*</span></label>
                                    <textarea class="form-control required" id="exp_nakshatra"
                                        name="exp_nakshatra" rows="3" maxlength="300"></textarea>
                                    <small class="form-text text-muted text-help"></small>
                                    <span class="invalid-feedback"></span>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group mb-3">
                                    <label class="form-label" for="expectation">Expectation<span
                                            class="require-star">*</span></label>
                                    <textarea class="form-control required" id="expectation"
                                        name="expectation" rows="3" maxlength="300"></textarea>
                                    <small class="form-text text-muted text-help"></small>
                                    <span class="invalid-feedback"></span>
                                </div>
                            </div>
                        </div>

                        <div class="mt-3 text-center">
                            <label class="aiz-checkbox">
                                <input type="checkbox" name="tandc" required checked disabled>
                                <span class="opacity-60">By signing up you agree to our
                                    <a href="/terms-conditions" target="_blank">Terms and Conditions.</a>
                                </span>
                                <span class="aiz-square-check"></span>
                            </label>
                        </div>

                        <div class="text-center mb-3">
                            <input type="hidden" name="otp" id="otp">
                            <button type="button" onclick="submitForm()" class="btn btn-primary">Register <i
                                    class="fas fa-check-square"></i></button>
                        </div>

                        <div class="text-center">
                            <p class="text-muted mb-0">Already have an account?</p>
                            <a href="https://ganeshkongumatrimony.com/login">Login to your account</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<script>
    function submitForm() {
  var formData = $("#registration_form").serialize(); // Serialize the form data
  
  $.ajax({
    type: "POST",
    url: "{{ route('user.profile_store') }}", // Replace with your server endpoint
    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
    data: formData,
    success: function(response) {
        if (response.success) {
                $("#myForm")[0].reset(); // Reset the form
                $("#successMessage").show(); // Show success message
                clearErrors(); // Clear any previous error messages
            } else {
                handleErrors(response.errors); // Display validation errors
            }      // Handle the server response as needed
    },
    error: function(error) {
        if (response.success) {
                $("#myForm")[0].reset(); // Reset the form
                $("#successMessage").show(); // Show success message
                clearErrors(); // Clear any previous error messages
            } else {
                handleErrors(response.errors); // Display validation errors
            }
    }
  });
}
function handleErrors(errors) {
    clearErrors();

    $.each(errors, function (key, value) {
        $("#" + key).addClass("is-invalid"); // Add 'is-invalid' class to the input
        $("#" + key).removeClass('is-valid').addClass('is-invalid');
		$("#" + key).parents('.input-group').removeClass('is-valid').addClass('is-invalid');
        $("#" + key).parents('.form-control').removeClass('is-valid').addClass('is-invalid');

        
        $("#" + key).parents('.form-group').find('.invalid-feedback').text(value[0]);

       // $("#" + key).after('<div class="invalid-feedback">' + value[0] + '</div>'); // Display the error message
    });
}

function clearErrors() {
    $(".is-invalid").removeClass("is-invalid");
   // $(".invalid-feedback").remove();
}
</script>
@endsection
