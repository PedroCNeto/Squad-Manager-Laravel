<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SquadController;

Route::get('/', [SquadController::class, 'index']);

Route::get('/createsquad', function(){

    return view('createsquad');
});

