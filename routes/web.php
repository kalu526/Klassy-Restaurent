<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
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



Route::get('/',[HomeController::class,'index']);
Route::get('/home',[HomeController::class,'create']);
Route::get('/users',[AdminController::class,'users']);
Route::get('/deleteuser/{id}',[AdminController::class,'deleteuser']);
Route::get('foodmenu',[AdminController::class,'foodmenu']);
Route::post('uploadmenu',[AdminController::class,'uploadmenu']);
Route::get('showfoodmenu',[AdminController::class,'showfoodmenu']);
Route::get('deletefood/{id}',[AdminController::class,'deletefood']);
Route::get('updatefood/{id}',[AdminController::class,'updatefood']);
Route::post('editfood/{id}',[AdminController::class,'editfood']);
Route::post('reservation',[HomeController::class,'reservation']);
Route::get('showreservation',[AdminController::class,'showreservation']);
Route::get('addchef',[AdminController::class,'addchef']);
Route::post('uploadchef',[AdminController::class,'uploadchef']);
Route::get('showchef',[AdminController::class,'showchef']);
Route::get('deletechef/{id}',[AdminController::class,'deletechef']);
Route::get('updatechef/{id}',[AdminController::class,'updatechef']);
Route::post('editchef/{id}',[AdminController::class,'editchef']);
Route::post('addcart/{id}',[HomeController::class,'addcart']);
Route::get('showcart/{id}',[HomeController::class,'showcart']);
Route::get('remove/{id}',[HomeController::class,'remove']);
Route::post('confirmorder',[HomeController::class,'confirmorder']);
Route::get('showorder',[AdminController::class,'showorder']);
Route::get('search',[AdminController::class,'search']);

Route::get('filter',[HomeController::class,'filter']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
