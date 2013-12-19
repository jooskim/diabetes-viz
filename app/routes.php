<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::resource('/', 'MainController');
Route::resource('/bg', 'BGController');
Route::get('/bg/{from}/{to}', function($from, $to){

    if (preg_match('/[\d]{4}\-(0\d|[\d]{2})\-(0\d|[\d]{2})/', $from) && preg_match('/[\d]{4}\-(0\d|[\d]{2})\-(0\d|[\d]{2})/', $to)){
        return DB::select("SELECT * FROM BG WHERE createdDate >= date('".$from."') AND createdDate < date('".$to."')");
    }else{
        return "Invalid dates were entered";
    }


});