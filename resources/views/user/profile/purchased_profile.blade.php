@extends('layouts.user')

@section('content')
    <div class="py-5 bg-white">
        <div class="container">
            <div id="form_content" class="">
                <div class="d-flex align-items-start">
                    @include('user.profile.sidebar')
                    <div class="aiz-user-panel overflow-hidden">
                        <div class="card">
                            <div id="successMessage" class="" tabindex="0"></div>
                            <div class="card-header">
                                <h5 class="mb-0 h6">Purchased Profiles</h5>
                            </div>
                            <div class="card-body">
                                @forelse ($profile->myPurchasedProfiles as $profile)
                                    @php
                                        $profile = $profile->purchased_profile;
                                    @endphp

                                    @include('user.member.profile')
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
