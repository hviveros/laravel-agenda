<?php

use Illuminate\Support\Facades\Route;
// Incluir controlador propio
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContactController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('home');
})->name('home');

Route::prefix('categories')->group(function(){
    Route::get('/',         [CategoryController::class, 'index'])   ->name('categories.index');
    Route::get('/create',   [CategoryController::class, 'create'])  ->name('categories.create');
    Route::get('/edit',     [CategoryController::class, 'edit'])    ->name('categories.edit');
    Route::get('/show',     [CategoryController::class, 'show'])    ->name('categories.show');
});

Route::prefix('contacts')->group(function(){
    Route::get('/',         [ContactController::class, 'index'])   ->name('contacts.index');
    Route::get('/create',   [ContactController::class, 'create'])  ->name('contacts.create');
    Route::get('/edit',     [ContactController::class, 'edit'])    ->name('contacts.edit');
    Route::get('/show',     [ContactController::class, 'show'])    ->name('contacts.show');
});