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
                            <div class="tab-pane fade show active" id="quick">
                                <form action="https://ganeshkongumatrimony.com/member-listing" method="GET">
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
                                                        <option value="U">முதல் மணம்</option>
                                                        <option value="R">மறுமணம்</option>
                                                        <option value="FO">முதல் மணம் சம்மதம்</option>
                                                        <option value="SO">மறுமணம் சம்மதம்</option>
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
                                                        <option value="1">கொங்கு வெள்ளாள கவுண்டர்</option>
                                                        <option value="2">கொங்கு வேளாளர் உட்பிரிவு</option>
                                                        <option value="3">கொங்கு வேளாளர் கலப்பு</option>
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
                                                        <option value="1">சுத்த ஜாதகம்</option>
                                                        <option value="2">செவ்வாய் ஜாதகம்</option>
                                                        <option value="3">பரிகார செவ்வாய் ஜாதகம்</option>
                                                        <option value="4">ராகு கேது ஜாதகம்</option>
                                                        <option value="5">ராகு கேது, செவ்வாய்</option>
                                                        <option value="6">சுத்த ஜாதகம் பொருந்தும்</option>
                                                        <option value="7">செவ்வாய் ஜாதகம் பொருந்தும்</option>
                                                        <option value="8">ராகு கேது ஜாதகம் பொருந்தும்</option>
                                                        <option value="9">ராகு கேது, செவ்வாய் பொருந்தும்</option>
                                                        <option value="99">ஜாதகம் இல்லை / ஜாதகம் பார்ப்பதில்லை
                                                        </option>
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
                            <div class="tab-pane fade" id="id_search">
                                <form action="https://ganeshkongumatrimony.com/member-listing" method="GET">
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
                            <div class="tab-pane fade" id="advance">
                                <form action="https://ganeshkongumatrimony.com/member-listing" method="GET">
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
                                                        <option value="U">முதல் மணம்</option>
                                                        <option value="R">மறுமணம்</option>
                                                        <option value="FO">முதல் மணம் சம்மதம்</option>
                                                        <option value="SO">மறுமணம் சம்மதம்</option>
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
                                                        <option selected value="">அனைத்தும்</option>
                                                        <option value="N">சாதாரணம்</option>
                                                        <option value="Y">மாற்றுத் திறனாளி</option>
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
                                                        <option value="1">மெலிதான உடல் அமைப்பு</option>
                                                        <option value="2">சராசரி உடல் அமைப்பு</option>
                                                        <option value="3">லேசான பருமனான உடல் அமைப்பு</option>
                                                        <option value="4">பருமனான உடல் அமைப்பு</option>
                                                        <option value="nm">குறிப்பிடவில்லை</option>
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
                                                        <option value="1">மிகசிகப்பு</option>
                                                        <option value="2">சிகப்பு</option>
                                                        <option value="3">மாநிறம்</option>
                                                        <option value="4">கருப்பு</option>
                                                        <option value="nm">குறிப்பிடவில்லை</option>
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
                                                        <option value="1">கொங்கு வெள்ளாள கவுண்டர்</option>
                                                        <option value="2">கொங்கு வேளாளர் உட்பிரிவு</option>
                                                        <option value="3">கொங்கு வேளாளர் கலப்பு</option>
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
                                                        <option value="2">படிப்பு இல்லை</option>
                                                        <option value="3">படித்துக்கொண்டிருக்கிறார்</option>
                                                        <option value="4">உயர்நிலைக்கு கீழ்</option>
                                                        <option value="5">உயர்நிலை (10th)</option>
                                                        <option value="6">மேல்நிலை (12th)</option>
                                                        <option value="7">இளநிலை பட்டப்படிப்பு</option>
                                                        <option value="8">மேல்நிலை பட்டப்படிப்பு</option>
                                                        <option value="9">மருத்துவ படிப்பு</option>
                                                        <option value="10">பொறியியல் படிப்பு</option>
                                                        <option value="11">பட்டயப்படிப்பு (Diploma or ITI)</option>
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
                                                        <option value="4">அரசு வேலை</option>
                                                        <option value="7">சாப்ட்வேர்</option>
                                                        <option value="3">சுயதொழில்</option>
                                                        <option value="5">தனியார் வேலை</option>
                                                        <option value="8">படித்துக் கொண்டிருக்கிறார்</option>
                                                        <option value="9">பணியில் இல்லை</option>
                                                        <option value="6">மருத்துவர்</option>
                                                        <option value="2">விவசாயம்</option>
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
                                                        <option value="1">தமிழ்நாடு</option>
                                                        <option value="2">வெளிமாநிலம்</option>
                                                        <option value="3">வெளிநாடு </option>
                                                        <option value="4">தமிழ்நாடு சம்மதம்</option>
                                                        <option value="5">வெளிமாநிலம் சம்மதம்</option>
                                                        <option value="6">வெளிநாடு சம்மதம்</option>
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
                                                        <option selected value="3">இந்தியா</option>
                                                        <option value="4">ஆப்கானிஸ்தான்</option>
                                                        <option value="5">அல்பேனியா</option>
                                                        <option value="6">அல்ஜீரியா</option>
                                                        <option value="7">அமெரிக்கன் சமோவா</option>
                                                        <option value="8">அன்டோரா</option>
                                                        <option value="9">அங்கோலா</option>
                                                        <option value="10">அங்குவிலா</option>
                                                        <option value="11">அண்டார்டிகா</option>
                                                        <option value="12">ஆன்டிகுவா & பார்புடா</option>
                                                        <option value="13">அர்ஜென்டினா</option>
                                                        <option value="14">ஆர்மீனியா</option>
                                                        <option value="15">அருபா</option>
                                                        <option value="16">ஆஸ்திரேலியா</option>
                                                        <option value="17">ஆஸ்திரியா</option>
                                                        <option value="18">அஜர்பைஜான்</option>
                                                        <option value="19">பஹாமாஸ்</option>
                                                        <option value="20">பஹ்ரைன்</option>
                                                        <option value="21">பங்களாதேஷ்</option>
                                                        <option value="22">பார்படாஸ்</option>
                                                        <option value="23">பெலாரஸ்</option>
                                                        <option value="24">பெல்ஜியம்</option>
                                                        <option value="25">பெலிஸ்</option>
                                                        <option value="26">பெனின்</option>
                                                        <option value="27">பெர்முடா</option>
                                                        <option value="28">பூட்டான்</option>
                                                        <option value="29">பொலிவியா</option>
                                                        <option value="30">போஸ்னியா & ஹெர்சகோவினா</option>
                                                        <option value="31">போட்ஸ்வானா</option>
                                                        <option value="32">போவெட் தீவு</option>
                                                        <option value="33">Br.Ind.Ocean Terr.</option>
                                                        <option value="34">பிரேசில்</option>
                                                        <option value="35">புருனே</option>
                                                        <option value="36">பல்கேரியா</option>
                                                        <option value="37">புர்கினா பாசோ</option>
                                                        <option value="38">புருண்டி</option>
                                                        <option value="39">கம்போடியா</option>
                                                        <option value="40">கேமரூன்</option>
                                                        <option value="41">கனடா</option>
                                                        <option value="42">காங்கோ</option>
                                                        <option value="43">கேப் வெர்டே</option>
                                                        <option value="44">கேமன் இஸ்.</option>
                                                        <option value="45">மத்திய ஆப்பிரிக்க பிரதிநிதி.</option>
                                                        <option value="46">சாட்</option>
                                                        <option value="47">சிலி</option>
                                                        <option value="48">சீனா</option>
                                                        <option value="49">கிறிஸ்துமஸ் இஸ்.</option>
                                                        <option value="50">கோகோஸ் இஸ்.</option>
                                                        <option value="51">கொலம்பியா</option>
                                                        <option value="52">கொமொரோஸ்</option>
                                                        <option value="53">குக் இஸ்.</option>
                                                        <option value="54">கோஸ்ட்டா ரிக்கா</option>
                                                        <option value="55">கோட் டி 'ஐவோரி</option>
                                                        <option value="56">குரோஷியா</option>
                                                        <option value="57">கியூபா</option>
                                                        <option value="58">சைப்ரஸ்</option>
                                                        <option value="59">செக் பிரதிநிதி.</option>
                                                        <option value="60">டென்மார்க்</option>
                                                        <option value="61">ஜிபூட்டி</option>
                                                        <option value="62">டொமினிகா</option>
                                                        <option value="63">டொமினிகன் பிரதிநிதி.</option>
                                                        <option value="64">கிழக்கு திமோர்</option>
                                                        <option value="65">ஈக்வடார்</option>
                                                        <option value="66">எகிப்து</option>
                                                        <option value="67">எல் சல்வடோர்</option>
                                                        <option value="68">எக்குவடோரியல் கினியா</option>
                                                        <option value="69">எரித்திரியா</option>
                                                        <option value="70">எஸ்டோனியா</option>
                                                        <option value="71">எத்தியோப்பியா</option>
                                                        <option value="72">பால்க்லேண்ட் இஸ்.</option>
                                                        <option value="73">பரோயோ இஸ்.</option>
                                                        <option value="74">பிஜி இஸ்.</option>
                                                        <option value="75">பின்லாந்து</option>
                                                        <option value="76">பிரான்ஸ்</option>
                                                        <option value="77">பிரஞ்சு கயானா</option>
                                                        <option value="78">பிரெஞ்சு பாலினேசியா</option>
                                                        <option value="79">பிரஞ்சு தெற்கு டெர்.</option>
                                                        <option value="80">காபோன்</option>
                                                        <option value="81">காம்பியா</option>
                                                        <option value="82">ஜார்ஜியா</option>
                                                        <option value="83">ஜெர்மனி</option>
                                                        <option value="84">கானா</option>
                                                        <option value="85">ஜிப்ரால்டர்</option>
                                                        <option value="86">கிரீஸ்</option>
                                                        <option value="87">கிரீன்லாந்து</option>
                                                        <option value="88">கிரெனடா</option>
                                                        <option value="89">குவாதலூப்</option>
                                                        <option value="90">குவாம்</option>
                                                        <option value="91">குவாத்தமாலா</option>
                                                        <option value="92">கினியா</option>
                                                        <option value="93">கினியா-பிசாவு</option>
                                                        <option value="94">கயானா</option>
                                                        <option value="95">ஹைட்டி</option>
                                                        <option value="96">ஹார்ட் & மெக்டொனால்ட் இஸ்.</option>
                                                        <option value="97">ஹோண்டுராஸ்</option>
                                                        <option value="98">ஹாங்காங்</option>
                                                        <option value="99">ஹங்கேரி</option>
                                                        <option value="100">ஐஸ்லாந்து</option>
                                                        <option value="101">இந்தோனேசியா</option>
                                                        <option value="102">ஈரான்</option>
                                                        <option value="103">ஈராக்</option>
                                                        <option value="104">அயர்லாந்து</option>
                                                        <option value="105">இஸ்ரேல்</option>
                                                        <option value="106">இத்தாலி</option>
                                                        <option value="107">ஜமைக்கா</option>
                                                        <option value="108">ஜப்பான்</option>
                                                        <option value="109">ஜோர்டான்</option>
                                                        <option value="110">கஜகஸ்தான்</option>
                                                        <option value="111">கென்யா</option>
                                                        <option value="112">கிர்பதி</option>
                                                        <option value="113">கொரியா</option>
                                                        <option value="114">குவைத்</option>
                                                        <option value="115">கிர்கிஸ்தான்</option>
                                                        <option value="116">லாவோஸ்</option>
                                                        <option value="117">லாட்வியா</option>
                                                        <option value="118">லெபனான்</option>
                                                        <option value="119">லெசோதோ</option>
                                                        <option value="120">லைபீரியா</option>
                                                        <option value="121">லிபியா</option>
                                                        <option value="122">லிச்சென்ஸ்டீன்</option>
                                                        <option value="123">லிதுவேனியா</option>
                                                        <option value="124">லக்சம்பர்க்</option>
                                                        <option value="125">மாசிடோனியா</option>
                                                        <option value="126">மடகாஸ்கர்</option>
                                                        <option value="127">மலாவி</option>
                                                        <option value="128">மலேசியா</option>
                                                        <option value="129">மாலத்தீவுகள்</option>
                                                        <option value="130">மாலி</option>
                                                        <option value="131">மால்டா</option>
                                                        <option value="132">மனாக்கோ</option>
                                                        <option value="133">மார்ஷல் இஸ்.</option>
                                                        <option value="134">மார்டினிக்</option>
                                                        <option value="135">மவுரித்தேனியா</option>
                                                        <option value="136">மொரீஷியஸ்</option>
                                                        <option value="137">மயோட்</option>
                                                        <option value="138">மெக்சிகோ</option>
                                                        <option value="139">மைக்ரோனேஷியா</option>
                                                        <option value="140">மால்டோவா</option>
                                                        <option value="141">மங்கோலியா</option>
                                                        <option value="142">மொன்செராட்</option>
                                                        <option value="143">மொராக்கோ</option>
                                                        <option value="144">மொசாம்பிக்</option>
                                                        <option value="145">மியான்மர்</option>
                                                        <option value="146">நமீபியா</option>
                                                        <option value="147">நவுரு</option>
                                                        <option value="148">நேபாளம்</option>
                                                        <option value="149">நெதர்லாந்து</option>
                                                        <option value="150">நெதர்லாந்து அண்டில்லஸ்</option>
                                                        <option value="151">புதிய கலிடோனியா</option>
                                                        <option value="152">நியூசிலாந்து</option>
                                                        <option value="153">நிகரகுவா</option>
                                                        <option value="154">நைஜர்</option>
                                                        <option value="155">நைஜீரியா</option>
                                                        <option value="156">நியு</option>
                                                        <option value="157">நோர்போக் இஸ்.</option>
                                                        <option value="158">வட கொரியா</option>
                                                        <option value="159">வடக்கு மரியானா (யு.எஸ்.டெர்ரிட்டர்)
                                                        </option>
                                                        <option value="160">வடக்கு மரியானா இஸ்.</option>
                                                        <option value="161">நோர்போக் இஸ்.</option>
                                                        <option value="162">நோர்வே</option>
                                                        <option value="163">ஓமான்</option>
                                                        <option value="164">பாகிஸ்தான்</option>
                                                        <option value="165">பலாவ்</option>
                                                        <option value="166">பனாமா</option>
                                                        <option value="167">பப்புவா நியூ கினி</option>
                                                        <option value="168">பராகுவே</option>
                                                        <option value="169">பெரு</option>
                                                        <option value="170">பிலிப்பைன்ஸ்</option>
                                                        <option value="171">பிட்காயின்.</option>
                                                        <option value="172">போலந்து</option>
                                                        <option value="173">போர்ச்சுகல்</option>
                                                        <option value="174">புவேர்ட்டோ ரிக்கோ</option>
                                                        <option value="175">கத்தார்</option>
                                                        <option value="176">ருமேனியா</option>
                                                        <option value="177">ரஷ்யா</option>
                                                        <option value="178">ருவாண்டா</option>
                                                        <option value="179">எஸ்.ஜார்ஜியா & எஸ்.எஸ்.ஐ.</option>
                                                        <option value="180">சமோவா</option>
                                                        <option value="181">சான் மரினோ</option>
                                                        <option value="182">சாவோ டோம் & பிரின்சிபி</option>
                                                        <option value="183">சவூதி அரேபியா</option>
                                                        <option value="184">சுழற்சி</option>
                                                        <option value="185">சீஷெல்ஸ்</option>
                                                        <option value="186">சியரா லியோன்</option>
                                                        <option value="187">சிங்கப்பூர்</option>
                                                        <option value="188">ஸ்லோவாக்கியா</option>
                                                        <option value="189">ஸ்லோவேனியா</option>
                                                        <option value="190">சாலமன் இஸ்.</option>
                                                        <option value="191">சோமாலியா</option>
                                                        <option value="192">தென்னாப்பிரிக்கா</option>
                                                        <option value="193">தென் கொரியா</option>
                                                        <option value="194">ஸ்பெயின்</option>
                                                        <option value="195">இலங்கை</option>
                                                        <option value="196">செயின்ட் ஹெலினா</option>
                                                        <option value="197">செயின்ட் கிட்ஸ் & நெவிஸ்</option>
                                                        <option value="198">செயின்ட் லூசியா</option>
                                                        <option value="199">செயின்ட் பியர் & மிகுவலன்</option>
                                                        <option value="200">செயின்ட் வின்சென்ட் & கிரெனடைன்ஸ்
                                                        </option>
                                                        <option value="201">சூடான்</option>
                                                        <option value="202">சுரினேம்</option>
                                                        <option value="203">ஸ்வால்பார்ட் & ஜே.எம்.ஐ.</option>
                                                        <option value="204">ஸ்வாசிலாந்து</option>
                                                        <option value="205">சுவீடன்</option>
                                                        <option value="206">சுவிட்சர்லாந்து</option>
                                                        <option value="207">சிரியா</option>
                                                        <option value="208">தைவான்</option>
                                                        <option value="209">தஜிகிஸ்தான்</option>
                                                        <option value="210">தான்சானியா</option>
                                                        <option value="211">தாய்லாந்து</option>
                                                        <option value="212">திமோர்-லெஸ்டே</option>
                                                        <option value="213">போவதற்கு</option>
                                                        <option value="214">டோகேலாவ்</option>
                                                        <option value="215">டோங்கா</option>
                                                        <option value="216">டிரினிடாட் & டொபாகோ</option>
                                                        <option value="217">துனிசியா</option>
                                                        <option value="218">துருக்கி</option>
                                                        <option value="219">துர்க்மெனிஸ்தான்</option>
                                                        <option value="220">டர்க்ஸ் & கைகோஸ் இஸ்.</option>
                                                        <option value="221">துவாலு</option>
                                                        <option value="222">யுஎஸ்மினோர் வெளிப்புறம்.</option>
                                                        <option value="223">உகாண்டா</option>
                                                        <option value="224">உக்ரைன்</option>
                                                        <option value="225">ஐக்கிய அரபு நாடுகள்</option>
                                                        <option value="226">யுனைடெட் கிண்டோம்</option>
                                                        <option value="227">அமெரிக்கா</option>
                                                        <option value="228">உருகுவே</option>
                                                        <option value="229">உஸ்பெகிஸ்தான்</option>
                                                        <option value="230">வனடு</option>
                                                        <option value="231">வத்திக்கான் நகர மாநிலம்</option>
                                                        <option value="232">Vcyclezuela</option>
                                                        <option value="233">வியட்நாம்</option>
                                                        <option value="234">விர்ஜின் இஸ். (யு.எஸ்)</option>
                                                        <option value="235">வர்ஜீனியா இஸ். (Br.)</option>
                                                        <option value="236">வாலிஸ் & ஃபுடுனா இஸ்.</option>
                                                        <option value="237">மேற்கு சாஹாரா</option>
                                                        <option value="238">ஏமன்</option>
                                                        <option value="239">யூகோஸ்லாவியா</option>
                                                        <option value="240">சாம்பியா</option>
                                                        <option value="241">ஜிம்பாப்வே</option>
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
                                                    <div class="input-group-prepend"><span
                                                            class="input-group-text"><i
                                                                class="fas fa-map-marker-alt"></i></span></div>
                                                    <select type="select" name="state" id="state"
                                                        class="form-control aiz-selectpicker "
                                                        data-live-search="true" -data-width="auto">
                                                        <option style="display:none" value="">-- Select --
                                                        </option>
                                                        <option selected value="3">தமிழ்நாடு</option>
                                                        <option value="4">அந்தமான் & நிக்கோபார்</option>
                                                        <option value="5">ஆந்திரா</option>
                                                        <option value="6">அருணாச்சல பிரதேசம்</option>
                                                        <option value="7">அசாம்</option>
                                                        <option value="8">பீகார்</option>
                                                        <option value="10">சத்தீஸ்கர்</option>
                                                        <option value="11">சண்டிகர்</option>
                                                        <option value="12">தாத்ரா & நகர் ஹவேலி</option>
                                                        <option value="13">டாமன் & டையு</option>
                                                        <option value="14">டெல்லி</option>
                                                        <option value="15">கோவா</option>
                                                        <option value="16">குஜராத்</option>
                                                        <option value="17">ஹரியானா</option>
                                                        <option value="18">இமாச்சல பிரதேசம்</option>
                                                        <option value="19">ஜம்மு & காஷ்மீர்</option>
                                                        <option value="20">ஜார்க்கண்ட்</option>
                                                        <option value="21">கர்நாடகா</option>
                                                        <option value="22">கேரளா</option>
                                                        <option value="23">லட்சதீப்</option>
                                                        <option value="24">மத்தியப் பிரதேசம்</option>
                                                        <option value="25">மகாராஷ்டிரா</option>
                                                        <option value="26">மணிப்பூர்</option>
                                                        <option value="27">மேகாலயா</option>
                                                        <option value="28">மிசோரம்</option>
                                                        <option value="29">நாகாலாந்து</option>
                                                        <option value="30">ஒரிசா</option>
                                                        <option value="31">பாண்டிச்சேரி</option>
                                                        <option value="32">பஞ்சாப்</option>
                                                        <option value="33">ராஜஸ்தான்</option>
                                                        <option value="34">சிக்கிம்</option>
                                                        <option value="35">திரிபுரா</option>
                                                        <option value="36">உத்தரபிரதேசம்</option>
                                                        <option value="37">உத்தராஞ்சல்</option>
                                                        <option value="38">மேற்கு வங்கம்</option>
                                                        <option value="1">Others</option>
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
                                                    <div class="input-group-prepend"><span
                                                            class="input-group-text"><i
                                                                class="fas fa-map-marker-alt"></i></span></div>
                                                    <select type="select" name="district[]" id="district"
                                                        class="form-control aiz-selectpicker " multiple ""
                                                        data-live-search="true" -data-width="auto">
                                                        <option style="display:none" value="">-- Select --
                                                        </option>
                                                        <option value="3">அரியலூர்</option>
                                                        <option value="4">சென்னை</option>
                                                        <option value="5">கோவை</option>
                                                        <option value="6">கடலூர்</option>
                                                        <option value="7">தர்மபுரி</option>
                                                        <option value="8">திண்டுக்கல்</option>
                                                        <option value="9">ஈரோடு</option>
                                                        <option value="10">காஞ்சிபுரம்</option>
                                                        <option value="11">கன்னியாகுமரி</option>
                                                        <option value="12">கரூர்</option>
                                                        <option value="13">கிருஷ்ணகிரி</option>
                                                        <option value="14">மதுரை</option>
                                                        <option value="15">நாகப்பட்டினம்</option>
                                                        <option value="16">நாமக்கல்</option>
                                                        <option value="17">நீலகிரி</option>
                                                        <option value="18">பெரம்பலூர்</option>
                                                        <option value="19">புதுக்கோட்டை</option>
                                                        <option value="20">புதுக்கோட்டை</option>
                                                        <option value="21">ராமநாதபுரம்</option>
                                                        <option value="22">சேலம்</option>
                                                        <option value="23">சிவகங்கை</option>
                                                        <option value="24">தஞ்சாவூர்</option>
                                                        <option value="25">தேனீ</option>
                                                        <option value="26">தூத்துக்குடி</option>
                                                        <option value="27">திருநெல்வேலி</option>
                                                        <option value="28">திருப்பூர்</option>
                                                        <option value="29">திருவள்ளூர்</option>
                                                        <option value="30">திருவள்ளூர்</option>
                                                        <option value="31">திருவண்ணாமலை</option>
                                                        <option value="32">திருவாரூர்</option>
                                                        <option value="33">திருச்சி</option>
                                                        <option value="34">தூத்துக்குடி</option>
                                                        <option value="35">வேலூர்</option>
                                                        <option value="36">விழுப்புரம்</option>
                                                        <option value="37">விருதுநகர்</option>
                                                        <option value="1">Others</option>
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
                                                    <div class="input-group-prepend"><span
                                                            class="input-group-text"><i
                                                                class="fas fa-caret-down"></i></span></div>
                                                    <select type="select" name="rasi_nakshatra[]"
                                                        id="rasi_nakshatra" class="form-control aiz-selectpicker "
                                                        multiple "" data-live-search="true" -data-width="auto">
                                                        <option style="display:none" value="">-- Select --
                                                        </option>
                                                        <option value="1">மேஷம்-அஸ்வினி</option>
                                                        <option value="2">மேஷம்-பரணி</option>
                                                        <option value="3">மேஷம்-கிருத்திகை</option>
                                                        <option value="4">ரிஷபம்-கிருத்திகை</option>
                                                        <option value="5">ரிஷபம்-ரோகினி</option>
                                                        <option value="6">ரிஷபம்-மிருகசீரிஷம்</option>
                                                        <option value="7">மிதுனம்-மிருகசீரிஷம்</option>
                                                        <option value="8">மிதுனம்-திருவாதிரை</option>
                                                        <option value="9">மிதுனம்-புனர்பூசம்</option>
                                                        <option value="10">கடகம்-புனர்பூசம்</option>
                                                        <option value="11">கடகம்-பூசம்</option>
                                                        <option value="12">கடகம்-ஆயில்யம்</option>
                                                        <option value="13">சிம்மம்-மகம்</option>
                                                        <option value="14">சிம்மம்-பூரம்</option>
                                                        <option value="15">சிம்மம்-உத்திரம்</option>
                                                        <option value="16">கன்னி-உத்திரம்</option>
                                                        <option value="17">கன்னி-ஹஸ்தம்</option>
                                                        <option value="18">கன்னி-சித்திரை</option>
                                                        <option value="19">துலாம்-சித்திரை</option>
                                                        <option value="20">துலாம்-ஸ்வாதி</option>
                                                        <option value="21">துலாம்-விசாகம்</option>
                                                        <option value="22">விருச்சிகம்-விசாகம்</option>
                                                        <option value="23">விருச்சிகம்-அனுசம்</option>
                                                        <option value="24">விருச்சிகம்-கேட்டை</option>
                                                        <option value="25">தனுசு-மூலம்</option>
                                                        <option value="26">தனுசு-பூராடம்</option>
                                                        <option value="27">தனுசு-உத்திராடம்</option>
                                                        <option value="28">மகரம்-உத்திராடம்</option>
                                                        <option value="29">மகரம்-திருவோணம்</option>
                                                        <option value="30">மகரம்-அவிட்டம்</option>
                                                        <option value="31">கும்பம்-அவிட்டம்</option>
                                                        <option value="32">கும்பம்-சதயம்</option>
                                                        <option value="33">கும்பம்-பூரட்டாதி</option>
                                                        <option value="34">மீனம்-பூரட்டாதி</option>
                                                        <option value="35">மீனம்-உத்திரட்டாதி</option>
                                                        <option value="36">மீனம்-ரேவதி</option>
                                                        <option value="37">ஜாதகம் இல்லை / ஜாதகம் பார்ப்பதில்லை
                                                        </option>
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
                                                        <option value="1">சுத்த ஜாதகம்</option>
                                                        <option value="2">செவ்வாய் ஜாதகம்</option>
                                                        <option value="3">பரிகார செவ்வாய் ஜாதகம்</option>
                                                        <option value="4">ராகு கேது ஜாதகம்</option>
                                                        <option value="5">ராகு கேது, செவ்வாய்</option>
                                                        <option value="6">சுத்த ஜாதகம் பொருந்தும்</option>
                                                        <option value="7">செவ்வாய் ஜாதகம் பொருந்தும்</option>
                                                        <option value="8">ராகு கேது ஜாதகம் பொருந்தும்</option>
                                                        <option value="9">ராகு கேது, செவ்வாய் பொருந்தும்</option>
                                                        <option value="99">ஜாதகம் இல்லை / ஜாதகம் பார்ப்பதில்லை
                                                        </option>
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
