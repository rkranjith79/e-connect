@php
    $menuItems = [
        ['name' => 'Users', 'href' => route('admin.user.list'), 'icon' => 'mdi-home'],
        ['name' => 'Assets Values', 'href' => route('admin.assets_value.index'), 'icon' => 'mdi-diamond'],
        ['name' => 'Birth Dasas', 'href' => route('admin.birth_dasa.index'), 'icon' => 'mdi-star'],
        ['name' => 'Blood Groups', 'href' => route('admin.blood_group.index'), 'icon' => 'mdi-water'],
        ['name' => 'Castes', 'href' => route('admin.caste.index'), 'icon' => 'mdi-star'],
        ['name' => 'Sub Castes', 'href' => route('admin.sub_caste.index'), 'icon' => 'mdi-star'],
        ['name' => 'Countries', 'href' => route('admin.country.index'), 'icon' => 'mdi-star'],
        ['name' => 'States', 'href' => route('admin.state.index'), 'icon' => 'mdi-star'],
        ['name' => 'Districts', 'href' => route('admin.district.index'), 'icon' => 'mdi-star'],
        ['name' => 'Educations', 'href' => route('admin.education.index'), 'icon' => 'mdi-star'],
        ['name' => 'Expectations', 'href' => route('admin.expectation.index'), 'icon' => 'mdi-star'],
        ['name' => 'Genders', 'href' => route('admin.gender.index'), 'icon' => 'mdi-star'],
        ['name' => 'Jathagams', 'href' => route('admin.jathagam.index'), 'icon' => 'mdi-star'],
        ['name' => 'Lagnams', 'href' => route('admin.lagnam.index'), 'icon' => 'mdi-star'],
        ['name' => 'Parent Statuses', 'href' => route('admin.parent_status.index'), 'icon' => 'mdi-star'],
        ['name' => 'Rasi Nakshatras', 'href' => route('admin.rasi_nakshatra.index'), 'icon' => 'mdi-star'],
        ['name' => 'Rasi Navamsams', 'href' => route('admin.rasi_navamsam.index'), 'icon' => 'mdi-star'],
        ['name' => 'Social Types', 'href' => route('admin.social_type.index'), 'icon' => 'mdi-star'],
        ['name' => 'Works', 'href' => route('admin.work.index'), 'icon' => 'mdi-star'],
        ['name' => 'Religions', 'href' => route('admin.religion.index'), 'icon' => 'mdi-star'],
        ['name' => 'Weight', 'href' => route('admin.weight.index'), 'icon' => 'mdi-star'],
        ['name' => 'Height', 'href' => route('admin.height.index'), 'icon' => 'mdi-star'],
        ['name' => 'Physical Status', 'href' => route('admin.physical_status.index'), 'icon' => 'mdi-star'],
        ['name' => 'Marital Status', 'href' => route('admin.marital_status.index'), 'icon' => 'mdi-star'],
        ['name' => 'Registered By', 'href' => route('admin.registered_by.index'), 'icon' => 'mdi-star'],
        ['name' => 'Body Type', 'href' => route('admin.body_type.index'), 'icon' => 'mdi-star'],
        ['name' => 'Color', 'href' => route('admin.color.index'), 'icon' => 'mdi-star'],
        ['name' => 'Work Place', 'href' => route('admin.work_place.index'), 'icon' => 'mdi-star'],
        ['name' => 'Nakshatra Patham', 'href' => route('admin.nakshatra_patham.index'), 'icon' => 'mdi-star'],
        ['name' => 'Navamsam', 'href' => route('admin.navamsam.index'), 'icon' => 'mdi-star'],
        ['name' => 'Rasi', 'href' => route('admin.rasi.index'), 'icon' => 'mdi-star'],
        ['name' => 'Site Configurations', 'href' => route('admin.site_configuration.index'), 'icon' => 'mdi-star'],
        ['name' => 'Information', 'href' => route('admin.information_admin.index'), 'icon' => 'mdi-star'],


    ];
@endphp
<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        @foreach ($menuItems as $item)
            <li class="nav-item">
                <a class="nav-link" href="{{ $item['href'] }}">
                    <i class="mdi {{ $item['icon'] }} menu-icon"></i>
                    <span class="menu-title">{{ $item['name'] }}</span>
                </a>
            </li>
        @endforeach
    </ul>
</nav>
