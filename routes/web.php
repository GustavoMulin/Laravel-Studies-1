<?php

use App\Http\Controllers\MainController;
use App\Http\Middleware\EndMiddleware;
use App\Http\Middleware\StartMiddleware;
use Illuminate\Support\Facades\Route;

// Route::get('/', [MainController::class, 'index'])->name('index');
// Route::get('/about', [MainController::class, 'about'])->name('about');
// Route::get('/contatos', [MainController::class, 'contatos'])->name('contatos');

/*
Route::get('/', [MainController::class, 'index'])->name('index')->middleware([StartMiddleware::class]);
Route::get('/about', [MainController::class, 'about'])->name('about')->middleware([StartMiddleware::class ,EndMiddleware::class]);
Route::get('/contatos', [MainController::class, 'contatos'])->name('contatos');
*/

// Route::middleware([StartMiddleware::class, EndMiddleware::class])->group(function(){
//     Route::get('/', [MainController::class, 'index'])->name('index');
//     Route::get('/about', [MainController::class, 'about'])->name('about')->withoutMiddleware([EndMiddleware::class]);
//     Route::get('/contatos', [MainController::class, 'contatos'])->name('contatos');
// });

Route::middleware(['fim'])->group(function(){
    Route::get('/', [MainController::class, 'index'])->name('index');
    Route::get('/about', [MainController::class, 'about'])->name('about');
    Route::get('/contatos', [MainController::class, 'contatos'])->name('contatos');
});
