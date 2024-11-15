<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controller\BackgroundJobController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/jobs', [BackgroundJobController::class, 'index'])-> name('jobs.index');
Route::post('/jobs/cancel/{id}', [BackgroundJobController::class, 'cancel'])-> name('jobs.cancel');

