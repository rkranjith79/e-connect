@extends('layouts.user')

@section('content')
    <div class="py-5 bg-white">
        <div class="container">
            <div id="form_content" class="row">
                <div class="d-flex align-items-start">
                    @include('user.profile.sidebar')
                    <div class="aiz-user-panel overflow-hidden">
                        <div class="card">
                            <div id="successMessage" class="" tabindex="0"></div>
                            <div class="card-header">
                                <h5 class="mb-0 h6">Interested Profile</h5>
                            </div>
                            <div class="card-body">
                              @forelse ($profile->myInterestedProfiles as $profile)
                                    @php
                                        $profile = $profile->interestedProfile;
                                    @endphp
                                    <div class="row no-gutters border border-gray-300 rounded shadow mb-4 has-transition position-relative"
                                        id="block_id_{{ $profile->id }}">
                                        <div class="col-md-auto">
                                            <div class="text-center pt-3 pt-md-0">
                                                <img src="{{ $profile->photo }}"
                                                    class="profile-thumb"
                                                    onerror="this.onerror=null;this.src='{{ $profile->photo }}';">
                                                <div class="mt-2">
                                                    <a href="{{ route('user.profile', ['id' => $profile->id, 'uuid' => $profile->uuid]) }}"
                                                        class="btn btn-primary btn-sm mr-1">
                                                        {{-- <i class="fas fa-user"></i> --}}
                                                        {{ trans('site.view_profile_button') }}</a>
                                                    <a href="{{ route('user.jathagam', ['id' => $profile->id, 'uuid' => $profile->uuid]) }}"
                                                            class="btn btn-primary btn-sm ml-1">
                                                            {{ trans('site.view_jathagam_button') }}
                                                            {{-- <i class="fas fa-file-invoice"></i> --}}
                                                        </a>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md position-static d-flex align-items-center">
                                            <span class="absolute-top-right px-2 pt-1 pb-3">
                                                <span class="badge badge-inline badge-success">{{ $profile->code }}</span>
                                            </span>
                                            <div class="px-2 px-md-4 pt-4 pb-2 listing-profile flex-grow-1">
                                                <h2 class="h6 fw-600 fs-18 text-primary text-wrap mb-1">
                                                    {{ $profile->title ?? "-"}}
                                                    <span class="float-right text-primary"></span></h2>
                                                <div class="form-row pb-1">
                                                    <div class="col-md-6">
                                                        <table>
                                                            <tbody>
                                                                <tr>
                                                                    <td>{{ trans('fields.age') }}</td>
                                                                    <td>:</td>
                                                                    <td>{{ $profile->jathagam->age ?? "-"}}</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>{{ trans('fields.marital_status') }}</td>
                                                                    <td>:</td>
                                                                    <td>{{ $profile->marital_status->title ?? "-"}}</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>{{ trans('fields.education') }}</td>
                                                                    <td>:</td>
                                                                    <td>{{ $profile->basic->education->title ?? "-"}}</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>{{ trans('fields.work') }}</td>
                                                                    <td>:</td>
                                                                    <td>{{ $profile->basic->work->title ?? "-"}}</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <table>
                                                            <tbody>
                                                                <tr>
                                                                    <td>{{ trans('fields.caste') }}</td>
                                                                    <td>:</td>
                                                                    <td>{{ $profile->basic->caste->title ?? "-"}}</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>{{ trans('fields.sub_caste') }}</td>
                                                                    <td>:</td>
                                                                    <td>{{ $profile->basic->sub_caste->title ?? "-"}}</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>{{ trans('fields.rasi_nakshatra') }}</td>
                                                                    <td>:</td>
                                                                    <td>{{ $profile->jathagam->rasi_nakshatra->title ?? "-"}}</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>{{ trans('fields.jathagam') }}</td>
                                                                    <td>:</td>
                                                                    <td>{{ $profile->jathagam->jathagam->title ?? "-"}}</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                                @auth
                                                <hr>
                                                <div class="row gutters-5 text-center bg-seconary">
                                                    <div class="col">
                                                        <a href="{{ route('user.profile', ['id' => $profile->id, 'uuid' => $profile->uuid]) }}"
                                                            class="text-dark c-pointer">
                                                            <i class="fas fa-user fs-20 text-success"></i>
                                                            <span class="d-block fs-10 text-success">{{ trans('site.full_profile') }}</span>
                                                        </a>
                                                    </div>
                                                    <div class="col">
                                                        <a href="javascript:void(0);" onclick="interestedOrIgnored('interested','{{ $profile->id }}', '{{ $profile->uuid }}', '{{ auth()->user()->profile->id }}', '{{ auth()->user()->profile->uuid }}')"
                                                            class="text-dark c-pointer">
                                                            <i class="fas {{ $profile->interested ? 'fa-heart text-danger' : 'fa-thumbs-up' }}  fs-20"></i>
                                                            <span class="d-block fs-10 {{ $profile->interested ? ' text-danger' : '' }}"> {{ $profile->interested ?  trans('site.interested') : trans('site.interest') }}</span>
                                                        </a>
                                                    </div>
                                                    <div class="col d-none d-md-block">
                                                        <a href="https://wa.me/?{{ $profile->whatsappData }}"
                                                            target="_blank" class="text-dark c-pointer">
                                                            <i class="fab fa-whatsapp fs-20 text-success"></i>
                                                            <span class="d-block fs-10 text-success">{{ trans('site.share') }}</span>
                                                        </a>
                                                    </div>
                                                </div>
                                                @endauth
                                            </div>
                                        </div>
                                    </div>
                                @empty
                                 <h2>{{ trans('site.no_data_available') }}</h2>
                                @endforelse
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
