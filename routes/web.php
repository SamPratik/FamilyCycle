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

//****** User Routes ***********/
Route::get('/', function () {
    return view('auth.login');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('user.home');
Route::get('contacts', function() {
  return view('user.contacts');
})->name('user.contacts')->middleware('auth');

// 4 stages routes for users
Route::prefix('user')->group(function () {
    Route::get('after_birth', function () {
        return view('user.stages.after_birth');
    })->name('user.after_birth')->middleware('auth');
    Route::get('after_marriage', function () {
        return view('user.stages.after_marriage');
    })->name('user.after_marriage')->middleware('auth');
    Route::get('planning', function () {
        return view('user.stages.planning_before_pregnancy');
    })->name('user.planning')->middleware('auth');
    Route::get('during_pregnancy', function () {
        return view('user.stages.during_pregnancy');
    })->name('user.during_pregnancy')->middleware('auth');
    Route::get('contacts', function() {
      return view('user.contacts');
    })->name('user.contacts')->middleware('auth');
});

// Users After Birth Posts Routes
Route::resource('user/posts', 'User\PostController', [
  'names' => [
      'index' => 'user.posts.index',
      'create' => 'user.posts.create',
      'store' => 'user.posts.store',
      'edit' => 'user.posts.edit',
      'update' => 'user.posts.update',
      'destroy' => 'user.posts.destroy'
  ]
]);
