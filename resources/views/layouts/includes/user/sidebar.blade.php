<div class="mobile-sidebar" data-color="purple" data-background-color="white">
    <div class="logo">
        <a href="{{ url('/') }}" class="simple-text logo-mini">
            <div class="logo-img">
                    <a href="{{ url('/') }}" class="logo-img d-inline-block">
                                    <img src="{{ asset('img/logo-e-connet.png') }}" alt="E-Connect Matrimony"
                                        class="mw-100 h-auto">
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
                <a class=" nav-link text-uppercase fw-700 fs-15 d-flex align-items-center bg-white py-2"  id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
        </ul>
        <!-- Navigation Bar	end -->
    </div>
</div>
