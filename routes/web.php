<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\AnimalController;
use App\Http\Controllers\AdopcionController;
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
Route::get('/{id}', function ($id){
    return "Bienvenido a api :) usuario " . $id;
});



/*
 *
 * RUTAS DE USUARIO
 *
 * */
Route::get('/usuario', [UsuarioController::class, 'mostrarUsuarios'])
    ->name('users.mostrar');


Route::post('/usuario/{id}/destroy', [UsuarioController::class, 'deleteUsuarios'])
    ->name('users.destroy');

Route::post('/usuario/crear', [UsuarioController::class, 'addUsuario'])
    ->name('users.add');

Route::post('/usuario/modificar', [UsuarioController::class, 'modificarUsuario'])->name('users.modificar');

/*
 *
 * RUTAS DE ANIMAL
 *
 * */


Route::get('/animal', [AnimalController::class, 'mostrarAnimales'])
    ->name('animals.mostrar');


Route::post('/animal/{id}/destroy', [AnimalController::class, 'deleteAnimales'])
    ->name('animals.destroy');

Route::post('/animal/crear', [AnimalController::class, 'addAnimal'])
    ->name('animals.add');




/*
 *
 * RUTAS DE ADOPCION
 *
 * */


Route::get('/adopcion', [AdopcionController::class, 'mostrarAdopciones'])
    ->name('adopcion.mostrar');


Route::post('/adopcion/{id}/destroy', [AdopcionController::class, 'deleteAdopcion'])
    ->name('adopcion.destroy');

Route::post('/adopcion/crear', [AdopcionController::class, 'addAdopcion'])
    ->name('adopcion.add');
