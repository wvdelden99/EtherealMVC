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
    return view('home');
});



//Plugins
Route::get('/plugins', 'App\Http\Controllers\PluginsController@show')->name('plugins');
Route::get('/plugins/ascend', 'App\Http\Controllers\PluginsController@showAscend')->name('ascend');
Route::get('/plugins/creation', 'App\Http\Controllers\PluginsController@showCreation')->name('creation');
Route::get('/plugins/echo', 'App\Http\Controllers\PluginsController@showEcho')->name('echo');
Route::post('plugins/reflection', 'App\Http\Controllers\PluginsController@store');
Route::get('/plugins/reflection', 'App\Http\Controllers\PluginsController@showReflection')->name('reflection');
Route::get('/plugins/sky', 'App\Http\Controllers\PluginsController@showSky')->name('sky');
Route::get('/plugins/space', 'App\Http\Controllers\PluginsController@showSpace')->name('space');
Route::get('/plugins/storm', 'App\Http\Controllers\PluginsController@showStorm')->name('storm');

//Packs
Route::get('/packs', 'App\Http\Controllers\PacksController@show')->name('packs');


//Community
Route::get('/community', 'App\Http\Controllers\CommunityController@index')->name('community');
Route::post('/community', 'App\Http\Controllers\CommunityController@store');
Route::get('/community/upload-preset', [ 
    'uses' => 'App\Http\Controllers\CommunityController@create',
    'middleware' => 'roles',
    'roles' => ['Buyer', 'Admin']])->name('upload-preset');

//Support
Route::get('/support', 'App\Http\Controllers\SupportController@show')->name('support');


//Account
Auth::routes();
Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'show'])->name('dashboard');
Route::get('/edit', 'App\Http\Controllers\DashboardController@showEdit')->name('edit');
// Route::patch('/edit-account', 'App\Http\Controllers\DashboardController@update');
Route::get('/edit-account', [App\Http\Controllers\DashboardController::class, 'showEA'])->name('edit-account');
Route::post('/edit-account', "App\Http\Controllers\DashboardController@updateName");
Route::post('/edit-account', "App\Http\Controllers\DashboardController@updateEmail");
Route::get('/purchase-history', [App\Http\Controllers\DashboardController::class, 'showPH'])->name('purchase-history');
Route::get('/presets-and-wishlist', [App\Http\Controllers\DashboardController::class, 'showPW'])->name('presets-and-wishlist');
// Route::get('/admin', [App\Http\Controllers\DashboardController::class, 'showAdmin'])->name('admin');
Route::get('/admin', [
    'uses' => 'App\Http\Controllers\DashboardController@showAdmin',
    'middleware' => 'roles',
    'roles' => ['Admin']])->name('admin');

Route::get('/no-permission', 'App\Http\Controllers\DashboardController@showNP')->name('no-permission');




Route::get('users', 'App\Http\Controllers\UserController@index');
Route::get('changeStatus', 'App\Http\Controllers\UserController@changeStatus');
