<?php

use App\Http\Controllers\CommentsController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\RsvpController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/forms', [FormController::class, 'index']);
Route::get('/{slug}', [FormController::class, 'show']);

//RSVP
Route::post('/submit-rsvp/{slug}', [RsvpController::class, 'store'])->name('rsvp.store');

//COMMENTS
Route::get('/comments/{slug}', [CommentsController::class, 'index']);
Route::post('/comments/{slug}', [CommentsController::class, 'store']);