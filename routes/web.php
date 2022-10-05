<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ComputerController;
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

Route::get('/', [ComputerController::class, 'index'])->name("welcome");
Route::get('/computers', [ComputerController::class, 'show'])->name("computers.index");

Route::get('/computers/{id}', [ComputerController::class, 'detail'])->name("layouts.detail");

Route::get('/admin/computers', [ComputerController::class, 'admin'])->name("admin.computers.index")->middleware('auth');
Route::get('/admin/computers/create', [ComputerController::class, 'create'])->middleware('auth');
Route::post('/admin/computers', [ComputerController::class, 'store'])->name("admin.computers.store")->middleware('auth');

Route::get('/admin/computers/{id}', [ComputerController::class, 'adminDetail'])->name("layouts.detail")->middleware('auth');
Route::get('/admin/computers/{id}/edit', [ComputerController::class, 'edit'])->name("admin.computers.edit")->middleware('auth');
Route::put('/admin/computers/{id}/edit', [ComputerController::class, 'update'])->name("admin.computers.update")->middleware('auth');
Route::delete('/admin/computers/{id}', [ComputerController::class, 'destroy'])->name('admin.computers.destroy')->middleware('auth');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';
