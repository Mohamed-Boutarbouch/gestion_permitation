<?php

use App\Http\Controllers\FormateurController;
use App\Http\Controllers\PermutationController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    if (Auth::guard('formateur')->attempt()) {
        return view('index');
    }
})->name('home');

Route::get('formateur/profile', [FormateurController::class, 'showProfile'])->name('formateur.profile');;

Route::resource('permutations', PermutationController::class);

Route::middleware(['web'])->group(function () {
    Route::get('login', [FormateurController::class, 'login'])->name('login');
    Route::post('login/store', [FormateurController::class, 'loginStore'])->name('login.store');
    Route::get('registration', [FormateurController::class, 'registration'])->name('register');
    Route::post('registration/store', [FormateurController::class, 'registrationStore'])->name('register.store');
    Route::get('signout', [FormateurController::class, 'signOut'])->name('signout');
});
