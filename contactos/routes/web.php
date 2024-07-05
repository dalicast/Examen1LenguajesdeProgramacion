<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DirectoriosController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/directorios/mostrar',[DirectoriosController::class,'mostrarAll'])->name('directorios.mostrar');

Route::get('/directorios/agregar',[DirectoriosController::class,'vistaAgregar'])->name('directorios.agregar');

Route::get('/directorios/buscar',[DirectoriosController::class,'vistaBuscar'])->name('directorios.buscar');

Route::get('/directorios/{id}/contactos',[ContactosController::class,'vistaContactos'])->name('directorios.contactos');

Route::get('/directorios/{id}/eliminar',[DirectoriosController::class,'vistaEliminar'])->name('directorios.eliminar');

Route::get('/directorios/{id}/destroy',[DirectoriosController::class,'destroy'])->name('directorios.destroy');

Route::post('/directorios/guardar',[DirectoriosController::class,'guardar'])->name('directorios.guardar');

Route::get('/directorios/buscar/directorio',[DirectoriosController::class,'buscar'])->name('directorios.buscar.dir');

Route::get('/contactos/{id}//agregar',[ContactosController::class,'vistaAgregar'])->name('contactos.agregar');

Route::post('/contactos/guardar',[ContactosController::class,'guardarContacto'])->name('contactos.guardar');
