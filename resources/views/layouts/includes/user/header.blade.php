<div class=" w-100 top-0 z-1020">
    <div class="top-navbar bg-white border-bottom z-1035 py-1">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 col">
                    <ul class="list-inline d-flex justify-content-between justify-content-lg-start mb-0">
                        @if (App::currentLocale() != 'en')
                            <li class="list-inline-item">
                                <a href="{{ route('language.set', ['locale' => 'en']) }}" id="cur_lang_en" data-lang="T"
                                    class="text-reset
                                {{ App::currentLocale() == 'en' ?: 'text-success font-weight-bold' }}
                                ">
                                    <span>English</span>
                                </a>
                            </li>
                        @else
                            <li class="list-inline-item pl-3">
                                <a href="{{ route('language.set', ['locale' => 'ta']) }}" id="cur_lang_ta"
                                    data-lang="T"
                                    class="text-reset
                                {{ App::currentLocale() == 'ta' ?: 'text-success font-weight-bold' }} ">
                                    <span>தமிழ்</span>
                                </a>
                            </li>
                        @endif

                    </ul>
                </div>
                <div class="col-lg-7 col">
                    <ul class="list-inline mb-0 d-flex align-items-center justify-content-end ">
                        @if (__isProfiledUser())
                            @isset(Auth::user()->profile)
                                <a
                                    href= "{{ route('user.profile_edit', ['profile' => Auth::user()->profile->id ?? '', 'uuid' => Auth::user()->profile->uuid ?? '']) }}">
                                    <img loading="lazy" class="size-30px rounded-circle img-fit mr-2"
                                        src="{{ Auth::user()->profile->photo ?? '' }}" alt="Profile Photo"
                                        onerror="this.onerror=null;this.src='{{ asset('img/avatar-place.png') }}';">
                                </a>
                                <a class="d-flex align-items-center text-reset dropdown-toggle" href="#"
                                    role="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    <span class="mr-1">
                                        Hi,
                                    </span>
                                    <span class="text-primary-grad fw-700">
                                        {{ Auth::user()->profile->title ?? '' }}
                                    </span>
                                </a>
                            @endisset
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                                @foreach (Auth::user()->profiles as $profile)
                                    @if ($profile->id != Auth::user()->last_login_profile_id)
                                        <form method="POST"
                                            action="{{ route('user.update_last_login_profile', ['profile' => $profile->id, 'uuid' => $profile->uuid]) }}">
                                            @csrf
                                            <div class="btn-group" role="group">
                                                <button type="submit" @disabled($profile->active == 0)
                                                    data-bs-toggle="tooltip" title="Waiting For Approval"
                                                    class="dropdown-item d-flex align-items-center">
                                                    <img loading="lazy" class="size-30px rounded-circle img-fit mr-2"
                                                        src="{{ $profile->photo ?? asset('img/avatar-place.png') }}"
                                                        alt="Profile Photo"
                                                        onerror="this.onerror=null;this.src='{{ asset('img/avatar-place.png') }}';">
                                                    {{ $profile->title ?? '' }}
                                                </button>
                                                @if ($profile->active == 0)
                                                    <button class="btn btn active" type="button"
                                                        data-bs-toggle="tooltip" title="Waiting For Approval"><i
                                                            class="fa fa-question-circle"></i>
                                                    </button>
                                                @endif
                                            </div>
                                        </form>
                                    @endif
                                @endforeach
                                @if (count(Auth::user()->profiles) > 1)
                                    <div class="dropdown-divider"></div>
                                @endif
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button class="dropdown-item" type="submit">{{ trans('site.logout') }}</button>
                                </form>
                            </div>
                            <li class="list-inline-item pl-2">
                                <a class="btn btn-sm btn-primary text-white fw-600 py-1 border"
                                    href="{{ route('registers') }}">{{ trans('site.registration') }}</a>
                            </li>
                        @else
                            <li class="list-inline-item mr-3 pr-3 border-right text-reset text-center">
                                <span> {{ __getSiteConfigration('help_line', 'label') }} </span>
                                <span><a href="tel:{{ __getSiteConfigration('help_line') }}">
                                        {{ __getSiteConfigration('help_line', 'value') }}</a></span>
                            </li>
                            @if (auth()->check() && auth()->user()->is_admin == 1)
                                <li class="list-inline-item text-center">
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <button class="btn btn-sm btn-danger text-white fw-600 py-1 border"
                                            type="submit">{{ trans('site.logout') }}</button>
                                    </form>
                                </li>
                            @else
                                <li class="list-inline-item text-center">
                                    <a class="text-reset "
                                        href="{{ route('user-login') }}">{{ trans('site.login') }}</a>
                                </li>
                            @endif
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
                            <img loading="lazy" src="{{ asset('img/logo-e-connet.png') }}" alt="E-Connect Matrimony"
                                class="mw-100 h-auto">
                        </a>
                        <a herf="#!" class="px-4 logo-toggle nav-toggle-icon d-inline-block d-lg-none"
                            onclick="nav_toggler()">
                            <span class="px-2">
                                <i class="fas fa-bars fa-2x text-primary" area-hidden="true">
                                </i>
                            </span>
                            <span class="hide px-2">
                                <i class="fas fa-times fa-2x text-primary" area-hidden="true"></i>
                            </span>
                        </a>
                    </div>
                    <ul
                        class="d-none mb-0 pl-0 ml-lg-auto d-lg-flex align-items-stretch justify-content-center justify-content-lg-start mobile-hor-swipe">
                        <li
                            class="d-inline-block d-lg-flex pb-1  {{ \Request::route()->getName() == 'index' ? 'bg-primary-grad' : '' }}">

                            <a class="nav-link text-uppercase fw-700 fs-15 d-flex align-items-center bg-white py-2"
                                href="{{ url('/') }}">
                                <span class="text-primary-grad mb-n1">{{ trans('site.home') }}</span>
                            </a>
                        </li>
                        <li
                            class="d-inline-block d-lg-flex pb-1  {{ \Request::route()->getName() == 'user.member-listing' ? 'bg-primary-grad' : '' }}">
                            <a class="nav-link text-uppercase fw-700 fs-15 d-flex align-items-center bg-white py-2"
                                href="{{ route('user.member-listing') }}">
                                <span class="text-primary-grad mb-n1">{{ trans('site.view_profile') }}</span>
                            </a>
                        </li>
                        <li
                            class="d-inline-block d-lg-flex pb-1  {{ \Request::route()->getName() == 'user.search' ? 'bg-primary-grad' : '' }}">
                            <a class="nav-link text-uppercase fw-700 fs-15 d-flex align-items-center bg-white py-2"
                                href="{{ route('user.search') }}">
                                <span class="text-primary-grad mb-n1">{{ trans('site.search') }}</span>
                            </a>
                        </li>


                        <li class="d-inline-block d-lg-flex pb-1 ">
                            <a class="nav-link text-uppercase fw-700 fs-15 d-flex align-items-center bg-white py-2"
                                href="javascript:void(0)" id="dropdownMenu2" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <span class="text-primary-grad mb-n1">{{ trans('site.more') }}</span>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                <li class="dropdown-item">
                                    <a href="{{ route('user.information', ['code' => 'about_us']) }}" target="_blank"
                                        class="text-reset w-100 d-block">About Us</a>
                                </li>
                                <li class="dropdown-item">
                                    <a href="{{ route('user.information', ['code' => 'contact_us']) }}"
                                        target="_blank" class="text-reset w-100 d-block">Contact Us</a>
                                </li>
                                <li class="dropdown-item">
                                    <a href="{{ route('user.information', ['code' => 'terms_and_conditions']) }}"
                                        target="_blank" class="text-reset w-100 d-block">Terms and Conditions</a>
                                </li>
                                <li class="dropdown-item">
                                    <a href="{{ route('user.information', ['code' => 'privacy_policy']) }}"
                                        target="_blank" class="text-reset w-100 d-block">Privacy Policy</a>
                                </li>
                            </ul>
                        </li>

                        @for ($i = 1; $i <= 10; $i++)
                            @if (!empty(__getSiteConfigration('dynamic_header_link_' . $i)))
                                <li
                                    class="d-inline-block d-lg-flex pb-1 u {{ \Request::getRequestUri() == __getSiteConfigration('dynamic_header_link_' . $i) ? 'bg-primary-grad' : '' }}">
                                    <a class="nav-link b-1 text-uppercase fw-700 fs-15 d-flex align-items-center bg-white py-2"
                                        href="{{ __getSiteConfigration('dynamic_header_link_' . $i) }}"
                                        target="{{ __getSiteConfigration('dynamic_header_link_' . $i, 'target') }}">
                                        <span
                                            class="text-primary-grad mb-n1">{{ __getSiteConfigration('dynamic_header_link_' . $i, 'label') }}</span>
                                    </a>
                                </li>
                            @endif
                        @endfor

                        @if (__isProfiledUser())
                            <li
                                class="d-inline-block d-lg-flex pb-1  {{ \Request::route()->getName() == 'user.profile_edit' ? 'bg-primary-grad' : '' }}">
                                <a class="nav-link b-1 text-uppercase fw-700 fs-15 d-flex align-items-center bg-white py-2"
                                    href="{{ route('user.profile_edit', ['profile' => Auth::user()->profile->id ?? '', 'uuid' => Auth::user()->profile->uuid ?? '']) }}">
                                    <span class="text-primary-grad mb-n1">{{ trans('site.my_profile') }}</span>
                                </a>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </div>
    </header>
</div>
<style>
    .dropdown-item {
        white-space: normal;
        /* Allows text to wrap */
        word-wrap: break-word;
        /* Breaks long words if necessary */
        max-width: 100%;
        /* Ensures the item does not overflow */
    }

    @media (max-width: 576px) {
        .dropdown-menu {
            width: 100%;
            /* Ensures dropdown takes full width on small screens */
        }
    }
</style>
