<?php

use App\Http\Controllers\Dashboard\ClientesController;
use App\Http\Controllers\Dashboard\EtiquetasController;
use App\Http\Controllers\Dashboard\FacturasController;
use App\Http\Controllers\Dashboard\OrganizacionesController;
use App\Http\Controllers\Dashboard\PlanesController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard\ParametrosController;
use App\Http\Controllers\Dashboard\UsuariosController;
use App\Http\Controllers\Chat\ChatController;
use App\Http\Controllers\FCM\FcmController;

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

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
    'user.admin',
    'user.estatus',
    'user.permisos'
])->prefix('/dashboard')->group(function (){

    Route::get('fcm', [FcmController::class, 'index'])->name('fcm.index');

    Route::get('parametros', [ParametrosController::class, 'index'])->name('parametros.index');
    Route::get('usuarios', [UsuariosController::class, 'index'])->name('usuarios.index');
    Route::get('export/usuarios/{buscar?}', [UsuariosController::class, 'export'])->name('usuarios.excel');

    Route::get('clientes', [ ClientesController::class, 'index'])->name('clientes.index');
    Route::get('etiquetas', [EtiquetasController::class, 'index'])->name('etiquetas.index');
    Route::get('etiquetas/{id}', [EtiquetasController::class, 'printEtiqueta'])->name('etiquetas.print');
    Route::get('etiquetas/{id}/consultar', [EtiquetasController::class, 'webEtiqueta'])->name('etiquetas.web');

});

Route::get('dashboard/perfil', [UsuariosController::class, 'perfil'])->middleware('auth')->name('usuarios.perfil');
Route::get('chat-directo/{id?}', [ChatController::class, 'index'])->middleware(['user.android'])->name('chat.directo');

Route::get('etiquetas/{id}/consultar', [EtiquetasController::class, 'webEtiqueta'])->name('etiquetas.web');

