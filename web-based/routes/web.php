<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\BlotterController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\AnnouncementController;

require __DIR__.'/auth.php';

Route::post('/login', [LoginController::class, 'login'])->name('login.post');
Route::post('/signup', [RegisterController::class, 'register'])->name('register.post');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
Route::post('/forgot-password', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');
Route::post('/reset-password', [ResetPasswordController::class, 'reset'])->name('password.update');

Route::get('/forgot-password', function () {
    return view('auth.forgot-password');
})->name('password.request');

Route::get('/reset-password/{token}', function ($token) {
    return view('auth.reset-password', ['token' => $token]);
})->name('password.reset');

Route::get('/', function () {
    return view('index');
});

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/signup', function () {
    return view('signup');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/faq', function () {
    return view('faq');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/terms', function () {
    return view('terms');
});

Route::get('/privacy', function () {
    return view('privacy');
});


// Authenticated Routes
Route::middleware(['auth'])->group(function () {

    Route::get('/home', [HomeController::class, 'index']);

    // Settings Page
    Route::get('/settings', [ProfileController::class, 'index'])->name('settings');
    Route::post('/settings/update', [ProfileController::class, 'update'])->name('settings.update');
    Route::post('/settings/update-password', [ProfileController::class, 'updatePassword'])->name('settings.password');
    Route::post('/settings/delete-account', [ProfileController::class, 'destroy'])->name('settings.deleteAccount');

    // Notification Page
    Route::get('/notifications', [NotificationController::class, 'index'])->name('notifications');
    Route::post('/notifications/{id}/read', [NotificationController::class, 'markAsRead'])
            ->name('notifications.read');
    Route::delete('/notifications/{id}', [NotificationController::class, 'destroy'])
            ->name('notifications.delete');

    // Blotter Page
    Route::get('/blotter', [BlotterController::class, 'create'])->name('blotter.create');
    Route::post('/blotter', [BlotterController::class, 'store'])->name('blotter.store');
    Route::get('/blotter/list', [BlotterController::class, 'index'])->name('blotter.index');
    Route::get('/blotter/{blotter}', [BlotterController::class, 'show'])->name('blotter.show');

    // Appointment Page
    Route::get('/appointment', [AppointmentController::class, 'index'])->name('appointment.index');
    Route::post('/appointment', [AppointmentController::class, 'store'])->name('appointment.store');
    Route::post('/appointment/{appointment}/cancel', [AppointmentController::class, 'cancel'])->name('appointment.cancel');
    Route::post('/appointment/{appointment}/read', [AppointmentController::class, 'markAsRead'])->name('appointment.read');
    Route::get('/appointment/{appointment}', [AppointmentController::class, 'show'])->name('appointment.show');

    // Announcement Page
    Route::get('/announcements', [AnnouncementController::class, 'index'])->name('announcements.index');
    
    // Other authenticated pages
    Route::get('/orders', fn() => view('orders'));
    Route::get('/documents', fn() => view('documents'));
    Route::get('/verify', fn() => view('verify'));
    Route::get('/document', fn() => view('document'));
});


// Admin Routes
Route::get('/admin/home', function () {
    return view('admin.home');
});
Route::get('/admin/settings', function () {
    return view('admin.settings');
});
Route::get('/admin/users', function () {
    return view('admin.users');
});
Route::get('/admin/orders', function () {
    return view('admin.orders');
});
Route::get('/admin/announcements', function () {
    return view('admin.announcements');
});
Route::get('/admin/appointment', function () {
    return view('admin.appointment');
});
Route::get('/admin/verifications', function () {
    return view('admin.verifications');
});
Route::get('/admin/blotters', function () {
    return view('admin.blotters');
});
Route::get('/about', function () {
    return view('about');
});