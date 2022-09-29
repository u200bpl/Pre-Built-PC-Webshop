<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin/products', [ProductController::class, 'index'])->middleware(['auth'])->name("admin.products.index");
Route::get('/admin/products/create', [ProductController::class, 'create'])->middleware(['auth']);
Route::post('/admin/products', [ProductController::class, 'store'])->middleware(['auth'])->name("admin.products.store");

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';
