<?php

use Illuminate\Support\Facades\Route;

// primero especifico que controlador voy a utilizar para enviarlo a la vista
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CursoController;
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

/* esto ya  no lo necesito asi por que hare uso del controlador */
// Route::get('/', function () {
//     // return view('welcome');
//     return "Bienvenido a la pagina principal";
// });
Route::get('/', HomeController::class);

/* lo pongo en array para decirle qu
que metodo ocupe en el controller */
Route::get('cursos/create', [CursoController::class, 'create'])->name('cursos.create');

Route::get('cursos/{id}', [CursoController::class, 'show'])->name('cursos.show');

Route::get('cursos', [CursoController::class, 'index'])->name('cursos.index');