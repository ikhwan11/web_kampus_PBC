<?php

namespace App\Controllers;

class Auth extends BaseController
{
    public function login()
    {
        return view('back_end/login');
    }
}
