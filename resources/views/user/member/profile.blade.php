<div class="border border-gray-300 rounded shadow mb-4 has-transition position-relative">
    <div class="row no-gutters 
                                        @if ($profile->purchased) purchased-profile-bg 
                                        @elseif ($profile->interested)
                                        interested-profile-bg @endif
                                        "
        id="block_id_{{ $profile->id }}" style="
                                     ">
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
                                    <td>{{ $profile->marital_status->title ?? '-' }}
                                    </td>
                                </tr>
                                <tr>
                                    <td>{{ trans('fields.education') }}</td>
                                    <td>:</td>
                                    <td>{{ $profile->basic->education->title ?? '-' }}
                                    </td>
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
                                            <span class="text-success fa fa-check px-2"></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>{{ trans('fields.whatsapp') }}</td>
                                        <td>:</td>-
                                        <td class="">
                                            {{ $profile->basic->whatsapp ?? '-' }}
                                            <span class="text-success fa fa-check px-2"></span>
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
                                    <td>{{ $profile->basic->sub_caste->title ?? '-' }}
                                    </td>
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

            </div>
        </div>
    </div>
    @if (__isProfiledUser())
        <hr class="m-0">
        <div
            class="row gutters-5 text-center bg-seconary m-0 p-2
                                           
                                        @if ($profile->purchased) bg-primary
                                        @else @endif
                                            ">




            <div class="col">
                <a href="{{ route('user.profile', ['id' => $profile->id, 'uuid' => $profile->uuid]) }}"
                    class="text-dark c-pointer">
                    <i class="fas fa-user fs-20 text-success"></i>
                    <span class="d-block fs-10 text-success">{{ trans('site.full_profile') }}</span>
                </a>
            </div>
            <div class="col">
                <a href="javascript:void(0);"
                    onclick="interestedOrIgnored('interested','{{ $profile->id }}', '{{ $profile->uuid }}', '{{ auth()->user()->profile->id }}', '{{ auth()->user()->profile->uuid }}')"
                    class="text-dark c-pointer">
                    <i class="fas {{ $profile->interested ? 'fa-heart text-danger' : 'fa-thumbs-up' }}  fs-20"></i>
                    <span class="d-block fs-10 {{ $profile->interested ? ' text-danger' : '' }}">
                        {{ $profile->interested ? trans('site.interested') : trans('site.interest') }}</span>
                </a>
            </div>

            <div class="col">
                <a href="javascript:void(0);"
                    onclick="interestedOrIgnored('ignored','{{ $profile->id }}', '{{ $profile->uuid }}', '{{ auth()->user()->profile->id }}', '{{ auth()->user()->profile->uuid }}')"
                    class="text-dark c-pointer">
                    <i class="fas fa-ban fs-20 {{ $profile->ignored ? 'text-danger' : 'text-warning' }}"></i>
                    <span
                        class="d-block fs-10 {{ $profile->ignored ? 'text-danger' : 'text-warning' }}">{{ trans('site.ignore') }}</span>
                </a>
            </div>
            <div class="col">
                @if (config('siteconfigrations.payment_mode') == "none")
                    <a href="https://wa.me/?phone={{ __getSiteConfigration('help_line') }}&text=I am interested in this profile details, {{ $profile->whatsappData }}" target="_blank" class="text-dark c-pointer">
                        <i class="fas {{ $profile->purchased ? 'fa-phone text-warning' : 'fa-phone' }}  fs-20"></i>
                        <span class="d-block fs-10 {{ $profile->purchased ? 'text-warning' : 'text-dark' }}">{{ trans('site.view_contact') }}</span>
                        </a>
                @else
                    <a href="javascript:void(0);"
                        onclick="checkPurchasedProfile('{{ $profile->id }}', '{{ $profile->uuid }}', '{{ auth()->user()->profile->id }}', '{{ auth()->user()->profile->uuid }}')"
                        class="text-dark c-pointer">
                        <i class="fas {{ $profile->purchased ? 'fa-phone text-warning' : 'fa-phone' }}  fs-20"></i>
                        <span class="d-block fs-10 {{ $profile->purchased ? 'text-warning' : 'text-dark' }}">{{ trans('site.view_contact') }}</span>
                    </a>
                @endif
               
            </div>
            <div class="col">
                <a href="https://wa.me/?{{ $profile->whatsappData }}" target="_blank" class="text-dark c-pointer">
                    <i class="fab fa-whatsapp fs-20 text-success"></i>
                    <span class="d-block fs-10 text-success">{{ trans('site.share') }}</span>
                </a>
            </div>
        </div>
    @endif
</div>
