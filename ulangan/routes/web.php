<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TournamentEsportController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('esport' , TournamentEsportController::class);
Route::get('/laporan' , [LaporanController::class, 'index'])->name('laporan');