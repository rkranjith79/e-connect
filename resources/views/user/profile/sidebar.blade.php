<div class="aiz-user-sidenav-wrap pt-4 sticky-top c-scrollbar-light position-relative z-1 shadow-none">
    <div class="absolute-top-left d-xl-none">
        <button class="btn btn-sm p-2" data-toggle="class-toggle" data-target=".aiz-mobile-side-nav"
            data-same=".mobile-side-nav-thumb">
            <i class="fas fa-times fa-2x"></i>
        </button>
    </div>
    <div class="aiz-user-sidenav rounded overflow-hidden">
        <div class="px-4 text-center mb-4">
            <span class="avatar avatar-md mb-3">
                <img src="{{ Auth::user()->profile->photo }}" alt="Profile Photo"
                    onerror="this.onerror=null;this.src='{{ asset('img/avatar-place.png')}}';">
            </span>
            <h4 class="h5 fw-600">{{ Auth::User()->profile->title }}</h4>
        </div>
        <div class="text-center mb-3 px-3">
            <a href="{{ route('user.profile', ['id' => Auth::user()->profile->id]) }}" class="btn btn-block btn-soft-primary"><i
                    class="fas fa-user"></i> My Profile</a>
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
                        <span class="aiz-side-nav-text">Edit Profile</span>
                    </a>
                </li>
                <li class="aiz-side-nav-item">
                    <a href="{{ route('user.change_password') }}" class="aiz-side-nav-link">
                        <i class="fas fa-key aiz-side-nav-icon"></i>
                        <span class="aiz-side-nav-text">Change Password</span>
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
