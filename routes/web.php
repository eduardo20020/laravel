<?php

use App\Http\Controllers\ProfileController;
use App\Http\Middleware\CheckRole;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');


Route::view('/nosotros', 'nosotros')->name('nosotros');
Route::view('/historia', 'historia')->name('historia');
Route::view('/acercade', 'acercade')->name('acercade');








Route::get('/dashboard', function () {
    if( Auth::user()->rol == 'pasante') {
        return view('dashboard');
    }if( Auth::user()->rol == 'empresa') {
        return view('dashEmpresa');
    }
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/dashEmpresa', function () {
    return view('dashEmpresa');
})->middleware(['auth', 'verified'])->name('dashEmpresa');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
