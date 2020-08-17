<?php

use Illuminate\Support\Facades\Route;

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

//Route::view('/', 'welcome')->name('home');

Route::layout('layouts.auth')->group(function () {
    Route::middleware('guest')->group(function () {
        Route::livewire('login', 'auth.login')
            ->name('login');

        Route::livewire('register', 'auth.register')
            ->name('register');
    });

    Route::livewire('password/reset', 'auth.passwords.email')
        ->name('password.request');

    Route::livewire('password/reset/{token}', 'auth.passwords.reset')
        ->name('password.reset');

    Route::middleware('auth')->group(function () {
        Route::livewire('email/verify', 'auth.verify')
            ->middleware('throttle:6,1')
            ->name('verification.notice');

        Route::livewire('password/confirm', 'auth.passwords.confirm')
            ->name('password.confirm');
    });
});

Route::middleware('auth')->group(function () {
    Route::get('email/verify/{id}/{hash}', 'Auth\EmailVerificationController')
        ->middleware('signed')
        ->name('verification.verify');

    Route::post('logout', 'Auth\LogoutController')
        ->name('logout');
});

Route::resource('users','UserController');
Route::resource('categories','CategoryController');
Route::resource('genres','GenreController');
Route::resource('posts','PostController');
Route::resource('comments','CommentController');
Route::get('comments/approve/{comment}','CommentController@approve')->name('comments.approve');

Route::get('/','PublicController@index');
Route::get('/category/{category}/posts','PublicController@getPostByCategory')->name('public.categoryPosts');
Route::get('/category/{category}/genre/{genre}/posts','PublicController@getPostsByGenre')->name('public.genrePosts');
Route::get('/post/{post}','PublicController@getPost')->name('public.post');
Route::post('/search','PublicController@search');
Route::get('/insertGenreDropdown','PublicController@insertGenreDropdown');


