<?php

use Illuminate\Support\Facades\Route;
// use App\Htpp\Controllers\PlayController;
use App\Http\Controllers\PlayController;
use App\Http\Controllers\ClienteController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('user', 'UserController@index')->name('user');
// Route::get('/PlayHi-SNK', [PlayController::class, 'ver'])->name('play.index');
Route::get('/playCley', [PlayController::class,'ver'])->name('play.index');
// Route::view('/Contacto', 'contact')->name('contact.index');
Route::get('insert', [ClienteController::class, 'crear'])->name('create.index');
// Route::get('insert/store', [ClienteController::class, 'store'])->name('cliente.store');
Route::get('/editar/{id}', [ClienteController::class, 'editar'])->name('cliente.edit');
Route::post('insert/store', [ClienteController::class, 'store'])->name('cliente.store');

Route::get('/Contacto', [ClienteController::class, 'index'])->name('contact.index');
// Route::resource('/Contacto', ClienteController::class)->name('cliente.index');

Route::delete('/Contacto/{id}', [ClienteController::class, 'destroy'])->name('cliente.delete');
Route::put('/Contacto/{id}', [ClienteController::class, 'update'])->name('cliente.update');
// search
// Route::get('/Contacto', [ClienteController::class, 'index'])->name('cliente.search');




// ruta de recurso

// Route::resource('/Contacto', ClienteController::class);
