<?php

use App\Http\Controllers\BiochimieController;
use App\Http\Controllers\CardiologieController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HepatologieController;
use App\Http\Controllers\NeurologieController;

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



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/dashboard', function() {
    return view('dashboard');
});

Route::get('/cardiologie', function() {
    return view('cardiologie');
});

Route::get('/neurologie', function() {
    return view('neurologie');
});

Route::get('/hepatologie', function() {
    return view('hepatologie');
});

Route::get('/biochimie', function() {
    return view('biochimie');
});