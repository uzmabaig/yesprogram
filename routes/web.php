<?php

use App\Http\Controllers\Contactcontroller;
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
Route::get('/', function () {
    return view('register');
  });
  Route::match(['GET', 'POST'], 'registerSave', [UserController::class, 'register'])->name('registerSave');

  Route::view('login', 'login')->name('login');
Route::match(['GET', 'POST'], 'loginMatch', [UserController::class, 'login'])->name('loginMatch');
  



Route::view('index', 'index')->name('index');
Route::view('about', 'about')->name('about');
Route::view('media', 'media')->name('media');
Route::view('yesprogram', 'yesprogram')->name('yesprogram');
Route::view('contact', 'contact')->name('contact');

Route::match(['GET', 'POST'], 'contact/add', [Contactcontroller::class, 'add'])->name('add.contact');