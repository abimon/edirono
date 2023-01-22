<?php

use App\Http\Controllers\dataController;
use App\Http\Controllers\viewsController;
use Facade\FlareClient\View;
use Illuminate\Support\Facades\Auth;
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



Auth::routes();

Route::get('/', [viewsController::class, 'home']);
Route::get('/single', function(){
    return view('single');
});
Route::get('/contact', function(){
    return view('contact');
});

Route::get('/logout', function(){
    Auth::logout();
    return redirect('/');
});
Route::get('/projects/{name}', [viewsController::class, 'project']);
Route::get('/knits', [viewsController::class, 'knits']);
Route::get('/archs', [viewsController::class, 'archs']);

Route::middleware('checkSession')->group(function(){
    //views
    Route::get('/calendar', [viewsController::class, 'calendar']);
    Route::get('/dashboard', [viewsController::class, 'dashboard']);
    
    //CRUD
    Route::post('/addCategory',[dataController::class, 'addCategory']);
    Route::post('/addProject/{category}',[dataController::class, 'createproject']);
    Route::post('/editProject/{id}',[dataController::class, 'editProject']);
    Route::post('/deleteProject/{id}',[dataController::class, 'deleteProject']);
    Route::post('/addFiles',[dataController::class, 'addFiles']);
    Route::post('/createEvent',[dataController::class, 'createEvent']);
});