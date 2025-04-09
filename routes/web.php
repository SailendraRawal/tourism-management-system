<?php

use App\Http\Controllers\Admin\BookingController as AdminBookingController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\PackageController;
use App\Http\Controllers\Admin\UserController as AdminUserController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\EsewaController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Web\HomeController;
use Illuminate\Support\Facades\Route;


Route::prefix('admin')->middleware(['auth'])->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('admin.dashboard');
    Route::resource('packages', PackageController::class);
    Route::resource('users', AdminUserController::class);
    Route::resource('bookings', AdminBookingController::class)->only(['index', 'show']);

});


Route::post('/submit-booking', [BookingController::class, 'store']);
Route::get('/search-booking', [BookingController::class, 'search'])->middleware('auth')->name('booking.search');

Route::post('/login', [AuthController::class, 'login']);
// Route::get('/admin/bookings', [BookingController::class, 'index'])->middleware('auth')->name('admin.bookings');
Route::post('/admin/bookings/{id}/approve', [BookingController::class, 'approve'])->middleware('auth');
Route::get('/logout', [AuthController::class, 'logout'])->middleware('auth');
Route::post('/admin/bookings/{booking}/reject', [BookingController::class, 'rejectBooking'])->name('admin.bookings.reject')->middleware('auth');
Route::post('/register', [AuthController::class, 'register'])->name('register');
Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register.form');

Route::middleware(['auth'])->group(function () {
    Route::post('/package-booking', [BookingController::class, 'store'])->name('package.booking');
});

Route::get('/esewa/success', [EsewaController::class, 'success'])->name('esewa.success');
Route::get('/esewa/failure', [EsewaController::class, 'success'])->name('esewa.failure');


Route::match(['get', 'post'], '/{slug}', [HomeController::class, 'slug'])->where('slug', '.*')->name('dynamic.page');
