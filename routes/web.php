<?php

use App\Http\Controllers\NoveltyController;
use App\Http\Controllers\PendingTaskController;
use App\Models\Novelty;
use Illuminate\Support\Facades\DB;
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
Route::get('prueba', function () {
    return DB::select("select * from view_novelties;");

});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/index1', function () {
    return view('welcome');
});

// ****************** BITÁCORA NOVEDADES ******************
//RUTA PARA MOSTRAR NOVEDADES
Route::get('/binnacle', [NoveltyController::class,'index'])->name("binnacle.index");
//CREAR NUEVA NOVEDAD
Route::post('/binnacle/newBinnacle', [NoveltyController::class,'store'])->name("binacle.store");

// ****************** BITÁCORA CONSIGNAS ******************
//RUTA PARA MOSTRAR CONSIGNAS PENDIENTES
Route::get('/pendings', [PendingTaskController::class,'index'])->name("pendding.index");
//CREAR NUEVA CONSIGNA
Route::post('/pendings/newPending', [PendingTaskController::class,'store'])->name("pendding.store");


Route::get('/vehicles', function () {
    return view('vehicles');
});

Route::get('/reports', function () {
    return view('reports');
});




//Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
