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

Route::get('/', [
  'uses' => 'FrontController@index',
  'as' => 'front.index'
]);

Route::get('categories/{name}', [
  'uses' => 'FrontController@searchCategory',
  'as' => 'front.search.category'
]);

Route::get('tags/{name}', [
  'uses' => 'FrontController@searchTag',
  'as' => 'front.search.tag'
]);

Route::get('article/{id}', [
  'uses' => 'FrontController@viewArticle',
  'as' => 'front.view.article'
]);

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function() {

  Route::get('/', ['as' => 'admin.index', function () {
      return view('admin.index');
  }]);

  Route::group(['middleware' => 'admin'], function(){
    Route::resource('users','UsersController');
    Route::get('users/{id}/destroy', [
      'uses' => 'UsersController@destroy',
      'as' => 'admin.users.destroy'
    ]);
  });

  Route::resource('categories','CategoriesController');
  Route::get('categories/{id}/destroy', [
    'uses' => 'CategoriesController@destroy',
    'as' => 'admin.categories.destroy'
  ]);
  Route::resource('tags','TagsController');
  Route::get('tags/{id}/destroy', [
    'uses' => 'TagsController@destroy',
    'as' => 'admin.tags.destroy'
  ]);
  Route::resource('articles','ArticlesController');
  Route::get('articles/{id}/destroy', [
    'uses' => 'ArticlesController@destroy',
    'as' => 'admin.articles.destroy'
  ]);
  Route::get('images', [
    'uses' => 'ImagesController@index',
    'as' => 'admin.images.index'
  ]);
});

//Route::get('auth/login', 'HomeController@getLogin');
//Route::post('auth/login', 'HomeController@postLogin');
//Route::get('auth/logout', 'HomeController@getLogout');

/*
Route::get('articles/{nombre?}', function($nombre = "No hay nombre") {
    echo "El nombre que has colocado es: " . $nombre;
});

Route::get('articles', [
  'as' => 'articles',
  'use' => 'UserController@index'
]);

Route::group(['prefix' => 'articles'], function() {
  Route::get('view/{article?}', function($article = "Vacio") {
      echo $article;
  });
  Route::get('view/{id}',[
    'uses' => 'TestController@view',
    'as' => 'articlesView'
  ]);
});
*/

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
