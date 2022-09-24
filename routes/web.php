<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Poll\PollController;

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
/*
Route::get('/', function () {
    return view('welcome');
});
Route::post('signup',  [AuthController::class, 'signUp']);
*/

Route::get('/', function () {
    return view('poll.home');
});
Route::get('/encuesta', function () {
    return view('poll.store');
})->name('encuesta');
Route::post('/poll',  [PollController::class, 'store']);


