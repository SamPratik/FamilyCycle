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
Route::get('/login', function () {
    return view('auth.login');
});
Auth::routes();

Route::get('/', 'HomeController@index')->name('user.home');

Route::get('user/contacts', function() {
  return view('user.contacts');
})->name('user.contacts');

// 4 stages home routes for users
Route::prefix('user')->group(function () {
    Route::get('after_birth', function () {
        return view('user.stages.after_birth');
    })->name('user.after_birth');
    Route::get('after_marriage', function () {
        return view('user.stages.after_marriage');
    })->name('user.after_marriage');
    Route::get('planning', function () {
        return view('user.stages.planning_before_pregnancy');
    })->name('user.planning');
    Route::get('during_pregnancy', function () {
        return view('user.stages.during_pregnancy');
    })->name('user.during_pregnancy');
});

// Users Posts Routes
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

// User comment routes
Route::resource('user/comments', 'User\CommentController', [
  'names' => [
      'store' => 'user.comments.store',
      'edit' => 'user.comments.edit',
      'update' => 'user.comments.update',
      'destroy' => 'user.comments.destroy'
  ]
]);
