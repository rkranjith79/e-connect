
<footer class="aiz-footer fs-13 mt-auto text-white fw-400 pt-5">
    <div class="container">

        <div class="row">
            <div class="col text-center mx-auto">
                <div class="logo">
                    <a href="{{ url('/') }}" class="d-inline-block py-15px">
                        <img src="{{ asset('img/logo-e-connet.png') }}"
                            alt="E-Connect Matrimony" class="mw-100 h-150px">
                    </a>
                </div>
            </div>
        </div>

        <div class="mb-2">
            <h4 class="text-uppercase text-primary fs-14 border-bottom border-primary pb-4 mb-4">Contacts</h4>
            <div class="row no-gutters">
                <div class="col-xl-3 col-md-12 mb-2">
                    @for ($i = 0; $i < 5; $i++)
                        @if (!empty(__getSiteConfigration('address_'.$i)))
                        <div class="mb-3">
                            <i class="fas fa-map-marker-alt mr-2"></i>
                            <span> {{ __getSiteConfigration('address_'.$i, 'label') }}</span>
                        </div>
                        <div> {{ __getSiteConfigration('address_'.$i) }}</div>
                        @endif
                    @endfor
            </div>

                    


                @if (!empty(__getSiteConfigration('phone')))
                <div class="col-xl-3 col-md-6 mb-2">
                    <div class="mb-3">
                        <i class="fas fa-envelope mr-2"></i>
                        <span>{{ __getSiteConfigration('phone', 'label') }}</span>
                    </div>
                    <div>
                        {{ __getSiteConfigration('phone') }}
                    </div>
                </div>
                @endif



                @if (!empty(__getSiteConfigration('whatsapp_group')))
                <div class="col-xl-3 col-md-6 mb-2">
                    <div class="mb-3">
                        <i class="fas fa-envelope mr-2"></i>
                        <span>{{ __getSiteConfigration('whatsapp_group', 'label') }}</span>
                    </div>
                    <div>
                        {{ __getSiteConfigration('whatsapp_group') }}
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
                            <a href="index99d2.html?gkm_external" target="_blank" class="text-reset">Home</a>
                        </li>
                        <li class="my-3">
                            <a href="users/login.html?gkm_external" target="_blank" class="text-reset">View
                                Profiles</a>
                        </li>
                        <li class="my-3">
                            <a href="packages99d2.html?gkm_external" target="_blank"
                                class="text-reset">Premium Plans</a>
                        </li>
                        <li class="my-3">
                            <a href="happy-stories99d2.html?gkm_external" target="_blank"
                                class="text-reset">Happy Stories</a>
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
                            <a href="{{ route('user.information', ['id' => 1]) }}" target="_blank"
                                class="text-reset">Terms and Conditions</a>
                        </li>
                        <li class="my-3">
                            <a href="privacy-policy99d2.html?gkm_external" target="_blank"
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
                        <div class="col-6">
                            <a href="{{ __getSiteConfigration('play_store_link') }}"
                            target="_blank">
                            <img src="{{ asset('img/social/play_store.png')}}"
                                class="w-150px w-md-200px">
                            </a>
                        </div>
                    @endif

                    @if (!empty(__getSiteConfigration('app_store_link')))
                        <div class="col-6">
                            <a href="{{ __getSiteConfigration('app_store_link') }}"
                            target="_blank">
                            <img src="{{ asset('img/social/app_store.png')}}"
                                class="w-150px w-md-200px">
                            </a>
                        </div>
                    @endif
                    
                    @if (!empty(__getSiteConfigration('telegram_link')))
                        <div class="col-6">
                            <a href="{{ __getSiteConfigration('telegram_link') }}"
                            target="_blank">
                            <img src="{{ asset('img/social/telegram.png')}}"
                                class="w-150px w-md-200px">
                            </a>
                        </div>
                    @endif

                    @if (!empty(__getSiteConfigration('instagram_link')))
                        <div class="col-6">
                            <a href="{{ __getSiteConfigration('instagram_link') }}"
                            target="_blank">
                            <img src="{{ asset('img/social/instagram.png')}}"
                                class="w-150px w-md-200px">
                            </a>
                        </div>
                    @endif

                    @if (!empty(__getSiteConfigration('facebook_link')))
                        <div class="col-6">
                            <a href="{{ __getSiteConfigration('facebook_link') }}"
                            target="_blank">
                            <img src="{{ asset('img/social/facebook.png')}}"
                                class="w-150px w-md-200px">
                            </a>
                        </div>
                    @endif

                    @if (!empty(__getSiteConfigration('youtube_link')))
                    <div class="col-6">
                        <a href="{{ __getSiteConfigration('youtube_link') }}"
                        target="_blank">
                        <img src="{{ asset('img/social/youtube.png')}}"
                        class="w-150px w-md-200px">
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
                            <div class="mb-3">
                                <i class="fas fa-envelope mr-2"></i>
                                <span>{{ __getSiteConfigration('copy_rights', 'label') }}</span>
                            </div>
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
