<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\BukuController;
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

Route::get('/navbar', function () {
    return view('body.navbar');
});

Route::get('/main', function () {
    return view('body.main');
});

Route::get('/carousel', function () {
    return view('body.carousel');
});

Route::get('/account', function () {
    return view('account');
});

Route::get('/dashboard_user', function () {
    return view('dashboard_user');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

// ----------------  BUKU CONTROLLER  ----------------- //

Route::get('/', [BukuController::class, 'index']);
Route::post('/bukus', [BukuController::class, 'bukus.store']);
