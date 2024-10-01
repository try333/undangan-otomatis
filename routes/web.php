<?php

use App\Http\Controllers\FormController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/forms', [FormController::class, 'index']);
Route::get('/form/{id}', [FormController::class, 'show']);
