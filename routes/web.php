<?php

use App\Http\Controllers\UserController;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome2');
})->name('welcome');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/login-google', [UserController::class, 'login'])->middleware('guest')->name('login-google');

Route::get('/checkout', function () {
    return view('checkout');
})->name('checkout');

Route::get('/success-checkout', function () {
    return view('success-checkout');
})->name('success-checkout');

// Socialite routes
Route::get('sign-in-google', [UserController::class, 'google'])->name('user.login.google');
Route::get('auth/google/callback', [UserController::class, 'handleProviderCallback'])->name('user.google.callback');

// Route::get('/auth/redirect', function () {
//     return Socialite::driver('github')->redirect();
// });

require __DIR__ . '/auth.php';
