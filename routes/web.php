<?php

use App\Http\Controllers\FormateurController;
use App\Http\Controllers\PermutationController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('formateur/profile', [FormateurController::class, 'index']);

Route::resource('permutations', PermutationController::class);
