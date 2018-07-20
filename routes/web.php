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

// Route::get('/', function () {
//     return view('welcome');
// });


//  Test Rout

Route::get('/' ,
[ 'uses'=>	'PagesController@index',
'as'=>'home',
]);


Route::get('/signup' ,
[ 'uses'=>	'AuthController@getSignup',
'as'=>'auth.signup',
]);

Route::post('/signup' ,
[ 'uses'=>	'AuthController@postSignup',
// 'as'=>'auth.signup',
]);

Route::get('/alert', function()
{

return redirect()->route('home')->with('info' ,' Sign in Successfully !');
});


// 
// Route::get('/' ,'PagesController@index');
Route::get('/services', 'PagesController@Services');
Route::get('/contact' ,'PagesController@contact');