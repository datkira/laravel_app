<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
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
    return view('welcome');
});

//Route::resources([
//    'contact' => PostController::class,
//    'posts' => PostController::class,
//]);

Route::get('/contact/{id}/{name}/{age}', [PostController::class, 'contact']);

Route::get('/layout/{name}', [PostController:: class, 'layout']);

Route::redirect('/shironvn', '/datkira', 301);
