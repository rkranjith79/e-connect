<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/user-login', function () {
    return view('user.login');
})->name('user-login');
Route::get('/',  [App\Http\Controllers\User\MemberController::class, 'index'])->name('index');

Auth::routes();

Route::get('/language/{locale}', function (string $locale) {
    if (!in_array($locale, ['en', 'ta'])) {
        abort(400);
    }
    \Illuminate\Support\Facades\App::setLocale($locale);
    session()->put('locale', $locale);

    return redirect()->back();
})->name("language.set");

Route::get('/registers', [App\Http\Controllers\User\ProfileController::class, 'register'])->name('registers');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::name('admin.')->prefix('admin')->middleware(['auth', 'isAdmin'])->group(function () {
    Route::get('/', [App\Http\Controllers\Admin\AdminDashboardController::class, 'index'])->name('index');

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
    Route::resource('plan', App\Http\Controllers\PlanController::class);
    Route::put('plan-deactivate/{id}', [App\Http\Controllers\PlanController::class, 'deactivate'])->name('plan.deactivate');
    Route::put('plan-activate/{id}', [App\Http\Controllers\PlanController::class, 'activate'])->name('plan.activate');
    Route::get('purchased_plan', [App\Http\Controllers\PurchasedPlanController::class, 'index'])->name('purchased_plan.index');
    Route::get('purchased_profile', [App\Http\Controllers\PurchasedProfileController::class, 'index'])->name('purchased_profile.index');
});

Route::name('user.')->prefix('user')->middleware(['auth'])->group(function () {
    Route::get('/jathagam/{id?}/{uuid?}', [App\Http\Controllers\User\MemberController::class, 'jathagam'])->name('jathagam');
    Route::get('/jathagam-print/{id?}/{uuid?}', [App\Http\Controllers\User\MemberController::class, 'jathagamPrint'])->name('jathagam_print');
    Route::get('/interested-profile/{interested_profile_id}/u/{interested_profile_uuid}/my/{profile_id}/u/{profile_uuid}', [App\Http\Controllers\User\ProfileController::class, 'updateInterestedProfile'])->name('update_interested_profile');
    Route::get('/ignored-profile/{ignored_profile_id}/u/{ignored_profile_uuid}/my/{profile_id}/u/{profile_uuid}', [App\Http\Controllers\User\ProfileController::class, 'updateIgnoredProfile'])->name('update_ignored_profile');

    Route::get('/profile-advanced-search', [App\Http\Controllers\User\MemberController::class, 'advancedSearch'])->name('advancedSearch');
    Route::get('/profile-search', [App\Http\Controllers\User\MemberController::class, 'search'])->name('search');
    Route::get('/profile/{id?}/{uuid?}', [App\Http\Controllers\User\MemberController::class, 'profile'])->name('profile');
    Route::get('/profile-edit/{profile?}', [App\Http\Controllers\User\ProfileController::class, 'edit'])->name('profile_edit');
    Route::get('/change-password', [App\Http\Controllers\User\ProfileController::class, 'changePassword'])->name('change_password');
    Route::post('/update-password', [App\Http\Controllers\User\ProfileController::class, 'updatePassword'])->name('update_password');
    Route::put('/profile-update/{id}', [App\Http\Controllers\User\ProfileController::class, 'update'])->name('profile_update');
    Route::get('/interested-profiles/{profile?}', [App\Http\Controllers\User\ProfileController::class, 'interestedProfile'])->name('interested_profile');
    Route::get('/ignored-profiles/{profile?}', [App\Http\Controllers\User\ProfileController::class, 'ignoredProfile'])->name('ignored_profile');
    Route::get('/purchased-profiles/{profile?}', [App\Http\Controllers\User\ProfileController::class, 'purchasedProfile'])->name('purchased_profile');

    Route::get('/purchase-profile-availability/{purchased_profile_id}/u/{purchased_profile_uuid}/my/{profile}/u/{profile_uuid}', [App\Http\Controllers\User\MemberController::class, 'checkPurchasedProfileAvailability'])->name('purchase_profile_availability');
    Route::get('/purchase-plan/{profile}/u/{profile_uuid}', [App\Http\Controllers\User\ProfileController::class, 'purchasePlan'])->name('purchase_plan');
    Route::get('/purchase-profile/{purchased_profile_id}/u/{purchased_profile_uuid}/my/{profile}/u/{profile_uuid}', [App\Http\Controllers\User\ProfileController::class, 'purchaseProfile'])->name('purchase_profile');
    Route::post('/admin/update-profile/{profile}', [App\Http\Controllers\Admin\UserController::class, 'updateLastLoginProfile'])->name('update_last_login_profile');
    Route::post('/profile/create-authenticated', [App\Http\Controllers\User\ProfileController::class, 'profileCreateAuthenticated'])->name('profile_create_authenticated');

});

Route::get('razorpay-payment', [App\Http\Controllers\RazorpayPaymentController::class, 'index']);
Route::post('razorpay-payment', [App\Http\Controllers\RazorpayPaymentController::class, 'store'])->name('razorpay.payment.store');
Route::get('phonepay-payment', [App\Http\Controllers\RazorpayPaymentController::class, 'makePhonePePayment'])->name('phonepe.payment');
Route::any('phonepay-payment-callback', [App\Http\Controllers\RazorpayPaymentController::class, 'phonePeCallback'])->name('phonepe.payment-callback');
Route::post('phonepay-payment-failed', [App\Http\Controllers\RazorpayPaymentController::class, 'failedCallback'])->name('phonepe.payment-failed');


Route::get('user/information/{code?}', [App\Http\Controllers\User\InformationController::class, 'index'])->name('user.information');
Route::get('user/member-listing', [App\Http\Controllers\User\MemberController::class, 'listing'])->name('user.member-listing');
Route::post('user/profile_store', [App\Http\Controllers\User\ProfileController::class, 'store'])->name('user.profile_store');

