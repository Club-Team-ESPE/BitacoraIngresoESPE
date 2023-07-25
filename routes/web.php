<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/', function () {
    return view('welcome');
});

Route::get('/index1', function () {
    return view('welcome');
});

Route::get('/binnacle', function () {
    return view('binnacle');
});

Route::get('/vehicles', function () {
    return view('vehicles');
});

Route::get('/pendings', function () {
    return view('pendings');
});

Route::get('/reports', function () {
    return view('reports');
});




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
