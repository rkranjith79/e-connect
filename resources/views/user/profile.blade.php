@extends('layouts.user')

@section('content')
    <section class="py-3 bg-white">
        <div class="container">
            <div class="form-row">
                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-body text-white text-center bg-primary">
                            <img src="{{ $data['profile']->photo }}"
                                class="img-fit w-auto h-220px mw-100"
                                onerror="this.onerror=null;this.src='{{asset('img/avatar-place.png')}}';">
                            <h3 class="text-white fw-500">{{ $data['profile']->title }}</h3>
                            <h5 class="text-white fw-500">GK4573</h5>
                            <div class="row gutters-5">
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
                            </div>
                            <div class="row gutters-5">
                                <div class="col">
                                    <a href="https://ganeshkongumatrimony.com/j/1pefa5d"
                                        class="btn btn-block btn-profile-action text-center" target="_blank">
                                        <i class="fas fa-file-invoice"></i>
                                        View Jathagam
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
                                    href="#reg-form">Profile Information</a>
                            </div>
                            <div class="tab-content">
                                <div class="tab-pane fade show active view-profile" id="reg-form">
                                    <h4 class="section-title">Basic Information</h4>
                                    <div class="form-row">
                                        <div class="col-md-6">
                                            <table>
                                                <tbody>
                                                    <tr>
                                                        <td>Name</td>
                                                        <td>:</td>
                                                        <td>{{ $data['profile']->title }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Gender</td>
                                                        <td>:</td>
                                                        <td>{{ $data['profile']->gender->title ?? "-" }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Age</td>
                                                        <td>:</td>
                                                        <td>{{ $data['profile']->jathagam->age ?? "-" }}</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="col-md-6">
                                            <table>
                                                <tbody>
                                                    <tr>
                                                        <td>Marital Status</td>
                                                        <td>:</td>
                                                        <td>{{ $data['profile']->marital_status->title ?? "-" }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Registered By</td>
                                                        <td>:</td>
                                                        <td>{{ $data['profile']->registered_by->title ?? "-" }}</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                    <h4 class="section-title">Personal Details</h4>
                                    <div class="form-row">
                                        <div class="col-md-6">
                                            <table>
                                                <tbody>
                                                    <tr>
                                                        <td>Physical Status</td>
                                                        <td>:</td>
                                                        <td>{{ $data['profile']->physical_status->title ?? "-" }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Height</td>
                                                        <td>:</td>
                                                        <td>{{ $data['profile']->height->title ?? "-" }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Weight</td>
                                                        <td>:</td>
                                                        <td>{{ $data['profile']->weight->title ?? "-" }}</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="col-md-6">
                                            <table>
                                                <tbody>
                                                    <tr>
                                                        <td>Body Type</td>
                                                        <td>:</td>
                                                        <td>{{ $data['profile']->body_type->title ?? "-" }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Color</td>
                                                        <td>:</td>
                                                        <td>{{ $data['profile']->color->title ?? "-" }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Blood Group</td>
                                                        <td>:</td>
                                                        <td>{{ $data['profile']->blood_group->title ?? "-" }}</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                    <h4 class="section-title">Religious &amp; Social Background</h4>
                                    <div class="form-row">
                                        <div class="col">
                                            <table>
                                                <tbody>
                                                    <tr>
                                                        <td>Caste</td>
                                                        <td>:</td>
                                                        <td>{{ $data['profile']->basic->caste->title ?? "-" }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Sub-Caste</td>
                                                        <td>:</td>
                                                        <td>{{ $data['profile']->basic->sub_caste->title ?? "-" }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Temple</td>
                                                        <td>:</td>
                                                        <td>{{ $data['profile']->basic->temple ?? "-" }}</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                    <h4 class="section-title">Education &amp; Career</h4>
                                    <div class="form-row">
                                        <div class="col-md-6">
                                            <table>
                                                <tbody>
                                                    <tr>
                                                        <td>Education</td>
                                                        <td>:</td>
                                                        <td>{{ $data['profile']->basic->education->title ?? "-" }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Education Details</td>
                                                        <td>:</td>
                                                        <td>{{ $data['profile']->basic->education_details ?? "-" }}</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="col-md-6">
                                            <table>
                                                <tbody>
                                                    <tr>
                                                        <td>Work</td>
                                                        <td>:</td>
                                                        <td>{{ $data['profile']->basic->work->title ?? "-" }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Work Details</td>
                                                        <td>:</td>
                                                        <td>{{ $data['profile']->basic->work_details ?? "-" }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Work Place</td>
                                                        <td>:</td>
                                                        <td>{{ $data['profile']->basic->work_place->title ?? "-" }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Monthly Income</td>
                                                        <td>:</td>
                                                        <td>{{ $data['profile']->basic->monthly_income ?? "-" }}</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                    <h4 class="section-title">Location</h4>
                                    <div class="form-row">
                                        <div class="col-md-6">
                                            <table>
                                                <tbody>
                                                    <tr>
                                                        <td>Country</td>
                                                        <td>:</td>
                                                        <td>{{ $data['profile']->basic->country->title ?? "-" }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>State</td>
                                                        <td>:</td>
                                                        <td>{{ $data['profile']->basic->state->title ?? "-" }}</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="col-md-6">
                                            <table>
                                                <tbody>
                                                    <tr>
                                                        <td>District</td>
                                                        <td>:</td>
                                                        <td>{{ $data['profile']->basic->district->title ?? "-" }}</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                    <h4 class="section-title">Family Details</h4>
                                    <div class="form-row">
                                        <div class="col-md-6">
                                            <table>
                                                <tbody>
                                                    <tr>
                                                        <td>Father Status</td>
                                                        <td>:</td>
                                                        <td>{{ $data['profile']->basic->father_status->title ?? "-" }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Social Type</td>
                                                        <td>:</td>
                                                        <td>{{ $data['profile']->basic->social_type->title ?? "-" }}</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="col-md-6">
                                            <table>
                                                <tbody>
                                                    <tr>
                                                        <td>Mother Status</td>
                                                        <td>:</td>
                                                        <td>{{ $data['profile']->basic->mother_status->title ?? "-" }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Siblings</td>
                                                        <td>:</td>
                                                        <td>{{ $data['profile']->basic->siblings ?? "-" }}</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                    <h4 class="section-title">Assets and Pavun Details</h4>
                                    <div class="form-row">
                                        <div class="col">
                                            <table>
                                                <tbody>
                                                    <tr>
                                                        <td>Assets Value</td>
                                                        <td>:</td>
                                                        <td>{{ $data['profile']->basic->asset_value->title ?? "-" }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Assets Details (Land House Rent)</td>
                                                        <td>:</td>
                                                        <td style="word-break:break-word;">
                                                            {{ $data['profile']->basic->asset_details ?? "-" }}
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Seimurai (Gold, Car Details)</td>
                                                        <td>:</td>
                                                        <td style="word-break:break-word;">
                                                            {{ $data['profile']->basic->seimurai ?? "-" }}
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                    <h4 class="section-title">Astro Details</h4>
                                    <div class="form-row">
                                        <div class="col-md-6">
                                            <table>
                                                <tbody>
                                                    <tr>
                                                        <td>Rasi - Nakshatra</td>
                                                        <td>:</td>
                                                        <td>{{ $data['profile']->jathagam->rasi_nakshatra->title ?? "-" }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Nakshatra Patham</td>
                                                        <td>:</td>
                                                        <td>{{ $data['profile']->jathagam->nakshatra_patham->title ?? "-" }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Lagnam</td>
                                                        <td>:</td>
                                                        <td>{{ $data['profile']->jathagam->lagnam->title ?? "-" }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Jathagam</td>
                                                        <td>:</td>
                                                        <td>{{ $data['profile']->jathagam->jathagam->title ?? "-" }}</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="col-md-6">
                                            <table>
                                                <tbody>
                                                    <tr>
                                                        <td>Date of Birth</td>
                                                        <td>:</td>
                                                        <td>{{ $data['profile']->jathagam->date_of_birth ?? "-" }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Time of Birth</td>
                                                        <td>:</td>
                                                        <td>{{ $data['profile']->jathagam->time_of_birth ?? "-" }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Day of Birth</td>
                                                        <td>:</td>
                                                        <td>{{ $data['profile']->jathagam->date_of_birth ?? "-" }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Place of Birth</td>
                                                        <td>:</td>
                                                        <td>{{ $data['profile']->jathagam->place_of_birth ?? "-" }}</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                    <div class="row div-astro mt-2">
                                        <div class="col-md-6 mb-1">
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
                                                        <img src="https://ganeshkongumatrimony.com/assets/img/icons/android-icon-72x72.png"
                                                            border="0" class="h-50px w-auto"><br>
                                                        <strong>Rasi</strong>
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
                                                        <img src="https://ganeshkongumatrimony.com/assets/img/icons/android-icon-72x72.png"
                                                            border="0" class="h-50px w-auto"><br>
                                                        <strong>Navamsam</strong>
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
                                                        <td>Birth Dasa Remaining</td>
                                                        <td>:</td>
                                                        <td>{{ $data['profile']->jathagam->birth_dasa_remaining ?? "-" }}</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                    <h4 class="section-title">Expectation</h4>
                                    <div class="form-row">
                                        <div class="col">
                                            <table>
                                                <tbody>
                                                    <tr>
                                                        <td>Jathagam</td>
                                                        <td>:</td>
                                                        <td>{{ $data['profile']->expectation_jathagam_title ?? "-" }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Marital Status</td>
                                                        <td>:</td>
                                                        <td>{{ $data['profile']->expectation_marital_status_title ?? "-" }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Work Place</td>
                                                        <td>:</td>
                                                        <td>{{ $data['profile']->expectation_work_place_title ?? "-" }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Matching Nakshatras</td>
                                                        <td>:</td>
                                                        <td style="word-break:break-word;">
                                                            {{ $data['profile']->expectation_nakshatra ?? "-" }}
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Expectation</td>
                                                        <td>:</td>
                                                        <td style="word-break:break-word;">
                                                            {{ $data['profile']->expectation ?? "-" }}
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
