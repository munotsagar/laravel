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
/*$json = file_get_contents('php://input');
$obj = json_decode($json);
print_r($obj);*/

//print_r($_POST);
//echo "Here";
//exit;
Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', 'homeController@index');


Route::get('/xapi/statement', "StatementController@index");

Route::post('/xapi/statement', "StatementController@saveStatement");

Route::post('/xapi/statements', "StatementController@saveStatement");

Route::get('/test', "TestController@index");

Route::get('/headerAuth', ['uses' => 'headerAuthonticationController@index','middleware'=>'basicAuthontication']);

//Route::get('/headerAuth', "headerAuthonticationController@index");



