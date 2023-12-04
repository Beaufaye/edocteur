<?php

use App\Http\Controllers\BiochimieController;
use App\Http\Controllers\CardiologieController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\DocteursController;
use App\Http\Controllers\HepatologieController;
use App\Http\Controllers\NeurologieController;
use App\Http\Controllers\PatientsController;
use App\Http\Controllers\RendezvousController;

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

Route::get('ajdocteurs', [DocteursController::class, 'ajdocteurs'])->name('ajdocteurs');
Route::post('dashboard', [dashboardController::class, 'dashboard'])->name('dashboard');


Route::get('ajdocteurs', [DocteursController::class, 'ajdocteurs'])->name('ajdocteurs');
Route::post('docteurst', [DocteursController::class, 'docteurst'])->name('docteurst');
Route::get('docteurs', [DocteursController::class, 'docteurs'])->name('docteurs');

Route::get('ajpatients', [PatientsController::class, 'ajpatients'])->name('ajpatients');
Route::post('patientst', [PatientsController::class, 'patientst'])->name('patientst');
Route::get('patients', [PatientsController::class, 'patients'])->name('patients');

Route::get('ajrendezvous', [RendezvousController::class, 'ajrendezvous'])->name('ajrendezvous');
Route::post('rendezvoust', [RendezvousController::class, 'rendezvoust'])->name('rendezvoust');
Route::get('rendezvous', [RendezvousController::class, 'rendezvous'])->name('rendezvous');

Route::get('ajdocteurs', [DocteursController::class, 'ajdocteurs'])->name('ajdocteurs');
Route::post('docteurst', [DocteursController::class, 'docteurst'])->name('docteurst');
Route::get('docteurs', [DocteursController::class, 'docteurs'])->name('docteurs');