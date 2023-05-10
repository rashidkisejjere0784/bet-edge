<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserProfileController;
use App\Http\Controllers\AdminProfileController;
use App\Http\Controllers\ResetPassword;
use App\Http\Controllers\ChangePassword;
use App\Http\Controllers\DepositController;
use App\Http\Controllers\GameController;
use App\Http\Controllers\ConstraintController;

use App\Http\Controllers\TransactionController;
use App\Http\Controllers\BetSlipController;


Route::get('/', function () {return redirect('/dashboard');})->middleware('auth');
	Route::get('/register', [RegisterController::class, 'create'])->middleware('guest')->name('register');
	Route::post('/register', [RegisterController::class, 'store'])->middleware('guest')->name('register.perform');
	Route::get('/login', [LoginController::class, 'show'])->middleware('guest')->name('login');
	Route::post('/login', [LoginController::class, 'login'])->middleware('guest')->name('login.perform');
	Route::get('/reset-password', [ResetPassword::class, 'show'])->middleware('guest')->name('reset-password');
	Route::post('/reset-password', [ResetPassword::class, 'send'])->middleware('guest')->name('reset.perform');
	Route::get('/change-password', [ChangePassword::class, 'show'])->middleware('guest')->name('change-password');
	Route::post('/change-password', [ChangePassword::class, 'update'])->middleware('guest')->name('change.perform');
	Route::get('/dashboard', [HomeController::class, 'index'])->name('home')->middleware('auth');
Route::group(['middleware' => 'auth'], function () {
	Route::get('/virtual-reality', [PageController::class, 'vr'])->name('virtual-reality');
	Route::get('/rtl', [PageController::class, 'rtl'])->name('rtl');
	Route::get('/profile', [UserProfileController::class, 'show'])->name('profile');
	Route::post('/profile', [UserProfileController::class, 'update'])->name('profile.update');
	Route::get('/profiles', [AdminProfileController::class, 'show'])->name('profiles');
	Route::post('/profiles', [AdminProfileController::class, 'update'])->name('profiles.update');
	Route::get('/profile-static', [PageController::class, 'profile'])->name('profile-static'); 
	Route::get('/sign-in-static', [PageController::class, 'signin'])->name('sign-in-static');
	Route::get('/sign-up-static', [PageController::class, 'signup'])->name('sign-up-static'); 
	Route::get('/{page}', [PageController::class, 'index'])->name('page');
	Route::post('logout', [LoginController::class, 'logout'])->name('logout');
	Route::post('/blog', [DepositController::class,'post']);

	Route::post('/addGame', [GameController::class,'store']);
	Route::post('/dConstraint', [ConstraintController::class,'deposit']);
	Route::post('/wConstraint', [ConstraintController::class,'withdraw']);
	Route::post('/sConstraint', [ConstraintController::class,'stake']);

	Route::post('/deposit', [TransactionController::class, 'depositTransaction']);
	Route::post('/withdraw', [TransactionController::class, 'withdrawTransaction']);

	Route::post('/addGameToSlip', [BetSlipController::class, 'addGame']);

	Route::post('/removeFromSlip', [BetSlipController::class, 'removeGame']);

	Route::post('/stake', [BetSlipController::class, 'stake']);

	Route::post('/stopGame', [BetSlipController::class, 'stopGame']);
});