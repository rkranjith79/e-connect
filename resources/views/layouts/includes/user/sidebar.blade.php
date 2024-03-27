<div class="mobile-sidebar" data-color="purple" data-background-color="white">
    <div class="logo">
        <a href="index.html" class="simple-text logo-mini">
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
        </ul>
        <!-- Navigation Bar	end -->
    </div>
</div>
