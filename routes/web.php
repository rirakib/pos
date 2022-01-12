<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\SubcategoryController;
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
    if(session()->has('username'))
    {
        return redirect()->to('home');
    }
    else{
        return view('login');
    }
});

Route::post('/login',[LoginController::class,'login']);
Route::get('/logout',[LogoutController::class,'logout']);

Route::get('/home',[HomeController::class,'home'])->middleware('login_check');

Route::resource('/home/category/',CategoryController::class)->middleware('login_check');

Route::resource('/home/subcategory/',SubcategoryController::class)->middleware('login_check');



