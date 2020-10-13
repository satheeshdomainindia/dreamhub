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
Route::get('git', [App\Http\Controllers\GitController::class, 'index']);

Route::get('cloudhub', [App\Http\Controllers\GitController::class, 'cloudhub']);

Route::get('test', [App\Http\Controllers\TestController::class, 'cloudhub']);

Route::get('/', [App\Http\Controllers\PageController::class, 'index']);

Route::get('/products-cloud-hosting.html', [App\Http\Controllers\PageController::class, 'cloudHosting']);

Route::get('/products-cloud-servers.html',[App\Http\Controllers\PageController::class, 'cloudServer']);

Route::get('/products-dedicated-cloud.html',[App\Http\Controllers\PageController::class, 'dedicatedCloud']);

Route::get('/products-block-storage.html',[App\Http\Controllers\PageController::class, 'blockStorage']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
