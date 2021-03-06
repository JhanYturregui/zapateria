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

/*Route::get('/', function () {
    return view('welcome');
});*/

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

// Users routes
Route::get('usuarios', [
    'uses' => 'UserController@index',
    'as'  => 'index_users'
]);
Route::get('usuarios/crear', [
    'uses' => 'UserController@create',
    'as'  => 'create_user'
]);
Route::post('usuarios/crear', [
    'uses' => 'UserController@store',
    'as'  => 'create_user'
]);

// Roles routes
Route::get('roles', [
    'uses' => 'RoleController@index',
    'as'  => 'index_roles'
]);
Route::get('roles/crear', [
    'uses' => 'RoleController@create',
    'as'  => 'create_role'
]);
Route::post('roles/crear', [
    'uses' => 'RoleController@store',
    'as'  => 'create_user_type'
]);
Route::get('roles/{id}/editar', [
    'uses' => 'RoleController@edit',
    'as' => 'edit_role'
]);
Route::patch('roles/{id}/actualizar', [
    'uses' => 'RoleController@update',
    'as' => 'update_role'
]);
Route::post('roles/eliminar', [
    'uses' => 'RoleController@destroy',
    'as' => 'remove_role'
]);

// User types routes
Route::get('tipo_usuario', [
    'uses' => 'UserTypesController@index',
    'as'  => 'index_user_types'
]);
Route::get('tipo_usuario/crear', [
    'uses' => 'UserTypesController@create',
    'as'  => 'create_user_type'
]);
Route::post('tipo_usuario/crear', [
    'uses' => 'UserTypesController@store',
    'as'  => 'create_user_type'
]);
Route::get('tipo_usuario/{id}/editar', [
    'uses' => 'UserTypesController@edit',
    'as' => 'edit_user_type'
]);
Route::patch('tipo_usuario/{id}/actualizar', [
    'uses' => 'UserTypesController@update',
    'as' => 'update_user_type'
]);
Route::post('tipo_usuario/eliminar', [
    'uses' => 'UserTypesController@destroy',
    'as' => 'remove_user_type'
]);

// Person routes
Route::get('personas', [
    'uses' => 'PersonController@index',
    'as' => 'index_person'
]);
Route::get('personas/crear', [
    'uses' => 'PersonController@create',
    'as' => 'create_person'
]);
Route::post('personas/crear', [
    'uses' => 'PersonController@store',
    'as' => 'create_person'
]);
Route::get('personas/{dni}/ver', [
    'uses' => 'PersonController@show',
    'as' => 'show_person'
]);

// Sizes Routes
Route::get('tallas', [
    'uses' => 'SizeController@index',
    'as' => 'index_sizes'
]);
Route::get('tallas/crear', [
    'uses' => 'SizeController@create',
    'as' => 'create_size'
]);
Route::post('tallas/crear', [
    'uses' => 'SizeController@store',
    'as' => 'create_size'
]);
Route::get('tallas/{id}/editar', [
    'uses' => 'SizeController@edit',
    'as' => 'edit_size'
]);
Route::patch('tallas/{id}/actualizar', [
    'uses' => 'SizeController@update',
    'as' => 'update_size'
]);
Route::post('tallas/eliminar', [
    'uses' => 'SizeController@destroy',
    'as' => 'remove_size'
]);

// Brand Routes
Route::get('marcas', [
    'uses' => 'BrandController@index',
    'as' => 'index_brands'
]);
Route::get('marcas/crear', [
    'uses' => 'BrandController@create',
    'as' => 'create_brand'
]);
Route::post('marcas/crear', [
    'uses' => 'BrandController@store',
    'as' => 'create_brand'
]);
Route::get('marcas/{id}/editar', [
    'uses' => 'BrandController@edit',
    'as' => 'edit_brand'
]);
Route::patch('marcas/{id}/actualizar', [
    'uses' => 'BrandController@update',
    'as' => 'update_brand'
]);
Route::delete('marcas/{id}/eliminar', [
    'uses' => 'BrandController@destroy',
    'as' => 'remove_brand'
]);

/****** Models Routes ******/
Route::get('modelos', [
    'uses' => 'ModelController@index',
    'as' => 'index_models'
]);
Route::get('modelos/crear', [
    'uses' => 'ModelController@create',
    'as' => 'create_model'
]);
Route::post('modelos/crear', [
    'uses' => 'ModelController@store',
    'as' => 'create_model'
]);
Route::get('modelos/{id}/editar', [
    'uses' => 'ModelController@edit',
    'as' => 'edit_model'
]);
Route::patch('modelos/{id}/actualizar', [
    'uses' => 'ModelController@update',
    'as' => 'update_model'
]);
Route::delete('modelos/{id}/eliminar', [
    'uses' => 'ModelController@destroy',
    'as' => 'remove_model'
]);

/****** Colors Routes ******/
Route::get('colores', [
    'uses' => 'ColorController@index',
    'as' => 'index_colors'
]);
Route::get('colores/crear', [
    'uses' => 'ColorController@create',
    'as' => 'create_color'
]);
Route::post('colores/crear', [
    'uses' => 'ColorController@store',
    'as' => 'create_color'
]);
Route::get('colores/{id}/editar', [
    'uses' => 'ColorController@edit',
    'as' => 'edit_color'
]);
Route::patch('colores/{id}/actualizar', [
    'uses' => 'ColorController@update',
    'as' => 'update_color'
]);
Route::delete('colores/{id}/eliminar', [
    'uses' => 'ColorController@destroy',
    'as' => 'remove_color'
]);

/****** Lines Routes ******/
Route::get('lineas', [
    'uses' => 'LineController@index',
    'as' => 'index_lines'
]);
Route::get('lineas/crear', [
    'uses' => 'LineController@create',
    'as' => 'create_line'
]);
Route::post('lineas/crear', [
    'uses' => 'LineController@store',
    'as' => 'create_line'
]);
Route::get('lineas/{id}/editar', [
    'uses' => 'LineController@edit',
    'as' => 'edit_line'
]);
Route::patch('lineas/{id}/actualizar', [
    'uses' => 'LineController@update',
    'as' => 'update_line'
]);
Route::delete('lineas/{id}/eliminar', [
    'uses' => 'LineController@destroy',
    'as' => 'remove_line'
]);