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

Route::get('/admin/computers', [ComputerController::class, 'admin'])->name("admin.computers.index");
Route::get('/admin/computers/create', [ComputerController::class, 'create']);
Route::post('/admin/computers', [ComputerController::class, 'store'])->name("admin.computers.store");

Route::get('/computers/{id}', [ComputerController::class, 'detail'])->name("layouts.detail");