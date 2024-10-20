<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;

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
    // return view('auth.login');
    return view('auth.login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

//============================================== Order =========================================
Route::get('/order', [OrderController::class, 'index'])->name('order.index');
Route::get('/estimate_Bill_view', [OrderController::class, 'estimate_Bill_view'])->name('estimate_Bill_view');
Route::get('/manage_estimate_bill', [OrderController::class, 'manage_Estimate_Bill_View'])->name('manage_Estimate_Bill_View');
Route::get('/manage_order_Bill_View', [OrderController::class, 'manage_order_Bill_View'])->name('manage_order_Bill_View');



//============================================ Product ==========================================
Route::get('/product_view', [ProductController::class, 'index'])->name('product');
Route::get('/add_desing_view', [ProductController::class, 'add_Desing_View'])->name('add_desing_view');

//============================================= Customer =========================================
Route::resource('customer', CustomerController::class);

Route::get('/manage_product_View', [ProductController::class, 'manage_product_View'])->name('manage_product_View');
Route::get('/manage_Desing_View', [ProductController::class, 'manage_Desing_View'])->name('manage_Desing_View');







require __DIR__.'/auth.php';
