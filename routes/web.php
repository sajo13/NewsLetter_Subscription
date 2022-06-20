<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\SendBulkMailController;
use App\Http\Controllers\PostController;

Route::get('/dashboard', DashboardController::class)->middleware('auth')
    ->name('admin-dashboard');
Route::get('/add-post', [PostController::class, 'show'])->middleware('auth')
    ->name('post-add');
Route::post('post-save', [PostController::class, 'adminPost'])->middleware('auth')
    ->name('admin-post');

Route::get('/unSubscribe', [MailController::class, 'mailUnsubscribe']);


Route::get('/login', [AuthController::class, 'show'])->name('login');
Route::get('/logout', [AuthController::class, 'logOut'])->name('logout');
Route::post('admin', [AuthController::class, 'login'])->name('admin-login');

Route::get('/home', [MailController::class, 'home'])->name('home');
Route::post('mailSave', [MailController::class, 'mailSave'])->name('mail-save');

Route::get('send-bulk-mail', [SendBulkMailController::class, 'sendBulkMail'])->name('send-bulk-mail');