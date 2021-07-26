<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentContoller;

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

Route::get('/',[StudentContoller::class,'showStudent'])->name('showStudent');
Route::get('addStudent',[StudentContoller::class,'addStudent'])->name('addStudent');
Route::post('/store',[StudentContoller::class,'store'])->name('store');
Route::get('/studentDelete/{id}',[StudentContoller::class,'studentDelete'])->name('studentDelete');

