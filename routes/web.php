<?php

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

Route::view('/', 'inicio', ['nombre' => 'Sergio Andres'])->name('inicio');
 
// acceso a subcarpeta: proyectoFinal.cc/ventas
Route::get('ventas', function () {  // subruta
    return 'Esta es la página de ventas';
});
// acceso a subcarpeta: proyectoFinal.cc/detalles_devoluciones_ventas
Route::get('detalles_devoluciones_ventas', function () {  // subruta
    return 'Esta es la página de detalles devoluciones ventas';
 });
// acceso a subcarpeta: proyectoFinal.cc/pagos_clientes
Route::get('pagos_clientes', function () {  // subruta
    return 'Esta es la página de pagos clientes';
});
// acceso a subcarpeta: proyectoFinal.cc/clientes
Route::get('clientes', 'ClienteController@index')->name('cliente.index');
Route::get('/clientes/crear', 'ClienteController@create')->name('cliente.create');
Route::post('clientes', 'ClienteController@store')->name('cliente.store');
Route::get('clientes/{id}', 'ClienteController@show')->name('buscar-cliente');
Route::get('clientes/{id}/editar', 'ClienteController@edit')->name('editar-cliente');
Route::resource('cliente', 'ClienteController');
Route::delete('clientes/{id}', 'ClienteController@destroy')->name('eliminar-cliente');

// acceso a subcarpeta: proyectoFinal.cc/personal
Route::get('personal', function () {  // subruta
    return 'Esta es la página de personal';
});
// acceso a subcarpeta: proyectoFinal.cc/categorias_productos
Route::get('categorias_productos', function () {  // subruta
    return 'Esta es la página de categorias productos';
});
// acceso a subcarpeta: proyectoFinal.cc/devoluciones_ventas
Route::get('devoluciones_ventas', function () {  // subruta
    return 'Esta es la página de devoluciones ventas';
});
// acceso a subcarpeta: proyectoFinal.cc/pagos_proveedores
Route::get('pagos_proveedores', function () {  // subruta
    return 'Esta es la página de pagos proveedores';
});
// acceso a subcarpeta: proyectoFinal.cc/detalles_devoluciones_compras
Route::get('detalles_devoluciones_compras', function () {  // subruta
    return 'Esta es la página de detalles devoluciones compras';
 });
// acceso a subcarpeta: proyectoFinal.cc/productos
Route::get('productos', 'ProductoController@index')->name('producto.index');
Route::get('/productos/crear', 'ProductoController@create')->name('producto.create');
Route::post('productos', 'ProductoController@store')->name('producto.store');
Route::get('productos/{id}', 'ProductoController@show')->name('buscar-producto');
Route::get('productos/{id}/editar', 'ProductoController@edit')->name('editar-producto');
Route::resource('producto', 'ProductoController');
Route::delete('productos/{id}', 'ProductoController@destroy')->name('eliminar-producto');

// acceso a subcarpeta: proyectoFinal.cc/detalles_ventas
Route::get('detalles_ventas', function () {  // subruta
    return 'Esta es la página de detalles ventas';
});
// acceso a subcarpeta: proyectoFinal.cc/proveedores
Route::get('proveedores', function () {  // subruta
    return 'Esta es la página de proveedores';
});
// acceso a subcarpeta: proyectoFinal.cc/devoluciones_compras
Route::get('devoluciones_compras', function () {  // subruta
    return 'Esta es la página de devoluciones compras';
});
// acceso a subcarpeta: proyectoFinal.cc/presentaciones_productos
Route::get('presentaciones_productos', function () {  // subruta
    return 'Esta es la página de presentaciones productos';
});
// acceso a subcarpeta: proyectoFinal.cc/bajas_productos
Route::get('bajas_productos', function () {  // subruta
    return 'Esta es la página de bajas productos';
});
// acceso a subcarpeta: proyectoFinal.cc/detalles_compras
Route::get('detalles_compras', function () {  // subruta
    return 'Esta es la página de detalles compras';
});
// acceso a subcarpeta: proyectoFinal.cc/compras
Route::get('compras', function () {  // subruta
    return 'Esta es la página de compras';
});

// Gestion de usuarios
Route::get('login', 'Auth\LoginController@showLoginForm')
       ->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::get('logout', 'Auth\LoginController@logout')->name('logout');
Route::resource('usuarios', 'UsuariosController');
Route::get('roles-usuarios', function () {
    return \App\Role::with('user')->get();
 });