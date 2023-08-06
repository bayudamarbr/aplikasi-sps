<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\PickupController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RatingAndReviewController;

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
    return view('home',[
        'title' => 'Home'
    ]);
});

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::get('/admin/dashboard', [LoginController::class, 'admin'])->name('admin')->middleware('auth');
Route::get('/admin/message', [LoginController::class, 'message'])->name('message')->middleware('auth');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);
Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/data_sampah', [PickupController::class, 'data_sampah'])->middleware('auth');
Route::get('/pembayaran/{id}', [PickupController::class, 'pembayaran'])->name('pembayaran.form')->middleware('auth');


Route::get('/qris/{id}', [PickupController::class, 'qris'])->name('qris.form')->middleware('auth');
Route::get('/sukses/{id}', [PickupController::class, 'sukses'])->name('transaksi.sukses')->middleware('auth');
Route::post('/rating-review', [RatingAndReviewController::class, 'store'])->name('rating.review.store')->middleware('auth');


Route::post('/data_sampah', [PickupController::class, 'storePickup']);
Route::get('/cservice', [MessageController::class, 'view'])->name('cservice');
Route::post('/cservice/store', [MessageController::class, 'storeMessage'])->name('cservice.store');

Route::post('/pembayaran/{id}', [PickupController::class, 'storePayment']);
Route::post('/qris/{id}', [PickupController::class, 'upload'])->name('qris.upload');

Route::get('pickup/{id}/edit', [PickupController::class, 'edit'])->name('pickup.edit')->middleware('auth');
Route::put('pickup/{id}/update', [PickupController::class, 'update'])->name('pickup.update')->middleware('auth');
Route::delete('pickup/{id}/destroy', [PickupController::class, 'destroy'])->name('pickup.destroy')->middleware('auth');

Route::get('/profile/{id}/edit', [ProfileController::class, 'edit'])->name('profile.edit')->middleware('auth');
Route::put('/profile/{id}/update', [ProfileController::class, 'update'])->name('profile.update')->middleware('auth');
Route::put('/profile/{id}/change-password', [ProfileController::class, 'changePassword'])->name('profile.changePassword')->middleware('auth');
Route::put('/profile/{id}/change-password', [ProfileController::class, 'changePassword'])->name('profile.changePassword')->middleware('auth');

Route::get('/login/google', [LoginController::class, 'redirectToGoogle']);
Route::get('/login/google/callback', [LoginController::class, 'handleGoogleCallback']);

Route::get('/homepage', [HomeController::class, 'index'])->name('homepage');
Route::get('about', [HomeController::class, 'about'])->name('about');
Route::get('sampah', [HomeController::class, 'sampah'])->name('sampah');


