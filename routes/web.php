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

Route::get('/', function () {
    return view('pages.welcome');
});

Route::get('/signin', function () {
  return view('pages.signin');
})->name('auth.signin');

Route::get('/register', function () {
  return view('pages.register');
})->name('auth.register');

Route::get('/votes', function () {
  return view('pages.votes');
})->name('vote.voting');

Route::get('/about', function () {
  return view('pages.about');
})->name('other.about');

Route::get('votes/{id}',function($id){

  if($id == 1){
    $post = [
      'title' => 'Vote Title 1',
      'content' => 'this is the options list'
    ];
  }else {
    $post = [
      'title' => 'Vote Title 2',
      'content' => 'this is the options list'
    ];
  }
  return view('pages.vote', ['post' => $post]);
})->name('vote.page');

Route::group(['prefix' => 'admin'],function(){

  Route::get('',[
    'uses'  => 'VoteController@getIndex',
    'as'    => 'admin.index'
  ]);

  Route::get('create-vote', [
    'uses'  => 'VoteController@getAdminCreate',
    'as'    => 'admin.create'
  ]);

  Route::post('create-vote',[
    'uses'  => 'VoteController@postAdminCreate',
    'as'    => 'admin.create'
  ]);

  Route::get('edit/{id}',[
    'uses'  => 'VoteController@getAdminEdit',
    'as'    => 'admin.edit'
  ] );

  Route::get('delete/{id}',[
    'uses'  => 'VoteController@getAdminDelete',
    'as'    => 'admin.delete'
  ] );

  Route::post('admin/edit/', [
    'uses'  => 'VoteController@postAdminUpdate',
    'as'    => 'admin.update'
  ]);
});






Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
