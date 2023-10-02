<?php

use App\Http\Controllers\TableAController;
use App\Http\Controllers\TableBController;
use App\Http\Controllers\TableCController;
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
    return view('index');
});

//table A
Route::name('table-a.')->group(function () {
    Route::prefix('table-a')->group(function () {
        Route::get('/', [TableAController::class, 'index'])->name('index');
        Route::get('/create', [TableAController::class, 'create'])->name('create');
        Route::post('/', [TableAController::class, 'store'])->name('store');
        Route::get('/{id}/edit', [TableAController::class, 'edit'])->name('edit');
        Route::put('/{id}', [TableAController::class, 'update'])->name('update');
        Route::delete('/{id}', [TableAController::class, 'destroy'])->name('destroy');
    });
});

//table B
Route::name('table-b.')->group(function () {
    Route::prefix('table-b')->group(function () {
        Route::get('/', [TableBController::class, 'index'])->name('index');
        Route::get('/create', [TableBController::class, 'create'])->name('create');
        Route::post('/', [TableBController::class, 'store'])->name('store');
        Route::get('/{id}/edit', [TableBController::class, 'edit'])->name('edit');
        Route::put('/{id}', [TableBController::class, 'update'])->name('update');
        Route::delete('/{id}', [TableBController::class, 'destroy'])->name('destroy');
    });
});

//table C
Route::name('table-c.')->group(function () {
    Route::prefix('table-c')->group(function () {
        Route::get('/', [TableCController::class, 'index'])->name('index');
        Route::get('/create', [TableCController::class, 'create'])->name('create');
        Route::post('/', [TableCController::class, 'store'])->name('store');
        Route::get('/{id}/edit', [TableCController::class, 'edit'])->name('edit');
        Route::put('/{id}', [TableCController::class, 'update'])->name('update');
        Route::delete('/{id}', [TableCController::class, 'destroy'])->name('destroy');
    });
});

//table D
Route::name('table-d.')->group(function () {
    Route::prefix('table-d')->group(function () {
        Route::get('/', [TableDController::class, 'index'])->name('index');
        Route::get('/create', [TableDController::class, 'create'])->name('create');
        Route::post('/', [TableDController::class, 'store'])->name('store');
        Route::get('/{id}/edit', [TableDController::class, 'edit'])->name('edit');
        Route::put('/{id}', [TableDController::class, 'update'])->name('update');
        Route::delete('/{id}', [TableDController::class, 'destroy'])->name('destroy');
    });
});
