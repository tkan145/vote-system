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

  Route::get('','VoteController@getIndex')->name('admin.index');
  // Route::get('', function () {
  //   return view('pages.index');
  // })->name('admin.index');

  Route::get('create-vote', function () {
    return view('pages.create-vote');
  })->name('admin.create');

  Route::post('create-vote',function(\Illuminate\Http\Request $request, \Illuminate\Http\Validation\Factory $validator){
    $valid = $validator->make($request->all(),[
      'title' => 'required|min:5',
    ]);

    if($valid->fails()){
      return redirect()->back()->withErrors($valid);
    }

    return redirect()-route('admin.index')->with('info','Post created, new Title: ' . $request->input('title'));
  })->name('admin.create');

  Route::get('edit/{id}', function ($id) {

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

    return view('pages.edit-vote',['post' => $post]);
  })->name('admin.edit');

  Route::post('admin/edit/', function (\Illuminate\Http\Request $request, \Illuminate\Http\Validation\Factory $validator) {
    $valid = $validator->make($request->all(),[
      'title' => 'required|min:5',
    ]);

    if($valid->fails()){
      return redirect()->back()->withErrors($valid);
    }

    return redirect()-route('admin.index')->with('info','Post edited, new Title: ' . $request->input('title'));
  })->name('admin.update');
});





