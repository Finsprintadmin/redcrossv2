<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SectionsController;
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

Route::get('/', [DashboardController::class, 'Index'])->name('home');

Route::get('/pledges', [SectionsController::class, 'Pledges'])->name('pledges');

Route::get('/transactions', [SectionsController::class, 'Transactions'])->name('transactions');

Route::get('/donors', [SectionsController::class, 'Donors'])->name('donors');

Route::get('/campaigns', [SectionsController::class, 'Campaigns'])->name('campaigns');

Route::get('/roles', [SettingsController::class, 'Roles'])->name('roles');

Route::get('/users', [SettingsController::class, 'Users'])->name('users');

Route::get('/logs', [SettingsController::class, 'Logs'])->name('logs');
