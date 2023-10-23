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
    Route::get('/',                 [CategoryController::class, 'index'])   ->name('categories.index');
    Route::get('/create',           [CategoryController::class, 'create'])  ->name('categories.create');
    Route::get('/edit/{id}',        [CategoryController::class, 'edit'])    ->name('categories.edit');
    Route::get('/show/{id}',        [CategoryController::class, 'show'])    ->name('categories.show');
    Route::post('/store',           [CategoryController::class, 'store'])   ->name('categories.store');
    Route::put('/update/{id}',      [CategoryController::class, 'update'])  ->name('categories.update');
    Route::delete('/destroy/{id}',  [CategoryController::class, 'destroy']) ->name('categories.destroy');
});

Route::prefix('contacts')->group(function(){
    Route::get('/',                 [ContactController::class, 'index'])   ->name('contacts.index');
    Route::get('/create',           [ContactController::class, 'create'])  ->name('contacts.create');
    Route::get('/edit/{id}',        [ContactController::class, 'edit'])    ->name('contacts.edit');
    Route::get('/show/{id}',        [ContactController::class, 'show'])    ->name('contacts.show');
    Route::post('/store',           [ContactController::class, 'store'])   ->name('contacts.store');
    Route::put('/update/{id}',      [ContactController::class, 'update'])  ->name('contacts.update');
    Route::delete('/destroy/{id}',  [ContactController::class, 'destroy']) ->name('contacts.destroy');
});