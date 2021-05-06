<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\DB;

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

Route::get('/insert', function () {
    DB::table('posts')->select([
        'title' => '2 Learn Laravel so easy ^^',
        'body' => "2 Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum."
    ]);
});

Route::get('/read', function () {
    return DB::table('posts')->where('id', '1')->update(['title' => 'title updated']);
});

Route::get('/delete', function (){
    return DB::table('posts')->where('id', '2')->delete();
});
