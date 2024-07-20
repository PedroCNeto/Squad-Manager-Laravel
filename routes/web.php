<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SquadController;

Route::get('/', [SquadController::class, 'index']);
Route::get('/createsquad', [SquadController::class, 'createsquadpage']);
Route::post('/createsquad', [SquadController::class, 'store']);


