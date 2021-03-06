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
    return view('welcome');
});
Route::get('/dragndrop', function () {
    return view('admin.dragndrop');
});
Route::get('/test', function () {
    return view('admin.test');
});
Route::resource('chatbot', 'ChatBotController');
Route::get('manualdiv', 'ChatBotController@manualdiv');
Route::get('addform', 'ChatBotController@addform');
Route::get('media', 'ChatBotController@media');
Route::post('/fromsave', 'ChatBotController@formsave')->name('fromsave');