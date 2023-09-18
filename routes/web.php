<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\backend\SubcategoryController;
use App\Http\Controllers\backend\CategoryController;
use App\Http\Controllers\backend\DistrictController;
use App\Http\Controllers\backend\PostController;
use App\Http\Controllers\backend\SettingController;
use App\Http\Controllers\backend\SubdistrictController;

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
Route::get('/delete/subcategory/{id}', [SubcategoryController::class, 'destroy']);
Route::get('/edit/subcategory/{id}', [SubcategoryController::class, 'edit']);
Route::post('/update/subcategories/{id}', [SubcategoryController::class, 'update'])->name('update.subcategory');

//____district__//
Route::get('/districts', [DistrictController::class, 'index'])->name('index.district');
Route::post('/store/district', [DistrictController::class, 'store'])->name('store.district');
Route::get('/delete/district/{id}', [DistrictController::class, 'destroy'])->name('delete.district');
Route::get('/edit/district/{id}', [DistrictController::class, 'edit']);
Route::post('/update/district/{id}', [DistrictController::class, 'update'])->name('update.district');

//____district__//
Route::get('/subdistricts', [SubdistrictController::class, 'index'])->name('index.subdistrict');
Route::post('/store/subdistrict', [SubdistrictController::class, 'store'])->name('store.subdistrict');
Route::get('/delete/subcategories/{id}', [SubdistrictController::class, 'destroy'])->name('delete.subdistrict');
Route::get('/edit/subdistrict/{id}', [SubdistrictController::class, 'edit']);
Route::post('/update/subdistrict/{id}', [SubdistrictController::class, 'update'])->name('update.subdistrict');
//____json data multiple dependency__//
Route::get('/get/subcat/{cat_id}', [PostController::class, 'GetSubcat']);
Route::get('/get/subdist/{dist_id}', [PostController::class, 'GetSubdist']);


//____posts__

Route::get('/post', [PostController::class, 'create'])->name('insert.post');
Route::post('/store/post', [PostController::class, 'store'])->name('store.post');
Route::get('/all/post', [PostController::class, 'index'])->name('all.post');
Route::get('/delete/post/{id}', [PostController::class, 'destroy']);
Route::get('/edit/post/{id}', [PostController::class, 'edit']);
Route::post('/update/post/{id}', [PostController::class, 'update'])->name('update.post');

//____Settings__

//____Social__
Route::get('/social/setting', [SettingController::class, 'create'])->name('social.setting');
Route::post('/update/social/{id}', [SettingController::class, 'updateSocial'])->name('update.social');

//____seo__
Route::get('/seo/setting', [SettingController::class, 'SeoSetting'])->name('seo.setting');
Route::post('/update/seo/{id}', [SettingController::class, 'updateSeo'])->name('update.seo');
//____namaz__
Route::get('/namaz/setting', [SettingController::class, 'namazSetting'])->name('namaz.setting');
Route::post('/update/namaz/{id}', [SettingController::class, 'updateNamaz'])->name('update.namaz');
//____livetv__
Route::get('/livetv/setting', [SettingController::class, 'livetvSetting'])->name('livetv.setting');
Route::post('/update/livetv/{id}', [SettingController::class, 'updateLivetv'])->name('update.livetv');
Route::get('/active/livetv/{id}', [SettingController::class, 'activeLivetv'])->name('active.livetv');
Route::get('/deactive/livetv/{id}', [SettingController::class, 'deactiveLivetv'])->name('deactive.livetv');

