@extends('layouts.user')

@section('content')
    <iframe style=" height: 1000px; border: none" src="{{ route('user.jathagam_print', ['id' => $data['profile']->id, 'uuid' => $data['profile']->uuid]) }}" frameborder="0"></iframe>


    {{-- <div class="aiz-main-wrapper d-flex flex-column bg-white">
        <div class="print-content" id="full-profile">
            <div id="reg-form" class="view-profile">
                <div class="row">
                    <div class="col">
                        <div class="print-header text-center">
                            <img loading="lazy" src="{{asset('img/logo-e-connet.png')}}" alt="E-connect Matrimony" class="w-auto h-80px">
                            <div class="row">
                                <div class="col-md-6">
                                    <span class="mx-2 float-left"><a href="tel:{{ $data['profile']->basic->phone }}"
                                            class="text-dark"><i class="fas fa-phone-alt text-primary"></i>
                                            {{ $data['profile']->basic->phone }}</a></span>
                                    <span class="span-email mx-2 float-left"><a class="text-dark"><i
                                                class="fas fa-envelope text-primary"></i>
                                            {{ $data['profile']->email ?? '' }}
                                        </a></span>
                                </div>
                                <div class="col-md-6">
                                    <span class="mx-2 float-right"><a href="tel:9894059591"
                                            class="text-dark"><i class="fas fa-phone-alt text-primary"></i>
                                            9894059591</a></span>
                                    <span class="span-email mx-2 float-right"><a class="text-dark"><i
                                                class="fas fa-envelope text-primary"></i>
                                                econnectindia@gmail.com
                                        </a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-row print-info">
                    <div class="col text-left">
                        <p class="mb-0">Profile ID: <span id="profile-id"> {{ $data['profile']->code }}</span></p>
                    </div>
                    <div class="col text-center">
                        <p class="mb-0">Date Reg: {{ __setDateFormat($data['profile']->created_at) }}</p>
                    </div>
                    <div class="col text-right">
                        <p class="mb-0">Printed On: {{ date('d-m-Y') }}</p>
                    </div>
                </div>

                <h4 class="section-title">{{ trans('fields.section_basic') }}</h4>
                <div class="form-row first-row">
                    <div class="col-6 text-center">
                        <img loading="lazy" src="{{ $data['profile']->photo }}" class="profile-thumbnail w-auto mw-100"
                            onerror="this.onerror=null;this.src='{{ asset('img/avatar-place.png') }}';">
                    </div>
                    <div class="col-6">
                        <table>
                            <tbody>
                                <tr>
                                    <td>{{ trans('fields.name') }}</td>
                                    <td>:</td>
                                    <td>{{ $data['profile']->title ?? '-' }}</td>
                                </tr>
                                <tr>
                                    <td>{{ trans('fields.gender') }}</td>
                                    <td>:</td>
                                    <td>{{ $data['profile']->gender->title ?? '-' }}</td>
                                </tr>
                                <tr>
                                    <td>{{ trans('fields.age') }}</td>
                                    <td>:</td>
                                    <td>{{ $data['profile']->jathagam->age ?? '-' }}</td>
                                </tr>
                                <tr>
                                    <td>{{ trans('fields.marital_status') }}</td>
                                    <td>:</td>
                                    <td>{{ $data['profile']->marital_status->title ?? '-' }}</td>
                                </tr>
                                <tr>
                                    <td>{{ trans('fields.registered_by') }}</td>
                                    <td>:</td>
                                    <td>{{ $data['profile']->registered_by->title ?? '-' }}</td>
                                </tr>
                                <tr>
                                    <td>{{ trans('fields.color') }}</td>
                                    <td>:</td>
                                    <td>{{ $data['profile']->color->title ?? '-' }}</td>
                                </tr>
                                <tr>
                                    <td>{{ trans('fields.height') }}</td>
                                    <td>:</td>
                                    <td>{{ $data['profile']->height->title ?? '-' }}</td>
                                </tr>
                                <tr>
                                    <td>{{ trans('fields.weight') }}</td>
                                    <td>:</td>
                                    <td>{{ $data['profile']->weight->title ?? '-' }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <h4 class="section-title">{{ trans('fields.section_religion') }}</h4>
                <div class="form-row">
                    <div class="col-6">
                        <table>
                            <tbody>
                                <tr>
                                    <td>{{ trans('fields.caste') }}</td>
                                    <td>:</td>
                                    <td>{{ $data['profile']->basic->caste->title ?? '-' }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="col-6">
                        <table>
                            <tbody>
                                <tr>
                                    <td>{{ trans('fields.sub_caste') }}</td>
                                    <td>:</td>
                                    <td>{{ $data['profile']->basic->sub_caste->title ?? '-' }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col">
                        <table>
                            <tbody>
                                <tr>
                                    <td>{{ trans('fields.temple') }}</td>
                                    <td>:</td>
                                    <td>{{ $data['profile']->basic->temple ?? '-' }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <h4 class="section-title">{{ trans('fields.section_family') }}</h4>
                <div class="form-row">
                    <div class="col-6">
                        <table>
                            <tbody>
                                <tr>
                                    <td>{{ trans('fields.father_status') }}</td>
                                    <td>:</td>
                                    <td>{{ $data['profile']->basic->father_status->title ?? '-' }}</td>
                                </tr>
                                <tr>
                                    <td>{{ trans('fields.siblings') }}</td>
                                    <td>:</td>
                                    <td>{{ $data['profile']->basic->siblings ?? '-' }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="col-6">
                        <table>
                            <tbody>
                                <tr>
                                    <td>{{ trans('fields.mother_status') }}</td>
                                    <td>:</td>
                                    <td>{{ $data['profile']->basic->mother_status->title ?? '-' }}</td>
                                </tr>
                                <tr>
                                    <td>{{ trans('fields.social_type') }}</td>
                                    <td>:</td>
                                    <td>{{ $data['profile']->basic->social_type->title ?? '-' }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <h4 class="section-title">{{ trans('fields.jathagam') }}</h4>
                <div class="form-row">
                    <div class="col-6">
                        <table>
                            <tbody>
                                <tr>
                                    <td>{{ trans('fields.rasi_nakshatra') }}</td>
                                    <td>:</td>
                                    <td>{{ $data['profile']->jathagam->rasi_nakshatra->title ?? '-' }}</td>
                                </tr>
                                <tr>
                                    <td>{{ trans('fields.nakshatra_patham') }}</td>
                                    <td>:</td>
                                    <td>{{ $data['profile']->jathagam->nakshatra_patham->title ?? '-' }}</td>
                                </tr>
                                <tr>
                                    <td>{{ trans('fields.lagnam') }}</td>
                                    <td>:</td>
                                    <td>{{ $data['profile']->jathagam->lagnam->title ?? '-' }}</td>
                                </tr>
                                <tr>
                                    <td>{{ trans('fields.jathagam') }}</td>
                                    <td>:</td>
                                    <td>{{ $data['profile']->jathagam->jathagam->title ?? '-' }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="col-6">
                        <table>
                            <tbody>
                                <tr>
                                    <td>{{ trans('fields.date_of_birth') }}</td>
                                    <td>:</td>
                                    <td>{{ __setDateFormat($data['profile']->jathagam->date_of_birth) ?? '-' }}
                                    </td>
                                </tr>
                                <tr>
                                    <td>{{ trans('fields.time_of_birth') }}</td>
                                    <td>:</td>
                                    <td>{{ __setTimeFormat($data['profile']->jathagam->time_of_birth) ?? '-' }}
                                    </td>
                                </tr>

                                <tr>
                                    <td>{{ trans('fields.place_of_birth') }}</td>
                                    <td>:</td>
                                    <td>{{ $data['profile']->jathagam->place_of_birth ?? '-' }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="row div-astro mt-2">
                    <div class="col-md-6 mb-1">
                        <table class="tablehoro" border="0" cellpadding="0" cellspacing="0" align="center">
                            <tr>
                                <td>
                                    <p>{{ $data['profile']->jathagam->rasi_title['1'] ?? '' }}</p>
                                </td>
                                <td>
                                    <p>{{ $data['profile']->jathagam->rasi_title['2'] ?? '' }}</p>
                                </td>
                                <td>
                                    <p>{{ $data['profile']->jathagam->rasi_title['3'] ?? '' }}</p>
                                </td>
                                <td>
                                    <p>{{ $data['profile']->jathagam->rasi_title['4'] ?? '' }}</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>{{ $data['profile']->jathagam->rasi_title['5'] ?? '' }}</p>
                                </td>
                                <td rowspan="2" colspan="2">
                                    <img loading="lazy" src="{{asset('img/logo-e-connet.png')}}"
                                        border="0" class="h-50px w-auto"><br>
                                    <strong> {{ trans('fields.rasi') }} </strong>
                                </td>
                                <td>
                                    <p>{{ $data['profile']->jathagam->rasi_title['6'] ?? '' }}</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>{{ $data['profile']->jathagam->rasi_title['7'] ?? '' }}</p>
                                </td>
                                <td>
                                    <p>{{ $data['profile']->jathagam->rasi_title['8'] ?? '' }}</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>{{ $data['profile']->jathagam->rasi_title['9'] ?? '' }}</p>
                                </td>
                                <td>
                                    <p>{{ $data['profile']->jathagam->rasi_title['10'] ?? '' }}</p>
                                </td>
                                <td>
                                    <p>{{ $data['profile']->jathagam->rasi_title['11'] ?? '' }}</p>
                                </td>
                                <td>
                                    <p>{{ $data['profile']->jathagam->rasi_title['12'] ?? '' }}</p>
                                </td>
                            </tr>
                        </table>
                    </div>
                    <div class="col-md-6 mb-1">
                        <table class="tablehoro" border="0" cellpadding="0" cellspacing="0" align="center">
                            <tr>
                                <td>
                                    <p>{{ $data['profile']->jathagam->navamsam_title['1'] ?? '' }}</p>
                                </td>
                                <td>
                                    <p>{{ $data['profile']->jathagam->navamsam_title['2'] ?? '' }}</p>
                                </td>
                                <td>
                                    <p>{{ $data['profile']->jathagam->navamsam_title['3'] ?? '' }}</p>
                                </td>
                                <td>
                                    <p>{{ $data['profile']->jathagam->navamsam_title['4'] ?? '' }}</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>{{ $data['profile']->jathagam->navamsam_title['5'] ?? '' }}</p>
                                </td>
                                <td rowspan="2" colspan="2">
                                    <img loading="lazy" src="{{asset('img/logo-e-connet.png')}}"
                                        border="0" class="h-50px w-auto"><br>
                                    <strong>{{ trans('fields.navamsam') }}</strong>
                                </td>
                                <td>
                                    <p>{{ $data['profile']->jathagam->navamsam_title['6'] ?? '' }}</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>{{ $data['profile']->jathagam->navamsam_title['7'] ?? '' }}</p>
                                </td>
                                <td>
                                    <p>{{ $data['profile']->jathagam->navamsam_title['8'] ?? '' }}</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>{{ $data['profile']->jathagam->navamsam_title['9'] ?? '' }}</p>
                                </td>
                                <td>
                                    <p>{{ $data['profile']->jathagam->navamsam_title['10'] ?? '' }}</p>
                                </td>
                                <td>
                                    <p>{{ $data['profile']->jathagam->navamsam_title['11'] ?? '' }}</p>
                                </td>
                                <td>
                                    <p>{{ $data['profile']->jathagam->navamsam_title['12'] ?? '' }}</p>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>

                <div class="form-row">
                    <div class="col">
                        <table>
                            <tbody>
                                <tr>
                                    <td>{{ trans('fields.birth_dasa_remaining') }}</td>
                                    <td>:</td>
                                    <td>
                                    <td>{{ $data['profile']->jathagam->birth_dasa_remaining ?? '-' }}</td>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <h4 class="section-title">{{ trans('fields.section_education') }}</h4>
                <div class="form-row">
                    <div class="col-6">
                        <table>
                            <tbody>
                                <tr>
                                    <td>{{ trans('fields.education') }}</td>
                                    <td>:</td>
                                    <td>{{ $data['profile']->basic->education->title ?? '-' }}</td>
                                </tr>
                                <tr>
                                    <td>{{ trans('fields.monthly_income') }}</td>
                                    <td>:</td>
                                    <td>{{ $data['profile']->basic->monthly_income ?? '-' }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="col-6">
                        <table>
                            <tbody>
                                <tr>
                                    <td>{{ trans('fields.work') }}</td>
                                    <td>:</td>
                                    <td>{{ $data['profile']->basic->work->title ?? '-' }}</td>
                                </tr>
                                <tr>
                                    <td>{{ trans('fields.work_place') }}</td>
                                    <td>:</td>
                                    <td>{{ $data['profile']->basic->work_place->title ?? '-' }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <h4 class="section-title">{{ trans('fields.section_asset') }}</h4>
                <div class="form-row">
                    <div class="col">
                        <table>
                            <tbody>
                                <tr>
                                    <td>{{ trans('fields.asset_details') }}</td>
                                    <td>:</td>
                                    <td style="word-break:break-word;">
                                        {{ $data['profile']->basic->asset_details ?? '-' }}
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <h4 class="section-title">{{ trans('fields.section_expectation') }}</h4>
                <div class="form-row">
                    <div class="col">
                        <table>
                            <tbody>
                                <tr>
                                    <td>{{ trans('fields.expectation_nakshatra') }}</td>
                                    <td>:</td>
                                    <td style="word-break:break-word;">
                                        {{ $data['profile']->expectation_jathagam_title ?? '-' }}
                                    </td>
                                </tr>
                                <tr>
                                    <td>{{ trans('fields.expectation') }}</td>
                                    <td>:</td>
                                    <td style="word-break:break-word;">
                                        {{ $data['profile']->expectation ?? '-' }}
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>


            </div>
        </div>
    </div> --}}
@endsection
