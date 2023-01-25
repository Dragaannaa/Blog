<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::middleware(['auth'])->group(function () {
    Route::get('/', function () {
        return view('dashboard');
    });
    
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/knjigee', function () {
        return view('knjigee');
    })->name('knjigee');

    Route::get('/knjigaa', function () {
        return view('knjigaa');
    })->name('knjigaa');
    
    Route::get('/korisnici', [App\Http\Controllers\KorisniciController::class, 'index'])->name('korisnici');
    Route::get('/korisnici/kreiraj', [App\Http\Controllers\KorisniciController::class, 'create'])->name('kreirajKorisnika');
    Route::get('/korisnici/store', [App\Http\Controllers\KorisniciController::class, 'store']);
    Route::get('/korisnici/show/{id}', [App\Http\Controllers\KorisniciController::class, 'show']);
    Route::get('/korisnici/edit/{id}', [App\Http\Controllers\KorisniciController::class, 'edit']);
    Route::get('/korisnici/update/{id}', [App\Http\Controllers\KorisniciController::class, 'update']);
    Route::get('/korisnici/delete/{id}', [App\Http\Controllers\KorisniciController::class, 'destroy']);

    Route::get('/knjige', [App\Http\Controllers\KnjigeController::class, 'index'])->name('knjige');
    Route::get('/knjige/kreiraj', [App\Http\Controllers\KnjigeController::class, 'create'])->name('kreirajKnjigu');
    Route::get('/knjige/store', [App\Http\Controllers\KnjigeController::class, 'store']);
    Route::get('/knjige/show/{id}', [App\Http\Controllers\KnjigeController::class, 'show']);
    Route::get('/knjige/edit/{id}', [App\Http\Controllers\KnjigeController::class, 'edit']);
    Route::get('/knjige/update/{id}', [App\Http\Controllers\KnjigeController::class, 'update']);
    Route::get('/knjige/delete/{id}', [App\Http\Controllers\KnjigeController::class, 'destroy']);

    Route::get('/procitane', [App\Http\Controllers\ProcitaneController::class, 'index'])->name('procitane');
    Route::get('/procitane/kreiraj', [App\Http\Controllers\ProcitaneController::class, 'create'])->name('kreirajProcitana');
    Route::get('/procitane/store', [App\Http\Controllers\ProcitaneController::class, 'store']);
    Route::get('/procitane/show/{id}', [App\Http\Controllers\ProcitaneController::class, 'show']);
    Route::get('/procitane/edit/{id}', [App\Http\Controllers\ProcitaneController::class, 'edit']);
    Route::get('/procitane/update/{id}', [App\Http\Controllers\ProcitaneController::class, 'update']);
    Route::get('/procitane/delete/{id}', [App\Http\Controllers\ProcitaneController::class, 'destroy']);
});

Route::get('/', function () {
    return view('welcome');
});

require __DIR__.'/auth.php';
