<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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
return view("inicio");
})->name('inicio');

/*Route::get('posts', function () {
    return view('posts/listado');
})->name('posts_listado');


Route::get('posts/{id}', function($id) {

    return view('posts/ficha' , compact('id'));
    })->where('id', "[0-9]+")->name('posts_ficha');*/

Route::resource('posts',PostController::class)->only(['index','show','create','edit','destroy']);