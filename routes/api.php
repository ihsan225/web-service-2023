<?php

use App\Http\Controllers\UsersController;
use App\Http\Controllers\PostingController;
use App\Http\Controllers\KomentarController;
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
Route::get('/', function(){
    echo env('APP_NAME');
});

Route::get('/users',[UsersController::class,'index']);
Route::get('/users/{id}',[UsersController::class,'show']);
Route::post('/users',[UsersController::class,'store']);
Route::put('/users',[UsersController::class,'update']);
Route::delete('/users',[UsersController::class,'destroy']);

Route::get('/postings',[PostingController::class,'index']);
Route::get('/postings/{id}',[PostingController::class,'show']);
Route::post('/postings',[PostingController::class,'store']);
Route::put('/postings',[PostingController::class,'update']);
Route::delete('/postings',[PostingController::class,'destroy']);

Route::get('/komentars',[KomentarController::class,'index']);
Route::get('/komentars/{id}',[KomentarController::class,'show']);
Route::post('/komentars',[KomentarController::class,'store']);
Route::put('/komentars',[KomentarController::class,'update']);
Route::delete('/komentars',[KomentarController::class,'destroy']);

