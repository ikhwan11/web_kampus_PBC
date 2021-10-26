<?php

namespace App\Controllers;

class Admin_dashboard extends BaseController
{
    public function index()
    {
        return view('back_end/dashboard');
    }
}
