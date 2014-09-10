<?php

Route::get('admin', [ 'as' => 'adminLogin', 'uses' => 'Admin\AuthController@getLogin' ]);