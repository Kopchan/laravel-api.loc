<?php

use App\Http\Controllers\Api\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::get('test', fn () => "hi");

Route
::controller(AuthController::class)
->group(function () {
    Route::post('signup', 'signup');
    Route::post('login', 'login');
});
