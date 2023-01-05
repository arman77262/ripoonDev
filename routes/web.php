<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeSliderController;

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

Route::controller(HomeSliderController::class)->group(function(){
    route::get('/slider/image', 'SliderImage')->name('slider.image');
    route::post('/store/slider/image', 'StoreSliderImage')->name('store.slider.image');
    route::get('/all/slider/image', 'AllSliderImage')->name('all.slider.image');
    route::get('/all/slider/image/edit/{id}', 'SliderImageEdit')->name('edit.slider.image');
    route::post('/all/slider/image/update', 'SliderImageUpdate')->name('update.slider.image');
});

Route::get('/dashboard', function () {
    return view('admin.index');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
