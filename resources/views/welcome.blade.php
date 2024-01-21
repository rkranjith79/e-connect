
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
                            <h2 class="fw-600 mb-3 text-dark">New Members</h2>
                            <p class="fw-400 fs-16 opacity-60">Every user registered on E-Connect Matrimony is
                                verified 100%.</p>
                        </div>
                    </div>
                </div>
                <div class="aiz-carousel gutters-10 half-outside-arrow pb-3" data-items="5" data-xl-items="4"
                    data-lg-items="4" data-md-items="3" data-sm-items="2" data-xs-items="1" data-arrows='true'
                    data-dots='true' data-infinite='true' data-autoplay='true'>
                    <div class="carousel-box">
                        <div class="member-block position-relative overflow-hidden">
                            <img data-lazy="https://ganeshkongumatrimony.com/uploads/profile_images/CIYP6R4iIcBNrskZcZXBBXfeS2u4iZLXjy8eYla4.jpg"
                                class="img-fit mw-100 h-300px">
                            <div class="w-100 p-3 z-1">
                                <div class="text-center">
                                    <h6 class="font-weight-bold mb-1">பிரீத்திகா</h6>
                                    <h6 class="text-primary mb-0">GK4525</h6>
                                    <p class="mb-0">வயது : <span class="font-weight-bold">28</span></p>
                                    <p class="mb-0">படிப்பு : <span class="font-weight-bold">MDS (Perio)</span></p>
                                    <p class="mb-0">இராசி : <span class="font-weight-bold">கன்னி-உத்திரம்</span></p>
                                    <p class="mb-0">ஜாதகம் : <span class="font-weight-bold">சுத்த ஜாதகம்</span></p>
                                    <p class="mb-0">ஊர் : <span class="font-weight-bold">திருப்பூர்</span></p>
                                    <div class="text-center mt-2">
                                        <a class="btn btn-circle btn-sm btn-primary mr-1" href="p/53tnc1s.html"
                                            onclick="">ப்ரொபைல்</a>
                                        <a class="btn btn-circle btn-sm btn-primary ml-1" href="j/53tnc1s.html"
                                            target="_blank" onclick="">ஜாதகம்</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-box">
                        <div class="member-block position-relative overflow-hidden">
                            <img data-lazy="https://ganeshkongumatrimony.com/uploads/profile_images/tmEvqai7SskCI1GE7nRqGeMnRZ46l64mmjzZfONC.jpg"
                                class="img-fit mw-100 h-300px">
                            <div class="w-100 p-3 z-1">
                                <div class="text-center">
                                    <h6 class="font-weight-bold mb-1">மணிஷா</h6>
                                    <h6 class="text-primary mb-0">GK4524</h6>
                                    <p class="mb-0">வயது : <span class="font-weight-bold">27</span></p>
                                    <p class="mb-0">படிப்பு : <span class="font-weight-bold">MBA</span></p>
                                    <p class="mb-0">இராசி : <span class="font-weight-bold">சிம்மம்-மகம்</span></p>
                                    <p class="mb-0">ஜாதகம் : <span class="font-weight-bold">சுத்த ஜாதகம்</span></p>
                                    <p class="mb-0">ஊர் : <span class="font-weight-bold">திருப்பூர்</span></p>
                                    <div class="text-center mt-2">
                                        <a class="btn btn-circle btn-sm btn-primary mr-1" href="p/51mt2tc.html"
                                            onclick="">ப்ரொபைல்</a>
                                        <a class="btn btn-circle btn-sm btn-primary ml-1" href="j/51mt2tc.html"
                                            target="_blank" onclick="">ஜாதகம்</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-box">
                        <div class="member-block position-relative overflow-hidden">
                            <img data-lazy="https://ganeshkongumatrimony.com/uploads/profile_images/OhHEmneORWZBpi6YR8PEWD6Mig4UoBiEQLWAiaOH.jpg"
                                class="img-fit mw-100 h-300px">
                            <div class="w-100 p-3 z-1">
                                <div class="text-center">
                                    <h6 class="font-weight-bold mb-1">அனு</h6>
                                    <h6 class="text-primary mb-0">GK4521</h6>
                                    <p class="mb-0">வயது : <span class="font-weight-bold">31</span></p>
                                    <p class="mb-0">படிப்பு : <span class="font-weight-bold">B.A,B.L (Hons)
                                            ,ACS,</span></p>
                                    <p class="mb-0">இராசி : <span class="font-weight-bold">மேஷம்-கிருத்திகை</span>
                                    </p>
                                    <p class="mb-0">ஜாதகம் : <span class="font-weight-bold">சுத்த ஜாதகம்</span></p>
                                    <p class="mb-0">ஊர் : <span class="font-weight-bold">நாமக்கல்</span></p>
                                    <div class="text-center mt-2">
                                        <a class="btn btn-circle btn-sm btn-primary mr-1" href="p/4t2c99w.html"
                                            onclick="">ப்ரொபைல்</a>
                                        <a class="btn btn-circle btn-sm btn-primary ml-1" href="j/4t2c99w.html"
                                            target="_blank" onclick="">ஜாதகம்</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-box">
                        <div class="member-block position-relative overflow-hidden">
                            <img data-lazy="https://ganeshkongumatrimony.com/uploads/profile_images/FYSDLSEYgGNqsffUCvfGpKbMpWZmfX6a0f4OSPob.jpg"
                                class="img-fit mw-100 h-300px">
                            <div class="w-100 p-3 z-1">
                                <div class="text-center">
                                    <h6 class="font-weight-bold mb-1">அருணி ஆதித்யா</h6>
                                    <h6 class="text-primary mb-0">GK4507</h6>
                                    <p class="mb-0">வயது : <span class="font-weight-bold">27</span></p>
                                    <p class="mb-0">படிப்பு : <span class="font-weight-bold">MBBS ,MD</span></p>
                                    <p class="mb-0">இராசி : <span class="font-weight-bold">மகரம்-உத்திராடம்</span>
                                    </p>
                                    <p class="mb-0">ஜாதகம் : <span class="font-weight-bold">ராகு கேது ஜாதகம்</span>
                                    </p>
                                    <p class="mb-0">ஊர் : <span class="font-weight-bold">திருப்பூர்</span></p>
                                    <div class="text-center mt-2">
                                        <a class="btn btn-circle btn-sm btn-primary mr-1" href="p/3w8oglc.html"
                                            onclick="">ப்ரொபைல்</a>
                                        <a class="btn btn-circle btn-sm btn-primary ml-1" href="j/3w8oglc.html"
                                            target="_blank" onclick="">ஜாதகம்</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-box">
                        <div class="member-block position-relative overflow-hidden">
                            <img data-lazy="https://ganeshkongumatrimony.com/uploads/profile_images/cGQSKZfy3QNiTnPkf5dfTVhm6OaQX8e2LPjj0TIp.jpg"
                                class="img-fit mw-100 h-300px">
                            <div class="w-100 p-3 z-1">
                                <div class="text-center">
                                    <h6 class="font-weight-bold mb-1">மோகனபிரியா</h6>
                                    <h6 class="text-primary mb-0">GK4476</h6>
                                    <p class="mb-0">வயது : <span class="font-weight-bold">27</span></p>
                                    <p class="mb-0">படிப்பு : <span class="font-weight-bold">BE</span></p>
                                    <p class="mb-0">இராசி : <span class="font-weight-bold">சிம்மம்-பூரம்</span></p>
                                    <p class="mb-0">ஜாதகம் : <span class="font-weight-bold">சுத்த ஜாதகம்</span></p>
                                    <p class="mb-0">ஊர் : <span class="font-weight-bold">கோவை</span></p>
                                    <div class="text-center mt-2">
                                        <a class="btn btn-circle btn-sm btn-primary mr-1" href="p/1w0w3oq.html"
                                            onclick="">ப்ரொபைல்</a>
                                        <a class="btn btn-circle btn-sm btn-primary ml-1" href="j/1w0w3oq.html"
                                            target="_blank" onclick="">ஜாதகம்</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-box">
                        <div class="member-block position-relative overflow-hidden">
                            <img data-lazy="https://ganeshkongumatrimony.com/uploads/profile_images/srL5qoaIGFqe3uEdVvlwW6cg4bat3a64JZvRV8Mt21.png"
                                class="img-fit mw-100 h-300px">
                            <div class="w-100 p-3 z-1">
                                <div class="text-center">
                                    <h6 class="font-weight-bold mb-1">ஹரிணி</h6>
                                    <h6 class="text-primary mb-0">GK4467</h6>
                                    <p class="mb-0">வயது : <span class="font-weight-bold">27</span></p>
                                    <p class="mb-0">படிப்பு : <span class="font-weight-bold">BTech fashion
                                            tech</span></p>
                                    <p class="mb-0">இராசி : <span class="font-weight-bold">மிதுனம்-திருவாதிரை</span>
                                    </p>
                                    <p class="mb-0">ஜாதகம் : <span class="font-weight-bold">பரிகார செவ்வாய்
                                            ஜாதகம்</span></p>
                                    <p class="mb-0">ஊர் : <span class="font-weight-bold">நாமக்கல்</span></p>
                                    <div class="text-center mt-2">
                                        <a class="btn btn-circle btn-sm btn-primary mr-1" href="p/1c7fn0i.html"
                                            onclick="">ப்ரொபைல்</a>
                                        <a class="btn btn-circle btn-sm btn-primary ml-1" href="j/1c7fn0i.html"
                                            target="_blank" onclick="">ஜாதகம்</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-box">
                        <div class="member-block position-relative overflow-hidden">
                            <img data-lazy="https://ganeshkongumatrimony.com/uploads/profile_images/T3vc1wVFd2F3HiQfazwQebcK8xEW6J2uXcNCmH3R56.png"
                                class="img-fit mw-100 h-300px">
                            <div class="w-100 p-3 z-1">
                                <div class="text-center">
                                    <h6 class="font-weight-bold mb-1">சரண்யா ஶ்ரீ</h6>
                                    <h6 class="text-primary mb-0">GK4461</h6>
                                    <p class="mb-0">வயது : <span class="font-weight-bold">25</span></p>
                                    <p class="mb-0">படிப்பு : <span class="font-weight-bold">BE ( Civil )</span></p>
                                    <p class="mb-0">இராசி : <span class="font-weight-bold">மிதுனம்-திருவாதிரை</span>
                                    </p>
                                    <p class="mb-0">ஜாதகம் : <span class="font-weight-bold">ராகு கேது,
                                            செவ்வாய்</span></p>
                                    <p class="mb-0">ஊர் : <span class="font-weight-bold">கோவை</span></p>
                                    <div class="text-center mt-2">
                                        <a class="btn btn-circle btn-sm btn-primary mr-1" href="p/x0g1to.html"
                                            onclick="">ப்ரொபைல்</a>
                                        <a class="btn btn-circle btn-sm btn-primary ml-1" href="j/x0g1to.html"
                                            target="_blank" onclick="">ஜாதகம்</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-box">
                        <div class="member-block position-relative overflow-hidden">
                            <img data-lazy="https://ganeshkongumatrimony.com/uploads/profile_images/uXjYCy64TRlGvXdvFLTDGigB8CRcGzBaN2nCj7YL3034.png"
                                class="img-fit mw-100 h-300px">
                            <div class="w-100 p-3 z-1">
                                <div class="text-center">
                                    <h6 class="font-weight-bold mb-1">அம்ரிதா ப்ரீத்தி</h6>
                                    <h6 class="text-primary mb-0">GK4457</h6>
                                    <p class="mb-0">வயது : <span class="font-weight-bold">25</span></p>
                                    <p class="mb-0">படிப்பு : <span class="font-weight-bold">மருத்துவம்</span></p>
                                    <p class="mb-0">இராசி : <span class="font-weight-bold">மிதுனம்-திருவாதிரை</span>
                                    </p>
                                    <p class="mb-0">ஜாதகம் : <span class="font-weight-bold">சுத்த ஜாதகம்</span></p>
                                    <p class="mb-0">ஊர் : <span class="font-weight-bold">திருப்பூர்</span></p>
                                    <div class="text-center mt-2">
                                        <a class="btn btn-circle btn-sm btn-primary mr-1" href="p/o74x3s.html"
                                            onclick="">ப்ரொபைல்</a>
                                        <a class="btn btn-circle btn-sm btn-primary ml-1" href="j/o74x3s.html"
                                            target="_blank" onclick="">ஜாதகம்</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-box">
                        <div class="member-block position-relative overflow-hidden">
                            <img data-lazy="https://ganeshkongumatrimony.com/assets/img/avatar-place.png"
                                class="img-fit mw-100 h-300px">
                            <div class="w-100 p-3 z-1">
                                <div class="text-center">
                                    <h6 class="font-weight-bold mb-1">அனுவர்ஷினி</h6>
                                    <h6 class="text-primary mb-0">GK4454</h6>
                                    <p class="mb-0">வயது : <span class="font-weight-bold">18</span></p>
                                    <p class="mb-0">படிப்பு : <span class="font-weight-bold">BBA RM</span></p>
                                    <p class="mb-0">இராசி : <span class="font-weight-bold">தனுசு-மூலம்</span></p>
                                    <p class="mb-0">ஜாதகம் : <span class="font-weight-bold">சுத்த ஜாதகம்</span></p>
                                    <p class="mb-0">ஊர் : <span class="font-weight-bold">கோவை</span></p>
                                    <div class="text-center mt-2">
                                        <a class="btn btn-circle btn-sm btn-primary mr-1" href="p/hkm5ie.html"
                                            onclick="">ப்ரொபைல்</a>
                                        <a class="btn btn-circle btn-sm btn-primary ml-1" href="j/hkm5ie.html"
                                            target="_blank" onclick="">ஜாதகம்</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-box">
                        <div class="member-block position-relative overflow-hidden">
                            <img data-lazy="https://ganeshkongumatrimony.com/uploads/profile_images/eqUALeZmiGDhB2U8dHpaOOREwp77hbdM9lyRe2JY27.png"
                                class="img-fit mw-100 h-300px">
                            <div class="w-100 p-3 z-1">
                                <div class="text-center">
                                    <h6 class="font-weight-bold mb-1">வித்யா</h6>
                                    <h6 class="text-primary mb-0">GK4451</h6>
                                    <p class="mb-0">வயது : <span class="font-weight-bold">27</span></p>
                                    <p class="mb-0">படிப்பு : <span class="font-weight-bold">B. Arch.</span></p>
                                    <p class="mb-0">இராசி : <span class="font-weight-bold">ரிஷபம்-ரோகினி</span></p>
                                    <p class="mb-0">ஜாதகம் : <span class="font-weight-bold">சுத்த ஜாதகம்</span></p>
                                    <p class="mb-0">ஊர் : <span class="font-weight-bold">ஈரோடு</span></p>
                                    <div class="text-center mt-2">
                                        <a class="btn btn-circle btn-sm btn-primary mr-1" href="p/b05bx0.html"
                                            onclick="">ப்ரொபைல்</a>
                                        <a class="btn btn-circle btn-sm btn-primary ml-1" href="j/b05bx0.html"
                                            target="_blank" onclick="">ஜாதகம்</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="aiz-carousel gutters-10 half-outside-arrow py-3" data-items="5" data-xl-items="4"
                    data-lg-items="4" data-md-items="3" data-sm-items="2" data-xs-items="1" data-arrows='true'
                    data-dots='true' data-infinite='true' data-autoplay='true'>
                    <div class="carousel-box">
                        <div class="member-block position-relative overflow-hidden">
                            <img data-lazy="https://ganeshkongumatrimony.com/uploads/profile_images/FAVDaXLeNJhz4xMj1HRjomWRgyPTexpG5duxT7Zw.jpg"
                                class="img-fit mw-100 h-300px">
                            <div class="w-100 p-3 z-1">
                                <div class="text-center">
                                    <h6 class="font-weight-bold mb-1">கௌதம்</h6>
                                    <h6 class="text-primary mb-0">GK4503</h6>
                                    <p class="mb-0">வயது : <span class="font-weight-bold">33</span></p>
                                    <p class="mb-0">படிப்பு : <span class="font-weight-bold">B. Com</span></p>
                                    <p class="mb-0">இராசி : <span class="font-weight-bold">கும்பம்-சதயம்</span></p>
                                    <p class="mb-0">ஜாதகம் : <span class="font-weight-bold">சுத்த ஜாதகம்</span></p>
                                    <p class="mb-0">ஊர் : <span class="font-weight-bold">திருப்பூர்</span></p>
                                    <div class="text-center mt-2">
                                        <a class="btn btn-circle btn-sm btn-primary mr-1" href="p/3nfddtg.html"
                                            onclick="">ப்ரொபைல்</a>
                                        <a class="btn btn-circle btn-sm btn-primary ml-1" href="j/3nfddtg.html"
                                            target="_blank" onclick="">ஜாதகம்</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-box">
                        <div class="member-block position-relative overflow-hidden">
                            <img data-lazy="https://ganeshkongumatrimony.com/uploads/profile_images/LiRALla76PEkch4RsOwwEa1VPVcTwI7TScut609m78.png"
                                class="img-fit mw-100 h-300px">
                            <div class="w-100 p-3 z-1">
                                <div class="text-center">
                                    <h6 class="font-weight-bold mb-1">பிரசாந்த்</h6>
                                    <h6 class="text-primary mb-0">GK4495</h6>
                                    <p class="mb-0">வயது : <span class="font-weight-bold">33</span></p>
                                    <p class="mb-0">படிப்பு : <span class="font-weight-bold">B. E</span></p>
                                    <p class="mb-0">இராசி : <span class="font-weight-bold">கன்னி-உத்திரம்</span></p>
                                    <p class="mb-0">ஜாதகம் : <span class="font-weight-bold">ராகு கேது ஜாதகம்</span>
                                    </p>
                                    <p class="mb-0">ஊர் : <span class="font-weight-bold">கோவை</span></p>
                                    <div class="text-center mt-2">
                                        <a class="btn btn-circle btn-sm btn-primary mr-1" href="p/35sp8bo.html"
                                            onclick="">ப்ரொபைல்</a>
                                        <a class="btn btn-circle btn-sm btn-primary ml-1" href="j/35sp8bo.html"
                                            target="_blank" onclick="">ஜாதகம்</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-box">
                        <div class="member-block position-relative overflow-hidden">
                            <img data-lazy="https://ganeshkongumatrimony.com/uploads/profile_images/dm91FvIQBB8VGgyJbjjCVN2jW1vBNy0zM88XKmmU.jpg"
                                class="img-fit mw-100 h-300px">
                            <div class="w-100 p-3 z-1">
                                <div class="text-center">
                                    <h6 class="font-weight-bold mb-1">ப இராஜகணேஷ்</h6>
                                    <h6 class="text-primary mb-0">GK4485</h6>
                                    <p class="mb-0">வயது : <span class="font-weight-bold">31</span></p>
                                    <p class="mb-0">படிப்பு : <span class="font-weight-bold">B.E MECHATRONICS
                                            ENGINEERING</span></p>
                                    <p class="mb-0">இராசி : <span class="font-weight-bold">துலாம்-சித்திரை</span>
                                    </p>
                                    <p class="mb-0">ஜாதகம் : <span class="font-weight-bold">சுத்த ஜாதகம்</span></p>
                                    <p class="mb-0">ஊர் : <span class="font-weight-bold">திருப்பூர்</span></p>
                                    <div class="text-center mt-2">
                                        <a class="btn btn-circle btn-sm btn-primary mr-1" href="p/2hseif0.html"
                                            onclick="">ப்ரொபைல்</a>
                                        <a class="btn btn-circle btn-sm btn-primary ml-1" href="j/2hseif0.html"
                                            target="_blank" onclick="">ஜாதகம்</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-box">
                        <div class="member-block position-relative overflow-hidden">
                            <img data-lazy="https://ganeshkongumatrimony.com/uploads/profile_images/QAMVpmU6zStJdzvVHbQSXda67ppShrbA8IIEQDHX51.png"
                                class="img-fit mw-100 h-300px">
                            <div class="w-100 p-3 z-1">
                                <div class="text-center">
                                    <h6 class="font-weight-bold mb-1">யோகசேகர்</h6>
                                    <h6 class="text-primary mb-0">GK4474</h6>
                                    <p class="mb-0">வயது : <span class="font-weight-bold">29</span></p>
                                    <p class="mb-0">படிப்பு : <span class="font-weight-bold">MD Anaesthesia, AIIMS
                                            New Delhi</span></p>
                                    <p class="mb-0">இராசி : <span class="font-weight-bold">தனுசு-மூலம்</span></p>
                                    <p class="mb-0">ஜாதகம் : <span class="font-weight-bold">பரிகார செவ்வாய்
                                            ஜாதகம்</span></p>
                                    <p class="mb-0">ஊர் : <span class="font-weight-bold">நாமக்கல்</span></p>
                                    <div class="text-center mt-2">
                                        <a class="btn btn-circle btn-sm btn-primary mr-1" href="p/1rl9jbs.html"
                                            onclick="">ப்ரொபைல்</a>
                                        <a class="btn btn-circle btn-sm btn-primary ml-1" href="j/1rl9jbs.html"
                                            target="_blank" onclick="">ஜாதகம்</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-box">
                        <div class="member-block position-relative overflow-hidden">
                            <img data-lazy="https://ganeshkongumatrimony.com/uploads/all/qjCI0e92BuHqaQBzOpEULSNb4w55P27jQiO6Tmt2.jpg"
                                class="img-fit mw-100 h-300px">
                            <div class="w-100 p-3 z-1">
                                <div class="text-center">
                                    <h6 class="font-weight-bold mb-1">விவேகானந்தன்</h6>
                                    <h6 class="text-primary mb-0">GK4473</h6>
                                    <p class="mb-0">வயது : <span class="font-weight-bold">27</span></p>
                                    <p class="mb-0">படிப்பு : <span class="font-weight-bold">Master&#039;s
                                            Degree</span></p>
                                    <p class="mb-0">இராசி : <span class="font-weight-bold">ரிஷபம்-ரோகினி</span></p>
                                    <p class="mb-0">ஜாதகம் : <span class="font-weight-bold">செவ்வாய் ஜாதகம்</span>
                                    </p>
                                    <p class="mb-0">ஊர் : <span class="font-weight-bold">சென்னை</span></p>
                                    <div class="text-center mt-2">
                                        <a class="btn btn-circle btn-sm btn-primary mr-1" href="p/1pefa5c.html"
                                            onclick="">ப்ரொபைல்</a>
                                        <a class="btn btn-circle btn-sm btn-primary ml-1" href="j/1pefa5c.html"
                                            target="_blank" onclick="">ஜாதகம்</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-box">
                        <div class="member-block position-relative overflow-hidden">
                            <img data-lazy="https://ganeshkongumatrimony.com/uploads/profile_images/DNVRZibvsUdKuXKVLR0YSZ6BUPkewMo9Xyn7e5wU42.png"
                                class="img-fit mw-100 h-300px">
                            <div class="w-100 p-3 z-1">
                                <div class="text-center">
                                    <h6 class="font-weight-bold mb-1">மதன்</h6>
                                    <h6 class="text-primary mb-0">GK4464</h6>
                                    <p class="mb-0">வயது : <span class="font-weight-bold">33</span></p>
                                    <p class="mb-0">படிப்பு : <span class="font-weight-bold">MBA</span></p>
                                    <p class="mb-0">இராசி : <span class="font-weight-bold">சிம்மம்-மகம்</span></p>
                                    <p class="mb-0">ஜாதகம் : <span class="font-weight-bold">சுத்த ஜாதகம்</span></p>
                                    <p class="mb-0">ஊர் : <span class="font-weight-bold">ஈரோடு</span></p>
                                    <div class="text-center mt-2">
                                        <a class="btn btn-circle btn-sm btn-primary mr-1" href="p/15kwtf4.html"
                                            onclick="">ப்ரொபைல்</a>
                                        <a class="btn btn-circle btn-sm btn-primary ml-1" href="j/15kwtf4.html"
                                            target="_blank" onclick="">ஜாதகம்</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-box">
                        <div class="member-block position-relative overflow-hidden">
                            <img data-lazy="https://ganeshkongumatrimony.com/uploads/profile_images/d0RdFSDAP10NBaZOtABh5eySiu1BwRPvHUZpg9DO45.png"
                                class="img-fit mw-100 h-300px">
                            <div class="w-100 p-3 z-1">
                                <div class="text-center">
                                    <h6 class="font-weight-bold mb-1">ராஜ்குமார்</h6>
                                    <h6 class="text-primary mb-0">GK4443</h6>
                                    <p class="mb-0">வயது : <span class="font-weight-bold">32</span></p>
                                    <p class="mb-0">படிப்பு : <span class="font-weight-bold">Marine</span></p>
                                    <p class="mb-0">இராசி : <span class="font-weight-bold">மகரம்-திருவோணம்</span>
                                    </p>
                                    <p class="mb-0">ஜாதகம் : <span class="font-weight-bold">செவ்வாய் ஜாதகம்</span>
                                    </p>
                                    <p class="mb-0">ஊர் : <span class="font-weight-bold">திருப்பூர்</span></p>
                                    <div class="text-center mt-2">
                                        <a class="btn btn-circle btn-sm btn-primary mr-1" href="p/69gm7g9.html"
                                            onclick="">ப்ரொபைல்</a>
                                        <a class="btn btn-circle btn-sm btn-primary ml-1" href="j/69gm7g9.html"
                                            target="_blank" onclick="">ஜாதகம்</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-box">
                        <div class="member-block position-relative overflow-hidden">
                            <img data-lazy="https://ganeshkongumatrimony.com/uploads/profile_images/e28JcGHyW6BV9ELSjaND1uIbwg6yyZbQHm6JTtZD.jpg"
                                class="img-fit mw-100 h-300px">
                            <div class="w-100 p-3 z-1">
                                <div class="text-center">
                                    <h6 class="font-weight-bold mb-1">சிவசஷாங்க்</h6>
                                    <h6 class="text-primary mb-0">GK4442</h6>
                                    <p class="mb-0">வயது : <span class="font-weight-bold">26</span></p>
                                    <p class="mb-0">படிப்பு : <span class="font-weight-bold">B.E COMPUTER
                                            SCIENCE</span></p>
                                    <p class="mb-0">இராசி : <span class="font-weight-bold">மீனம்-உத்திரட்டாதி</span>
                                    </p>
                                    <p class="mb-0">ஜாதகம் : <span class="font-weight-bold">சுத்த ஜாதகம்</span></p>
                                    <p class="mb-0">ஊர் : <span class="font-weight-bold">கோவை</span></p>
                                    <div class="text-center mt-2">
                                        <a class="btn btn-circle btn-sm btn-primary mr-1" href="p/679rw9r.html"
                                            onclick="">ப்ரொபைல்</a>
                                        <a class="btn btn-circle btn-sm btn-primary ml-1" href="j/679rw9r.html"
                                            target="_blank" onclick="">ஜாதகம்</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-box">
                        <div class="member-block position-relative overflow-hidden">
                            <img data-lazy="https://ganeshkongumatrimony.com/uploads/profile_images/l3UXPnf3XjjCiQi0nGOlPZZcfcMLs0By6SXEDTJB62.png"
                                class="img-fit mw-100 h-300px">
                            <div class="w-100 p-3 z-1">
                                <div class="text-center">
                                    <h6 class="font-weight-bold mb-1">லோகேஷ் குமார்</h6>
                                    <h6 class="text-primary mb-0">GK4435</h6>
                                    <p class="mb-0">வயது : <span class="font-weight-bold">27</span></p>
                                    <p class="mb-0">படிப்பு : <span class="font-weight-bold">Bsc computer
                                            science</span></p>
                                    <p class="mb-0">இராசி : <span class="font-weight-bold">மேஷம்-பரணி</span></p>
                                    <p class="mb-0">ஜாதகம் : <span class="font-weight-bold">சுத்த ஜாதகம்</span></p>
                                    <p class="mb-0">ஊர் : <span class="font-weight-bold">திருப்பூர்</span></p>
                                    <div class="text-center mt-2">
                                        <a class="btn btn-circle btn-sm btn-primary mr-1" href="p/5pu01wh.html"
                                            onclick="">ப்ரொபைல்</a>
                                        <a class="btn btn-circle btn-sm btn-primary ml-1" href="j/5pu01wh.html"
                                            target="_blank" onclick="">ஜாதகம்</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-box">
                        <div class="member-block position-relative overflow-hidden">
                            <img data-lazy="https://ganeshkongumatrimony.com/uploads/profile_images/quWZLYFr2eFoomB6M3He3TmtqB7VUpx6dblX7Mef.jpg"
                                class="img-fit mw-100 h-300px">
                            <div class="w-100 p-3 z-1">
                                <div class="text-center">
                                    <h6 class="font-weight-bold mb-1">ஆனந்தகுமார்</h6>
                                    <h6 class="text-primary mb-0">GK4432</h6>
                                    <p class="mb-0">வயது : <span class="font-weight-bold">34</span></p>
                                    <p class="mb-0">படிப்பு : <span class="font-weight-bold">BE</span></p>
                                    <p class="mb-0">இராசி : <span class="font-weight-bold">மேஷம்-பரணி</span></p>
                                    <p class="mb-0">ஜாதகம் : <span class="font-weight-bold">செவ்வாய் ஜாதகம்</span>
                                    </p>
                                    <p class="mb-0">ஊர் : <span class="font-weight-bold">கோவை</span></p>
                                    <div class="text-center mt-2">
                                        <a class="btn btn-circle btn-sm btn-primary mr-1" href="p/5j9h8d3.html"
                                            onclick="">ப்ரொபைல்</a>
                                        <a class="btn btn-circle btn-sm btn-primary ml-1" href="j/5j9h8d3.html"
                                            target="_blank" onclick="">ஜாதகம்</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- Banner section 1 -->

        <!-- How It Works Section -->

        <!-- Trusted by Millions Section -->

        <!-- New Member Section -->

        <!-- happy Story Section -->
@endsection
