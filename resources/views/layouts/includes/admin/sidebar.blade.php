@php
    $menuItems = [
        ['name' => 'Users', 'href' => route('admin.user.list'), 'icon' => 'mdi-home'],
        ['name' => 'Assets Values', 'href' => route('admin.assets_value.list'), 'icon' => 'mdi-diamond'],
        ['name' => 'Birth Dasas', 'href' => route('admin.birth_dasa.list'), 'icon' => 'mdi-star'],
        ['name' => 'Blood Groups', 'href' => route('admin.blood_group.list'), 'icon' => 'mdi-water'],
        ['name' => 'Castes', 'href' => route('admin.caste.list'), 'icon' => 'mdi-star'],
        ['name' => 'Sub Castes', 'href' => route('admin.sub_caste.list'), 'icon' => 'mdi-star'],
        ['name' => 'Countries', 'href' => route('admin.country.list'), 'icon' => 'mdi-star'],
        ['name' => 'States', 'href' => route('admin.state.list'), 'icon' => 'mdi-star'],
        ['name' => 'Educations', 'href' => route('admin.education.list'), 'icon' => 'mdi-star'],
        ['name' => 'Expectations', 'href' => route('admin.expectation.list'), 'icon' => 'mdi-star'],
        ['name' => 'Genders', 'href' => route('admin.gender.list'), 'icon' => 'mdi-star'],
        ['name' => 'Jathagams', 'href' => route('admin.jathagam.list'), 'icon' => 'mdi-star'],
        ['name' => 'Lagnams', 'href' => route('admin.lagnam.list'), 'icon' => 'mdi-star'],
        ['name' => 'Parent Statuses', 'href' => route('admin.parent_status.list'), 'icon' => 'mdi-star'],
        ['name' => 'Rasi Nakshatras', 'href' => route('admin.rasi_nakshatra.list'), 'icon' => 'mdi-star'],
        ['name' => 'Rasi Navamsams', 'href' => route('admin.rasi_navamsam.list'), 'icon' => 'mdi-star'],
        ['name' => 'Social Types', 'href' => route('admin.social_type.list'), 'icon' => 'mdi-star'],
        ['name' => 'Works', 'href' => route('admin.work.list'), 'icon' => 'mdi-star'],
        ['name' => 'Religions', 'href' => route('admin.religion.index'), 'icon' => 'mdi-star'],
        ['name' => 'Weight', 'href' => route('admin.weight.index'), 'icon' => 'mdi-star'],
        ['name' => 'Height', 'href' => route('admin.height.index'), 'icon' => 'mdi-star'],
        ['name' => 'Physical Status', 'href' => route('admin.physical_status.index'), 'icon' => 'mdi-star'],
        ['name' => 'Marital Status', 'href' => route('admin.marital_status.index'), 'icon' => 'mdi-star'],
        ['name' => 'Registered By', 'href' => route('admin.registered_by.index'), 'icon' => 'mdi-star'],

        





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
