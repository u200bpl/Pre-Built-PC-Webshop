<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ComputerController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProcessorController;
use App\Models\Computer;
use App\Models\Processor;

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
    Route::get('/admin', [AdminController::class, 'index'])->name("admin.index");
    Route::get('/computer/create', [ComputerController::class, 'create']);
    Route::get('/computer/{id}/edit', [ComputerController::class, 'edit'])->name("pages.computer.edit");
    Route::put('/computer/{id}/edit', [ComputerController::class, 'update'])->name("pages.computer.update");
    Route::post('/admin/computer', [ComputerController::class, 'store'])->name("pages.admin.computer.store");

    Route::delete('/admin/computer/{id}', [ComputerController::class, 'destroy'])->name('pages.admin.computer.destroy');
});

require __DIR__.'/auth.php';