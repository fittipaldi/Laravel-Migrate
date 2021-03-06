<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', ['uses' => 'HomeController@index', 'as' => 'home']);

Route::get('/cadastro.save', ['uses' => 'HomeController@index', 'as' => 'cadastro.save']);

Route::get('/welcome', function () {
    return view('welcome');
});


Route::get('pdf', function () {
    $pdf = PDF::loadView('pdf', array());
    return $pdf->download('invoice.pdf');
});