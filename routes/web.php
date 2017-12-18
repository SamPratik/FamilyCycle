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

################ User Routes#############
// Login Routes
Route::get('/login', function () {
    return view('auth.login');
});
Auth::routes();
// Dashboard
Route::get('/', 'HomeController@index')->name('user.home');
// Doctors Contact List Route
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
// 4 stages home routes for users
Route::prefix('user')->group(function () {
    Route::get('after_birth', 'User\StagesController@afterBirth')->name('user.after_birth');
    Route::get('after_marriage', 'User\StagesController@afterMarriage')->name('user.after_marriage');
    Route::get('planning', 'User\StagesController@planning')->name('user.planning');
    Route::get('during_pregnancy', 'User\StagesController@duringPregnancy')->name('user.during_pregnancy');
});
// After Birth Feature Routes
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




###################FuAmdin Routes#################
Route::prefix('fuadmin')->namespace('FuAdmin')->group(function() {
    Route::get('home', 'FuAdminController@index')->name('fuadmin.home');
    Route::get('login', 'FuAdminLoginController@showLoginForm')->name('fuadmin.login');
    Route::post('login', 'FuAdminLoginController@login')->name('fuadmin.login');
});
// 4 stages home routes for users
Route::prefix('fuadmin')->namespace('FuAdmin')->group(function () {
    Route::get('after_birth', 'StagesController@afterBirth')->name('fuadmin.after_birth');
    Route::get('after_marriage', 'StagesController@afterMarriage')->name('fuadmin.after_marriage');
    Route::get('planning', 'StagesController@planning')->name('fuadmin.planning');
    Route::get('during_pregnancy', 'StagesController@duringPregnancy')->name('fuadmin.during_pregnancy');
});
// After Birth Feature Routes
Route::prefix('fuadmin/after_birth/')->namespace('FuAdmin')->group(function() {
    Route::get('baby_nutrition', 'AfterBirthFeatureController@babyNutrition')->name('fuadmin.ab.babyNutrition');
    Route::get('mother_nutrition', 'AfterBirthFeatureController@motherNutrition')->name('fuadmin.ab.motherNutrition');
    Route::get('vaccination', 'AfterBirthFeatureController@vaccination')->name('fuadmin.ab.vaccination');
    Route::get('diseases', 'AfterBirthFeatureController@diseases')->name('fuadmin.ab.diseases');
    Route::get('photoAlbum', 'AfterBirthFeatureController@photoAlbum')->name('fuadmin.ab.photoAlbum');
    Route::get('guidelines', 'AfterBirthFeatureController@guidelines')->name('fuadmin.ab.guidelines');
    Route::get('calculators', 'AfterBirthFeatureController@calculators')->name('fuadmin.ab.calculators');
});
// Doctors Contact List Route
Route::get('fuadmin/contacts', function() {
  return view('fuadmin.contacts');
})->name('fuadmin.contacts');
// Routes for Editing After Birth Features
Route::prefix('fuadmin/edit')->namespace('FuAdmin')->group(function() {
    Route::get('baby_nutrition/{id}', 'AbFeatureEditController@babyNutrition')->name('fuadmin.edit.babyNutrition');
    Route::get('mother_nutrition/{id}', 'AbFeatureEditController@motherNutrition')->name('fuadmin.edit.motherNutrition');
    Route::get('vaccination/{id}', 'AbFeatureEditController@vaccination')->name('fuadmin.edit.vaccination');
});
// Routes for Updating After Birth Features
Route::prefix('fuadmin/update')->namespace('FuAdmin')->group(function() {
    Route::put('baby_nutrition/{id}', 'AbFeatureUpdateController@babyNutrition')->name('fuadmin.update.babyNutrition');
    Route::put('mother_nutrition/{id}', 'AbFeatureUpdateController@motherNutrition')->name('fuadmin.update.motherNutrition');
    Route::put('vaccination/{id}', 'AbFeatureUpdateController@vaccination')->name('fuadmin.update.vaccination');
});




####################Answerer Routes####################
// Anwerer Dashboard
// Route::get('answerer/home', 'Answerer\AnswererController@index')->name('answerer.home');
// Login Routes
Route::prefix('answerer')->namespace('Answerer')->group(function() {
    Route::get('login', 'AnswererLoginController@showLoginForm')->name('answerer.login');
    Route::post('login', 'AnswererLoginController@login')->name('answerer.login');
});
// Answerer Messages Routes
Route::prefix('answerer')->namespace('Answerer')->group(function() {
  Route::get('messages', 'AnswererController@messages')->name('answerer.messages');
  Route::get('full_message/{id}', 'AnswererController@fullMessage')->name('answerer.fullMessage');
  Route::get('message_load/{id}', 'AnswererController@messageLoad')->name('answerer.messageLoad');
  Route::post('message_submit', 'AnswererController@messageSubmit')->name('answerer.messageSubmit');
});
