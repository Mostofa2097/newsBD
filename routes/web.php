<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\backend\SubcategoryController;
use App\Http\Controllers\backend\CategoryController;

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//___categoryRoute___//
Route::get('/categories', [CategoryController::class, 'index'])->name('category.index');
Route::post('/store/categories', [CategoryController::class, 'store'])->name('store.category');
Route::get('/delete/categories/{id}', [CategoryController::class, 'destroy'])->name('delete.category');
Route::get('/edit/category/{id}', [CategoryController::class, 'edit']);
Route::post('/update/categories/{id}', [CategoryController::class, 'update'])->name('update.category');


//____subcategory__//
Route::get('/subcategories', [SubcategoryController::class, 'index'])->name('index.subcategory');
Route::post('/store/subcategories', [subcategoryController::class, 'store'])->name('store.subcategory');