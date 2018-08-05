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
        return view('vue1');
    });*/

// get param

    Route::get('{n}', function( $n ) { return 'je suis la page ' . $n . ' !'; })->where('n', '[1-3]');

// name route

    /*Route::get('/', ['as' => 'home', function(){
        return 'Je suis la page d\'accueil';
    }]);*/

// get php var

    /*Route::get('article/{n}', function( $n ){
        return view('article')->with('numero', $n);
        //return view('article')->withNumero( $n );
        //return view('article', [ 'numero' => $n ] );
    })->where('n', '[0-9]+');*/

    Route::get('facture/{n}', function ( $n ) {
        return view('facture')->with( 'numero', $n );
    });

// call controller

    //Route::get('/', 'WelcomeController@index');

// name controller route

    Route::get( '/', ['uses' => 'WelcomeController@index', 'as' => 'home'] );

    Route::get( 'article/{n}', 'ArticleController@show' )->where('n', '[0-9]+');

// Form route

    Route::get('users', 'UsersController@getInfos');
    Route::post('users', 'UsersController@postInfos');