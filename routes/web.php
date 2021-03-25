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
    return view('index');
});
Route::view('index', 'index');
Route::view('newlogin', 'newlogin');
Route::view('newregister', 'newregister');
Route::view('newforgot-password', 'newforgot-password');

Route::view('post-ads', 'post-ads');
Route::get('post-ads', 'CategoryController@index');
Route::get('post-ads', 'DzoController@index');


Route::view('account-profile-setting', 'account-profile-setting');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
