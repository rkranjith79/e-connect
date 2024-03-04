
@extends('layouts.user')

@section('content')
     <!-- Homepage Slider Section -->
        <section class="position-relative d-flex home-slider-area">
            <div class="absolute-full">
                <div class="aiz-carousel aiz-carousel-full h-100" data-fade='true' data-infinite='true'
                    data-autoplay='true'>
                    <img class="img-fit" src="{{ asset('img/2.png') }}">
                </div>
            </div>
            <div class="container position-relative d-flex flex-column">
                <div class="row pt-md-12 pb-md-0 py-4 my-auto align-items-center">
                    <div class="col mx-auto my-4">
                        <!-- search  -->
                        <div class="p-4 bg-white rounded-top border-bottom"
                            style="box-shadow: 0 -25px 50px -12px rgb(0 0 0 / 25%); background-color:#fff3!important">
                            <div class="row">
                                <div class="col mx-auto">
                                    <form action="https://ganeshkongumatrimony.com/member-listing" method="get">
                                        <div class="row gutters-5">
                                            <div class="col-lg">
                                                <div class="form-group mb-3">
                                                    <div class="form-group mb-3">
                                                        <label class="form-label" for="member_id">உறுப்பினர்
                                                            எண்</label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend"><span
                                                                    class="input-group-text"><i
                                                                        class="fas fa-id-card"></i></span></div>
                                                            <input type="text" class="form-control "
                                                                value="" id="member_id" name="member_id"
                                                                maxlength="255">
                                                        </div>
                                                        <small class="form-text text-muted text-help"></small>
                                                        <span class="invalid-feedback"></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg">
                                                <div class="form-group mb-3">
                                                    <div class="form-group mb-3">
                                                        <label class="form-label" for="gender">பாலினம்</label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend"><span
                                                                    class="input-group-text"><i
                                                                        class="fas fa-caret-down"></i></span></div>
                                                            <select type="select" name="gender" id="gender"
                                                                class="form-control aiz-selectpicker "
                                                                data-live-search="true" -data-width="auto">
                                                                <option style="display:none" value="">-- Select
                                                                    --</option>
                                                                <option selected value="">அனைத்தும்</option>
                                                                <option value="1">ஆண்</option>
                                                                <option value="2">பெண்</option>
                                                            </select>
                                                        </div>
                                                        <small class="form-text text-muted text-help"></small>
                                                        <span class="invalid-feedback"></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg">
                                                <div class="form-group mb-3">
                                                    <div class="form-group mb-3">
                                                        <label class="form-label" for="exp_maritalstatus">திருமண
                                                            நிலை</label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend"><span
                                                                    class="input-group-text"><i
                                                                        class="fas fa-caret-down"></i></span></div>
                                                            <select type="select" name="exp_maritalstatus[]"
                                                                id="exp_maritalstatus"
                                                                class="form-control aiz-selectpicker " multiple ""
                                                                data-live-search="true" -data-width="auto">
                                                                <option style="display:none" value="">-- Select
                                                                    --</option>
                                                                <option value="U">முதல் மணம்</option>
                                                                <option value="R">மறுமணம்</option>
                                                                <option value="UO">முதல் மணம் சம்மதம்</option>
                                                                <option value="RO">மறுமணம் சம்மதம்</option>
                                                            </select>
                                                        </div>
                                                        <small class="form-text text-muted text-help"></small>
                                                        <span class="invalid-feedback"></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg">
                                                <div class="form-group mb-3">
                                                    <div class="form-group mb-3">
                                                        <label class="form-label" for="caste">சாதி</label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend"><span
                                                                    class="input-group-text"><i
                                                                        class="fas fa-caret-down"></i></span></div>
                                                            <select type="select" name="caste[]" id="caste"
                                                                class="form-control aiz-selectpicker " multiple ""
                                                                data-live-search="true" -data-width="auto">
                                                                <option style="display:none" value="">-- Select
                                                                    --</option>
                                                                <option value="1">கொங்கு வெள்ளாள கவுண்டர்</option>
                                                                <option value="2">கொங்கு வேளாளர் உட்பிரிவு
                                                                </option>
                                                                <option value="3">கொங்கு வேளாளர் கலப்பு</option>
                                                            </select>
                                                        </div>
                                                        <small class="form-text text-muted text-help"></small>
                                                        <span class="invalid-feedback"></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg">
                                                <div class="form-group mb-3">
                                                    <label class="form-label" for="sub_caste">குலம்</label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend"><span
                                                                class="input-group-text"><i
                                                                    class="fas fa-caret-down"></i></span></div>
                                                        <select type="select" name="sub_caste[]" id="sub_caste"
                                                            class="form-control aiz-selectpicker " multiple ""
                                                            data-live-search="true" -data-width="auto">
                                                            <option style="display:none" value="">-- Select --
                                                            </option>
                                                            <option selected value="2">அந்துவன் குலம்</option>
                                                            <option selected value="3">அழகன் குலம்</option>
                                                            <option selected value="4">ஆட குலம்</option>
                                                            <option selected value="5">ஆதி குலம்</option>
                                                            <option selected value="6">ஆந்தை குலம்</option>
                                                            <option selected value="7">ஆவ குலம்</option>
                                                            <option selected value="8">ஆவின் குலம்</option>
                                                            <option selected value="9">ஈஞ்சன் குலம்</option>
                                                            <option selected value="10">எண்ணை குலம்</option>
                                                            <option selected value="11">ஒழுக்க குலம்</option>
                                                            <option selected value="12">ஓதாலன் குலம்</option>
                                                            <option selected value="13">கணக்கன் குலம்</option>
                                                            <option selected value="14">கணவாளன் குலம்</option>
                                                            <option selected value="15">கண்ணந்தை குலம்</option>
                                                            <option selected value="16">கண்ணன் குலம்</option>
                                                            <option selected value="17">களிஞ்சிகுலம்</option>
                                                            <option selected value="18">காடை குலம்</option>
                                                            <option selected value="19">காரி குலம்</option>
                                                            <option selected value="20">கீரன் குலம்</option>
                                                            <option selected value="21">குயிலர் குலம்</option>
                                                            <option selected value="22">குழையர் குலம்</option>
                                                            <option selected value="23">கூறை குலம்</option>
                                                            <option selected value="24">கோவேந்தர் குலம்</option>
                                                            <option selected value="25">சாத்தந்தை குலம்</option>
                                                            <option selected value="26">சிலம்பன் குலம்</option>
                                                            <option selected value="27">செங்கண்ணன் குலம்</option>
                                                            <option selected value="28">செங்குண்ணி குலம்</option>
                                                            <option selected value="29">செம்பன் குலம்</option>
                                                            <option selected value="30">செம்பூத்தான் குலம்</option>
                                                            <option selected value="31">செல்லன் குலம்</option>
                                                            <option selected value="32">செவ்வந்தி குலம்</option>
                                                            <option selected value="33">செவ்வாய் குலம்</option>
                                                            <option selected value="34">சேடன் குலம்</option>
                                                            <option selected value="35">சேரன் குலம்</option>
                                                            <option selected value="36">சேரலன் குலம்</option>
                                                            <option selected value="37">சோழன் குலம்</option>
                                                            <option selected value="38">தனஞ்செயன் குலம்</option>
                                                            <option selected value="39">தழிஞ்சி குலம்</option>
                                                            <option selected value="40">தூரன் குலம்</option>
                                                            <option selected value="41">தேவேந்திரன் குலம்</option>
                                                            <option selected value="42">தோடை குலம்</option>
                                                            <option selected value="43">நீருண்ணியர் குலம்</option>
                                                            <option selected value="44">பண்ணை குலம்</option>
                                                            <option selected value="45">பதரியர் குலம்</option>
                                                            <option selected value="46">பதுமன் குலம்</option>
                                                            <option selected value="47">பனங்காடை குலம்</option>
                                                            <option selected value="48">பனையன் குலம்</option>
                                                            <option selected value="49">பயிரன் குலம்</option>
                                                            <option selected value="50">பவழ குலம்</option>
                                                            <option selected value="51">பாண்டியன் குலம்</option>
                                                            <option selected value="52">பிரழந்தை குலம்</option>
                                                            <option selected value="53">பில்லன் குலம்</option>
                                                            <option selected value="54">பூசன் குலம்</option>
                                                            <option selected value="55">பூச்சந்தை குலம்</option>
                                                            <option selected value="56">பூந்தன் குலம்</option>
                                                            <option selected value="57">பெரிய குலம்</option>
                                                            <option selected value="58">பெருங்குடி குலம்</option>
                                                            <option selected value="59">பொடியன் குலம்</option>
                                                            <option selected value="60">பொன்னர் குலம்</option>
                                                            <option selected value="61">பொருள்தந்த குலம்</option>
                                                            <option selected value="62">மணியன் குலம்</option>
                                                            <option selected value="63">மயிலர் குலம்</option>
                                                            <option selected value="64">மாட குலம்</option>
                                                            <option selected value="65">முத்தன் குலம்</option>
                                                            <option selected value="66">முல்லை குலம்</option>
                                                            <option selected value="67">முழுக்காதன் குலம்</option>
                                                            <option selected value="68">மூலன் குலம்</option>
                                                            <option selected value="69">மேதி குலம்</option>
                                                            <option selected value="70">வண்ணக்கன் குலம்</option>
                                                            <option selected value="71">வில்லி குலம்</option>
                                                            <option selected value="72">விளையன் குலம்</option>
                                                            <option selected value="73">வெண்டுவன் குலம்</option>
                                                            <option selected value="74">வெண்ணை குலம்</option>
                                                            <option selected value="75">வெளியன் குலம்</option>
                                                            <option selected value="76">வெள்ளம்பன் குலம்</option>
                                                            <option selected value="77">வேந்தன் குலம்</option>
                                                            <option selected value="78">கள்ளி குலம்</option>
                                                        </select>
                                                    </div>
                                                    <small class="form-text text-muted text-help"></small>
                                                    <span class="invalid-feedback"></span>
                                                </div>
                                            </div>
                                            <div class="col-lg">
                                                <button type="submit"
                                                    class="btn btn-block btn-primary mt-4">Search</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- premium member Section -->
        <section class="pt-4 pb-3 bg-white" id="premium_members">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 col-xl-8 col-xxl-6 mx-auto">
                        <div class="text-center section-title mb-5">
                            <h2 class="fw-600 mb-3 text-dark"> {{ trans("site.new_members") }} </h2>
                            <p class="fw-400 fs-16 opacity-60">{{ trans("site.new_members_sub") }}</p>
                        </div>
                    </div>
                </div>
                <div class="aiz-carousel gutters-10 half-outside-arrow pb-3" data-items="5" data-xl-items="4"
                    data-lg-items="4" data-md-items="3" data-sm-items="2" data-xs-items="1" data-arrows='true'
                    data-dots='true' data-infinite='true' data-autoplay='true'>
                    
                    @foreach ($data['brides'] as $profile)
                        <div class="carousel-box">
                            <div class="member-block position-relative overflow-hidden">
                                <img data-lazy="{{ $profile->photo ?? '' }}"
                                    class="img-fit mw-100 h-300px">
                                <div class="w-100 p-3 z-1">
                                    <div class="text-center">
                                        <h6 class="font-weight-bold mb-1">{{ $profile->title ?? '-' }}</h6>
                                        <h6 class="text-primary mb-0">{{ $profile->id ?? '-'}}</h6>
                                        <p class="mb-0">{{ trans("fields.age") }} : <span class="font-weight-bold">{{ $profile->jathagam->age ?? '-' }}</span></p>
                                        <p class="mb-0">{{ trans("fields.education") }} : <span class="font-weight-bold">{{ $profile->basic->education->title ?? '-' }}</span></p>
                                        <p class="mb-0">{{ trans("fields.rasi") }} : <span class="font-weight-bold">{{ $profile->jathagam->rasi_nakshatra->title ?? '-' }}</span></p>
                                        <p class="mb-0">{{ trans("fields.jathagam") }} : <span class="font-weight-bold">{{ $profile->jathagam->jathagam->title ?? '-' }}</span></p>
                                        <p class="mb-0">{{ trans("fields.distict") }}  : <span class="font-weight-bold">{{ $profile->basic->district->title ?? '-' }}</span></p>
                                        <div class="text-center mt-2">
                                            <a href="{{ route('user.profile', ['id' => $profile->id]) }}" 
                                                class="btn btn-circle btn-sm btn-primary mr-1">
                                                {{ trans("site.view_profile_button_2") }}</a>
                                            <a href="{{ route('user.jathagam', ['id' => $profile->id]) }}" 
                                                class="btn btn-circle btn-sm btn-primary mr-1">{{ trans("site.view_jathagam_button_2") }}</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> 
                    @endforeach
                </div>



                <div class="aiz-carousel gutters-10 half-outside-arrow py-3" data-items="5" data-xl-items="4"
                    data-lg-items="4" data-md-items="3" data-sm-items="2" data-xs-items="1" data-arrows='true'
                    data-dots='true' data-infinite='true' data-autoplay='true'>

                    @foreach ($data['grooms'] as $profile)
                    <div class="carousel-box">
                        <div class="member-block position-relative overflow-hidden">
                            <img data-lazy="{{ $profile->photo ?? '' }}"
                                class="img-fit mw-100 h-300px">
                            <div class="w-100 p-3 z-1">
                                <div class="text-center">
                                    <h6 class="font-weight-bold mb-1">{{ $profile->title ?? '-' }}</h6>
                                    <h6 class="text-primary mb-0">{{ $profile->id ?? '-'}}</h6>
                                    <p class="mb-0">{{ trans("fields.age") }} : <span class="font-weight-bold">{{ $profile->jathagam->age ?? '-' }}</span></p>
                                    <p class="mb-0">{{ trans("fields.education") }} : <span class="font-weight-bold">{{ $profile->basic->education->title ?? '-' }}</span></p>
                                    <p class="mb-0">{{ trans("fields.rasi") }} : <span class="font-weight-bold">{{ $profile->jathagam->rasi_nakshatra->title ?? '-' }}</span></p>
                                    <p class="mb-0">{{ trans("fields.jathagam") }} : <span class="font-weight-bold">{{ $profile->jathagam->jathagam->title ?? '-' }}</span></p>
                                    <p class="mb-0">{{ trans("fields.distict") }}  : <span class="font-weight-bold">{{ $profile->basic->district->title ?? '-' }}</span></p>
                                    <div class="text-center mt-2">
                                        <a href="{{ route('user.profile', ['id' => $profile->id]) }}" 
                                            class="btn btn-circle btn-sm btn-primary mr-1">
                                            {{ trans("site.view_profile_button_2") }}</a>
                                        <a href="{{ route('user.jathagam', ['id' => $profile->id]) }}" 
                                            class="btn btn-circle btn-sm btn-primary mr-1">{{ trans("site.view_jathagam_button_2") }}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    @endforeach
                </div>
            </div>
        </section>


        <!-- Banner section 1 -->

        <!-- How It Works Section -->

        <!-- Trusted by Millions Section -->

        <!-- New Member Section -->

        <!-- happy Story Section -->
@endsection
