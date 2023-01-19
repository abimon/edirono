<?php

use App\Http\Controllers\viewsController;
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

Route::get('/projects', [viewsController::class, 'projects']);
Route::post('/reg_user', [dataController::class, 'reg_user']);
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
