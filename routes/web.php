<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\backend\SubcategoryController;
use App\Http\Controllers\backend\CategoryController;
use App\Http\Controllers\backend\DistrictController;

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
Route::post('/store/subcategories', [SubcategoryController::class, 'store'])->name('store.subcategory');
Route::get('/delete/subcategories/{id}', [SubcategoryController::class, 'destroy'])->name('delete.subcategory');
Route::get('/edit/subcategory/{id}', [SubcategoryController::class, 'edit']);
Route::post('/update/subcategories/{id}', [SubcategoryController::class, 'update'])->name('update.subcategory');

//____district__//
Route::get('/districts', [DistrictController::class, 'index'])->name('index.district');
Route::post('/store/district', [DistrictController::class, 'store'])->name('store.district');
Route::get('/delete/district/{id}', [DistrictController::class, 'destroy'])->name('delete.district');
Route::get('/edit/district/{id}', [DistrictController::class, 'edit']);
Route::post('/update/district/{id}', [DistrictController::class, 'update'])->name('update.district');






