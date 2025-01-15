<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
     return view('homepage');
});

Route::post('/submit-booking', [BookingController::class, 'store']);
Route::get('/search-booking', [BookingController::class, 'search'])->middleware('auth')->name('booking.search');

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/admin/bookings', [BookingController::class, 'index'])->middleware('auth')->name('admin.bookings');
Route::post('/admin/bookings/{id}/approve', [BookingController::class, 'approve'])->middleware('auth');
Route::get('/logout', [AuthController::class, 'logout'])->middleware('auth');
Route::post('/admin/bookings/{booking}/reject', [BookingController::class, 'rejectBooking'])->name('admin.bookings.reject')->middleware('auth');
Route::post('/register', [AuthController::class, 'register'])->name('register');
Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register.form');

Route::middleware(['auth'])->group(function () {
    Route::resource('/admin/users', UserController::class);
    Route::get('/booking', [BookingController::class, 'booking'])->name('booking.form');
    Route::get('/my-booking', [BookingController::class, 'myBooking'])->name('myBooking.index');

});




Route::get('/{slug}', function ($slug) {
    // Sanitize and validate the slug to ensure it corresponds to an actual view
    if (view()->exists($slug)) {
        return view($slug);
    }

    // If the view does not exist, return a 404 response
    abort(404);
});
