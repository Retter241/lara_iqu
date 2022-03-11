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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


/*Route::get('/shop?{encoded_url}', function($encoded_url)
{
    return 'The URL is: '.rawurldecode($encoded_url);
})->where('encoded_url', '.*');*/

Route::get('/shop', [App\Http\Controllers\ProductController::class, 'index'])->middleware(App\Http\Middleware\StripEmptyParams::class)->name('home');
