<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Guest\HomeController as HomeController;
use App\Http\Controllers\Guest\AboutTrainController as AboutTrainController;


Route::get('/', [HomeController::class, 'index'])->name('home');


Route::get('/aboutTrain', [AboutTrainController::class, 'index'] )->name('aboutTrain');