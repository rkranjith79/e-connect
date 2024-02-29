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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/',  [App\Http\Controllers\User\MemberController::class, 'index'])->name('index');

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

    Route::resource('religion', App\Http\Controllers\Admin\ReligionController::class);
    Route::resource('weight', App\Http\Controllers\Admin\WeightController::class);
    Route::resource('height', App\Http\Controllers\Admin\HeightController::class);
    Route::resource('physical_status', App\Http\Controllers\Admin\PhysicalStatusController::class);
    Route::resource('marital_status', App\Http\Controllers\Admin\MaritalStatusController::class);
    Route::resource('registered_by', App\Http\Controllers\Admin\RegisteredByController::class);
    Route::resource('body_type', App\Http\Controllers\Admin\BodyTypeController::class);
    Route::resource('color', App\Http\Controllers\Admin\ColorController::class);
    Route::resource('district', App\Http\Controllers\Admin\DistrictConroller::class);
    Route::resource('nakshatra_patham', App\Http\Controllers\Admin\NakshatraPathamController::class);
    Route::resource('navamsam', App\Http\Controllers\Admin\NavamsamController::class);
    Route::resource('rasi', App\Http\Controllers\Admin\RasiController::class);
    Route::resource('assets_value', App\Http\Controllers\Admin\AssetsValueController::class);
    Route::resource('birth_dasa', App\Http\Controllers\Admin\BirthDasaController::class);
    Route::resource('blood_group', App\Http\Controllers\Admin\BloodGroupController::class);
    Route::resource('country', App\Http\Controllers\Admin\CountryController::class);
    Route::resource('state', App\Http\Controllers\Admin\StateController::class);
    Route::resource('education', App\Http\Controllers\Admin\EducationController::class);
    Route::resource('expectation', App\Http\Controllers\Admin\ExpectationController::class);
    Route::resource('gender', App\Http\Controllers\Admin\GenderController::class);
    Route::resource('caste', App\Http\Controllers\Admin\CasteController::class);
    Route::resource('sub_caste', App\Http\Controllers\Admin\SubCasteController::class);
    Route::resource('work_place', App\Http\Controllers\Admin\WorkPlaceController::class);
    Route::resource('work', App\Http\Controllers\Admin\WorkController::class);
    Route::resource('social_type', App\Http\Controllers\Admin\SocialTypeController::class);
    Route::resource('rasi_navamsam', App\Http\Controllers\Admin\RasiNavamsamController::class);
    Route::resource('rasi_nakshatra', App\Http\Controllers\Admin\RasiNakshatraController::class);
    Route::resource('parent_status', App\Http\Controllers\Admin\ParentStatusController::class);
    Route::resource('lagnam', App\Http\Controllers\Admin\LagnamController::class);
    Route::resource('jathagam', App\Http\Controllers\Admin\JathagamController::class);
    Route::resource('site_configuration', App\Http\Controllers\Admin\SiteConfigurationsController::class);
    Route::post('site_configuration/create_code', [App\Http\Controllers\Admin\SiteConfigurationsController::class, 'storeCode'])->name('site_configuration.store_code');
    Route::resource('information_admin', App\Http\Controllers\Admin\InformationController::class);
});

Route::name('user.')->group(function () {
    Route::get('/member-listing', [App\Http\Controllers\User\MemberController::class, 'listing'])->name('member-listing');
    Route::get('/jathagam/{id?}', [App\Http\Controllers\User\MemberController::class, 'jathagam'])->name('jathagam');
    Route::get('/profile-search', [App\Http\Controllers\User\MemberController::class, 'search'])->name('search');
    Route::get('/profile/{id?}', [App\Http\Controllers\User\MemberController::class, 'profile'])->name('profile');
    Route::get('/registers', [App\Http\Controllers\User\ProfileController::class, 'register'])->name('registers');
    Route::post('/profile_store', [App\Http\Controllers\User\ProfileController::class, 'store'])->name('profile_store');
    Route::get('/information/{id?}', [App\Http\Controllers\User\InformationController::class, 'index'])->name('information');
});
