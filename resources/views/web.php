<?php
use App\Http\Controllers\LangController;

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HostessController;


use App\Http\Controllers\ChatController;

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

Route::get('lang/change', [LangController::class, 'change'])->name('changeLang');

    // Route::get('/', function () {
    //     return redirect(app()->getLocale());
    // });

    Route::get('layouts', function () {
        return view('layouts.layout');
    });

    Route::get('/en', function () {
        return Redirect::to('/en/home');
    });
   

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->middleware(['auth', 'verified'])->name('dashboard');

//Verify phone and email for registration
// Route::get('otpForm/{id?}', [UserController::class, 'otpForm'])->name('user.otpForm');
// Route::post('otpForm', [UserController::class, 'verifyOtp'])->name('user.verifyOtp');
// Route::get('emailForm/{id?}', [UserController::class, 'emailForm'])->name('user.emailForm');
// Route::post('emailForm', [UserController::class, 'verifyEmailOtp'])->name('user.verifyEmailOtp');

// User Routes
Route::prefix('{locale}')->where(['locale' => '[a-zA-Z]{2}'])
    ->middleware('setlocale')->group(function() {
Route::middleware(['auth', 'user-access:0'])->group(function () {
    
    Route::get('profile', [UserController::class, 'edit'])->name('profile.edit');
    Route::post('profile/{user}',[UserController::class,'update'])->name('profile.update');

});

// Route::get('hostess_profile_new/{id?}', function(){
//     $user = UserService::getUserById(Request::segment(3));
//     // $getServices = explode(",",$user->services);
//     // $prefix = MobilePrefix::select('prefix')->get();
//     // return view('hostess_profile_new', compact('user', 'id', 'prefix', 'getServices'));
//     return view('hostess_profile_new' , compact('user'));
// });
Route::get('home', [HostessController::class, 'home'])->name('home');
Route::get('hostess_profile_new/{id?}', [HostessController::class, 'showHostess'])->name('showHostess');
Route::post('confirmMsg', [ChatController::class, 'confirmMsg'])->name('confirmMsg');
Route::post('sendMessageToHostess', [ChatController::class, 'sendMessageToHostess'])->name('sendMessageToHostess');
Route::post('sendFreeMessageToHostess', [ChatController::class, 'sendFreeMessageToHostess'])->name('sendFreeMessageToHostess');
Route::get('payment-success', [UserController::class, 'paymentSuccess'])->name('payment-success');
Route::post('save_response', [UserController::class, 'saveResponse'])->name('save_response');
Route::get('hostess-search-result', [HostessController::class, 'hostessSearchResult'])->name('hostess-search-result');
Route::get('how-does-it-work', [HostessController::class, 'howDoesItWork'])->name('how-does-it-work');

Route::get('user-chat/{id?}', [UserController::class, 'userChat'])->name('userChat');



    Route::get('logout', function ()
    {
        if(Auth::user()->role == 'user')
        {
            auth()->logout();
            // Session()->flush();
            if(app()->getLocale() == 'en')
                return redirect('/en/login');
            else if(app()->getLocale() == 'it')
                return redirect('/it/login');
            else if(app()->getLocale() == 'sp')
                return redirect('/sp/login');
        }
        else if(Auth::user()->role == 'Admin')
        {
            auth()->logout();
            // Session()->flush();
            return Redirect::to('admin/login');
        }

    })->name('user.logout');


// Hostess Routes
    Route::middleware(['auth', 'user-access:2'])->group(function () {
        Route::get('/hostess_profile',[HostessController::class, 'updateProfile'])->name('hostess_profile');
        Route::post('save_hostess_profile', [HostessController::class, 'profileUpdate'])->name('save_hostess_profile');
        Route::post('delete_gallery', [HostessController::class, 'destroy'])->name('delete_gallery');
        Route::post('update_gallery',[HostessController::class, 'updateGallery'])->name('updateGallery');
        Route::post('change_gallery_status', [HostessController::class, 'change_gallery_status'])->name('change_gallery_status');
        Route::post('save_profilePic', [HostessController::class, 'storeProfilePic'])->name('save_profilePic');
        Route::post('set_cover_image', [HostessController::class, 'setCoverImage'])->name('set_cover_image');
        // Route::post('profile/{user}',[UserController::class,'update'])->name('profile.update');
        // Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
        // Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    });


    });


// Admin Routes
Route::prefix('{locale}')->where(['locale' => '[a-zA-Z]{2}'])
    ->middleware('setlocale')->group(function() {
Route::group(['prefix' => 'admin'], function () {
    Route::get('/', [AdminUserController::class, 'adminLogin'])->name('admin.login');
    Route::get('login', [AdminUserController::class, 'adminLogin'])->name('admin.login');
    Route::middleware(['auth', 'user-access:1'])->group(function () {


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

            return Redirect::to('en/admin/login');
        })->name('admin.logout');
    });

});

});
require __DIR__.'/auth.php';
