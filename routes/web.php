<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CursoController;

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

Route::get('/', HomeController::class);

// Route::get('cursos',[CursoController::class,'index']);

// Route::get('cursos/create', [CursoController::class,'create']);

// Route::get('cursos/{curso}', [CursoController::class,'show']);

// Route::controller(CursoController::class)->group(function(){
//     Route::get('cursos','index')->name('cursos.index');
//     Route::get('cursos/create', 'create')->name('cursos.create');
//     Route::post('cursos','store')->name('cursos.store');
//     Route::get('cursos/{curso}','show')->name('cursos.show');
//     // Route::get('cursos/{id}/edit','edit')->name('cursos.edit');
//     //name->Nombre de la ruta
//     //cursos/etc RUta
//     // 'edit'->Nombre de la funcion en en controlador 
//     //los enlaces por default apuntan al metodo get 
//     Route::get('cursos/{curso}/edit','edit')->name('cursos.edit');
//     Route::put('cursos/{curso}','update')->name('cursos.update');    //Laravel en el ambito de actualizar, recomienda que se utilice el metodo put en vez de post
//     Route::delete('cursos/{curso}','destroy')->name('cursos.destroy'); //Laravel en el ambito de eliminar, recomienda que se utilice el metodo delele en vez de post
// });

Route::resource('cursos',CursoController::class);
//video 22 //Nota->Se tiene que cambiar la url para que funcione claro
//http://localhost:8080/blog/public/cursos
//http://localhost:8080/blog/public/asignaturas         ok
//  Route::resource('asignaturas',CursoController::class)->parameters(["asignaturas"=>"curso"])->names("cursos");