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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/','TestController@home')
-> name('home');

Route::get('/match/{id}','TestController@match')
-> name('match');

Route::get('/create/match','TestController@create')
-> name('create');
Route::post('/store/match','TestController@store')
-> name ('store');

Route::get('/delete/match/{id}','TestController@delete')
-> name('delete');

Route::get('/edit/match/{id}', "TestController@edit")
-> name ('edit');
Route::post('/update/match/{id}', 'TestController@update')
-> name('update');