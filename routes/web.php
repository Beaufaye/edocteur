<?php


use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dashboardAController;
use App\Http\Controllers\DocteursController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::get('ajdocteurs', [DocteursController::class, 'ajdocteurs'])->name('ajdocteurs');
// Route::post('dashboard', [dashboardAController::class, 'dashboard'])->name('dashboard');


Route::get('ajdocteurs', [DocteursController::class, 'ajdocteurs'])->name('ajdocteurs');
Route::post('docteurst', [DocteursController::class, 'docteurst'])->name('docteurst');
Route::get('docteurs', [DocteursController::class, 'docteurs'])->name('docteurs');
Route::get('/update-docteurs/{id}', [DocteursController::class, 'update_docteurs'])->name('mod_docteurs');;
Route::post('updocteurs', [DocteursController::class, 'updocteurs'])->name('updocteurs');
Route::get('deldocteurs/{id}', [DocteursController::class, 'destroy']);

Route::get('ajpatients', [PatientsController::class, 'ajpatients'])->name('ajpatients');
Route::post('patientst', [PatientsController::class, 'patientst'])->name('patientst');
Route::get('patients', [PatientsController::class, 'patients'])->name('patients');
Route::get('/update-patients/{id}', [PatientsController::class, 'update_patients'])->name('mod_patients');;
Route::post('uppatientst', [PatientsController::class, 'uppatientst'])->name('uppatientst');
Route::get('delpatients/{id}', [PatientsController::class, 'destroy']);

Route::get('ajrendezvous', [RendezvousController::class, 'ajrendezvous'])->name('ajrendezvous');
Route::post('rendezvoust', [RendezvousController::class, 'rendezvoust'])->name('rendezvoust');
Route::get('rendezvous', [RendezvousController::class, 'rendezvous'])->name('rendezvous');
Route::get('/update-rendezvous/{id}', [RendezvousController::class, 'update_rendezvous'])->name('mod_rendezvous');;
Route::post('uprendezvous', [RendezvousController::class, 'uprendezvous'])->name('uprendezvous');
Route::get('delrendezvous/{id}', [RendezvousController::class, 'destroy']);

Route::get('ajdocteurs', [DocteursController::class, 'ajdocteurs'])->name('ajdocteurs');
Route::post('docteurst', [DocteursController::class, 'docteurst'])->name('docteurst');
Route::get('docteurs', [DocteursController::class, 'docteurs'])->name('docteurs');