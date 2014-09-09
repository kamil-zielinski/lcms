<?php
Route::get('/admin', [ 'as' => 'login', 'uses' => 'Admin\AuthController@getLogin' ]);