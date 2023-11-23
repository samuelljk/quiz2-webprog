<?php

use App\Models\User;
use App\Models\Review;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardCreateController;
use App\Http\Controllers\DashboardReviewController;

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

Route::get('/laravel', function () {
    return view('laravel');
});

Route::get('/', function () {
    return view('homepage');
});
Route::get('/', [ReviewController::class, 'indexforHomepage']);
// Route::get('/', [ReviewController::class, 'getUserData']);
Route::get('/homepage', function () {
    return view('homepage');
});


Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');
Route::get('/dashboard', [DashboardController::class, 'getUserDataReview']);
Route::post('/dashboard', [DashboardController::class, 'updateUserData']);

Route::get('/create-review', function () {
    return view('create-review');
});

Route::get('/hotel-page', [ReviewController::class, 'index']);
Route::get('/hotel-page/{slug}', [ReviewController::class, 'show']);

// Route::get('/dashboard/reviews', [DashboardReviewController::class, 'index'])->middleware('auth');
// Route::get('/dashboard/reviews', [DashboardReviewController::class, 'getUserReview']);

Route::get('/dashboard/create', [DashboardCreateController::class, 'index'])->middleware('auth');
Route::get('/dashboard/create', [DashboardCreateController::class, 'getHotel']);
Route::post('/dashboard/create', [DashboardCreateController::class, 'createReview']);
