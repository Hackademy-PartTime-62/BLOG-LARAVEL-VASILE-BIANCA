<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ContactController;

// Home
Route::get('/', function () {
    return view('welcome');
});

// Articoli
Route::get('/articoli', [ArticleController::class, 'index'])->name('articoli.index');
Route::get('/articoli/create', [ArticleController::class, 'create'])->name('articoli.create'); // form creazione
Route::post('/articoli', [ArticleController::class, 'store'])->name('articoli.store');         // salvataggio
Route::get('/articoli/{article}', [ArticleController::class, 'show'])->name('articoli.show');

// Contatti
Route::get('/contatti', [ContactController::class, 'create'])->name('contacts.create'); // mostra il form
Route::post('/contatti', [ContactController::class, 'store'])->name('contacts.store');  // salva i dati
Route::get('/contatti/lista', [ContactController::class, 'index'])->name('contacts.index');
