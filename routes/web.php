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

------ THEA'S NOTES ------

// STATIC ROUTE
// An example of direct routing of pages
Route::get('/about', function () {
    return view('pages.about');
});

// DYNAMIC ROUTE
// An example of displaying a user id on a webpage. Takes $id as a parameter.
// The {id} in the url is taken as a parameter through the url
Route::get('/users/{id}', function ($id) {
    return 'This is user '.$id;
});

*/

// -------------------------------------- ACTUAL ROUTES FOR LOOKLEARN --------------------------------------

// HOME PAGE
Route::get('/', 'PagesController@index');

// ABOUT PAGE
Route::get('/about', 'PagesController@about');

// POSTS PAGE
//Route::get('/posts', 'PagesController@posts');

Route::resource('posts', 'PostsController');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/contacts', 'ContactsController@get');

Route::get('/chat', 'HomeController@chat');

Route::get('/conversation/{id}', 'ContactsController@getMessagesFor');

Route::post('/conversation/send', 'ContactsController@send');