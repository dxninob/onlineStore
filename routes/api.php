<?php

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

Route::get('/computers', 'App\Http\Controllers\Api\ComputerApi@index')->name("api.computer.index");
Route::get('/computers/paginate', 'App\Http\Controllers\Api\ComputerApi@paginate')->name("api.computer.paginate");
