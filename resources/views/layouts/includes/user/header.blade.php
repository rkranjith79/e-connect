<div class=" w-100 top-0 z-1020">
    <div class="top-navbar bg-white border-bottom z-1035 py-1">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 col">
                    <ul class="list-inline d-flex justify-content-between justify-content-lg-start mb-0">
                        <li class="list-inline-item">
                            <a href="{{ route('language.set', ['locale' => 'en']) }}" id="cur_lang_en" data-lang="T"
                                class="text-reset
                                {{ App::currentLocale() != 'en' ?: 'text-success font-weight-bold' }}
                                ">
                                <span>English</span>
                            </a>
                        </li>

                        <li class="list-inline-item pl-3">
                            <a href="{{ route('language.set', ['locale' => 'ta']) }}" id="cur_lang_ta" data-lang="T"
                                class="text-reset
                                {{ App::currentLocale() != 'ta' ?: 'text-success font-weight-bold' }}

                                ">
                                <span>தமிழ்</span>
                            </a>
                        </li>

                    </ul>
                </div>
                <div class="col-lg-7 col">
                    <ul class="list-inline mb-0 d-flex align-items-center justify-content-end ">
                        @if (Auth::user())
                            <li class="list-inline-item mx-4">
                                <a href="{{ route('user.profile_edit') }}" class="d-flex align-items-center text-reset">
                                    <img class="size-30px rounded-circle img-fit mr-2"
                                        src="{{ Auth::user()->profile->photo ?? '' }}" alt="Profile Photo"
                                        onerror="this.onerror=null;this.src='{{ asset('img/avatar-place.png') }}';">
                                    <span class="mr-1">
                                        Hi,
                                    </span>
                                    <span class="text-primary-grad fw-700">
                                        {{ Auth::user()->profile->title ?? '' }}
                                    </span>
                                </a>
                            </li>
                            <li class="list-inline-item text-center">
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button class="btn btn-sm btn-primary text-white fw-600 py-1 border"
                                        type="submit">{{ trans('site.logout') }}</button>
                                </form>
                            </li>
                        @else
                            <li class="list-inline-item mr-3 pr-3 border-right text-reset text-center">
                                <span> {{ __getSiteConfigration('help_line', 'label') }} </span>
                                <span><a href="tel:{{ __getSiteConfigration('help_line') }}">
                                        {{ __getSiteConfigration('help_line', 'value') }}</a></span>
                            </li>
                            <li class="list-inline-item text-center">
                                <a class="text-reset " href="{{ route('user-login') }}">{{ trans('site.login') }}</a>
                            </li>
                            <li class="list-inline-item">
                                <a class="btn btn-sm btn-primary text-white fw-600 py-1 border"
                                    href="{{ route('registers') }}">{{ trans('site.registration') }}</a>
                            </li>
                        @endif
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
                        <a href="{{ url('/') }}" class="logo-img d-inline-block">
                            <img src="{{ asset('img/logo-e-connet.png') }}" alt="E-Connect Matrimony"
                                class="mw-100 h-auto">
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
                                href="{{ url('/') }}">
                                <span class="text-primary-grad mb-n1">{{ trans('site.home') }}</span>
                            </a>
                        </li>
                        <li class="d-inline-block d-lg-flex pb-1 ">
                            <a class="nav-link text-uppercase fw-700 fs-15 d-flex align-items-center bg-white py-2"
                                href="{{ route('user.member-listing') }}">
                                <span class="text-primary-grad mb-n1">{{ trans('site.view_profile') }}</span>
                            </a>
                        </li>
                        <li class="d-inline-block d-lg-flex pb-1 ">
                            <a class="nav-link text-uppercase fw-700 fs-15 d-flex align-items-center bg-white py-2"
                                href="{{ route('user.search') }}">
                                <span class="text-primary-grad mb-n1">{{ trans('site.search') }}</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
</div>
