<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\ConfirmablePasswordController;
use App\Http\Controllers\Auth\EmailVerificationNotificationController;
use App\Http\Controllers\Auth\EmailVerificationPromptController;
use App\Http\Controllers\Auth\NewPasswordController;
use App\Http\Controllers\Auth\PasswordController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\VerifyEmailController;

use App\Http\Controllers\UserController;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect(app()->getLocale());
});

Route::prefix('{locale}')->where(['locale' => '[a-zA-Z]{2}'])
    ->middleware('setlocale')->group(function() {
Route::middleware('guest')->group(function () {
    
    // Route::get('register', [UserController::class, 'index'])->name('user.register');
    // Route::post('register', [UserController::class, 'store'])->name('user.postRegister');
    Route::get('register', [RegisteredUserController::class, 'create'])
                ->name('register');

    Route::post('register', [RegisteredUserController::class, 'store'])->name('user.postRegister');
     Route::post('registerStep2', [RegisteredUserController::class, 'registerStep2'])->name('user.registerStep2');

    Route::get('otpForm/{id?}', [RegisteredUserController::class, 'otpForm'])->name('user.otpForm');
    Route::get('step2Form/{id?}', [RegisteredUserController::class, 'step2Form'])->name('user.step2Form');
    Route::post('otpForm', [RegisteredUserController::class, 'verifyOtp'])->name('user.verifyOtp');
    Route::get('emailForm/{id?}', [RegisteredUserController::class, 'emailForm'])->name('user.emailForm');
    Route::post('emailForm', [RegisteredUserController::class, 'verifyEmailOtp'])->name('user.verifyEmailOtp');

    
    Route::get('login', [AuthenticatedSessionController::class, 'create'])
                ->name('login');

    Route::post('login', [AuthenticatedSessionController::class, 'store']);

    Route::get('forgot-password', [PasswordResetLinkController::class, 'create'])
                ->name('password.request');

    Route::post('forgot-password', [PasswordResetLinkController::class, 'store'])
                ->name('password.email');

    Route::get('reset-password/{token}', [NewPasswordController::class, 'create'])
                ->name('password.reset');

    Route::post('reset-password', [NewPasswordController::class, 'store'])
                ->name('password.store');
});


Route::middleware('auth')->group(function () {
    Route::get('verify-email', EmailVerificationPromptController::class)
                ->name('verification.notice');

    Route::get('verify-email/{id}/{hash}', VerifyEmailController::class)
                ->middleware(['signed', 'throttle:6,1'])
                ->name('verification.verify');

    Route::post('email/verification-notification', [EmailVerificationNotificationController::class, 'store'])
                ->middleware('throttle:6,1')
                ->name('verification.send');

    Route::get('confirm-password', [ConfirmablePasswordController::class, 'show'])
                ->name('password.confirm');

    Route::post('confirm-password', [ConfirmablePasswordController::class, 'store']);

    Route::put('password', [PasswordController::class, 'update'])->name('password.update');

    Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])
                ->name('logout');
});
});
