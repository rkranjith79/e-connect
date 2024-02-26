@extends('layouts.user')
  
@section('content')
    <section class="py-4 py-lg-5 bg-white">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="row">
                        <div class="col-xl-3">
                            @include("user.member.listing-sidebar")
                        </div>
                        <div class="col-xl-9">
                            <div class="d-flex">
                                <h1 class="h4 fw-600 mb-3 text-body">All Active Members</h1>
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
                                        id="block_id_1981">
                                        <div class="col-md-auto">
                                            <div class="text-center pt-3 pt-md-0">
                                                <img src="{{ $profile->photo }}"
                                                    class="profile-thumb"
                                                    onerror="this.onerror=null;this.src='{{ $profile->photo }}';">
                                                <div class="mt-2">
                                                    <a href="{{ route('user.profile', ['id' => $profile->id]) }}" 
                                                        class="btn btn-primary btn-sm mr-1"><i class="fas fa-user"></i>
                                                        ப்ரொபைல்</a>
                                                    <a href="{{ route('user.jathagam', ['id' => $profile->id]) }}" 
                                                            class="btn btn-primary btn-sm ml-1">ஜாதகம் <i
                                                            class="fas fa-file-invoice"></i></a>
                                                    <a href="https://wa.me/?text=பதிவு எண் : GK4227%0aபெயர் : யாழினி (மருத்துவர்)%0aMDS (Pediatric Dentistry)%0aவயது : 26%0aபிறந்த ஊர் : ஈரோடு%0aதொழில் : MDS (Pediatric Dentistry) final year ( வெளிநாடு  செல்ல சம்மதம் )%0aமாத வருமானம் : 0%0aதுலாம்-ஸ்வாதி%0aபரிகார செவ்வாய் ஜாதகம்%0aசொத்து விபரம்  : நேரில்%0ahttps://ganeshkongumatrimony.com/p/589buen"
                                                        target="_blank"
                                                        class="btn btn-sm btn-success btn-circle px-2 lh-1 ml-2 d-md-none"><i
                                                            class="fab fa-whatsapp"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md position-static d-flex align-items-center">
                                            <span class="absolute-top-right px-2 pt-1 pb-3">
                                                <span class="badge badge-inline badge-success">3003 Gold</span>
                                            </span>
                                            <div class="px-2 px-md-4 pt-4 pb-2 listing-profile flex-grow-1">
                                                <h2 class="h6 fw-600 fs-18 text-primary text-truncate mb-1">
                                                    {{ $profile->title ?? "-"}} 
                                                    <span class="float-right text-primary">GK4227</span></h2>
                                                <div class="form-row pb-1">
                                                    <div class="col-md-6">
                                                        <table>
                                                            <tbody>
                                                                <tr>
                                                                    <td>வயது</td>
                                                                    <td>:</td>
                                                                    <td>{{ $profile->jathagam->age ?? "-"}}</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>நிலை</td>
                                                                    <td>:</td>
                                                                    <td>{{ $profile->marital_status->title ?? "-"}}</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>படிப்பு</td>
                                                                    <td>:</td>
                                                                    <td>{{ $profile->basic->education->title ?? "-"}}</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>பணி</td>
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
                                                                    <td>சாதி</td>
                                                                    <td>:</td>
                                                                    <td>{{ $profile->basic->caste->title ?? "-"}}</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>குலம்</td>
                                                                    <td>:</td>
                                                                    <td>{{ $profile->basic->sub_caste->title ?? "-"}}</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>நட்சத்திரம்</td>
                                                                    <td>:</td>
                                                                    <td>{{ $profile->jathagam->rasi_nakshatra->title ?? "-"}}</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>ஜாதகம்</td>
                                                                    <td>:</td>
                                                                    <td>{{ $profile->jathagam->jathagam->title ?? "-"}}</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                                <div class="row gutters-5 text-center">
                                                    <div class="col">
                                                        <a href="javascript:void(0);" onclick="package_alert()"
                                                            class="text-dark c-pointer">
                                                            <i class="fas fa-user fs-20 text-primary"></i>
                                                            <span class="d-block fs-10">Full Profile</span>
                                                        </a>
                                                    </div>
                                                    <div class="col">
                                                        <a href="javascript:void(0);" onclick="package_alert()"
                                                            class="text-dark c-pointer">
                                                            <i class="fas fa-heart fs-20 text-primary"></i>
                                                            <span class="d-block fs-10">Interest</span>
                                                        </a>
                                                    </div>
                                                    <div class="col">
                                                        <a href="javascript:void(0);" onclick="package_alert()"
                                                            class="text-dark c-pointer">
                                                            <i class="fas fa-list fs-20 text-primary"></i>
                                                            <span class="d-block fs-10">Shortlist</span>
                                                        </a>
                                                    </div>
                                                    <div class="col">
                                                        <a href="javascript:void(0);" onclick="package_alert()"
                                                            class="text-dark c-pointer">
                                                            <i class="fas fa-ban fs-20 text-primary"></i>
                                                            <span class="d-block fs-10">Ignore</span>
                                                        </a>
                                                    </div>
                                                    <div class="col">
                                                        <a href="javascript:void(0);" onclick="package_alert()"
                                                            class="text-dark c-pointer">
                                                            <i class="fas fa-phone-alt fs-20 text-primary"></i>
                                                            <span class="d-block fs-10">View Contact</span>
                                                        </a>
                                                    </div>
                                                    <div class="col d-none d-md-block">
                                                        <a href="https://wa.me/?text=பதிவு எண் : GK4227%0aபெயர் : யாழினி (மருத்துவர்)%0aMDS (Pediatric Dentistry)%0aவயது : 26%0aபிறந்த ஊர் : ஈரோடு%0aதொழில் : MDS (Pediatric Dentistry) final year ( வெளிநாடு  செல்ல சம்மதம் )%0aமாத வருமானம் : 0%0aதுலாம்-ஸ்வாதி%0aபரிகார செவ்வாய் ஜாதகம்%0aசொத்து விபரம்  : நேரில்%0ahttps://ganeshkongumatrimony.com/p/589buen"
                                                            target="_blank" class="text-dark c-pointer">
                                                            <i class="fab fa-whatsapp fs-20 text-primary"></i>
                                                            <span class="d-block fs-10">Share</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @empty 
                                 <h2>No Data Available :)</h2>
                                @endforelse
                            </div>
                            <div class="aiz-pagination">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
