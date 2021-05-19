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
    return view('Pengguna.login');
});

Route::get('/login', function () {
    return view('Pengguna.login');
})->name('login');

Route::post('/postlogin', 'LoginController@postlogin')->name('postlogin');
Route::get('/logout', 'LoginController@logout')->name('logout');

Route::get('/forbidden', function () {
    return view('Halaman.forbidden');
});

Route::group(['middleware' => ['auth', 'ceklevel:admin']], function(){
    route::get('/upebook', 'BerandaController@upebook')->name('upebook');
    route::get('/upjournal', 'BerandaController@upjournal')->name('upjournal');
});

Route::group(['middleware' => ['auth', 'ceklevel:admin,user']], function(){
    route::get('/beranda', 'BerandaController@index')->name('index');
    route::get('/ebook', 'BerandaController@ebook')->name('ebook');
    route::get('/journal', 'BerandaController@journal')->name('journal');
});

Route::get('/files/create', 'DocumentController@create');
Route::post('/files', 'DocumentController@store');
Route::get('/files', 'DocumentController@index')->name('view');
Route::get('/files/{id}', 'DocumentController@show');
Route::get('/file/download/{file}', 'DocumentController@download');

Route::get('/files2/create', 'JournalController@create');
Route::post('/files2', 'JournalController@store');
Route::get('/files2', 'JournalController@index')->name('view2');
Route::get('/files2/{id}', 'JournalController@show');
Route::get('/file2/download/{file}', 'JournaltController@download');