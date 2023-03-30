<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

//Admin Controllers
use App\Http\Controllers\Admin\AdminUserController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', function () {
    return Redirect::to('/login');
});

// Route::get('/register_old', [UserController::class, 'index'])->name('user.register');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

//Verify phone and email for registration
// Route::get('otpForm/{id?}', [UserController::class, 'otpForm'])->name('user.otpForm');
// Route::post('otpForm', [UserController::class, 'verifyOtp'])->name('user.verifyOtp');
// Route::get('emailForm/{id?}', [UserController::class, 'emailForm'])->name('user.emailForm');
// Route::post('emailForm', [UserController::class, 'verifyEmailOtp'])->name('user.verifyEmailOtp');

Route::middleware('auth')->group(function () {
    Route::get('profile', [UserController::class, 'edit'])->name('profile.edit');
    Route::post('profile/{user}',[UserController::class,'update'])->name('profile.update');
    // Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    // Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('logout', function ()
    {
        auth()->logout();
        Session()->flush();

        return Redirect::to('/login');
    })->name('user.logout');
});

Route::group(['prefix' => 'admin'], function () {
    Route::get('login', [AdminUserController::class, 'adminLogin'])->name('admin.login');
    Route::middleware(['auth'])->group(function () {


        Route::get('users', [AdminUserController::class, 'index'])->name('admin.users');
        Route::post('delete_user', [AdminUserController::class, 'destroy'])->name('delete_contact');  

        Route::get('dashboard', [AdminUserController::class, 'dashboard'])->name('admin.dashboard');        
        
        Route::get('logout', function ()
        {
            auth()->logout();
            Session()->flush();

            return Redirect::to('/admin/login');
        })->name('admin.logout');
    });

});
require __DIR__.'/auth.php';
