<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SquadController;

Route::get('/', [SquadController::class, 'index']);
