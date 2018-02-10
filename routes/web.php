<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/
/*
Route::get('/', function () {
    return view('welcome');
});*/
//Route::get('login','admincontroller@login');
//Route::post('loginpost','admincontroller@loginpost');
//Route::get('logout','admincontroller@logout');

Route::get('admin','admincontroller@index');
Route::get('addcat','catcontroller@addcategory');
Route::post('savecat','catcontroller@savecategory');
Route::get('editcat/{id}','catcontroller@editcategory');
Route::post('editcat/{id}','catcontroller@resavecategory');
Route::post('delete','catcontroller@destroy');
Route::get('showcat','catcontroller@showcategory');

Route::get('addadvt','advtcontroller@addadvt');
Route::post('saveadvt','advtcontroller@saveadvt');
Route::get('showadvt','advtcontroller@showadvt');
Route::get('editadvt/{id}','advtcontroller@editadvt');
Route::post('editadvt/{id}','advtcontroller@resaveadvt');
Route::post('deleteadvt','advtcontroller@deladvt');


Route::get('addproduct','productcontroller@addproduct');
Route::post('saveproduct','productcontroller@saveproduct');
Route::get('showprod','productcontroller@showproduct');
Route::get('gallery','productcontroller@gallery');
Route::get('editprod/{id}','productcontroller@editproduct');
Route::post('editprod/{id}','productcontroller@resaveproduct');
Route::post('deleteprod','productcontroller@deleteprod');

Route::get('login','usercontroller@login');
Route::post('loginpost','usercontroller@loginpost');
Route::get('logout','usercontroller@logout');
Route::post('forgotpass','usercontroller@forgotpassword');
Route::get('resetform','usercontroller@resetpasswordform');
//Route::get('header','homecontroller@header');

Route::get('/','homecontroller@index');
Route::get('single/{id}','homecontroller@singlepage');
Route::get('cart','homecontroller@cart');
Route::post('addtocart/{id}','homecontroller@addtocart');
Route::get('shop','homecontroller@shop');
Route::get('products','homecontroller@products');

Route::get('category/{id}','frontcategory@opencat');

Route::get('logins','customercontroller@login');
Route::get('register','customercontroller@register');
Route::post('adduser','customercontroller@adduser');
Route::post('userlogin','customercontroller@userlogin');
Route::get('logouts','customercontroller@logout');