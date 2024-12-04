<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BookingController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
     return view('homepage');
});

Route::post('/submit-booking', [BookingController::class, 'store']);
Route::get('/search-booking', [BookingController::class, 'search'])->name('booking.search');

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/admin/bookings', [BookingController::class, 'index']);
Route::post('/admin/bookings/{id}/approve', [BookingController::class, 'approve']);
Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth');
Route::post('/admin/bookings/{booking}/reject', [BookingController::class, 'rejectBooking'])->name('admin.bookings.reject');


Route::get('/{slug}', function ($slug) {
    // Sanitize and validate the slug to ensure it corresponds to an actual view
    if (view()->exists($slug)) {
        return view($slug);
    }

    // If the view does not exist, return a 404 response
    abort(404);
});
