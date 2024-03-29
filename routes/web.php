<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Poll\PollController;
use App\Http\Controllers\Poll\DownloadController;
use App\Http\Controllers\Electric\ElectricController;
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

/**
 * volvo
 *
Route::get('/', function () {
    return view('welcome');
});
Route::post('signup',  [AuthController::class, 'signUp']);

 */


/**
 * volvo 2
 */
Route::get('/', function () {
    return view('electric.index');
});
Route::get('/thanks', function () {
    return view('electric.thanks', ['name' => 'name']);
});
Route::post('signup',  [ElectricController::class, 'signUp']);





/**
 * reto del arroz
 */
Route::prefix('arroz')->group(function () {
    Route::get('/', function () {
        return view('poll.home');
    })->name('arroz');
    Route::get('/encuesta', function () {
        return view('poll.store');
    })->name('encuesta');
    Route::post('store',  [PollController::class, 'store'])->name('arroz.store');

    Route::get('/download', DownloadController::class )->name('download');

});

