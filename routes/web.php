<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ComputerController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PccaseController;
use App\Http\Controllers\ProcessorController;

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

Route::resource('computer', ComputerController::class);
Route::get('/', [DashboardController::class, 'index'])->name("dashboard");
Route::get('/computer', [ComputerController::class, 'index'])->name("computers.index");

Route::middleware(['web', 'isAdmin'])->group(function () {
    Route::resource('admin', AdminController::class);
    Route::resource('computer', ComputerController::class);
    Route::resource('pccase', PccaseController::class);
    Route::resource('processor', ProcessorController::class);
});

require __DIR__.'/auth.php';