<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminPanel as AdminHomeController;

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

Route::get('/', [HomeController::class,'index'])->name('home');


Route::get('admin', [AdminHomeController\HomeController::class,'index'])->name('admin');

Route::get('admin/category', [AdminHomeController\CategoryController::class,'index'])->name('admin_category');
Route::get('admin/category/create', [AdminHomeController\CategoryController::class,'create'])->name('admin_category_create');
Route::post('admin/category/store', [AdminHomeController\CategoryController::class,'store'])->name('admin_category_store');
Route::get('admin/category/edit/{id}', [AdminHomeController\CategoryController::class,'edit'])->name('admin_category_edit');
Route::post('admin/category/update/{id}', [AdminHomeController\CategoryController::class,'update'])->name('admin_category_update');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
