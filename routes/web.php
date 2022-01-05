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

Route::get('/index', 'HomeController@index')->name('home.index');

Route::group(['namespace' => 'Post'], function () {
    Route::get('/posts', 'IndexController')->name('post.index');
    Route::get('/posts/{post}', 'ShowController')->name('post.show');
});


Route::group(['namespace' => 'Admin', 'prefix' => 'admin'], function () {
    Route::group(['namespace' => 'Post'], function () {
        Route::get('/post', 'IndexController')->name('admin.post.index');
        Route::delete('/posts/{post}', 'DestroyController')->name('admin.post.delete');
        Route::get('/posts/{post}/edit', 'EditController')->name('admin.post.edit');
      Route::patch('/posts/{post}', 'UpdateController')->name('admin.post.update');
//      Route::get('/posts/create', 'CreateController')->name('post.create');
//      Route::post('/posts', 'StoreController')->name('post.store');
    });
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
