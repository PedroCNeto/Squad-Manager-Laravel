<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SquadController;
use App\Http\Controllers\MissionController;

Route::get('/', [MissionController::class, 'index']);
Route::get('/createsquad', [SquadController::class, 'createsquadpage']);
Route::post('/createsquad', [SquadController::class, 'store']);
Route::get('/createmission', [MissionController::class, 'createmissionpage']);
Route::post('/createmission', [MissionController::class, 'store']);


