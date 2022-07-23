<?php

use App\Http\Controllers\MainController;
use App\Http\Controllers\NeoEarthObjectController;
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

Route::get('/', [MainController::class, 'index'])->name('main.index');
Route::group(['prefix' => 'neo'], function () {
    Route::get('/hazardous', [NeoEarthObjectController::class, 'hazardous'])->name('neo.hazardous');
    Route::get('/fastest', [NeoEarthObjectController::class, 'fastest'])->name('neo.fastest');
});
