<?php

use App\Http\Controllers\MedecinController;
use App\Http\Controllers\UtilisateurController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\User;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

/*Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::prefix('api')->group(function () {
    Route::get('/medecin/{id}', [MedecinController::class, 'getMedecin']);
});
Route::prefix('api')->group(function () {
    Route::get('/utilisateur/{id}', [UtilisateurController::class, 'getUtilisateur']);
});*/


//Route::get('users','\App\Http\Controllers\APIController@getUsers');

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});



Route::prefix('utilisateurs')->group(function () {
    Route::get('/patients/{id}', [UtilisateurController::class, 'showPatient']);
    Route::put('/patients/{id}', [UtilisateurController::class, 'updatePatient']);
    Route::get('/medecins/{id}', [UtilisateurController::class, 'showMedecin']);
    Route::put('/medecins/{id}', [UtilisateurController::class, 'updateMedecin']);
    Route::get('/patients', [UtilisateurController::class, 'showPatients']);
    //Route::get('/medecins/patients/{id}',[UtilisateurController::class, 'showPatient']);
});