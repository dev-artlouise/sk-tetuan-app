<?php
use App\Http\Controllers\DashBoardController;
use App\Http\Controllers\YouthController;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/dashboard', 'App\Http\Controllers\DashBoardController@index');

Route::get('/youth', 'App\Http\Controllers\YouthController@index');
Route::get('/youth/create', 'App\Http\Controllers\YouthController@create');
Route::post('/youth', 'App\Http\Controllers\YouthController@store');

// Route::middleware('auth:api')->group( function () {
//     Route::resource('youth', 'YouthController');
// });