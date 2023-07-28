<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SectionsController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\CampaignsController;
use Carbon\Carbon;

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

Route::get('/campaign/add', [SectionsController::class, 'AddCampaign'])->name('add_campaign');

Route::get('/campaign/create', [CampaignsController::class, 'Create'])->name('create_campaign');

Route::post('/campaign/save', [CampaignsController::class, 'Store'])->name('save_campaign');

Route::get('/campaign/show', [CampaignsController::class, 'Show'])->name('show_campaign');

Route::get('/campaign/view', [SectionsController::class, 'ViewCampaign'])->name('view_campaign');

//Route for Searching through data between two dates
//Route::get('/', function () {
//    if (request()->start_date || request()->end_date) {
//        $start_date = Carbon::parse(request()->start_date)->toDateTimeString();
//        $end_date = Carbon::parse(request()->end_date)->toDateTimeString();
//        $data = App\Models\Transaction::whereBetween('created_at',[$start_date,$end_date])->get();
//    } else {
//        $data = App\Models\Transaction::latest()->get();
//    }
//
//    return view('sections.transactions', compact('data'));
//});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
