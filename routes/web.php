<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/thor', function () {
    return view('thor');
});

Route::get('/aquaman', function () {
    return view('aquaman');
});

Route::get('/avengers', function () {
    return view('avengers');
});

Route::get('/black', function () {
    return view('black');
});

Route::get('/fullmetal', function () {
    return view('fullmetal');
});

Route::get('/interceptor', function () {
    return view('interceptor');
});

Route::get('/john', function () {
    return view('john');
});

Route::get('/maze', function () {
    return view('maze');
});

Route::get('/meg2', function () {
    return view('meg2');
});

Route::get('/quantumania', function () {
    return view('quantumania');
});

Route::get('/wakanda', function () {
    return view('wakanda');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
