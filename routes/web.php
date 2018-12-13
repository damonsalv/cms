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
});

Route::get('/example', function (){
    echo "Hi there";
});

Route::get('/contact', function(){
    echo "Contact me here";
});

Route::get('/post/{id}/{name}', function($id,$name){

    return "This is post no ".$id." Name =".$name;

});

Route::get('/admin/report', array('as'=>'admin.home'), function(){

    $url=route("admin.home");
    return "This URL: is".$url;

});*/

//Route::get('/post','PostController@index');

//Route::get('/post/{id}','PostController@index');


Route::Resource('post', 'PostController');
