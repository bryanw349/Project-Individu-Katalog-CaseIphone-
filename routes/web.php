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

//Route::get('/', function () {
  //  return view('welcome');
//});

Route::group(['middleware' => ['guest']], function() {
    Route::get("/", "PageController@login")->name('login');
    Route::post("/login", "AuthController@checklogin");
});

Route::group(['middleware' => ['auth']], function() {
Route::get("/logout", "AuthController@checklogout");
Route::get("/user", "PageController@edituser");
Route::post("/updateuser", "PageController@updateuser");

Route::get("/home" , "PageController@home");
Route::get("/caseip" , "PageController@caseip");
Route::get("/message" , "PageController@message");
Route::get("/setting" , "PageController@setting");
Route::post("/save" , "PageController@savedata");
Route::get("/caseip/formadd" , "PageController@formaddcaseip");
Route::get("/caseip/edit/{id}", "PageController@editcaseip");
Route::post("/caseip/update/{id}", "PageController@updatecaseip");
Route::get("/caseip/delete/{id}", "PageController@deletecaseip");
});

Route::get("/catalog", "PageController@catalog");
Route::get("/catalog/search", "PageController@searchCatalog");
