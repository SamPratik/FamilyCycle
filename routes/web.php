<?php
use App\liveChat as liveChat;

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
        $liveChats = liveChat::all();
        return view('user.stages.after_birth', ['liveChats' => $liveChats]);
    })->name('user.after_birth');
    Route::get('after_marriage', function () {
        $liveChats = liveChat::all();
        return view('user.stages.after_marriage', ['liveChats' => $liveChats]);
    })->name('user.after_marriage');
    Route::get('planning', function () {
        $liveChats = liveChat::all();
        return view('user.stages.planning_before_pregnancy', ['liveChats' => $liveChats]);
    })->name('user.planning');
    Route::get('during_pregnancy', function () {
        $liveChats = liveChat::all();
        return view('user.stages.during_pregnancy', ['liveChats' => $liveChats]);
    })->name('user.during_pregnancy');
});

// Users Posts Routes
Route::resource('user/posts', 'User\PostController', [
  'names' => [
      'index' => 'user.posts.index',
      'store' => 'user.posts.store',
      'edit' => 'user.posts.edit',
      'update' => 'user.posts.update',
      'destroy' => 'user.posts.destroy'
  ],
  'except' => [
      'create', 'show'
  ]
]);

// User comment routes
Route::resource('user/comments', 'User\CommentController', [
  'names' => [
      'store' => 'user.comments.store',
      'edit' => 'user.comments.edit',
      'update' => 'user.comments.update',
      'destroy' => 'user.comments.destroy'
  ],
  'except' => [
      'index', 'show', 'create'
  ]
]);

// Live Chat Routes
Route::post('user/live_chat', 'User\LiveChatController@store')->name('user.live_chat.store');
