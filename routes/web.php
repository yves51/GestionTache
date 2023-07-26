<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\TacheController;

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

// Route::get('/', function () {
//     return view('welcome');
// });


// ce sont les differentes routes 
Route::get('/', [TacheController::class, 'index'])->name("liste-des-tache");
Route::get('/create', [TacheController::class, 'create'])->name("ajouter-une-tache");
Route::post('/store', [TacheController::class, 'store'])->name("creer-une-tache");
Route::get('/edit/{id}', [TacheController::class, 'edit'])->name("modifier-une-tache");
Route::post('/update/{id}', [TacheController::class, 'update'])->name("enregistrer-une-modification-de-tache");
Route::get('/destroy/{id}', [TacheController::class, 'destroy'])->name("supprimer-une-tache");



