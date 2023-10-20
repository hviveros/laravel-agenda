<?php

use Illuminate\Support\Facades\Route;
// Incluir controlador propio
use App\Http\Controllers\CategoryController;

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

});