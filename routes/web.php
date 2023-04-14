<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TabelController;
use App\Http\Controllers\ObatController;
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

require __DIR__.'/auth.php';

Route::get('/logout',[ProfileController::class, 'logout'])->middleware('auth');
Route::get('/tabel', [TabelController::class, 'index'])->middleware('auth');
Route::get('/tabel', [ObatController::class, 'index'])->middleware('auth');
Route::get('/tabel/create', [ObatController::class, 'create'])->middleware('auth');
Route::post('/tabel/store', [ObatController::class, 'store'])->middleware('auth');
Route::get('/tabel/{id}/edit', [ObatController::class, 'edit'])->middleware('auth');
Route::put('/tabel/{id}', [ObatController::class, 'update'])->middleware('auth');
Route::delete('/tabel/{id}', [ObatController::class, 'destroy'])->middleware('auth');



