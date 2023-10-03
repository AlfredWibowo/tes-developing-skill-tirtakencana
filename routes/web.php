<?php

use App\Http\Controllers\DownloadController;
use App\Http\Controllers\TableAController;
use App\Http\Controllers\TableBController;
use App\Http\Controllers\TableCController;
use App\Http\Controllers\TableDController;
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

//download
Route::name('download.')->group(function () {
    Route::prefix('download')->group(function () {
        Route::get('/csv/{title}', [DownloadController::class, 'downloadCSV'])->name('csv');
        Route::get('/pdf/{title}', [DownloadController::class, 'downloadPDF'])->name('pdf');
    });
});

//table A
Route::name('table-a.')->group(function () {
    Route::prefix('table-a')->group(function () {
        Route::get('/', [TableAController::class, 'index'])->name('index');
        Route::get('/create', [TableAController::class, 'create'])->name('create');
        Route::post('/', [TableAController::class, 'store'])->name('store');
        Route::get('/{param}/edit', [TableAController::class, 'edit'])->name('edit');
        Route::put('/{param}', [TableAController::class, 'update'])->name('update');
        Route::delete('/{param}', [TableAController::class, 'destroy'])->name('destroy');
    });
});

//table B
Route::name('table-b.')->group(function () {
    Route::prefix('table-b')->group(function () {
        Route::get('/', [TableBController::class, 'index'])->name('index');
        Route::get('/create', [TableBController::class, 'create'])->name('create');
        Route::post('/', [TableBController::class, 'store'])->name('store');
        Route::get('/{param}/edit', [TableBController::class, 'edit'])->name('edit');
        Route::put('/{param}', [TableBController::class, 'update'])->name('update');
        Route::delete('/{param}', [TableBController::class, 'destroy'])->name('destroy');
    });
});

//table C
Route::name('table-c.')->group(function () {
    Route::prefix('table-c')->group(function () {
        Route::get('/', [TableCController::class, 'index'])->name('index');
        Route::get('/create', [TableCController::class, 'create'])->name('create');
        Route::post('/', [TableCController::class, 'store'])->name('store');
        Route::get('/{param}/edit', [TableCController::class, 'edit'])->name('edit');
        Route::put('/{param}', [TableCController::class, 'update'])->name('update');
        Route::delete('/{param}', [TableCController::class, 'destroy'])->name('destroy');
    });
});

//table D
Route::name('table-d.')->group(function () {
    Route::prefix('table-d')->group(function () {
        Route::get('/', [TableDController::class, 'index'])->name('index');
        Route::get('/create', [TableDController::class, 'create'])->name('create');
        Route::post('/', [TableDController::class, 'store'])->name('store');
        Route::get('/{param}/edit', [TableDController::class, 'edit'])->name('edit');
        Route::put('/{param}', [TableDController::class, 'update'])->name('update');
        Route::delete('/{param}', [TableDController::class, 'destroy'])->name('destroy');
    });
});
