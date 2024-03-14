@extends('layouts.user')

@section('content')
    <div class="py-5 bg-white">
        <div class="container">
            <div id="form_content" class="row">
                <div class="d-flex align-items-start">
                    @include('user.profile.sidebar')
                    <div class="aiz-user-panel overflow-hidden">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="mb-0 h6">Edit Profile</h5>
                            </div>
                            <div class="card-body">
                                <form class="form-default" id="registration_form" role="form" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-row">
                                        @include('user.registration.profile_photo')
                                        @include('user.registration.profile_horoscope')
                                    </div>
                                    @include('user.registration.basic')
                                    @include('user.registration.personal')
                                    @include('user.registration.religion')
                                    @include('user.registration.education')
                                    @include('user.registration.contact')
                                    @include('user.registration.family')
                                    @include('user.registration.asset')
                                    @include('user.registration.astro')
                                    @include('user.registration.expectation')
                                    <div class="text-center mb-3">
                                        <input type="hidden" name="otp" id="otp">
                                        <button type="button" onclick="submitForm()" class="btn btn-primary">Update <i
                                                class="fas fa-check-square"></i></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
