<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HostessController;
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

    Route::get('/hostess_profile',[HostessController::class, 'updateProfile'])->name('hostess_profile');
    Route::post('save_hostess_profile', [HostessController::class, 'profileUpdate'])->name('save_hostess_profile');
    Route::post('delete_gallery', [HostessController::class, 'destroy'])->name('delete_gallery');
    Route::post('update_gallery',[HostessController::class, 'updateGallery'])->name('updateGallery');
    Route::post('change_gallery_status', [HostessController::class, 'change_gallery_status'])->name('change_gallery_status');
    Route::post('save_profilePic', [HostessController::class, 'storeProfilePic'])->name('save_profilePic');
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
        Route::post('changeStatus', [AdminUserController::class, 'changeStatusUser'])->name('admin.changeStatusUser');
        Route::post('delete_user', [AdminUserController::class, 'destroy'])->name('delete_contact');  
        Route::get('addUser/{id?}', [AdminUserController::class, 'create'])->name('admin.addUser');
        Route::post('save_user', [AdminUserController::class, 'store'])->name('save_user');

        Route::get('hostess', [AdminUserController::class, 'hostessList'])->name('admin.hostessList');
        
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
