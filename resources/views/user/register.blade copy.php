
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
                         <h4 class="section-title">{{ __("fields.photo_file") }}</h4>
                        <div class="form-row">
                            <div class="col-md-6 div-photo text-center">
                                <div class="form-group mx-auto">
                                    <label class="form-label w-100" for="photo">Upload your Photo<span
                                            class="require-star">*</span></label>
                                    <div class="input-group fileinput fileinput-new text-center"
                                        data-provides="fileinput">
                                        <div class="fileinput-new thumbnail img-raised">
                                            <img src="https://ganeshkongumatrimony.com/uploads/profile_images/1.png"
                                                alt="photo">
                                        </div>
                                        <div
                                            class="fileinput-preview fileinput-exists thumbnail img-raised">
                                        </div>
                                        <div>
                                            <span
                                                class="btn btn-raised btn-round btn-primary btn-file btn-sm">
                                                <span class="fileinput-new"
                                                    onclick="$('#photo').trigger('click');">Upload your
                                                    Photo</span>
                                                <span class="fileinput-exists"
                                                    onclick="$('#photo').trigger('click');">Change</span>
                                                <input type="file" class="required" name="photo" id="photo"
                                                    accept=".jpg,.jpeg,.png" />
                                            </span>
                                            <a href="#pablo"
                                                class="btn btn-danger btn-round btn-sm fileinput-exists"
                                                data-dismiss="fileinput"><i class="fas fa-times"></i>
                                                Remove</a>
                                        </div>
                                    </div>
                                    <h5 class="info-text mb-0" id="photo_help"></h5>
                                    <small class="form-text text-muted">Only jpeg, jpg, png files less than
                                        <span class="text-bold">2 MB</span> are allowed.</small>
                                    <span class="invalid-feedback"></span>
                                </div>
                            </div>
                            <div class="col-md-6 text-center">
                                <div class="form-group mx-auto">
                                    <label class="form-label w-100" for="jathagam_file">Upload your
                                        Horoscope<span class="require-star">*</span></label>
                                    <div class="input-group fileinput fileinput-new text-center"
                                        data-provides="fileinput">
                                        <div class="fileinput-new thumbnail img-raised">
                                            <img src="https://ganeshkongumatrimony.com/uploads/jathagam_images/horoscope.jpg"
                                                alt="jathagam_file">
                                        </div>
                                        <div
                                            class="fileinput-preview fileinput-exists thumbnail img-raised">
                                        </div>
                                        <div>
                                            <span
                                                class="btn btn-raised btn-round btn-primary btn-file btn-sm">
                                                <span class="fileinput-new"
                                                    onclick="$('#jathagam_file').trigger('click');">Upload
                                                    your Horoscope</span>
                                                <span class="fileinput-exists"
                                                    onclick="$('#jathagam_file').trigger('click');">Change</span>
                                                <input type="file" class="required" name="jathagam_file"
                                                    id="jathagam_file" accept=".jpg,.jpeg,.png" />
                                            </span>
                                            <a href="#pablo"
                                                class="btn btn-danger btn-round btn-sm fileinput-exists"
                                                data-dismiss="fileinput"><i class="fas fa-times"></i>
                                                Remove</a>
                                        </div>
                                    </div>
                                    <h5 class="info-text mb-0" id="jathagam_file_help"></h5>
                                    <small class="form-text text-muted">Only jpeg, jpg, png files less than
                                        <span class="text-bold">2 MB</span> are allowed.</small>
                                    <span class="invalid-feedback"></span>
                                </div>
                            </div>
                        </div>

                        <h4 class="section-title">Basic Information</h4>
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="form-group mb-3">
                                    <label class="form-label" for="name">Name<span
                                            class="require-star">*</span></label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text"><i
                                                    class="fas fa-user"></i></span></div>
                                        <input type="text" class="form-control required " value="" id="name"
                                            name="name" maxlength="255">
                                    </div>
                                    <small class="form-text text-muted text-help"><span
                                            style="color:red">முடிந்தவரை தமிழில் பதிவு
                                            செய்யவும்.</span></small>
                                    <span class="invalid-feedback"></span>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group mb-3">
                                    <label class="form-label" for="email">Email<span
                                            class="require-star">*</span></label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text"><i
                                                    class="fas fa-envelope"></i></span></div>
                                        <input type="email" class="form-control required " value=""
                                            id="email" name="email" maxlength="255">
                                    </div>
                                    <small class="form-text text-muted text-help"></small>
                                    <span class="invalid-feedback"></span>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group mb-3">
                                    <label class="form-label" for="passwd">New Password<span
                                            class="require-star">*</span></label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text"><i
                                                    class="fas fa-key"></i></span></div>
                                        <input type="password" class="form-control required " value=""
                                            id="password" name="password" maxlength="100"><button
                                            id="toggle-pwd" type="button"><i
                                                class="fa fa-eye"></i></button><span class="">
                                    </div>
                                    <small class="form-text text-muted text-help">New Password for
                                        login.</small>
                                    <span class="invalid-feedback"></span>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group mb-3">
                                    <label class="form-label" for="gender_id">Gender<span
                                            class="require-star">*</span></label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text"><i
                                                    class="fas fa-caret-down"></i></span></div>
                                        <select type="select" name="gender_id" id="gender_id"
                                            class="form-control aiz-selectpicker required "
                                            data-live-search="true" -data-width="auto">
                                            <option style="display:none" value="">-- Select --</option>
                                            <option value="1">Male</option>
                                            <option value="2">Female</option>
                                        </select>
                                    </div>
                                    <small class="form-text text-muted text-help"></small>
                                    <span class="invalid-feedback"></span>
                                </div>
                            </div>
                            <div class="col-sm-4 div-marital_status_id">
                                <div class="form-group mb-3">
                                    <label class="form-label" for="marital_status_id">Marital Status<span
                                            class="require-star">*</span></label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text"><i
                                                    class="fas fa-caret-down"></i></span></div>
                                        <select type="select" name="marital_status_id" id="marital_status_id"
                                            class="form-control aiz-selectpicker required "
                                            data-live-search="true" -data-width="auto">
                                            <option style="display:none" value="">-- Select --</option>
                                            <option value="U">First Marriage</option>
                                            <option value="R">Remarriage</option>
                                        </select>
                                    </div>
                                    <small class="form-text text-muted text-help"></small>
                                    <span class="invalid-feedback"></span>
                                </div>
                            </div>
                            <div class="col-sm-4 div-marital-details hide">
                                <div class="form-group mb-3">
                                    <label class="form-label" for="marital_details">Marriage Details<span
                                            class="require-star">*</span></label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text"><i
                                                    class="fas fa-pen"></i></span></div>
                                        <input type="text" class="form-control required " value=""
                                            id="marital_details" name="marital_details" maxlength="255">
                                    </div>
                                    <small class="form-text text-muted text-help"></small>
                                    <span class="invalid-feedback"></span>
                                </div>
                            </div>
                            <div class="col-sm-4 div-marital-details hide">
                                <div class="form-group mb-3">
                                    <label class="form-label" for="children_details">Children Details<span
                                            class="require-star">*</span></label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text"><i
                                                    class="fas fa-pen"></i></span></div>
                                        <input type="text" class="form-control required " value=""
                                            id="children_details" name="children_details" maxlength="255">
                                    </div>
                                    <small class="form-text text-muted text-help"></small>
                                    <span class="invalid-feedback"></span>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group mb-3">
                                    <label class="form-label" for="registered_by_id">Registered By<span
                                            class="require-star">*</span></label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text"><i
                                                    class="fas fa-caret-down"></i></span></div>
                                        <select type="select" name="registered_by_id" id="registered_by_id"
                                            class="form-control aiz-selectpicker required "
                                            data-live-search="true" -data-width="auto">
                                            <option style="display:none" value="">-- Select --</option>
                                            <option selected value="1">Self</option>
                                            <option value="2">Parents</option>
                                            <option value="3">Family</option>
                                            <option value="4">Relative</option>
                                            <option value="5">Friends</option>
                                            <option value="6">Amaippalar</option>
                                            <option value="7">Admin</option>
                                        </select>
                                    </div>
                                    <small class="form-text text-muted text-help"></small>
                                    <span class="invalid-feedback"></span>
                                </div>
                            </div>
                        </div>

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
                                            <option value="N">Normal</option>
                                            <option value="Y">Physically Challenged</option>
                                        </select>
                                    </div>
                                    <small class="form-text text-muted text-help"></small>
                                    <span class="invalid-feedback"></span>
                                </div>
                            </div>
                            <div class="col-sm-3 div-splcategory-details hide">
                                <div class="form-group mb-3">
                                    <label class="form-label" for="special_category_details">Special Category
                                        Details<span class="require-star">*</span></label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text"><i
                                                    class="fas fa-pen"></i></span></div>
                                        <input type="text" class="form-control required " value=""
                                            id="special_category_details" name="special_category_details" maxlength="255">
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
                                            <option value="1">4ft 6in / 137 cms</option>
                                            <option value="2">4ft 7in / 139 cms</option>
                                            <option value="3">4ft 8in / 142 cms</option>
                                            <option value="4">4ft 9in / 144 cms</option>
                                            <option value="5">4ft 10in / 147 cms</option>
                                            <option value="6">4ft 11in / 149 cms</option>
                                            <option value="7">5ft / 152 cms</option>
                                            <option value="8">5ft 1in / 154 cms</option>
                                            <option value="9">5ft 2in / 157 cms</option>
                                            <option value="10">5ft 3in / 160 cms</option>
                                            <option value="11">5ft 4in / 162 cms</option>
                                            <option value="12">5ft 5in / 165 cms</option>
                                            <option value="13">5ft 6in / 167 cms</option>
                                            <option value="14">5ft 7in / 170 cms</option>
                                            <option value="15">5ft 8in / 172 cms</option>
                                            <option value="16">5ft 9in / 175 cms</option>
                                            <option value="17">5ft 10in / 177 cms</option>
                                            <option value="18">5ft 11in / 180 cms</option>
                                            <option value="19">6ft / 182 cms</option>
                                            <option value="20">6ft 1in / 185 cms</option>
                                            <option value="21">6ft 2in / 187 cms</option>
                                            <option value="22">6ft 3in / 190 cms</option>
                                            <option value="23">6ft 4in / 193 cms</option>
                                            <option value="24">6ft 5in / 195 cms</option>
                                            <option value="25">6ft 6in / 198 cms</option>
                                            <option value="26">6ft 7in / 200 cms</option>
                                            <option value="27">6ft 8in / 203 cms</option>
                                            <option value="28">6ft 9in / 205 cms</option>
                                            <option value="29">6ft 10in / 208 cms</option>
                                            <option value="30">6ft 11in / 210 cms</option>
                                            <option value="31">7ft / 213 cms</option>
                                            <option value="32">7ft 2in / 214 cms</option>
                                            <option value="999">Don't Know</option>
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
                                            <option value="1">35 Kg</option>
                                            <option value="2">36 Kg</option>
                                            <option value="3">37 Kg</option>
                                            <option value="4">38 Kg</option>
                                            <option value="5">39 Kg</option>
                                            <option value="6">40 Kg</option>
                                            <option value="7">41 Kg</option>
                                            <option value="8">42 Kg</option>
                                            <option value="9">43 Kg</option>
                                            <option value="10">44 Kg</option>
                                            <option value="11">45 Kg</option>
                                            <option value="12">46 Kg</option>
                                            <option value="13">47 Kg</option>
                                            <option value="14">48 Kg</option>
                                            <option value="15">49 Kg</option>
                                            <option value="16">50 Kg</option>
                                            <option value="17">51 Kg</option>
                                            <option value="18">52 Kg</option>
                                            <option value="19">53 Kg</option>
                                            <option value="20">54 Kg</option>
                                            <option value="21">55 Kg</option>
                                            <option value="22">56 Kg</option>
                                            <option value="23">57 Kg</option>
                                            <option value="24">58 Kg</option>
                                            <option value="25">59 Kg</option>
                                            <option value="26">60 Kg</option>
                                            <option value="27">61 Kg</option>
                                            <option value="28">62 Kg</option>
                                            <option value="29">63 Kg</option>
                                            <option value="30">64 Kg</option>
                                            <option value="31">65 Kg</option>
                                            <option value="32">66 Kg</option>
                                            <option value="33">67 Kg</option>
                                            <option value="34">68 Kg</option>
                                            <option value="35">69 Kg</option>
                                            <option value="36">70 Kg</option>
                                            <option value="37">71 Kg</option>
                                            <option value="38">72 Kg</option>
                                            <option value="39">73 Kg</option>
                                            <option value="40">74 Kg</option>
                                            <option value="41">75 Kg</option>
                                            <option value="42">76 Kg</option>
                                            <option value="43">77 Kg</option>
                                            <option value="44">78 Kg</option>
                                            <option value="45">79 Kg</option>
                                            <option value="46">80 Kg</option>
                                            <option value="47">81 Kg</option>
                                            <option value="48">82 Kg</option>
                                            <option value="49">83 Kg</option>
                                            <option value="50">84 Kg</option>
                                            <option value="51">85 Kg</option>
                                            <option value="52">86 Kg</option>
                                            <option value="53">87 Kg</option>
                                            <option value="54">88 Kg</option>
                                            <option value="55">89 Kg</option>
                                            <option value="56">90 Kg</option>
                                            <option value="57">91 Kg</option>
                                            <option value="58">92 Kg</option>
                                            <option value="59">93 Kg</option>
                                            <option value="60">94 Kg</option>
                                            <option value="61">95 Kg</option>
                                            <option value="62">96 Kg</option>
                                            <option value="63">97 Kg</option>
                                            <option value="64">98 Kg</option>
                                            <option value="65">99 Kg</option>
                                            <option value="66">100 Kg</option>
                                            <option value="67">101 Kg</option>
                                            <option value="68">102 Kg</option>
                                            <option value="69">103 Kg</option>
                                            <option value="70">104 Kg</option>
                                            <option value="71">105 Kg</option>
                                            <option value="72">106 Kg</option>
                                            <option value="73">107 Kg</option>
                                            <option value="74">108 Kg</option>
                                            <option value="75">109 Kg</option>
                                            <option value="76">110 Kg</option>
                                            <option value="77">111 Kg</option>
                                            <option value="78">112 Kg</option>
                                            <option value="79">113 Kg</option>
                                            <option value="80">114 Kg</option>
                                            <option value="81">115 Kg</option>
                                            <option value="82">116 Kg</option>
                                            <option value="83">117 Kg</option>
                                            <option value="84">118 Kg</option>
                                            <option value="85">119 Kg</option>
                                            <option value="86">120 Kg</option>
                                            <option value="87">121 Kg</option>
                                            <option value="88">122 Kg</option>
                                            <option value="89">123 Kg</option>
                                            <option value="90">124 Kg</option>
                                            <option value="91">125 Kg</option>
                                            <option value="92">126 Kg</option>
                                            <option value="93">127 Kg</option>
                                            <option value="94">128 Kg</option>
                                            <option value="95">129 Kg</option>
                                            <option value="96">130 Kg</option>
                                            <option value="97">131 Kg</option>
                                            <option value="98">132 Kg</option>
                                            <option value="99">133 Kg</option>
                                            <option value="100">134 Kg</option>
                                            <option value="101">135 Kg</option>
                                            <option value="102">136 Kg</option>
                                            <option value="103">137 Kg</option>
                                            <option value="104">138 Kg</option>
                                            <option value="105">139 Kg</option>
                                            <option value="106">140 Kg</option>
                                            <option value="107">141 Kg</option>
                                            <option value="108">142 Kg</option>
                                            <option value="109">143 Kg</option>
                                            <option value="110">144 Kg</option>
                                            <option value="111">145 Kg</option>
                                            <option value="112">146 Kg</option>
                                            <option value="113">147 Kg</option>
                                            <option value="114">148 Kg</option>
                                            <option value="115">149 Kg</option>
                                            <option value="116">150 Kg</option>
                                            <option value="117">151 Kg</option>
                                            <option value="999">Don't Know</option>
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
                                            <option value="1">Slim Body Type</option>
                                            <option value="2">Average Body Type</option>
                                            <option value="3">Slightly Obese Body Type</option>
                                            <option value="4">Obese Body Type</option>
                                            <option value="999">Don't Know</option>
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
                                            <option value="1">Very Fair</option>
                                            <option value="2">Fair</option>
                                            <option value="3">Wheatish Brown</option>
                                            <option value="4">Dark</option>
                                            <option value="999">Don't Know</option>
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
                                            <option value="A-">A-</option>
                                            <option value="A+">A+</option>
                                            <option value="A1-">A1-</option>
                                            <option value="A1+">A1+</option>
                                            <option value="A2-">A2-</option>
                                            <option value="0">A2+</option>
                                            <option value="B-">B-</option>
                                            <option value="B+">B+</option>
                                            <option value="A1B-">A1B-</option>
                                            <option value="A1B+">A1B+</option>
                                            <option value="A2B-">A2B-</option>
                                            <option value="A2B+">A2B+</option>
                                            <option value="AB-">AB-</option>
                                            <option value="AB+">AB+</option>
                                            <option value="O-">O-</option>
                                            <option value="O+">O+</option>
                                            <option value="999">Don't Know</option>
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
                                    <label class="form-label" for="sub_caste_id">Sub-Caste<span
                                            class="require-star">*</span></label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text"><i
                                                    class="fas fa-caret-down"></i></span></div>
                                        <select type="select" name="sub_caste_id" id="sub_caste_id"
                                            class="form-control aiz-selectpicker required "
                                            data-live-search="true" -data-width="auto">
                                            <option style="display:none" value="">-- Select --</option>
                                            <option value="2">Andhuvan Kulam</option>
                                            <option value="3">Alagan Kulam</option>
                                            <option value="4">Aada Kulam</option>
                                            <option value="5">Adhi Kulam</option>
                                            <option value="6">Aanthai Kulam</option>
                                            <option value="7">Ava Kulam</option>
                                            <option value="8">Aavin Kulam</option>
                                            <option value="9">Injan Kulam</option>
                                            <option value="10">Ennai Kulam</option>
                                            <option value="11">Olukka caste</option>
                                            <option value="12">Othaalan Kulam</option>
                                            <option value="13">Kanakkan Kulam</option>
                                            <option value="14">Kanavaalan Kulam</option>
                                            <option value="15">Kannandai Kulam</option>
                                            <option value="16">Kannan Kulam</option>
                                            <option value="17">Kalinji Kulam</option>
                                            <option value="18">Kaadai Kulam</option>
                                            <option value="19">Kaari Kulam</option>
                                            <option value="20">Keeran Kulam</option>
                                            <option value="21">Kuyilar Kulam</option>
                                            <option value="22">Kuzhiyar Kulam</option>
                                            <option value="23">Koorai Kulam</option>
                                            <option value="24">Govender Kulam</option>
                                            <option value="25">Sathanthai Kulam</option>
                                            <option value="26">Silamban Kulam</option>
                                            <option value="27">Senkannan Kulam</option>
                                            <option value="28">Sengunni Kulam</option>
                                            <option value="29">Semban Kulam</option>
                                            <option value="30">Sembuthan Kulam</option>
                                            <option value="31">Sellan Kulam</option>
                                            <option value="32">Sevvanthi Kulam</option>
                                            <option value="33">Sevvai Kulam</option>
                                            <option value="34">Sedan Kulam</option>
                                            <option value="35">Cheran Kulam</option>
                                            <option value="36">Cheralan Kulam</option>
                                            <option value="37">Chola Kulam</option>
                                            <option value="38">Dhanancheyan Kulam</option>
                                            <option value="39">Thalinji Kulam</option>
                                            <option value="40">Thooran Kulam</option>
                                            <option value="41">Devendran Kulam</option>
                                            <option value="42">Thodai Kulam</option>
                                            <option value="43">Neerunniyar Kulam</option>
                                            <option value="44">Pannai caste</option>
                                            <option value="45">Pathariyar Kulam</option>
                                            <option value="46">Padhuman Kulam</option>
                                            <option value="47">Panangadai Kulam</option>
                                            <option value="48">Panayan Kulam</option>
                                            <option value="49">Payiran Kulam</option>
                                            <option value="50">Pavala Kulam</option>
                                            <option value="51">Pandiyan Kulam</option>
                                            <option value="52">Piralanthai Kulam</option>
                                            <option value="53">Billan Kulam</option>
                                            <option value="54">Poosan Kulam</option>
                                            <option value="55">Poochandhai Kulam</option>
                                            <option value="56">Poonthan Kulam</option>
                                            <option value="57">Periya Kulam</option>
                                            <option value="58">Perungudi Kulam</option>
                                            <option value="59">Podian Kulam</option>
                                            <option value="60">Ponnar Kulam</option>
                                            <option value="61">Porul Thantha Kulam</option>
                                            <option value="62">Maniyan Kulam</option>
                                            <option value="63">Mayilar Kulam</option>
                                            <option value="64">Mada Kulam</option>
                                            <option value="65">Muthan Kulam</option>
                                            <option value="66">Mullai Kulam</option>
                                            <option value="67">Mulukkathaan Kulam</option>
                                            <option value="68">Moolan Kulam</option>
                                            <option value="69">Medhi Kulam</option>
                                            <option value="70">Vannakan Kulam</option>
                                            <option value="71">Willy Kulam</option>
                                            <option value="72">Vilayan Kulam</option>
                                            <option value="73">Venduvan Kulam</option>
                                            <option value="74">Vennai Kulam</option>
                                            <option value="75">Veliyan Kulam</option>
                                            <option value="76">Velamban Kulam</option>
                                            <option value="77">Vendan Kulam</option>
                                            <option value="78">Kalli Kulam</option>
                                            <option value="1">Others</option>
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
                            <div class="col-sm-3 div-education-others hide ">
                                <div class="form-group mb-3">
                                    <label class="form-label" for="education_others">Education Name<span
                                            class="require-star">*</span></label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text"><i
                                                    class="fas fa-pen"></i></span></div>
                                        <input type="text" class="form-control required " value=""
                                            id="education_others" name="education_others" maxlength="255">
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
                            <div class="col-sm-3 div-work-others hide">
                                <div class="form-group mb-3">
                                    <label class="form-label" for="work_others">Work Name<span
                                            class="require-star">*</span></label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text"><i
                                                    class="fas fa-pen"></i></span></div>
                                        <input type="text" class="form-control required " value=""
                                            id="work_others" name="work_others" maxlength="255">
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
                            <div class="col-sm-3 div-work-place hide">
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
                                            <option selected value="3">India</option>
                                            <option value="4">Afghanistan</option>
                                            <option value="5">Albania</option>
                                            <option value="6">Algeria</option>
                                            <option value="7">American Samoa</option>
                                            <option value="8">Andorra</option>
                                            <option value="9">Angola</option>
                                            <option value="10">Anguilla</option>
                                            <option value="11">Antartica</option>
                                            <option value="12">Antigua & Barbuda</option>
                                            <option value="13">Argentina</option>
                                            <option value="14">Armenia</option>
                                            <option value="15">Aruba</option>
                                            <option value="16">Australia</option>
                                            <option value="17">Austria</option>
                                            <option value="18">Azerbaijan</option>
                                            <option value="19">Bahamas</option>
                                            <option value="20">Bahrain</option>
                                            <option value="21">Bangladesh</option>
                                            <option value="22">Barbados</option>
                                            <option value="23">Belarus</option>
                                            <option value="24">Belgium</option>
                                            <option value="25">Belize</option>
                                            <option value="26">Benin</option>
                                            <option value="27">Bermuda</option>
                                            <option value="28">Bhutan</option>
                                            <option value="29">Bolivia</option>
                                            <option value="30">Bosnia & Herzegovina</option>
                                            <option value="31">Botswana</option>
                                            <option value="32">Bouvet Island</option>
                                            <option value="33">Br.Ind.Ocean Terr.</option>
                                            <option value="34">Brazil</option>
                                            <option value="35">Brunei</option>
                                            <option value="36">Bulgaria</option>
                                            <option value="37">Burkina Faso</option>
                                            <option value="38">Burundi</option>
                                            <option value="39">Cambodia</option>
                                            <option value="40">Cameroon</option>
                                            <option value="41">Canada</option>
                                            <option value="42">Cango</option>
                                            <option value="43">Cape Verde</option>
                                            <option value="44">Caymen Is.</option>
                                            <option value="45">Central African Rep.</option>
                                            <option value="46">Chad</option>
                                            <option value="47">Chile</option>
                                            <option value="48">China</option>
                                            <option value="49">Christmas Is.</option>
                                            <option value="50">Cocos Is.</option>
                                            <option value="51">Colombia</option>
                                            <option value="52">Comoros</option>
                                            <option value="53">Cook Is.</option>
                                            <option value="54">Costa Rica</option>
                                            <option value="55">Cote D'Ivoire</option>
                                            <option value="56">Croatia</option>
                                            <option value="57">Cuba</option>
                                            <option value="58">Cyprus</option>
                                            <option value="59">Czech Rep.</option>
                                            <option value="60">Denmark</option>
                                            <option value="61">Djibouti</option>
                                            <option value="62">Dominica</option>
                                            <option value="63">Dominican Rep.</option>
                                            <option value="64">East Timor</option>
                                            <option value="65">Ecuador</option>
                                            <option value="66">Egypt</option>
                                            <option value="67">El Salvador</option>
                                            <option value="68">Equatorial Guinea</option>
                                            <option value="69">Eritrea</option>
                                            <option value="70">Estonia</option>
                                            <option value="71">Ethiopia</option>
                                            <option value="72">Falkland Is.</option>
                                            <option value="73">Faroe Is.</option>
                                            <option value="74">Fiji Is.</option>
                                            <option value="75">Finland</option>
                                            <option value="76">France</option>
                                            <option value="77">French Guiana</option>
                                            <option value="78">French Polynesia</option>
                                            <option value="79">French Southern Terr.</option>
                                            <option value="80">Gabon</option>
                                            <option value="81">Gambia</option>
                                            <option value="82">Georgia</option>
                                            <option value="83">Germany</option>
                                            <option value="84">Ghana</option>
                                            <option value="85">Gibraltar</option>
                                            <option value="86">Greece</option>
                                            <option value="87">Greenland</option>
                                            <option value="88">Grenada</option>
                                            <option value="89">Guadeloupe</option>
                                            <option value="90">Guam</option>
                                            <option value="91">Guatemala</option>
                                            <option value="92">Guinea</option>
                                            <option value="93">Guinea-Bissau</option>
                                            <option value="94">Guyana</option>
                                            <option value="95">Haiti</option>
                                            <option value="96">Heard & McDonald Is.</option>
                                            <option value="97">Honduras</option>
                                            <option value="98">Hong Kong</option>
                                            <option value="99">Hungary</option>
                                            <option value="100">Iceland</option>
                                            <option value="101">Indonesia</option>
                                            <option value="102">Iran</option>
                                            <option value="103">Iraq</option>
                                            <option value="104">Ireland</option>
                                            <option value="105">Israel</option>
                                            <option value="106">Italy</option>
                                            <option value="107">Jamaica</option>
                                            <option value="108">Japan</option>
                                            <option value="109">Jordan</option>
                                            <option value="110">Kazakhstan</option>
                                            <option value="111">Kenya</option>
                                            <option value="112">Kirbati</option>
                                            <option value="113">Korea</option>
                                            <option value="114">Kuwait</option>
                                            <option value="115">Kyrgyzstan</option>
                                            <option value="116">Laos</option>
                                            <option value="117">Latvia</option>
                                            <option value="118">Lebanon</option>
                                            <option value="119">Lesotho</option>
                                            <option value="120">Liberia</option>
                                            <option value="121">Libya</option>
                                            <option value="122">Liechtenstein</option>
                                            <option value="123">Lithuania</option>
                                            <option value="124">Luxembourg</option>
                                            <option value="125">Macedonia</option>
                                            <option value="126">Madagascar</option>
                                            <option value="127">Malawi</option>
                                            <option value="128">Malaysia</option>
                                            <option value="129">Maldives</option>
                                            <option value="130">Mali</option>
                                            <option value="131">Malta</option>
                                            <option value="132">Manaco</option>
                                            <option value="133">Marshall Is.</option>
                                            <option value="134">Martinique</option>
                                            <option value="135">Mauritania</option>
                                            <option value="136">Mauritius</option>
                                            <option value="137">Mayotte</option>
                                            <option value="138">Mexico</option>
                                            <option value="139">Micronesia</option>
                                            <option value="140">Moldova</option>
                                            <option value="141">Mongolia</option>
                                            <option value="142">Montserrat</option>
                                            <option value="143">Morocco</option>
                                            <option value="144">Mozambique</option>
                                            <option value="145">Myanmar</option>
                                            <option value="146">Namibia</option>
                                            <option value="147">Nauru</option>
                                            <option value="148">Nepal</option>
                                            <option value="149">Netherlands</option>
                                            <option value="150">Netherlands Antilles</option>
                                            <option value="151">New Caledonia</option>
                                            <option value="152">New Zealand</option>
                                            <option value="153">Nicaragua</option>
                                            <option value="154">Niger</option>
                                            <option value="155">Nigeria</option>
                                            <option value="156">Niue</option>
                                            <option value="157">Norfolk Is.</option>
                                            <option value="158">North korea</option>
                                            <option value="159">Northern Mariana (U.S.Territor)</option>
                                            <option value="160">Northern Mariana Is.</option>
                                            <option value="161">Norfolk Is.</option>
                                            <option value="162">Norway</option>
                                            <option value="163">Oman</option>
                                            <option value="164">Pakistan</option>
                                            <option value="165">Palau</option>
                                            <option value="166">Panama</option>
                                            <option value="167">Papua New Guinea</option>
                                            <option value="168">Paraguay</option>
                                            <option value="169">Peru</option>
                                            <option value="170">Philippines</option>
                                            <option value="171">Pitcairn Is.</option>
                                            <option value="172">Poland</option>
                                            <option value="173">Portugal</option>
                                            <option value="174">Puerto Rico</option>
                                            <option value="175">Qatar</option>
                                            <option value="176">Romania</option>
                                            <option value="177">Russia</option>
                                            <option value="178">Rwanda</option>
                                            <option value="179">S.Georgia & S.S.Is.</option>
                                            <option value="180">Samoa</option>
                                            <option value="181">San Marino</option>
                                            <option value="182">Sao Tome & Principe</option>
                                            <option value="183">Saudi Arabia</option>
                                            <option value="184">Scyclegal</option>
                                            <option value="185">Seychelles</option>
                                            <option value="186">Sierra Leone</option>
                                            <option value="187">Singapore</option>
                                            <option value="188">Slovakia</option>
                                            <option value="189">Slovenia</option>
                                            <option value="190">Solomon Is.</option>
                                            <option value="191">Somalia</option>
                                            <option value="192">South Africa</option>
                                            <option value="193">South Korea</option>
                                            <option value="194">Spain</option>
                                            <option value="195">Sri Lanka</option>
                                            <option value="196">St.Helena</option>
                                            <option value="197">St.Kitts & Nevis</option>
                                            <option value="198">St.Lucia</option>
                                            <option value="199">St.Pierre & Miquelon</option>
                                            <option value="200">St.Vincent & Grenadines</option>
                                            <option value="201">Sudan</option>
                                            <option value="202">Suriname</option>
                                            <option value="203">Svalbard & J.M.Is.</option>
                                            <option value="204">Swaziland</option>
                                            <option value="205">Sweden</option>
                                            <option value="206">Switzerland</option>
                                            <option value="207">Syria</option>
                                            <option value="208">Taiwan</option>
                                            <option value="209">Tajikistan</option>
                                            <option value="210">Tanzania</option>
                                            <option value="211">Thailand</option>
                                            <option value="212">Timor-Leste</option>
                                            <option value="213">Togo</option>
                                            <option value="214">Tokelau</option>
                                            <option value="215">Tonga</option>
                                            <option value="216">Trinidad & Tobago</option>
                                            <option value="217">Tunisia</option>
                                            <option value="218">Turkey</option>
                                            <option value="219">Turkmenistan</option>
                                            <option value="220">Turks & Caicos Is.</option>
                                            <option value="221">Tuvalu</option>
                                            <option value="222">U.S.Minor Outlying Is.</option>
                                            <option value="223">Uganda</option>
                                            <option value="224">Ukraine</option>
                                            <option value="225">United Arab Emirates</option>
                                            <option value="226">United Kindom</option>
                                            <option value="227">United States</option>
                                            <option value="228">Uruguay</option>
                                            <option value="229">Uzbekistan</option>
                                            <option value="230">Vanuatu</option>
                                            <option value="231">Vatican City State</option>
                                            <option value="232">Vcyclezuela</option>
                                            <option value="233">Vietnam</option>
                                            <option value="234">Virgin Is.(US)</option>
                                            <option value="235">Virginia Is.(Br.)</option>
                                            <option value="236">Wallis & Futuna Is.</option>
                                            <option value="237">Western Sahara</option>
                                            <option value="238">Yemen</option>
                                            <option value="239">Yugoslavia</option>
                                            <option value="240">Zambia</option>
                                            <option value="241">Zimbabwe</option>
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
                                            <option value="4">Andaman & nicobar</option>
                                            <option value="5">Andhra pradesh</option>
                                            <option value="6">Arunachal pradesh</option>
                                            <option value="7">Assam</option>
                                            <option value="8">Bihar</option>
                                            <option value="10">Chhattisgarh</option>
                                            <option value="11">Chandigarh</option>
                                            <option value="12">Dadra & Nagar Haveli</option>
                                            <option value="13">Daman & Diu</option>
                                            <option value="14">Delhi</option>
                                            <option value="15">Goa</option>
                                            <option value="16">Gujarat</option>
                                            <option value="17">Haryana</option>
                                            <option value="18">Himachal pradesh</option>
                                            <option value="19">Jammu & kashmir</option>
                                            <option value="20">Jharkand</option>
                                            <option value="21">Karnataka</option>
                                            <option value="22">Kerala</option>
                                            <option value="23">Lakshadeep</option>
                                            <option value="24">Madhya pradesh</option>
                                            <option value="25">Maharashtra</option>
                                            <option value="26">Manipur</option>
                                            <option value="27">Meghalaya</option>
                                            <option value="28">Mizoram</option>
                                            <option value="29">Nagaland</option>
                                            <option value="30">Orissa</option>
                                            <option value="31">Pondicherry</option>
                                            <option value="32">Punjab</option>
                                            <option value="33">Rajasthan</option>
                                            <option value="34">Sikkim</option>
                                            <option value="35">Tripura</option>
                                            <option value="36">Uttar pradesh</option>
                                            <option value="37">Uttaranchal</option>
                                            <option value="38">West Bengal </option>
                                            <option value="1">Others</option>
                                        </select>
                                    </div>
                                    <small class="form-text text-muted text-help"></small>
                                    <span class="invalid-feedback"></span>
                                </div>
                            </div>
                            <div class="col-sm-4 div-state-others hide">
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
                                            <option value="3">Ariyalur</option>
                                            <option value="4">Chennai</option>
                                            <option value="5">Coimbatore</option>
                                            <option value="6">Cuddalore</option>
                                            <option value="7">Dharmapuri</option>
                                            <option value="8">Dindigul</option>
                                            <option value="9">Erode</option>
                                            <option value="10">Kanchipuram</option>
                                            <option value="11">Kanyakumari</option>
                                            <option value="12">Karur</option>
                                            <option value="13">Krishnagiri</option>
                                            <option value="14">Madurai</option>
                                            <option value="15">Nagapattinam</option>
                                            <option value="16">Namakkal</option>
                                            <option value="17">Nilgiris</option>
                                            <option value="18">Perambalur</option>
                                            <option value="19">Pudukkottai</option>
                                            <option value="20">Pudukkottai</option>
                                            <option value="21">Ramanathapuram</option>
                                            <option value="22">Salem</option>
                                            <option value="23">Sivaganga</option>
                                            <option value="24">Thanjavur</option>
                                            <option value="25">Theni</option>
                                            <option value="26">Thoothukudi</option>
                                            <option value="27">Tirunelveli</option>
                                            <option value="28">Tiruppur</option>
                                            <option value="29">Tiruvallur</option>
                                            <option value="30">Tiruvallur</option>
                                            <option value="31">Tiruvannamalai</option>
                                            <option value="32">Tiruvarur</option>
                                            <option value="33">Trichy</option>
                                            <option value="34">Tuticorin</option>
                                            <option value="35">Vellore</option>
                                            <option value="36">Viluppuram</option>
                                            <option value="37">Virudhunagar</option>
                                            <option value="1">Others</option>
                                        </select>
                                    </div>
                                    <small class="form-text text-muted text-help"></small>
                                    <span class="invalid-feedback"></span>
                                </div>
                            </div>
                            <div class="col-sm-4 div-district-others hide">
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
                            <div class="col-sm-3 div-father-occu hide">
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
                            <div class="col-sm-3 div-mother-occu hide">
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
                                            <option value="2">50 lakhs - 01 crores</option>
                                            <option value="3">01 crores - 2.5 crores</option>
                                            <option value="4">2.5 crores - 05 crores</option>
                                            <option value="5">05 crores - 7 crores</option>
                                            <option value="6">07 crores - 10 crores</option>
                                            <option value="7">10 crores - 15 crores</option>
                                            <option value="8">15 crores - 20 crores</option>
                                            <option value="9">20 crores - 30 crores</option>
                                            <option value="10">30 crores - 40 crores</option>
                                            <option value="11">40 crores - 50 crores</option>
                                            <option value="12">50 crores - 75 crores</option>
                                            <option value="13">75 crores - 100 crores</option>
                                            <option value="14">100 crores - 125 crores</option>
                                            <option value="15">125 crores - 150 crores</option>
                                            <option value="16">150 crores - 175 crores</option>
                                            <option value="17">175 crores - 200 crores</option>
                                            <option value="18">200 crores - 250 crores</option>
                                            <option value="19">250 crores - 300 crores</option>
                                            <option value="20">300 crores - 400 crores</option>
                                            <option value="21">400 crores - 500 crores</option>
                                            <option value="22">500 crores - 750 crores</option>
                                            <option value="23">750 crores - 1000 crores</option>
                                            <option value="24">1000 crores - 1500 crores</option>
                                            <option value="25">1500 crores - 2000 crores</option>
                                            <option value="26">2000 crores -3000 crores</option>
                                            <option value="27">3000 crores - 4000 crores</option>
                                            <option value="28">4000 crores - 5000 crores</option>
                                            <option value="29">5000 crores - 10000 crores</option>
                                            <option value="30">More than 10000 crores</option>
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
                        <div class="text-center">
                            <a class="btn btn-sm btn-danger" style="font-weight:bold"
                                href="https://www.youtube.com/watch?v=rXEWlBmbpvQ&gkm_external"
                                target="_blank"><i class="fab fa-youtube text-white"></i> How to fill
                                Horoscope?</a>
                        </div>
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
                                            <option value="2">Aries-Bharani</option>
                                            <option value="3">Aries-Krithigai</option>
                                            <option value="4">Taurus-Krithigai</option>
                                            <option value="5">Taurus-Rohini</option>
                                            <option value="6">Taurus-Mrigasrisham</option>
                                            <option value="7">Gemini-Mrigasrisham</option>
                                            <option value="8">Gemini-Thiruvathirai</option>
                                            <option value="9">Gemini-Punarpoosam</option>
                                            <option value="10">Cancer-Punarpoosam</option>
                                            <option value="11">Cancer-Poosam</option>
                                            <option value="12">Cancer-Ayilyam</option>
                                            <option value="13">Leo-Magam</option>
                                            <option value="14">Leo-Pooram</option>
                                            <option value="15">Leo-Uthiram</option>
                                            <option value="16">Virgo-Uthiram</option>
                                            <option value="17">Virgo-Hastham</option>
                                            <option value="18">Virgo-Chithirai</option>
                                            <option value="19">Libra-Chithirai</option>
                                            <option value="20">Libra-Swathi</option>
                                            <option value="21">Libra-Visakam</option>
                                            <option value="22">Scorpio-Visakam</option>
                                            <option value="23">Scorpio-Anusham</option>
                                            <option value="24">Scorpio-Kettai</option>
                                            <option value="25">Sagittarious-Moolam</option>
                                            <option value="26">Sagittarious-Pooradam</option>
                                            <option value="27">Sagittarious-Uthiradam</option>
                                            <option value="28">Capricorn-Uthiradam</option>
                                            <option value="29">Capricorn-Thiruvonam</option>
                                            <option value="30">Capricorn-Avittam</option>
                                            <option value="31">Aquarious-Avittam</option>
                                            <option value="32">Aquarious-Sathayam</option>
                                            <option value="33">Aquarious-Poorattadhi</option>
                                            <option value="34">Pisces-Poorattadhi</option>
                                            <option value="35">Pisces-Uthiratadhi</option>
                                            <option value="36">Pisces-Revathi</option>
                                            <option value="37">No Horoscope / Do not view horoscope</option>
                                            <option value="999">Don't Know</option>
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
                                            <option value="2">Patham 2</option>
                                            <option value="3">Patham 3</option>
                                            <option value="4">Patham 4</option>
                                            <option value="5">No Horoscope / Do not view horoscope</option>
                                            <option value="999">Don't Know</option>
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
                                            <option value="3">மிதுனம் (Gemini)</option>
                                            <option value="4">கடகம் (Cancer)</option>
                                            <option value="5">சிம்மம் (Leo)</option>
                                            <option value="6">கன்னி (Virgo)</option>
                                            <option value="7">துலாம் (Libra)</option>
                                            <option value="8">விருச்சிகம் (Scorpio)</option>
                                            <option value="9">தனுசு (Sagittarious)</option>
                                            <option value="10">மகரம் (Capricorn)</option>
                                            <option value="11">கும்பம் (Aquarious)</option>
                                            <option value="12">மீனம் (Pisces)</option>
                                            <option value="999">Don't Know</option>
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
