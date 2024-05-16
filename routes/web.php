<?php

use App\Http\Controllers\Admin\GalleryController;
use App\Http\Controllers\admin\HomeController;
use App\Http\Controllers\admin\ServiceController;
use App\Http\Controllers\admin\SystemSettingsController;
use App\Http\Controllers\Admin\TestimonialController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\AdminLoginController;
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


Route::group(['prefix' => 'admin'],function(){
 
    Route::group(['middleware' => 'admin.guest'],function(){

        Route::get('/login',[AdminLoginController::class,'index'])->name('admin.login');
        Route::post('/authenticate',[AdminLoginController::class,'authenticate'])->name('admin.authenticate');
        
    });    
    Route::group(['middleware' => 'admin.auth'],function(){
        Route::get('/dashboard',[HomeController::class,'index'])->name('admin.dashboard');
        Route::get('/changepassword',[HomeController::class,'changepassword'])->name('admin.changepassword');
        Route::put('/changepassword',[HomeController::class,'updatepassword'])->name('change.password');

        Route::post('/logout',[AdminLoginController::class,'adminlogout'])->name('admin.logout');

        Route::get('system-settings', [SystemSettingsController::class, 'index'])->name('admin.system-settings.index');
        Route::post('system-settings', [SystemSettingsController::class, 'update'])->name('admin.system-settings.update');


        Route::get('/service/add',[ServiceController::class,'index'])->name('addservice.show');
        Route::get('/service/list',[ServiceController::class,'list'])->name('listservice.show');
        Route::post('/service/store',[ServiceController::class,'store'])->name('admin.services.store');
        Route::get('/service/{service}/edit',[ServiceController::class,'edit'])->name('service.edit');
        Route::put('/services/{service}', [ServiceController::class, 'update'])->name('admin.service.update');
        Route::delete('/service/{service}/delete',[ServiceController::class,'delete'])->name('admin.service.delete');
      
        Route::get('/testimonial/add',[TestimonialController::class,'index'])->name('addtestimonial.show');
        Route::get('/testimonial/list',[TestimonialController::class,'list'])->name('listtestimonial.show');
        Route::post('/testimonial/store',[TestimonialController::class,'store'])->name('admin.testimonial.store');
        Route::get('/testimonial/{testimonial}/edit',[TestimonialController::class,'edit'])->name('testimonial.edit');
        Route::put('/testimonial/{testimonial}', [TestimonialController::class, 'update'])->name('admin.testimonial.update');
        Route::delete('/testimonial/{testimonial}/delete', [TestimonialController::class, 'delete'])->name('admin.testimonial.delete');

        Route::get('/image/add',[GalleryController::class,'index'])->name('addimage.show');
        //Route::get('/image/list',[GalleryController::class,'list'])->name('listimage.show');
        Route::post('/image/store',[GalleryController::class,'store'])->name('admin.image.store');
       // Route::get('/image/{image}/edit',[GalleryController::class,'edit'])->name('image.edit');
       // Route::put('/image/{image}', [GalleryController::class, 'update'])->name('admin.image.update');
      //  Route::delete('/image/{image}/delete', [GalleryController::class, 'delete'])->name('admin.image.delete');

    });
});

