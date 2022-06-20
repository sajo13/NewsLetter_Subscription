<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MailController;


Route::get('/dashboard', DashboardController::class)->middleware('auth')
    ->name('admin-dashboard');
Route::get('/admin-post', DashboardController::class)->middleware('auth')
    ->name('admin-post');
Route::get('/subscribed-users', DashboardController::class)->middleware('auth')
    ->name('subscribed-users');

Route::get('/login', [AuthController::class, 'show'])->name('login');
Route::get('/logout', [AuthController::class, 'logOut'])->name('logout');
Route::post('admin', [AuthController::class, 'login'])->name('admin-login');

// Route::get('/home', function () {
//     return view('welcome');
// });
Route::get('/home', [MailController::class, 'home'])->name('home');
Route::post('mailSave', [MailController::class, 'mailSave'])->name('mail-save');

