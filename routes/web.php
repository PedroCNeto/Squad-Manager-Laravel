<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SquadController;
use App\Http\Controllers\MissionController;

Route::get('/', [MissionController::class, 'index']);

Route::get('/createsquad', [SquadController::class, 'createsquadpage']);
Route::post('/createsquad', [SquadController::class, 'store']);

Route::get('/show/squadshow/{id}', [SquadController::class, 'show']);
Route::get('/show/missionshow/{id}', [MissionController::class, 'show']);

Route::get('/createmission', [MissionController::class, 'createmissionpage']);
Route::post('/createmission', [MissionController::class, 'store']);


Route::middleware([
])->group(function () {
    Route::get('/', [MissionController::class, 'index']);
});




// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified',
// ])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');
// });
