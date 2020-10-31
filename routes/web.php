<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ThemeController;
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

Route::get('/admin', function () {
    return view('backend.master');
});
//Route::post('/', 'ThemeController@index')->name('admin.theme');
Route::post('/admin', [ThemeController::class,'index'])->name('admin.theme');
Route::get('/', [ThemeController::class,'front']);
