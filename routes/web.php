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


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/productos', 'ProductoController@list')->name('productos');

Route::get('/productosordenados/{campo}/{direccion}', 'ProductoController@listOrder')->name('productosOrdenados');

Route::get('/productos/{campo}', 'ProductoController@listCampo')->name('productosCampo');

Route::get('/detalleproducto/{id}', 'ProductoController@show')->name('detalleProducto');

Route::post('/suscribir', 'SuscriptorController@suscribir')->name('suscribir');

Route::post('/usuario/logout', "UserController@logout")->name('user.logout');

Route::get('/admin', "UserController@panelAdmin")->name('admin');

Route::get('/admin/productos/lista', "ProductoController@listAdmin")->name('listaProductosAdmin');

Route::get('/admin/productos/listanodisponibles', "ProductoController@listNoDisponiblesAdmin")->name('listaProductosNoDisponiblesAdmin');

Route::get('/admin/productos/listasinstock', "ProductoController@listProductosSinStock")->name('listaProductosSinStockAdmin');

Route::get('/admin/productos/agregar', "ProductoController@createReloj")->name('agregarProductoAdmin');

Route::post('/admin/productos/agregar', 'ProductoController@store')->name('guardarProducto');

Route::get('/admin/productos/editar/{id}', 'ProductoController@editarReloj')->name('editarReloj');

Route::put('/admin/productos/editar/{id}', 'ProductoController@updateReloj')->name('actualizarReloj');

Route::post('/admin/eliminarproducto', 'ProductoController@destroyReloj')->name('eliminarProductoAdmin');

Route::post('/admin/reestablecerproducto', 'ProductoController@reestablecerProducto')->name('reestablecerProducto');

Route::get('/admin/buscarProducto', 'ProductoController@crearBusqueda')->name('crearBusqueda');

Route::get('/admin/buscar', 'ProductoController@resultadosBusqueda')->name('resultadosBusqueda');

Route::get('/admin/usuarios/lista', "UserController@listAdmin")->name('listaUsuarios');

Route::get('/admin/Usuarios/agregar', 'UserController@createUser')->name('agregarUsuario');

Route::get('/admin/Usuarios/editar/{id}', 'UserController@editarUser')->name('editarUsuario');

Route::get('/admin/buscarUsuario', 'UserController@crearBusqueda')->name('crearBusquedaUsuario');

Route::get('/admin/resultadosbusquedausuarios', 'UserController@resultadosBusqueda')->name('resultadosBusquedaUsuarios');