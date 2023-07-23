<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SectionsController;
use App\Http\Controllers\SettingsController;

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
Route::group(['middleware' => 'auth'], function () {
    Route::get('/', [DashboardController::class, 'Index'])->name('home');
    Route::post('/logout', [CustomAuthController::class, 'logout'])->name('logout');
});



Route::get('/pledges', [SectionsController::class, 'Pledges'])->name('pledges');

Route::get('/transactions', [SectionsController::class, 'Transactions'])->name('transactions');

Route::get('/donors', [SectionsController::class, 'Donors'])->name('donors');

Route::get('/campaigns', [SectionsController::class, 'Campaigns'])->name('campaigns');

Route::get('/roles', [SettingsController::class, 'Roles'])->name('roles');

Route::get('/users', [SettingsController::class, 'Users'])->name('users');

Route::get('/logs', [SettingsController::class, 'Logs'])->name('logs');

Route::get('/reg', [SettingsController::class, 'Reg'])->name('reg');

Route::get('/signin', [SettingsController::class, 'Signin'])->name('signin');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
