<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CandidatController;
use App\Http\Controllers\MoniteurController;
use App\Http\Controllers\SeanceController;
use App\Http\Controllers\InscriptionController;
use App\Http\Controllers\ExamenController;
use App\Http\Controllers\VersementController;

// Candidats
Route::apiResource('candidats', CandidatController::class);

// Moniteurs
Route::apiResource('moniteurs', MoniteurController::class);

// Séances
Route::apiResource('seances', SeanceController::class);

// Inscriptions
Route::apiResource('inscriptions', InscriptionController::class);

// Examens
Route::apiResource('examens', ExamenController::class);

// Versements
Route::apiResource('versements', VersementController::class);
