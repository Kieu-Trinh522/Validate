<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
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


Route::middleware('auth')->prefix('customer')->group(function (){
    Route::get('/','CustomerController@index')->name('customer.index');
    Route::get('/add',[CustomerController::class,'create'])->name('customer.create');
    Route::post('/add',[CustomerController::class,'store'])->name('customer.store');
    Route::get('/edit/{id}',[CustomerController::class,'edit'])->name('customer.edit');
    Route::post('/edit/{id}',[CustomerController::class,'update'])->name('customer.update');
    Route::get('/delete/{id}',[CustomerController::class,'destroy'])->name('customer.destroy');
});
Route::prefix('login')->group(function (){
    Route::get('/',[LoginController::class,'index'])->name('login');
    Route::post('/login',[LoginController::class,'login'])->name('login.login');
});
Route::get('register',[RegisterController::class,'index'])->name('register.index');
Route::post('register',[RegisterController::class,'store'])->name('register.store');
