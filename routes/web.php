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

/** With out Auth Controller */
Route::get('/' ,
[ 'uses'=>	'PagesController@index',
'as'=>'login',
]);


/** Auth Controller */
Route::get('/timeline' ,
[ 'uses'=>	'PagesController@index',
'as'=>'timeline',
]);



/** Sign up Controllers  */
Route::get('/signup' ,
[ 'uses'=>	'AuthController@getSignup',
'as'=>'auth.signup',
]);

Route::post('/signup' ,
[ 'uses'=>	'AuthController@postSignup',

]);
/** Sigin Controllers */

Route::get('/signin' ,
[ 'uses'=>	'AuthController@getSignin',
'as'=>'auth.signin',
]);

Route::post('/signin' ,
[ 'uses'=>	'AuthController@postSignin',
// 'as'=>'auth.signup',
]);

/** Sign out Controller */

Route::get('/signout' ,
[ 'uses'=>	'AuthController@getSignout',
'as'=>'auth.signout',
]);

/** Search Controller */
Route::get('/search','SearchController@GetSearchResult')->name('search.result');



/** Show profile Controller
 */
Route::get('/users/{username}','ProfileController@index')->name('profile.show');

/**Profile Update Controllers */

Route::get('/update','ProfileController@getProfile')->name('profile.update');
Route::post('/update','ProfileController@postProfile');


/**  showing  Friends  on friends Controller */
Route::get('/friends','friendsController@getIndex')->name('friends.index');

/** Adding A Friend On friends Controllers  */
Route::get('/add/{$username}','friendsController@getAdd')->name('friends.add');

// Route::get('/friendss/','friendsController@ss');


/** Status controller */
Route::post('/status', 'statusController@status')->name('status.post');


