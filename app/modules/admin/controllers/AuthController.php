<?php

namespace Admin;

class AuthController extends \BaseController {

    public function getLogin()
    {
        return \View::make('admin::hello2');
    }

}