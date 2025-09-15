<?php

use App\Http\Controllers\AutenticacionController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\DropController;
use App\Http\Controllers\InicioController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
*/

// RUTAS DE INICIO DE LA TIENDA
Route::get('/', [InicioController::class, 'index'])->name('inicio');

Route::get('/categorias/{id?}', [CategoriaController::class, 'index'])->name('categorias');
Route::get('/drops/{id?}', [DropController::class, 'index'])->name('drops');


// RUTAS DE AUTENTICACIÓN
Route::get('/iniciarSesion', [AutenticacionController::class, 'index'])->name('iniciarSesion');

Route::post('/autenticacion', [AutenticacionController::class, 'iniciarSesion'])->name('iniciarSesion.post');
Route::post('/cerrarSesion', [AutenticacionController::class, 'cerrarSesion'])->name('cerrarSesion.post');


// RUTA DE REDIRECCIÓN SEGÚN ROL
Route::get('/redireccion', function () {
    return redirect()->route('inicio');
})->middleware(['auth', 'rol.redireccion'])->name('redireccion');

// RUTAS PROTEGIDAS PARA EL USUARIO ADMINISTRADOR
Route::middleware(['auth', 'rol.redireccion'])->group(function () {
    Route::get('/administrador/inicio', function () {
        return view('administrador.inicio');
    })->name('admin.inicio');

    // RUTAS DE GESTIÓN DE CATEGORÍAS
    Route::get('/administrador/categorias', [CategoriaController::class, 'obtenerCategorias'])->name('categorias.obtenerCategorias');
    Route::post('/administrador/categorias', [CategoriaController::class, 'crearCategoria'])->name('categorias.crearCategoria');
    Route::put('/administrador/categorias/{id}', [CategoriaController::class, 'actualizarCategoria'])->name('categorias.actualizarCategoria');
    Route::patch('/administrador/categorias/{id}/desactivar', [CategoriaController::class, 'desactivarCategoria'])->name('categorias.desactivar');
    Route::get('/administrador/categorias/{id}', [CategoriaController::class, 'obtenerCategoriaPorId'])->name('categorias.obtenerCategoriaPorId');

    // RUTAS DE GESTION DE DROP
    Route::get('/administrador/drops', [DropController::class, 'obtenerDrops'])->name('drops.obtenerDrops');
    Route::post('/administrador/drops', [DropController::class, 'crearDrop'])->name('drops.crearDrop');
    Route::put('/administrador/drops/{id}', [DropController::class, 'actualizarDrop'])->name('drops.actualizarDrop');
    Route::patch('/administrador/drops/{id}/desactivar', [DropController::class, 'desactivarDrop'])->name('drops.desactivarDrop');
    Route::get('/administrador/drops/{id}', [DropController::class, 'obtenerDropPorId'])->name('drops.obtenerDropPorId');
});
