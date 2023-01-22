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
Route::post('signup',  [ElectricController::class, 'signUp']);
Route::get('signup2',  [ElectricController::class, 'signUp']);





/**
 * reto del arroz

Route::get('/', function () {
    return view('poll.home');
});
Route::get('/encuesta', function () {
    return view('poll.store');
})->name('encuesta');
Route::post('store',  [PollController::class, 'store']);

Route::get('/download', DownloadController::class )->name('download');

 *
 */

