<div class="aiz-user-sidenav-wrap pt-4 sticky-top c-scrollbar-light position-relative z-1 shadow-none">
    <div class="absolute-top-left d-md-none">
        <button class="btn btn-sm p-2" data-toggle="class-toggle" data-target=".aiz-mobile-side-nav"
            data-same=".mobile-side-nav-thumb">
            <i class="fas fa-times fa-2x"></i>
        </button>
    </div>
    <div class="aiz-user-sidenav rounded overflow-hidden">
        <div class="px-4 text-center mb-4">
            <span class="avatar avatar-md mb-3">
                <img loading="lazy" src="{{ Auth::user()->profile->photo }}" alt="Profile Photo"
                    onerror="this.onerror=null;this.src='{{ asset('img/avatar-place.png')}}';">
            </span>
            <h4 class="h5 fw-600">{{ Auth::User()->profile->title }}</h4>
        </div>
        <div class="text-center mb-3 px-3">
            <a href="{{ route('user.profile', ['id' => Auth::user()->profile->id, 'uuid' => Auth::user()->profile->uuid]) }}" class="btn btn-block btn-soft-primary"><i
                    class="fas fa-user"></i> {{ trans('site.my_profile') }} </a>
        </div>

        <div class="sidemnenu mb-3">
            <ul class="aiz-side-nav-list metismenu" data-toggle="aiz-side-menu">
                {{-- <li class="aiz-side-nav-item">
                    <a href="" class="aiz-side-nav-link ">
                        <i class="fas fa-tachometer-alt aiz-side-nav-icon"></i>
                        <span class="aiz-side-nav-text">Dashboard</span>
                    </a>
                </li> --}}
                <li class="aiz-side-nav-item mm-active">
                    <a href="{{ route('user.profile_edit') }}" class="aiz-side-nav-link">
                        <i class="fas fa-pen aiz-side-nav-icon"></i>
                        <span class="aiz-side-nav-text">{{ trans('site.my_profile') }}</span>
                    </a>
                </li>
                <li class="aiz-side-nav-item">
                    <a href="{{ route('user.change_password') }}" class="aiz-side-nav-link">
                        <i class="fas fa-key aiz-side-nav-icon"></i>
                        <span class="aiz-side-nav-text">{{ trans('site.change_password') }}</span>
                    </a>
                </li>


                <li class="aiz-side-nav-item">
                    <a href="{{ route('user.interested_profile') }}" class="aiz-side-nav-link">
                        <i class="fas fa-heart aiz-side-nav-icon"></i>
                        <span class="aiz-side-nav-text">{{ trans('site.interested_profile') }}</span>
                        @if (Auth::user()->profile->my_interested_count)
                        <span class="bg-danger sidebar-count-span">
                           {{Auth::user()->profile->my_interested_count}}
                        </span>
                        @endif
                    </a>
                </li>

                <li class="aiz-side-nav-item">
                    <a href="{{ route('user.purchased_profile') }}" class="aiz-side-nav-link">
                        <i class="fas fa-users aiz-side-nav-icon"></i>
                        <span class="aiz-side-nav-text">{{ trans('site.purchased_profile') }}</span>
                        @if (Auth::user()->profile->my_purchased_count)
                        <span class="bg-success sidebar-count-span">
                           {{Auth::user()->profile->my_purchased_count}}
                        </span>
                        @endif
                    </a>
                </li>

                <li class="aiz-side-nav-item">
                    <a href="{{ route('user.ignored_profile') }}" class="aiz-side-nav-link">
                        <i class="fas fa-ban aiz-side-nav-icon"></i>
                        <span class="aiz-side-nav-text">{{ trans('site.ignored_profile') }}</span>
                        @if (Auth::user()->profile->my_ignored_count)
                        <span class="bg-warning sidebar-count-span">
                           {{Auth::user()->profile->my_ignored_count}}
                        </span>
                        @endif
                    </a>
                </li>


            </ul>
        </div>
        <div>
            <a href="javascript:void(0);" class="btn btn-block btn-primary"
                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <i class="fas fa-sign-out-alt"></i>
                <span>Logout</span>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </a>
        </div>
    </div>
</div>
