<div class=" w-100 top-0 z-1020">
    <div class="top-navbar bg-white border-bottom z-1035 py-1">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 col">
                    <ul class="list-inline d-flex justify-content-between justify-content-lg-start mb-0">
                        <li class="list-inline-item">
                            <a href="index.html" id="cur_lang" data-lang="T"
                                class="text-reset font-weight-bold">
                                <span>English</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-7 col">
                    <ul class="list-inline mb-0 d-flex align-items-center justify-content-end ">
                        <li class="list-inline-item mr-3 pr-3 border-right text-reset text-center">
                            <span>உதவி மையம்</span>
                            <span><a href="tel:9025382525">9025382525</a></span>
                        </li>
                        <li class="list-inline-item text-center">
                            <a class="text-reset" href="{{ route('admin.dashboard') }}">உள் நுழைய</a>
                        </li>
                        <li class="list-inline-item">
                            <a class="btn btn-sm btn-primary text-white fw-600 py-1 border"
                                href="register.html">பதிவு</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <header class="aiz-header shadow-md bg-white border-gray-300">
        <div class="aiz-navbar position-relative">
            <div class="container px-0 px-md-3">
                <div class="d-lg-flex justify-content-between text-center text-lg-left">
                    <div class="logo">
                        <a href="index.html" class="logo-img d-inline-block">
                            <img src="{{ asset('img/logo-e-connet.png') }}"
                                alt="E-Connect Matrimony" class="mw-100 h-auto">
                        </a>
                        <a herf="#!" class="logo-toggle nav-toggle-icon d-inline-block d-lg-none"
                            onclick="nav_toggler()">
                            <span><i class="fas fa-bars fa-2x text-primary" area-hidden="true"></i></span>
                            <span class="hide"><i class="fas fa-times fa-2x text-primary"
                                    area-hidden="true"></i></span>
                        </a>
                    </div>
                    <ul
                        class="d-none mb-0 pl-0 ml-lg-auto d-lg-flex align-items-stretch justify-content-center justify-content-lg-start mobile-hor-swipe">
                        <li class="d-inline-block d-lg-flex pb-1 bg-primary-grad">
                            <a class="nav-link text-uppercase fw-700 fs-15 d-flex align-items-center bg-white py-2"
                                href="index.html">
                                <span class="text-primary-grad mb-n1">Home</span>
                            </a>
                        </li>
                        <li class="d-inline-block d-lg-flex pb-1 ">
                            <a class="nav-link text-uppercase fw-700 fs-15 d-flex align-items-center bg-white py-2"
                                href="users/login.html">
                                <span class="text-primary-grad mb-n1">View Profiles</span>
                            </a>
                        </li>
                        <li class="d-inline-block d-lg-flex pb-1 ">
                            <a class="nav-link text-uppercase fw-700 fs-15 d-flex align-items-center bg-white py-2"
                                href="users/login.html">
                                <span class="text-primary-grad mb-n1">Search</span>
                            </a>
                        </li>
                        <li class="d-inline-block d-lg-flex pb-1 ">
                            <a class="nav-link text-uppercase fw-700 fs-15 d-flex align-items-center bg-white py-2"
                                href="packages.html">
                                <span class="text-primary-grad mb-n1">Premium Plans</span>
                            </a>
                        </li>
                        <li class="d-inline-block d-lg-flex pb-1 ">
                            <a class="nav-link text-uppercase fw-700 fs-15 d-flex align-items-center bg-white py-2"
                                href="events.html">
                                <span class="text-primary-grad mb-n1">Events</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
</div>
