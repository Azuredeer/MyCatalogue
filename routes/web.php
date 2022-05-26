<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PustakaController;
use Illuminate\Support\Facades\Auth;

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
    return view('welcome');
});

Route::redirect('/', '/dashboard');

Route::get('/dashboard', function () {
    return view('dashboard');
});

// input data
Route::post('/Pustaka', [PustakaController::class, 'store'])->name('Pustaka');

Route::get('/Pustaka', [PustakaController::class, 'index']);

// Route::get('/delete/{id}', [PustakaController::class, 'delete'])->name('delete');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');