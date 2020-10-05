<?php

use App\Http\Controllers\UserController;
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


# FIRST PARAMETER IS URL , SECOND PARAMETER IS CONTROLLER
Route::get('/' , [UserController::class, 'index'])->name('user.index');
Route::get('/create-user' , [UserController::class, 'create'])->name('user.create');
Route::post('/create-user' , [UserController::class, 'store'])->name('user.store');
# VIEW EDIT
Route::get('/{id}/edit' , [UserController::class , 'edit'])->name('user.edit');
# SUBMIT EDIT
Route::put('/{id}/edit' , [UserController::class , 'update'])->name('user.update');
# DELETE
Route::delete('/{id}/delete' , [UserController::class , 'delete'])->name('user.delete');
# TEST CONTROLLER
Route::get('/test' , [UserController::class, 'test'])->name('user.test');
