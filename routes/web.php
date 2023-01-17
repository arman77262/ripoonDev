<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeSliderController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SubCategoryController;

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
    return view('frontend.index');
});

Route::controller(AdminController::class)->group(function(){
    route::get('/admin/logout', 'destroy')->name('admin.logout');
    route::get('/admin/profile', 'Profile')->name('admin.profile');
    route::get('/edit/profile', 'EditProfile')->name('edit.profile');
    route::post('/store/profile', 'storeProfile')->name('store.profile');
});

//Home Slider All Route
Route::controller(HomeSliderController::class)->group(function(){
    route::get('/slider/image', 'SliderImage')->name('slider.image');
    route::post('/store/slider/image', 'StoreSliderImage')->name('store.slider.image');
    route::get('/all/slider/image', 'AllSliderImage')->name('all.slider.image');
    route::get('/all/slider/image/edit/{id}', 'SliderImageEdit')->name('edit.slider.image');
    route::post('/all/slider/image/update', 'SliderImageUpdate')->name('update.slider.image');
    route::get('/all/slider/image/delete/{id}', 'SliderImageDelete')->name('delete.slider.image');
});

//Category All Route
Route::controller(CategoryController::class)->group(function(){
    route::get('/all/category', 'Categories')->name('all.category');
    route::get('/add/category', 'AddCategories')->name('add.category');
    route::post('/store/category', 'storeCategories')->name('store.category');
    route::get('/edit/category/{id}', 'editCategories')->name('edit.category');
    route::post('/update/category', 'UpdateCategories')->name('update.category');
    route::get('/delete/category/{id}', 'DeleteCategories')->name('delete.category');
});

//SubCategory All Route
Route::controller(SubCategoryController::class)->group(function(){
    route::get('/all/sub/category', 'SubCategories')->name('all.sub.category');
    route::get('/add/sub/category', 'AddSubCategories')->name('add.sub.category');
    route::post('/store/sub/category', 'StoreSubCategories')->name('store.subcategory');
});



Route::get('/dashboard', function () {
    return view('admin.index');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
