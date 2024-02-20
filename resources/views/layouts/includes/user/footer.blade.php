
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
                    @if (!empty(config('siteconfigrations')['address_1']))
                    <div class="mb-3">
                        <i class="fas fa-map-marker-alt mr-2"></i>
                        <span>{{ config('siteconfigrations')['address_1']['label'] ?? "--" }}</span>
                    </div>
                    <div>{{ config('siteconfigrations')['address_1']['attributes']->value ?? "--" }}</div>
                    @endif

                    @if (!empty(config('siteconfigrations')['address_2']))
                    <div class="mb-3">
                        <i class="fas fa-map-marker-alt mr-2"></i>
                        <span>{{ config('siteconfigrations')['address_2']['label'] ?? "--" }}</span>
                    </div>
                    <div>{{ config('siteconfigrations')['address_2']['attributes']->value ?? "--" }}</div>
                    @endif


                    @if (!empty(config('siteconfigrations')['address_3']))
                    <div class="mb-3">
                        <i class="fas fa-map-marker-alt mr-2"></i>
                        <span>{{ config('siteconfigrations')['address_3']['label'] ?? "--" }}</span>
                    </div>
                    <div>{{ config('siteconfigrations')['address_3']['attributes']->value ?? "--" }}</div>
                    @endif

                    @if (!empty(config('siteconfigrations')['address_4']))
                    <div class="mb-3">
                        <i class="fas fa-map-marker-alt mr-2"></i>
                        <span>{{ config('siteconfigrations')['address_4']['label'] ?? "--" }}</span>
                    </div>
                    <div>{{ config('siteconfigrations')['address_4']['attributes']->value ?? "--" }}</div>
                    @endif
                </div>
                
                @if (!empty(config('siteconfigrations')['address_4']))
                <div class="col-xl-3 col-md-6 mb-2">
                    <div class="mb-3">
                        <i class="fas fa-envelope mr-2"></i>
                        <span>{{ config('siteconfigrations')['email']['label'] ?? "--" }}</span>
                    </div>
                    <div>
                        {{ config('siteconfigrations')['email']['attributes']->value ?? "--" }}
                    </div>
                </div>
                @endif


                @if (!empty(config('siteconfigrations')['phone']))
                <div class="col-xl-3 col-md-6 mb-2">
                    <div class="mb-3">
                        <i class="fas fa-envelope mr-2"></i>
                        <span>{{ config('siteconfigrations')['phone']['label'] ?? "--" }}</span>
                    </div>
                    <div>
                        {{ config('siteconfigrations')['phone']['attributes']->value ?? "--" }}
                    </div>
                </div>
                @endif


                <div class="col-xl-3 col-md-6 mb-2">
                    <div>
                        <i class="fas fa-link mr-2"></i>
                        <span>Whatsapp Group</span>
                    </div>
                    <div>
                        <a href="groups99d2.html?gkm_external" target="_blank" class="text-reset"><img
                                src="uploads/all/aonIjBJT5IxzBXu5orW5xLRxy8esCmXtTDWUlrob.png"
                                class="w-150px w-md-200px"></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row no-gutters">
            <div class="col-lg-3 col-6 mb-4">
                <h4 class="text-uppercase text-primary fs-14 border-bottom border-primary pb-4 mb-4">Quick
                    Links</h4>
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
                <h4 class="text-uppercase text-primary fs-14 border-bottom border-primary pb-4 mb-4">Useful
                    Links</h4>
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
                <h4 class="text-uppercase text-primary fs-14 border-bottom border-primary pb-4 mb-4">Social
                    Media Links</h4>
                <div class="row text-center">
                    <div class="col-6">
                        <a href="https://play.google.com/store/apps/details?id=com.ganesh.kongu&amp;gkm_external"
                            target="_blank">
                            <img src="uploads/all/YsOfZR2kiaHYnZoIi7qOUE5xtyu3bte5W42srmJw.png"
                                class="w-150px w-md-200px">
                        </a>
                    </div>
                    <div class="col-6">
                        <a href="https://facebook.com/ganeshkongumatrimony?gkm_external" target="_blank">
                            <img src="uploads/all/Qvk1lxP75Qwq31jMS0ORIAmfOPqLFNPBI7F6Pi7m.png"
                                class="w-150px w-md-200px">
                        </a>
                    </div>
                </div>
                <div class="row text-center">
                    <div class="col-6">
                        <a href="https://t.me/gkmatrimonytup?gkm_external" target="_blank">
                            <img src="uploads/all/HyQQzIxH29WVg8YdypyHWeIkvDTLlxyNPrDvE9mT.png"
                                class="w-150px w-md-200px">
                        </a>
                    </div>
                    <div class="col-6">
                        <a href="https://www.instagram.com/ganeshkongumatrimony?gkm_external" target="_blank">
                            <img src="uploads/all/3z5BycuTmLkCQbeC6RMpZXlDUvAWSUoohbFVIDri.png"
                                class="w-150px w-md-200px">
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="border-top border-primary pt-4  pb-4  pb-xl-4">
            <div class="row">
                <div class="col-lg-6">
                    <div class="lh-1">
                        @if (!empty(config('siteconfigrations')['copy_rights']))
                        <div class="col-xl-3 col-md-6 mb-2">
                            <div class="mb-3">
                                <i class="fas fa-envelope mr-2"></i>
                                <span>{{ config('siteconfigrations')['copy_rights']['label'] ?? "--" }}</span>
                            </div>
                            <div>
                                {{ config('siteconfigrations')['copy_rights']['attributes']->value ?? "--" }}
                            </div>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>

    </div>
</footer>
