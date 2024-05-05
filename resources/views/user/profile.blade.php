@extends('layouts.user')

@section('content')
    <section class="py-3 bg-white">
        <div class="container">
            <div class="form-row">
                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-body text-white text-center bg-primary">
                            <img src="{{ $data['profile']->photo ?? null }}" class="img-fit w-auto h-220px mw-100"
                                onerror="this.onerror=null;this.src='{{ asset('img/avatar-place.png') }}';">
                            <h3 class="text-white fw-500">{{ $data['profile']->title ?? '-' }}</h3>
                            <h5 class="text-white fw-500">{{ $data['profile']->code ?? '-' }}</h5>
                            {{-- <div class="row gutters-5">
                                <div class="col">
                                    <a href="javascript:void(0);" onclick="express_interest(2327)"
                                        class="btn btn-block btn-profile-action px-1">
                                        <i class="fas fa-heart"></i>
                                        <span id="interest_id_2327">Express Interest</span>
                                    </a>
                                </div>
                                <div class="col">
                                    <a href="javascript:void(0);" id="shortlist_a_id_2327" onclick="do_shortlist(2327)"
                                        class="btn btn-block btn-profile-action">
                                        <i class="fas fa-list"></i>
                                        <span id="shortlist_id_2327">Shortlist</span>
                                    </a>
                                </div>
                            </div>
                            <div class="row gutters-5">
                                <div class="col">
                                    <a href="javascript:void(0);" onclick="ignore_member(2327)"
                                        class="btn btn-block btn-profile-action">
                                        <i class="fas fa-ban"></i>
                                        Ignore
                                    </a>
                                </div>
                                <div class="col">
                                    <a id="contact_a_id_2327" href="javascript:void(0);" onclick="view_contact(2327)"
                                        class="btn btn-block btn-profile-action">
                                        <i class="fas fa-list"></i>
                                        <span id="contact_id_2327">View Contact</span>
                                    </a>
                                </div>
                            </div> --}}
                            <div class="row gutters-5">
                                <div class="col">
                                    <a href="{{ route('user.jathagam', ['id' => $data['profile']->id, 'uuid' => $data['profile']->uuid]) }}"
                                        class="btn btn-block btn-profile-action text-center" target="_blank">
                                        <i class="fas fa-file-invoice"></i>
                                        {{ trans('site.view_jathagam_button') }}
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="card">
                        <div class="card-body">
                            <div class="nav nav-tabs border-0 mb-3">
                                <a class="btn btn-circle btn-sm btn-primary mr-1 active" data-toggle="tab"
                                    href="#reg-form">{{ trans('site.basic_information') }}</a>
                            </div>
                            <div class="tab-content">
                                <div class="tab-pane fade show active view-profile" id="reg-form">
                                    <h4 class="section-title">{{ trans('site.basic_information') }}</h4>
                                    <div class="form-row">
                                        <div class="col-md-6">
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
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="col-md-6">
                                            <table>
                                                <tbody>
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
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    @if ($data['profile']->purchased)
                                        <div class="purchased-profile-bg p-4">
                                            {{-- <h4 class="">{{ trans('site.native_information') }}</h4> --}}
                                            <div class="form-row">
                                                <div class="col-md-6">
                                                    <table>
                                                        <tbody>
                                                            <tr>
                                                                <td>{{ trans('fields.phone') }}</td>
                                                                <td>:</td>
                                                                <td>{{ $data['profile']->basic->phone ?? '-' }}
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>{{ trans('fields.whatsapp') }}</td>
                                                                <td>:</td>
                                                                <td>{{ $data['profile']->basic->whatsapp ?? '-' }}
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>{{ trans('fields.address') }}</td>
                                                                <td>:</td>
                                                                <td>{{ $data['profile']->basic->address ?? '-' }}</td>
                                                            </tr>

                                                        </tbody>
                                                    </table>
                                                </div>
                                                <div class="col-md-6">
                                                    <table>
                                                        <tbody>
                                                            <tr>
                                                                <td>{{ trans('fields.country') }}</td>
                                                                <td>:</td>
                                                                <td>{{ $data['profile']->basic->country->title ?? '-' }}
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>{{ trans('fields.state') }}</td>
                                                                <td>:</td>
                                                                <td>{{ $data['profile']->basic->state->title ?? '' ?? '-' }}
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>{{ trans('fields.district') }}</td>
                                                                <td>:</td>
                                                                <td>{{ $data['profile']->basic->district->title ?? '' ?? '-' }}
                                                                </td>
                                                            </tr>

                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                    <h4 class="section-title">{{ trans('site.basic_information') }}</h4>
                                    <div class="form-row">
                                        <div class="col-md-6">
                                            <table>
                                                <tbody>
                                                    <tr>
                                                        <td>{{ trans('fields.physical_status') }}</td>
                                                        <td>:</td>
                                                        <td>{{ $data['profile']->physical_status->title ?? '-' }}</td>
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
                                        <div class="col-md-6">
                                            <table>
                                                <tbody>
                                                    <tr>
                                                        <td>{{ trans('fields.body_type') }}</td>
                                                        <td>:</td>
                                                        <td>{{ $data['profile']->body_type->title ?? '-' }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>{{ trans('fields.color') }}</td>
                                                        <td>:</td>
                                                        <td>{{ $data['profile']->color->title ?? '-' }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>{{ trans('fields.blood_group') }}</td>
                                                        <td>:</td>
                                                        <td>{{ $data['profile']->blood_group->title ?? '-' }}</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>



                                    <h4 class="section-title">{{ trans('site.religion_information_view_page') }}</h4>
                                    <div class="form-row">
                                        <div class="col">
                                            <table>
                                                <tbody>
                                                    <tr>
                                                        <td>{{ trans('fields.caste') }}</td>
                                                        <td>:</td>
                                                        <td>{{ $data['profile']->basic->caste->title ?? '-' }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>{{ trans('fields.sub_caste') }}</td>
                                                        <td>:</td>
                                                        <td>{{ $data['profile']->basic->sub_caste->title ?? '-' }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>{{ trans('fields.temple') }}</td>
                                                        <td>:</td>
                                                        <td>{{ $data['profile']->basic->temple ?? '-' }}</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                    <h4 class="section-title">{{ trans('site.education_information_view_page') }}</h4>
                                    <div class="form-row">
                                        <div class="col-md-6">
                                            <table>
                                                <tbody>
                                                    <tr>
                                                        <td>{{ trans('fields.education') }}</td>
                                                        <td>:</td>
                                                        <td>{{ $data['profile']->basic->education->title ?? '-' }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>{{ trans('fields.education_details') }}</td>
                                                        <td>:</td>
                                                        <td>{{ $data['profile']->basic->education_details ?? '-' }}</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="col-md-6">
                                            <table>
                                                <tbody>
                                                    <tr>
                                                        <td>{{ trans('fields.work') }}</td>
                                                        <td>:</td>
                                                        <td>{{ $data['profile']->basic->work->title ?? '-' }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>{{ trans('fields.work_details') }}</td>
                                                        <td>:</td>
                                                        <td>{{ $data['profile']->basic->work_details ?? '-' }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>{{ trans('fields.work_place') }}</td>
                                                        <td>:</td>
                                                        <td>{{ $data['profile']->basic->work_place->title ?? '-' }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>{{ trans('fields.monthly_income') }}</td>
                                                        <td>:</td>
                                                        <td>{{ $data['profile']->basic->monthly_income ?? '-' }}</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                    <h4 class="section-title">{{ trans('site.native_information') }}</h4>
                                    <div class="form-row">
                                        <div class="col-md-6">
                                            <table>
                                                <tbody>
                                                    <tr>
                                                        <td>{{ trans('fields.country') }}</td>
                                                        <td>:</td>
                                                        <td>{{ $data['profile']->basic->country->title ?? '-' }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>{{ trans('fields.state') }}</td>
                                                        <td>:</td>
                                                        <td>{{ $data['profile']->basic->state->title ?? '-' }}</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="col-md-6">
                                            <table>
                                                <tbody>
                                                    <tr>
                                                        <td>{{ trans('fields.district') }}</td>
                                                        <td>:</td>
                                                        <td>{{ $data['profile']->basic->district->title ?? '-' }}</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                    <h4 class="section-title">{{ trans('site.family_information') }}</h4>
                                    <div class="form-row">
                                        <div class="col-md-6">
                                            <table>
                                                <tbody>
                                                    <tr>
                                                        <td>{{ trans('fields.father_status') }}</td>
                                                        <td>:</td>
                                                        <td>{{ $data['profile']->basic->father_status->title ?? '-' }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>{{ trans('fields.social_type') }}</td>
                                                        <td>:</td>
                                                        <td>{{ $data['profile']->basic->social_type->title ?? '-' }}</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="col-md-6">
                                            <table>
                                                <tbody>
                                                    <tr>
                                                        <td>{{ trans('fields.mother_status') }}</td>
                                                        <td>:</td>
                                                        <td>{{ $data['profile']->basic->mother_status->title ?? '-' }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>{{ trans('fields.siblings') }}</td>
                                                        <td>:</td>
                                                        <td>{{ $data['profile']->basic->siblings ?? '-' }}</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                    <h4 class="section-title">{{ trans('site.asset_informtion') }}</h4>
                                    <div class="form-row">
                                        <div class="col">
                                            <table>
                                                <tbody>
                                                    <tr>
                                                        <td>{{ trans('fields.asset_details') }}</td>
                                                        <td>:</td>
                                                        <td>{{ $data['profile']->basic->asset_value->title ?? '-' }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>{{ trans('fields.asset_details') }}</td>
                                                        <td>:</td>
                                                        <td style="word-break:break-word;">
                                                            {{ $data['profile']->basic->asset_details ?? '-' }}
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>{{ trans('fields.seimurai') }}</td>
                                                        <td>:</td>
                                                        <td style="word-break:break-word;">
                                                            {{ $data['profile']->basic->seimurai ?? '-' }}
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                    <h4 class="section-title">{{ trans('site.jathagam_information') }}</h4>
                                    <div class="form-row">
                                        <div class="col-md-6">
                                            <table>
                                                <tbody>
                                                    <tr>
                                                        <td>{{ trans('fields.rasi_nakshatra') }}</td>
                                                        <td>:</td>
                                                        <td>{{ $data['profile']->jathagam->rasi_nakshatra->title ?? '-' }}
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>{{ trans('fields.nakshatra_patham') }}</td>
                                                        <td>:</td>
                                                        <td>{{ $data['profile']->jathagam->nakshatra_patham->title ?? '-' }}
                                                        </td>
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
                                        <div class="col-md-6">
                                            <table>
                                                <tbody>
                                                    <tr>
                                                        <td>{{ trans('fields.age') }}</td>
                                                        <td>:</td>
                                                        <td>{{ $data['profile']->jathagam->age ?? '-' }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>{{ trans('fields.time_of_birth') }}</td>
                                                        <td>:</td>
                                                        <td>{{ __setTimeFormat($data['profile']->jathagam->time_of_birth ?? '') ?? '-' }}
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>{{ trans('fields.date_of_birth') }}</td>
                                                        <td>:</td>
                                                        <td>{{ __setDateFormat($data['profile']->jathagam->date_of_birth ?? '') ?? '-' }}
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
                                        <div class="col-xl-6 col-lg-12 col-sm-12 col-md-12 mb-1">
                                            <table class="tablehoro" border="0" cellpadding="0" cellspacing="0"
                                                align="center">
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
                                                        <img src="{{ asset('img/logo-e-connet.png') }}" border="0"
                                                            class="h-50px w-auto"><br>
                                                        <strong>{{ trans('fields.rasi') }}</strong>
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
                                        <div class="col-xl-6 col-lg-12 col-sm-12 col-md-12 mb-1">
                                            <table class="tablehoro" border="0" cellpadding="0" cellspacing="0"
                                                align="center">
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
                                                        <img src="{{ asset('img/logo-e-connet.png') }}" border="0"
                                                            class="h-50px w-auto"><br>
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
                                                        <p>{{ $data['profile']->jathagam->navamsam_title['10'] ?? '' }}
                                                        </p>
                                                    </td>
                                                    <td>
                                                        <p>{{ $data['profile']->jathagam->navamsam_title['11'] ?? '' }}
                                                        </p>
                                                    </td>
                                                    <td>
                                                        <p>{{ $data['profile']->jathagam->navamsam_title['12'] ?? '' }}
                                                        </p>
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
                                                        <td>{{ $data['profile']->jathagam->birth_dasa_remaining ?? '-' }}
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                    <h4 class="section-title">{{ trans('fields.expectation') }}</h4>
                                    <div class="form-row">
                                        <div class="col">
                                            <table>
                                                <tbody>
                                                    <tr>
                                                        <td>{{ trans('fields.expectation_jathagam') }}</td>
                                                        <td>:</td>
                                                        <td>{{ $data['profile']->expectation_jathagam_title ?? '-' }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>{{ trans('fields.expectation_marital_status') }}</td>
                                                        <td>:</td>
                                                        <td>{{ $data['profile']->expectation_marital_status_title ?? '-' }}
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>{{ trans('fields.expectation_work_place') }}</td>
                                                        <td>:</td>
                                                        <td>{{ $data['profile']->expectation_work_place_title ?? '-' }}
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>{{ trans('fields.expectation_nakshatra') }}</td>
                                                        <td>:</td>
                                                        <td style="word-break:break-word;">
                                                            {{ $data['profile']->expectation_nakshatra ?? '-' }}
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
