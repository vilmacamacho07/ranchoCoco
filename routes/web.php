<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Security\LoginController;

use App\Http\Controllers\UserController;
use App\Http\Controllers\WelcomeUserController;
use Illuminate\Http\Request;

use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Admin\MenuController;
use App\Http\Controllers\Admin\RolController;
use App\Http\Controllers\Admin\MenuRolController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\PermisoRolController;

use App\Http\Controllers\User\MedicinaController;
use App\Http\Controllers\User\GanadoController;
use App\Http\Controllers\User\AlimentoController;
use App\Http\Controllers\User\AlimentoUsoController;
use App\Http\Controllers\General\InventarioController;


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



//Ruta Login
Route::namespace('App\Http\Controllers\Security')->group(function () {
    
    Route::get('security/login', [LoginController::class,'index'])->name('login');
    Route::post('security/login', [LoginController::class,'login'])->name('login-post');
    Route::get('security/logout', [LoginController::class,'logout'])->name('auth_logout');
});


//Ruta-Index
Route::get('/', [HomeController::class,'index'])->name('inicio');


Route::group(['prefix'=>'admin','namespace'=>'Admin','middleware'=>['auth','superadmin']], function (){
    Route::get('',[AdminController::class,'index']);
    //rutas permisos
    Route::get('permission', [PermissionController::class,'index'])->name('permission');
    Route::get('permission/create', [PermissionController::class,'create'])->name('crear_permiso');
    Route::post('permission', [PermissionController::class,'store'])->name('guardar_permiso');
    Route::get('permission/{id}/editar', [PermissionController::class,'edit'])->name('editar_permiso');
    Route::put('permission/{id}', [PermissionController::class,'update'])->name('actualizar_permiso');
    Route::delete('permission/{id}', [PermissionController::class,'destroy'])->name('eliminar_permiso');
    // rutas menu
    Route::get('menu', [MenuController::class,'index'])->name('menu');
    Route::get('menu/create', [MenuController::class,'create'])->name('create_menu');
    Route::post('menu', [MenuController::class,'store'])->name('guardar_menu');
    Route::get('menu/{id}/editar', [MenuController::class,'edit'])->name('editar_menu');
    Route::put('menu/{id}', [MenuController::class,'update'])->name('actualizar_menu');
    Route::get('menu/{id}/eliminar', [MenuController::class,'destroy'])->name('eliminar_menu');
    Route::post('menu/guardar-orden', [MenuController::class,'guardarOrden'])->name('guardar_orden');
    //rutas rol
    Route::get('role', [RolController::class,'index'])->name('role');
    Route::get('role/create', [RolController::class,'create'])->name('create_role');
    Route::post('role', [RolController::class,'store'])->name('guardar_role');
    Route::get('role/{id}/editar', [RolController::class,'edit'])->name('editar_role');
    Route::put('role/{id}', [RolController::class,'update'])->name('actualizar_role');
    Route::delete('role/{id}', [RolController::class,'destroy'])->name('eliminar_role');
    //rutas menu-rol
    Route::get('menu-rol', [MenuRolController::class,'index'])->name('menu_rol');
    Route::post('menu-rol', [MenuRolController::class,'store'])->name('guardar_menu_rol');
    //rutas permiso-rol
    Route::get('permiso-rol',  [PermisoRolController::class,'index'])->name('permiso_rol');
    Route::post('permiso-rol',  [PermisoRolController::class,'store'])->name('guardar_permiso_rol');
});


Auth::routes();

Route::group(['prefix'=>'user','namespace'=>'User','middleware'=>['auth','superuser']], function (){
    Route::get('',[UserController::class,'index']);
    // rutas ganado
    Route::get('ganado', [GanadoController::class,'index'])->name('ganado');
    Route::get('ganado/create', [GanadoController::class,'create'])->name('create_ganado');
    Route::post('ganado', [GanadoController::class,'store'])->name('guardar_ganado');
    Route::get('ganado/{id}/editar', [GanadoController::class,'edit'])->name('editar_ganado');
    Route::put('ganado/{id}', [GanadoController::class,'update'])->name('actualizar_ganado');
    Route::delete('ganado/{id}', [GanadoController::class,'destroy'])->name('eliminar_ganado');

    // rutas medicina
    Route::get('medicina', [MedicinaController::class,'index'])->name('medicina');
    Route::get('medicina/create', [MedicinaController::class,'create'])->name('create_medicina');
    Route::post('medicina', [MedicinaController::class,'store'])->name('guardar_medicina');
    Route::get('medicina/{id}/editar', [MedicinaController::class,'edit'])->name('editar_medicina');
    Route::put('medicina/{id}', [MedicinaController::class,'update'])->name('actualizar_medicina');
    Route::delete('medicina/{id}', [MedicinaController::class,'destroy'])->name('eliminar_medicina');

    // rutas alimento compras
    Route::get('alimento', [AlimentoController::class,'index'])->name('alimento');
    Route::get('alimento/create', [AlimentoController::class,'create'])->name('create_alimento');
    Route::post('alimento', [AlimentoController::class,'store'])->name('guardar_alimento');
    Route::get('alimento/{id}/editar', [AlimentoController::class,'edit'])->name('editar_alimento');
    Route::put('alimento/{id}', [AlimentoController::class,'update'])->name('actualizar_alimento');
    Route::delete('alimento/{id}', [AlimentoController::class,'destroy'])->name('eliminar_alimento');

    // rutas alimento uso
    Route::get('alimentoU', [AlimentoUsoController::class,'index'])->name('alimentoU');
    Route::get('alimentoU/create', [AlimentoUsoController::class,'create'])->name('create_alimentoU');
    Route::post('alimentoU', [AlimentoUsoController::class,'store'])->name('guardar_alimentoU');
    Route::get('alimentoU/{id}/editar', [AlimentoUsoController::class,'edit'])->name('editar_alimentoU');
    Route::put('alimentoU/{id}', [AlimentoUsoController::class,'update'])->name('actualizar_alimentoU');
    Route::delete('alimentoU/{id}', [AlimentoUsoController::class,'destroy'])->name('eliminar_alimentoU');

});

//Rutas inventario
Route::get('inventario', [InventarioController::class,'index'])->name('inventario')->middleware('auth');

