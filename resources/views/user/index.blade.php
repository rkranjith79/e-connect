@extends('layouts.user')

@section('content')
    <!-- Homepage Slider Section -->
    <section class="position-relative d-flex home-slider-area">
        <div class="absolute-full">
            <div class="aiz-carousel aiz-carousel-full h-100" data-fade='true' data-infinite='true' data-autoplay='true'>
                <img loading="lazy" class="img-fit" src="{{ asset('img/2.png') }}">
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
                                                    <label class="form-label"
                                                        for="member_id">{{ trans('fields.member_id') }}</label>
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
                                                    <label class="form-label"
                                                        for="gender">{{ trans('fields.gender') }}</label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend"><span class="input-group-text"><i
                                                                    class="fas fa-caret-down"></i></span></div>
                                                        <select type="select" name="gender" id="gender"
                                                            class="form-control aiz-selectpicker " data-live-search="true"
                                                            -data-width="auto">
                                                            <option style="display:none" value="">-- Select
                                                                --</option>
                                                            @foreach ($data['select']['genders'] as $value => $label)
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
                                        <div class="col-lg">
                                            <div class="form-group mb-3">
                                                <div class="form-group mb-3">
                                                    <label class="form-label"
                                                        for="exp_maritalstatus">{{ trans('fields.marital_status') }}</label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend"><span class="input-group-text"><i
                                                                    class="fas fa-caret-down"></i></span></div>
                                                        <select type="select" name="exp_maritalstatus[]"
                                                            id="exp_maritalstatus" class="form-control aiz-selectpicker "
                                                            multiple "" data-live-search="true" -data-width="auto">
                                                            <option style="display:none" value="">-- Select
                                                                --</option>
                                                            @foreach ($data['select']['marital_statuses'] as $value => $label)
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
                                        <div class="col-lg">
                                            <div class="form-group mb-3">
                                                <div class="form-group mb-3">
                                                    <label class="form-label"
                                                        for="caste">{{ trans('fields.caste') }}</label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend"><span class="input-group-text"><i
                                                                    class="fas fa-caret-down"></i></span></div>
                                                        <select type="select" name="caste[]" id="caste"
                                                            class="form-control aiz-selectpicker " multiple ""
                                                            data-live-search="true" -data-width="auto">
                                                            <option style="display:none" value="">-- Select
                                                                --</option>
                                                            @foreach ($data['select']['castes'] as $value => $label)
                                                                <option value="{{ $label['id'] }}">{{ $label['title'] }}
                                                                </option>
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
                                                <label class="form-label"
                                                    for="sub_caste">{{ trans('fields.sub_caste') }}</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend"><span class="input-group-text"><i
                                                                class="fas fa-caret-down"></i></span></div>
                                                    <select type="select" name="sub_caste[]" id="sub_caste"
                                                        class="form-control aiz-selectpicker " multiple ""
                                                        data-live-search="true" -data-width="auto">
                                                        {{-- <option style="display:none" value="">-- Select --
                                                        </option>
                                                        @foreach ($data['select']['sub_castes'] as $value => $label)
                                                            <option value="{{ $label['id'] }}">{{ $label['title'] }}
                                                            </option>
                                                        @endforeach --}}
                                                    </select>
                                                </div>
                                                <small class="form-text text-muted text-help"></small>
                                                <span class="invalid-feedback"></span>
                                            </div>
                                        </div>
                                        <div class="col-lg">
                                            <button type="submit"
                                                class="btn btn-block btn-primary mt-4">{{ trans('site.view_search_button_2') }}</button>
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
                    <div class="text-center section-title ">
                        <h2 class="fw-600 mb-3 text-dark"> {{ trans('site.new_members') }} </h2>
                        <p class="fw-400 fs-16 opacity-60">{{ trans('site.new_members_sub') }}</p>
                    </div>
                </div>
            </div>

            <div id="form_content">
                <h4 class="section-title mb-2">Brides</h4>
                <div class="aiz-carousel gutters-10 half-outside-arrow pb-3" data-items="4" data-xl-items="3"
                    data-lg-items="4" data-md-items="3" data-sm-items="2" data-xs-items="1" data-arrows='true'
                    data-dots='true' data-infinite='true' data-autoplay='true'>

                    @foreach ($data['brides'] as $profile)
                        <div class="carousel-box">
                            <div class="member-block position-relative overflow-hidden">
                                <img loading="lazy" data-lazy="{{ $profile->photo ?? '' }}"
                                    class="img-fit mw-100 h-125px img-fit-carousel">
                                <div class="w-100 p-3 z-1">
                                    <div class="text-center">
                                        <h6 class="font-weight-bold mb-1">{{ $profile->name_display ?? '-' }}</h6>
                                        <h6 class="text-primary mb-0">{{ $profile->code ?? '-' }}</h6>
                                        <p class="mb-0">{{ trans('fields.age') }} : <span
                                                class="font-weight-bold">{{ $profile->jathagam->age ?? '-' }}</span></p>
                                        <p class="mb-0">{{ trans('fields.education') }} : <span
                                                class="font-weight-bold">{{ $profile->basic->education->title ?? '-' }}</span>
                                        </p>
                                        <p class="mb-0">{{ trans('fields.rasi') }} : <span
                                                class="font-weight-bold">{{ $profile->jathagam->rasi_nakshatra->title ?? '-' }}</span>
                                        </p>
                                        <p class="mb-0">{{ trans('fields.jathagam') }} : <span
                                                class="font-weight-bold">{{ $profile->jathagam->jathagam->title ?? '-' }}</span>
                                        </p>
                                        <p class="mb-0">{{ trans('fields.district') }} : <span
                                                class="font-weight-bold">{{ $profile->basic->district->title ?? '-' }}</span>
                                        </p>
                                        <div class="text-center mt-2">
                                            <a href="{{ route('user.profile', ['id' => $profile->id, 'uuid' => $profile->uuid]) }}"
                                                class="btn btn-circle btn-sm btn-primary mr-1">
                                                {{ trans('site.view_profile_button_2') }}</a>
                                            <a href="{{ route('user.jathagam', ['id' => $profile->id, 'uuid' => $profile->uuid]) }}"
                                                class="btn btn-circle btn-sm btn-primary mr-1">{{ trans('site.view_jathagam_button_2') }}</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                <h4 class="section-title mt-5 mb-2">Grooms</h4>

                <div class="aiz-carousel gutters-10 half-outside-arrow py-3" data-items="4" data-xl-items="3"
                    data-lg-items="4" data-md-items="3" data-sm-items="2" data-xs-items="1" data-arrows='true'
                    data-dots='true' data-infinite='true' data-autoplay='true'>

                    @foreach ($data['grooms'] as $profile)

                        <div class="carousel-box">
                            <div class="member-block position-relative overflow-hidden">
                                <img loading="lazy" data-lazy="{{ $profile->photo ?? '' }}"
                                    class="img-fit img-fit-carousel mw-100 h-125px">
                                <div class="w-100 p-3 z-1">
                                    <div class="text-center">
                                        <h6 class="font-weight-bold mb-1">{{ $profile->name_display ?? '-' }}</h6>
                                        <h6 class="text-primary mb-0">{{ $profile->code ?? '-' }}</h6>
                                        <p class="mb-0">{{ trans('fields.age') }} : <span
                                                class="font-weight-bold">{{ $profile->jathagam->age ?? '-' }}</span></p>
                                        <p class="mb-0">{{ trans('fields.education') }} : <span
                                                class="font-weight-bold">{{ $profile->basic->education->title ?? '-' }}</span>
                                        </p>
                                        <p class="mb-0">{{ trans('fields.rasi') }} : <span
                                                class="font-weight-bold">{{ $profile->jathagam->rasi_nakshatra->title ?? '-' }}</span>
                                        </p>
                                        <p class="mb-0">{{ trans('fields.jathagam') }} : <span
                                                class="font-weight-bold">{{ $profile->jathagam->jathagam->title ?? '-' }}</span>
                                        </p>
                                        <p class="mb-0">{{ trans('fields.district') }} : <span
                                                class="font-weight-bold">{{ $profile->basic->district->title ?? '-' }}</span>
                                        </p>
                                        <div class="text-center mt-2">
                                            <a href="{{ route('user.profile', ['id' => $profile->id, 'uuid' => $profile->uuid]) }}"
                                                class="btn btn-circle btn-sm btn-primary mr-1">
                                                {{ trans('site.view_profile_button_2') }}</a>
                                            <a href="{{ route('user.jathagam', ['id' => $profile->id, 'uuid' => $profile->uuid]) }}"
                                                class="btn btn-circle btn-sm btn-primary mr-1">{{ trans('site.view_jathagam_button_2') }}</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

        </div>


        </div>
    </section>

    <style>
        .img-fit-carousel {
            height: 300px !important;
        }
    </style>
    <script src="{{ asset('js/jquery.js')}}"></script>
    <script>
        $('#caste').change(function() {
            var casteIds = $(this).val();
            // console.log(casteIds);
            $.ajax({
                url: '/sub_caste',
                type: 'GET',
                dataType: 'json',
                data :{
                    'caste_id': casteIds
                } ,
                success: function(data) {
                    $('#sub_caste').empty();
                    $('#sub_caste').append('<option value="">-- Select --</option>');
                    $.each(data, function(id, title) {
                        $('#sub_caste').append('<option value="' + id + '">' + title +
                            '</option>');
                    });
                    $('#sub_caste').selectpicker('refresh');
                },
                error: function(xhr, status, error) {
                    console.error(xhr.responseText);
                }
            });
        });
    </script>
@endsection
