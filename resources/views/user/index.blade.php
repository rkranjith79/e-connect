@extends('layouts.user')

@section('content')
    <!-- Homepage Slider Section -->
    <section class="position-relative d-flex home-slider-area">
        <div class="absolute-full">
            <div class="aiz-carousel aiz-carousel-full h-100" data-fade='true' data-infinite='true' data-autoplay='true'>
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
                                <form action="{{ route('user.advancedSearch') }}" method="get">
                                    <div class="row gutters-5">
                                        <div class="col-lg">
                                            <div class="form-group mb-3">
                                                <div class="form-group mb-3">
                                                    <label class="form-label" for="member_id">உறுப்பினர்
                                                        எண்</label>
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
                                        <div class="col-lg">
                                            <div class="form-group mb-3">
                                                <div class="form-group mb-3">
                                                    <label class="form-label" for="gender">பாலினம்</label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend"><span class="input-group-text"><i
                                                                    class="fas fa-caret-down"></i></span></div>
                                                        <select type="select" name="gender" id="gender"
                                                            class="form-control aiz-selectpicker " data-live-search="true"
                                                            -data-width="auto">
                                                            <option style="display:none" value="">-- Select
                                                                --</option>
                                                            @foreach ($data['select']['genders'] as $value => $label)
                                                                <option value="{{ $value }}">{{ $label }}</option>
                                                            @endforeach
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
                                                        <div class="input-group-prepend"><span class="input-group-text"><i
                                                                    class="fas fa-caret-down"></i></span></div>
                                                        <select type="select" name="exp_maritalstatus[]"
                                                            id="exp_maritalstatus" class="form-control aiz-selectpicker "
                                                            multiple "" data-live-search="true" -data-width="auto">
                                                            <option style="display:none" value="">-- Select
                                                                --</option>
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
                                        <div class="col-lg">
                                            <div class="form-group mb-3">
                                                <div class="form-group mb-3">
                                                    <label class="form-label" for="caste">சாதி</label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend"><span class="input-group-text"><i
                                                                    class="fas fa-caret-down"></i></span></div>
                                                        <select type="select" name="caste[]" id="caste"
                                                            class="form-control aiz-selectpicker " multiple ""
                                                            data-live-search="true" -data-width="auto">
                                                            <option style="display:none" value="">-- Select
                                                                --</option>
                                                                @foreach ($data['select']['castes'] as $value => $label)
                                                                <option value="{{ $value }}">{{ $label }}</option>
                                                            @endforeach
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
                                        <div class="col-lg">
                                            <button type="submit" class="btn btn-block btn-primary mt-4">Search</button>
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
<<<<<<< HEAD
                                            {{ trans("site.view_profile_button_2") }}</a>
                                        <a href="{{ route('user.jathagam', ['id' => $profile->id]) }}" 
                                            class="btn btn-circle btn-sm btn-primary mr-1">{{ trans("site.view_jathagam_button_2") }}</a>
=======
                                            ப்ரொபைல்</a>
                                        <a href="{{ route('user.jathagam', ['id' => $profile->id]) }}"
                                            class="btn btn-circle btn-sm btn-primary mr-1">ஜாதகம்</a>
>>>>>>> d95feb6489f70f812f53680ee0d55568c2d20d95
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
<<<<<<< HEAD
                    
                    @endforeach
                </div>
=======
                @endforeach
>>>>>>> d95feb6489f70f812f53680ee0d55568c2d20d95
            </div>



            <div class="aiz-carousel gutters-10 half-outside-arrow py-3" data-items="5" data-xl-items="4"
                data-lg-items="4" data-md-items="3" data-sm-items="2" data-xs-items="1" data-arrows='true'
                data-dots='true' data-infinite='true' data-autoplay='true'>

                @foreach ($data['grooms'] as $profile)
                    <div class="carousel-box">
                        <div class="member-block position-relative overflow-hidden">
                            <img data-lazy="{{ $profile->photo }}" class="img-fit mw-100 h-300px">
                            <div class="w-100 p-3 z-1">
                                <div class="text-center">
                                    <h6 class="font-weight-bold mb-1">{{ $profile->title }}</h6>
                                    <h6 class="text-primary mb-0">{{ $profile->id }}</h6>
                                    <p class="mb-0">வயது : <span
                                            class="font-weight-bold">{{ $profile->jathagam->age ?? '-' }}</span></p>
                                    <p class="mb-0">படிப்பு : <span
                                            class="font-weight-bold">{{ $profile->title ?? '-' }}</span></p>
                                    <p class="mb-0">இராசி : <span
                                            class="font-weight-bold">{{ $profile->jathagam->rasi_nakshatra->title ?? '-' }}</span>
                                    </p>
                                    <p class="mb-0">ஜாதகம் : <span
                                            class="font-weight-bold">{{ $profile->jathagam->jathagam->title ?? '-' }}</span>
                                    </p>
                                    <p class="mb-0">ஊர் : <span
                                            class="font-weight-bold">{{ $profile->basic->district->title ?? '-' }}</span>
                                    </p>
                                    <div class="text-center mt-2">
                                        <a href="{{ route('user.profile', ['id' => $profile->id]) }}"
                                            class="btn btn-circle btn-sm btn-primary mr-1">
                                            ப்ரொபைல்</a>
                                        <a href="{{ route('user.jathagam', ['id' => $profile->id]) }}"
                                            class="btn btn-circle btn-sm btn-primary mr-1">ஜாதகம்</a>
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
