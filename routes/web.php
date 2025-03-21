<?php

use App\Http\Controllers\CursoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
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

Route::get('/', HomeController::class)->name('home');

// Route::controller(CursoController::class)->group(function(){
//     Route::get('cursos', 'index')->name('cursos.index');
//     Route::post('cursos', 'store')->name('cursos.store');
//     Route::get('cursos/create', 'create')->name('cursos.create');
//     Route::get('cursos/{curso}', 'show')->name('cursos.show');
//     Route::get('cursos/{curso}/edit', 'edit')->name('cursos.edit');
//     Route::put('cursos/{curso}', 'update')->name('cursos.update');
//     Route::delete('cursos/{curso}', 'destroy')->name('cursos.destroy');
// });

Route::resource('cursos', CursoController::class); // Rutas de recursos
// Route::resource('asignaturas', CursoController::class)->only(['index', 'show']); // Solo rutas especificas
// Route::resource('asignaturas', CursoController::class)->except(['index', 'show']); // Todas las rutas excepto las especificadas
// Route::resource('asignaturas', CursoController::class)->names('cursos'); // Cambiar el nombre de la ruta
// Route::resource('asignaturas', CursoController::class)->parameter( 'asignaturas', 'curso')->names('cursos'); // Cambiar el nombre del parametro

Route::view('nosotros', 'nosotros')->name('nosotros'); 


// Route::get('cursos/{curso}/{categoria?}', function($curso, $categoria = null){
//     if($categoria){
//         return "Bienvenido al curso $curso, de la categoria $categoria";
//     }else{
//         return "Bienvenido al curso: $curso";
//     }
// });

