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
Route::get('/plugins/reflection', 'App\Http\Controllers\PluginsController@showReflection')->name('reflection');
Route::get('/plugins/sky', 'App\Http\Controllers\PluginsController@showSky')->name('sky');
Route::get('/plugins/space', 'App\Http\Controllers\PluginsController@showSpace')->name('space');
Route::get('/plugins/storm', 'App\Http\Controllers\PluginsController@showStorm')->name('storm');


//Packs
Route::get('/packs', 'App\Http\Controllers\PacksController@show')->name('packs');


//Community
// Route::get('/community', function () {
//     return view('community', [
//         'presets' => App\Models\Presets::take(5)->latest()->get()
//     ]);
// })->name('community');
Route::get('/community', 'App\Http\Controllers\CommunityController@index')->name('community');
Route::post('/community', 'App\Http\Controllers\CommunityController@store');
Route::get('/community/create', 'App\Http\Controllers\CommunityController@create')->name('upload_preset');



// Route::get('/community', 'App\Http\Controllers\CommunityController@show')->name('community');
// Route::get('/community', function () {
//     $presets = App\Models\Presets::take(3)->latest()->get();

//     return view('community', [
//         'presets' => $presets
//     ]);

// })->name('community');
// Route::post('/community', 'App\Http\Controllers\CommunityController@store');
// Route::get('/community/create', 'App\Http\Controllers\CommunityController@create')->name('upload_preset');
// // Route::get('community/{presets}', 'App\Http\Controllers\CommunityController@show');
// Route::get('/community', 'App\Http\Controllers\CommunityController@show')->name('community');


//Support
Route::get('/support', 'App\Http\Controllers\SupportController@show')->name('support');


//Account
Auth::routes();
Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');
Route::get('/account', [App\Http\Controllers\DashboardController::class, 'show'])->name('account');