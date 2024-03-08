@extends('layouts.user')

@section('content')
    <style>
        #form_content label.form-label {
            color: #000;
        }

        #form_content label.form-label {
            text-shadow: 1px 2px 12px #5e5252;
        }

        #form_content .section-title {
            color: #fff;
            text-align: center;
            font-weight: bold;
            background: var(--hov-primary);
            background: linear-gradient(225deg, var(--primary) 0%, var(--secondary) 100%);
            border-radius: 5px;
            padding: 3px 0;
            margin: 10px 0;
            font-size: 1.25rem;
        }
    </style>
    <div class="container">
        <div class="d-flex align-items-start">
            <div class="aiz-user-sidenav-wrap pt-4 sticky-top c-scrollbar-light position-relative z-1 shadow-none">
                <div class="absolute-top-left d-xl-none">
                    <button class="btn btn-sm p-2" data-toggle="class-toggle" data-target=".aiz-mobile-side-nav"
                        data-same=".mobile-side-nav-thumb">
                        <i class="fas fa-times fa-2x"></i>
                    </button>
                </div>
                <div class="aiz-user-sidenav rounded overflow-hidden">
                    <div class="px-4 text-center mb-4">
                        <span class="avatar avatar-md mb-3">
                            <img src="https://ganeshkongumatrimony.com/uploads/profile_images/GtzeTt7nQfm7peOmALRDMuCjmISsTeU4NyIPdQIQ.png"
                                onerror="this.onerror=null;this.src='https://ganeshkongumatrimony.com/assets/img/avatar-place.png';">
                        </span>
                        <h4 class="h5 fw-600">KAVI KALIDASS </h4>
                    </div>
                    <div class="text-center mb-3 px-3">
                        <a href="https://ganeshkongumatrimony.com/p/2hseiew" class="btn btn-block btn-soft-primary"><i
                                class="fas fa-user"></i> My Profile</a>
                    </div>

                    <div class="sidemnenu mb-3">
                        <ul class="aiz-side-nav-list metismenu" data-toggle="aiz-side-menu">
                            <li class="aiz-side-nav-item">
                                <a href="https://ganeshkongumatrimony.com/dashboard" class="aiz-side-nav-link ">
                                    <i class="fas fa-tachometer-alt aiz-side-nav-icon"></i>
                                    <span class="aiz-side-nav-text">Dashboard</span>
                                </a>
                            </li>
                            <li class="aiz-side-nav-item">
                                <a href="https://ganeshkongumatrimony.com/edit-photo" class="aiz-side-nav-link">
                                    <i class="fas fa-camera aiz-side-nav-icon"></i>
                                    <span class="aiz-side-nav-text">Edit Photo</span>
                                </a>
                            </li>
                            <li class="aiz-side-nav-item mm-active">
                                <a href="https://ganeshkongumatrimony.com/profile-settings" class="aiz-side-nav-link active"
                                    aria-expanded="true">
                                    <i class="fas fa-pen aiz-side-nav-icon"></i>
                                    <span class="aiz-side-nav-text">Edit Profile</span>
                                </a>
                            </li>
                            <li class="aiz-side-nav-item">
                                <a href="https://ganeshkongumatrimony.com/my-event-registrations" class="aiz-side-nav-link">
                                    <i class="fas fa-ticket-alt aiz-side-nav-icon"></i>
                                    <span class="aiz-side-nav-text">My Event Registrations</span>
                                </a>
                            </li>
                            <li class="aiz-side-nav-item">
                                <a href="https://ganeshkongumatrimony.com/gallery-image" class="aiz-side-nav-link">
                                    <i class="fas fa-image aiz-side-nav-icon"></i>
                                    <span class="aiz-side-nav-text">Gallery</span>
                                </a>
                            </li>
                            <li class="aiz-side-nav-item">
                                <a href="https://ganeshkongumatrimony.com/happy-story/create" class="aiz-side-nav-link">
                                    <i class="fas fa-handshake aiz-side-nav-icon"></i>
                                    <span class="aiz-side-nav-text">My Happy Story</span>
                                </a>
                            </li>
                            <li class="aiz-side-nav-item">
                                <a href="javascript:void(0);" class="aiz-side-nav-link">
                                    <i class="fas fa-shopping-basket aiz-side-nav-icon"></i>
                                    <span class="aiz-side-nav-text">Packages</span>
                                    <span class="aiz-side-nav-arrow"></span>
                                </a>
                                <ul class="aiz-side-nav-list level-2 mm-collapse">
                                    <li class="aiz-side-nav-item">
                                        <a href="https://ganeshkongumatrimony.com/packages" class="aiz-side-nav-link">
                                            <span class="aiz-side-nav-text">Packages</span>
                                        </a>
                                    </li>
                                    <li class="aiz-side-nav-item">
                                        <a href="https://ganeshkongumatrimony.com/package-purchase-history"
                                            class="aiz-side-nav-link">
                                            <span class="aiz-side-nav-text">Package Purchase History</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="aiz-side-nav-item">
                                <a href="https://ganeshkongumatrimony.com/my-interests" class="aiz-side-nav-link">
                                    <i class="fas fa-heart aiz-side-nav-icon"></i>
                                    <span class="aiz-side-nav-text">My Interest</span>
                                </a>
                            </li>
                            <li class="aiz-side-nav-item">
                                <a href="https://ganeshkongumatrimony.com/my-shortlists" class="aiz-side-nav-link">
                                    <i class="fas fa-list aiz-side-nav-icon"></i>
                                    <span class="aiz-side-nav-text">Shortlist</span>
                                </a>
                            </li>
                            <li class="aiz-side-nav-item">
                                <a href="https://ganeshkongumatrimony.com/contacts-viewed" class="aiz-side-nav-link">
                                    <i class="fas fa-phone-alt aiz-side-nav-icon"></i>
                                    <span class="aiz-side-nav-text">Contacts Viewed</span>
                                </a>
                            </li>
                            <li class="aiz-side-nav-item">
                                <a href="https://ganeshkongumatrimony.com/ignored-list" class="aiz-side-nav-link">
                                    <i class="fas fa-ban aiz-side-nav-icon"></i>
                                    <span class="aiz-side-nav-text">Ignored User List</span>
                                </a>
                            </li>
                            <li class="aiz-side-nav-item">
                                <a href="https://ganeshkongumatrimony.com/members/picture-privacy"
                                    class="aiz-side-nav-link">
                                    <i class="fas fa-user-lock aiz-side-nav-icon"></i>
                                    <span class="aiz-side-nav-text">Picture Privacy</span>
                                </a>
                            </li>
                            <li class="aiz-side-nav-item">
                                <a href="https://ganeshkongumatrimony.com/members/change-password"
                                    class="aiz-side-nav-link">
                                    <i class="fas fa-key aiz-side-nav-icon"></i>
                                    <span class="aiz-side-nav-text">Change Password</span>
                                </a>
                            </li>
                            <li class="aiz-side-nav-item">
                                <a href="javascript:void(0);" class="aiz-side-nav-link" onclick="account_deactivation()">
                                    <i class="fas fa-lock aiz-side-nav-icon"></i>
                                    <span class="aiz-side-nav-text">Deactive Account</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <a href="javascript:void(0);" class="btn btn-block btn-primary"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            <i class="fas fa-sign-out-alt"></i>
                            <span>Logout</span>

                            <form id="logout-form" action="https://ganeshkongumatrimony.com/logout" method="POST"
                                style="display: none;">
                                <input type="hidden" name="_token" value="6Rd5cNFIBI2WvQ5bns1BM35bSTQkeptH2mmRFxoh">
                            </form>
                        </a>
                    </div>
                </div>
            </div>
            <div class="aiz-user-panel overflow-hidden">
                <div class="card">
                    <div class="card-header">
                        <h5 class="mb-0 h6">Edit Profile</h5>
                    </div>
                    <div class="card-body">
                        <form class="form-default" id="registration_form" role="form" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @include('user.registration.basic')
                            @include('user.registration.personal')
                            @include('user.registration.religion')
                            @include('user.registration.education')
                            @include('user.registration.contact')
                            @include('user.registration.family')
                            @include('user.registration.asset')
                            @include('user.registration.astro')
                            @include('user.registration.expectation')

                            <div class="mt-3 text-center">
                                <label class="aiz-checkbox">
                                    <input type="checkbox" name="tandc" required checked disabled>
                                    <span class="opacity-60">By signing up you agree to our
                                        <a href="/terms-conditions" target="_blank">Terms and Conditions.</a>
                                    </span>
                                    <span class="aiz-square-check"></span>
                                </label>
                            </div>

                            <div class="text-center mb-3">
                                <input type="hidden" name="otp" id="otp">
                                <button type="button" onclick="submitForm()" class="btn btn-primary">Register <i
                                        class="fas fa-check-square"></i></button>
                            </div>

                            <div class="text-center">
                                <p class="text-muted mb-0">Already have an account?</p>
                                <a href="https://ganeshkongumatrimony.com/login">Login to your account</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
