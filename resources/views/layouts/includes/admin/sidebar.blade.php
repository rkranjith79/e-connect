@php
    $menuItems = [
        ['name' => 'Users', 'href' => route('admin.user.list'), 'icon' => 'mdi-account-star'],
        ['name' => 'Profiles', 'href' => route('admin.profile.index'), 'icon' => 'mdi-account-check'],
        ['name' => 'Plans', 'href' => route('admin.plan.index'), 'icon' => 'mdi-star'],
        ['name' => 'Purchased Plans', 'href' => route('admin.purchased_plan.index'), 'icon' => 'mdi-star'],
        ['name' => 'Purchased Profiles', 'href' => route('admin.purchased_profile.index'), 'icon' => 'mdi-star'],
        ['name' => 'Information', 'href' => route('admin.information_admin.index'), 'icon' => 'mdi-star'],
        ['name' => 'Site Configurations', 'href' => route('admin.site_configuration.index'), 'icon' => 'mdi-star'],

        [
            'name' => 'Jathagam Masters',
            'href' => '#',
            'icon' => 'mdi-star',
            'type' => 'header',
            'items' => [
                ['name' => 'Rasi', 'href' => route('admin.rasi.index'), 'icon' => 'mdi-star'],
                ['name' => 'Navamsam', 'href' => route('admin.navamsam.index'), 'icon' => 'mdi-star'],
                ['name' => 'Birth Dasas', 'href' => route('admin.birth_dasa.index'), 'icon' => 'mdi-star'],
                ['name' => 'Rasi Nakshatras', 'href' => route('admin.rasi_nakshatra.index'), 'icon' => 'mdi-star'],
                ['name' => 'Rasi Navamsams', 'href' => route('admin.rasi_navamsam.index'), 'icon' => 'mdi-star'],
                ['name' => 'Nakshatra Patham', 'href' => route('admin.nakshatra_patham.index'), 'icon' => 'mdi-star'],
                ['name' => 'Jathagams', 'href' => route('admin.jathagam.index'), 'icon' => 'mdi-star'],
                ['name' => 'Lagnams', 'href' => route('admin.lagnam.index'), 'icon' => 'mdi-star'],
            ],
        ],
        [
            'name' => 'Caste Masters',
            'href' => '#',
            'icon' => 'mdi-star',
            'type' => 'header',
            'items' => [
                ['name' => 'Castes', 'href' => route('admin.caste.index'), 'icon' => 'mdi-star'],
                ['name' => 'Sub Castes', 'href' => route('admin.sub_caste.index'), 'icon' => 'mdi-star'],
                ['name' => 'Religions', 'href' => route('admin.religion.index'), 'icon' => 'mdi-star'],
            ],
        ],

        [
            'name' => 'Profile Masters',
            'href' => '#',
            'icon' => 'mdi-star',
            'type' => 'header',
            'items' => [
                ['name' => 'Assets Values', 'href' => route('admin.assets_value.index'), 'icon' => 'mdi-diamond'],
                ['name' => 'Registered By', 'href' => route('admin.registered_by.index'), 'icon' => 'mdi-star'],
                ['name' => 'Educations', 'href' => route('admin.education.index'), 'icon' => 'mdi-star'],
                ['name' => 'Social Types', 'href' => route('admin.social_type.index'), 'icon' => 'mdi-star'],
                ['name' => 'Works', 'href' => route('admin.work.index'), 'icon' => 'mdi-star'],
                ['name' => 'Parent Statuses', 'href' => route('admin.parent_status.index'), 'icon' => 'mdi-star'],
                ['name' => 'Weight', 'href' => route('admin.weight.index'), 'icon' => 'mdi-star'],
                ['name' => 'Height', 'href' => route('admin.height.index'), 'icon' => 'mdi-star'],
                ['name' => 'Physical Status', 'href' => route('admin.physical_status.index'), 'icon' => 'mdi-star'],
                ['name' => 'Marital Status', 'href' => route('admin.marital_status.index'), 'icon' => 'mdi-star'],
                ['name' => 'Body Type', 'href' => route('admin.body_type.index'), 'icon' => 'mdi-star'],
                ['name' => 'Color', 'href' => route('admin.color.index'), 'icon' => 'mdi-star'],
                ['name' => 'Work Place', 'href' => route('admin.work_place.index'), 'icon' => 'mdi-star'],
                ['name' => 'Expectations', 'href' => route('admin.expectation.index'), 'icon' => 'mdi-star'],
            ],
        ],
        [
            'name' => 'System Masters',
            'href' => '#',
            'icon' => 'mdi-star',
            'type' => 'header',
            'items' => [
                ['name' => 'Blood Groups', 'href' => route('admin.blood_group.index'), 'icon' => 'mdi-water'],
                ['name' => 'Countries', 'href' => route('admin.country.index'), 'icon' => 'mdi-star'],
                ['name' => 'States', 'href' => route('admin.state.index'), 'icon' => 'mdi-star'],
                ['name' => 'Districts', 'href' => route('admin.district.index'), 'icon' => 'mdi-star'],
                ['name' => 'Genders', 'href' => route('admin.gender.index'), 'icon' => 'mdi-star'],
            ],
        ],
    ];
@endphp
<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        @foreach ($menuItems as $itemKey => $item)
            @if (($item['type'] ?? 'link') == 'link')
                <li class="nav-item">
                    <a class="nav-link" href="{{ $item['href'] }}">
                        <i class="mdi {{ $item['icon'] }} menu-icon"></i>
                        <span class="menu-title">{{ $item['name'] }}</span>
                    </a>
                </li>
            @elseif ($item['type'] ?? '' == 'header')

                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="collapse" href="#nav{{$itemKey}}" aria-expanded="false"
                        aria-controls="auth">
                        <i class="mdi {{ $item['icon'] }} menu-icon"></i>
                        <span class="menu-title">{{ $item['name'] }}</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="collapse" id="nav{{$itemKey}}">
                        <ul class="nav flex-column sub-menu" style="padding: 0">
                            @foreach ($item['items'] as $subItem)
                                <a class="nav-link" href="{{ $subItem['href'] }}">
                                    {{-- <i class="mdi {{ $subItem['icon'] }} menu-icon"></i> --}}
                                    <span class="menu-title">{{ $subItem['name'] }}</span>
                                </a>
                                <hr class="m-0">
                            @endforeach
                        </ul>
                    </div>
                </li>
            @endif
        @endforeach
    </ul>
</nav>
