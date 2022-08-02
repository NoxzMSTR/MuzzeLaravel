<?php

use App\Http\Controllers\Main\PagesController;
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

Route::get('/', [ PagesController::class, 'index'])->name('home');
Route::get('/404', [ DasboardController::class, 'pageNotFound'])->name('pageNotFound');
