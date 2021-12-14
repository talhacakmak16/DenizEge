<?php

use Illuminate\Support\Facades\Route;

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
    return view('front.index');
})->name('main');
Route::post('/iletisim',[\App\Http\Controllers\front\ContactController::class, 'store'])->name('contact.post');

Route::get('blog/detay/{selflink}',[\App\Http\Controllers\front\BlogdetayController::class,'index'])->name('detay');
Route::get('/hakkimizda',[\App\Http\Controllers\front\AboutController::class, 'index'])->name('about');
Route::get('/iletisim',[\App\Http\Controllers\front\ContactController::class, 'index'])->name('contact');
Route::get('/blog',[\App\Http\Controllers\front\BlogController::class, 'index'])->name('blog');
Route::get('/urunler',[\App\Http\Controllers\front\ProductController::class, 'index'])->name('shop');
Route::get('/belgeler',[\App\Http\Controllers\front\DocumentsController::class, 'index'])->name('doc');
Route::get('/belgeler/evrak',[\App\Http\Controllers\front\DocumentsController::class, 'evrak'])->name('ev');
Route::get('/belgeler/lisans',[\App\Http\Controllers\front\DocumentsController::class, 'lisans'])->name('li');


Route::group(['namespace'=>'admin','prefix'=>'admin','as'=>'admin.'],function (){

    Route::get('/',[App\Http\Controllers\admin\IndexController::class, 'index'])->name('admin');

    Route::group(['namespace'=>'blog','prefix'=>'blog','as'=>'blog.'],function ()
    {
        Route::get('/',[\App\Http\Controllers\admin\Blog\BlogController::class, 'index'])->name('index');
        Route::get('/ekle',[\App\Http\Controllers\admin\Blog\BlogController::class, 'create'])->name('create');
        Route::post('/ekle',[\App\Http\Controllers\admin\Blog\BlogController::class, 'store'])->name('post');
        Route::get('/duzenle/{id}',[\App\Http\Controllers\admin\Blog\BlogController::class, 'edit'])->name('edit');
        Route::post('/duzenle/{id}',[\App\Http\Controllers\admin\Blog\BlogController::class, 'update'])->name('edit.post');
        Route::get('/sil/{id}',[\App\Http\Controllers\admin\Blog\BlogController::class, 'delete'])->name('delete');
    });
    Route::group(['namespace'=>'product','prefix'=>'product','as'=>'product.'],function ()
    {
        Route::get('/',[\App\Http\Controllers\admin\Products\ProductController::class, 'index'])->name('index');
        Route::get('/ekle',[\App\Http\Controllers\admin\Products\ProductController::class, 'create'])->name('create');
        Route::post('/ekle',[\App\Http\Controllers\admin\Products\ProductController::class, 'store'])->name('post');
        Route::get('/duzenle/{id}',[\App\Http\Controllers\admin\Products\ProductController::class, 'edit'])->name('edit');
        Route::post('/duzenle/{id}',[\App\Http\Controllers\admin\Products\ProductController::class, 'update'])->name('edit.post');
        Route::get('/sil/{id}',[\App\Http\Controllers\admin\Products\ProductController::class, 'delete'])->name('delete');
    });
    Route::group(['namespace'=>'contact','prefix'=>'contact','as'=>'contact.'],function ()
    {
        Route::get('/',[\App\Http\Controllers\admin\contact\MessageController::class, 'index'])->name('index');
        Route::get('/detay/{id}',[\App\Http\Controllers\admin\contact\MessageController::class, 'edit'])->name('edit');
        Route::get('/sil/{id}',[\App\Http\Controllers\admin\contact\MessageController::class, 'delete'])->name('delete');
    });


});

