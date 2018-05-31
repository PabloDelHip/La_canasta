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

Route::get('/', ['as' => '/', 'uses' => 'Sitio@home']);
Route::get('menu', ['as' => 'menu', 'uses' => 'Sitio@menu']);
Route::get('galeria', ['as' => 'galeria', 'uses' => 'Sitio@galeria']);
Route::get('contactanos', ['as' => 'contactanos', 'uses' => 'Sitio@contactanos']);
Route::get('taquizas-y-eventos', ['as' => 'taquizas-y-eventos', 'uses' => 'Sitio@taquizas_y_eventos']);
