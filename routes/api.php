<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Posts;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

// Route::get('posts', 'PostController@index');
// Route::get('posts/{id}', 'PostController@show');
// Route::post('posts', 'PostController@store');
// Route::put('posts/{id}', 'PostController@update');
// Route::delete('posts/{id}', 'PostController@delete');
// Route::get('posts/search/{title}', 'PostController@search');

Route::get('blogs', 'BlogController@index');
Route::get('blogs/{id}', 'BlogController@show');
Route::post('blogs', 'BlogController@store');
Route::put('blogs/{id}', 'BlogController@update');
Route::delete('blogs/{id}', 'BlogController@delete');
Route::get('blog', 'BlogController@search');

