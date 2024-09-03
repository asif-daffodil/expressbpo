<?php

use App\Http\Controllers\CompanyOverview;
use App\Http\Controllers\Contact;
use App\Http\Controllers\LeadershipTeam;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\WebDevelopmentService;
use App\Http\Controllers\WebsiteMaintainingService;
use App\Http\Controllers\WhyChooseUS;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/company-overview', [CompanyOverview::class, 'index'])->name('company-overview');
Route::get('/leadership-team', [LeadershipTeam::class, 'index'])->name('leadership-team');
Route::get('/why-choose-us', [WhyChooseUS::class, 'index'])->name('why-choose-us');
Route::get('/web-development-service', [WebDevelopmentService::class, 'index'])->name('web-development-service');
Route::get('/website-maintaining-service', [WebsiteMaintainingService::class, 'index'])->name('website-maintaining-service');
Route::get('/contact', [Contact::class, 'index'])->name('contact');

require __DIR__ . '/auth.php';
