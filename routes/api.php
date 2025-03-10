<?php

use App\Http\Controllers\Work\WorkController;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware('work.feng')->any('/work',[WorkController::class,'GodWu']);

Route::middleware('Emmm')->any('/emmm',[WorkController::class,'Emmm']);
