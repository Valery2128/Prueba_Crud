<?php

use App\Http\Controllers\MarcaController;
use App\Http\Controllers\ModeloController;
use App\Http\Controllers\VentaController;
use Illuminate\Support\Facades\Route;
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
Route::resource('ventas',VentaController::class);
Route::resource('marcas',MarcaController::class);
Route::resource('modelo',ModeloController::class);
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/', function () {
    
    return view('welcome');

  });


// Route::get('/marca', function () {
//     return view('index.marca'); 
// });
// Route::get('/modelo', function () {
//    return view('index.modelo'); 
// });
// Route::get('/ventas', [App\Http\Controllers\VentaController::class, 'create']);
// Route::get('/ventas', [App\Http\Controllers\VentaController::class, 'create']);
// Route::get('/venta', function () {
//     return view('create.venta'); 
//  });
// Route::get('/venta', function () {
//     return view('create.venta'); 
// });


