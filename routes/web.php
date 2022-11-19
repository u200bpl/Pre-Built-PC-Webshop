<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ComputerController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PccaseController;
use App\Http\Controllers\ProcessorController;
use App\Http\Controllers\GraphicscardController;
use App\Http\Controllers\MotherboardController;
use App\Http\Controllers\CpucoolerController;
use App\Http\Controllers\RamController;
use App\Http\Controllers\StorageController;
use App\Http\Controllers\PsuController;

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

Route::get('/', [DashboardController::class, 'index'])->name("dashboard");

Route::middleware(['web', 'isAdmin'])->group(function () {
    Route::resource('admin', AdminController::class);
    
    // Computer routes typed full out because of 2 routes outside admin
    Route::get('/computer/create', [ComputerController::class, 'create']);
    Route::get('/computer/{id}/edit', [ComputerController::class, 'edit'])->name('computer.update');
    Route::post('/admin/computer', [ComputerController::class, 'store'])->name('computer.store');
    Route::put('/computer/{id}/edit', [ComputerController::class, 'update']);
    Route::delete('/computer/{id}', [ComputerController::class, 'destroy'])->name('computer.destroy');  
    
    Route::resource('pccase', PccaseController::class);
    Route::resource('processor', ProcessorController::class);
    Route::resource('graphicscard', GraphicscardController::class);
    Route::resource('motherboard', MotherboardController::class);
    Route::resource('cpucooler', CpucoolerController::class);
    Route::resource('ram', RamController::class);
    Route::resource('storage', StorageController::class);
    Route::resource('psu', PsuController::class);
});

Route::get('/computer', [ComputerController::class, 'index']);
Route::get('/computer/{id}', [ComputerController::class, 'show']);



require __DIR__.'/auth.php';