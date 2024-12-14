<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmailController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('send-mail',[EmailController::class, 'sendWelcomeEmail']);

Route::get('/projects', function () {
    return view('projects');
})->name('projects');
