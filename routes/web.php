<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\CategoryController;

// 🏠 Home pubblica
Route::get('/', function () {
    return view('welcome');
})->name('home');

// 📚 Articoli pubblici
Route::get('/articoli', [ArticleController::class, 'index'])->name('articoli.index');
Route::get('/articoli/{article}', [ArticleController::class, 'show'])->name('articoli.show');

// 📩 Contatti (pubblici)
Route::get('/contatti', [ContactController::class, 'create'])->name('contacts.create');
Route::post('/contatti', [ContactController::class, 'store'])->name('contacts.store');
Route::get('/contatti/lista', [ContactController::class, 'index'])->name('contacts.index');

// 👤 Rotte protette (solo utenti autenticati)
Route::middleware('auth')->group(function () {

    // Pagina account
    Route::get('/account', [AccountController::class, 'index'])->name('account.index');

    // Creazione articoli (solo utenti loggati)
    Route::get('/articoli/create', [ArticleController::class, 'create'])->name('articoli.create');
    Route::post('/articoli', [ArticleController::class, 'store'])->name('articoli.store');
});

// 🔐 Login & Registrazione (Fortify gestisce il logout)
Route::view('/login', 'auth.login')->name('login');
Route::view('/register', 'auth.register')->name('register');

Route::resource('categories', CategoryController::class);Route::resource('articoli', App\Http\Controllers\ArticleController::class);
