<div class="mobile-sidebar" data-color="purple" data-background-color="white">
    <div class="logo">
        <a href="{{ url('/') }}" class="simple-text logo-mini">
            <div class="logo-img">
                <a href="{{ url('/') }}" class="logo-img d-inline-block">
                    <img src="{{ asset('img/logo-e-connet.png') }}" alt="E-Connect Matrimony" class="mw-100 h-auto">
                </a>
            </div>
        </a>
    </div>
    <div class="mobile-sidebar-wrapper">
        <ul class="nav">
            <li class="nav-item">
                <a class="nav-link text-uppercase fw-700 fs-15 d-flex align-items-center bg-white py-2"
                    href="{{ url('/') }}">
                    <span class="text-primary-grad mb-n1">{{ trans('site.home') }}</span>
                </a>
            </li>
            <li class="nav-item  ">
                <a class="nav-link text-uppercase fw-700 fs-15 d-flex align-items-center bg-white py-2"
                    href="{{ route('user.member-listing') }}">
                    <span class="text-primary-grad mb-n1">{{ trans('site.view_profile') }}</span>
                </a>
            </li>
            <li class="nav-item  ">
                <a class="nav-link text-uppercase fw-700 fs-15 d-flex align-items-center bg-white py-2"
                    href="{{ route('user.search') }}">
                    <span class="text-primary-grad mb-n1">{{ trans('site.search') }}</span>
                </a>
            </li>
            <li class="d-inline-block d-lg-flex pb-1 ">
                <a class=" nav-link text-uppercase fw-700 fs-15 d-flex align-items-center bg-white py-2"
                    id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="text-primary-grad mb-n1">{{ trans('site.more') }}</span>
                </a>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
                    <li class="dropdown-item">
                        <a href="{{ route('user.information', ['code' => 'about_us']) }}" target="_blank"
                            class="text-reset">About Us</a>
                    </li>
                    <li class="dropdown-item">
                        <a href="{{ route('user.information', ['code' => 'contact_us']) }}" target="_blank"
                            class="text-reset">Contact Us</a>
                    </li>
                    <li class="dropdown-item">
                        <a href="{{ route('user.information', ['code' => 'terms_and_conditions']) }}" target="_blank"
                            class="text-reset">Terms and Conditions</a>
                    </li>
                    <li class="dropdown-item">
                        <a href="{{ route('user.information', ['code' => 'privacy_policy']) }}" target="_blank"
                            class="text-reset">Privacy Policy</a>
                    </li>
                </ul>
            </li>
            @auth
                <li class="nav-item">
                    <a class="nav-link text-uppercase fw-700 fs-15 d-flex align-items-center bg-white py-2"
                        href="{{ route('user.profile_edit') }}">
                        <span class="text-primary-grad mb-n1">{{ trans('site.my_profile') }}</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link text-uppercase fw-700 fs-15 d-flex align-items-center bg-white py-2"
                        href="{{ route('user.change_password') }}">
                        <span class="text-primary-grad mb-n1">{{ trans('site.change_password') }}</span>
                    </a>
                </li>
            @endauth

        </ul>
        <!-- Navigation Bar	end -->
    </div>
</div>

@auth
<div class="aiz-mobile-bottom-nav d-lg-none fixed-bottom bg-white shadow-lg border-top rounded-top" style="box-shadow: 0px -1px 10px rgb(0 0 0 / 15%)!important; ">
    <div class="row align-items-center gutters-5 text-center">
        <div class="col">
            <a href="{{ url('/') }}" class="text-reset d-block flex-grow-1 text-center py-2">
                <i class="fas fa-home fs-18 opacity-60 "></i>
                <span class="d-block fs-10 opacity-60 ">{{ trans('site.home') }}</span>
            </a>
        </div>
     
        <div class="col">
          <a href="{{ route('user.search') }}" class="text-reset d-block flex-grow-1 text-center py-2 ">
              <span class="d-inline-block position-relative px-2">
                  <i class="fas fa-search fs-18 opacity-60 "></i>
              </span>
              <span class="d-block fs-10 opacity-60 ">{{ trans('site.search') }}</span>
          </a>
        </div>
        <div class="col">
            <a herf="#!" class="text-reset d-block flex-grow-1 text-center py-2 mobile-side-nav-thumb" onclick="nav_toggler()">
                <span class="d-block mx-auto mb-1 opacity-60">
                    <img src="{{ Auth::user()->profile->photo ?? '' }}" class="rounded-circle size-20px" onerror="this.onerror=null;this.src='{{ asset('img/avatar-place.png')}}';">
                </span>
                <span class="d-block fs-10 opacity-60">Menu</span>
            </a>
        </div>
    </div>
</div>
@endauth