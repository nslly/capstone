<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PackageController;
use App\Http\Controllers\ProfileController;

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





Route::resource('booking', BookingController::class)->middleware(['auth', 'verified']);

Route::resource('package', PackageController::class);


Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/about_us', function () {
    return view('about_us');
})->name('about_us');

// Route::get('/home/success', function () {
//     return view('success');
// })->middleware(['auth', 'verified'])->name('success');

// Route::get('/home/failed', function () {
//     return view('failed');
// })->middleware(['auth', 'verified'])->name('failed');

Route::middleware(['auth'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
