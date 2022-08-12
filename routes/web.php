<?php

use Illuminate\Support\Facades\Route;

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

    $tit_document = 'Mult-Documento';

    return view('index', [
      'tit_document' => $tit_document
    ]);
  });

  Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'as' => 'admin.'], function() {

    /* FORMULÁRIO DE LOGIN */
    Route::get('/', 'AuthController@showLoginForm')->name('login');
    Route::post('login', 'AuthController@login')->name('login.do');
    Route::post('access/store', 'UserController@store')->name('access.store');

    /* ROTAS PROTEGIDAS */
    Route::group(['middleware' => ['auth']], function() {

      /* ROTAS DASHBOARD */
      Route::get('home', 'AuthController@home')->name('home');

      /* ROTAS USER */
      Route::get('users', 'UserController@index')->name('users.index');
      Route::put('users/update/{id}', 'UserController@update')->name('users.update');
      Route::delete('users/destroy/{id}', 'UserController@destroy')->name('users.destroy');

      /* ROTAS USER */
      Route::get('documents', 'DocumentController@index')->name('documents.index');
      Route::post('documents/store', 'DocumentController@store')->name('documents.store');
      Route::put('documents/update/{id}', 'DocumentController@update')->name('documents.update');
      Route::delete('documents/destroy/{id}', 'DocumentController@destroy')->name('documents.destroy');
    });

    /* LOGOUT */
    Route::get('logout', 'AuthController@logout')->name('logout');
  });
