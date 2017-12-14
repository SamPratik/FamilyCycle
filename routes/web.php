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
    Route::get('after_birth', 'User\StagesController@afterBirth')->name('user.after_birth');
    Route::get('after_marriage', 'User\StagesController@afterMarriage')->name('user.after_marriage');
    Route::get('planning', 'User\StagesController@planning')->name('user.planning');
    Route::get('during_pregnancy', 'User\StagesController@duringPregnancy')->name('user.during_pregnancy');
});

############# After Birth Feature Routes #################
Route::prefix('user/after_birth/')->namespace('User')->group(function() {
    Route::get('baby_nutrition', 'AfterBirthFeatureController@babyNutrition')->name('user.ab.babyNutrition');
    Route::get('mother_nutrition', 'AfterBirthFeatureController@motherNutrition')->name('user.ab.motherNutrition');
    Route::get('vaccination', 'AfterBirthFeatureController@vaccination')->name('user.ab.vaccination');
    Route::get('diseases', 'AfterBirthFeatureController@diseases')->name('user.ab.diseases');
    Route::get('photoAlbum', 'AfterBirthFeatureController@photoAlbum')->name('user.ab.photoAlbum');
    Route::get('guidelines', 'AfterBirthFeatureController@guidelines')->name('user.ab.guidelines');
    Route::get('calculators', 'AfterBirthFeatureController@calculators')->name('user.ab.calculators');
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
