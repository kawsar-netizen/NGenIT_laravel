<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;

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

Route::get('/',[FrontController::class,'index']);

Route::get('/contact',[FrontController::class,'contactpage'])->name('contact.page');

Route::group(['prefix' => 'admin'],function(){

    Route::get('/create',[FrontController::class,'index']);
    Route::get('/list',[FrontController::class,'index']);
    Route::get('/dashboard',[FrontController::class,'index']);
    Route::get('/user/1',[FrontController::class,'index']);

});