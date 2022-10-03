<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ComputerController;
use App\Http\Controllers\ProductController;
use App\Models\Computers;

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
Route::get('/computers/hydra', [ComputerController::class, 'computerindex'])->name("computers.hydra.index");

Route::get('/admin/products', [ProductController::class, 'index'])->name("admin.products.index");
Route::get('/admin/products/create', [ProductController::class, 'create']);
Route::post('/admin/products', [ProductController::class, 'store'])->name("admin.products.store");