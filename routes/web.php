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

// Doctors Contact List Route: User
Route::get('user/contacts', function() {
  if(empty($_COOKIE['uni_id'])) {
    $uni_id = uniqid();
    $uId = setcookie('uni_id', $uni_id, time()+2592000);
  } else {
    $uId = $_COOKIE['uni_id'];
  }
  $liveChats = liveChat::where('user_id', $uId)->get();
  return view('user.contacts', ['liveChats' => $liveChats]);
})->name('user.contacts');

// 4 stages home routes for users: User
Route::prefix('user')->group(function () {
    Route::get('after_birth', function () {
        if(empty($_COOKIE['uni_id'])) {
          $uni_id = uniqid();
          $uId = setcookie('uni_id', $uni_id, time()+2592000);
        } else {
          $uId = $_COOKIE['uni_id'];
        }
        $liveChats = liveChat::where('user_id', $uId)->get();
        return view('user.stages.after_birth', ['liveChats' => $liveChats]);
    })->name('user.after_birth');
    Route::get('after_marriage', function () {
        if(empty($_COOKIE['uni_id'])) {
          $uni_id = uniqid();
          $uId = setcookie('uni_id', $uni_id, time()+2592000);
        } else {
          $uId = $_COOKIE['uni_id'];
        }
        $liveChats = liveChat::where('user_id', $uId)->get();
        return view('user.stages.after_marriage', ['liveChats' => $liveChats]);
    })->name('user.after_marriage');
    Route::get('planning', function () {
        if(empty($_COOKIE['uni_id'])) {
          $uni_id = uniqid();
          $uId = setcookie('uni_id', $uni_id, time()+2592000);
        } else {
          $uId = $_COOKIE['uni_id'];
        }
        $liveChats = liveChat::where('user_id', $uId)->get();
        return view('user.stages.planning_before_pregnancy', ['liveChats' => $liveChats]);
    })->name('user.planning');
    Route::get('during_pregnancy', function () {
        if(empty($_COOKIE['uni_id'])) {
          $uni_id = uniqid();
          $uId = setcookie('uni_id', $uni_id, time()+2592000);
        } else {
          $uId = $_COOKIE['uni_id'];
        }
        $liveChats = liveChat::where('user_id', $uId)->get();
        return view('user.stages.during_pregnancy', ['liveChats' => $liveChats]);
    })->name('user.during_pregnancy');
});

// Users Posts Routes: User
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

// User comment routes: User
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

// Live Chat Routes: User
Route::post('user/live_chat', 'User\LiveChatController@store')->name('user.live_chat.store');
Route::get('user/live_chat', 'User\LiveChatController@index')->name('user.live_chat.index');
