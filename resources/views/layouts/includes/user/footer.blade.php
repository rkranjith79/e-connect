<footer class=" text-center aiz-footer fs-13 mt-auto text-white fw-400 py-3 d-lg-none d-xl-none
">

    @if (!empty(__getSiteConfigration('whatsapp_group')))
        <a href="{{ __getSiteConfigration('whatsapp_group') }}" target="_blank">
            <i class="fas fab fa  fa-whatsapp"></i>
        </a>

        <span class="mx-3">|</span>
    @endif

    @if (!empty(__getSiteConfigration('youtube_link')))
        <a href="{{ __getSiteConfigration('youtube_link') }}" target="_blank">
            <i class="fas fab fa  fa-youtube"></i>
        </a>
        <span class="mx-3">|</span>
    @endif

    @if (!empty(__getSiteConfigration('facebook_link')))
        <a href="{{ __getSiteConfigration('facebook_link') }}" target="_blank">
            <i class="fas fab fa  fa-facebook"></i>
        </a>
        <span class="mx-3">|</span>
    @endif

    @if (!empty(__getSiteConfigration('instagram_link')))
        <a href="{{ __getSiteConfigration('instagram_link') }}" target="_blank">
            <i class="fas fab fa  fa-instagram"></i>
        </a>
        <span class="mx-3">|</span>
    @endif

    @if (!empty(__getSiteConfigration('telegram_link')))
        <a href="{{ __getSiteConfigration('telegram_link') }}" target="_blank">
            <i class="fas fab fa  fa-telegram"></i>
        </a>
       
    @endif
<br>
    @if (!empty(route('user.information', ['code' => 'terms_and_conditions'])))
        <a href="{{ route('user.information', ['code' => 'terms_and_conditions']) }}" target="_blank"
            class="text-reset">Terms and Conditions</a>
        <span class="mx-3">|</span>
    @endif
    @if (!empty(route('user.information', ['code' => 'privacy_policy'])))
        <a href="{{ route('user.information', ['code' => 'privacy_policy']) }}" target="_blank"
            class="text-reset">Privacy Policy</a>
        <span class="mx-3">|</span>
    @endif

    {{ __getSiteConfigration('copy_rights') }}
</footer>


<footer class="aiz-footer fs-13 mt-auto text-white fw-400 pt-5 d-none
 d-lg-block">
    <div class="container">

        <div class="row">
            <div class="col text-center mx-auto">
                <div class="logo">
                    <a href="{{ url('/') }}" class="d-inline-block py-15px">
                        <img src="{{ asset('img/logo-e-connet.png') }}" alt="E-Connect Matrimony"
                            class="mw-100 h-150px">
                    </a>
                </div>
            </div>
        </div>

        <div class="mb-2">
            <h4 class="text-uppercase text-primary fs-14 border-bottom border-primary pb-4 mb-4">

                {{ trans('site.contacts') }}
            </h4>
            <div class="row no-gutters">
                <div class="col-xl-3 col-md-12 mb-2">
                    @for ($i = 0; $i < 5; $i++)
                        @if (!empty(__getSiteConfigration('address_' . $i)))
                            <div class="mb-3">
                                <i class="fas fa-map-marker-alt mr-2"></i>
                                <span> {{ __getSiteConfigration('address_' . $i, 'label') }}</span>
                            </div>
                            <div> {{ __getSiteConfigration('address_' . $i) }}</div>
                        @endif
                    @endfor
                </div>




                <div class="col-xl-3 col-md-6 mb-2">
                    @if (!empty(__getSiteConfigration('phone')))
                        <div class="mb-3">
                            <i class="fas fa-envelope mr-2"></i>
                            <span>{{ __getSiteConfigration('phone', 'label') }}</span>
                        </div>
                        <div class="mb-3">
                            {{ __getSiteConfigration('phone') }}
                        </div>
                    @endif
                    @if (!empty(__getSiteConfigration('phone')))
                        <div class="mb-2">
                            <i class="fas fa-envelope mr-2"></i>
                            <span>{{ __getSiteConfigration('phone_2', 'label') }}</span>
                        </div>
                        <div class="mb-3">
                            {{ __getSiteConfigration('phone_2') }}
                        </div>
                    @endif

                    @if (!empty(__getSiteConfigration('email')))
                        <div class="mb-2">
                            <i class="fas fa-envelope mr-2"></i>
                            <span>{{ __getSiteConfigration('email', 'label') }}</span>
                        </div>
                        <div class="mb-3">
                            {{ __getSiteConfigration('email') }}
                        </div>
                    @endif

                </div>





                @if (!empty(__getSiteConfigration('whatsapp_group')))
                    <div class="col-xl-3 col-md-6 mb-2">
                        <div class="mb-3">
                            <i class="fas fa-envelope mr-2"></i>
                            <span>{{ __getSiteConfigration('whatsapp_group', 'label') }}</span>
                        </div>
                        <div>

                            <a href="{{ __getSiteConfigration('whatsapp_group') }}" target="_blank">
                                <img src="{{ asset('img/social/whatsapp.png') }}" class="custom-social-btn">
                            </a>
                        </div>
                    </div>
                @endif


            </div>
        </div>

        <div class="row no-gutters">
            <div class="col-lg-3 col-6 mb-4">
                <h4 class="text-uppercase text-primary fs-14 border-bottom border-primary pb-4 mb-4">
                    {{ trans('site.quick_links') }}
                </h4>
                <div>
                    <ul class="list-unstyled">

                        <li class="my-3">
                            <a href="{{ url('/') }}" class="text-reset">
                                {{ trans('site.home') }}
                            </a>
                        </li>
                        <li class="my-3 ">
                            <a href="{{ route('user.member-listing') }}" class="text-reset">
                                {{ trans('site.view_profile') }}
                            </a>
                        </li>
                        <li class="my-3 ">
                            <a href="{{ route('user.search') }}" class="text-reset">
                                {{ trans('site.search') }}
                            </a>
                        </li>


                    </ul>
                </div>
            </div>

            <div class="col-lg-3 col-6 mb-4">
                <h4 class="text-uppercase text-primary fs-14 border-bottom border-primary pb-4 mb-4">
                    {{ trans('site.useful_links') }}
                </h4>
                <div>
                    <ul class="list-unstyled">
                        <li class="my-3">
                            <a href="{{ route('user.information', ['code' => 'about_us']) }}" target="_blank"
                                class="text-reset">About Us</a>
                        </li>
                        <li class="my-3">
                            <a href="{{ route('user.information', ['code' => 'contact_us']) }}" target="_blank"
                                class="text-reset">Contact Us</a>
                        </li>
                        <li class="my-3">
                            <a href="{{ route('user.information', ['code' => 'terms_and_conditions']) }}"
                                target="_blank" class="text-reset">Terms and Conditions</a>
                        </li>
                        <li class="my-3">
                            <a href="{{ route('user.information', ['code' => 'privacy_policy']) }}" target="_blank"
                                class="text-reset">Privacy Policy</a>
                        </li>
                    </ul>
                </div>
            </div>


            <div class="col-lg-6 col-md-6 mb-4">
                <h4 class="text-uppercase text-primary fs-14 border-bottom border-primary pb-4 mb-4">
                    {{ trans('site.social_meadia_links') }}
                </h4>
                <div class="row text-center">
                    @if (!empty(__getSiteConfigration('play_store_link')))
                        <div class="col-4">
                            <a href="{{ __getSiteConfigration('play_store_link') }}" target="_blank">
                                <img src="{{ asset('img/social/play_store.png') }}" class="custom-social-btn">
                            </a>
                        </div>
                    @endif

                    @if (!empty(__getSiteConfigration('app_store_link')))
                        <div class="col-4">
                            <a href="{{ __getSiteConfigration('app_store_link') }}" target="_blank">
                                <img src="{{ asset('img/social/app_store.png') }}" class="custom-social-btn">
                            </a>
                        </div>
                    @endif

                    @if (!empty(__getSiteConfigration('telegram_link')))
                        <div class="col-4">
                            <a href="{{ __getSiteConfigration('telegram_link') }}" target="_blank">
                                <img src="{{ asset('img/social/telegram.png') }}" class="custom-social-btn">
                            </a>
                        </div>
                    @endif

                    @if (!empty(__getSiteConfigration('instagram_link')))
                        <div class="col-4">
                            <a href="{{ __getSiteConfigration('instagram_link') }}" target="_blank">
                                <img src="{{ asset('img/social/instagram.png') }}" class="custom-social-btn">
                            </a>
                        </div>
                    @endif

                    @if (!empty(__getSiteConfigration('facebook_link')))
                        <div class="col-4">
                            <a href="{{ __getSiteConfigration('facebook_link') }}" target="_blank">
                                <img src="{{ asset('img/social/facebook.png') }}" class="custom-social-btn">
                            </a>
                        </div>
                    @endif

                    @if (!empty(__getSiteConfigration('youtube_link')))
                        <div class="col-4">
                            <a href="{{ __getSiteConfigration('youtube_link') }}" target="_blank">
                                <img src="{{ asset('img/social/youtube.png') }}" class="custom-social-btn">
                            </a>
                        </div>
                    @endif
                </div>

            </div>
        </div>

        <div class="border-top border-primary pt-4  pb-4  pb-xl-4">
            <div class="row">
                <div class="col-lg-6">
                    <div class="lh-1">
                        @if (!empty(__getSiteConfigration('copy_rights')))
                            <div class="col-xl-3 col-md-6 mb-2">
                                {{-- <div class="mb-3">
                                        <i class="fas fa-envelope mr-2"></i>
                                        <span>{{ __getSiteConfigration('copy_rights', 'label') }}</span>
                                    </div> --}}
                                <div>
                                    {{ __getSiteConfigration('copy_rights') }}
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>

    </div>
</footer>

<style>
    .custom-social-btn {
        border-radius: 30PX;
        HEIGHT: 64px;
    }

    .custom-instagram-btn--2 {
        border-radius: 30PX;
        HEIGHT: 64px;
    }

    .custom-facebook-btn--1 {
        background: white;
        padding: 10px 22px;
        border-radius: 26px;
    }
</style>
