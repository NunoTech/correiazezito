<?php

use App\Http\Controllers\Admin\PostsController;
use App\Http\Controllers\Admin\UploadsController;
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

Route::get('/', 'SiteController@index')->name('home.site');

Route::get('/blog', 'BlogController@index')->name('home.blog');
Route::get('/blog/{post}', 'BlogController@show')->name('show.blog');
Route::post('/mail', 'SiteController@mail')->name('send.email');
Route::get('/login', 'Auth\LoginController@showLoginForm')->name('login');


Route::group(['middleware' => ['auth'], 'prefix' => 'admin'], function () {

    Route::get('/posts', [PostsController::class, 'index'])->name('posts.index');
    Route::post('/posts', [PostsController::class, 'store'])->name('posts.store');
    Route::get('/posts/publicar', [PostsController::class, 'create'])->name('posts.create');

    //Requisicao filepond upload
    Route::post('upload', [UploadsController::class, 'upload']);


//    Route::get('/admin', 'Admin\Ambos\DashboardController@index')->name('admin.dashboard');


//    Route::resource('/admin/secao', 'Admin\Site\SectionsController');
//    Route::resource('/admin/departamento/', 'Admin\Site\DepartamentsController');

});
Auth::routes();
