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


Route::get('/plugins', 'App\Http\Controllers\PluginsController@show')->name('plugins');
Route::get('/ascend', 'App\Http\Controllers\AscendController@show')->name('ascend');
Route::get('/creation', 'App\Http\Controllers\CreationController@show')->name('creation');
Route::get('/echo', 'App\Http\Controllers\EchoController@show')->name('echo');
Route::get('/reflection', 'App\Http\Controllers\ReflectionController@show')->name('reflection');
Route::get('/sky', 'App\Http\Controllers\SkyController@show')->name('sky');
Route::get('/space', 'App\Http\Controllers\SpaceController@show')->name('space');
Route::get('/storm', 'App\Http\Controllers\StormController@show')->name('storm');

Route::get('/packs', 'App\Http\Controllers\PacksController@show')->name('packs');
Route::get('/community', 'App\Http\Controllers\CommunityController@show')->name('community');

Route::get('/community', function () {
    $presets = App\Models\Presets::take(3)->latest()->get();

    return view('community', [
        'presets' => $presets
    ]);
})->name('community');
Route::get('community/create', 'App\Http\Controllers\CommunityController@create')->name('upload_preset');
// Route::get('community/{presets}', 'App\Http\Controllers\CommunityController@show');


Route::get('/support', 'App\Http\Controllers\SupportController@show')->name('support');
Auth::routes();

Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');
Route::get('/account', [App\Http\Controllers\DashboardController::class, 'show'])->name('account');
