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
    Route::get('/users', [App\Http\Controllers\Admin\UserController::class, 'index'])->name('users');
});

Route::name('user.')->group(function () {
    Route::get('/member-listing', [App\Http\Controllers\User\MemberController::class, 'index'])->name('member-listing');
    Route::get('/jathagam', [App\Http\Controllers\User\MemberController::class, 'jathagam'])->name('jathagam');
    Route::get('/profile-search', [App\Http\Controllers\User\MemberController::class, 'search'])->name('search');
    Route::get('/profile', [App\Http\Controllers\User\MemberController::class, 'profile'])->name('profile');

});
