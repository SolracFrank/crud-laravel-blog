<?php

use Illuminate\Support\Facades\Route;
//mis controladores
use App\Http\Controllers\BlogController;
/*
|--------------------------------------------------------------------------|
| Web Routes                                                               |
|--------------------------------------------------------------------------|
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
----------------------------------------------------------------------------
*/
Route::get('/', function () {
    return view('welcome');
});

//route de blog
Route::resource('/Blog',BlogController::class);
