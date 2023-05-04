<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BillingController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\PackageController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SendingMailController;
use App\Http\Controllers\TouristGuideController;
use App\Http\Controllers\EditReservationController;
use App\Http\Controllers\SendingMailReceiptController;

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





Route::get('booking/already-reserved', function() {
    return view('booking.already_book');
})->name('already_book')->middleware(['auth', 'verified']);
Route::get('booking/pending-confirmation', function() {
    return view('booking.pending_confirmation');
})->name('pending_confirmation')->middleware(['auth', 'verified']);
Route::resource('booking', BookingController::class)->middleware(['auth', 'verified']);


Route::post('packages/{id}/add-service', [PackageController::class, 'add_service_session']);
Route::post('packages/book', [PackageController::class, 'book_package'])->name('package.book');
Route::get('packages/{id}/add-service', [PackageController::class, 'add_service'])->name('package.add_service')->middleware(['auth', 'verified']);
Route::resource('packages', PackageController::class)->names('package');


Route::get('/payment', [BillingController::class, 'index'])->name('payment')->middleware(['auth', 'verified','is_status']);
Route::get('/payment/already-uploaded',function() {
    return view('payment.already_paid');
})->name('payment.already_paid')->middleware(['auth', 'verified','is_status']);
Route::get('/payment/user-reserved-paid', function() {
    return view('payment.thank_you');
})->name('payment.paid')->middleware(['auth', 'verified','is_status']);
Route::post('/payment', [BillingController::class, 'store'])->name('payment.store')->middleware(['auth', 'verified']);


Route::get('/gallery', [GalleryController::class, 'index'])->name('gallery');


Route::get('/send-email', [SendingMailController::class, 'store'])->name('send-email');
Route::get('/send-email-receipt', [SendingMailReceiptController::class, 'store'])->name('send-email-receipt');

Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/about-us', function () {
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
