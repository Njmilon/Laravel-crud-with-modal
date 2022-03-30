<?php

use App\Http\Controllers\CrudController;
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

Route::get('/',[CrudController::class,'index'])->name('crud.index');
Route::post('/create',[CrudController::class,'create'])->name('crud.create');
Route::get('/edit/{id}',[CrudController::class,'edit'])->name('crud.edit');
Route::put('/update/{id}',[CrudController::class,'update'])->name('crud.update');
Route::get('/destroy/{id}',[CrudController::class,'destroy'])->name('crud.destroy');

