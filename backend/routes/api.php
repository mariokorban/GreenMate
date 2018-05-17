<?php


Route::group([

    'middleware' => 'api'

], function ($router) {

    Route::post('login', 'AuthController@login');
    Route::post('signup', 'AuthController@signup');
    Route::post('logout', 'AuthController@logout');
    Route::post('refresh', 'AuthController@refresh');
    Route::get('me', 'AuthController@me');
    Route::post('insertPost', 'PostController@insertPost');
    Route::get('getPosts', 'PostController@getPosts');
    Route::post('getUserPosts', 'PostController@getUserPosts');
    Route::post('getUserInfo', 'UserController@getUserInfo');
    Route::post('firePost', 'FireController@firePost');
    Route::post('getFires', 'FireController@getFires');
    Route::post('commentPost', 'CommentController@commentPost');
    Route::post('getComments', 'CommentController@getComments');
    
    
});
