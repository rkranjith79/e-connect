@extends('layouts.user')

@section('content')
    <section class="py-4 py-lg-5 bg-white">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="row">
                        <div class="col-xl-3">
                            @include('user.member.listing-sidebar')
                        </div>
                        <div class="col-xl-9">
                            <div class="d-flex">
                                <h1 class="h4 fw-600 mb-3 text-body">{{ trans('site.all_member_listing') }}</h1>
                                <div class="d-xl-none ml-auto mb-1 ml-xl-3 mr-0 align-self-end">
                                    <button type="button" class="btn btn-icon p-0" data-toggle="class-toggle"
                                        data-target=".aiz-filter-sidebar">
                                        <i class="fas fa-list fa-2x"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="mb-5">
                                @forelse ($data['profiles'] as $profile)
                                    <div class="row no-gutters border border-gray-300 rounded shadow mb-4 has-transition position-relative"
                                        id="block_id_{{ $profile->id }}">
                                        <div class="col-md-auto">
                                            <div class="text-center pt-3 pt-md-0">
                                                <img src="{{ $profile->photo }}" class="profile-thumb"
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
                                                    {{ $profile->title ?? '-' }}
                                                    <span class="float-right text-primary"></span>
                                                </h2>
                                                <div class="form-row pb-1">
                                                    <div class="col-md-6">
                                                        <table>
                                                            <tbody>
                                                                <tr>
                                                                    <td>{{ trans('fields.age') }}</td>
                                                                    <td>:</td>
                                                                    <td>{{ $profile->jathagam->age ?? '-' }}</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>{{ trans('fields.marital_status') }}</td>
                                                                    <td>:</td>
                                                                    <td>{{ $profile->marital_status->title ?? '-' }}</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>{{ trans('fields.education') }}</td>
                                                                    <td>:</td>
                                                                    <td>{{ $profile->basic->education->title ?? '-' }}</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>{{ trans('fields.work') }}</td>
                                                                    <td>:</td>
                                                                    <td>{{ $profile->basic->work->title ?? '-' }}</td>
                                                                </tr>

                                                                @if ($profile->purchased)
                                                                    <tr>
                                                                        <td>{{ trans('fields.phone') }}</td>
                                                                        <td>:</td>
                                                                        <td class="">
                                                                            {{ $profile->basic->phone ?? '-' }}
                                                                            <span
                                                                                class="text-success fa fa-check px-2"></span>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>{{ trans('fields.whatsapp') }}</td>
                                                                        <td>:</td>
                                                                        <td class="">
                                                                            {{ $profile->basic->whatsapp ?? '-' }}
                                                                            <span
                                                                                class="text-success fa fa-check px-2"></span>
                                                                        </td>
                                                                    </tr>
                                                                @endif
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <table>
                                                            <tbody>
                                                                <tr>
                                                                    <td>{{ trans('fields.caste') }}</td>
                                                                    <td>:</td>
                                                                    <td>{{ $profile->basic->caste->title ?? '-' }}</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>{{ trans('fields.sub_caste') }}</td>
                                                                    <td>:</td>
                                                                    <td>{{ $profile->basic->sub_caste->title ?? '-' }}</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>{{ trans('fields.rasi_nakshatra') }}</td>
                                                                    <td>:</td>
                                                                    <td>{{ $profile->jathagam->rasi_nakshatra->title ?? '-' }}
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>{{ trans('fields.jathagam') }}</td>
                                                                    <td>:</td>
                                                                    <td>{{ $profile->jathagam->jathagam->title ?? '-' }}
                                                                    </td>
                                                                </tr>
                                                                @if ($profile->purchased)
                                                                    <tr>
                                                                        <td>{{ trans('fields.address') }}</td>
                                                                        <td>:</td>
                                                                        <td>{{ $profile->basic->address ?? '-' }}</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>{{ trans('fields.district') }}</td>
                                                                        <td>:</td>
                                                                        <td>{{ $profile->basic->district->title ?? '-' }}
                                                                        </td>
                                                                    </tr>
                                                                @endif
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                                @if (__isProfiledUser())
                                                    <hr>
                                                    <div class="row gutters-5 text-center bg-seconary">
                                                        <div class="col">
                                                            <a href="{{ route('user.profile', ['id' => $profile->id, 'uuid' => $profile->uuid]) }}"
                                                                class="text-dark c-pointer">
                                                                <i class="fas fa-user fs-20 text-success"></i>
                                                                <span
                                                                    class="d-block fs-10 text-success">{{ trans('site.full_profile') }}</span>
                                                            </a>
                                                        </div>
                                                        <div class="col">
                                                            <a href="javascript:void(0);"
                                                                onclick="interestedOrIgnored('interested','{{ $profile->id }}', '{{ $profile->uuid }}', '{{ auth()->user()->profile->id }}', '{{ auth()->user()->profile->uuid }}')"
                                                                class="text-dark c-pointer">
                                                                <i
                                                                    class="fas {{ $profile->interested ? 'fa-heart text-danger' : 'fa-thumbs-up' }}  fs-20"></i>
                                                                <span
                                                                    class="d-block fs-10 {{ $profile->interested ? ' text-danger' : '' }}">
                                                                    {{ $profile->interested ? trans('site.interested') : trans('site.interest') }}</span>
                                                            </a>
                                                        </div>

                                                        <div class="col">
                                                            <a href="javascript:void(0);"
                                                                onclick="interestedOrIgnored('ignored','{{ $profile->id }}', '{{ $profile->uuid }}', '{{ auth()->user()->profile->id }}', '{{ auth()->user()->profile->uuid }}')"
                                                                class="text-dark c-pointer">
                                                                <i
                                                                    class="fas fa-ban fs-20 {{ $profile->ignored ? 'text-danger' : 'text-warning' }}"></i>
                                                                <span
                                                                    class="d-block fs-10 {{ $profile->ignored ? 'text-danger' : 'text-warning' }}">{{ trans('site.ignore') }}</span>
                                                            </a>
                                                        </div>
                                                        <div class="col">
                                                            <a href="javascript:void(0);"
                                                                onclick="checkPurchasedProfile('{{ $profile->id }}', '{{ $profile->uuid }}', '{{ auth()->user()->profile->id }}', '{{ auth()->user()->profile->uuid }}')"
                                                                class="text-dark c-pointer">
                                                                <i
                                                                    class="fas {{ $profile->purchased ? 'fa-phone text-warning' : 'fa-phone' }}  fs-20"></i>
                                                                <span
                                                                    class="d-block fs-10 {{ $profile->purchased ? 'text-warning' : 'text-dark' }}">{{ trans('site.view_contact') }}</span>
                                                            </a>
                                                        </div>
                                                        <div class="col">
                                                            <a href="https://wa.me/?{{ $profile->whatsappData }}"
                                                                target="_blank" class="text-dark c-pointer">
                                                                <i class="fab fa-whatsapp fs-20 text-success"></i>
                                                                <span
                                                                    class="d-block fs-10 text-success">{{ trans('site.share') }}</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                @empty
                                    <h2>{{ trans('site.no_data_available') }}</h2>
                                @endforelse
                            </div>
                            <div class="aiz-pagination text-center">
                                @guest
                                    <h1 class="h3 text-primary mb-0">{{ trans('site.create_your_account') }}</h1>
                                    <p>{{ trans('site.create_your_account_sub_label') }}</p>
                                    <a class="btn btn-sm btn-primary text-white fw-600 py-1 border"
                                        href="{{ route('registers') }}">{{ trans('site.registration') }}</a>
                                @endguest

                                {{ $data['profiles']->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
