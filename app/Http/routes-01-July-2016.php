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

/*interface BarInterface{

}

class Bar implements BarInterface{}

class SecondBar implements BarInterface{}

App:bind('BarInterface', 'Bar');*/

Route::get('tags/{tags}', 'TagController@show');

Route::get('/serviceContainer', 'ServiceContainerController@serviceContainer');

Route::get('bar', function (BarInterface $bar){
    dd($bar);
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/foo', function (){
    return "Bar";
});
Route::get('foo/bar', function () {
    return 'Hello World';
});
/*Route::get('/articles', 'ArticlesController@index');

Route::get('/articles/create', 'ArticlesController@create');

Route::get('/articles/{id}', 'ArticlesController@show');

Route::post('/articles/', 'ArticlesController@store');*/

/*Route::get('/', function(){

    return "Laravel Here";
});*/
Route::get('/contact', 'WelcomeController@contact');

Route::get('/about', 'WelcomeController@about');

/*Route::filter('auth.basic', function()
{
    return Auth::basic("username");
});*/

Route::get('/authtest', array('middleware' => 'auth.basic', function()
{
    return View::make('welcome');

}));

Route::get('authtestsagar', ['uses' => 'WelcomeController@about','middleware'=>'simpleauth']);


//Route::get('api/v1', 'UrlController@index');


Route::get('/api/v1/url', 'UrlController@createForm');
/*Route::group(['prefix' => 'api/v1'], function () {
    Route::get('url', 'UrlController@store');
});*/

Route::post('/api/v1/url', ['uses' => 'UrlController@store','middleware'=>'simpleauth']);

Route::auth();

Route::get('/home', 'HomeController@index');

Route::get('api/todo', ['uses' => 'TodoController@index','middleware'=>'simpleauth']);

Route::post('api/todo', ['uses' => 'TodoController@store','middleware'=>'simpleauth']);

Route::resource('/articles', 'ArticlesController');

Route::resource('/blog', 'BlogController');

Route::get('managercheck', ['middleware'=>'manager', function(){

    return response()->json(['name' => 'Abigail', 'state' => 'CA']);
}]);

Route::get('test', function(){
    echo '<form method = "POST" action = "test">';
    echo '<input type = "submit">';
    echo '<input type = "hidden" value = "POST" name = "_method">';
    echo '<input type="hidden" name="_token" value="{{ csrf_token() }}">';
    echo '</form>';
});

Route::post('test', function(){
    echo "In POST";
});

Route::put('test', function(){
    echo "In PUT";
});

Route::delete('test', function(){
    echo "In DELETE";
});

