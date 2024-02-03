<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::name('admin.')->prefix('admin')->middleware(['auth', 'isAdmin'])->group(function () {
    Route::get('/dashboard', [App\Http\Controllers\Admin\AdminDashboardController::class, 'index'])->name('dashboard');

    Route::name('user.')->prefix('/users')->group(function () {
        Route::get('/', [App\Http\Controllers\Admin\UserController::class, 'index'])->name('list');
        Route::post('/create', [App\Http\Controllers\Admin\UserController::class, 'create'])->name('create');
        Route::get('/edit/{id}', [App\Http\Controllers\Admin\UserController::class, 'edit'])->name('edit');
        Route::put('/update/{id}', [App\Http\Controllers\Admin\UserController::class, 'update'])->name('update');
        Route::get('/delete', [App\Http\Controllers\Admin\UserController::class, 'destroy'])->name('delete');
    });
    Route::name('assets_value.')->prefix('/assets_values')->group(function () {
        Route::get('/', [App\Http\Controllers\Admin\AssetsValueController::class, 'index'])->name('list');
        Route::post('/create', [App\Http\Controllers\Admin\AssetsValueController::class, 'create'])->name('create');
        Route::get('/edit/{id}', [App\Http\Controllers\Admin\AssetsValueController::class, 'edit'])->name('edit');
        Route::put('/update/{id}', [App\Http\Controllers\Admin\AssetsValueController::class, 'update'])->name('update');
        Route::get('/delete', [App\Http\Controllers\Admin\AssetsValueController::class, 'destroy'])->name('delete');
    });
    Route::name('birth_dasa.')->prefix('/birth_dasas')->group(function () {
        Route::get('/', [App\Http\Controllers\Admin\BirthDasaController::class, 'index'])->name('list');
        Route::post('/create', [App\Http\Controllers\Admin\BirthDasaController::class, 'create'])->name('create');
        Route::get('/edit/{id}', [App\Http\Controllers\Admin\BirthDasaController::class, 'edit'])->name('edit');
        Route::put('/update/{id}', [App\Http\Controllers\Admin\BirthDasaController::class, 'update'])->name('update');
        Route::get('/delete', [App\Http\Controllers\Admin\BirthDasaController::class, 'destroy'])->name('delete');
    });
    Route::name('blood_group.')->prefix('/blood_groups')->group(function () {
        Route::get('/', [App\Http\Controllers\Admin\BloodGroupController::class, 'index'])->name('list');
        Route::post('/create', [App\Http\Controllers\Admin\BloodGroupController::class, 'create'])->name('create');
        Route::get('/edit/{id}', [App\Http\Controllers\Admin\BloodGroupController::class, 'edit'])->name('edit');
        Route::put('/update/{id}', [App\Http\Controllers\Admin\BloodGroupController::class, 'update'])->name('update');
        Route::get('/delete', [App\Http\Controllers\Admin\BloodGroupController::class, 'destroy'])->name('delete');
    });
    Route::name('caste.')->prefix('/castes')->group(function () {
        Route::get('/', [App\Http\Controllers\Admin\CasteController::class, 'index'])->name('list');
        Route::post('/create', [App\Http\Controllers\Admin\CasteController::class, 'create'])->name('create');
        Route::get('/edit/{id}', [App\Http\Controllers\Admin\CasteController::class, 'edit'])->name('edit');
        Route::put('/update/{id}', [App\Http\Controllers\Admin\CasteController::class, 'update'])->name('update');
        Route::get('/delete', [App\Http\Controllers\Admin\CasteController::class, 'destroy'])->name('delete');
    });
    Route::name('country.')->prefix('/countries')->group(function () {
        Route::get('/', [App\Http\Controllers\Admin\CountryController::class, 'index'])->name('list');
        Route::post('/create', [App\Http\Controllers\Admin\CountryController::class, 'create'])->name('create');
        Route::get('/edit/{id}', [App\Http\Controllers\Admin\CountryController::class, 'edit'])->name('edit');
        Route::put('/update/{id}', [App\Http\Controllers\Admin\CountryController::class, 'update'])->name('update');
        Route::get('/delete', [App\Http\Controllers\Admin\CountryController::class, 'destroy'])->name('delete');
    });
    Route::name('education.')->prefix('/educations')->group(function () {
        Route::get('/', [App\Http\Controllers\Admin\EducationController::class, 'index'])->name('list');
        Route::post('/create', [App\Http\Controllers\Admin\EducationController::class, 'create'])->name('create');
        Route::get('/edit/{id}', [App\Http\Controllers\Admin\EducationController::class, 'edit'])->name('edit');
        Route::put('/update/{id}', [App\Http\Controllers\Admin\EducationController::class, 'update'])->name('update');
        Route::get('/delete', [App\Http\Controllers\Admin\EducationController::class, 'destroy'])->name('delete');
    });
    Route::name('expectation.')->prefix('/expectations')->group(function () {
        Route::get('/', [App\Http\Controllers\Admin\ExpectationController::class, 'index'])->name('list');
        Route::post('/create', [App\Http\Controllers\Admin\ExpectationController::class, 'create'])->name('create');
        Route::get('/edit/{id}', [App\Http\Controllers\Admin\ExpectationController::class, 'edit'])->name('edit');
        Route::put('/update/{id}', [App\Http\Controllers\Admin\ExpectationController::class, 'update'])->name('update');
        Route::get('/delete', [App\Http\Controllers\Admin\ExpectationController::class, 'destroy'])->name('delete');
    });
    Route::name('gender.')->prefix('/genders')->group(function () {
        Route::get('/', [App\Http\Controllers\Admin\GenderController::class, 'index'])->name('list');
        Route::post('/create', [App\Http\Controllers\Admin\GenderController::class, 'create'])->name('create');
        Route::get('/edit/{id}', [App\Http\Controllers\Admin\GenderController::class, 'edit'])->name('edit');
        Route::put('/update/{id}', [App\Http\Controllers\Admin\GenderController::class, 'update'])->name('update');
        Route::get('/delete', [App\Http\Controllers\Admin\GenderController::class, 'destroy'])->name('delete');
    });
    Route::name('jathagam.')->prefix('/jathagams')->group(function () {
        Route::get('/', [App\Http\Controllers\Admin\JathagamController::class, 'index'])->name('list');
        Route::post('/create', [App\Http\Controllers\Admin\JathagamController::class, 'create'])->name('create');
        Route::get('/edit/{id}', [App\Http\Controllers\Admin\JathagamController::class, 'edit'])->name('edit');
        Route::put('/update/{id}', [App\Http\Controllers\Admin\JathagamController::class, 'update'])->name('update');
        Route::get('/delete', [App\Http\Controllers\Admin\JathagamController::class, 'destroy'])->name('delete');
    });
    Route::name('lagnam.')->prefix('/lagnams')->group(function () {
        Route::get('/', [App\Http\Controllers\Admin\LagnamController::class, 'index'])->name('list');
        Route::post('/create', [App\Http\Controllers\Admin\LagnamController::class, 'create'])->name('create');
        Route::get('/edit/{id}', [App\Http\Controllers\Admin\LagnamController::class, 'edit'])->name('edit');
        Route::put('/update/{id}', [App\Http\Controllers\Admin\LagnamController::class, 'update'])->name('update');
        Route::get('/delete', [App\Http\Controllers\Admin\LagnamController::class, 'destroy'])->name('delete');
    });
    Route::name('parent_status.')->prefix('/parent_statuses')->group(function () {
        Route::get('/', [App\Http\Controllers\Admin\ParentStatusController::class, 'index'])->name('list');
        Route::post('/create', [App\Http\Controllers\Admin\ParentStatusController::class, 'create'])->name('create');
        Route::get('/edit/{id}', [App\Http\Controllers\Admin\ParentStatusController::class, 'edit'])->name('edit');
        Route::put('/update/{id}', [App\Http\Controllers\Admin\ParentStatusController::class, 'update'])->name('update');
        Route::get('/delete', [App\Http\Controllers\Admin\ParentStatusController::class, 'destroy'])->name('delete');
    });
    Route::name('rasi_nakshatra.')->prefix('/rasi_nakshatras')->group(function () {
        Route::get('/', [App\Http\Controllers\Admin\RasiNakshatraController::class, 'index'])->name('list');
        Route::post('/create', [App\Http\Controllers\Admin\RasiNakshatraController::class, 'create'])->name('create');
        Route::get('/edit/{id}', [App\Http\Controllers\Admin\RasiNakshatraController::class, 'edit'])->name('edit');
        Route::put('/update/{id}', [App\Http\Controllers\Admin\RasiNakshatraController::class, 'update'])->name('update');
        Route::get('/delete', [App\Http\Controllers\Admin\RasiNakshatraController::class, 'destroy'])->name('delete');
    });
    Route::name('rasi_navamsam.')->prefix('/rasi_navamsams')->group(function () {
        Route::get('/', [App\Http\Controllers\Admin\RasiNavamsamController::class, 'index'])->name('list');
        Route::post('/create', [App\Http\Controllers\Admin\RasiNavamsamController::class, 'create'])->name('create');
        Route::get('/edit/{id}', [App\Http\Controllers\Admin\RasiNavamsamController::class, 'edit'])->name('edit');
        Route::put('/update/{id}', [App\Http\Controllers\Admin\RasiNavamsamController::class, 'update'])->name('update');
        Route::get('/delete', [App\Http\Controllers\Admin\RasiNavamsamController::class, 'destroy'])->name('delete');
    });
    Route::name('social_type.')->prefix('/social_types')->group(function () {
        Route::get('/', [App\Http\Controllers\Admin\SocialTypeController::class, 'index'])->name('list');
        Route::post('/create', [App\Http\Controllers\Admin\SocialTypeController::class, 'create'])->name('create');
        Route::get('/edit/{id}', [App\Http\Controllers\Admin\SocialTypeController::class, 'edit'])->name('edit');
        Route::put('/update/{id}', [App\Http\Controllers\Admin\SocialTypeController::class, 'update'])->name('update');
        Route::get('/delete', [App\Http\Controllers\Admin\SocialTypeController::class, 'destroy'])->name('delete');
    });
    Route::name('work.')->prefix('/works')->group(function () {
        Route::get('/', [App\Http\Controllers\Admin\WorkController::class, 'index'])->name('list');
        Route::post('/create', [App\Http\Controllers\Admin\WorkController::class, 'create'])->name('create');
        Route::get('/edit/{id}', [App\Http\Controllers\Admin\WorkController::class, 'edit'])->name('edit');
        Route::put('/update/{id}', [App\Http\Controllers\Admin\WorkController::class, 'update'])->name('update');
        Route::get('/delete', [App\Http\Controllers\Admin\WorkController::class, 'destroy'])->name('delete');
    });
    Route::name('work_place.')->prefix('/work_places')->group(function () {
        Route::get('/', [App\Http\Controllers\Admin\WorkPlaceController::class, 'index'])->name('list');
        Route::post('/create', [App\Http\Controllers\Admin\WorkPlaceController::class, 'create'])->name('create');
        Route::get('/edit/{id}', [App\Http\Controllers\Admin\WorkPlaceController::class, 'edit'])->name('edit');
        Route::put('/update/{id}', [App\Http\Controllers\Admin\WorkPlaceController::class, 'update'])->name('update');
        Route::get('/delete', [App\Http\Controllers\Admin\WorkPlaceController::class, 'destroy'])->name('delete');
    });
    Route::name('state.')->prefix('/states')->group(function () {
        Route::get('/', [App\Http\Controllers\Admin\StateController::class, 'index'])->name('list');
        Route::post('/create', [App\Http\Controllers\Admin\StateController::class, 'create'])->name('create');
        Route::get('/edit/{id}', [App\Http\Controllers\Admin\StateController::class, 'edit'])->name('edit');
        Route::put('/update/{id}', [App\Http\Controllers\Admin\StateController::class, 'update'])->name('update');
        Route::get('/delete', [App\Http\Controllers\Admin\StateController::class, 'destroy'])->name('delete');
    });
    Route::name('sub_caste.')->prefix('/sub_castes')->group(function () {
        Route::get('/', [App\Http\Controllers\Admin\SubCasteController::class, 'index'])->name('list');
        Route::post('/create', [App\Http\Controllers\Admin\SubCasteController::class, 'create'])->name('create');
        Route::get('/edit/{id}', [App\Http\Controllers\Admin\SubCasteController::class, 'edit'])->name('edit');
        Route::put('/update/{id}', [App\Http\Controllers\Admin\SubCasteController::class, 'update'])->name('update');
        Route::get('/delete', [App\Http\Controllers\Admin\SubCasteController::class, 'destroy'])->name('delete');
    });

    Route::resource('religion', App\Http\Controllers\Admin\ReligionController::class);
    Route::resource('weight', App\Http\Controllers\Admin\WeightController::class);
    Route::resource('height', App\Http\Controllers\Admin\HeightController::class);
    Route::resource('physical_status', App\Http\Controllers\Admin\PhysicalStatusController::class);
    Route::resource('marital_status', App\Http\Controllers\Admin\MaritalStatusController::class);
    Route::resource('registered_by', App\Http\Controllers\Admin\RegisteredByController::class); 
    
});


Route::name('user.')->group(function () {
    Route::get('/member-listing', [App\Http\Controllers\User\MemberController::class, 'index'])->name('member-listing');
    Route::get('/jathagam', [App\Http\Controllers\User\MemberController::class, 'jathagam'])->name('jathagam');
    Route::get('/profile-search', [App\Http\Controllers\User\MemberController::class, 'search'])->name('search');
    Route::get('/profile', [App\Http\Controllers\User\MemberController::class, 'profile'])->name('profile');
    Route::get('/registers', [App\Http\Controllers\User\ProfileController::class, 'register'])->name('register');
    Route::post('/profile_store', [App\Http\Controllers\User\ProfileController::class, 'store'])->name('profile_store');
});
